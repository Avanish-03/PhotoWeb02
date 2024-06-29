<?php include("navbar.php"); ?>

<!-- CAROUSEL -->

<section>
    <div>
        <div class="w-[100%] flex overflow-hidden ">
            <div class="lg:w-[35%] w-full">
                <div class="lg:px-5 px-2 lg:mt-16 lg:pt-24">
                    <div>
                        <h1 class="lg:text-5xl text-3xl pb-10 text-center font-light text-justify">PhotoGraphyWeb</h1>
                    </div>
                    <div class="p-5">
                        <h2 class="text-4xl font-bold">Professional Wedding & Event Photography</h2>
                        <p class="text-xl py-2">Trusted & Experienced Photographers based in Gozo & Malta. Creative Storytellers determined to showcase you, your love & your identity.</p>
                    </div>
                    <div class=" px-5 py-5">
                        <a href="testimonials.php" class="underline text-2xl ">Testimonials</a>
                        <a href="portfolio.php" class="bg-black text-white border text-xl lg:text-2xl py-1 px-4 mt-2 ml-2 hover:text-black hover:bg-white border-2 border-black rounded-md">View Portfolio</a>
                    </div>
                </div>
            </div>
            <div class="lg:w-[65%] lg:block hidden">
                <div id="controls-carousel" class="relative w-full" data-carousel="static">
                    <!-- Carousel wrapper -->
                    <div class="relative lg:h-screen overflow-hidden  md:h-96 ">
                        <!-- Item 1 -->
                        <div class="hidden " data-carousel-item="active">
                            <img src="../img/slide-img1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <!-- Item 2 -->
                        <div class="hidden " data-carousel-item>
                            <img src="../img/slide-img2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <!-- Item 3 -->
                        <div class="hidden " data-carousel-item>
                            <img src="../img/slide-img3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <!-- Item 4 -->
                        <div class="hidden " data-carousel-item>
                            <img src="../img/slide-img4.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                        <!-- Item 5 -->
                        <div class="hidden " data-carousel-item>
                            <img src="../img/slide-img5.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
                        </div>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-200 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4" />
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                            <svg class="w-4 h-4 text-white dark:text-gray-200 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- SERVICES -->

<section class="text-gray-600 body-font">
    <div class="container px-5 lg:py-24 py-5 mx-auto ">
        <div class="flex flex-col text-center w-full lg:mb-20">
            <h2 class="sm:text-xs text-black tracking-widest font-medium title-font mb-1">Photo graphy Website</h2>
            <h1 class="text-3xl md:text-5xl mb-4 text-gray-900 font-light">SERVICES</h1>
            <p class="lg:w-2/3 mx-auto  text-base">Whatever cardigan tote bag tumblr hexagon brooklyn asymmetrical gentrify, subway tile poke farm-to-table. Franzen you probably haven't heard of them man bun deep jianbing selfies heirloom prism food truck ugh squid celiac humblebrag.</p>
        </div>
        <div class="flex flex-wrap text-justify my-2 ">
            <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 lg:border-l-2 border-gray-600 border-opacity-60">
                <img src="../img/wedding-portfolio-img.jpg" class="hover:shadow-2xl mb-2 h-56 rounded-md cursor-pointer transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300" alt="">
                <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Wedding Shoot</h2>
                <p class=" text-base mb-4">Anaca Photography is a professional team of Photographers. We specialise in Event storytelling & documentary in Malta </p>
                <a href="service.php#wedding" class="text-white bg-black p-2 rounded-md hover:text-black hover:bg-white hover:border  inline-flex items-center cursor-pointer transition ease-in-out delay-150 bg-black hover:-translate-y-1 hover:scale-110 hover:bg-black duration-300 ">View More</a>
            </div>
            <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 lg:border-l-2 border-gray-600 border-opacity-60">
                <img src="../img/born-shoot-img1.jpg" class="hover:shadow-2xl mb-2 h-56 rounded-md cursor-pointer transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300 w-full" alt="">
                <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Born Baby Shoot</h2>
                <p class=" text-base mb-4">Celebrate this important day with a fun and memorable photo shoot with Anaca Photography in Gozo. </p>
                <a href="service.php#graduation" class="text-white bg-black p-2 rounded-md hover:text-black hover:bg-white hover:border  inline-flex items-center cursor-pointer transition ease-in-out delay-150 bg-black hover:-translate-y-1 hover:scale-110 hover:bg-black duration-300 ">View More</a>
            </div>
            <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 lg:border-l-2 border-gray-600 border-opacity-60">
                <img src="../img/pre-wedding-shoot-img1.jpg" class="hover:shadow-2xl mb-2 h-56 rounded-md cursor-pointer transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300" alt="">
                <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Pre Wedding Shoot</h2>
                <p class=" text-base mb-4">A photoshoot to celebrate your child's First Holy Communion, an important event in their life.</p>
                <a href="service.php#comunication" class="text-white bg-black p-2 rounded-md hover:text-black hover:bg-white hover:border  inline-flex items-center cursor-pointer transition ease-in-out delay-150 bg-black hover:-translate-y-1 hover:scale-110 hover:bg-black duration-300 ">View More</a>
            </div>
            <div class="xl:w-1/4 lg:w-1/2 md:w-full px-8 py-6 lg:border-l-2 border-gray-600 border-opacity-60">
                <img src="../img/engagement-shoot-img2.jpg" class="hover:shadow-2xl mb-2 h-56 rounded-md cursor-pointer transition ease-in-out delay-150  hover:-translate-y-1 hover:scale-110 duration-300 w-full" alt="">
                <h2 class="text-lg sm:text-xl text-gray-900 font-medium title-font mb-2">Engagement Shoot</h2>
                <p class=" text-base mb-4">It's important to capture these moments because you won't be pregnant forever will fly by quicker than you anticipated.</p>
                <a href="service.php#maternity" class="text-white bg-black p-2 rounded-md hover:text-black hover:bg-white hover:border  inline-flex items-center cursor-pointer transition ease-in-out delay-150 bg-black hover:-translate-y-1 hover:scale-110 hover:bg-black duration-300 ">View More</a>
            </div>
        </div>

    </div>
</section>

<!-- TESTIMONIALS -->
<section class="text-gray-600 body-font">
    <div class="container px-5 py-10 mx-auto bg-cover bg-fixed" style="background-image: url('../img/slide-img5.jpg');">
        <h1 class="text-center my-5 text-5xl font-light text-white">Client testimonials</h1>
        <div class="flex flex-wrap -m-4">
            <div class="p-4 lg:w-1/3">
                <div class="h-full bg-gray-200 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                    <p class=" mb-3 text-2xl">"Darren, the photographer, was just brilliant! He captured all the special moments and more; We had asked for natural and spontaneous photos and he did just that."</p>

                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-700 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-600">
                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>1.2K
                        </span>
                        <span class="text-gray-700 inline-flex items-center leading-none text-sm">
                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                            </svg>6
                        </span>
                    </div>
                </div>
            </div>
            <div class="p-4 lg:w-1/3">
                <div class="h-full bg-gray-200 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                    <p class=" mb-3 text-2xl">"I was blown away by their professionalism, quality photographs & timeliness. I was impressed by how little direction they required in order to capture the essence of the conference."</p>

                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-700 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-600">
                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>1.2K
                        </span>
                        <span class="text-gray-700 inline-flex items-center leading-none text-sm">
                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                            </svg>6
                        </span>
                    </div>
                </div>
            </div>
            <div class="p-4 lg:w-1/3">
                <div class="h-full bg-gray-200 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                    <p class=" mb-3 text-2xl">"The service was brilliant and their approach is very professional and fast. Their Candid Photos tell a story."</p>

                    <div class="text-center mt-2 leading-none flex justify-center absolute bottom-0 left-0 w-full py-4">
                        <span class="text-gray-700 mr-3 inline-flex items-center leading-none text-sm pr-3 py-1 border-r-2 border-gray-600">
                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg>1.2K
                        </span>
                        <span class="text-gray-700 inline-flex items-center leading-none text-sm">
                            <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                                <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                            </svg>6
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <button class="flex mx-auto mt-16 text-white bg-gray-500 border-4 border-black lg:block hidden py-2 px-8 focus:outline-none hover:bg-black rounded text-lg">More Testimonials</button>
    </div>
</section>

<!-- GALLERY -->
<section class="text-gray-600 body-font">
    <div class="container px-5 lg:pt-24 lg:pb-16 mx-auto pb-5 flex flex-wrap">
        <div class="flex w-full my-10 flex-wrap justify-center">
            <h1 class="sm:text-3xl text-2xl font-light  text-gray-900 lg:w-1/3 lg:mb-0 mb-4">Photo Graphy Website's Gallery</h1>
        </div>
        <div class="flex flex-wrap md:-m-2 -m-1">
            <div class="flex flex-wrap w-1/2">
                <div class="md:p-2 p-1 w-1/2">
                    <img alt="gallery" class="w-full object-cover h-full object-center block" src="../img/slide-img1.jpg">
                </div>
                <div class="md:p-2 p-1 w-1/2">
                    <img alt="gallery" class="w-full object-cover h-full object-center block" src="../img/slide-img2.jpg">
                </div>
                <div class="md:p-2 p-1 w-full">
                    <img alt="gallery" class="w-full h-full object-cover object-center block" src="../img/slide-img3.jpg">
                </div>
            </div>
            <div class="flex flex-wrap w-1/2">
                <div class="md:p-2 p-1 w-full">
                    <img alt="gallery" class="w-full h-full object-cover object-center block" src="../img/slide-img4.jpg">
                </div>
                <div class="md:p-2 p-1 w-1/2">
                    <img alt="gallery" class="w-full object-cover h-full object-center block" src="../img/slide-img5.jpg">
                </div>
                <div class="md:p-2 p-1 w-1/2">
                    <img alt="gallery" class="w-full object-cover h-full object-center block" src="../img/pre-wedding-shoot-img1.jpg">
                </div>
            </div>
        </div>
    </div>
</section>

<?php include("footer.php"); ?>