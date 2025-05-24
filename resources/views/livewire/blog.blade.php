<div>
    <section class="bg-[url('../img/slider/1.jpg')] bg-center bg-cover lg:py-36 py-24 relative dizme_tm_header">

        <!-- TEXT HEADER -->
        <div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="text-center max-w-[680px] mx-auto px-4 mb-16">
                <p class="text-custom text-[20px] md:text-2xl font-medium font-secondary">My Blog</p>
                <h3 class="md:text-[48px] text-[35px] leading-[1.25] mt-2">Our Recent Updates, Blog, Tips, Tricks & More</h3>
            </div>
        </div>

        <!-- Latest Post -->
        <div class="wow fadeInUp mb-12" data-wow-duration="1s" data-wow-delay="0.2s">
            <div class="bg-white rounded-lg overflow-hidden shadow-lg max-w-4xl mx-auto">
                <a href="/Blog-single">
                    <div class="w-full relative pt-[56.25%] overflow-hidden"> <!-- 16:9 -->
                        <img src="/assets/img/skills/1.jpg" class="absolute top-0 left-0 w-full h-full object-cover" />
                    </div>
                </a>
                <div class="text-center p-6 font-secondary">
                    <p class="text-sm text-gray-500 mb-2">
                        April 20, 2025 — <span class="bg-gray-100 text-gray-800 px-2 py-1 text-xs rounded-full">Inspiration</span>
                    </p>
                    <a href="/Blog-single">
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 hover:text-[#00d0be] transition mb-3">
                            The Power of Simple Design for Real Impact
                        </h2>
                    </a>
                    <p class="text-gray-600 text-sm max-w-2xl mx-auto">
                        Discover how minimal design can transform user experience. A practical guide to focusing on clarity, intent, and usability — without sacrificing beauty.
                    </p>
                </div>
            </div>
        </div>

        <livewire:BlogList />

    </section>

</div>