<?php /* Template Name: Free Samples */ ?>

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


    <div class="min-h-screen bg-background">
        <?php get_template_part('/template/components/headers/header', 'page'); ?>

        <section class="py-16 bg-alt">
            <div class="container mx-auto px-4">
                <h2 class="text-3xl font-serif text-foreground text-center mb-12">Why Request Samples?</h2>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="bg-background p-6 rounded-xl shadow-sm text-center">
                        <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-package w-7 h-7 text-primary">
                                <path d="M11 21.73a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73z"></path>
                                <path d="M12 22V12"></path>
                                <path d="m3.3 7 7.703 4.734a2 2 0 0 0 1.994 0L20.7 7"></path>
                                <path d="m7.5 4.27 9 5.15"></path>
                            </svg></div>
                        <h3 class="text-lg font-semibold text-foreground mb-2">Physical Inspection</h3>
                        <p class="text-muted-foreground text-sm">See and feel the actual stone texture, color variations, and quality before ordering.</p>
                    </div>
                    <div class="bg-background p-6 rounded-xl shadow-sm text-center">
                        <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check w-7 h-7 text-primary">
                                <path d="M20 6 9 17l-5-5"></path>
                            </svg></div>
                        <h3 class="text-lg font-semibold text-foreground mb-2">Color Matching</h3>
                        <p class="text-muted-foreground text-sm">Ensure the stone matches your design vision and existing materials perfectly.</p>
                    </div>
                    <div class="bg-background p-6 rounded-xl shadow-sm text-center">
                        <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe w-7 h-7 text-primary">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20"></path>
                                <path d="M2 12h20"></path>
                            </svg></div>
                        <h3 class="text-lg font-semibold text-foreground mb-2">Worldwide Shipping</h3>
                        <p class="text-muted-foreground text-sm">We ship free samples to clients worldwide, no matter your location.</p>
                    </div>
                    <div class="bg-background p-6 rounded-xl shadow-sm text-center">
                        <div class="w-14 h-14 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-truck w-7 h-7 text-primary">
                                <path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"></path>
                                <path d="M15 18H9"></path>
                                <path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"></path>
                                <circle cx="17" cy="18" r="2"></circle>
                                <circle cx="7" cy="18" r="2"></circle>
                            </svg></div>
                        <h3 class="text-lg font-semibold text-foreground mb-2">Fast Delivery</h3>
                        <p class="text-muted-foreground text-sm">Samples are typically dispatched within 48 hours of request confirmation.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-20">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-serif text-foreground mb-4">Request Your Samples</h2>
                        <p class="text-muted-foreground">Fill in your details and we'll send you complimentary stone samples.</p>
                    </div>


                    <div id="contact" class="bg-alt p-8 rounded-2xl">
                        <h3 class="text-xl font-semibold text-foreground mb-6">Shipping Information</h3>
                        <style>
                            @media (min-width: 768px) {
                                #contact form .cf7-row {
                                    display: flex;
                                    gap: 1rem;
                                    margin-bottom: 0;
                                }

                                #contact form .cf7-row p {
                                    flex: 1;
                                }
                            }
                        </style>

                        <?php echo do_shortcode('[contact-form-7 id="6b5dc23" title="Request Free Samples"]'); ?>
                        <p class="text-sm text-muted-foreground mt-4 mb-0">By submitting, you agree to our privacy policy. We'll never share your information.</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div><!-- #primary -->


<?php get_footer(); ?>