<div>
    <button id="waBtn" aria-label="WhatsApp me">
        <i class="fab fa-whatsapp"></i>
        <span>Get in touch</span>
    </button>

    <script>
        const waBtn = document.getElementById("waBtn");
        const waLink = "https://wa.me/6281234567890"; // Ganti dengan nomor kamu
        let clickedOnce = false;

        waBtn.addEventListener("click", (e) => {
            e.stopPropagation(); // supaya klik tombol tidak memicu event luar
            if (!clickedOnce) {
                waBtn.classList.add("expanded");
                clickedOnce = true;
            } else {
                window.open(waLink, "_blank");
            }
        });

        // Tutup tombol saat klik di luar area tombol
        document.addEventListener("click", (e) => {
            if (clickedOnce && !waBtn.contains(e.target)) {
                waBtn.classList.remove("expanded");
                clickedOnce = false;
            }
        });
    </script>
</div>