<div>
    <div class="fixed top-0 w-full z-50">
        <nav class="py-[25px] relative ease-in-out duration-500 mobile-nav max-[768px]:shadow-[0px_0px_10px_rgb(0,0,0,0.1)] max-[768px]:py-[10px] max-[768px]:bg-white">
            <div class="container">
                <div class="flex items-center justify-between md:block">
                    <div class="justify-between items-center flex w-full">
                        <div class="z-50 relative">
                            <a href="/">
                                <img src="/assets/img/logo/logo.png" class="lg:max-w-[150px] max-w-[90px]" alt="" />
                            </a>
                        </div>
                        <div>
                            <button class="block md:hidden outline-none mobile-menu-button">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
                            </button>
                        </div>
                        <div class="hidden md:block">
                            @php
                            $isHome = request()->is('/');
                            @endphp

                            <ul class="list-none flex space-x-2 lg:space-x-[30px] items-center">
                                <li class="home">
                                    <a href="{{ $isHome ? '#home' : '/' }}" class="font-medium hover:text-custom font-secondary ease-in-out duration-300 inline-block leading-6 p-2 ">Home</a>
                                </li>
                                <li class="about">
                                    <a href="{{ $isHome ? '#about' : '/#about' }}" class="font-medium hover:text-custom font-secondary ease-in-out duration-300 inline-block leading-6 p-2">About</a>
                                </li>
                                <!-- <li class="product">
                                    <a href="{{ $isHome ? '#product' : '/#product' }}" class="font-medium hover:text-custom font-secondary ease-in-out duration-300 inline-block leading-6 p-2">Product</a>
                                </li> -->
                                <li class="portfolio">
                                    <a href="{{ $isHome ? '#portfolio' : '/#portfolio' }}" class="font-medium hover:text-custom font-secondary ease-in-out duration-300 inline-block leading-6 p-2">Portfolio</a>
                                </li>
                                <li class="service">
                                    <a href="{{ $isHome ? '#service' : '/#service' }}" class="font-medium hover:text-custom font-secondary ease-in-out duration-300 inline-block leading-6 p-2">Service</a>
                                </li>
                                <li class="blog">
                                    <a href="{{ $isHome ? '#blog' : '/#blog' }}" class="font-medium hover:text-custom font-secondary ease-in-out duration-300 inline-block leading-6 p-2">Blog</a>
                                </li>
                                <li class="contact">
                                    <a href="{{ $isHome ? '#contact' : '/#contact' }}" class="font-medium hover:text-custom font-secondary ease-in-out duration-300 inline-block leading-6 p-2">Contact</a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class="hidden mobile-menu md:hidden">
                    @php
                    $isHome = request()->is('/');
                    @endphp

                    <div class="pt-5">
                        <ul class="flex flex-col gap-2">
                            <li class="home">
                                <a href="{{ $isHome ? '#home' : '/' }}" class="text-base font-medium hover:text-custom font-secondary ease-in-out duration-300 inline-block leading-6 p-2">Home</a>
                            </li>
                            <li class="about">
                                <a href="{{ $isHome ? '#about' : '/#about' }}" class="text-base font-medium hover:text-custom font-secondary ease-in-out duration-300 inline-block leading-6 p-2">About</a>
                            </li>
                            <!-- <li class="product">
                                <a href="{{ $isHome ? '#product' : '/#product' }}" class="text-base font-medium hover:text-custom font-secondary ease-in-out duration-300 inline-block leading-6 p-2">Product</a>
                            </li> -->
                            <li class="portfolio">
                                <a href="{{ $isHome ? '#portfolio' : '/#portfolio' }}" class="text-base font-medium hover:text-custom font-secondary ease-in-out duration-300 inline-block leading-6 p-2">Portfolio</a>
                            </li>
                            <li class="service">
                                <a href="{{ $isHome ? '#service' : '/#service' }}" class="text-base font-medium hover:text-custom font-secondary ease-in-out duration-300 inline-block leading-6 p-2">Service</a>
                            </li>
                            <li class="blog">
                                <a href="{{ $isHome ? '#blog' : '/#blog' }}" class="text-base font-medium hover:text-custom font-secondary ease-in-out duration-300 inline-block leading-6 p-2">Blog</a>
                            </li>
                            <li class="contact">
                                <a href="{{ $isHome ? '#contact' : '/#contact' }}" class="text-base font-medium hover:text-custom font-secondary ease-in-out duration-300 inline-block leading-6 p-2">Contact</a>
                            </li>
                            <li>
                                <a href="#" class="mt-[10px] btn-outline-custom relative text-sm px-3 py-1.5 rounded-sm border border-gray-300 hover:bg-gray-100 transition inline-block w-fit">
                                    Download CV
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>

</div>