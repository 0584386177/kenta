-- BẢNG PHÂN QUYỀN NGƯỜI DÙNG
CREATE TABLE roles (
    role_id int AUTO_INCREMENT PRIMARY KEY,
    role_name varchar(50) NOT NULL
);

-- BẢNG THÔNG TIN NGƯỜI DÙNG
CREATE TABLE users(
    user_id int PRIMARY KEY AUTO_INCREMENT,
    username varchar(50) NOT NULL UNIQUE,
    password varchar(100) NOT NULL ,
    email varchar(100) NOT NULL UNIQUE,
    phone varchar(25) NOT NULL ,
    full_name varchar(255) NOT NULL,
    address TEXT,
    birthday DATE,
    role_id INT NOT NULL, -- Vai trò người dùng (id)
    create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (role_id) REFERENCES roles(role_id)
    
);


-- BẢNG DANH MỤC SẢN PHẢM
CREATE TABLE categories(
    category_id int PRIMARY KEY AUTO_INCREMENT,
    category_name varchar(255) NOT NULL,
    parent_id INT,
    is_active tinyint, -- (0 : không hiển thị , 1: hiển thị)
    create_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
     FOREIGN KEY (parent_id) REFERENCES categories(category_id)
);

-- BẢNG SẢN PHẨM
CREATE TABLE PRODUCT( 
    product_id int PRIMARY KEY AUTO_INCREMENT,
    product_name varchar(200) NOT NULL,
    product_sku varchar(100) NOT NULL,
    product_image varchar(255) NOT NULL,
    description TEXT,
    category_id INT NOT NULL, -- Tham chiếu đến id của danh mục sản phẩm tương ứng (Áo thể thao nam -> danh mục : áo,thể thao,nam)
    regular_price decimal(12,0),
    sale_price decimal(12,0),
    quantity_in_stock INT DEFAULT 0,
    status tinyint , -- (0 : Hàng chưa về , 1 : Hàng đang bán,2:Hàng giảm giá)
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (category_id) REFERENCES categories(category_id)
);
-- Bảng size
CREATE TABLE sizes (
    size_id INT PRIMARY KEY AUTO_INCREMENT,
    size_name VARCHAR(20) NOT NULL,
    size_code VARCHAR(10) NOT NULL
);
-- Bảng màu sắc sản phẩm (PRODUCT COLOR)
CREATE TABLE colors (
    color_id INT PRIMARY KEY AUTO_INCREMENT,
    color_name VARCHAR(50) NOT NULL,
    color_code VARCHAR(20)
);

-- Bảng PRODUCT_VARIANTS - Biến thể sản phẩm (kích cỡ, màu sắc)
CREATE TABLE product_variants (
    variant_id INT PRIMARY KEY AUTO_INCREMENT,
    product_id INT NOT NULL,
    size_id INT,
    color_id INT,
    sku VARCHAR(50) UNIQUE,
    quantity INT DEFAULT 0,
    price_adjustment DECIMAL(12,2) DEFAULT 0,
    is_active BOOLEAN DEFAULT TRUE,
    FOREIGN KEY (product_id) REFERENCES products(product_id),
    FOREIGN KEY (size_id) REFERENCES sizes(size_id),
    FOREIGN KEY (color_id) REFERENCES colors(color_id)
);

-- Bảng PRODUCT_IMAGES - Hình ảnh sản phẩm
CREATE TABLE product_images (
    image_id INT PRIMARY KEY AUTO_INCREMENT,
    product_id INT NOT NULL,
    image_url VARCHAR(255) NOT NULL,
    alt_text VARCHAR(255),
    is_primary BOOLEAN DEFAULT FALSE,
    display_order INT DEFAULT 0,
    FOREIGN KEY (product_id) REFERENCES products(product_id)
);
-- Bảng CARTS - Giỏ hàng
CREATE TABLE carts (
    cart_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    session_id VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);
-- Bảng CART_ITEMS - Chi tiết giỏ hàng
CREATE TABLE cart_items (
    cart_item_id INT PRIMARY KEY AUTO_INCREMENT,
    cart_id INT NOT NULL,
    variant_id INT NOT NULL,
    quantity INT NOT NULL DEFAULT 1,
    price_at_addition DECIMAL(12,2) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (cart_id) REFERENCES carts(cart_id),
    FOREIGN KEY (variant_id) REFERENCES product_variants(variant_id)
);

-- Bảng ORDERS - Đơn hàng
CREATE TABLE orders (
    order_id INT PRIMARY KEY AUTO_INCREMENT,
    user_id INT,
    order_number VARCHAR(50) UNIQUE NOT NULL, -- Mã đơn hàng (random)
    total_amount DECIMAL(12,2) NOT NULL, -- Tổng giá trị đơn hàng
    discount_amount DECIMAL(12,2) DEFAULT 0, -- Tổng giá trị đơn hàng ( đã giảm giá)
    shipping_fee DECIMAL(12,2) DEFAULT 0, -- phí vận chuyển
    tax_amount DECIMAL(12,2) DEFAULT 0, -- Thuế
    final_amount DECIMAL(12,2) NOT NULL, -- Tổng số tiền khách hàng cần thanh toán
    payment_method VARCHAR(50), 	-- Phương thức thanh toán (ví dụ: "credit_card", "paypal", "cod")
    payment_status VARCHAR(20) DEFAULT 'pending', -- Phương thức thanh toán (ví dụ: "credit_card", "paypal", "cod")
    shipping_address TEXT NOT NULL, -- ĐỊa chỉ giao hàng
    billing_address TEXT,
    phone_number VARCHAR(20) NOT NULL, -- SDT NGƯỜI ĐẶT
    email VARCHAR(100) NOT NULL, -- Email ngươi đặt
    full_name VARCHAR(100) NOT NULL, -- Họ và tên người đặt
    order_status VARCHAR(20) DEFAULT 'pending', -- Trạng thái xử lý đơn hàng ("pending", "processing", "shipped", "delivered", "cancelled")
    order_notes TEXT, -- Ghi chú về đơn hàng (từ khách hàng hoặc nhân viên)
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(user_id)
);

-- Bảng ORDER_ITEMS - Chi tiết đơn hàng
CREATE TABLE order_items (
    order_item_id INT PRIMARY KEY AUTO_INCREMENT,
    order_id INT NOT NULL,
    product_id INT NOT NULL,
    variant_id INT,
    product_name VARCHAR(200) NOT NULL,
    quantity INT NOT NULL,
    unit_price DECIMAL(12,2) NOT NULL,
    discount_amount DECIMAL(12,2) DEFAULT 0,
    subtotal DECIMAL(12,2) NOT NULL,
    FOREIGN KEY (order_id) REFERENCES orders(order_id),
    FOREIGN KEY (product_id) REFERENCES products(product_id),
    FOREIGN KEY (variant_id) REFERENCES product_variants(variant_id)
);

-- Bảng ORDER_STATUSES - Lịch sử trạng thái đơn hàng
CREATE TABLE order_statuses (
    status_id INT PRIMARY KEY AUTO_INCREMENT,
    order_id INT NOT NULL,
    status VARCHAR(50) NOT NULL,
    notes TEXT,
    created_by INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (order_id) REFERENCES orders(order_id),
    FOREIGN KEY (created_by) REFERENCES users(user_id)
);  