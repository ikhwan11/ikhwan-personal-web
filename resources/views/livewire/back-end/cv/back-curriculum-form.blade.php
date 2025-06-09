<div>
    <section class="bg-[url('../img/slider/1.jpg')] bg-cover bg-center min-h-screen">
        <!-- Layout -->
        <div class="flex h-screen">
            <livewire:BackAdminSidebar />
            <main class="flex-1 p-6 overflow-y-auto">
                <div class="flex items-center justify-between mb-4">
                    <h1 class="text-2xl font-semibold text-[#304dd0]">
                        <strong>Tambah CV</strong>
                    </h1>

                    <a href="#" class="bg-[#304dd0] hover:bg-[#6030d0] text-white px-4 py-2 rounded inline-block">
                        Curriculum vitae List
                    </a>
                </div>

                <form class="bg-white p-6 rounded-lg shadow-md space-y-4">

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
                            <input type="text" id="name" name="name"
                                class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                                placeholder="Masukkan nama" required autofocus>
                        </div>
                        <div>
                            <label for="title_header" class="block text-sm font-medium text-gray-600">Header
                                Title</label>
                            <input type="text" id="title_header" name="title_header"
                                class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                                placeholder="Masukkan header title" required>
                        </div>
                    </div>


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

                    <div>
                        <label for="about" class="block text-sm font-medium text-gray-600">About</label>
                        <textarea id="about" name="about" rows="4"
                            class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                            placeholder="Tulis About..."></textarea>
                    </div>


                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white p-6 rounded-lg shadow-md space-y-4">
                            <label for="about" class="block text-sm font-medium text-gray-600"><strong>Info
                                    Pribadi:</strong></label>
                            <div class="grid grid-cols-2 gap-4">
                                <input type="text" id="t" name="t"
                                    class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                                    placeholder="Tempat Lahir" required>
                                <input type="date" id="ttl" name="ttl"
                                    class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                                    placeholder="Tanggal lahir" required>
                            </div>
                            <select id="kelamin" name="kelamin"
                                class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                                required>
                                <option value="" disabled selected>Pilih Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>

                        </div>
                        <div class="bg-white p-6 rounded-lg shadow-md space-y-4">
                            <label for="about" class="block text-sm font-medium text-gray-600"><strong>Info
                                    Kontak:</strong></label>
                            <input type="number" id="hp" name="hp"
                                class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                                placeholder="Nomor Hp" required>
                            <input type="email" id="email" name="email"
                                class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                                placeholder="Email" required>
                            <input type="text" id="alamat" name="alamat"
                                class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
                                placeholder="Alamat" required>

                        </div>
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
