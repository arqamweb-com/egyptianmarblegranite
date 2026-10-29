<?php /* Template Name: About Us */ ?>

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
                <div class="ast-container transition-all duration-700 delay-100 opacity-100 translate-y-0">
                    <div class="max-w-4xl mx-auto text-center reveal-up opacity-0 translate-y-10 transition-all duration-1000">
                        <p class="text-lg lg:text-xl text-slate-700 leading-relaxed mb-0">Welcome to <span class="font-semibold text-olive-700">Egyptian Marble and Granite Company</span>, fondly known as <span class="font-semibold text-olive-700">EMG group</span>. Based in the vibrant city of Cairo, Egypt, EMG has been a pioneer in the realm of natural stone since our establishment in 2006. With over a decade of dedicated service, we have solidified our reputation as one of the leading natural stone manufacturers in Egypt, a top worldwide supplier, and a premier destination for the finest quality marble, granite, and natural stone products.</p>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-white">
                <div class="ast-container">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div class="transition-all duration-700 opacity-100 translate-x-0">
                            <h2 class="font-serif text-4xl lg:text-5xl font-bold text-slate-800 mb-6">Our <span class="text-olive-600">Facilities</span></h2>
                            <div class="space-y-4 text-slate-600 leading-relaxed">
                                <p class="mb-0">At EMG, we take pride in our position as a front-runner in the industry. With unwavering commitment and a passion for excellence, we have earned a distinguished place among Egypt's leading natural stone companies. What truly sets us apart is our ownership of <span class="font-semibold text-olive-700">three state-of-the-art factories</span> and expansive warehouses.</p>
                                <p class="mb-0">These facilities empower us to meticulously process, craft, and store our materials, ensuring that each product that leaves our premises carries the hallmark of precision and quality.</p>
                                <p class="mb-0">Beyond our manufacturing prowess, we offer a personalized touch through our showrooms. Here, our clients and partners can witness the splendor of our materials firsthand, immersing themselves in the textures, colors, and designs that define EMG.</p>
                            </div>
                        </div>
                        <div class="transition-all duration-700 delay-200 opacity-100 translate-x-0">
                            <div class="relative group"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/facilities-DqCCPTg9.jpg" alt="EMG Facilities" class="w-full h-[400px] lg:h-[500px] object-cover rounded-2xl shadow-2xl group-hover:scale-[1.02] transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent rounded-2xl"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-slate-900 text-white">
                <div class="ast-container">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div class="order-2 lg:order-1 transition-all duration-700 opacity-100 translate-x-0">
                            <div class="relative group"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/production-line-Bp9ClqgJ.jpg" alt="EMG Production Line" class="w-full h-[400px] lg:h-[500px] object-cover rounded-2xl shadow-2xl group-hover:scale-[1.02] transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent rounded-2xl"></div>
                            </div>
                        </div>
                        <div class="order-1 lg:order-2 transition-all duration-700 delay-200 opacity-100 translate-x-0">
                            <h2 class="font-serif text-4xl lg:text-5xl font-bold mb-6 text-white">Our <span class="text-olive-400">Production Line</span></h2>
                            <div class="space-y-4 text-stone-300 leading-relaxed">
                                <p class="mb-0">At Egyptian Marble and Granite Company (EMG), our commitment to delivering the finest marble, granite, and limestone products is mirrored in our state-of-the-art production line. We take pride in seamlessly marrying traditional craftsmanship with the latest manufacturing techniques.</p>
                                <p class="mb-0">Our production line stands as a testament to our unwavering pursuit of perfection. We've harnessed the power of cutting-edge technology to elevate the transformation of raw natural stones into masterpieces.</p>
                                <p class="mb-0">Key to our manufacturing prowess are precision machinery and skilled artisans. Whether it's a monumental granite column or delicate marble tiles, our machinery ensures that each piece carries the mark of excellence.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-stone-100">
                <div class="ast-container">
                    <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
                        <div class="text-center group transition-all duration-500 opacity-100 scale-100">
                            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                                <div class="w-20 h-20 lg:w-24 lg:h-24 mx-auto mb-4 overflow-hidden rounded-full ring-4 ring-olive-100 group-hover:ring-olive-300 transition-all duration-300"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/marble-icon-BvEtIKWs.jpg" alt="Egyptian Marble" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"></div>
                                <h3 class="font-serif text-lg lg:text-xl font-bold text-slate-800 group-hover:text-olive-600 transition-colors">Egyptian Marble</h3>
                            </div>
                        </div>
                        <div class="text-center group transition-all duration-500 opacity-100 scale-100">
                            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                                <div class="w-20 h-20 lg:w-24 lg:h-24 mx-auto mb-4 overflow-hidden rounded-full ring-4 ring-olive-100 group-hover:ring-olive-300 transition-all duration-300"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/limestone-icon-DmB9ThPA.jpg" alt="Egyptian Limestone" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"></div>
                                <h3 class="font-serif text-lg lg:text-xl font-bold text-slate-800 group-hover:text-olive-600 transition-colors">Egyptian Limestone</h3>
                            </div>
                        </div>
                        <div class="text-center group transition-all duration-500 opacity-100 scale-100">
                            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                                <div class="w-20 h-20 lg:w-24 lg:h-24 mx-auto mb-4 overflow-hidden rounded-full ring-4 ring-olive-100 group-hover:ring-olive-300 transition-all duration-300"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/granite-icon-QbxRXgup.jpg" alt="Egyptian Granite" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"></div>
                                <h3 class="font-serif text-lg lg:text-xl font-bold text-slate-800 group-hover:text-olive-600 transition-colors">Egyptian Granite</h3>
                            </div>
                        </div>
                        <div class="text-center group transition-all duration-500 opacity-100 scale-100">
                            <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-all duration-300 hover:-translate-y-2">
                                <div class="w-20 h-20 lg:w-24 lg:h-24 mx-auto mb-4 overflow-hidden rounded-full ring-4 ring-olive-100 group-hover:ring-olive-300 transition-all duration-300"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/natural-stone-icon-BdYbzY5f.jpg" alt="Egyptian Natural Stone" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"></div>
                                <h3 class="font-serif text-lg lg:text-xl font-bold text-slate-800 group-hover:text-olive-600 transition-colors">Egyptian Natural Stone</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-gradient-to-br from-olive-800 via-olive-700 to-olive-900 text-white">
                <div class="ast-container">
                    <div class="text-center mb-12 transition-all duration-700 opacity-100 translate-y-0">
                        <h2 class="font-serif text-4xl lg:text-5xl font-bold mb-4 text-white">WHY EMG?</h2>
                        <div class="w-24 h-1 bg-white/50 mx-auto"></div>
                    </div>
                    <div class="max-w-4xl mx-auto">
                        <div class="grid md:grid-cols-2 gap-4 lg:gap-6">
                            <div class="flex items-start gap-4 bg-white/10 backdrop-blur-sm rounded-xl p-5 hover:bg-white/20 transition-all duration-300 opacity-100 translate-y-0">
                                <div class="flex-shrink-0 w-8 h-8 bg-olive-400 rounded-full flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-5 h-5 text-white">
                                        <path d="M20 6 9 17l-5-5"></path>
                                    </svg></div>
                                <p class="text-stone-100 leading-relaxed mb-0">Premium quality marble and granite products with highest standards</p>
                            </div>
                            <div class="flex items-start gap-4 bg-white/10 backdrop-blur-sm rounded-xl p-5 hover:bg-white/20 transition-all duration-300 opacity-100 translate-y-0">
                                <div class="flex-shrink-0 w-8 h-8 bg-olive-400 rounded-full flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-5 h-5 text-white">
                                        <path d="M20 6 9 17l-5-5"></path>
                                    </svg></div>
                                <p class="text-stone-100 leading-relaxed mb-0">Wide range of natural stone products including marble, granite, limestone</p>
                            </div>
                            <div class="flex items-start gap-4 bg-white/10 backdrop-blur-sm rounded-xl p-5 hover:bg-white/20 transition-all duration-300 opacity-100 translate-y-0">
                                <div class="flex-shrink-0 w-8 h-8 bg-olive-400 rounded-full flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-5 h-5 text-white">
                                        <path d="M20 6 9 17l-5-5"></path>
                                    </svg></div>
                                <p class="text-stone-100 leading-relaxed mb-0">Team of experts well-versed in properties of different stone types</p>
                            </div>
                            <div class="flex items-start gap-4 bg-white/10 backdrop-blur-sm rounded-xl p-5 hover:bg-white/20 transition-all duration-300 opacity-100 translate-y-0">
                                <div class="flex-shrink-0 w-8 h-8 bg-olive-400 rounded-full flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-5 h-5 text-white">
                                        <path d="M20 6 9 17l-5-5"></path>
                                    </svg></div>
                                <p class="text-stone-100 leading-relaxed mb-0">Advanced machinery combined with skilled artisans</p>
                            </div>
                            <div class="flex items-start gap-4 bg-white/10 backdrop-blur-sm rounded-xl p-5 hover:bg-white/20 transition-all duration-300 opacity-100 translate-y-0" style="transition-delay: 400ms;">
                                <div class="flex-shrink-0 w-8 h-8 bg-olive-400 rounded-full flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-5 h-5 text-white">
                                        <path d="M20 6 9 17l-5-5"></path>
                                    </svg></div>
                                <p class="text-stone-100 leading-relaxed mb-0">Various surface finishes: polished, honed, brushed, acid, sandblasted</p>
                            </div>
                            <div class="flex items-start gap-4 bg-white/10 backdrop-blur-sm rounded-xl p-5 hover:bg-white/20 transition-all duration-300 opacity-100 translate-y-0" style="transition-delay: 500ms;">
                                <div class="flex-shrink-0 w-8 h-8 bg-olive-400 rounded-full flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-5 h-5 text-white">
                                        <path d="M20 6 9 17l-5-5"></path>
                                    </svg></div>
                                <p class="text-stone-100 leading-relaxed mb-0">Global presence with exports to international markets</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-white">
                <div class="ast-container">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div class="transition-all duration-700 opacity-100 translate-x-0">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-12 h-12 bg-olive-100 rounded-full flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye w-6 h-6 text-olive-600">
                                        <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg></div><span class="text-olive-600 font-semibold text-lg">Our Vision</span>
                            </div>
                            <h2 class="font-serif text-3xl lg:text-4xl font-bold text-slate-800 mb-6">'Shaping the Future of Natural Stone'</h2>
                            <div class="space-y-4 text-slate-600 leading-relaxed">
                                <p class="mb-0">EMG envisions a future where the beauty and timelessness of natural stone continue to enrich the world's architectural and design landscape. As a trailblazer in the industry, our vision extends beyond supplying premium Egyptian natural stones.</p>
                                <p class="mb-0">We see ourselves as stewards of tradition and innovation, continuously pushing the boundaries of what is possible with these magnificent materials. In this vision, we aspire to be a global leader, setting new standards for quality, sustainability, and innovation in the natural stone industry.</p>
                            </div>
                        </div>
                        <div class="transition-all duration-700 delay-200 opacity-100 translate-x-0">
                            <div class="relative group"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/vision-CfIskl3C.jpg" alt="Our Vision" class="w-full h-[400px] object-cover rounded-2xl shadow-2xl group-hover:scale-[1.02] transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-olive-900/30 to-transparent rounded-2xl"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-stone-50">
                <div class="ast-container">
                    <div class="grid lg:grid-cols-2 gap-12 items-center">
                        <div class="order-2 lg:order-1 transition-all duration-700 opacity-100 translate-x-0">
                            <div class="relative group"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/mission-yy7EA4mk.jpg" alt="Our Mission" class="w-full h-[400px] object-cover rounded-2xl shadow-2xl group-hover:scale-[1.02] transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-olive-900/30 to-transparent rounded-2xl"></div>
                            </div>
                        </div>
                        <div class="order-1 lg:order-2 transition-all duration-700 delay-200 opacity-100 translate-x-0">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-12 h-12 bg-olive-100 rounded-full flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-target w-6 h-6 text-olive-600">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <circle cx="12" cy="12" r="6"></circle>
                                        <circle cx="12" cy="12" r="2"></circle>
                                    </svg></div><span class="text-olive-600 font-semibold text-lg">Our Mission</span>
                            </div>
                            <h2 class="font-serif text-3xl lg:text-4xl font-bold text-slate-800 mb-6">'Elevating Spaces with Egyptian Natural Stones'</h2>
                            <div class="space-y-4 text-slate-600 leading-relaxed">
                                <p class="mb-0">At EMG, our mission is a testament to our unwavering commitment to excellence in every facet of our operation. We strive to export the highest quality Egyptian natural stones, including Egyptian Limestone Tiles, Egyptian Marble, and Granite, to international markets.</p>
                                <p class="mb-0">Our mission is to be more than just a supplier; we aim to be your partner in design, helping you transform spaces into living works of art. When you choose EMG, you're choosing a commitment to excellence, a dedication to design, and a passion for creating spaces that inspire and captivate.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-slate-800 text-white">
                <div class="ast-container">
                    <div class="text-center mb-16 transition-all duration-700 opacity-100 translate-y-0">
                        <div class="flex items-center justify-center gap-3 mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-settings w-8 h-8 text-olive-400">
                                <path d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z"></path>
                                <circle cx="12" cy="12" r="3"></circle>
                            </svg></div>
                        <h2 class="font-serif text-4xl lg:text-5xl font-bold text-white mb-6">Our Expertise and Experience</h2>
                        <div class="w-24 h-1 bg-olive-500 mx-auto mb-8"></div>
                        <p class="max-w-3xl mx-auto text-stone-300 leading-relaxed mb-0">With an unwavering dedication to quality and an illustrious history spanning over a decade, EMG stands as a paragon of expertise in the natural stone industry. Our journey began in 2006, and since then, we have meticulously honed our craft, becoming a beacon of innovation and precision.</p>
                    </div>
                    <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">
                        <div class="group transition-all duration-500 opacity-100 scale-100">
                            <div class="relative overflow-hidden rounded-2xl"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/polishing-machine-Bt3Em17Z.jpg" alt="Polishing Machine with 20 Heads" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-6">
                                    <div class="flex items-center gap-2 mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench w-5 h-5 text-olive-400">
                                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                                        </svg><span class="text-olive-400 text-sm font-semibold">Equipment</span></div>
                                    <h3 class="font-serif text-xl font-bold text-white">Polishing Machine with 20 Heads</h3>
                                </div>
                            </div>
                        </div>
                        <div class="group transition-all duration-500 opacity-100 scale-100" style="transition-delay: 450ms;">
                            <div class="relative overflow-hidden rounded-2xl"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/bridge-cutting-machine-CNJHzJoT.jpg" alt="Bridge Cutting Machine" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-6">
                                    <div class="flex items-center gap-2 mb-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wrench w-5 h-5 text-olive-400">
                                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                                        </svg><span class="text-olive-400 text-sm font-semibold">Equipment</span></div>
                                    <h3 class="font-serif text-xl font-bold text-white">Bridge Cutting Machine</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-white">
                <div class="ast-container">
                    <div class="text-center mb-16 transition-all duration-700 opacity-100 translate-y-0">
                        <h2 class="font-serif text-4xl lg:text-5xl font-bold text-slate-800 mb-4">Our Products</h2>
                        <div class="w-24 h-1 bg-olive-500 mx-auto"></div>
                    </div>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="group cursor-pointer transition-all duration-500 opacity-100 translate-y-0" style="transition-delay: 150ms;">
                            <div class="relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/natural-stone-product-7s7Ik-lQ.jpg" alt="Egyptian Natural Stone" class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-6 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                                    <h3 class="font-serif text-2xl font-bold text-white">Egyptian Natural Stone</h3>
                                    <div class="w-12 h-1 bg-olive-400 mt-3 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                                </div>
                            </div>
                        </div>
                        <div class="group cursor-pointer transition-all duration-500 opacity-100 translate-y-0">
                            <div class="relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/marble-product-OCMscLMb.jpg" alt="Egyptian Marble" class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-6 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                                    <h3 class="font-serif text-2xl font-bold text-white">Egyptian Marble</h3>
                                    <div class="w-12 h-1 bg-olive-400 mt-3 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                                </div>
                            </div>
                        </div>
                        <div class="group cursor-pointer transition-all duration-500 opacity-100 translate-y-0" style="transition-delay: 450ms;">
                            <div class="relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/granite-product-CduKppEy.jpg" alt="Egyptian Granite" class="w-full h-80 object-cover group-hover:scale-110 transition-transform duration-700">
                                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-80 group-hover:opacity-90 transition-opacity"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-6 transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                                    <h3 class="font-serif text-2xl font-bold text-white">Egyptian Granite</h3>
                                    <div class="w-12 h-1 bg-olive-400 mt-3 transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const elements = document.querySelectorAll(".reveal-up");

            elements.forEach((el, index) => {
                setTimeout(() => {
                    el.classList.remove("opacity-0", "translate-y-10");
                    el.classList.add("opacity-100", "translate-y-0");
                }, index * 400); // delay بسيط بين كل عنصر (اختياري)
            });
        });
    </script>

</div><!-- #primary -->


<?php get_footer(); ?>