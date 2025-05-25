<div>
    <section class="bg-[url('../img/slider/1.jpg')] bg-cover bg-center min-h-screen">
        <!-- Layout -->
        <div class="flex h-screen">
            <livewire:BackAdminSidebar />
            <main class="flex-1 p-6 overflow-y-auto">
                <div class="flex items-center justify-between mb-4">
                    <h1 class="text-2xl font-semibold text-[#304dd0]">
                        <strong>Tambah Blog</strong>
                    </h1>

                    <a href="#"
                        class="bg-[#304dd0] hover:bg-[#6030d0] text-white px-4 py-2 rounded inline-block">
                        Blog Lists
                    </a>
                </div>

                <form class="bg-white p-6 rounded-lg shadow-md space-y-4">

                    <div class="grid grid-cols-2 gap-4">
                        <!-- Nama -->
                        <div>
                            <label for="nama" class="block text-sm font-medium text-gray-600">Nama Lengkap</label>
                            <input type="text" id="nama" name="nama" class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Masukkan nama anda" required autofocus>
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                            <input type="email" id="email" name="email" class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="email@example.com" required>
                        </div>
                    </div>


                    <!-- Telepon -->
                    <div>
                        <label for="telepon" class="block text-sm font-medium text-gray-600">No. Telepon</label>
                        <input type="tel" id="telepon" name="telepon" class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="0812xxxxxx">
                    </div>

                    <!-- Kategori -->
                    <div>
                        <label for="kategori" class="block text-sm font-medium text-gray-600">Kategori</label>
                        <select id="kategori" name="kategori" class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                            <option value="">-- Pilih Kategori --</option>
                            <option value="umum">Umum</option>
                            <option value="klien">Klien</option>
                            <option value="partner">Partner</option>
                        </select>
                    </div>

                    <!-- Deskripsi -->
                    <div>
                        <label for="deskripsi" class="block text-sm font-medium text-gray-600">Deskripsi</label>
                        <textarea id="deskripsi" name="deskripsi" rows="4" class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Tulis deskripsi atau catatan..."></textarea>
                    </div>

                    <!-- Tombol -->
                    <button type="submit" class="bg-[#45df85] hover:bg-[#acdf45] text-white px-4 py-2 inline-block rounded-md transition duration-200">
                        Publish Blog Now
                    </button>

                </form>

            </main>
        </div>
    </section>
</div>