<aside id="sidebar" class="fixed top-0 left-0 z-20 flex flex-col flex-shrink-0 hidden w-64 h-full pt-16 font-normal duration-75 lg:flex transition-width" aria-label="Sidebar">
    <div class="relative flex flex-col flex-1 min-h-0 pt-0 bg-white border-r border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        <div class="flex flex-col flex-1 pt-5 pb-4 overflow-y-auto">
            <div class="flex-1 px-3 space-y-1 bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                <ul class="pb-2 space-y-2">
                    <li>

                    </li>
                    <li>
                        <a href="./DashboardController" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">
                            <svg class="w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 10a8 8 0 018-8v8h8a8 8 0 11-16 0z"></path>
                                <path d="M12 2.252A8.014 8.014 0 0117.748 8H12V2.252z"></path>
                            </svg>
                            <span class="ml-3" sidebar-toggle-item="">Trang chủ</span>
                        </a>
                    </li>

                    <!-- DANH MỤC SẢN PHẨM            -->
                    <li>
                        <a href="./CategoriesProductController" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">

                            <span class="ml-3" sidebar-toggle-item="">Danh mục sản phẩm</span>
                        </a>
                    </li>
                    <!-- SẢN PHẨM -->
                    <li>
                        <a href="./ProductsAdminController" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">

                            <span class="ml-3" sidebar-toggle-item="">Sản phẩm</span>
                        </a>
                    </li>
                    <!-- ORDER -->
                    <li>
                        <a href="./OrderAdminController" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">

                            <span class="ml-3" sidebar-toggle-item="">Đơn hàng</span>
                        </a>
                    </li>
                    <!-- USER -->
                    <li>
                        <a href="./UsersAdminController" class="flex items-center p-2 text-base text-gray-900 rounded-lg hover:bg-gray-100 group dark:text-gray-200 dark:hover:bg-gray-700">

                            <span class="ml-3" sidebar-toggle-item="">Người dùng</span>
                        </a>
                    </li>



                </ul>

            </div>
        </div>

    </div>
</aside>