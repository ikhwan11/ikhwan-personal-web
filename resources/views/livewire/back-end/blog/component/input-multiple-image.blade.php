<div>
    <div>
        <label class="block text-sm font-medium text-gray-600 mb-2">Additional Images</label>

        <!-- Preview container -->
        <div id="preview" class="flex flex-wrap gap-3 mb-3"></div>

        <!-- Input file multiple -->
        <input
            type="file"
            id="additionalImages"
            name="additionalImages[]"
            multiple
            accept="image/*"
            class="block w-full text-sm text-gray-600
           file:mr-4 file:py-2 file:px-4
           file:rounded-md file:border-0
           file:text-sm file:font-semibold
           file:bg-blue-50 file:text-blue-700
           hover:file:bg-blue-100
           cursor-pointer" />
    </div>

    <script>
        const inputAdditionalImages = document.getElementById('additionalImages');
        const previewContainer = document.getElementById('preview');

        // Array menyimpan file yang diupload
        let filesArray = [];

        function updatePreview() {
            previewContainer.innerHTML = '';
            filesArray.forEach((file, index) => {
                const reader = new FileReader();

                reader.onload = e => {
                    // Container image + button
                    const imgWrapper = document.createElement('div');
                    imgWrapper.className = 'relative w-24 h-24 rounded-md overflow-hidden border border-gray-300';

                    // Gambar
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'object-cover w-full h-full';

                    // Tombol hapus
                    const btnRemove = document.createElement('button');
                    btnRemove.type = 'button';
                    btnRemove.innerHTML = '&times;';
                    btnRemove.className = 'absolute top-0 right-0 bg-red-600 text-white rounded-bl-md px-1.5 text-xl font-bold hover:bg-red-700';
                    btnRemove.addEventListener('click', () => {
                        // Hapus file dari array
                        filesArray.splice(index, 1);
                        updatePreview();
                    });

                    imgWrapper.appendChild(img);
                    imgWrapper.appendChild(btnRemove);
                    previewContainer.appendChild(imgWrapper);
                };

                reader.readAsDataURL(file);
            });

            // Update input files menggunakan DataTransfer agar file yang sudah dihapus hilang juga di input
            const dataTransfer = new DataTransfer();
            filesArray.forEach(file => dataTransfer.items.add(file));
            inputAdditionalImages.files = dataTransfer.files;
        }

        inputAdditionalImages.addEventListener('change', () => {
            // Append file baru ke filesArray
            for (let i = 0; i < inputAdditionalImages.files.length; i++) {
                filesArray.push(inputAdditionalImages.files[i]);
            }

            updatePreview();

            // Clear input supaya user bisa upload file yang sama kalau mau
            inputAdditionalImages.value = '';
        });
    </script>

</div>