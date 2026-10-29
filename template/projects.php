<?php /* Template Name: Projects */ ?>

<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

get_header(); ?>

<div>

    <main class="flex-1">
        <div class="min-h-screen">
            <?php get_template_part('/template/components/headers/header', 'page'); ?>

            <section class="py-20 bg-stone-50">
                <style>
                    /* fix layout shifts */

                    .blaze-slider.my-slider {
                        --slides-to-show: 3;
                        --slide-gap: 20px;
                    }

                    @media (max-width: 900px) {
                        .blaze-slider.my-slider {
                            --slides-to-show: 2;
                        }
                    }

                    @media (max-width: 500px) {
                        .blaze-slider.my-slider {
                            --slides-to-show: 1;
                        }
                    }

                    /* other styles */

                    .blaze-slider.dragging .blaze-track {
                        cursor: grabbing;
                    }



                    /* pagination buttons */

                    .blaze-pagination {
                        display: flex;
                        gap: 15px;
                        justify-content: center;
                    }

                    .blaze-pagination button {
                        font-size: 0;
                        border-radius: 50%;
                        background: hsl(0deg, 0%, 15%);
                        cursor: pointer;
                        transition: transform 200ms ease, background-color 300ms ease;
                        padding: 3px;
                    }

                    .blaze-pagination button.active {
                        background-color: #1e9ae0;
                        transform: scale(1.3);
                        outline: 1px solid #1e9ae0;
                        outline-offset: 5px;
                    }

                    .blaze-next,
                    .blaze-prev {
                        border: none;
                        font-size: 0;
                        cursor: pointer;
                        background-position: center;
                        background-size: 100%;
                    }

                    /* for loop: false */
                    .blaze-slider.start .blaze-prev,
                    .blaze-slider.end .blaze-next {
                        opacity: 0.5;
                        cursor: not-allowed;
                    }

                    /* other styles */
                </style>
                <div class="ast-container mb-12">
                    <p class="text-lg lg:text-xl text-slate-600 max-w-4xl mx-auto text-center leading-relaxed mb-0">Embarking on a journey that transcends borders, our premium marble, granite, and limestone products have graced projects of distinction worldwide. With a commitment to excellence and a passion for natural beauty, our materials have adorned iconic spaces, from architectural marvelous projects to serene retreats. Our global reach is a testament to the enduring appeal of our offerings, as our materials find their way into the hands of visionary designers and discerning homeowners across continents.</p>
                    <p class="text-lg lg:text-xl text-slate-600 max-w-4xl mx-auto text-center leading-relaxed mt-6 mb-0">Fuelled by a dedication to quality, we meticulously select and source the finest natural stones, ensuring that each slab and tile reflects the authentic beauty of the earth's creations. These exquisite materials, renowned for their distinct textures and exquisite patterns, serve as a canvas upon which design dreams come to life. From the timeless allure of marble, to the resolute strength of granite and the premium elegance of limestone, our portfolio resonates with diversity for our international clients.</p>
                </div>
                <div class="ast-container transition-all">
                    <div class="grid lg:grid-cols-2 gap-8">
                        <div class="blaze-slider my-slider space-y-4" data-slider>
                            <div class="blaze-container">
                                <div class="blaze-track-container">
                                    <div class="blaze-track">
                                        <article role="group" aria-roledescription="slide" data-aos="zoom-in">
                                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm activity-card group h-full">
                                                <div class="p-0 h-full flex flex-col">
                                                    <div class="relative aspect-[4/3] overflow-hidden rounded-xl">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/varna-1-C6AnuIUO.jpg" alt="Red Brick Building" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article role="group" aria-roledescription="slide" data-aos="zoom-in">
                                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm activity-card group h-full">
                                                <div class="p-0 h-full flex flex-col">
                                                    <div class="relative aspect-[4/3] overflow-hidden rounded-xl">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/varna-2-BNOl89A9.jpg" alt="Red Brick Building" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article role="group" aria-roledescription="slide" data-aos="zoom-in">
                                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm activity-card group h-full">
                                                <div class="p-0 h-full flex flex-col">
                                                    <div class="relative aspect-[4/3] overflow-hidden rounded-xl">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/varna-3--_s7JEsN.jpg" alt="Red Brick Building" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article role="group" aria-roledescription="slide" data-aos="zoom-in">
                                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm activity-card group h-full">
                                                <div class="p-0 h-full flex flex-col">
                                                    <div class="relative aspect-[4/3] overflow-hidden rounded-xl">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/varna-4-7U8p4Y0B.jpg" alt="Red Brick Building" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article role="group" aria-roledescription="slide" data-aos="zoom-in">
                                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm activity-card group h-full">
                                                <div class="p-0 h-full flex flex-col">
                                                    <div class="relative aspect-[4/3] overflow-hidden rounded-xl">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/varna-5-CMair696.jpg" alt="Red Brick Building" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article role="group" aria-roledescription="slide" data-aos="zoom-in">
                                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm activity-card group h-full">
                                                <div class="p-0 h-full flex flex-col">
                                                    <div class="relative aspect-[4/3] overflow-hidden rounded-xl">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/varna-6-BPp_DySI.jpg" alt="Red Brick Building" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                                                    </div>
                                                </div>
                                            </div>
                                        </article>

                                    </div>
                                    <button class="blaze-prev inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium text-black transition-colors focus-visible:white focus:bg-white disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 border hover:text-accent-foreground absolute h-8 w-8 rounded-full top-1/2 -translate-y-1/2 left-4 bg-white hover:bg-background border-olive-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left h-4 w-4">
                                            <path d="m12 19-7-7 7-7"></path>
                                            <path d="M19 12H5"></path>
                                        </svg>
                                    </button>
                                    <button class="blaze-next inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium text-black transition-colors focus-visible:white focus:bg-white disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 border hover:text-accent-foreground absolute h-8 w-8 rounded-full top-1/2 -translate-y-1/2 right-4 bg-white hover:bg-background border-olive-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right h-4 w-4">
                                            <path d="M5 12h14"></path>
                                            <path d="m12 5 7 7-7 7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <h3 class="font-serif text-xl font-bold text-slate-800 text-center">International Hotel and Casino, Varna</h3>
                        </div>
                        <div class="blaze-slider my-slider space-y-4" data-slider>
                            <div class="blaze-container">
                                <div class="blaze-track-container">
                                    <div class="blaze-track">
                                        <article role="group" aria-roledescription="slide" data-aos="zoom-in">
                                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm activity-card group h-full">
                                                <div class="p-0 h-full flex flex-col">
                                                    <div class="relative aspect-[4/3] overflow-hidden rounded-xl">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/radisson-1-CEy7JljI.jpg" alt="Red Brick Building" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article role="group" aria-roledescription="slide" data-aos="zoom-in">
                                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm activity-card group h-full">
                                                <div class="p-0 h-full flex flex-col">
                                                    <div class="relative aspect-[4/3] overflow-hidden rounded-xl">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/radisson-2-DmVTcuSy.jpg" alt="Red Brick Building" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article role="group" aria-roledescription="slide" data-aos="zoom-in">
                                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm activity-card group h-full">
                                                <div class="p-0 h-full flex flex-col">
                                                    <div class="relative aspect-[4/3] overflow-hidden rounded-xl">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/radisson-3-CGNcugYG.jpg" alt="Red Brick Building" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article role="group" aria-roledescription="slide" data-aos="zoom-in">
                                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm activity-card group h-full">
                                                <div class="p-0 h-full flex flex-col">
                                                    <div class="relative aspect-[4/3] overflow-hidden rounded-xl">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/radisson-4-BkTtYru5.jpg" alt="Red Brick Building" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <button class="blaze-prev inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium text-black transition-colors focus-visible:white focus:bg-white disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 border hover:text-accent-foreground absolute h-8 w-8 rounded-full top-1/2 -translate-y-1/2 left-4 bg-white hover:bg-background border-olive-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left h-4 w-4">
                                            <path d="m12 19-7-7 7-7"></path>
                                            <path d="M19 12H5"></path>
                                        </svg>
                                    </button>
                                    <button class="blaze-next inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium text-black transition-colors focus-visible:white focus:bg-white disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 border hover:text-accent-foreground absolute h-8 w-8 rounded-full top-1/2 -translate-y-1/2 right-4 bg-white hover:bg-background border-olive-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right h-4 w-4">
                                            <path d="M5 12h14"></path>
                                            <path d="m12 5 7 7-7 7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <h3 class="font-serif text-xl font-bold text-slate-800 text-center">Radisson Hotel, Ukraine</h3>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-white">
                <div class="ast-container transition-all">
                    <div class="grid lg:grid-cols-2 gap-8">
                        <div class="blaze-slider my-slider space-y-4" data-slider>
                            <div class="blaze-container">
                                <div class="blaze-track-container">
                                    <div class="blaze-track">
                                        <article role="group" aria-roledescription="slide" data-aos="zoom-in">
                                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm activity-card group h-full">
                                                <div class="p-0 h-full flex flex-col">
                                                    <div class="relative aspect-[4/3] overflow-hidden rounded-xl">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/oriental-1-7Q5xDdxw.jpg" alt="Red Brick Building" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article role="group" aria-roledescription="slide" data-aos="zoom-in">
                                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm activity-card group h-full">
                                                <div class="p-0 h-full flex flex-col">
                                                    <div class="relative aspect-[4/3] overflow-hidden rounded-xl">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/oriental-2-DcmgDbEX.jpg" alt="Red Brick Building" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article role="group" aria-roledescription="slide" data-aos="zoom-in">
                                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm activity-card group h-full">
                                                <div class="p-0 h-full flex flex-col">
                                                    <div class="relative aspect-[4/3] overflow-hidden rounded-xl">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/oriental-3-CQkvBYng.jpg" alt="Red Brick Building" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article role="group" aria-roledescription="slide" data-aos="zoom-in">
                                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm activity-card group h-full">
                                                <div class="p-0 h-full flex flex-col">
                                                    <div class="relative aspect-[4/3] overflow-hidden rounded-xl">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/oriental-4-CZ-zoYJK.jpg" alt="Red Brick Building" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                    </div>
                                    <button class="blaze-prev inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium text-black transition-colors focus-visible:white focus:bg-white disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 border hover:text-accent-foreground absolute h-8 w-8 rounded-full top-1/2 -translate-y-1/2 left-4 bg-white hover:bg-background border-olive-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left h-4 w-4">
                                            <path d="m12 19-7-7 7-7"></path>
                                            <path d="M19 12H5"></path>
                                        </svg>
                                    </button>
                                    <button class="blaze-next inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium text-black transition-colors focus-visible:white focus:bg-white disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 border hover:text-accent-foreground absolute h-8 w-8 rounded-full top-1/2 -translate-y-1/2 right-4 bg-white hover:bg-background border-olive-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right h-4 w-4">
                                            <path d="M5 12h14"></path>
                                            <path d="m12 5 7 7-7 7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <h3 class="font-serif text-xl font-bold text-slate-800 text-center">Oriental Resort, Sharm El Sheikh</h3>
                        </div>
                        <div class="blaze-slider my-slider space-y-4" data-slider>
                            <div class="blaze-container">
                                <div class="blaze-track-container">
                                    <div class="blaze-track">
                                        <article role="group" aria-roledescription="slide" data-aos="zoom-in">
                                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm activity-card group h-full">
                                                <div class="p-0 h-full flex flex-col">
                                                    <div class="relative aspect-[4/3] overflow-hidden rounded-xl">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/spa-1-CQzc1Bhk.jpg" alt="Red Brick Building" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article role="group" aria-roledescription="slide" data-aos="zoom-in">
                                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm activity-card group h-full">
                                                <div class="p-0 h-full flex flex-col">
                                                    <div class="relative aspect-[4/3] overflow-hidden rounded-xl">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/spa-2-B5i2QhWG.jpg" alt="Red Brick Building" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article role="group" aria-roledescription="slide" data-aos="zoom-in">
                                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm activity-card group h-full">
                                                <div class="p-0 h-full flex flex-col">
                                                    <div class="relative aspect-[4/3] overflow-hidden rounded-xl">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/spa-3-COZUv4go.jpg" alt="Red Brick Building" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article role="group" aria-roledescription="slide" data-aos="zoom-in">
                                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm activity-card group h-full">
                                                <div class="p-0 h-full flex flex-col">
                                                    <div class="relative aspect-[4/3] overflow-hidden rounded-xl">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/spa-4-DFnyLaHm.jpg" alt="Red Brick Building" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                                                    </div>
                                                </div>
                                            </div>
                                        </article>
                                        <article role="group" aria-roledescription="slide" data-aos="zoom-in">
                                            <div class="rounded-lg border bg-card text-card-foreground shadow-sm activity-card group h-full">
                                                <div class="p-0 h-full flex flex-col">
                                                    <div class="relative aspect-[4/3] overflow-hidden rounded-xl">
                                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/spa-5-Dk2u4Kip.jpg" alt="Red Brick Building" class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
                                                    </div>
                                                </div>
                                            </div>
                                        </article>

                                    </div>
                                    <button class="blaze-prev inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium text-black transition-colors focus-visible:white focus:bg-white disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 border hover:text-accent-foreground absolute h-8 w-8 rounded-full top-1/2 -translate-y-1/2 left-4 bg-white hover:bg-background border-olive-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-left h-4 w-4">
                                            <path d="m12 19-7-7 7-7"></path>
                                            <path d="M19 12H5"></path>
                                        </svg>
                                    </button>
                                    <button class="blaze-next inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium text-black transition-colors focus-visible:white focus:bg-white disabled:pointer-events-none disabled:opacity-50 [&_svg]:pointer-events-none [&_svg]:size-4 [&_svg]:shrink-0 border hover:text-accent-foreground absolute h-8 w-8 rounded-full top-1/2 -translate-y-1/2 right-4 bg-white hover:bg-background border-olive-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right h-4 w-4">
                                            <path d="M5 12h14"></path>
                                            <path d="m12 5 7 7-7 7"></path>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <h3 class="font-serif text-xl font-bold text-slate-800 text-center">Czech Spa, Europe</h3>
                        </div>
                    </div>
                </div>
                <script>
                    window.addEventListener('load', () => {
                        document.querySelectorAll('[data-slider]').forEach((sliderEl) => {
                            new BlazeSlider(sliderEl, {
                                all: {
                                    enableAutoplay: true,
                                    slidesToScroll: 1,
                                    slidesToShow: 1,
                                    transitionDuration: 700,
                                    loop: false,
                                    control: true
                                },
                                "(max-width: 900px)": {
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                    slidesGap: "40px",
                                },
                                "(max-width: 500px)": {
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                },
                            });
                        });
                    });
                </script>
            </section>
            <section class="py-20 bg-stone-100">
                <div class="ast-container">
                    <div class="text-center mb-16 transition-all">
                        <h2 class="font-serif text-4xl lg:text-5xl font-bold text-slate-800 mb-8">About Our Projects</h2>
                        <p class="text-lg text-slate-600 max-w-5xl mx-auto leading-relaxed mb-0">In all of our projects, whether they are grand architectural masterpiece, an opulent hotel lobby, a tranquil spa retreat, or a cozy residential haven, our materials breathe life into visions. From luxurious hotels that exude opulence to residential abodes that epitomize comfort, our portfolio showcases the transformative power of nature's bounty. The threads of our influence are woven into the fabric of palaces, resorts, commercial spaces, and private residences, radiating a timeless elegance that resonates with generations.</p>
                        <p class="text-lg text-slate-600 max-w-5xl mx-auto leading-relaxed mt-6 mb-0">As we export our materials abroad, we don't merely deliver stones; we deliver dreams, aspirations, and stories. Our materials become the embodiment of artistic visions, captured in the veins of marble, the strength of granite, and the character of limestone. With a legacy rooted in authenticity and a future shaped by innovation, our journey continues, connecting cultures and transcending borders through the universal language of natural beauty. This remarkable journey, spanning continents and cultures, is a testament to the universal appeal of our premium marble, granite, and limestone products. From the opulent halls of palaces in distant lands to the intimate alcoves of modern homes, our materials have found their place, enriching the aesthetic tapestry of countless projects.</p>
                        <p class="text-lg text-slate-600 max-w-5xl mx-auto leading-relaxed mt-6 mb-0">Our materials, nurtured by nature and refined by craftsmanship, transcend boundaries as we export our treasures to destinations around the globe. This global outreach is underpinned by a commitment to sustainable practices and responsible sourcing, ensuring that the beauty of our materials is matched by an ethical foundation.</p>
                        <p class="text-lg text-slate-600 max-w-5xl mx-auto leading-relaxed mt-6 mb-0">Behind this global success story lies a seamless export network that ensures the seamless delivery of our materials to projects far and wide. Our logistics expertise ensures that the elegance of our marble, the resilience of our granite, and the grace of our limestone reach every corner of the world with precision and care. With a commitment to timeliness and integrity, we bridge the gap between origins and destinations, enriching projects and spaces with the magic of natural stone.</p>
                    </div>
                    <div class="grid md:grid-cols-2 gap-8 mb-16 transition-all duration-1000 delay-200 translate-y-10">
                        <div class="group relative overflow-hidden rounded-2xl shadow-xl"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/radisson-solo-CrfIW7CG.jpg" alt="Ukraine Radisson Hotel" class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <h3 class="font-serif text-2xl font-bold text-white">Ukraine Radisson Hotel</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-2xl shadow-xl"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/czech-spa-solo-BdqIKrQw.jpg" alt="Czech Spa, Europe" class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <h3 class="font-serif text-2xl font-bold text-white">Czech Spa, Europe</h3>
                            </div>
                        </div>
                    </div>
                    <div class="mb-16 transition-all">
                        <p class="text-lg text-slate-600 max-w-5xl mx-auto leading-relaxed text-center mb-0">Our success abroad is not just in the supply of materials; it's a reflection of our dedication to building lasting relationships. We partner with architects, designers, contractors, and distributors across the globe, offering them a treasure trove of possibilities to bring their visions to fruition. The trust they place in us is a testament to the quality and authenticity that define our products.</p>
                        <p class="text-lg text-slate-600 max-w-5xl mx-auto leading-relaxed text-center mt-6 mb-0">Furthermore, our global presence is fortified by a commitment to innovation. We tirelessly explore new design frontiers, pushing the boundaries of creativity to bring forth new possibilities for our materials. This dedication to progress has led to collaborations that defy conventional norms, resulting in breathtaking installations that marry tradition with modernity.</p>
                        <p class="text-lg text-slate-600 max-w-5xl mx-auto leading-relaxed text-center mt-6 mb-0">The heart of our global journey lies in our belief that natural stone transcends geographical barriers, speaking a language that resonates with artistry and legacy. As our materials grace spaces in various corners of the world, they become conduits for cultural exchange, storytelling, and the celebration of craftsmanship. Our legacy is woven into the architectural marvels, luxurious interiors, and serene landscapes that our materials grace, leaving an indelible mark on the world's aesthetic narrative.</p>
                        <p class="text-lg text-slate-600 max-w-5xl mx-auto leading-relaxed text-center mt-6 mb-0">In every export, in all of our projects, and in every interaction, our commitment remains unwavering: to share the timeless beauty of our premium marble, granite, and limestone with the world, enriching lives, spaces, and experiences. As we continue to traverse continents, we invite you to join us on this remarkable journey, where the splendor of natural stone unites us all in a shared celebration of craftsmanship, creativity, and the marvels of the Earth's treasures.</p>
                    </div>
                    <div class="grid md:grid-cols-2 gap-8 mb-16 transition-all">
                        <div class="group relative overflow-hidden rounded-2xl shadow-xl"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/varna-solo-f1Hjh1Yd.jpg" alt="International Casino Hotel &amp; Tower Suites – Varna" class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <h3 class="font-serif text-2xl font-bold text-white">International Casino Hotel &amp; Tower Suites – Varna</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-2xl shadow-xl"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/oriental-solo-BNSbhHNa.jpg" alt="Oriental Resort – Sharm El Sheikh" class="w-full h-80 object-cover transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 to-transparent"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-6">
                                <h3 class="font-serif text-2xl font-bold text-white">Oriental Resort – Sharm El Sheikh</h3>
                            </div>
                        </div>
                    </div>
                    <div class="transition-all">
                        <p class="text-lg text-slate-600 max-w-5xl mx-auto leading-relaxed text-center mb-0">With an extensive projects portfolio, we have successfully executed projects encompassing a wide range of applications. Our expertise extends to flooring, where we create captivating designs that elevate the ambiance of any room. Additionally, our proficiency in wall cladding allows us to transform ordinary walls into stunning architectural projects features. We take pride in crafting magnificent columns, adding a touch of grandeur and elegance to both indoor and outdoor spaces.</p>
                        <p class="text-lg text-slate-600 max-w-5xl mx-auto leading-relaxed text-center mt-6 mb-0">Our team has also mastered the art of creating exquisite fireplaces that serve as focal points, radiating warmth and beauty. Furthermore, we specialize in pool coping and deck flooring, combining durability and style to enhance outdoor areas. Countertops are another area of expertise, where we meticulously craft surfaces that effortlessly blend aesthetics and functionality.</p>
                        <p class="text-lg text-slate-600 max-w-5xl mx-auto leading-relaxed text-center mt-6 mb-0">At EMG Company, our commitment to excellence is evident in all the projects we undertake, as we continually exceed expectations and leave a lasting impression on our clients. From residential to commercial projects, we bring a passion for innovation and a dedication to delivering impeccable results. Our meticulous attention to detail, combined with the use of premium marble and granite materials, ensures that each project reflects the highest standards of quality and craftsmanship.</p>
                        <p class="text-lg text-slate-600 max-w-5xl mx-auto leading-relaxed text-center mt-6 mb-0">With EMG Company, you can trust that your project will be handled with the utmost care and expertise, resulting in spaces that exude timeless beauty, sophistication, and functionality. Experience the difference of working with a trusted leader in the industry, where your vision becomes a reality, and every detail is executed to perfection.</p>
                    </div>
                </div>
            </section>
            <?php get_template_part('/template/components/sections/our', 'products'); ?>
        </div>
    </main>
</div><!-- #primary -->


<script>
    document.addEventListener("DOMContentLoaded", () => {
        const track = document.querySelector("#sliderTrack");
        const slides = document.querySelectorAll('[aria-roledescription="slide"]');

        const prevBtn = document.querySelector("#prevBtn");
        const nextBtn = document.querySelector("#nextBtn");

        let currentIndex = 0;
        const totalSlides = slides.length;

        function updateSlider() {
            const offset = -(currentIndex * 100);
            track.style.transform = `translate3d(${offset}%, 0, 0)`;

            // Disable logic
            prevBtn.disabled = currentIndex === 0;
            nextBtn.disabled = currentIndex === totalSlides - 1;
        }

        nextBtn.addEventListener("click", () => {
            if (currentIndex < totalSlides - 1) {
                currentIndex++;
                updateSlider();
            }
        });

        prevBtn.addEventListener("click", () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateSlider();
            }
        });

        updateSlider(); // Run on load
    });
</script>

<?php get_footer(); ?>