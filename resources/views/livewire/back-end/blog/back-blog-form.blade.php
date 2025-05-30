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
                        Blogs List
                    </a>
                </div>

                <form class="bg-white p-6 rounded-lg shadow-md space-y-4">

                    <div class="grid grid-cols-1 gap-4">
                        <!-- Title -->
                        <livewire:TitleBlogInput />
                    </div>
                    <!-- Meta -->
                    <div class="grid grid-cols-1 gap-4">
                        <div>
                            <label for="meta" class="block text-sm font-medium text-gray-600">Meta Title</label>
                            <input type="text" id="meta" name="meta" class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Masukkan Meta Title" required>
                        </div>
                    </div>
                    <!-- Meta Desc-->
                    <div>
                        <label for="meta_desc" class="block text-sm font-medium text-gray-600">Meta Desc</label>
                        <textarea id="meta_desc" name="meta_desc" rows="4" class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Tulis deskripsi meta..."></textarea>
                    </div>

                    <!-- Thumbnail -->
                    <div class="grid grid-cols-3 gap-4">
                        <div x-data="{ preview: null }" class="space-y-2">
                            <!-- Preview Image -->
                            <template x-if="preview">
                                <img :src="preview" alt="Preview" class="w-40 h-40 object-cover rounded-md border border-gray-300" />
                            </template>

                            <!-- Label + Input File -->
                            <label for="file" class="block text-sm font-medium text-gray-700">Upload Thumbnail</label>
                            <input
                                type="file"
                                id="thumbnail"
                                name="thumbnail"
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

                        <!-- Tags -->
                        <div>
                            <div x-data="{
                                            tags: [],
                                            input: '',
                                            addTag() {
                                                const value = this.input.trim()
                                                if (value && !this.tags.includes(value)) {
                                                    this.tags.push(value)
                                                }
                                                this.input = ''
                                            },
                                            removeTag(index) {
                                                this.tags.splice(index, 1)
                                            }
                                        }"
                                class="w-full border rounded-md p-2 focus-within:ring-2 focus-within:ring-blue-400">
                                <!-- Label -->
                                <label for="meta" class="block text-sm font-medium text-gray-600 mb-1">Tags</label>

                                <!-- Tag list -->
                                <div class="flex flex-wrap gap-2 mb-1">
                                    <template x-for="(tag, index) in tags" :key="index">
                                        <div class="flex items-center bg-blue-100 text-blue-800 text-sm px-2 py-1 rounded">
                                            <span x-text="tag"></span>
                                            <button type="button" @click="removeTag(index)" class="ml-1 text-blue-500 hover:text-red-600">&times;</button>
                                        </div>
                                    </template>
                                </div>

                                <!-- Input field -->
                                <input
                                    x-model="input"
                                    @keydown.space.prevent="addTag()"
                                    id="meta_tags"
                                    name="meta_tags"
                                    type="text"
                                    placeholder="Ketik lalu tekan spasi"
                                    class="w-full px-2 py-1 border border-gray-300 rounded focus:outline-none" />

                                <!-- Hidden input (kirim ke server) -->
                                <template x-for="(tag, index) in tags" :key="index">
                                    <input type="hidden" name="tags[]" :value="tag">
                                </template>
                            </div>
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
                        <!-- Status -->
                        <div>
                            <label for="status" class="block text-sm font-medium text-gray-600">Status</label>
                            <select id="status" name="status" class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400">
                                <option value="">-- Pilih Status --</option>
                                <option value="draft">Draft</option>
                                <option value="publish">Publish</option>
                            </select>
                        </div>

                    </div>

                    <!-- Konten -->
                    <div>
                        <label for="konten" class="block text-sm font-medium text-gray-600">Konten</label>
                        <textarea id="editor" name="konten" rows="4" class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Tulis konten atau catatan..."></textarea>
                    </div>


                    <livewire:InputMultipleImage />


                    <!-- Tombol -->
                    <button type="submit" class="bg-[#45df85] hover:bg-[#acdf45] text-white px-4 py-2 inline-block rounded-md transition duration-200">
                        Publish Blog Now
                    </button>

                </form>

            </main>
        </div>
    </section>
</div>