<section class="bg-gray-50 dark:bg-gray-900 ">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
            <img src="https://file.hstatic.net/1000096703/file/logo_website__191___70_px__979fdef210f7474d8a09b42724033b5c.png" alt="logo">

        </a>
        <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl text-center font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                    Đăng ký
                </h1>
                <form class="space-y-4 md:space-y-6" action="#">
                    <div>
                        <input placeholder="Họ và tên" type="text" name="fullname" id="fullname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>
                    <div class="flex gap-[10px] items-center font-bold">
                        <input type="checkbox" class="bg-neutral-200" name="men" value="men">
                        <label for="vehicle1">Nam</label><br>
                        <input type="checkbox" class="bg-neutral-200" name="female" value="female">
                        <label for="vehicle2">Nữ</label><br>
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="Email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>
                    <div>
                        <input type="password" name="password" id="password" placeholder="Tạo mật khẩu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>
                    <div>
                        <input type="password" name="confirm-password" id="confirm-password" placeholder="Xác nhận mật khẩu" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>
                    <div>
                        <input type="date" name="birthday" placeholder="dd/mm/yyyy" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required="">
                    </div>

                    <button type="submit" class=" block  bg-zinc-900 text-white hover:bg-neutral-600 text-gray-800 text-[18px] font-semibold rounded-xs py-1 px-4 ">
                        ĐĂNG KÝ
                    </button>
                    <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                        Bạn đã có tài khoản? <a href="./LoginController" class="font-medium text-primary-600 hover:underline dark:text-primary-500">Đăng nhập</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</section>