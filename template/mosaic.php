<?php /* Template Name: Mosaic */ ?>

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
                        <h2 class="font-serif text-4xl md:text-5xl text-slate-800 text-center mb-12">Stone Mosaics</h2>
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <p class="text-slate-600 leading-relaxed text-lg">Stone mosaics are exquisite works of art created by arranging small, individual stone pieces into intricate patterns or designs. They are not only a technique of decorative art but also hold significance in interior decoration and cultural contexts, such as in cathedrals and historical sites. They utilize a variety of natural or engineered stones, including Marble, Granite, and Limestone, to craft these intricate and visually captivating compositions. The process of creating stone mosaics involves meticulous craftsmanship, where each stone piece is carefully selected and placed to create a harmonious and striking arrangement.</p>
                                <p class="text-slate-600 leading-relaxed text-lg">These mosaics can be found in various architectural applications, including walls, floors, murals, and even furniture, adding a touch of timeless beauty and sophistication to any space. The use of different stone types allows for a diverse color palette and texture variations, enabling artists and designers to create unique and captivating designs that reflect both artistic expression and the inherent beauty of the natural or engineered stones being used. Whether adorning the floors of ancient cathedrals or adding an artistic statement to modern interiors, stone mosaics showcase the artistry, craftsmanship, and enduring allure of this ancient decorative technique.</p>
                            </div>
                            <div class="relative"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/mosaic-hero-BAR_5a-f.jpg" alt="Stone Mosaics" class="rounded-lg shadow-2xl w-full">
                                <div class="absolute -bottom-4 -right-4 w-full h-full border-2 border-olive-500 rounded-lg -z-10"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-stone-100">
                <div class="ast-container">
                    <div class="max-w-4xl mx-auto">
                        <h2 class="font-serif text-4xl text-slate-800 text-center mb-12">About Stone Mosaics</h2>
                        <div class="bg-white p-8 rounded-xl shadow-lg">
                            <h3 class="font-serif text-2xl text-slate-800 mb-6">Types of Stone Mosaics:</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start"><span class="text-olive-600 font-bold mr-3">•</span>
                                    <div><span class="font-semibold text-slate-800">Marble Mosaics:</span><span class="text-slate-600"> They often feature the timeless beauty of marble, showcasing its natural veining and color variations. Marble is popular for their elegance and sophistication.</span></div>
                                </li>
                                <li class="flex items-start"><span class="text-olive-600 font-bold mr-3">•</span>
                                    <div><span class="font-semibold text-slate-800">Granite Mosaics:</span><span class="text-slate-600"> They are known for their durability and resistance to wear and tear. They are often used in high-traffic areas.</span></div>
                                </li>
                                <li class="flex items-start"><span class="text-olive-600 font-bold mr-3">•</span>
                                    <div><span class="font-semibold text-slate-800">Limestone Mosaics:</span><span class="text-slate-600"> They have a unique, rustic appearance with subtle color variations. They are well-suited for creating a warm and inviting atmosphere.</span></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-white">
                <div class="ast-container">
                    <div class="transition-all ">
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                            <div class="group relative overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/rondon-sunny-BIMwHPPY.jpg" alt="Rondon Sunny Tiles" class="w-full aspect-square object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                    <p class="font-medium text-sm text-center mb-0">Rondon Sunny Tiles</p>
                                </div>
                            </div>
                            <div class="group relative overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/honed-tumbled-galala-CB7b3j42.jpg" alt="Honed Tumbled Galala Tiles" class="w-full aspect-square object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                    <p class="font-medium text-sm text-center mb-0">Honed Tumbled Galala Tiles</p>
                                </div>
                            </div>
                            <div class="group relative overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/honed-galala-BhxN9HtU.jpg" alt="Honed Galala Tiles" class="w-full aspect-square object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                    <p class="font-medium text-sm text-center mb-0">Honed Galala Tiles</p>
                                </div>
                            </div>
                            <div class="group relative overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/diamond-golden-D0o7gceW.jpg" alt="Diamond Golden Tiles" class="w-full aspect-square object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                    <p class="font-medium text-sm text-center mb-0">Diamond Golden Tiles</p>
                                </div>
                            </div>
                            <div class="group relative overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/galala-tumbled-hXsvYHO4.jpg" alt="Galala Tumbled Tiles" class="w-full aspect-square object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                    <p class="font-medium text-sm text-center mb-0">Galala Tumbled Tiles</p>
                                </div>
                            </div>
                            <div class="group relative overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/sunny-tumbled-DBOIyupp.jpg" alt="Sunny Tumbled Tiles" class="w-full aspect-square object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                    <p class="font-medium text-sm text-center mb-0">Sunny Tumbled Tiles</p>
                                </div>
                            </div>
                            <div class="group relative overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/khatmia-polished-CrK8HifF.jpg" alt="Khatmia Polished Tiles" class="w-full aspect-square object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                    <p class="font-medium text-sm text-center mb-0">Khatmia Polished Tiles</p>
                                </div>
                            </div>
                            <div class="group relative overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/melia-tumbled-DUkawbQh.jpg" alt="Melia Tumbled Tiles" class="w-full aspect-square object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                    <p class="font-medium text-sm text-center mb-0">Melia Tumbled Tiles</p>
                                </div>
                            </div>
                            <div class="group relative overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/tumbled-engraved-az1vFNVj.jpg" alt="Tumbled Engraved Tiles" class="w-full aspect-square object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                    <p class="font-medium text-sm text-center mb-0">Tumbled Engraved Tiles</p>
                                </div>
                            </div>
                            <div class="group relative overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/galala-golden-BqcyVZlZ.jpg" alt="Galala Tumbled Golden Tiles" class="w-full aspect-square object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                    <p class="font-medium text-sm text-center mb-0">Galala Tumbled Golden Tiles</p>
                                </div>
                            </div>
                            <div class="group relative overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/golden-tumbled-washed-C6jFdbxn.jpg" alt="Golden Tumbled Washed Tiles" class="w-full aspect-square object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                    <p class="font-medium text-sm text-center mb-0">Golden Tumbled Washed Tiles</p>
                                </div>
                            </div>
                            <div class="group relative overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/golden-melia-galala-Cr9LfkTZ.jpg" alt="Golden-Melia Browen-Galala Tiles" class="w-full aspect-square object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                    <p class="font-medium text-sm text-center mb-0">Golden-Melia Browen-Galala Tiles</p>
                                </div>
                            </div>
                            <div class="group relative overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/diamond-tumbled-HmcBg4MF.jpg" alt="Diamond Tumbled Tiles" class="w-full aspect-square object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                    <p class="font-medium text-sm text-center mb-0">Diamond Tumbled Tiles</p>
                                </div>
                            </div>
                            <div class="group relative overflow-hidden rounded-lg shadow-lg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/galala-tumbled-honed-ufjrOIY5.jpg" alt="Galala Tumbled Honed Tiles" class="w-full aspect-square object-cover transition-transform duration-500 group-hover:scale-110">
                                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                    <p class="font-medium text-sm text-center mb-0">Galala Tumbled Honed Tiles</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-slate-800 text-white">
                <div class="ast-container">
                    <div class="max-w-4xl mx-auto">
                        <h2 class="font-serif text-4xl text-center mb-12 text-white">Why Use Stone Mosaics?</h2>
                        <div class="grid md:grid-cols-3 gap-8">
                            <div class="bg-white/10 p-6 rounded-xl backdrop-blur-sm">
                                <h3 class="font-semibold text-xl mb-4 text-olive-400">Aesthetic Appeal</h3>
                                <p class="text-stone-300">They add a touch of artistry and elegance to any space. They can be customized to suit various design styles, from classic to contemporary.</p>
                            </div>
                            <div class="bg-white/10 p-6 rounded-xl backdrop-blur-sm">
                                <h3 class="font-semibold text-xl mb-4 text-olive-400">Durability</h3>
                                <p class="text-stone-300">Stone is a durable material, making stone mosaics suitable for both indoor and outdoor applications. They can withstand moisture, wear, and temperature fluctuations.</p>
                            </div>
                            <div class="bg-white/10 p-6 rounded-xl backdrop-blur-sm">
                                <h3 class="font-semibold text-xl mb-4 text-olive-400">Versatility</h3>
                                <p class="text-stone-300">They can be used in a wide range of applications, from flooring and walls to backsplashes, accent pieces, and even art installations.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-white">
                <div class="ast-container">
                    <div class="max-w-4xl mx-auto">
                        <h2 class="font-serif text-4xl text-slate-800 text-center mb-12">Advantages of Stone Mosaics</h2>
                        <div class="grid md:grid-cols-3 gap-8">
                            <div class="text-center p-6 border border-solid border-stone-200 rounded-xl hover:shadow-lg transition-shadow">
                                <div class="w-16 h-16 bg-olive-100 rounded-full flex items-center justify-center mx-auto mb-4"><span class="text-olive-600 text-2xl font-bold">✦</span></div>
                                <h3 class="font-semibold text-xl mb-3 text-slate-800">Beauty</h3>
                                <p class="text-slate-600">They offer a stunning visual appeal, with the natural patterns and colors of the stone creating a unique and captivating look.</p>
                            </div>
                            <div class="text-center p-6 border border-solid border-stone-200 rounded-xl hover:shadow-lg transition-shadow">
                                <div class="w-16 h-16 bg-olive-100 rounded-full flex items-center justify-center mx-auto mb-4"><span class="text-olive-600 text-2xl font-bold">◆</span></div>
                                <h3 class="font-semibold text-xl mb-3 text-slate-800">Durability</h3>
                                <p class="text-slate-600">Stone is resistant to wear, making mosaics suitable for high-traffic areas.</p>
                            </div>
                            <div class="text-center p-6 border border-solid border-stone-200 rounded-xl hover:shadow-lg transition-shadow">
                                <div class="w-16 h-16 bg-olive-100 rounded-full flex items-center justify-center mx-auto mb-4"><span class="text-olive-600 text-2xl font-bold">●</span></div>
                                <h3 class="font-semibold text-xl mb-3 text-slate-800">Easy Maintenance</h3>
                                <p class="text-slate-600">They are relatively easy to clean and maintain, usually requiring only regular cleaning with a mild, pH-balanced cleaner.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-stone-100">
                <div class="ast-container">
                    <div class="max-w-4xl mx-auto">
                        <h2 class="font-serif text-4xl text-slate-800 text-center mb-12">Applications of Mosaics</h2>
                        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-shadow">
                                <h3 class="font-semibold text-lg text-slate-800 mb-3">Bathroom and Kitchen Backsplashes</h3>
                                <p class="text-slate-600 text-sm">They are a popular choice for adding visual interest and personality to backsplashes.</p>
                            </div>
                            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-shadow">
                                <h3 class="font-semibold text-lg text-slate-800 mb-3">Flooring</h3>
                                <p class="text-slate-600 text-sm">They can be used to create stunning and durable floor designs.</p>
                            </div>
                            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-shadow">
                                <h3 class="font-semibold text-lg text-slate-800 mb-3">Walls</h3>
                                <p class="text-slate-600 text-sm">They can serve as wall accents or cover entire walls, adding texture and style.</p>
                            </div>
                            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-shadow">
                                <h3 class="font-semibold text-lg text-slate-800 mb-3">Pool Areas</h3>
                                <p class="text-slate-600 text-sm">They are often used in pool areas due to their slip-resistant properties and resistance to pool chemicals.</p>
                            </div>
                            <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-shadow">
                                <h3 class="font-semibold text-lg text-slate-800 mb-3">Art Installations</h3>
                                <p class="text-slate-600 text-sm">They can be used to create intricate and eye-catching art installations.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-white">
                <div class="ast-container">
                    <div class="max-w-4xl mx-auto">
                        <h2 class="font-serif text-4xl text-slate-800 text-center mb-12">Finishes for Stone Mosaics</h2>
                        <p class="text-slate-600 text-lg text-center max-w-3xl mx-auto">Common finishes for stone mosaics include <span class="font-semibold text-slate-800">polished</span> (glossy and reflective), <span class="font-semibold text-slate-800">honed</span> (smooth with a matte finish), <span class="font-semibold text-slate-800">tumbled</span> (textured and weathered), and <span class="font-semibold text-slate-800">split face</span> (rough and natural).</p>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-slate-800 text-white">
                <div class="ast-container">
                    <div class="max-w-5xl mx-auto">
                        <h2 class="font-serif text-4xl text-center mb-12 text-white">Installation Methods</h2>
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="bg-white/10 p-6 rounded-xl backdrop-blur-sm">
                                <h3 class="font-semibold text-lg text-olive-400 mb-3">Direct Method (Tesserae Method)</h3>
                                <p class="text-stone-300 text-sm mb-0">In this traditional method, individual stone pieces, called tesserae, are directly applied to a surface or substrate. The process involves gluing each tesserae individually to create the desired design. This method is often used for small projects and intricate designs, such as tabletops or wall art.</p>
                            </div>
                            <div class="bg-white/10 p-6 rounded-xl backdrop-blur-sm">
                                <h3 class="font-semibold text-lg text-olive-400 mb-3">Indirect Method (Reverse or Double Reverse Method)</h3>
                                <p class="text-stone-300 text-sm mb-0">The indirect method involves creating the design on a temporary surface, such as adhesive paper or mesh. Tesserae are arranged and glued onto this surface to form the design. Once the small tiles are complete and the adhesive has dried, it is carefully removed from the temporary surface and applied to the final substrate.</p>
                            </div>
                            <div class="bg-white/10 p-6 rounded-xl backdrop-blur-sm">
                                <h3 class="font-semibold text-lg text-olive-400 mb-3">Paper Face Mounting</h3>
                                <p class="text-stone-300 text-sm mb-0">In this method, tesserae are attached to a sheet of adhesive paper with the design marked on it. After the design is complete, the entire mosaic is mounted on the substrate. The adhesive paper is later soaked and removed, leaving the tesserae adhered to the surface. This method is commonly used for intricate designs and is especially helpful for curved surfaces.</p>
                            </div>
                            <div class="bg-white/10 p-6 rounded-xl backdrop-blur-sm">
                                <h3 class="font-semibold text-lg text-olive-400 mb-3">Mesh-Mounted Method</h3>
                                <p class="text-stone-300 text-sm mb-0">This method involves mounting tesserae onto a mesh backing with adhesive. The tesserae are arranged on the mesh, and once the adhesive dries, the mosaic is ready for installation. Mesh-mounted mosaics are often used for easy installation of larger projects, such as wall murals and backsplashes.</p>
                            </div>
                            <div class="bg-white/10 p-6 rounded-xl backdrop-blur-sm">
                                <h3 class="font-semibold text-lg text-olive-400 mb-3">Tile Sheets</h3>
                                <p class="text-stone-300 text-sm mb-0">Some stone mosaics come pre-arranged on sheets or tiles. These sheets consist of small stone pieces adhered to a backing material, such as fiberglass or mesh. Tile sheets are designed to simplify installation, as they allow for multiple tesserae to be applied simultaneously. They are commonly used for backsplashes, shower walls, and floor accents.</p>
                            </div>
                            <div class="bg-white/10 p-6 rounded-xl backdrop-blur-sm">
                                <h3 class="font-semibold text-lg text-olive-400 mb-3">Waterjet Cutting</h3>
                                <p class="text-stone-300 text-sm mb-0">Advanced technology, like waterjet cutting machines, can precisely cut stone pieces into intricate shapes. These cut pieces can then be assembled into mosaic designs. Waterjet cutting allows for highly detailed and custom mosaics.</p>
                            </div>
                            <div class="bg-white/10 p-6 rounded-xl backdrop-blur-sm">
                                <h3 class="font-semibold text-lg text-olive-400 mb-3">Hand-Cut Method</h3>
                                <p class="text-stone-300 text-sm mb-0">In traditional craftsmanship, artisans may hand-cut stone pieces using specialized tools to create unique tesserae for mosaics. This method allows for a high degree of customization and artistry.</p>
                            </div>
                        </div>
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