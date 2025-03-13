<div class="container mx-auto max-w-[1400px]">
    <nav>
        <div class="nav-top pt-6 grid grid-rows-1 grid-cols-3">
            <div></div>
            <div>
                <a href="./">
                    <img class="mx-auto" src="https://file.hstatic.net/1000096703/file/logo_website__191___70_px__979fdef210f7474d8a09b42724033b5c.png" alt="" id="logo-navbar">
                </a>
            </div>
            <div class="nav-action flex justify-center items-center gap-[20px] ml-[7rem] text-[25px]">
                <div class="logo-account">
                    <a style="color:black;" href="./LoginController"><i class="fa-solid fa-circle-user"></i></a>
                </div>
                <div class="logo-search">
                    <a style="color:black;" href="#"> <i class="fa-solid fa-magnifying-glass"></i></a>
                </div>
                <div class="logo-account">
                    <a style="color:black;" href=""><i class="fa-solid fa-cart-plus"></i></a>
                </div>
            </div>
        </div>
        <!-- NAV MENU -->
        <div class="nav-menu grid place-items-center pt-5 mb-5">
            <div class="hidden md:flex space-x-6 gap-[30px] font-bold text-[15px] ">
                <?php foreach ($menu as $category) { ?>
                    <div class="relative menu group">
                        <a href="./ProductController?category_id=<?= $category['category_id'] ?>" class="text-gray-800 btn-menu uppercase">
                            <?= $category['category_name'] ?>
                            <?php if (!empty($category['children'])) { ?>
                                <i class="fa-solid fa-arrow-down text-[12px] arrow-down-menu"></i>
                            <?php } ?>
                        </a>

                        <?php if (!empty($category['children'])) { ?>
                            <div class="drop-menu absolute z-[30] top-full left-0 w-44 bg-white border rounded-[2px] mt-2 hidden group-hover:block">
                                <?php foreach ($category['children'] as $child) { ?>
                                    <a href="./ProductController?category_id=<?= $child['category_id'] ?>" class="block px-4 py-2">
                                        <?= $child['category_name'] ?>
                                    </a>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </nav>
</div>