<div>
    <section class="bg-[url('../img/slider/1.jpg')] bg-cover bg-center min-h-screen">
        <!-- Layout -->
        <div class="flex h-screen">
            <livewire:BackAdminSidebar />
            <main class="flex-1 p-6 overflow-y-auto">
                <div class="flex items-center justify-between mb-4">
                    <h1 class="text-2xl font-semibold text-[#304dd0]">
                        <strong>Tambah Service</strong>
                    </h1>

                    <a href="#"
                        class="bg-[#304dd0] hover:bg-[#6030d0] text-white px-4 py-2 rounded inline-block">
                        Services List
                    </a>
                </div>

                <form class="bg-white p-6 rounded-lg shadow-md space-y-4">

                    <div class="grid grid-cols-1 gap-4">
                        <div>
                            <label for="title" class="block text-sm font-medium text-gray-600">Title</label>
                            <input type="text" id="title" name="title" class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Masukkan title" required autofocus>
                        </div>
                    </div>
                    <div class="grid grid-cols-3 gap-4">
                        <div x-data="{ preview: null }" class="space-y-2">
                            <!-- Preview Image -->
                            <template x-if="preview">
                                <img :src="preview" alt="Preview" class="w-40 h-40 object-cover rounded-md border border-gray-300" />
                            </template>

                            <!-- Label + Input File -->
                            <label for="file" class="block text-sm font-medium text-gray-700">Upload icon</label>
                            <input
                                type="file"
                                id="icon"
                                name="icon"
                                accept="image/*"
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
                    <div class="grid grid-cols-3 gap-4">
                        <div>
                            <label for="start_price" class="block text-sm font-medium text-gray-600">Start Price</label>
                            <input type="number" id="start_price" name="start_price" class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Masukkan start price" required>
                        </div>
                    </div>

                    <div>
                        <label for="desc" class="block text-sm font-medium text-gray-600">Desc</label>
                        <textarea id="desc" name="desc" rows="4" class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Tulis deskripsi service..."></textarea>
                    </div>

                    <!-- Tombol -->
                    <button type="submit" class="bg-[#45df85] hover:bg-[#acdf45] text-white px-4 py-2 inline-block rounded-md transition duration-200">
                        Save Service
                    </button>

                </form>

            </main>
        </div>
    </section>
</div>