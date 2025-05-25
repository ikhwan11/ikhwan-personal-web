<div>
    <section class="bg-[url('../img/slider/1.jpg')] bg-cover bg-center min-h-screen flex items-center justify-center">

        <div class="bg-[url('../img/slider/1.jpg')] bg-opacity-90 backdrop-blur-sm p-8 rounded-2xl shadow-xl w-full max-w-sm">
            <div class="flex items-center gap-4 mb-6">
                <!-- Logo -->
                <a href="/" class="flex items-center gap-4">
                    <img src="/assets/img/logo/logo.png" class="lg:max-w-[150px] max-w-[90px]" alt="Logo" />
                </a>

                <!-- Garis vertikal -->
                <div class="w-px h-10 bg-black"></div>

                <!-- Tulisan Login Form -->
                <h2 class="text-2xl font-bold text-gray-800">Login Form</h2>
            </div>
            <form action="#" method="POST" class="space-y-5 mt-6">
                <div>
                    <label for="username" class="block text-gray-700 mb-1">Username</label>
                    <input type="text" id="username" name="username" required autofocus
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>
                <div>
                    <label for="password" class="block text-gray-700 mb-1">Password</label>
                    <input type="password" id="password" name="password" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" />
                </div>
                <!-- <button type="submit"
                    class="w-full btn-custom py-2 rounded-lg transition duration-200">
                    Login
                </button> -->
                <a href="/Admin-blog-form" class="w-full btn-custom py-2 rounded-lg transition duration-200 text-center">
                    Login
                </a>
            </form>
        </div>

    </section>
</div>