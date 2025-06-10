<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'ODS Indonesia' }}</title>
    @livewireStyles

    <link rel="icon" href="/assets/img/logo/logo-ico.png" type="image/png" />

    <link rel="stylesheet" href="/assets/css/icon.css" />
    <link rel="stylesheet" href="/assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="/assets/css/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/wa-btn.css" />
    <link rel="stylesheet" href="/assets/css/float-btn.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

</head>

<body class="antialiased text-base leading-relaxed font-primary text-dark">

    <!-- <div id="preloader">
        <div class="loader_line"></div>
    </div> -->

    @if (!Str::contains(Request::path(), 'dmin'))
        <livewire:FrontHeader />
        <livewire:WidgetSocmed />
        <livewire:WidgetWa />
    @endif

    {{ $slot }}


    <livewire:FrontFooter />

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <script src="/assets/js/jquery-3.6.2.min.js"></script>
    <script src="/assets/js/isotope.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/tilt.jquery.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/custom.js"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @livewireScripts
</body>

</html>
