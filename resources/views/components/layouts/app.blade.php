<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <title>{{ $title ?? 'Digisol Indonesia' }}</title>
    @livewireStyles

    <link rel="icon" href="/assets/img/logo/logo-ico.png" type="image/png" />

    <link rel="stylesheet" href="/assets/css/icon.css" />
    <link rel="stylesheet" href="/assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="/assets/css/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="/assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/wa-btn.css" />
    <link rel="stylesheet" href="/assets/css/float-btn.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>


</head>

<body class="antialiased text-lg leading-[30px] font-primary text-dark">

    <!-- <div id="preloader">
        <div class="loader_line"></div>
    </div> -->

    <livewire:FrontHeader />

    {{ $slot }}

    <livewire:WidgetSocmed />
    <livewire:FrontFooter />

    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <livewire:WidgetWa />

    <script src="/assets/js/jquery-3.6.2.min.js"></script>
    <script src="/assets/js/isotope.js"></script>
    <script src="/assets/js/jquery.magnific-popup.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/tilt.jquery.js"></script>
    <script src="/assets/js/wow.min.js"></script>
    <script src="/assets/js/custom.js"></script>
    @livewireScripts
</body>

</html>