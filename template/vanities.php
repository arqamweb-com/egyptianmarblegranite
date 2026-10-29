<?php /* Template Name: Vanities */ ?>

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
    <main>
        <div class="min-h-screen bg-stone-50">
            <?php get_template_part('/template/components/headers/header', 'page'); ?>

            <section class="py-20 bg-white transition-all duration-1000 opacity-100 translate-y-0">
                <div class="ast-container">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h2 class="font-serif text-4xl md:text-5xl font-bold text-slate-800 mb-6">Stone Vanities</h2>
                            <p class="text-lg text-slate-600 leading-relaxed">Vanities are cabinets or furniture pieces that house the sink and provide storage space, appropriately engraved to ensure water flows back into the sink. They are central components and essential fixtures in bathroom design and can be also used in kitchens, serving as practical areas for daily routines while also contributing to the overall style and ambiance of the space. Vanities offer valuable storage, integrating the sink and allowing for easy access while maintaining a cohesive look. They come in straight and curved styles, catering to different design preferences. Customizable options ensure that vanities seamlessly fit the bathroom's theme, maximizing space and enhancing functionality.</p>
                        </div>
                        <div class="relative"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/vanities-hero-DopwI3xo.jpg" alt="Stone Vanities" class="rounded-lg shadow-2xl w-full h-[500px] object-cover">
                            <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-olive-600/20 rounded-lg -z-10"></div>
                            <div class="absolute -top-6 -right-6 w-32 h-32 bg-beige-400/30 rounded-lg -z-10"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-stone-100">
                <div class="ast-container">
                    <h2 class="font-serif text-4xl md:text-5xl font-bold text-slate-800 mb-12 text-center">About Stone Vanities</h2>
                    <div class="max-w-4xl mx-auto mb-16">
                        <h3 class="font-serif text-2xl font-bold text-slate-800 mb-6">Types of Stone Vanities:</h3>
                        <p class="text-lg text-slate-600 mb-4">They can be categorized into two main types:</p>
                        <ul class="space-y-4 text-lg text-slate-600">
                            <li class="flex items-start"><span class="text-olive-600 mr-3 font-bold">•</span><span><strong>Natural Stone Vanities:</strong> They are crafted from solid blocks of natural stone, such as granite or marble. They showcase the unique beauty and patterns inherent in natural stone.</span></li>
                            <li class="flex items-start"><span class="text-olive-600 mr-3 font-bold">•</span><span><strong>Engineered Stone Vanities:</strong> Also known as quartz vanities, these are made from engineered stone composed of natural quartz crystals and resins. They offer a more uniform appearance and are available in a wide range of colors and patterns.</span></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-white">
                <div class="ast-container">
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/vanity-4-DKhuaWAy.jpg" alt="Stone Vanity" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="font-serif text-lg font-semibold">Stone Vanity</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/vanity-1-ErL9Bply.jpg" alt="Stone Vanity" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="font-serif text-lg font-semibold">Stone Vanity</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/vanity-1b-DDm8tGuD.jpg" alt="Stone Vanity" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="font-serif text-lg font-semibold">Stone Vanity</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/vanity-2-YxJnXHVr.jpg" alt="Stone Vanity" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="font-serif text-lg font-semibold">Stone Vanity</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/vanity-3-DZ8QdErf.jpg" alt="Stone Vanity" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="font-serif text-lg font-semibold">Stone Vanity</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/vanity-6-DZnmbyYE.jpg" alt="Stone Vanity" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="font-serif text-lg font-semibold">Stone Vanity</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/vanity-4b-CvrnL3A_.jpg" alt="Stone Vanity" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="font-serif text-lg font-semibold">Stone Vanity</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/vanity-5-DtIOqV6q.jpg" alt="Stone Vanity" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="font-serif text-lg font-semibold">Stone Vanity</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/vanity-3b-QILcBO6E.jpg" alt="Stone Vanity" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="font-serif text-lg font-semibold">Stone Vanity</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/vanity-2b-BYTdvJSK.jpg" alt="Stone Vanity" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="font-serif text-lg font-semibold">Stone Vanity</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/vanity-7-TdNc5m1x.jpg" alt="Stone Vanity" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="font-serif text-lg font-semibold">Stone Vanity</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/vanity-8-DTL5_L0W.jpg" alt="Stone Vanity" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="font-serif text-lg font-semibold">Stone Vanity</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-stone-100">
                <div class="ast-container">
                    <div class="max-w-4xl mx-auto">
                        <h3 class="font-serif text-2xl font-bold text-slate-800 mb-6">Why Use Stone Vanities?</h3>
                        <p class="text-lg text-slate-600 mb-6">Stone vanities, as the name suggests, are crafted from natural or engineered stone materials. They offer several advantages:</p>
                        <ul class="space-y-4 text-lg text-slate-600">
                            <li class="flex items-start"><span class="text-olive-600 mr-3 font-bold">•</span><span><strong>Elegance and Aesthetics:</strong> A stone vanity lends a sense of luxury and timeless beauty to bathrooms. The natural veining and patterns in stone add visual interest and sophistication to the space.</span></li>
                            <li class="flex items-start"><span class="text-olive-600 mr-3 font-bold">•</span><span><strong>Durability:</strong> Stone is a durable material, capable of withstanding the rigors of daily use in a bathroom. It is resistant to moisture, heat, and stains, making it an ideal choice for this environment.</span></li>
                            <li class="flex items-start"><span class="text-olive-600 mr-3 font-bold">•</span><span><strong>Variety:</strong> There is a wide variety of stone materials available, including granite, marble, quartz, travertine, and more. Each stone type has unique colors and characteristics, allowing you to choose one that complements your bathroom's design.</span></li>
                            <li class="flex items-start"><span class="text-olive-600 mr-3 font-bold">•</span><span><strong>Easy Maintenance:</strong> Stone surfaces are relatively easy to clean and maintain. Regular cleaning with mild soap and water is usually sufficient to keep them looking pristine.</span></li>
                            <li class="flex items-start"><span class="text-olive-600 mr-3 font-bold">•</span><span><strong>Longevity:</strong> Stone vanities are built to last. When properly cared for, they can maintain their beauty for many years, making them a cost-effective choice in the long run.</span></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-white">
                <div class="ast-container">
                    <div class="max-w-4xl mx-auto">
                        <h3 class="font-serif text-2xl font-bold text-slate-800 mb-6">Advantages of Different Used Stone Types:</h3>
                        <ul class="space-y-4 text-lg text-slate-600">
                            <li class="flex items-start"><span class="text-olive-600 mr-3 font-bold">•</span><span><strong>Granite:</strong> Known for its durability and natural beauty, granite vanities are resistant to scratches and heat.</span></li>
                            <li class="flex items-start"><span class="text-olive-600 mr-3 font-bold">•</span><span><strong>Marble:</strong> Marble vanities exude elegance and are favored for their classic appearance, but they require more maintenance to protect against stains.</span></li>
                            <li class="flex items-start"><span class="text-olive-600 mr-3 font-bold">•</span><span><strong>Quartz:</strong> Quartz vanities are low-maintenance, non-porous, and come in a vast array of colors and patterns.</span></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-slate-800 text-white">
                <div class="ast-container">
                    <div class="max-w-4xl mx-auto">
                        <h3 class="font-serif text-3xl font-bold mb-8 text-white">Finishes for Stone Vanities:</h3>
                        <p class="text-lg text-stone-200 mb-8">Common finishes for a stone vanity include polished (glossy and reflective), honed (smooth with a matte finish), and leathered (textured and matte). The choice of finish depends on your design preferences and the type of stone used.</p>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-stone-100">
                <div class="ast-container">
                    <div class="max-w-4xl mx-auto">
                        <h3 class="font-serif text-2xl font-bold text-slate-800 mb-6">Installation and Maintenance:</h3>
                        <p class="text-lg text-slate-600 mb-6">Installation of a stone vanity should be done by experienced professionals to ensure proper fitting and sealing. Maintenance involves regular cleaning with a pH-balanced, non-abrasive cleaner. Avoid harsh chemicals that can damage the stone's surface. Periodic resealing may be necessary, depending on the stone type and usage.</p>
                        <p class="text-lg text-slate-600">A stone vanity combines beauty and functionality, making them a popular choice for bathroom design. It offers durability, timeless aesthetics, and a touch of luxury that can transform any bathroom into a sanctuary of elegance and style.</p>
                    </div>
                </div>
            </section>
            <?php
            set_query_var('category', 'Egyptian Limestone');
            get_template_part('/template/components/sections/related', 'products');
            ?>
            <section class="py-20 bg-olive-600">
                <div class="ast-container text-center">
                    <h2 class="font-serif text-4xl md:text-5xl font-bold text-white mb-6">Time to Contact Us</h2>
                    <p class="text-xl text-olive-100 mb-8 max-w-2xl mx-auto">Have a question or need help with quotation?</p>
                    <div class="flex flex-wrap justify-center gap-4">
                        <a href="https://api.whatsapp.com/send/?phone=%2B201000390999&amp;text&amp;type=phone_number&amp;app_absent=0" target="_blank" rel="noopener noreferrer">
                            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md bg-white text-olive-700 hover:bg-stone-100 text-lg px-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle mr-2 h-5 w-5">
                                    <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                                </svg>WhatsApp Us
                            </button>
                        </a>
                        <a href="tel:+201000390999">
                            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md bg-white text-olive-700 hover:bg-stone-100 text-lg px-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone mr-2 h-5 w-5">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>Call Us
                            </button>
                        </a>
                        <!--email_off--><a href="mailto:info@egyptianmarble.com">
                            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md bg-white text-olive-700 hover:bg-stone-100 text-lg px-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail mr-2 h-5 w-5">
                                    <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                </svg>Email Us
                            </button>
                        </a><!--/email_off-->
                    </div>
                </div>
            </section>
        </div>
    </main>
</div><!-- #primary -->


<?php get_footer(); ?>