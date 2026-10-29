<?php /* Template Name: Egyptian Marble */ ?>

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
                    <h2 class="text-2xl md:text-3xl font-serif font-bold text-foreground text-center mb-4">Egyptian Marble</h2>
                    <h3 class="text-xl md:text-2xl font-serif text-foreground/80 text-center mb-8">How is it formed?</h3>
                    <div class="w-16 h-1 bg-primary mx-auto mb-12"></div>
                    <div class="max-w-4xl mx-auto text-center mb-12">
                        <p class="text-foreground/80 text-lg leading-relaxed mb-8">Egyptian marble undergoes a remarkable journey through geological ages to attain its exquisite form. It originates from eroded rocks like limestone, accumulating as sedimentary layers in water bodies. Over time, the weight of overlying sediments compresses the layers, facilitating the precipitation of minerals carried by groundwater. As minerals crystallize, sediment particles bind together through cementation. Subsequent burial leads to metamorphism, wherein heat and pressure cause minerals to recrystallize, transforming the rock into marble. The incorporation of impurities contributes to its distinctive colors and veining. Geological forces then uplift and expose marble-rich layers, enabling quarrying.</p>
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
                    set_query_var('products_category', 'Egyptian Marble Tiles');
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
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-foreground text-center mb-8">About Egyptian Marble</h2>
                    <div class="w-16 h-1 bg-primary mx-auto mb-12"></div>
                    <div class="max-w-4xl mx-auto mb-12">
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6">Marble is derived from the Ancient Greek phrase mármaron, coming from the word mármaros, which means "crystalline rock, sparkling stone." This is because it transforms from limestone to the marble we see today. Marble, a testament to the Earth's artistic evolution, is born from eons of geological metamorphosis. Originating as sedimentary particles, it accumulates over time, undergoing immense pressure and mineral infusion from groundwater. This culminates in a crystalline transformation, creating the unique patterns and colors that define marble. Subsequent geological forces uplift and expose these layers, allowing for extraction and utilization.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed">Egyptian Marble's beauty lies in its diverse range of hues, from pristine whites to deep greens and vibrant reds, and its intricate veining that tells a geological tale. Revered for its elegance and durability, it has been used for millennia in architecture, sculptures, and interior design. Its presence in iconic structures and modern creations resonates with Egypt's geological heritage, connecting the present with the Earth's ancient artistic processes.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/egyptian-marble-types-BVQMeHF5.jpg" alt="Egyptian marble types" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500"></div>
                        <div class="overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/egyptian-marble-emg-C67Zf2C5.jpg" alt="Egyptian marble EMG" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500"></div>
                        <div class="overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/marble-showcase-mgUj4vv7.jpg" alt="Marble showcase" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500"></div>
                    </div>
                </div>
            </section>
            <section class="py-16 md:py-24 bg-background">
                <div class="ast-container">
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-foreground text-center mb-8">Marble Colors</h2>
                    <div class="w-16 h-1 bg-primary mx-auto mb-12"></div>
                    <div class="max-w-4xl mx-auto">
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6">Marble is a light-colored rock with a smooth surface. Although the stone is most found in white, it can also be found in a variety of colors including plush rose, the most selected color of marble in Egypt. Colored it is commonly used to enhance flooring patterns or to enhance the beauty of monuments and other structures.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6">The British Museum houses some of the finest examples of Egyptian marble and granite both white and colored, and is a tribute to the stone's splendor. Both white and grey floor tiles are used for outdoor and indoor flooring with varied finishes.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed">Many people regard beige Egyptian Natural stones as the epitome of home design elegance. Colored marble has gained popularity among architecture enthusiasts as well.</p>
                    </div>
                </div>
            </section>
            <section class="py-16 md:py-24 bg-muted">
                <div class="ast-container">
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-foreground text-center mb-8">Functional Purpose</h2>
                    <div class="w-16 h-1 bg-primary mx-auto mb-12"></div>
                    <div class="max-w-4xl mx-auto mb-12">
                        <p class="text-foreground/80 text-lg leading-relaxed mb-8">Marble has such a distinct vibrancy to space's atmosphere and sets radiant mood to any object in home. It's been making a powerful impression in unexpected places around homes and commercial spaces as following:</p>
                        <div class="space-y-6">
                            <div class="bg-background p-6 rounded-lg shadow-sm">
                                <h3 class="text-lg font-serif font-semibold text-foreground mb-2">Architectural Marvels</h3>
                                <p class="text-foreground/80">Egyptian marble stands as a testament to ancient craftsmanship, adorning architectural marvels like the Karnak Temple Complex and Luxor Temple. It transcends time, preserving its elegance and beauty on structures that have withstood centuries of existence, embodying the rich history and culture of Egypt.</p>
                            </div>
                            <div class="bg-background p-6 rounded-lg shadow-sm">
                                <h3 class="text-lg font-serif font-semibold text-foreground mb-2">Flooring</h3>
                                <p class="text-foreground/80">Egyptian marble's robust nature and intricate veining lend an air of opulence to flooring. Its durability withstands the test of time, making it an impeccable choice for opulent palaces, boutique hotels, and bustling commercial spaces where both visual appeal and endurance are imperative.</p>
                            </div>
                            <div class="bg-background p-6 rounded-lg shadow-sm">
                                <h3 class="text-lg font-serif font-semibold text-foreground mb-2">Wall Cladding</h3>
                                <p class="text-foreground/80">Egyptian marble transforms walls into canvases of sophistication. Whether enhancing interiors with its subdued elegance or gracing exteriors with its regal presence, marble-clad walls narrate stories of grandeur, reflecting both the sunlight's dance and the shadows of history.</p>
                            </div>
                            <div class="bg-background p-6 rounded-lg shadow-sm">
                                <h3 class="text-lg font-serif font-semibold text-foreground mb-2">Columns and Pillars</h3>
                                <p class="text-foreground/80">In the hands of skilled artisans, Egyptian marble manifests as intricate columns and pillars, exemplifying opulence and craftsmanship. Adorning palaces, mosques, and ancient temples, these architectural elements convey both strength and splendor.</p>
                            </div>
                            <div class="bg-background p-6 rounded-lg shadow-sm">
                                <h3 class="text-lg font-serif font-semibold text-foreground mb-2">Sculptures and Carvings</h3>
                                <p class="text-foreground/80">Sculptors harness Egyptian marble's pliability to breathe life into statues, reliefs, and intricate carvings. From the iconic Sphinx to modern art installations, the stone's versatility immortalizes stories, emotions, and cultural legacies.</p>
                            </div>
                            <div class="bg-background p-6 rounded-lg shadow-sm">
                                <h3 class="text-lg font-serif font-semibold text-foreground mb-2">Countertops and Vanity Tops</h3>
                                <p class="text-foreground/80">The luxurious allure of Egyptian marble graces modern interiors through kitchen countertops and bathroom vanity tops. Its resistance to heat and its timeless elegance elevate culinary experiences and personal grooming rituals, harmonizing functionality and aesthetics.</p>
                            </div>
                            <div class="bg-background p-6 rounded-lg shadow-sm">
                                <h3 class="text-lg font-serif font-semibold text-foreground mb-2">Staircases and Balustrades</h3>
                                <p class="text-foreground/80">The classical elegance of marble staircases and balustrades adorns historic palaces and modern mansions alike. Each step becomes a journey through time, and each balustrade evokes a sense of artistry that transcends generations.</p>
                            </div>
                            <div class="bg-background p-6 rounded-lg shadow-sm">
                                <h3 class="text-lg font-serif font-semibold text-foreground mb-2">Fireplace Surrounds</h3>
                                <p class="text-foreground/80">Egyptian marble transforms hearths into focal points of sophistication. Its innate ability to radiate warmth and its resistance to heat enhance the ambiance, creating cozy and inviting spaces where stories and memories are shared.</p>
                            </div>
                            <div class="bg-background p-6 rounded-lg shadow-sm">
                                <h3 class="text-lg font-serif font-semibold text-foreground mb-2">Decorative Accents</h3>
                                <p class="text-foreground/80">Egyptian marble's exquisite hues and veining patterns transform decorative accents like vases, bowls, and inlays into true works of art. These accents infuse spaces with a touch of luxury, inviting admiration and conversation.</p>
                            </div>
                            <div class="bg-background p-6 rounded-lg shadow-sm">
                                <h3 class="text-lg font-serif font-semibold text-foreground mb-2">Monuments and Memorials</h3>
                                <p class="text-foreground/80">The enduring nature of Egyptian marble honors legacies and lives through memorials, gravestones, and plaques. These poignant pieces stand as timeless tributes, connecting past and present in an embrace of dignity and remembrance.</p>
                            </div>
                            <div class="bg-background p-6 rounded-lg shadow-sm">
                                <h3 class="text-lg font-serif font-semibold text-foreground mb-2">Furniture</h3>
                                <p class="text-foreground/80">Crafted into elegant tabletops, coffee tables, and cabinets, Egyptian marble seamlessly marries functionality with luxury. Each piece becomes a masterpiece, embodying the harmonious blend of artistic expression and utilitarian purpose.</p>
                            </div>
                            <div class="bg-background p-6 rounded-lg shadow-sm">
                                <h3 class="text-lg font-serif font-semibold text-foreground mb-2">Exterior Landscaping</h3>
                                <p class="text-foreground/80">Egyptian marble extends its allure to outdoor realms, where garden pathways, ornamental features, and facades captivate with their natural beauty. These elements create harmonious transitions between architectural spaces and nature's splendor.</p>
                            </div>
                            <div class="bg-background p-6 rounded-lg shadow-sm">
                                <h3 class="text-lg font-serif font-semibold text-foreground mb-2">Modern Interiors</h3>
                                <p class="text-foreground/80">Egyptian marble bridges history and modernity, enriching contemporary interiors with its refined allure. From minimalist designs that showcase its texture to intricate patterns that exude luxury, marble becomes an integral part of contemporary aesthetics.</p>
                            </div>
                            <div class="bg-background p-6 rounded-lg shadow-sm">
                                <h3 class="text-lg font-serif font-semibold text-foreground mb-2">Bathrooms</h3>
                                <p class="text-foreground/80">The elegance of Egyptian marble transforms bathrooms into sanctuaries of luxury. From shower walls that envelop in opulence to bathtub surrounds that evoke spa-like serenity, marble elevates bathing spaces into realms of refined indulgence.</p>
                            </div>
                            <div class="bg-background p-6 rounded-lg shadow-sm">
                                <h3 class="text-lg font-serif font-semibold text-foreground mb-2">Public Spaces</h3>
                                <p class="text-foreground/80">Marbled lobbies and entrances command attention in commercial buildings, leaving indelible first impressions. The juxtaposition of marble's grandeur against modern architecture showcases the enduring significance of classic elegance.</p>
                            </div>
                            <div class="bg-background p-6 rounded-lg shadow-sm">
                                <h3 class="text-lg font-serif font-semibold text-foreground mb-2">Art Installations</h3>
                                <p class="text-foreground/80">Artists harness Egyptian marble's aesthetic versatility to create installations that captivate the senses and spark contemplation. The stone's enduring beauty becomes a canvas for modern narratives, engaging audiences in evocative experiences.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-16 md:py-24 bg-background">
                <div class="ast-container">
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-foreground text-center mb-8">Flawless Styles</h2>
                    <div class="w-16 h-1 bg-primary mx-auto mb-12"></div>
                    <div class="max-w-4xl mx-auto mb-16">
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6">Egyptian natural stones can also be utilized for decorative purposes such as ceilings, floor and wall tiles. This stone is very popular and can be found in hotels, bungalows, businesses, museums, water features, and art – thanks to its regal appeal. Atriums, commercial malls, private homes, and condominiums are all decorated with mosaic tiles. Pure Egyptian Natural stones is still utilized for statues, gazebos, columns, flowerpots, and other items as it has been used throughout history.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6">When it comes to home décor, many people choose the opulence and elegance of Egyptian natural stones. It is, of course, a significant part of this, and it is currently used to decorate homes in several ways.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed">Displaying Egyptian-styled antiquities is a terrific way to incorporate this majestic stone into your house. Keep your marble tile display to a single spot and avoid overcrowding the rest of the house with them to make them stand out.</p>
                    </div>
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-foreground text-center mb-8">Timeless Design</h2>
                    <div class="w-16 h-1 bg-primary mx-auto mb-12"></div>
                    <div class="max-w-4xl mx-auto">
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6">Every room where Egyptian marble is used exudes an air of refinement. This amazing stone is known for its wonder and beauty and used to construct spectacular and exquisite interiors all over the world. When used in kitchen countertops and bathrooms, marble is synonymous with luxury and creates a high-end, opulent look. It can be utilized to spruce up interiors, from farmhouse styles to creating contrasts with slick surfaces for a contemporary aesthetic.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6">Egyptian natural stones is an exceedingly unique home décor item that can add a touch of elegance to any space. Choosing the right type of natural stones for a genuinely stunning appearance is essential. It is genuine and can add a much-needed refined and fancy polished touch to your home. The art, history, and, of course, architecture of Egypt is well-known.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed">Egyptians produced some of the world's most recognized landmarks, including the pyramids and sphinxes, which are as popular today as they were when they were erected. One of the most common architectural materials employed in their numerous structures was marble. It's timeless and durable, and they may be utilized for a whole slew of applications. Floors, wall tiles, and countertops are a smart investment.</p>
                    </div>
                </div>
            </section>
            <section class="py-16 md:py-24 bg-muted">
                <div class="ast-container">
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-foreground text-center mb-8">Maintenance and Cleaning</h2>
                    <div class="w-16 h-1 bg-primary mx-auto mb-12"></div>
                    <div class="max-w-4xl mx-auto mb-12">
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6">Maintaining the timeless allure of marble necessitates a blend of consistent cleaning practices and precautionary measures. Begin with daily upkeep, using a soft, dry cloth or dust mop to eliminate particles and a damp cloth, employing pH-neutral cleaners or water, for light cleaning. Adopt preventive measures such as using coasters and mats to shield against scratches. Swiftly address spills with immediate blotting, employing a soft, damp cloth for liquids, and a dry cloth for solids. Regular sealing is imperative to create a protective barrier against stains, with the frequency contingent on usage.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6">When dealing with stubborn stains, resort to pH-neutral marble cleaners or natural remedies like a baking soda and water mixture. However, avoid acidic or abrasive cleaners, as they can harm the porous surface. Incorporate periodic professional maintenance, including deep cleaning and polishing for sustained brilliance. Exercise caution with marble floors, sweeping regularly with a soft broom and refraining from excessive water use during cleaning. These practices, coupled with gentle care, will ensure your marble retains its enduring elegance.</p>
                        <div class="bg-background p-6 rounded-lg">
                            <h3 class="text-lg font-semibold text-foreground mb-4">Related Material You Might Like:</h3>
                            <div class="flex flex-wrap gap-4"><a class="text-primary hover:text-primary/80 transition-colors flex items-center" href="<?php echo ($page = get_page_by_path('egyptian-limestone')) ? get_permalink($page->ID) : ''; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right h-4 w-4 mr-1">
                                        <path d="m9 18 6-6-6-6"></path>
                                    </svg>Egyptian Limestone</a><a class="text-primary hover:text-primary/80 transition-colors flex items-center" href="<?php echo ($page = get_page_by_path('egyptian-granite')) ? get_permalink($page->ID) : ''; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-right h-4 w-4 mr-1">
                                        <path d="m9 18 6-6-6-6"></path>
                                    </svg>Egyptian Granite</a></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-16 md:py-24 bg-primary">
                <div class="ast-container">
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-primary-foreground text-center mb-8">Time to Contact Us</h2>
                    <div class="w-16 h-1 bg-secondary mx-auto mb-12"></div>
                    <div class="flex flex-col items-center"><a href="https://api.whatsapp.com/send/?phone=%2B201000390999&amp;text&amp;type=phone_number&amp;app_absent=0" target="_blank" rel="noopener noreferrer"><button class="inline-flex items-center justify-center gap-2 whitespace-nowrap font-medium ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md bg-secondary hover:bg-secondary/90 text-lg px-8 py-6 mb-12"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle h-5 w-5 mr-2">
                                    <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"></path>
                                </svg>Whatsapp Us</button></a><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/marble-design-CvKgme5B.jpg" alt="Marble Design" class="rounded-lg shadow-xl max-w-full md:max-w-2xl h-auto"></div>
                </div>
            </section>
            <?php
            set_query_var('category', 'Egyptian Marble Tiles');
            get_template_part('/template/components/sections/related', 'products');
            ?>
        </div>
    </main>

</div><!-- #primary -->


<?php get_footer(); ?>