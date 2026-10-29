<?php /* Template Name: Egyptian Limestone */ ?>

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

            <section class="py-16 md:py-24 bg-background">
                <div class="ast-container transition-all duration-1000 opacity-100 translate-y-0">
                    <h2 class="text-2xl md:text-3xl font-serif font-bold text-foreground text-center mb-8">Discover Why Egyptian Limestone Reigns Supreme</h2>
                    <div class="w-16 h-1 bg-primary mx-auto mb-12"></div>
                    <div class="max-w-4xl mx-auto text-center mb-12">
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6">Egyptian limestone is a premium, sedimentary natural stone celebrated worldwide for its rich geological heritage, varied hues, and exceptional physical performance. Formed over millennia along the Nile Valley through compacted sediments of shells, sand and minerals, this stone exhibits calcite-driven strength and a tactile surface—making it perfect for both historic monuments and contemporary architectural designs.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed mb-8">Welcome to EMG, your trusted source for high-quality Egyptian limestone—a premium sedimentary stone that has shaped the architectural and artistic legacy of Egypt for thousands of years. Quarried from the rich geological beds of the Nile Valley, this timeless material remains a favorite for projects demanding durability, beauty, and historical prestige.</p>
                        <div class="bg-muted p-6 rounded-lg mb-8">
                            <p class="text-foreground font-semibold mb-4">Have a question or need help with quotation?</p>
                            <div class="flex flex-wrap justify-center gap-4"><a href="tel:+201000390999" class="flex items-center text-primary hover:text-primary/80 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone h-5 w-5 mr-2">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                    </svg>Call Us</a><a href="https://api.whatsapp.com/send/?phone=%2B201000390999&amp;text&amp;type=phone_number&amp;app_absent=0" target="_blank" rel="noopener noreferrer" class="flex items-center text-primary hover:text-primary/80 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle h-5 w-5 mr-2">
                                        <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                                    </svg>Whatsapp Us</a><!--email_off--><a href="mailto:info@egyptianmarble.com" class="flex items-center text-primary hover:text-primary/80 transition-colors"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail h-5 w-5 mr-2">
                                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                    </svg>Email Us</a><!--/email_off--></div>
                            <p class="text-foreground/70 mt-4 text-sm">Or Continue Reading</p>
                        </div>
                    </div>


                    <?php
                    set_query_var('products_category', 'Egyptian Limestone');
                    get_template_part('/template/products/custom-loop', 'products');
                    ?>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <a class="group relative overflow-hidden rounded-lg shadow-lg" href="<?php echo ($page = get_page_by_path('egyptian-limestone')) ? get_permalink($page->ID) : ''; ?>">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/limestone-BtLyacAO.jpg" alt="Egyptian Limestone" class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex items-end justify-center pb-6">
                                <h3 class="text-xl font-serif font-semibold text-primary-foreground">Egyptian Limestone</h3>
                            </div>
                        </a>
                        <a class="group relative overflow-hidden rounded-lg shadow-lg" href="<?php echo ($page = get_page_by_path('egyptian-marble')) ? get_permalink($page->ID) : ''; ?>">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/marble-stone-CbWdupzD.jpg" alt="Egyptian Marble" class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex items-end justify-center pb-6">
                                <h3 class="text-xl font-serif font-semibold text-primary-foreground">Egyptian Marble</h3>
                            </div>
                        </a>
                        <a class="group relative overflow-hidden rounded-lg shadow-lg" href="<?php echo ($page = get_page_by_path('egyptian-granite')) ? get_permalink($page->ID) : ''; ?>">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/granite-stone-DL_Ok51T.jpg" alt="Egyptian Granite" class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex items-end justify-center pb-6">
                                <h3 class="text-xl font-serif font-semibold text-primary-foreground">Egyptian Granite</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            <section class="py-16 md:py-24 bg-muted">
                <div class="ast-container">
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-foreground text-center mb-8">About Egyptian Limestone</h2>
                    <div class="w-16 h-1 bg-primary mx-auto mb-12"></div>
                    <div class="max-w-4xl mx-auto mb-12">
                        <h3 class="text-xl font-serif font-semibold text-foreground mb-4">Formation &amp; Geological Heritage</h3>
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6">Originating from ancient alluvial deposits in limestone Egypt regions, Egyptian limestone formed through long-term processes of sedimentation, compaction, and mineralization. Layers of organic and inorganic material slowly turned into tightly bonded rock. The result is a stone with diverse colors—from creamy beiges to warm yellows and subtle grays—each reflecting a unique geological timeline.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed">With textures ranging from smooth to softly rough, Egyptian limestone offers a palette that includes pristine whites, golden beiges, and muted grays with occasional earthy veining. The natural striations and tonal variation enhance both visual depth and tactile interest, making it a go-to choice for timeless elegance in any design.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
                        <div class="overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/limestone-tiles-D4IT164Y.jpg" alt="Egyptian limestone tiles" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500"></div>
                        <div class="overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/limestone-paving-Cvuhm6HE.jpg" alt="Egyptian limestone paving" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500"></div>
                    </div>
                </div>
            </section>
            <section class="py-16 md:py-24 bg-background">
                <div class="ast-container">
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-foreground text-center mb-8">Practical Benefits &amp; Versatile Applications</h2>
                    <div class="w-16 h-1 bg-primary mx-auto mb-12"></div>
                    <div class="max-w-4xl mx-auto space-y-8">
                        <div>
                            <h3 class="text-xl font-serif font-semibold text-foreground mb-3">Non‑Slip Surfaces &amp; Comfort</h3>
                            <p class="text-foreground/80 text-lg leading-relaxed">The softly textured surface of Egyptian limestone tiles creates slip-resistant walkways ideal for both indoor and outdoor use. Thanks to its thermal insulation, barefoot comfort is maintained year‑round—staying pleasantly cool in summer and gently warm during winter.</p>
                        </div>
                        <div>
                            <h3 class="text-xl font-serif font-semibold text-foreground mb-3">Egyptian Limestone Paving for Outdoors</h3>
                            <p class="text-foreground/80 text-lg leading-relaxed">Used extensively in Egyptian natural limestone paving, this stone is perfect for patios, paths, and landscaping features. Its durability and weather resistance mean it stands up beautifully to the elements, maintaining color and integrity through time.</p>
                        </div>
                        <div>
                            <h3 class="text-xl font-serif font-semibold text-foreground mb-3">Indoor Finishes &amp; Architectural Use</h3>
                            <p class="text-foreground/80 text-lg leading-relaxed">For interior wall cladding, corridors, lobbies, and monumental facades, Egyptian natural limestone delivers a refined look—the soft color tones and variation enrich spaces with a welcoming, classic aesthetic. Its historic use in temples, tombs, and pyramids underlines its architectural prestige and longevity.</p>
                        </div>
                        <div>
                            <h3 class="text-xl font-serif font-semibold text-foreground mb-3">Decorative &amp; Structural Elements</h3>
                            <p class="text-foreground/80 text-lg leading-relaxed">Artists and architects alike favor the material's malleability: it's ideal for sculpting intricate carvings, designing columns or fireplace surrounds, and crafting bespoke decor. Structural uses such as columns and support pillars retain both strength and aesthetic integrity over centuries.</p>
                        </div>
                        <div>
                            <h3 class="text-xl font-serif font-semibold text-foreground mb-3">Flooring &amp; High‑Traffic Areas</h3>
                            <p class="text-foreground/80 text-lg leading-relaxed">When used as limestone Egypt flooring, the surface supports heavy foot traffic while offering timeless appeal. The subtle tonal shifts and natural textures create floors that are practical yet elegant.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-16 md:py-24 bg-muted">
                <div class="ast-container">
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-foreground text-center mb-8">Why EMG is Your Premier Source for Egyptian Limestone</h2>
                    <div class="w-16 h-1 bg-primary mx-auto mb-12"></div>
                    <div class="max-w-4xl mx-auto mb-12">
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6">As a leading name in marble and granite companies in Egypt, EMG offers unmatched quality and selection:</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start text-foreground/80"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right h-5 w-5 text-primary mt-1 mr-2 flex-shrink-0">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg><span>Ethical and sustainable quarrying throughout Egypt</span></li>
                            <li class="flex items-start text-foreground/80"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right h-5 w-5 text-primary mt-1 mr-2 flex-shrink-0">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg><span>Capacity to supply wholesale volumes of Egyptian natural limestone tiles, paving slabs, and bespoke cut stone</span></li>
                            <li class="flex items-start text-foreground/80"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right h-5 w-5 text-primary mt-1 mr-2 flex-shrink-0">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg><span>In‑house finishing options: honed, polished, flamed, brushed or rustic</span></li>
                            <li class="flex items-start text-foreground/80"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right h-5 w-5 text-primary mt-1 mr-2 flex-shrink-0">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg><span>Expert consultancy for your project—from design to installation</span></li>
                            <li class="flex items-start text-foreground/80"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right h-5 w-5 text-primary mt-1 mr-2 flex-shrink-0">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg><span>Competitive pricing and international shipping services</span></li>
                        </ul>
                        <p class="text-foreground/80 text-lg leading-relaxed">Whether you're sourcing Egyptian natural limestone, Egyptian natural limestone tiles, or Egyptian limestone paving products, EMG ensures you receive premium material tailored to your aesthetic vision and structural requirements.</p>
                    </div>
                    <div class="flex justify-center"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/egyptian-limestone-main-BJq2V0Mo.webp" alt="Egyptian Limestone" class="rounded-lg shadow-xl max-w-full md:max-w-2xl h-auto"></div>
                </div>
            </section>
            <section class="py-16 md:py-24 bg-background">
                <div class="ast-container">
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-foreground text-center mb-8">Frequently Asked Questions</h2>
                    <div class="w-16 h-1 bg-primary mx-auto mb-12"></div>
                    <div class="max-w-4xl mx-auto space-y-8">
                        <div class="bg-muted p-6 rounded-lg">
                            <h3 class="text-lg font-semibold text-foreground mb-3">Q: What makes Egyptian limestone different from other limestones?</h3>
                            <p class="text-foreground/80">It's rooted in Egypt's unique Nile‑formed sedimentary deposits, offering unmatched color variation, durability, and historical prestige.</p>
                        </div>
                        <div class="bg-muted p-6 rounded-lg">
                            <h3 class="text-lg font-semibold text-foreground mb-3">Q: Can Egyptian limestone be used outdoors year‑round?</h3>
                            <p class="text-foreground/80">Yes—its weather resistance and non‑slip texture make it ideal for Egyptian natural limestone paving in all climates.</p>
                        </div>
                        <div class="bg-muted p-6 rounded-lg">
                            <h3 class="text-lg font-semibold text-foreground mb-3">Q: Do you offer custom tile cuts or finishes?</h3>
                            <p class="text-foreground/80">Absolutely. EMG provides a full range of Egyptian natural limestone tiles in custom sizes, edge profiles, and finishes for both commercial and residential use.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-16 md:py-24 bg-muted">
                <div class="ast-container">
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-foreground text-center mb-8">Enhance Your Project with Egyptian Limestone</h2>
                    <div class="w-16 h-1 bg-primary mx-auto mb-12"></div>
                    <div class="max-w-4xl mx-auto mb-12">
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6">From luxury residences to commercial developments, Egyptian natural limestone offers a perfect balance of function, beauty, and heritage. When you choose EMG:</p>
                        <ul class="space-y-3 mb-8">
                            <li class="flex items-start text-foreground/80"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right h-5 w-5 text-primary mt-1 mr-2 flex-shrink-0">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg><span>You work with one of the top marble stone Egypt marble &amp; granite providers</span></li>
                            <li class="flex items-start text-foreground/80"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right h-5 w-5 text-primary mt-1 mr-2 flex-shrink-0">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg><span>You get access to expert technical guidance</span></li>
                            <li class="flex items-start text-foreground/80"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right h-5 w-5 text-primary mt-1 mr-2 flex-shrink-0">
                                    <path d="m9 18 6-6-6-6"></path>
                                </svg><span>You benefit from high-grade, ethically sourced stone</span></li>
                        </ul>
                        <p class="text-foreground/80 text-lg leading-relaxed">Bring timeless elegance to your design—contact EMG today to explore quarry‑to‑finish solutions featuring Egyptian limestone, Egyptian limestone tiles, and Egyptian limestone paving.</p>
                    </div>
                    <div class="flex justify-center mb-12"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/limestone-designs-Cmi8vdvg.jpg" alt="Limestone Designs" class="rounded-lg shadow-xl max-w-full md:max-w-3xl h-auto"></div>
                    <div class="max-w-4xl mx-auto">
                        <p class="text-foreground/80 text-lg leading-relaxed mb-4"><strong>Related Material You Might Like:</strong></p>
                        <div class="flex flex-wrap gap-4"><a class="text-primary hover:underline" href="<?php echo ($page = get_page_by_path('egyptian-marble')) ? get_permalink($page->ID) : ''; ?>">Egyptian Marble</a><a class="text-primary hover:underline" href="<?php echo ($page = get_page_by_path('egyptian-granite')) ? get_permalink($page->ID) : ''; ?>">Egyptian Granite</a></div>
                    </div>
                </div>
            </section>
            <section class="py-16 md:py-24 bg-primary">
                <div class="ast-container">
                    <div class="text-center">
                        <h2 class="text-3xl md:text-4xl font-serif font-bold text-primary-foreground mb-8">Time to Contact Us</h2>
                        <a href="https://api.whatsapp.com/send/?phone=%2B201000390999&amp;text&amp;type=phone_number&amp;app_absent=0" target="_blank" rel="noopener noreferrer">
                            <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md px-8 bg-secondary hover:bg-secondary/90">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle mr-2 h-5 w-5">
                                    <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                                </svg>Whatsapp Us
                            </button>
                        </a>
                    </div>
                </div>
            </section>

            <?php
            set_query_var('category', 'Egyptian Limestone');
            get_template_part('/template/components/sections/related', 'products');
            ?>
        </div>
    </main>

</div><!-- #primary -->


<?php get_footer(); ?>