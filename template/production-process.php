<?php /* Template Name: Production Process */ ?>

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
        <div class="min-h-screen bg-background">
            <?php get_template_part('/template/components/headers/header', 'page'); ?>
            <section class="py-16">
                <div class="container mx-auto px-4">
                    <div class="max-w-3xl mx-auto text-center">
                        <h2 class="text-3xl font-serif text-foreground mb-6">Expertise &amp; Technology</h2>
                        <p class="text-muted-foreground text-lg leading-relaxed">All our factories are equipped with state-of-the-art machinery and staffed by teams of highly trained and experienced stone workers. Our craftsmen cut, shape, and finish marble slabs to precise customer specifications, combining traditional expertise with modern technology.</p>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-alt">
                <div class="container mx-auto px-4">
                    <h2 class="text-3xl font-serif text-foreground text-center mb-16 transition-all duration-700">Our 6-Step Process</h2>
                    <div class="space-y-16">
                        <div class="flex flex-col lg:flex-row gap-8 lg:gap-12 items-center transition-all duration-700 delay-0">
                            <div class="lg:w-1/2">
                                <div class="relative rounded-2xl overflow-hidden shadow-xl">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/quarries-CUJD29AR.jpg" alt="Quarry Extraction" class="w-full h-80 object-cover">
                                    <div class="absolute top-4 left-4 bg-primary text-primary-foreground w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl">1</div>
                                </div>
                            </div>
                            <div class="lg:w-1/2">
                                <div class="flex items-center gap-4 mb-4">
                                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mountain w-7 h-7 text-primary">
                                            <path d="m8 3 4 8 5-5 5 15H2L8 3z"></path>
                                        </svg></div>
                                    <h3 class="text-2xl font-serif text-foreground">Quarry Extraction</h3>
                                </div>
                                <p class="text-muted-foreground text-lg leading-relaxed">Our journey begins at the Egyptian limestone and granite quarries in Sinai, where we source world-quality stone in over 25 varieties. Expert geologists identify the finest blocks, ensuring consistent quality and color.</p>
                            </div>
                        </div>
                        <div class="flex flex-col lg:flex-row-reverse gap-8 lg:gap-12 items-center transition-all duration-700 delay-100">
                            <div class="lg:w-1/2">
                                <div class="relative rounded-2xl overflow-hidden shadow-xl"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/production-line-Bp9ClqgJ.jpg" alt="Transportation" class="w-full h-80 object-cover">
                                    <div class="absolute top-4 left-4 bg-primary text-primary-foreground w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl">2</div>
                                </div>
                            </div>
                            <div class="lg:w-1/2">
                                <div class="flex items-center gap-4 mb-4">
                                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-truck w-7 h-7 text-primary">
                                            <path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"></path>
                                            <path d="M15 18H9"></path>
                                            <path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"></path>
                                            <circle cx="17" cy="18" r="2"></circle>
                                            <circle cx="7" cy="18" r="2"></circle>
                                        </svg></div>
                                    <h3 class="text-2xl font-serif text-foreground">Transportation</h3>
                                </div>
                                <p class="text-muted-foreground text-lg leading-relaxed">From the quarries, natural stone is carefully transported to one of our three Egyptian factories. We use specialized equipment to ensure blocks arrive undamaged and ready for processing.</p>
                            </div>
                        </div>
                        <div class="flex flex-col lg:flex-row gap-8 lg:gap-12 items-center transition-all duration-700 delay-200">
                            <div class="lg:w-1/2">
                                <div class="relative rounded-2xl overflow-hidden shadow-xl"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/bridge-cutting-machine-CNJHzJoT.jpg" alt="Initial Processing" class="w-full h-80 object-cover">
                                    <div class="absolute top-4 left-4 bg-primary text-primary-foreground w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl">3</div>
                                </div>
                            </div>
                            <div class="lg:w-1/2">
                                <div class="flex items-center gap-4 mb-4">
                                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-factory w-7 h-7 text-primary">
                                            <path d="M2 20a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8l-7 5V8l-7 5V4a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2Z"></path>
                                            <path d="M17 18h1"></path>
                                            <path d="M12 18h1"></path>
                                            <path d="M7 18h1"></path>
                                        </svg></div>
                                    <h3 class="text-2xl font-serif text-foreground">Initial Processing</h3>
                                </div>
                                <p class="text-muted-foreground text-lg leading-relaxed">Raw blocks are inspected and cataloged before being processed through our state-of-the-art bridge saws. These precision machines cut blocks into slabs of various thicknesses according to customer specifications.</p>
                            </div>
                        </div>
                        <div class="flex flex-col lg:flex-row-reverse gap-8 lg:gap-12 items-center transition-all duration-700 delay-300">
                            <div class="lg:w-1/2">
                                <div class="relative rounded-2xl overflow-hidden shadow-xl"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/polishing-machine-Bt3Em17Z.jpg" alt="Finishing &amp; Detailing" class="w-full h-80 object-cover">
                                    <div class="absolute top-4 left-4 bg-primary text-primary-foreground w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl">4</div>
                                </div>
                            </div>
                            <div class="lg:w-1/2">
                                <div class="flex items-center gap-4 mb-4">
                                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-cog w-7 h-7 text-primary">
                                            <path d="M12 20a8 8 0 1 0 0-16 8 8 0 0 0 0 16Z"></path>
                                            <path d="M12 14a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"></path>
                                            <path d="M12 2v2"></path>
                                            <path d="M12 22v-2"></path>
                                            <path d="m17 20.66-1-1.73"></path>
                                            <path d="M11 10.27 7 3.34"></path>
                                            <path d="m20.66 17-1.73-1"></path>
                                            <path d="m3.34 7 1.73 1"></path>
                                            <path d="M14 12h8"></path>
                                            <path d="M2 12h2"></path>
                                            <path d="m20.66 7-1.73 1"></path>
                                            <path d="m3.34 17 1.73-1"></path>
                                            <path d="m17 3.34-1 1.73"></path>
                                            <path d="m11 13.73-4 6.93"></path>
                                        </svg></div>
                                    <h3 class="text-2xl font-serif text-foreground">Finishing &amp; Detailing</h3>
                                </div>
                                <p class="text-muted-foreground text-lg leading-relaxed">Slabs undergo finishing processes including polishing, honing, brushing, or texturing. Our skilled artisans use calibrating machinery, waterjets for intricate designs, and flaming and tumbling equipment for special finishes.</p>
                            </div>
                        </div>
                        <div class="flex flex-col lg:flex-row gap-8 lg:gap-12 items-center transition-all duration-700 delay-400">
                            <div class="lg:w-1/2">
                                <div class="relative rounded-2xl overflow-hidden shadow-xl"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/facilities-DqCCPTg9.jpg" alt="Quality Control" class="w-full h-80 object-cover">
                                    <div class="absolute top-4 left-4 bg-primary text-primary-foreground w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl">5</div>
                                </div>
                            </div>
                            <div class="lg:w-1/2">
                                <div class="flex items-center gap-4 mb-4">
                                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-7 h-7 text-primary">
                                            <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                            <path d="m9 11 3 3L22 4"></path>
                                        </svg></div>
                                    <h3 class="text-2xl font-serif text-foreground">Quality Control</h3>
                                </div>
                                <p class="text-muted-foreground text-lg leading-relaxed">Every piece passes through rigorous quality control. We inspect for color consistency, structural integrity, and finish quality. Only products meeting our exacting standards proceed to packaging.</p>
                            </div>
                        </div>
                        <div class="flex flex-col lg:flex-row-reverse gap-8 lg:gap-12 items-center transition-all duration-700 delay-500">
                            <div class="lg:w-1/2">
                                <div class="relative rounded-2xl overflow-hidden shadow-xl"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/production-line-Bp9ClqgJ.jpg" alt="Packaging &amp; Shipping" class="w-full h-80 object-cover">
                                    <div class="absolute top-4 left-4 bg-primary text-primary-foreground w-12 h-12 rounded-full flex items-center justify-center font-bold text-xl">6</div>
                                </div>
                            </div>
                            <div class="lg:w-1/2">
                                <div class="flex items-center gap-4 mb-4">
                                    <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package w-7 h-7 text-primary">
                                            <path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"></path>
                                            <path d="M12 22V12"></path>
                                            <path d="m3.3 7 7.703 4.734a2 2 0 0 0 1.994 0L20.7 7"></path>
                                            <path d="m7.5 4.27 9 5.15"></path>
                                        </svg></div>
                                    <h3 class="text-2xl font-serif text-foreground">Packaging &amp; Shipping</h3>
                                </div>
                                <p class="text-muted-foreground text-lg leading-relaxed">Finished products are carefully packaged using industry-leading methods to prevent damage during transit. We coordinate worldwide shipping, ensuring your order arrives safely at your destination.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20">
                <div class="container mx-auto px-4">
                    <div class="grid lg:grid-cols-2 gap-12 items-center transition-all duration-1000">
                        <div>
                            <h2 class="text-3xl font-serif text-foreground mb-6">Three Modern Factories</h2>
                            <p class="text-muted-foreground text-lg leading-relaxed mb-6">Our production capability spans three fully-equipped factories in Egypt, strategically located near major quarries for efficient material transport. Combined, our facilities can process over 50,000 square meters of stone monthly.</p>
                            <ul class="space-y-4">
                                <li class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-6 h-6 text-primary mt-1 flex-shrink-0">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-muted-foreground">ISO 9001:2015 certified quality management</span></li>
                                <li class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-6 h-6 text-primary mt-1 flex-shrink-0">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-muted-foreground">Over 200 skilled craftsmen and technicians</span></li>
                                <li class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-6 h-6 text-primary mt-1 flex-shrink-0">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-muted-foreground">24/7 production capability for urgent orders</span></li>
                                <li class="flex items-start gap-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-check-big w-6 h-6 text-primary mt-1 flex-shrink-0">
                                        <path d="M21.801 10A10 10 0 1 1 17 3.335"></path>
                                        <path d="m9 11 3 3L22 4"></path>
                                    </svg><span class="text-muted-foreground">Environmental management systems in place</span></li>
                            </ul>
                        </div>
                        <div class="relative"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/facilities-DqCCPTg9.jpg" alt="Our Facilities" class="rounded-2xl shadow-xl"></div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-alt">
                <div class="container mx-auto px-4">
                    <h2 class="text-3xl font-serif text-foreground text-center mb-12 transition-all duration-700">State-of-the-Art Equipment</h2>
                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 transition-all duration-1000">
                        <div class="bg-background p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                            <h3 class="text-lg font-semibold text-foreground mb-2">Bridge Saws</h3>
                            <p class="text-muted-foreground text-sm">Computer-controlled precision cutting for slabs and tiles of any dimension.</p>
                        </div>
                        <div class="bg-background p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                            <h3 class="text-lg font-semibold text-foreground mb-2">Polishing Lines</h3>
                            <p class="text-muted-foreground text-sm">Multi-head polishing machines for mirror-finish surfaces.</p>
                        </div>
                        <div class="bg-background p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                            <h3 class="text-lg font-semibold text-foreground mb-2">Calibrating Machinery</h3>
                            <p class="text-muted-foreground text-sm">Ensures uniform thickness across all products.</p>
                        </div>
                        <div class="bg-background p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                            <h3 class="text-lg font-semibold text-foreground mb-2">Waterjet Cutters</h3>
                            <p class="text-muted-foreground text-sm">High-precision cutting for intricate designs and mosaics.</p>
                        </div>
                        <div class="bg-background p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                            <h3 class="text-lg font-semibold text-foreground mb-2">Flaming Equipment</h3>
                            <p class="text-muted-foreground text-sm">Creates textured, non-slip surfaces for outdoor applications.</p>
                        </div>
                        <div class="bg-background p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                            <h3 class="text-lg font-semibold text-foreground mb-2">Tumbling Drums</h3>
                            <p class="text-muted-foreground text-sm">Produces aged, antique-look finishes for classic designs.</p>
                        </div>
                        <div class="bg-background p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                            <h3 class="text-lg font-semibold text-foreground mb-2">Edge Profiling Machines</h3>
                            <p class="text-muted-foreground text-sm">Creates various edge profiles for countertops and vanities.</p>
                        </div>
                        <div class="bg-background p-6 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                            <h3 class="text-lg font-semibold text-foreground mb-2">CNC Routers</h3>
                            <p class="text-muted-foreground text-sm">Computer-controlled carving for custom architectural elements.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-gradient-to-br from-stone-900 to-stone-800">
                <div class="container mx-auto px-4 text-center">
                    <h2 class="text-3xl md:text-4xl font-serif text-white mb-6">Ready to Start Your Project?</h2>
                    <p class="text-white/80 text-lg max-w-2xl mx-auto mb-8">Our team is ready to help you select the perfect stone and guide you through the production process.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-secondary text-primary hover:bg-secondary/80 h-11 rounded-md px-8" href="<?php echo ($page_quote = get_page_by_path('get-a-quote')) ? get_permalink($page_quote->ID) : ''; ?>">Get a Quote</a>
                        <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 bg-secondary text-primary hover:bg-secondary/80 h-11 rounded-md px-8" href="<?php echo ($page_samples = get_page_by_path('request-free-samples')) ? get_permalink($page_samples->ID) : ''; ?>">Request Free Samples</a>
                    </div>
                </div>
            </section>
        </div>
    </main>

</div><!-- #primary -->


<?php get_footer(); ?>