<div>
    <!-- Start Home -->
    <section class="bg-[url('../img/slider/1.jpg')] flex items-center bg-center bg-cover lg:min-h-[600px] py-24 relative dizme_tm_header" id="home">

        <div class="container px-4 lg:px-8">
            <div class="grid lg:grid-cols-2 items-center gap-[25px]">
                <div class="order-2 lg:order-1">
                    <h3 class="text-custom text-[21px] text-center lg:text-left lg:text-[25px] xl:text-[45px] leading-[1.3] font-medium font-secondary">Hello, I'm</h3>
                    <h1 class="text-[42px] lg:text-[60px] xl:text-[85px] text-center lg:text-left mb-[11px] lg:mb-[18px] leading-[1.3] font-medium font-secondary">Ikhwan Sulestra</h1>
                    <p class="lg:mb-9 mb-[15px] text-lg lg:text-[19px] xl:text-[28px] text-center lg:text-left font-medium">
                        A <span class="text-[#1cbe59]">Web Developer</span> & <span class="text-[#8067f0]">Creative Designer</span>
                    </p>
                    <p class="lg:mb-[42px] text-muted mb-[30px] text-base text-center lg:text-left xl:text-[23px] leading-[1.5] max-w-[640px] mx-auto lg:ml-0">
                        I help businesses grow online by building fast, responsive websites and impactful brand designs. I build modern and functional websites using Laravel, Livewire, React, and Tailwind CSS. I also help brands stand out with unique logos, product packaging, and digital designs. Let's build something great together.
                    </p>
                    <div class="flex items-center justify-center lg:justify-start gap-[25px]">
                        <a href="#about" class="btn-custom relative">Get to know me</a>
                        <ul class="flex items-center gap-2">
                            <li>
                                <a href="#"><i class="icon-facebook-1"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-twitter-1"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-linkedin-1"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-behance"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="order-1 lg:order-2">
                    <div class="relative">
                        <img src="/assets/img/slider/personal-photo-bg.png" class="mx-auto max-w-[250px] lg:max-w-[400px] xl:max-w-[650px]" alt="" />
                        <span class="right-[110px] shadow-[24px_0px_72px_rgb(54,32,152,0.3)] top-20 hidden lg:flex items-center rounded-lg bg-[#ffffff] w-[75px] h-[75px] absolute anim_moveBottom">
                            <img class="w-10 h-10 mx-auto" src="/assets/img/svg/skills/react.png" alt="" />
                        </span>
                        <span class="left-24 shadow-[24px_0px_72px_rgb(54,32,152,0.3)] top-5 hidden lg:flex items-center rounded-lg bg-[#ffffff] w-[75px] h-[75px] absolute anim_moveBottom">
                            <img class="w-10 h-10 mx-auto" src="/assets/img/svg/skills/Laravel.png" alt="" />
                        </span>
                        <span class="left-[100px] shadow-[24px_0px_72px_rgb(54,32,152,0.3)] bottom-20 hidden lg:flex items-center rounded-lg bg-white w-[75px] h-[75px] absolute anim_moveBottom">
                            <img class="w-10 mx-auto h-10" src="/assets/img/svg/skills/figma.svg" alt="" />
                        </span>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- End Home -->

    <livewire:FrontProcessSection />
    <livewire:FrontProductSection />
    <livewire:FrontAboutSection />
    <livewire:FrontPortfolioSection />
    <livewire:FrontSkillSection />
    <livewire:FrontServiceSection />
    <livewire:FrontBlogSection />
    <livewire:FrontContactSection />

</div>