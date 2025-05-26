<div>
    <div>
        <label for="title" class="block text-sm font-medium text-gray-600">Title Blog</label>
        <input type="text" id="title" name="title"
            class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400"
            placeholder="Masukkan title" required autofocus>

        <input type="text" id="slug" name="slug"
            class="mt-1 w-full px-4 py-2 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-400 hidden">
    </div>

    <script>
        function terbilang(num) {
            const satuan = ["", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas"];
            num = parseInt(num);
            if (isNaN(num)) return '';

            if (num < 12) {
                return satuan[num];
            } else if (num < 20) {
                return terbilang(num - 10) + " belas";
            } else if (num < 100) {
                return terbilang(Math.floor(num / 10)) + " puluh " + terbilang(num % 10);
            } else if (num < 200) {
                return "seratus " + terbilang(num - 100);
            } else if (num < 1000) {
                return terbilang(Math.floor(num / 100)) + " ratus " + terbilang(num % 100);
            } else if (num < 2000) {
                return "seribu " + terbilang(num - 1000);
            } else if (num < 1000000) {
                return terbilang(Math.floor(num / 1000)) + " ribu " + terbilang(num % 1000);
            } else if (num < 1000000000) {
                return terbilang(Math.floor(num / 1000000)) + " juta " + terbilang(num % 1000000);
            } else {
                return '';
            }
        }

        function replaceNumbersWithWords(str) {
            return str.replace(/\d+/g, match => {
                const n = parseInt(match);
                const kata = terbilang(n).trim();
                return kata || match;
            });
        }

        function generateSlug(str) {
            let text = str.toLowerCase();

            // Ganti koma (,) jadi 'koma'
            text = text.replace(/,/g, ' koma ');

            // Ganti angka jadi kata
            text = replaceNumbersWithWords(text);

            // Hilangkan semua simbol kecuali spasi dan dash (tanda hubung)
            text = text.replace(/[^\w\s-]/g, '');

            // Trim dan ganti spasi lebih dari satu jadi dash
            text = text.trim().replace(/\s+/g, '-');

            // Hindari dash dobel
            text = text.replace(/-+/g, '-');

            return text;
        }

        const titleInput = document.getElementById('title');
        const slugInput = document.getElementById('slug');

        titleInput.addEventListener('input', () => {
            slugInput.value = generateSlug(titleInput.value);
        });
    </script>

</div>