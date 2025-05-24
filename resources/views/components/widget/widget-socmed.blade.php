<div>
    <div class="float-btn-container" id="floatBtnContainer">
        <div class="social-menu">
            <a href="https://instagram.com" target="_blank" rel="noopener" aria-label="Instagram" class="social-btn" style="background:#E1306C;">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://facebook.com" target="_blank" rel="noopener" aria-label="facebook" class="social-btn" style="background:#1877F2;">
                <i class="fab fa-facebook"></i>
            </a>
            <!-- <a href="https://wa.me/123456789" target="_blank" rel="noopener" aria-label="WhatsApp" class="social-btn" style="background:#25D366;">
                <i class="fab fa-whatsapp"></i>
            </a> -->
            <a href="https://youtube.com" target="_blank" rel="noopener" aria-label="YouTube" class="social-btn" style="background:#FF0000;">
                <i class="fab fa-youtube"></i>
            </a>
            <a href="https://github.com" target="_blank" rel="noopener" aria-label="GitHub" class="social-btn" style="background:#333;">
                <i class="fab fa-github"></i>
            </a>
            <a href="https://linkedin.com" target="_blank" rel="noopener" aria-label="LinkedIn" class="social-btn" style="background:#0077B5;">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>

        <button class="float-btn" id="mainBtn" aria-label="Open social menu">
            <i class="fas fa-user-plus"></i>
            <span class="tooltip">Follow Me</span>
        </button>
    </div>

    <script>
        const floatBtnContainer = document.getElementById('floatBtnContainer');
        const mainBtn = document.getElementById('mainBtn');

        mainBtn.addEventListener('click', () => {
            floatBtnContainer.classList.toggle('active');
        });

        // Klik di luar tombol untuk menutup menu (opsional)
        document.addEventListener('click', (e) => {
            if (!floatBtnContainer.contains(e.target)) {
                floatBtnContainer.classList.remove('active');
            }
        });
    </script>

</div>