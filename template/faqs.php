<?php /* Template Name: FAQs */ ?>

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
            <section class="py-8 bg-background">
                <div class="ast-container">
                    <p class="text-lg text-muted-foreground text-center max-w-4xl mx-auto transition-all duration-700 opacity-100 translate-y-0">Here are the most asked questions and FAQ about natural stones, if you have other question don't hesitate to <a class="text-stone-olive hover:underline font-semibold" href="<?php echo ($contact_page = get_page_by_path('contact-us')) ? get_permalink($contact_page->ID) : '#'; ?>">Contact Us</a>.</p>
                </div>
            </section>
            <section class="py-16 bg-stone-beige/10">
                <div class="ast-container">
                    <div class="max-w-5xl mx-auto transition-all duration-700 opacity-100 translate-y-0">
                        <h2 class="font-serif text-3xl md:text-4xl text-stone-dark mb-8 text-center">Why Choose Natural Stone Flooring and Tiles?</h2>
                        <div class="space-y-6 text-lg text-muted-foreground leading-relaxed">
                            <p>Natural Stone is beautiful and will add a stunning feature to any home. Stone is the only material that improves with age, it lasts a lifetime and its natural variation adds character. It is hardwearing, very practical and gains its own patina over time. It is worth investing in natural stone as it lasts for years and will enhance the value of your home. It is easy to clean, practical yet stylish.</p>
                            <p>The price of natural stone has decreased in recent years making it a luxurious yet affordable floor covering. Natural stone flooring comes in many styles and can suit both a traditional and contemporary setting. It is a very adaptable material that is at home in a country cottage as well as an urban townhouse or apartment. Ideal for hallways, kitchens, dining rooms, conservatories and bathrooms and increasingly being used in living areas and bedrooms.</p>
                            <p>Stone goes well with other natural materials such as wood and works particularly well with under floor heating. Natural stone flooring is unique as every tile is a one off and this look cannot be recreated by man-made material. Fossils, shells, crystal veins and tonal variation are all marks of authenticity.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-16 bg-background">
                <div class="ast-container">
                    <h2 class="font-serif text-3xl md:text-4xl text-stone-dark mb-12 text-center transition-all duration-700 translate-y-8">Frequently Asked Questions</h2>
                    <div class="max-w-4xl mx-auto transition-all duration-700 translate-y-8">

                        <?php
                        set_query_var('faqs_category', 'faqs');
                        get_template_part('/template/faqs/custom-loop', 'faqs');
                        ?>

                    </div>
                </div>
            </section>
        </div>
    </main>

</div><!-- #primary -->



<?php get_footer(); ?>