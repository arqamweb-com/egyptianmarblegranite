<?php /* Template Name: Quartz */ ?>

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

            <section class="py-20 bg-white">
                <div class="ast-container">
                    <div class="max-w-6xl mx-auto transition-all duration-1000 opacity-100 translate-y-0">
                        <h2 class="font-serif text-4xl md:text-5xl text-slate-800 text-center mb-12">Quartz Stone</h2>
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <p class="text-slate-600 leading-relaxed text-lg">Quartz stone, also known as engineered quartz or quartz composite, is a man-made material composed of natural quartz crystals and binders such as resins, polymers, and pigments. It is designed to mimic the appearance of natural stone while offering superior strength, durability, and resistance to stains and scratches.</p>
                                <p class="text-slate-600 leading-relaxed text-lg">Quartz stone is meticulously crafted by blending natural quartz crystals with precisely measured resins and pigments. While the quartz content may slightly fluctuate, it predominantly constitutes 90-95% of the material. The remaining percentage comprises specialized resins, serving as the cohesive force that binds the quartz crystals, and pigments, which not only provide vibrant color but also add depth and character to the final product. This thoughtfully composed blend ensures that quartz stone possesses both the enduring strength of natural stone and the creative versatility of human craftsmanship, resulting in a material that excels in both form and function.</p>
                            </div>
                            <div class="relative"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/quartz-hero-Mj5HDhQk.jpg" alt="Quartz Stone" class="rounded-lg shadow-2xl w-full">
                                <div class="absolute -bottom-4 -right-4 w-full h-full border-2 border-olive-500 rounded-lg -z-10"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-stone-100">
                <div class="ast-container">
                    <div class="transition-all duration-1000 opacity-100 translate-y-0">
                        <?php

                        set_query_var('products_category', 'Quartz');
                        set_query_var('style', 'style-3');
                        get_template_part('/template/products/custom-loop', 'products')

                        ?>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-white">
                <div class="ast-container">
                    <div class="max-w-5xl mx-auto">
                        <h2 class="font-serif text-4xl text-slate-800 text-center mb-12">About Quartz Stone Tiling</h2>
                        <div class="mb-16">
                            <h3 class="font-serif text-2xl text-slate-800 mb-6">Manufacturing Process</h3>
                            <div class="space-y-4 text-slate-600 leading-relaxed">
                                <p>The manufacturing process of quartz stone is a fascinating blend of art and science, resulting in surfaces that embody both beauty and strength. It begins with the careful selection of high-quality quartz crystals, known for their remarkable durability and natural elegance. These crystals are crushed into precise sizes to create the raw material for quartz slabs.</p>
                                <p>Next comes the meticulous mixing phase, where the quartz crystals are combined with resins and pigments. This step allows for a wide range of colors and patterns to be introduced, giving quartz its renowned aesthetic versatility. The precise ratios and thorough blending of these components are essential to achieve consistency and uniformity in the final product.</p>
                                <p>Once the mixture is perfected, it's poured into molds. These molds are specially designed to accommodate various slab sizes and thicknesses. During this stage, the material is carefully leveled, ensuring a flat and even surface. To eliminate any trapped air and create a dense, uniform structure, a vacuum and vibration process is employed. This crucial step guarantees the exceptional durability that quartz is known for.</p>
                                <p>After compression, the slabs are cured in a controlled environment. This allows the resins to harden and the material to solidify further, ensuring long-term stability and strength. The curing process is followed by precision polishing, where the surface is meticulously smoothed to a high shine. This final touch not only enhances the visual appeal of quartz but also contributes to its resistance against stains and everyday wear.</p>
                            </div>
                        </div>
                        <div class="mb-16 bg-stone-100 p-8 rounded-xl">
                            <h3 class="font-serif text-2xl text-slate-800 mb-6">Colors and Patterns</h3>
                            <p class="text-slate-600 leading-relaxed">Quartz tiles offer an extensive array of options when it comes to colors and patterns. You can choose from a diverse palette of hues, including timeless classics like white, gray, black, and gold. However, the beauty of quartz extends beyond its color spectrum. These tiles can be found in various captivating patterns, from solid, uniform surfaces to intricate designs adorned with delicate veining. For those who desire the elegance of natural stone without the maintenance, quartz tiles can even replicate the look of materials like marble, granite, or limestone. This versatility ensures that quartz tiles can seamlessly complement any design vision, from contemporary minimalism to classic opulence.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-slate-800 text-white">
                <div class="ast-container">
                    <div class="max-w-5xl mx-auto">
                        <h3 class="font-serif text-3xl text-center mb-12 text-white">Styles in Designs</h3>
                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div class="bg-white/10 p-6 rounded-xl backdrop-blur-sm">
                                <h4 class="font-semibold text-xl mb-4 text-olive-400">Modern</h4>
                                <p class="text-stone-300 text-sm mb-0">Quartz is a popular choice for modern designs due to its sleek and sophisticated look. In modern designs, quartz is often used in solid colors with a polished finish, or with minimal veining and patterns.</p>
                            </div>
                            <div class="bg-white/10 p-6 rounded-xl backdrop-blur-sm">
                                <h4 class="font-semibold text-xl mb-4 text-olive-400">Traditional</h4>
                                <p class="text-stone-300 text-sm mb-0">Quartz can also be used in traditional designs, where it can mimic the look of natural stone such as marble or granite. In traditional designs, quartz is often used in warm, neutral colors with subtle veining and patterns.</p>
                            </div>
                            <div class="bg-white/10 p-6 rounded-xl backdrop-blur-sm">
                                <h4 class="font-semibold text-xl mb-4 text-olive-400">Industrial</h4>
                                <p class="text-stone-300 text-sm mb-0">Quartz can be used in industrial designs to add a touch of modern sophistication. In industrial designs, quartz is often used in darker shades with a matte finish.</p>
                            </div>
                            <div class="bg-white/10 p-6 rounded-xl backdrop-blur-sm">
                                <h4 class="font-semibold text-xl mb-4 text-olive-400">Glamorous</h4>
                                <p class="text-stone-300 text-sm mb-0">Quartz can also be used to create a glamorous and luxurious look, particularly when used in bold colors or with metallic accents. In glamorous designs, quartz is often used with a high gloss finish and intricate patterns.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-white">
                <div class="ast-container">
                    <div class="max-w-4xl mx-auto">
                        <h3 class="font-serif text-3xl text-slate-800 text-center mb-8">Finishes</h3>
                        <p class="text-slate-600 leading-relaxed text-lg text-center">A polished finish for quartz is achieved through a meticulous manufacturing process that involves grinding down the surface of the quartz slab to a smooth, glossy, and reflective sheen. This finish enhances the natural luster of quartz, giving it a luxurious and sophisticated appearance. Polished quartz finds versatile applications, including countertops for kitchens and bathrooms, interior wall cladding, flooring in low-traffic areas, and stair treads for added luxury. Its advantages include an aesthetic appeal that adds sophistication to spaces, enhanced durability, low maintenance requirements, and hygienic properties due to its non-porous nature. This versatile finish complements various interior design styles and boasts longevity when properly maintained, making it a lasting investment in your space.</p>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-stone-100">
                <div class="ast-container">
                    <div class="max-w-4xl mx-auto">
                        <h3 class="font-serif text-3xl text-slate-800 text-center mb-12">Applications</h3>
                        <p class="text-slate-600 text-lg text-center mb-8">Quartz tiles can be used for a variety of applications, including:</p>
                        <div class="grid md:grid-cols-3 gap-8">
                            <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                                <div class="w-16 h-16 bg-olive-100 rounded-full flex items-center justify-center mx-auto mb-4"><span class="text-olive-600 text-2xl font-bold">▢</span></div>
                                <h4 class="font-semibold text-xl text-slate-800 mb-3">Flooring</h4>
                                <p class="text-slate-600 text-sm mb-0">Quartz tiles are highly durable and scratch-resistant, making them a popular choice for high-traffic areas like kitchens, bathrooms, and entryways.</p>
                            </div>
                            <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                                <div class="w-16 h-16 bg-olive-100 rounded-full flex items-center justify-center mx-auto mb-4"><span class="text-olive-600 text-2xl font-bold">▥</span></div>
                                <h4 class="font-semibold text-xl text-slate-800 mb-3">Walls</h4>
                                <p class="text-slate-600 text-sm mb-0">Quartz tiles can be used to create a statement wall in living areas, fireplaces walls or backsplash in a kitchen and bathroom.</p>
                            </div>
                            <div class="bg-white p-6 rounded-xl shadow-lg text-center">
                                <div class="w-16 h-16 bg-olive-100 rounded-full flex items-center justify-center mx-auto mb-4"><span class="text-olive-600 text-2xl font-bold">◰</span></div>
                                <h4 class="font-semibold text-xl text-slate-800 mb-3">Countertops</h4>
                                <p class="text-slate-600 text-sm mb-0">Quartz tiles can be used to create a stunning and functional countertop surface in a kitchen or bathroom.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-white">
                <div class="ast-container">
                    <div class="max-w-4xl mx-auto">
                        <h3 class="font-serif text-3xl text-slate-800 text-center mb-12">Advantages</h3>
                        <div class="grid md:grid-cols-3 gap-8">
                            <div class="border-l-4 border-olive-500 pl-6">
                                <h4 class="font-semibold text-xl text-slate-800 mb-3">Durability</h4>
                                <p class="text-slate-600">Quartz tiles are highly durable and resistant to scratches, chips, and cracks. They are also resistant to heat and moisture, making them ideal for use in kitchens and bathrooms.</p>
                            </div>
                            <div class="border-l-4 border-olive-500 pl-6">
                                <h4 class="font-semibold text-xl text-slate-800 mb-3">Aesthetics</h4>
                                <p class="text-slate-600">Quartz tiles have a high-end look and feel, and can be customized to fit any design aesthetic. They are available in a wide range of colors, patterns, and textures.</p>
                            </div>
                            <div class="border-l-4 border-olive-500 pl-6">
                                <h4 class="font-semibold text-xl text-slate-800 mb-3">Low Maintenance</h4>
                                <p class="text-slate-600">Quartz tiles are easy to clean and maintain, and require minimal upkeep. They can be cleaned with a simple soap and water solution.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-slate-800 text-white">
                <div class="ast-container">
                    <div class="max-w-5xl mx-auto">
                        <h3 class="font-serif text-3xl text-center mb-12 text-white">Installation Process</h3>
                        <p class="text-stone-300 text-lg text-center mb-12">The installation process of quartz stone typically involves several steps to ensure a proper and secure fit in your desired space.</p>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="flex items-start gap-4 bg-white/10 p-4 rounded-lg"><span class="flex-shrink-0 w-8 h-8 bg-olive-500 rounded-full flex items-center justify-center text-white font-bold text-sm">1</span>
                                <div>
                                    <h4 class="font-semibold text-olive-400 mb-1">Measurement and Template</h4>
                                    <p class="text-stone-300 text-sm mb-0">A professional installer will take precise measurements and create templates as guides for cutting the quartz slabs.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 bg-white/10 p-4 rounded-lg"><span class="flex-shrink-0 w-8 h-8 bg-olive-500 rounded-full flex items-center justify-center text-white font-bold text-sm">2</span>
                                <div>
                                    <h4 class="font-semibold text-olive-400 mb-1">Quartz Slab Selection</h4>
                                    <p class="text-stone-300 text-sm mb-0">Choose the quartz slabs that match your design preferences. The templates will help determine how the slabs are cut and arranged.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 bg-white/10 p-4 rounded-lg"><span class="flex-shrink-0 w-8 h-8 bg-olive-500 rounded-full flex items-center justify-center text-white font-bold text-sm">3</span>
                                <div>
                                    <h4 class="font-semibold text-olive-400 mb-1">Fabrication</h4>
                                    <p class="text-stone-300 text-sm mb-0">The selected quartz slabs are cut, shaped, and polished to match the measurements using specialized equipment.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 bg-white/10 p-4 rounded-lg"><span class="flex-shrink-0 w-8 h-8 bg-olive-500 rounded-full flex items-center justify-center text-white font-bold text-sm">4</span>
                                <div>
                                    <h4 class="font-semibold text-olive-400 mb-1">Preparing the Base</h4>
                                    <p class="text-stone-300 text-sm mb-0">The base cabinets or support structure must be prepared and leveled to support the weight of the quartz.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 bg-white/10 p-4 rounded-lg"><span class="flex-shrink-0 w-8 h-8 bg-olive-500 rounded-full flex items-center justify-center text-white font-bold text-sm">5</span>
                                <div>
                                    <h4 class="font-semibold text-olive-400 mb-1">Installation</h4>
                                    <p class="text-stone-300 text-sm mb-0">The quartz slabs are carefully placed onto the cabinets or support structure, ensuring they fit snugly and securely.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 bg-white/10 p-4 rounded-lg"><span class="flex-shrink-0 w-8 h-8 bg-olive-500 rounded-full flex items-center justify-center text-white font-bold text-sm">6</span>
                                <div>
                                    <h4 class="font-semibold text-olive-400 mb-1">Sink and Faucet Cutouts</h4>
                                    <p class="text-stone-300 text-sm mb-0">Cutouts are made in the quartz slab to accommodate fixtures using the templates and measurements.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 bg-white/10 p-4 rounded-lg"><span class="flex-shrink-0 w-8 h-8 bg-olive-500 rounded-full flex items-center justify-center text-white font-bold text-sm">7</span>
                                <div>
                                    <h4 class="font-semibold text-olive-400 mb-1">Seaming and Edge Detailing</h4>
                                    <p class="text-stone-300 text-sm mb-0">Seams between slabs are joined using a strong adhesive and color-matched epoxy, then polished smooth.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 bg-white/10 p-4 rounded-lg"><span class="flex-shrink-0 w-8 h-8 bg-olive-500 rounded-full flex items-center justify-center text-white font-bold text-sm">8</span>
                                <div>
                                    <h4 class="font-semibold text-olive-400 mb-1">Final Inspection</h4>
                                    <p class="text-stone-300 text-sm mb-0">Installers conduct a final inspection to ensure the countertops are level, securely attached, and meet specifications.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 bg-white/10 p-4 rounded-lg"><span class="flex-shrink-0 w-8 h-8 bg-olive-500 rounded-full flex items-center justify-center text-white font-bold text-sm">9</span>
                                <div>
                                    <h4 class="font-semibold text-olive-400 mb-1">Clean-Up</h4>
                                    <p class="text-stone-300 text-sm mb-0">Installers clean the quartz countertops, removing any residue or debris, and may apply a sealer.</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-4 bg-white/10 p-4 rounded-lg"><span class="flex-shrink-0 w-8 h-8 bg-olive-500 rounded-full flex items-center justify-center text-white font-bold text-sm">10</span>
                                <div>
                                    <h4 class="font-semibold text-olive-400 mb-1">Completion</h4>
                                    <p class="text-stone-300 text-sm mb-0">Your new quartz countertops are now ready for use. Enjoy your beautiful and functional surface!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-white">
                <div class="ast-container">
                    <div class="max-w-5xl mx-auto">
                        <h3 class="font-serif text-3xl text-slate-800 text-center mb-12">Maintenance</h3>
                        <p class="text-slate-600 text-lg text-center mb-12">Maintaining quartz stone surfaces is relatively simple, making them a popular choice for kitchens and bathrooms.</p>
                        <div class="grid md:grid-cols-3 gap-6">
                            <div class="bg-stone-100 p-6 rounded-xl">
                                <h4 class="font-semibold text-lg text-slate-800 mb-3">Daily Cleaning</h4>
                                <p class="text-slate-600 text-sm mb-0">Wipe down regularly with a soft cloth and warm, soapy water. Avoid abrasive pads or harsh chemicals.</p>
                            </div>
                            <div class="bg-stone-100 p-6 rounded-xl">
                                <h4 class="font-semibold text-lg text-slate-800 mb-3">Spill Cleanup</h4>
                                <p class="text-slate-600 text-sm mb-0">Clean spills promptly. For tough stains, gently scrape with a plastic putty knife or non-abrasive sponge.</p>
                            </div>
                            <div class="bg-stone-100 p-6 rounded-xl">
                                <h4 class="font-semibold text-lg text-slate-800 mb-3">Avoid High Heat</h4>
                                <p class="text-slate-600 text-sm mb-0">Use trivets or hot pads under pots and pans. Sudden temperature changes can cause thermal shock.</p>
                            </div>
                            <div class="bg-stone-100 p-6 rounded-xl">
                                <h4 class="font-semibold text-lg text-slate-800 mb-3">Preventing Scratches</h4>
                                <p class="text-slate-600 text-sm mb-0">Use cutting boards and avoid chopping directly on the surface. Be cautious with abrasive cleaning pads.</p>
                            </div>
                            <div class="bg-stone-100 p-6 rounded-xl">
                                <h4 class="font-semibold text-lg text-slate-800 mb-3">Sealing Not Required</h4>
                                <p class="text-slate-600 text-sm mb-0">Unlike natural stones, quartz does not require sealing. It's non-porous and resistant to staining.</p>
                            </div>
                            <div class="bg-stone-100 p-6 rounded-xl">
                                <h4 class="font-semibold text-lg text-slate-800 mb-3">Avoid Harsh Chemicals</h4>
                                <p class="text-slate-600 text-sm mb-0">Stay away from bleach, oven cleaner, and abrasive scouring pads that can damage the surface.</p>
                            </div>
                            <div class="bg-stone-100 p-6 rounded-xl">
                                <h4 class="font-semibold text-lg text-slate-800 mb-3">Regular Polishing</h4>
                                <p class="text-slate-600 text-sm mb-0">Use a quartz cleaner and polish to maintain shine and luster. These products are specifically designed for quartz.</p>
                            </div>
                            <div class="bg-stone-100 p-6 rounded-xl">
                                <h4 class="font-semibold text-lg text-slate-800 mb-3">Preventing Hard Water Spots</h4>
                                <p class="text-slate-600 text-sm mb-0">Dry the countertop after cleaning. For existing spots, use equal parts water and white vinegar.</p>
                            </div>
                            <div class="bg-stone-100 p-6 rounded-xl">
                                <h4 class="font-semibold text-lg text-slate-800 mb-3">Routine Inspection</h4>
                                <p class="text-slate-600 text-sm mb-0">Periodically inspect for any signs of damage. Address any chips or cracks promptly to prevent further damage.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-stone-100">
                <div class="ast-container">
                    <div class="transition-all ">
                        <div class="grid md:grid-cols-3 gap-8">
                            <div class="group relative overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/quartz-worktops-QiSJEMHB.jpg" alt="Quartz Worktops" class="w-full aspect-[4/3] object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/20 to-transparent"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                    <p class="font-semibold text-xl mb-0">Quartz Worktops</p>
                                </div>
                            </div>
                            <div class="group relative overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/quartz-backsplash-Z9bVSIXt.jpg" alt="Quartz Backsplash" class="w-full aspect-[4/3] object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/20 to-transparent"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                    <p class="font-semibold text-xl mb-0">Quartz Backsplash</p>
                                </div>
                            </div>
                            <div class="group relative overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/quartz-countertops-modern-C_m5lvYo.jpg" alt="Quartz Countertops" class="w-full aspect-[4/3] object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/20 to-transparent"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                                    <p class="font-semibold text-xl mb-0">Quartz Countertops</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
            set_query_var('category', 'Quartz');
            get_template_part('/template/components/sections/related', 'products');
            ?>
        </div>
    </main>
</div><!-- #primary -->


<?php get_footer(); ?>