<div>
    <!-- Start Portfolio -->
    <section class="pt-[113px] md:pt-[185px] pb-[88px] md:pb-[165px] relative" id="portfolio">
        <div class="container relative z-10">
            <div class="grid grid-cols-1">
                <div class="text-center max-w-[680px] mx-auto">
                    <p class="text-custom text-[20px] md:text-2xl font-medium font-secondary">Portfolio</p>
                    <h3 class="md:text-[48px] text-[35px] leading-[1.25] mb-[23px] mt-1.5">My Amazing Works</h3>
                    <p class="text-muted text-lg leading-[30px]">Most common methods for designing websites that work well on desktop is responsive and adaptive design</p>
                </div>
            </div>
            <div class="text-center wow fadeInLeft" data-wow-duration="1s">
                <div x-data="{ tab: 'system' }" class="flex w-full min-h-[300px] border rounded-lg overflow-hidden mt-10">
                    <!-- Sidebar Buttons -->
                    <div class="w-20 bg-[#00d0be] border-r flex flex-col items-center py-4 space-y-6">
                        <button @click="tab = 'system'" :class="tab === 'system' ? 'text-blue-600' : 'text-gray-600'" class="hover:text-blue-600">
                            <i class="fas fa-code text-xl" style="color: white;"></i>
                        </button>
                        <button @click="tab = 'uiux'" :class="tab === 'uiux' ? 'text-blue-600' : 'text-gray-600'" class="hover:text-blue-600">
                            <i class="fas fa-pencil-ruler text-xl" style="color: white;"></i>
                        </button>
                        <button @click="tab = 'wordpress'" :class="tab === 'wordpress' ? 'text-blue-600' : 'text-gray-600'" class="hover:text-blue-600">
                            <i class="fab fa-wordpress text-xl" style="color: white;"></i>
                        </button>
                        <button @click="tab = 'ecommerce'" :class="tab === 'ecommerce' ? 'text-blue-600' : 'text-gray-600'" class="hover:text-blue-600">
                            <i class="fas fa-shopping-cart text-xl" style="color: white;"></i>
                        </button>
                        <button @click="tab = 'company'" :class="tab === 'company' ? 'text-blue-600' : 'text-gray-600'" class="hover:text-blue-600">
                            <i class="fas fa-building text-xl" style="color: white;"></i>
                        </button>
                        <button @click="tab = 'graphic'" :class="tab === 'graphic' ? 'text-blue-600' : 'text-gray-600'" class="hover:text-blue-600">
                            <i class="fas fa-palette text-xl" style="color: white;"></i>
                        </button>
                    </div>

                    <!-- Content Area -->
                    <div class="flex-1 p-6 relative">
                        <!-- Website System -->
                        <div x-show="tab === 'system'" x-transition.opacity.duration.400ms class="absolute inset-0 p-6" x-cloak>
                            <h2 class="text-custom text-[20px] md:text-2xl font-medium font-secondary">Website System Development</h2>
                            <p>Custom-built website systems tailored to your business workflow.</p>
                        </div>

                        <!-- UI/UX -->
                        <div x-show="tab === 'uiux'" x-transition.opacity.duration.400ms class="absolute inset-0 p-6" x-cloak>
                            <h2 class="text-custom text-[20px] md:text-2xl font-medium font-secondary">UI/UX Design</h2>
                            <p>User-centered design to improve usability and engagement.</p>
                        </div>

                        <!-- WordPress -->
                        <div x-show="tab === 'wordpress'" x-transition.opacity.duration.400ms class="absolute inset-0 p-6" x-cloak>
                            <h2 class="text-custom text-[20px] md:text-2xl font-medium font-secondary">WordPress Development</h2>
                            <p>Flexible WordPress websites with themes, plugins, and SEO.</p>
                        </div>

                        <!-- E-commerce -->
                        <div x-show="tab === 'ecommerce'" x-transition.opacity.duration.400ms class="absolute inset-0 p-6" x-cloak>
                            <h2 class="text-custom text-[20px] md:text-2xl font-medium font-secondary">E-commerce</h2>
                            <p>Online store development with secure payment integration.</p>
                        </div>

                        <!-- Company Profile -->
                        <div x-show="tab === 'company'" x-transition.opacity.duration.400ms class="absolute inset-0 p-6" x-cloak>
                            <h2 class="text-custom text-[20px] md:text-2xl font-medium font-secondary">Company Profile Website</h2>
                            <p>Professional company profile websites to boost credibility.</p>
                        </div>

                        <!-- Graphic Design -->
                        <div x-show="tab === 'graphic'" x-transition.opacity.duration.400ms class="absolute inset-0 p-6" x-cloak>
                            <h2 class="text-custom text-[20px] md:text-2xl font-medium font-secondary">Graphic Design</h2>
                            <p>Logos, brochures, social media designs & more.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- End Portfolio -->
</div>