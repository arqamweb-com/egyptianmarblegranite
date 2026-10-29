<?php /* Template Name: Water Jet */ ?>

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

            <section class="py-16 bg-background">
                <div class="ast-container">
                    <div class="max-w-4xl mx-auto text-center">
                        <p class="text-foreground/80 text-lg leading-relaxed mb-6">Waterjet designs are created by a waterjet cutter – a tool capable of slicing into marble and granite using a jet of water at high velocity and pressure, or a mixture of water and an abrasive substance could be used for operations such as cutting, shaping, carving and reaming.</p>
                        <p class="text-foreground/80 text-lg leading-relaxed mb-0">EMG employ the waterjet method where possible as it has the ability to cut without interfering with the material's inherent structure as there is no "heat-affected zone" meaning metals can be cut without harming or changing their intrinsic properties.</p>
                    </div>
                </div>
            </section>
            <section class="py-16 bg-stone-beige/10">
                <div class="container mx-auto px-4">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

                        <div class="overflow-hidden rounded-lg shadow-md transition-all duration-700" style="transition-delay: 0ms;">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/waterjet-1-hOTnP-mw.jpg" alt="Waterjet design 1" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="overflow-hidden rounded-lg shadow-md transition-all duration-700" style="transition-delay: 0ms;">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/waterjet-2-Bu0hVWb9.jpg" alt="Waterjet design 2" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="overflow-hidden rounded-lg shadow-md transition-all duration-700" style="transition-delay: 0ms;">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/waterjet-3-DWmgtC2u.jpg" alt="Waterjet design 3" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="overflow-hidden rounded-lg shadow-md transition-all duration-700" style="transition-delay: 0ms;">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/waterjet-4-DPym6tUj.jpg" alt="Waterjet design 4" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="overflow-hidden rounded-lg shadow-md transition-all duration-700" style="transition-delay: 0ms;">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/waterjet-5-CoL1et0N.jpg" alt="Waterjet design 5" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="overflow-hidden rounded-lg shadow-md transition-all duration-700" style="transition-delay: 0ms;">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/waterjet-6-Cm-NqRXg.jpg" alt="Waterjet design 6" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="overflow-hidden rounded-lg shadow-md transition-all duration-700" style="transition-delay: 0ms;">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/waterjet-7-B5O25j34.jpg" alt="Waterjet design 7" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="overflow-hidden rounded-lg shadow-md transition-all duration-700" style="transition-delay: 0ms;">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/waterjet-8-GpmlnrkO.jpg" alt="Waterjet design 8" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                        </div>


                    </div>
                </div>
            </section>
            <section class="py-16 bg-background">
                <div class="container mx-auto px-4">
                    <div class="max-w-5xl mx-auto text-center transition-all duration-700 opacity-100 translate-y-0">

                        <p class="text-lg text-muted-foreground leading-relaxed mb-6">
                            Accurate finishing is obtained using the water jet process by simply changing parts in the nozzle to adjust the width of the cut and type and size of the abrasive.
                        </p>

                        <p class="text-lg text-muted-foreground leading-relaxed mb-6">
                            Typical abrasive cuts are made with a width in the range of 0.04″ to 0.05″ (1.016 to 1.27 mm), but can be as narrow as 0.02″ (0.508 mm).
                        </p>

                        <p class="text-lg text-muted-foreground leading-relaxed mb-6">
                            Non-abrasive cuts are normally 0.007″ to 0.013″ (0.178 to 0.33 mm), but can be as small as 0.003″ (0.076 mm), which is approximately the size of a human hair.
                        </p>

                        <p class="text-lg text-muted-foreground leading-relaxed mb-6">
                            These small cutters create intricate detail in a wide range of applications.
                        </p>

                        <p class="text-lg font-semibold">
                            Choose from our special selection designed by Hazem Shoukry.
                        </p>

                    </div>
                </div>
            </section>


            <section class="py-20 bg-background">
                <div class="ast-container">

                    <h2 class="text-3xl md:text-4xl font-serif text-foreground mb-12 text-center transition-all duration-700 opacity-100 translate-y-0">
                        Related Products To Egyptian Limestone
                    </h2>

                    <?php
                    set_query_var('products_category', 'Egyptian Limestone');
                    set_query_var('per_paged', 4);
                    set_query_var('grid_classes', 'md:grid-cols-4');
                    set_query_var('order', 'rand');
                    set_query_var('style', 'style-2')
                    ?>


                    <?php get_template_part('template/products/custom-loop-products'); ?>
                </div>
            </section>




        </div>
    </main>
</div><!-- #primary -->


<?php get_footer(); ?>