<?php /* Template Name: Quote */ ?>

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

            <section class="py-16 bg-stone-beige/10">
                <div class="ast-container">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                        <div class="text-center transition-all duration-700 translate-y-8">
                            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-stone-olive/10 mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-text w-8 h-8 text-stone-olive">
                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                    <path d="M10 9H8"></path>
                                    <path d="M16 13H8"></path>
                                    <path d="M16 17H8"></path>
                                </svg></div>
                            <h3 class="font-semibold text-lg text-stone-dark mb-2">Detailed Quotations</h3>
                            <p class="text-muted-foreground text-sm mb-0">Receive comprehensive quotes with pricing breakdown for materials, fabrication, and delivery.</p>
                        </div>
                        <div class="text-center transition-all duration-700 translate-y-8">
                            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-stone-olive/10 mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock w-8 h-8 text-stone-olive">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg></div>
                            <h3 class="font-semibold text-lg text-stone-dark mb-2">Quick Response</h3>
                            <p class="text-muted-foreground text-sm mb-0">Our team responds to quote requests within 24-48 business hours.</p>
                        </div>
                        <div class="text-center transition-all duration-700 translate-y-8">
                            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-stone-olive/10 mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield w-8 h-8 text-stone-olive">
                                    <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                                </svg></div>
                            <h3 class="font-semibold text-lg text-stone-dark mb-2">Quality Guaranteed</h3>
                            <p class="text-muted-foreground text-sm mb-0">All our products come with quality assurance and meet international standards.</p>
                        </div>
                        <div class="text-center transition-all duration-700 translate-y-8">
                            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-stone-olive/10 mb-4"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-truck w-8 h-8 text-stone-olive">
                                    <path d="M14 18V6a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2v11a1 1 0 0 0 1 1h2"></path>
                                    <path d="M15 18H9"></path>
                                    <path d="M19 18h2a1 1 0 0 0 1-1v-3.65a1 1 0 0 0-.22-.624l-3.48-4.35A1 1 0 0 0 17.52 8H14"></path>
                                    <circle cx="17" cy="18" r="2"></circle>
                                    <circle cx="7" cy="18" r="2"></circle>
                                </svg></div>
                            <h3 class="font-semibold text-lg text-stone-dark mb-2">Worldwide Shipping</h3>
                            <p class="text-muted-foreground text-sm mb-0">We export to markets worldwide with reliable shipping partners.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-16 bg-background">
                <div class="ast-container">
                    <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 max-w-6xl mx-auto">
                        <div class="lg:col-span-2 transition-all duration-700 -translate-x-8">
                            <div id="contact" class="bg-card rounded-xl shadow-lg p-8 pb-0 border border-solid border-stone-beige/30">
                                <h2 class="font-serif text-2xl md:text-3xl text-stone-dark mb-8">Request Your Free Quote</h2>

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

                                <?php echo do_shortcode('[contact-form-7 id="bec04a8" title="Get a Quote"]'); ?>
                            </div>
                        </div>
                        <div class="transition-all duration-700 translate-x-8">
                            <div class="bg-stone-beige/20 rounded-xl p-8 sticky top-24">
                                <h3 class="font-serif text-xl text-stone-dark mb-6">What to Include in Your Request</h3>
                                <ul class="space-y-4 text-muted-foreground">
                                    <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-stone-olive/20 text-stone-olive flex items-center justify-center text-sm font-semibold flex-shrink-0">1</span><span>Type of stone and finish you prefer</span></li>
                                    <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-stone-olive/20 text-stone-olive flex items-center justify-center text-sm font-semibold flex-shrink-0">2</span><span>Approximate quantity or area measurements</span></li>
                                    <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-stone-olive/20 text-stone-olive flex items-center justify-center text-sm font-semibold flex-shrink-0">3</span><span>Project timeline and delivery location</span></li>
                                    <li class="flex items-start gap-3"><span class="w-6 h-6 rounded-full bg-stone-olive/20 text-stone-olive flex items-center justify-center text-sm font-semibold flex-shrink-0">4</span><span>Any special requirements or customizations</span></li>
                                </ul>
                                <div class="mt-8 pt-8 border-t border-stone-beige" style="border-top-style: solid;">
                                    <h3 class="font-serif text-xl text-stone-dark mb-4">Need Help?</h3>
                                    <p class="text-muted-foreground text-sm mb-4">Our stone experts are ready to assist you in selecting the perfect material for your project.</p>
                                    <p class="text-stone-olive font-semibold">Call us: 002-01000390999</p>
                                    <p class="text-muted-foreground text-sm mt-2">Email: sales@egyptianmarblegranite.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

</div><!-- #primary -->


<?php get_footer(); ?>