<!-- SẢN PHẨM MỚI -->
<div class="container mx-auto max-w-[1400px]">
    <div id="indicators-carousel" class="relative w-full" data-carousel="static">
        <!-- Carousel wrapper -->
        <div style="width: 100%;" class="relative overflow-hidden rounded-sm h-[800px] ">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="https://file.hstatic.net/1000096703/file/ship10k.jpg" class="absolute block w-full object-cover " alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://file.hstatic.net/1000096703/file/quantay_sm.jpg" class="absolute block w-full object-cover " alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://file.hstatic.net/1000096703/file/3_0a7a77ed7b9a47559470b670c990c00b.jpg" class="absolute block w-full object-cover " alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="https://file.hstatic.net/1000096703/file/2_369e0657e5b34e04bd9c3a94372ad66b.jpg" class="absolute block w-full object-cover " alt="...">
            </div>

        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex right-20 gap-[10px] bottom-5 ">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>
    <section class="new-products">
        <h2 class="new-products__heading">SẢN PHẨM MỚI</h2>

        <div class="new-products__tabs">
            <div class="tab-item active">Áo Khoác</div>
            <div class="tab-item">Sơ Mi</div>
            <div class="tab-item">Quần Tây Nam</div>
            <div class="tab-item">Quần Short</div>
        </div>

        <div class="product-grid">
            <!-- Product 1 -->
            <div class="product-card">
                <div class="product-image">
                    <a href="./ProductDetailController"> <img src="https://product.hstatic.net/1000096703/product/1_2ca2e819c6d745c0a2ae6fceeae5269d_grande.jpg" alt="Áo Khoác Dù 2 Lớp AKD0030">
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
                    <a href="ProductDetailController"> <img src="https://product.hstatic.net/1000096703/product/0_15835a091f9e4eeea4ac24327314059a_grande.jpg" alt="Áo Khoác Dù 2 Lớp AKD0030">
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

        <button class="view-more-btn">XEM THÊM</button>
    </section>
    <section class="featured-image">

        <div class="flex justify-center items-center gap-[20px]">
            <a href="#"> <img class="h-auto w-[500px] hover:bg-black-400 rounded-sm cursor-pointer   " src="https://file.hstatic.net/1000096703/file/1_19222861a2b9492abf454696bcf4ce63.jpg" alt="image description"></a>
            <a href="#"> <img class="h-auto w-[500px] hover:bg-black-400 rounded-sm cursor-pointer   " src="http://file.hstatic.net/1000096703/file/2_9a428ec8e9fa458a92f9e9cec3b3bb52.jpg" alt="image description">
            </a>
            <a href="#"> <img class="h-auto w-[500px] hover:bg-black-400 rounded-sm cursor-pointer   " src="https://file.hstatic.net/1000096703/file/3_2b8db1f1f252465c86b4ec77d217045e.jpg" alt="image description">
            </a>
        </div>
    </section>
</div>

<!-- BRAND IMAGE -->
<section class="brand-image flex justify-center mt-2 gap-[2px]">

    <img class="w-[250px] h-[250px]" src="https://file.hstatic.net/1000096703/file/91.jpg" alt="image description">

    <img class="w-[250px] h-[250px]" src="https://file.hstatic.net/1000096703/file/polo_ce7e5f0e2ad944289c975a069771cc4c.jpg" alt="image description">

    <img class="w-[250px] h-[250px]" src="https://file.hstatic.net/1000096703/file/3_19dec0cccb634c4db8976c4ceb416dad.jpg" alt="image description">

    <img class="w-[250px] h-[250px]" src="https://file.hstatic.net/1000096703/file/4_b0a50d806dca428d95fa78ce8b704c2b.jpg" alt="image description">

    <img class="w-[250px] h-[250px]" src="https://file.hstatic.net/1000096703/file/2_43348d66ecc147f5a19f9c132db6c87a.jpg" alt="image description">
    <img class="w-[250px] h-[250px]" src="https://file.hstatic.net/1000096703/file/3_9dd99cce26a446319be76a63271bb54e.jpg" alt="image description">


</section>