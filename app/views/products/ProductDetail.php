<div class="container mx-auto w-[83%] mt-4 mb-8 px-4">
    <div class="product-layout flex gap-[2rem] relative">
        <!-- Product Images - Left Column (Scrollable) -->
        <div class="product-images w-[60%] h-[100%]">


            <!-- Product images -->
            <div class="space-y-6">
                <div id="image1">
                    <img src="https://product.hstatic.net/1000096703/product/0_2c4613639c4542fd9c54f06c7ec2327c_master.png" alt="Áo Khoác Dù Phối Xéo - Mặt trước" class="w-full rounded-lg">
                </div>
                <div id="image2">
                    <img src="https://product.hstatic.net/1000096703/product/2_67e868a4e800470698bd671265b50e11_master.jpg" alt="Áo Khoác Dù Phối Xéo - Mặt sau" class="w-full rounded-lg">
                </div>
                <div id="image3">
                    <img src="https://product.hstatic.net/1000096703/product/4_03cd3c0e2df04e9fbf1d7d1c99e98af5_master.jpg" alt="Áo Khoác Dù Phối Xéo - Chi tiết" class="w-full rounded-lg">
                </div>
                <div id="image4">
                    <img src="https://product.hstatic.net/1000096703/product/5_661e298ab1d543a8a8685faeaa36f517_master.jpg" alt="Áo Khoác Dù Phối Xéo - Người mẫu" class="w-full rounded-lg">
                </div>
                <div id="image4">
                    <img src="https://product.hstatic.net/1000096703/product/akd_46_7602c78904d04f4baff19c1e45f62327_master.jpg" alt="Áo Khoác Dù Phối Xéo - Người mẫu" class="w-full rounded-lg">
                </div>
            </div>

            <!-- Additional product information after all images -->
            <div class="mt-12 border-t pt-8">
                <h2 class="text-2xl font-bold mb-6">Thông số kỹ thuật</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="p-4 bg-white rounded-lg border">
                        <h3 class="font-semibold mb-2">Chất liệu</h3>
                        <p>Vải dù chống nước, lớp lót polyester</p>
                    </div>
                    <div class="p-4 bg-white rounded-lg border">
                        <h3 class="font-semibold mb-2">Kiểu dáng</h3>
                        <p>Áo khoác thể thao, có nón, phối màu</p>
                    </div>
                    <div class="p-4 bg-white rounded-lg border">
                        <h3 class="font-semibold mb-2">Bảo quản</h3>
                        <p>Giặt tay, không ngâm, phơi khô trong bóng râm</p>
                    </div>
                    <div class="p-4 bg-white rounded-lg border">
                        <h3 class="font-semibold mb-2">Xuất xứ</h3>
                        <p>Việt Nam</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Details - Right Column (Fixed when scrolling) -->
        <div style="max-height: calc(100vh - 40px); overflow-y: auto;" class="product-details w-[40%] sticky top-[20px] self-start ">
            <h1 class="text-3xl font-bold mb-2">Áo Khoác Dù Phối Xéo 2 Lớp AKD0046</h1>
            <p class="text-sm text-gray-500 mb-4">SKU: AKD0046MMXA</p>

            <div class="mb-6">
                <p class="text-2xl font-bold text-black">350,000 <span>₫</span></p>
            </div>

            <!-- Size Selection with Radio Buttons -->
            <div class="mb-6 flex justify-between items-center">
                <div class="flex gap-4 mb-2" id="sizeSelectionGroup">
                    <div>
                        <input type="radio" id="sizeM" name="size" value="M" class="size-radio-input" checked>
                        <label for="sizeM" class="size-radio-label">M</label>
                    </div>
                    <div>
                        <input type="radio" id="sizeL" name="size" value="L" class="size-radio-input">
                        <label for="sizeL" class="size-radio-label">L</label>
                    </div>
                    <div>
                        <input type="radio" id="sizeXL" name="size" value="XL" class="size-radio-input">
                        <label for="sizeXL" class="size-radio-label">XL</label>
                    </div>
                </div>
                <a href="#" class="text-sm text-gray-700 font-semibold hover:text-[#25a7df] transition-all">CÁCH CHỌN SIZE</a>
            </div>

            <!-- Color Selection -->
            <div class="mb-8">
                <p class="mb-2">Xám</p>
                <div class="flex items-center">
                    <button class="w-8 h-8 bg-gray-400 rounded-full border-2 border-white outline outline-2 outline-gray-300"></button>
                </div>
            </div>

            <!-- Quantity -->
            <div class="flex items-center mb-8">
                <button type="button" id="decreaseQuantity" class="text-white bg-gray-200 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm p-2 text-center inline-flex items-center">
                    <span class="text-black text-xl">-</span>
                </button>
                <input type="number" id="quantity" class="mx-2 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-14 p-2.5 text-center" value="1" min="1">
                <button type="button" id="increaseQuantity" class="text-white bg-gray-200 hover:bg-gray-300 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm p-2 text-center inline-flex items-center">
                    <span class="text-black text-xl">+</span>
                </button>
            </div>

            <!-- Add to Cart Button -->
            <button type="button" id="addToCartBtn" class="w-full text-white bg-black hover:bg-gray-800 focus:ring-4 focus:outline-none focus:ring-gray-300 font-semibold rounded-lg text-sm px-5 py-4 text-center mb-8">
                THÊM VÀO GIỎ
            </button>

            <!-- Product Description -->
            <div class="border-t pt-6">
                <h2 class="text-xl font-bold mb-4">Mô tả</h2>
                <p class="text-gray-700 mb-4">
                    Áo khoác Dù phối xéo 2 lớp, phong cách năng động, tiện lợi vượt trội. Thiết kế có tính & đa năng, phối xéo độc đáo, tạo điểm nhấn năng động và hiện đại.
                </p>
                <p class="text-gray-700 mb-4">
                    Dây kéo cao cấp ở nhiều vị trí, bảo quần vật dụng kín đáo và an toàn hơn. Nón to kết hợp mũ che nắng tiện dụng, thích hợp cho mọi điều kiện thời tiết.
                </p>
                <p class="text-gray-700 mb-4">
                    Chất liệu vải dù trượt nước chống mưa nhẹ, thoáng khí, phù hợp với mọi hoạt động ngoài trời.
                </p>
            </div>

            <!-- Video -->
            <div class="mt-6">
                <div class="aspect-w-16 aspect-h-9">
                    <iframe class="w-full h-64 rounded-lg" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <section class="related-products">
        <h2 class="related-products__heading">SẢN PHẨM LIÊN QUAN</h2>


        <div class="product-grid">
            <!-- Product 1 -->
            <div class="product-card">
                <div class="product-image">
                    <a href="ProductDetailController">
                        <img src="https://product.hstatic.net/1000096703/product/1_2ca2e819c6d745c0a2ae6fceeae5269d_grande.jpg" alt="Áo Khoác Dù 2 Lớp AKD0030">

                    </a>
                    <div class="product-actions">
                        <button class="action-btn buy-now">MUA NGAY</button>
                        <button class="action-btn add-to-cart">THÊM VÀO GIỎ</button>
                    </div>
                </div>
                <div class="product-info">
                    <a href="#" class="product-title">Áo Khoác Dù 2 Lớp AKD0030</a>
                    <div class="product-price">295,000₫</div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="product-card">
                <div class="product-image">
                    <a href="./ProductDetailController">
                        <img src="https://product.hstatic.net/1000096703/product/0_15835a091f9e4eeea4ac24327314059a_grande.jpg" alt="Áo Khoác Dù 2 Lớp AKD0030">

                    </a>
                    <div class="product-actions">
                        <button class="action-btn buy-now">MUA NGAY</button>
                        <button class="action-btn add-to-cart">THÊM VÀO GIỎ</button>
                    </div>
                </div>
                <div class="product-info">
                    <a href="#" class="product-title">Áo Khoác Dù 2 Lớp AKD0030</a>
                    <div class="product-price">295,000₫</div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="product-card">
                <div class="product-image">
                    <a href="./ProductDetailController">
                        <img src="https://product.hstatic.net/1000096703/product/0_de8e6686dfcb4f448e6a8f2f6b9d88b6_grande.jpg" alt="Áo Khoác Dù Không Nón 2 Lớp AKD0031">

                    </a>
                    <div class="product-actions">
                        <button class="action-btn buy-now">MUA NGAY</button>
                        <button class="action-btn add-to-cart">THÊM VÀO GIỎ</button>
                    </div>
                </div>
                <div class="product-info">
                    <a href="#" class="product-title">Áo Khoác Dù Không Nón 2 Lớp AKD0031</a>
                    <div class="product-price">295,000₫</div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="product-card">
                <div class="product-image">
                    <a href="./ProductDetailController">
                        <img src="https://product.hstatic.net/1000096703/product/0_5491089b87e8412a9fffaf83a0816868_grande.jpg" alt="Áo Khoác Dù Không Nón 2 Lớp AKD0031">

                    </a>
                    <div class="product-actions">
                        <button class="action-btn buy-now">MUA NGAY</button>
                        <button class="action-btn add-to-cart">THÊM VÀO GIỎ</button>
                    </div>
                </div>
                <div class="product-info">
                    <a href="#" class="product-title">Áo Khoác Dù Không Nón 2 Lớp AKD0031</a>
                    <div class="product-price">295,000₫</div>
                </div>
            </div>
        </div>

    </section>
</div>