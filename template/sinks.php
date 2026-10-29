<?php /* Template Name: Sinks */ ?>

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
        <div class="min-h-screen bg-stone-50">
            <?php get_template_part('/template/components/headers/header', 'page'); ?>

            <section class="py-20 bg-white transition-all duration-1000 opacity-100 translate-y-0">
                <div class="ast-container">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div>
                            <h2 class="font-serif text-4xl md:text-5xl font-bold text-slate-800 mb-6">Stone Sinks</h2>
                            <p class="text-lg text-slate-600 leading-relaxed mb-6">A stone sink is an elegant and durable fixture that can enhance the aesthetics of your kitchen or bathroom while providing unmatched functionality. These sinks are typically crafted from solid stone blocks, such as granite, marble, Limestone, or quartz. each with its unique character and beauty. Skilled artisans employ various techniques to shape these blocks into exquisite sink forms. The intricate process often involves precise cutting to create the sink's basic shape, followed by expert carving to refine the details and give it a distinct, artistic flair. Finally, the sink undergoes meticulous polishing, which not only enhances its appearance but also ensures a smooth, easy-to-clean surface.</p>
                            <p class="text-lg text-slate-600 leading-relaxed">In modern times, technology has played a significant role in the creation of stone sinks. CNC (Computer Numerical Control) machines are frequently employed for precision shaping, enabling artisans to achieve intricate designs and consistent quality. The result is a unique and meticulously crafted sink that seamlessly blends the timeless beauty of natural stone with contemporary precision and functionality. Whether it's the striking veining of marble, the rugged charm of granite, or the subtle elegance of quartz, stone sinks are a testament to the marriage of artistry and engineering in the world of interior design.</p>
                        </div>
                        <div class="relative"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/stone-sinks-hero-BpJcgV7l.jpg" alt="Stone Sinks" class="rounded-lg shadow-2xl w-full h-[500px] object-cover">
                            <div class="absolute -bottom-6 -left-6 w-32 h-32 bg-olive-600/20 rounded-lg -z-10"></div>
                            <div class="absolute -top-6 -right-6 w-32 h-32 bg-beige-400/30 rounded-lg -z-10"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-stone-100 transition-all duration-1000 opacity-100 translate-y-0">
                <div class="ast-container">
                    <h2 class="font-serif text-4xl md:text-5xl font-bold text-slate-800 mb-12 text-center">About Stone Sinks</h2>
                    <div class="max-w-4xl mx-auto mb-16">
                        <h3 class="font-serif text-2xl font-bold text-slate-800 mb-6">Types of Stone Sinks:</h3>
                        <ul class="space-y-4 text-lg text-slate-600">
                            <li class="flex items-start"><span class="text-olive-600 mr-3 font-bold">•</span><span><strong>Vessel Sinks:</strong> These sit on top of the counter, creating a dramatic and stylish focal point. They are often used in contemporary designs.</span></li>
                            <li class="flex items-start"><span class="text-olive-600 mr-3 font-bold">•</span><span><strong>Undermount Sinks:</strong> These are mounted beneath the countertop, providing a seamless and clean look. They are common in both kitchens and bathrooms.</span></li>
                            <li class="flex items-start"><span class="text-olive-600 mr-3 font-bold">•</span><span><strong>Farmhouse Sinks:</strong> Also known as apron-front sinks, these extend over the edge of the countertop. They have a rustic charm and are popular in farmhouse-style kitchens.</span></li>
                            <li class="flex items-start"><span class="text-olive-600 mr-3 font-bold">•</span><span><strong>Pedestal Sinks:</strong> Typically found in bathrooms, these sinks are supported by a pedestal or column, concealing the plumbing.</span></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-white transition-all duration-1000 opacity-100 translate-y-0">
                <div class="ast-container">
                    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/farmhouse-sink-DCsMvrCx.jpg" alt="Farmhouse sink" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="font-serif text-lg font-semibold">Farmhouse sink</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/vessel-sink-1-Bdhfpnqv.jpg" alt="Vessel Sink" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="font-serif text-lg font-semibold">Vessel Sink</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/vessel-sink-2-BXpE-Ht3.jpg" alt="Vessel Stone Sink" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="font-serif text-lg font-semibold">Vessel Stone Sink</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/vessel-sink-3-BZb0z0iH.jpg" alt="Vessel Stone Sink" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="font-serif text-lg font-semibold">Vessel Stone Sink</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/mounted-sink-DRWCUvnd.jpg" alt="Mounted Sink Unit" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="font-serif text-lg font-semibold">Mounted Sink Unit</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/carved-sink-D5CD_G-Y.jpg" alt="Carved Stone Sink" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="font-serif text-lg font-semibold">Carved Stone Sink</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/square-vessel-sink-zmw-MpD3.jpg" alt="Square Vessel Sink" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="font-serif text-lg font-semibold">Square Vessel Sink</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/vessel-sink-4-BvDQJCXW.jpg" alt="Vessel Stone Sink" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="font-serif text-lg font-semibold">Vessel Stone Sink</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/belfast-sink-CAOwka7m.jpg" alt="Belfast Sink" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="font-serif text-lg font-semibold">Belfast Sink</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/vessel-sink-5-gsjSUm0M.jpg" alt="Vessel Stone Sink" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="font-serif text-lg font-semibold">Vessel Stone Sink</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/freestanding-sink-1-BydSBe91.jpg" alt="Freestanding Sinks" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="font-serif text-lg font-semibold">Freestanding Sinks</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg hover:shadow-xl transition-all duration-300"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/freestanding-sink-2-D9Kp7I6F.jpg" alt="Freestanding Sink" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-slate-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="font-serif text-lg font-semibold">Freestanding Sink</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-stone-100">
                <div class="ast-container">
                    <div class="max-w-4xl mx-auto">
                        <h3 class="font-serif text-2xl font-bold text-slate-800 mb-6">Advantages of Different Stone Sink Types:</h3>
                        <ul class="space-y-4 text-lg text-slate-600">
                            <li class="flex items-start"><span class="text-olive-600 mr-3 font-bold">•</span><span><strong>Vessel Sink:</strong> They offer a striking appearance, come in various shapes, and are easy to install.</span></li>
                            <li class="flex items-start"><span class="text-olive-600 mr-3 font-bold">•</span><span><strong>Undermount Sink:</strong> These provide a clean and streamlined look, are easy to clean, and prevent debris from getting caught on the sink's rim.</span></li>
                            <li class="flex items-start"><span class="text-olive-600 mr-3 font-bold">•</span><span><strong>Farmhouse Sink:</strong> They are deep, spacious, and ideal for washing large pots and pans. Their exposed front adds character to the kitchen.</span></li>
                            <li class="flex items-start"><span class="text-olive-600 mr-3 font-bold">•</span><span><strong>Pedestal Sink:</strong> Great for small bathrooms, they save space and provide a classic, timeless look.</span></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-white">
                <div class="ast-container">
                    <div class="max-w-4xl mx-auto">
                        <h3 class="font-serif text-2xl font-bold text-slate-800 mb-6">Why Use Stone Sinks:</h3>
                        <ul class="space-y-4 text-lg text-slate-600 mb-12">
                            <li class="flex items-start"><span class="text-olive-600 mr-3 font-bold">•</span><span><strong>Aesthetics:</strong> Stone sinks add a touch of luxury and elegance to any space. They come in various natural colors and patterns, making each sink a work of art.</span></li>
                            <li class="flex items-start"><span class="text-olive-600 mr-3 font-bold">•</span><span><strong>Durability:</strong> Stone sink is exceptionally durable and can withstand daily use for decades without showing signs of wear and tear.</span></li>
                            <li class="flex items-start"><span class="text-olive-600 mr-3 font-bold">•</span><span><strong>Heat Resistance:</strong> Most stone sinks are heat-resistant, making them perfect for kitchens where hot pots and pans are placed directly in the sink.</span></li>
                            <li class="flex items-start"><span class="text-olive-600 mr-3 font-bold">•</span><span><strong>Easy Maintenance:</strong> Stone sink is relatively easy to clean; regular wiping with a mild soap and water solution is usually sufficient.</span></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-slate-800 text-white">
                <div class="ast-container">
                    <div class="max-w-4xl mx-auto">
                        <h3 class="font-serif text-3xl font-bold mb-8 text-white">Finishes for Stone Sinks:</h3>
                        <ul class="space-y-4 text-lg text-stone-200 mb-8">
                            <li class="flex items-start"><span class="text-olive-400 mr-3 font-bold">•</span><span><strong class="text-white">Polished:</strong> A glossy, reflective finish that enhances the natural colors and patterns of the stone.</span></li>
                            <li class="flex items-start"><span class="text-olive-400 mr-3 font-bold">•</span><span><strong class="text-white">Honed:</strong> A matte finish that offers a softer, more subtle appearance.</span></li>
                            <li class="flex items-start"><span class="text-olive-400 mr-3 font-bold">•</span><span><strong class="text-white">Antiqued:</strong> This finish gives the sink an aged, weathered look.</span></li>
                            <li class="flex items-start"><span class="text-olive-400 mr-3 font-bold">•</span><span><strong class="text-white">Flamed:</strong> Achieved by exposing the stone to high heat, this finish adds texture and is often used for granite sinks.</span></li>
                            <li class="flex items-start"><span class="text-olive-400 mr-3 font-bold">•</span><span><strong class="text-white">Split Face:</strong> This finish creates a textured, uneven surface with a rustic, natural appearance. It's often chosen for its unique and distinctive look.</span></li>
                        </ul>
                        <p class="text-stone-300 text-lg">Each finish has its own appeal and can complement different design styles, allowing you to choose the one that best suits your aesthetic preferences and overall decor.</p>
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
                                </svg>WhatsApp Us</button></a><a href="tel:+201000390999">
                            <button class="iinline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md bg-white text-olive-700 hover:bg-stone-100 text-lg px-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone mr-2 h-5 w-5">
                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                </svg>Call Us</button></a><!--email_off--><a href="mailto:info@egyptianmarble.com">
                            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md bg-white text-olive-700 hover:bg-stone-100 text-lg px-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail mr-2 h-5 w-5">
                                    <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                </svg>Email Us</button>
                        </a><!--/email_off-->
                    </div>
                </div>
            </section>
        </div>
    </main>

</div><!-- #primary -->


<?php get_footer(); ?>