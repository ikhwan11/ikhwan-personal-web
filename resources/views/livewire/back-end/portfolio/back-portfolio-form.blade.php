<div>
    <section class="bg-[url('../img/slider/1.jpg')] bg-cover bg-center min-h-screen">
        <!-- Layout -->
        <div class="flex h-screen">
            <livewire:BackAdminSidebar />
            <main class="flex-1 p-6 overflow-y-auto">
                <div class="flex items-center justify-between mb-4">
                    <h1 class="text-2xl font-semibold text-[#304dd0]">
                        <strong>Tambah Portfolio</strong>
                    </h1>

                    <a href="#" class="bg-[#304dd0] hover:bg-[#6030d0] text-white px-4 py-2 rounded inline-block">
                        Portfolio List
                    </a>
                </div>

                <form class="bg-white p-6 rounded-lg shadow-md space-y-4">

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
                            <label for="name" class="block text-sm font-medium text-gray-600">Portfolio
                                Name</label>
                            <input type="text" id="portfolio_name" name="portfolio_name"
                                class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                                placeholder="Masukkan Portfolio Name" required autofocus>
                        </div>
                        <div>
                            <label for="client_name" class="block text-sm font-medium text-gray-600">Client</label>
                            <input type="text" id="client_name" name="client_name"
                                class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                                placeholder="Masukkan Client Name" required>
                        </div>
                    </div>

                    <div>
                        <label for="about" class="block text-sm font-medium text-gray-600">About Project</label>
                        <textarea id="about_project" name="about_project" rows="4"
                            class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                            placeholder="Tulis About..."></textarea>
                    </div>

                    <button type="submit"
                        class="mt-5 bg-[#45df85] hover:bg-[#acdf45] text-white px-4 py-2 inline-block rounded-md transition duration-200">
                        Save CV
                    </button>
                </form>

            </main>
        </div>
    </section>
</div>
