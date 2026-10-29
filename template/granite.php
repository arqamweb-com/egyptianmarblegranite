<?php /* Template Name: Egyptian Granite */ ?>

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
                <div class="ast-container">
                    <h2 class="text-2xl md:text-3xl font-serif font-bold text-foreground text-center mb-4">Egyptian Granite</h2>
                    <h3 class="text-xl md:text-2xl font-serif text-foreground/80 text-center mb-8">How is it formed?</h3>
                    <div class="w-16 h-1 bg-primary mx-auto mb-12"></div>
                    <div class="max-w-4xl mx-auto text-center mb-12">
                        <p class="text-foreground/80 text-lg leading-relaxed mb-8">Egyptian granite forms through a process spanning millions of years. Originating deep within the Earth's mantle, rocks melt to create magma, which rises towards the surface through fractures. Cooling and crystallization occur as the magma cools, with minerals like quartz, feldspar, and mica crystallizing. The cooled magma forms large underground bodies called plutons. Over time, erosion exposes these plutons at the surface, allowing for mining and quarrying. Egyptian granite's composition and appearance vary due to factors like mineral content and cooling speed, making it a vital material for architecture and culture in Egypt.</p>
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
                            <p class="text-foreground/70 mt-4 text-sm">Or Read More</p>
                        </div>
                    </div>

                    <?php
                    set_query_var('products_category', 'Egyptian Granite Tiles');
                    get_template_part('/template/products/custom-loop', 'products');
                    ?>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <a class="group relative overflow-hidden rounded-lg shadow-lg" href="<?php echo ($page = get_page_by_path('egyptian-limestone')) ? get_permalink($page->ID) : ''; ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/limestone-BtLyacAO.jpg" alt="Egyptian Limestone" class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex items-end justify-center pb-6">
                                <h3 class="text-xl font-serif font-semibold text-primary-foreground">Egyptian Limestone</h3>
                            </div>
                        </a>
                        <a class="group relative overflow-hidden rounded-lg shadow-lg" href="<?php echo ($page = get_page_by_path('egyptian-marble')) ? get_permalink($page->ID) : ''; ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/marble-stone-CbWdupzD.jpg" alt="Egyptian Marble" class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex items-end justify-center pb-6">
                                <h3 class="text-xl font-serif font-semibold text-primary-foreground">Egyptian Marble</h3>
                            </div>
                        </a>
                        <a class="group relative overflow-hidden rounded-lg shadow-lg" href="<?php echo ($page = get_page_by_path('egyptian-granite')) ? get_permalink($page->ID) : ''; ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/granite-stone-DL_Ok51T.jpg" alt="Egyptian Granite" class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex items-end justify-center pb-6">
                                <h3 class="text-xl font-serif font-semibold text-primary-foreground">Egyptian Granite</h3>
                            </div>
                        </a>
                    </div>
                </div>
            </section>
            <section class="py-16 md:py-24 bg-muted">
                <div class="ast-container">
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-foreground text-center mb-8">About Egyptian Granite</h2>
                    <div class="w-16 h-1 bg-primary mx-auto mb-12"></div>
                    <div class="max-w-4xl mx-auto mb-12">
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6">The ancient Egyptians were keen on employing a wide range of materials in their structures and monuments as well as tomb slabs. Local quarries were exploited to make religious and secular buildings. They used limestone and preferred black, grey, and red granite from Aswan over the rest of the stones. The quarries surrounding Aswan illustrate the ancient Egyptian techniques for quarrying and cutting the stone that makes up Giza's Great Pyramid.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6">It was used for the making of obelisks in which was believed by the ancient Egyptians that the God Ra would continue to live in. Monuments, ceremonial vases, and statues in Ancient Egypt were constructed using granite that was mined locally.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed">Natural stones hardness and resistance ensured that it became the predominant construction material in the ancient period. The biggest quarries were located in Aswan and in the South of the country and still stand until today. Granite from Egypt is regarded as a grand mark of status, durability, and strength. It is considered as the best building material.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/granite-slabs-BLdDskRU.jpg" alt="Egyptian granite slabs" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500"></div>
                        <div class="overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/granite-kitchen-Ms7LGS0N.jpg" alt="Egyptian granite kitchen worktop" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500"></div>
                        <div class="overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/granite-emg-MmSKuugz.jpg" alt="Egyptian granite EMG" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500"></div>
                    </div>
                </div>
            </section>
            <section class="py-16 md:py-24 bg-background">
                <div class="ast-container">
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-foreground text-center mb-8">Granite Colors</h2>
                    <div class="w-16 h-1 bg-primary mx-auto mb-12"></div>
                    <div class="max-w-4xl mx-auto">
                        <p class="text-foreground/80 text-lg leading-relaxed">Egyptian granite is renowned for its rich and diverse range of colors, each with its unique beauty and characteristics. The diverse mixture of colors of the alluring Egyptian granite is unrivaled- starting from shades of white to black hues. The most prominent colors are pink, white, and variations of grey and black absolute black. The minerals composed within the stone give it its unique and remarkable variety of colors that keep stunning us with the stone's huge color palette.</p>
                    </div>
                </div>
            </section>
            <section class="py-16 md:py-24 bg-muted">
                <div class="ast-container">
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-foreground text-center mb-8">Functional Purpose</h2>
                    <div class="w-16 h-1 bg-primary mx-auto mb-12"></div>
                    <div class="max-w-4xl mx-auto mb-12">
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6">It has been used for thousands of years and is used as a building material, a dimension stone, an architectural stone, and an ornamental stone.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed mb-8">Buildings, bridges, paving, monuments, and a range of other exterior constructions all use granite slabs and granite tiles for the indoors are used on floor tiles, countertops, and other design components. It is a high-end material that is applied in projects to convey a sense of beauty and quality. Various constructions are made out of granite blocks. Building blocks can be completed on one or more sides or left unfinished on all sides. Combining rough and finished granite surfaces creates a magnificent impression.</p>
                        <div class="space-y-6">
                            <div class="bg-background p-6 rounded-lg shadow-sm">
                                <h3 class="text-lg font-serif font-semibold text-foreground mb-2">Roadside Curbing and granite curb blocks</h3>
                                <p class="text-foreground/80">In cold temperatures, roads demand a durable stone that can withstand freezing temperatures. Granite holds the standard for being the natural stone that holds up to the freeze-thawing cycle of cold countries. It exceeds other stones and even casting concrete in its ability to endure freezing weather- hence the best to apply for bridge and roadside curbing to prevent it from wearing down and resistant to de-icing salt.</p>
                            </div>
                            <div class="bg-background p-6 rounded-lg shadow-sm">
                                <h3 class="text-lg font-serif font-semibold text-foreground mb-2">Cobbles</h3>
                                <p class="text-foreground/80">Egyptian grey granite cobbles, a small round stone used to cover road surfaces, are smaller than a boulder and larger than a pebble in size. For use on paths, edgings, and driveways, dark grey granite cobbles are the most selected. It's admired for its color uniformity and simply satisfying to the eye with its dark grey color. Another prevailing type is silver granite cobbles.</p>
                            </div>
                            <div class="bg-background p-6 rounded-lg shadow-sm">
                                <h3 class="text-lg font-serif font-semibold text-foreground mb-2">Pavers</h3>
                                <p class="text-foreground/80">Paving a driveway with granite paving stones is a colorful and entertaining experience. Natural Egyptian granite paving slabs' and granite pavers beauty when combined with excellent craftsmanship and design can generate a one-of-a-kind and long-lasting outcome.</p>
                            </div>
                            <div class="bg-background p-6 rounded-lg shadow-sm">
                                <h3 class="text-lg font-serif font-semibold text-foreground mb-2">Flooring and Wall Cladding</h3>
                                <p class="text-foreground/80">To create an upscale, high-luster, rich environment, granite floor tiles and wall tile are typically used for tile flooring which has high traffic. Wall cladding with flamed finish generates a stunning art statement in any space outdoors.</p>
                            </div>
                            <div class="bg-background p-6 rounded-lg shadow-sm">
                                <h3 class="text-lg font-serif font-semibold text-foreground mb-2">Patios</h3>
                                <p class="text-foreground/80">Granite patio pavers and garden paving slabs are also used to create a harmonious feel for outdoor greenery. It is also the perfect choice for landscaping and planters, covering of walkways and garden paths, is available in various colors.</p>
                            </div>
                            <div class="bg-background p-6 rounded-lg shadow-sm">
                                <h3 class="text-lg font-serif font-semibold text-foreground mb-2">Kitchen and Bathroom</h3>
                                <p class="text-foreground/80">Granite countertops elevate the visual appeal of a high-end kitchen and are frequently used as the room's focal point. This natural stone makes beautiful granite kitchen countertops with polished finish that will suit the look and style of any design scheme and are adorned for their practicality. It's more natural than quartz, and it works especially well with white kitchen cabinets.</p>
                            </div>
                            <div class="bg-background p-6 rounded-lg shadow-sm">
                                <h3 class="text-lg font-serif font-semibold text-foreground mb-2">Style and Timeless Designs</h3>
                                <p class="text-foreground/80">Of all the natural stones, granite ranks amongst the top, and its rich beauty is unmatched. Between its intriguing colors and classic style, it is an investment for the long run. With over 20 hues of the stone to choose from, selecting the color will be a flawless experience while being confident in selecting an extended-lasting quality for kitchen cabinets, flooring, walls, and beyond.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-16 md:py-24 bg-background">
                <div class="ast-container">
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-foreground text-center mb-8">Flawless Style</h2>
                    <div class="w-16 h-1 bg-primary mx-auto mb-12"></div>
                    <div class="max-w-4xl mx-auto mb-16">
<p class="text-foreground/80 text-lg leading-relaxed mb-6">Egyptian granite is a hard, dense stone, which is why it suits surfaces that see daily wear. It resists scratches from knives and cookware, and a hot pan set down on a polished worktop will not mark it. Halayeb and New Halayeb give a light grey speckled look, Red Aswan and Royal Red bring warm red and pink tones, and Gandola sits between the two.</p>
<p class="text-foreground/80 text-lg leading-relaxed">Each variety can be polished for a reflective surface, honed for a soft matt look or flamed for grip outdoors. Choose the stone for its colour first, then pick the finish that suits where it will be laid.</p>
</div>
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-foreground text-center mb-8">Timeless Designs</h2>
                    <div class="w-16 h-1 bg-primary mx-auto mb-12"></div>
                    <div class="max-w-4xl mx-auto mb-16">
<p class="text-foreground/80 text-lg leading-relaxed mb-6">Granite has been used in Egyptian building for thousands of years, and it still goes into the same places: floors, stairs and façades that have to last. In a modern home its most common job is the kitchen countertop, where hardness and heat resistance count for more than anywhere else in the house.</p>
<p class="text-foreground/80 text-lg leading-relaxed">Outside, flamed granite is laid as paving for driveways, terraces and public squares, because the textured surface stays safe underfoot when wet. Polished slabs work for interior floors and wall cladding, and honed granite suits stairs and bathrooms where a less glossy look is wanted.</p>
</div>
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-foreground text-center mb-8">Maintenance and Cleaning</h2>
                    <div class="w-16 h-1 bg-primary mx-auto mb-12"></div>
                    <div class="max-w-4xl mx-auto">
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6">This natural stone has to be well cared for through regular upkeep is recommended to maintain its beauty, elegance, and sturdiness. Most issues occur when granite countertops are not properly sealed or when the sealant wears off. Counting on the color and porosity of the granite, the quality of the sealer, and proper sealant application, most countertops would require sealing upon installation and then resealing every 1-5 years.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6">Granite is a porous material that suggests that unsealed or improperly sealed counters can collect oil, juice, or wine leaving a stain, which may be difficult to get rid of. It is a very durable material that does not scratch easily and can withstand normal wear and tear admirably as kitchen countertops. It is also heat resistant, making it excellent for usage near a stove or cooktop.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed">Use a microfiber cloth to dust granite countertops to keep them clean. For basic cleaning, a dry microfiber cleaning cloth. When daily accidents and spills occur, wipe down the granite surface gently with water on a daily or as-needed basis.</p>
                    </div>
                </div>
            </section>
            <section class="py-16 md:py-24 bg-muted">
                <div class="ast-container">
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-foreground text-center mb-8">EMG Quarries</h2>
                    <div class="w-16 h-1 bg-primary mx-auto mb-12"></div>
                    <div class="max-w-4xl mx-auto mb-12">
                        <p class="text-foreground/80 text-lg leading-relaxed mb-8">EMG offers the complete range of colors with the foremost superior quality. Being the leading Egyptian granite supplier, we manufacture granite countertops, granite paving slabs, cobbles, and tiles through the ownership of the biggest quarries in Egypt, with six red quarries in Aswan and three factories in Cairo.</p>
                        <div class="flex justify-center mb-12"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/quarries-CUJD29AR.jpg" alt="EMG Quarries" class="rounded-lg shadow-xl max-w-full md:max-w-2xl h-auto"></div>
                        <div class="bg-background p-6 rounded-lg">
                            <h3 class="text-lg font-semibold text-foreground mb-4">Related Material You Might Like:</h3>
                            <div class="flex flex-wrap gap-4"><a class="text-primary hover:text-primary/80 transition-colors flex items-center" href="<?php echo ($page = get_page_by_path('egyptian-marble')) ? get_permalink($page->ID) : ''; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right h-4 w-4 mr-1">
                                        <path d="m9 18 6-6-6-6"></path>
                                    </svg>Egyptian Marble</a><a class="text-primary hover:text-primary/80 transition-colors flex items-center" href="<?php echo ($page = get_page_by_path('egyptian-limestone')) ? get_permalink($page->ID) : ''; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right h-4 w-4 mr-1">
                                        <path d="m9 18 6-6-6-6"></path>
                                    </svg>Egyptian Limestone</a></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-16 md:py-24 bg-primary">
                <div class="ast-container">
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-primary-foreground text-center mb-8">Time to Contact Us</h2>
                    <div class="w-16 h-1 bg-secondary mx-auto mb-12"></div>
                    <div class="flex justify-center"><a href="https://api.whatsapp.com/send/?phone=%2B201000390999&amp;text&amp;type=phone_number&amp;app_absent=0" target="_blank" rel="noopener noreferrer"><button class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md bg-secondary hover:bg-secondary/90 text-lg px-8 py-6"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle h-5 w-5 mr-2">
                                    <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                                </svg>Whatsapp Us</button></a></div>
                </div>
            </section>
            <?php
            set_query_var('category', 'Egyptian Granite Tiles');
            get_template_part('/template/components/sections/related', 'products');
            ?>
        </div>
    </main>

</div><!-- #primary -->


<?php get_footer(); ?>