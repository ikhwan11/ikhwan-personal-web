<div>
    <section class="bg-[url('../img/slider/1.jpg')] bg-center bg-cover lg:py-36 py-24 relative dizme_tm_header">
        <div class=" text-gray-800 min-h-screen flex items-center justify-center px-4 py-10">

            <div class="w-full max-w-2xl">

                <!-- Header User Info -->
                <div class="wow fadeInUp mb-12" data-wow-duration="1s" data-wow-delay="0.2s">
                    <div class="flex items-center gap-4 mb-6 relative">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Leyla Ludic" class="w-12 h-12 rounded-full object-cover">

                        <div class="relative">
                            <span id="username" class="font-semibold text-gray-900 cursor-pointer relative hover:underline">
                                <strong>Leyla Ludic</strong>
                            </span>
                            <!-- Tooltip -->
                            <div id="tooltip" class="hidden absolute top-full mt-2 left-0 bg-gray-800 text-white text-sm px-3 py-2 rounded-md shadow-md z-10 w-64">
                                Content Strategist & Writer passionate about design transparency.
                            </div>
                            <div class="text-sm  text-[#00d0be]"><strong>Jan 18 · 8 min read</strong></div>
                        </div>
                    </div>
                </div>

                <!-- Judul -->
                <div class="wow fadeInUp mb-12" data-wow-duration="1s" data-wow-delay="0.2s">
                    <h1 class="md:text-[48px] text-[35px] leading-[1.25] font-bold mb-4">
                        Announcing a free plan for small teams
                    </h1>
                </div>


                <!-- Paragraf pembuka -->
                <div class="wow fadeInUp mb-12" data-wow-duration="1s" data-wow-delay="0.2s">
                    <p class="mb-4 text-gray-700 leading-relaxed">
                        At Preline, our mission has always been focused on bringing openness and transparency to the design process.
                        We've always believed that by providing a space where designers can share ongoing work not only empowers
                        them to make better products, it also helps them grow.
                    </p>

                    <p class="mb-6 text-gray-700 leading-relaxed">
                        We're proud to be a part of creating a more open culture and to continue building a product that supports this vision.
                    </p>

                    <!-- Gambar Artikel -->
                    <div class="my-10">
                        <img src="/assets/img/skills/1.jpg" alt="Woman smiling at a table" class="rounded-lg shadow-md w-full ">
                        <p class="text-sm text-white text-center mt-2">A woman sitting at a table.</p>
                    </div>

                    <!-- Paragraf konten -->
                    <p class="mt-6 text-gray-700 leading-relaxed">
                        As we've grown, we've seen how Preline has helped companies such as Spotify, Microsoft, Airbnb, Facebook,
                        and Intercom bring their designers closer together to create amazing things. We've also learned that when
                        the culture of sharing is brought in earlier, the better teams adapt and communicate with one another.
                    </p>

                </div>

                <!-- Footer Blog Post -->
                <div class="mt-10 flex flex-col gap-6 items-start md:items-center md:flex-row">
                    <div class="row">
                        <div class="col ">
                            <!-- Tags -->
                            <div class="wow fadeInLeft mb-12" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div class="flex flex-wrap gap-2">
                                    <span class="bg-gray-100 text-gray-700 text-sm px-4 py-2 rounded-full">Plan</span>
                                    <span class="bg-gray-100 text-gray-700 text-sm px-4 py-2 rounded-full">Web development</span>
                                    <span class="bg-gray-100 text-gray-700 text-sm px-4 py-2 rounded-full">Free</span>
                                    <span class="bg-gray-100 text-gray-700 text-sm px-4 py-2 rounded-full">Team</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Interaction Buttons -->
                            <div class="wow fadeInRight mb-12" data-wow-duration="1s" data-wow-delay="0.2s">
                                <div class="flex items-center gap-4 px-6 py-2 bg-[#00d0be] rounded-full shadow-md border text-white text-sm w-fit">
                                    <!-- Like -->
                                    <div class="flex items-center gap-1 cursor-pointer hover:text-[#ffb324]">
                                        <i class="fa-regular fa-heart text-base"></i>
                                        <span>875</span>
                                    </div>

                                    <span class="text-gray-300">|</span>

                                    <!-- Comment -->
                                    <div class="flex items-center gap-1 cursor-pointer hover:text-[#ffb324]">
                                        <i class="fa-regular fa-comment text-base"></i>
                                        <span>16</span>
                                    </div>

                                    <span class="text-gray-300">|</span>

                                    <!-- Share -->
                                    <div class="flex items-center gap-1 cursor-pointer hover:text-[#ffb324]">
                                        <i class="fa-solid fa-share-nodes text-base"></i>
                                        <span>Share</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const tooltip = document.getElementById('tooltip');
                const trigger = document.getElementById('username');

                trigger.addEventListener('mouseenter', () => tooltip.classList.remove('hidden'));
                trigger.addEventListener('mouseleave', () => tooltip.classList.add('hidden'));
            });
        </script>
    </section>
</div>