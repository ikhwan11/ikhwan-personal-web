<div>
    <section class="bg-[url('../img/slider/1.jpg')] bg-cover bg-center min-h-screen">
        <!-- Layout -->
        <div class="flex h-screen">
            <livewire:BackAdminSidebar />
            <main class="flex-1 p-6 overflow-y-auto">
                <div class="flex items-center justify-between mb-4">
                    <h1 class="text-2xl font-semibold text-[#304dd0]">
                        <strong>Tambah User</strong>
                    </h1>

                    <a href="#" class="bg-[#304dd0] hover:bg-[#6030d0] text-white px-4 py-2 rounded inline-block">
                        User List
                    </a>
                </div>

                <form class="bg-white p-6 rounded-lg shadow-md space-y-4" autocomplete="off">

                    <div class="grid grid-cols-3 gap-4">
                        <div x-data="{ preview: null }" class="space-y-2">
                            <!-- Preview Image -->
                            <template x-if="preview">
                                <img :src="preview" alt="Preview"
                                    class="w-40 h-40 object-cover rounded-md border border-gray-300" />
                            </template>

                            <!-- Label + Input File -->
                            <label for="file" class="block text-sm font-medium text-gray-700">Upload image</label>
                            <input type="file" id="image" name="image" accept="image/*"
                                @change="const file = $event.target.files[0]; if (file) { const reader = new FileReader(); reader.onload = e => preview = e.target.result; reader.readAsDataURL(file); }"
                                class="block w-full text-sm text-gray-700
                                        file:py-2 file:px-6
                                        file:rounded-md file:border-0
                                        file:font-semibold
                                        file:bg-blue-600 file:text-white
                                        hover:file:bg-blue-700
                                        cursor-pointer" />
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-600">
                                Name</label>
                            <input type="text" id="name" name="name"
                                class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                                placeholder="Masukkan Name" required autofocus>
                        </div>
                    </div>

                    <div>
                        <label for="about" class="block text-sm font-medium text-gray-600">About user</label>
                        <textarea id="about_user" name="about_user" rows="4"
                            class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                            placeholder="Tulis About..."></textarea>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white p-6 rounded-lg shadow-md space-y-4">
                            <label for="auth" class="block text-sm font-medium text-gray-600"><strong>Auth
                                    data</strong></label>
                            <input type="text" id="username" name="username" autocomplete="new-username"
                                class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                                placeholder="Username" required>

                            <div class="relative">
                                <input type="password" id="password" name="password" autocomplete="new-password"
                                    class="mt-1 w-full px-4 py-2 pr-10 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                                    placeholder="Password" required>

                                <!-- Icon mata -->
                                <button type="button" id="togglePassword"
                                    class="absolute inset-y-0 right-2 flex items-center text-gray-500">
                                    <!-- Icon default (mata terbuka) -->
                                    <svg id="eyeClosed" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>

                                    <!-- Icon mata tertutup (disembunyikan dulu) -->
                                    <svg id="eyeOpen" xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 hidden"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.542-7a9.965 9.965 0 012.224-3.592M6.042 6.042A9.956 9.956 0 0112 5c4.478 0 8.268 2.943 9.542 7a9.96 9.96 0 01-1.67 2.74M15 12a3 3 0 00-3-3M3 3l18 18" />
                                    </svg>
                                </button>
                            </div>

                        </div>
                    </div>

                    <button type="submit"
                        class="mt-5 bg-[#45df85] hover:bg-[#acdf45] text-white px-4 py-2 inline-block rounded-md transition duration-200">
                        Save User
                    </button>
                </form>

            </main>
        </div>
    </section>
    <script>
        const passwordInput = document.getElementById('password');
        const togglePassword = document.getElementById('togglePassword');
        const eyeOpen = document.getElementById('eyeOpen');
        const eyeClosed = document.getElementById('eyeClosed');

        togglePassword.addEventListener('click', () => {
            const isHidden = passwordInput.type === 'password';
            passwordInput.type = isHidden ? 'text' : 'password';
            eyeOpen.classList.toggle('hidden', !isHidden);
            eyeClosed.classList.toggle('hidden', isHidden);
        });
    </script>

</div>
