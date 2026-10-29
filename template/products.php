<?php /* Template Name: Products */ ?>

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
                    <div class="max-w-4xl mx-auto text-center mb-12">
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6">At EMG, our legacy is steeped in a profound commitment to excellence, crafting a remarkable array of premium marble, granite, limestone, and natural stone products that define the pinnacle of quality. With over decades of industry expertise, we stand as a beacon of innovation and precision, seamlessly blending traditional craftsmanship with cutting-edge manufacturing techniques to offer an unmatched selection of materials that captivate the senses.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6">Our manufacturing line stands as a testament to our unwavering pursuit of perfection. With state-of-the-art facilities equipped with advanced machinery and skilled artisans, we meticulously transform raw natural stones into masterpieces that narrate stories of elegance and resilience. The synergy of traditional craftsmanship and modern technology ensures that the products bearing the EMG mark carry with them a legacy of expertise and attention to detail.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed">The core of our identity lies in our commitment to delivering materials that transcend the ordinary. Our products aren't just raw materials; they are the embodiment of artistry and vision. The premium essence of our products of marble, granite, limestone, and natural stones is exemplified in their durability, richness, and aesthetic splendor. This quality, combined with our rigorous quality control measures, ensures that our materials effortlessly transform spaces into realms of timeless beauty.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/hero-1-Dss_D_tu.jpg" alt="Premium marble products" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500"></div>
                        <div class="overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/hero-2-CK5jah3L.jpg" alt="Granite stone collection" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500"></div>
                        <div class="overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/hero-3-DUOoxD78.jpg" alt="Natural stone selection" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500"></div>
                    </div>
                </div>
            </section>
            <section class="py-16 md:py-24 bg-muted">
                <div class="ast-container transition-all duration-1000 translate-y-10">
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-foreground text-center mb-8">Our Products</h2>
                    <div class="w-16 h-1 bg-primary mx-auto mb-12"></div>
                    <div class="max-w-4xl mx-auto text-center mb-12">
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6 mb-0">These products, esteemed for their versatility, serve as the cornerstone of countless projects that span a myriad of industries. From awe-inspiring architectural marvels to welcoming residential spaces, the applications are as diverse as the imagination itself.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6 mb-0">Our marble, with its timeless allure, graces opulent interiors and creates a symphony of elegance that resonates through every corner. The enduring strength of our granite fortifies iconic structures, bridging the gap between tradition and modernity with its unmatched durability. Meanwhile, our limestone, with its understated charm, provides a subtle yet impactful touch of sophistication, transforming spaces into serene sanctuaries of tranquility.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed mb-0">From grand regal palaces that echo history's whispers to sleek contemporary designs that shape the future, our products become more than materials – they become the embodiment of design aspirations realized.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="group relative overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/marble-stone-CbWdupzD.jpg" alt="Egyptian Marble Stone" class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex items-end justify-center pb-6">
                                <h3 class="text-xl font-serif font-semibold text-primary-foreground">Egyptian Marble Stone</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/limestone-BtLyacAO.jpg" alt="Egyptian Limestone" class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex items-end justify-center pb-6">
                                <h3 class="text-xl font-serif font-semibold text-primary-foreground">Egyptian Limestone</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/granite-stone-DL_Ok51T.jpg" alt="Egyptian Granite Stone" class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex items-end justify-center pb-6">
                                <h3 class="text-xl font-serif font-semibold text-primary-foreground">Egyptian Granite Stone</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-16 md:py-24 bg-background">
                <div class="ast-container transition-all duration-1000 translate-y-10">
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-foreground text-center mb-8">Natural Stones</h2>
                    <div class="w-16 h-1 bg-primary mx-auto mb-12"></div>
                    <div class="max-w-4xl mx-auto text-center mb-12">
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6 mb-0">In our pursuit of diversity and excellence, EMG extends its portfolio beyond the realms of marble, granite and limestone products, to include rich selection of Egyptian natural stones that speak of the country's unparalleled geological heritage.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6 mb-0">These stones, hailing from the storied lands of Egypt, bear the imprints of history and culture. From the iconic warmth of Egyptian Hashma stone to the opulent elegance of Egyptian Basalt Stone, each stone carries within it a piece of the country's narrative.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed mb-0">Our offerings pay homage to Egypt's architectural marvels, from the towering pyramids to the ornate temples, infusing spaces across the world with a touch of Egypt's timeless allure. These natural stones transcend the ordinary, offering a connection to a land where the artistry of nature meets the craftsmanship of humans.</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-8">
                        <div class="group relative overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/tura-stone-mS5JViZS.jpg" alt="Egyptian Tura Stone" class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex items-end justify-center pb-6">
                                <h3 class="text-xl font-serif font-semibold text-primary-foreground">Egyptian Tura Stone</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/basalt-stone-y6vZRfix.jpg" alt="Egyptian Basalt Stone" class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex items-end justify-center pb-6">
                                <h3 class="text-xl font-serif font-semibold text-primary-foreground">Egyptian Basalt Stone</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/mica-stone-BatS54LO.jpg" alt="Egyptian Mica Stone" class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex items-end justify-center pb-6">
                                <h3 class="text-xl font-serif font-semibold text-primary-foreground">Egyptian Mica Stone</h3>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-3xl mx-auto">
                        <div class="group relative overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/hashma-stone-DaJodLPZ.jpg" alt="Egyptian Hashma Stone" class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex items-end justify-center pb-6">
                                <h3 class="text-xl font-serif font-semibold text-primary-foreground">Egyptian Hashma Stone</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/alabaster-stone-RZVnphf1.jpg" alt="Egyptian Alabaster Stone" class="w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex items-end justify-center pb-6">
                                <h3 class="text-xl font-serif font-semibold text-primary-foreground">Egyptian Alabaster Stone</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-16 md:py-24 bg-muted">
                <div class="ast-container transition-all duration-1000 translate-y-10">
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-foreground text-center mb-8">Quality</h2>
                    <div class="w-16 h-1 bg-primary mx-auto mb-12"></div>
                    <div class="max-w-4xl mx-auto">
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6 mb-0">Our stone tiles are a testament to excellence, representing the pinnacle of quality with their A-grade materials and impeccable craftsmanship. Every tile undergoes a meticulous process, from the selection of premium raw materials sourced from renowned quarries to the precision cutting and finishing that results in a flawless surface. We take pride in offering products that not only meet but exceed industry standards, ensuring that each tile embodies the true essence of natural beauty.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6 mb-0">Our dedication to quality is unwavering throughout the entire production journey. Expert artisans carefully shape and refine each tile, paying attention to even the smallest details. The result is not just a tile but a masterpiece, one that captures the unique characteristics of the natural stone. From the striking veining patterns in marble to the rich, earthy hues of granite and the subtle elegance of limestone, our tiles are a harmonious blend of nature's artistry and human craftsmanship.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed mb-0">We understand that every space is unique, which is why our tiles come in a diverse range of sizes, finishes, and styles. Whether you're creating a luxurious interior, a charming outdoor oasis, or anything in between, our stone tiles offer the versatility to turn your design visions into reality. With our commitment to perfection, you can trust that our stone tiles will not only meet but exceed your expectations, enhancing your spaces with their unparalleled quality, stunning aesthetics, and enduring beauty.</p>
                    </div>
                </div>
            </section>
            <section class="py-16 md:py-24 bg-background">
                <div class="ast-container transition-all duration-1000 translate-y-10">
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-foreground text-center mb-8">Durability and Longevity</h2>
                    <div class="w-16 h-1 bg-primary mx-auto mb-12"></div>
                    <div class="max-w-4xl mx-auto">
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6 mb-0">Natural stones tiling is renowned for its exceptional durability and longevity, making it a preferred choice for various applications. These stones, such as marble, granite, limestone, and other types, possess inherent strength that enables them to withstand the test of time.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6 mb-0">One of the key advantages of natural stone tiling is its resistance to wear and tear. The dense composition of these stones allows them to withstand heavy foot traffic without showing signs of damage or deterioration. Whether in high-traffic commercial spaces or bustling residential areas, natural stone tiles maintain their structural integrity and aesthetic appeal for years to come.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6 mb-0">Moreover, natural stones exhibit remarkable resistance to heat, making them an excellent choice for areas exposed to high temperatures. They can withstand direct contact with hot objects, such as pots and pans in kitchen settings or fireplaces, without experiencing any discoloration or deformation. This durability ensures that the tiles retain their original beauty and functionality over time.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6 mb-0">In addition to heat resistance, natural stone tiles possess excellent moisture resistance. When properly sealed, they create a protective barrier that prevents water penetration, making them suitable for wet areas such as bathrooms, showers, and pool surrounds. The moisture resistance of natural stone tiles helps prevent the growth of mold, mildew, and bacteria, ensuring a hygienic and long-lasting surface.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6 mb-0">Thanks to their resistance to stains and scratches, natural stone tiles maintain their pristine appearance even in high-traffic areas or in the presence of sharp objects. This quality makes them particularly suitable for kitchen countertops, backsplashes, and other surfaces prone to spills and daily use.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed mb-0">Another remarkable aspect of natural stone tiling is its ability to age gracefully. Unlike man-made materials, natural stones develop a unique patina over time, adding character and depth to the surface. This aging process enhances their beauty and gives them a timeless appeal that remains in style for generations. With proper care and maintenance, natural stone tiles can be enjoyed for decades, making them a wise and sustainable investment.</p>
                    </div>
                </div>
            </section>
            <section class="py-16 md:py-24 bg-muted">
                <div class="ast-container transition-all duration-1000 translate-y-10">
                    <h2 class="text-3xl md:text-4xl font-serif font-bold text-foreground text-center mb-8">Our Projects</h2>
                    <div class="w-16 h-1 bg-primary mx-auto mb-12"></div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <div class="group relative overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/varna-solo-f1Hjh1Yd.jpg" alt="International Hotel and Casino, Varna" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/40 to-transparent flex items-end justify-center pb-6 px-4">
                                <h3 class="text-lg font-serif font-semibold text-primary-foreground text-center">International Hotel and Casino, Varna</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/oriental-2-DcmgDbEX.jpg" alt="Oriental Resort, Sharm El Sheikh" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/40 to-transparent flex items-end justify-center pb-6 px-4">
                                <h3 class="text-lg font-serif font-semibold text-primary-foreground text-center">Oriental Resort, Sharm El Sheikh</h3>
                            </div>
                        </div>
                        <div class="group relative overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/spa-1-CQzc1Bhk.jpg" alt="Czech Spa, England" class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute inset-0 bg-gradient-to-t from-primary/90 via-primary/40 to-transparent flex items-end justify-center pb-6 px-4">
                                <h3 class="text-lg font-serif font-semibold text-primary-foreground text-center">Czech Spa, England</h3>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-12"><a class="inline-flex items-center justify-center px-8 py-3 bg-primary text-primary-foreground font-medium rounded-md hover:bg-primary/90 hover:text-white transition-colors duration-300" href="/projects">View All Projects</a></div>
                </div>
            </section>
        </div>
    </main>

</div><!-- #primary -->


<?php get_footer(); ?>