<div class="container">
    <nav>
        <div class="nav-top grid grid-rows-1 grid-cols-3 ">
            <div></div>
            <div class="place-items-center"><img src="https://file.hstatic.net/1000096703/file/logo_website__191___70_px__979fdef210f7474d8a09b42724033b5c.png" alt="" id="logo-navbar"></div>
            <div class="nav-action flex justify-end items-center gap-[20px] text-[25px]">
                <div class="logo-account"><a style="color:black;" href="#"><i class="fa-solid fa-circle-user"></i></a></div>
                <div class="logo-search">
                    <a style="color:black;" href="#"> <i class="fa-solid fa-magnifying-glass"></i></a>
                </div>
                <div class="logo-account"><a style="color:black;" href=""><i class="fa-solid fa-cart-plus"></i></a></div>
            </div>
        </div>
        <div class="nav-menu">
            <div class="dropdown relative inline-flex" x-data="{ open: false }">
                <button @click="open = !open" class="dropdown-toggle btn btn-primary">
                    Dropdown <span class="icon-[tabler--chevron-down] dropdown-open:rotate-180 size-4"></span>
                </button>
                <ul x-show="open" @click.outside="open = false" class="dropdown-menu hidden min-w-60">
                    <li><a class="dropdown-item" href="#">My Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><a class="dropdown-item" href="#">Billing</a></li>
                    <li><a class="dropdown-item" href="#">FAQs</a></li>
                </ul>
            </div>


        </div>
    </nav>
</div>