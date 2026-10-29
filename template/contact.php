<?php /* Template Name: Contact Us */ ?>

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
            <section class="py-16 bg-background">
                <div class="ast-container">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
                        <div class="transition-all duration-700 opacity-100 translate-x-0">
                            <div class="bg-card rounded-xl shadow-lg p-8 border border-solid border-stone-beige/30">
                                <h2 class="font-serif text-2xl md:text-3xl text-stone-dark mb-8">Send Us a Message</h2>
                                <form class="space-y-6">
                                    <div><label class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-stone-dark font-medium" for="name">Name <span class="text-red-500">*</span></label><input type="text" class="flex h-10 w-full rounded-md border bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm mt-2 border-stone-beige" id="name" name="name" placeholder="Your full name" maxlength="100" value=""></div>
                                    <div><label class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-stone-dark font-medium" for="email">Email <span class="text-red-500">*</span></label><input type="email" class="flex h-10 w-full rounded-md border bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm mt-2 border-stone-beige" id="email" name="email" placeholder="your.email@example.com" maxlength="255" value=""></div>
                                    <div><label class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-stone-dark font-medium" for="tel">Phone <span class="text-red-500">*</span></label><input type="tel" class="flex h-10 w-full rounded-md border bg-background px-3 py-2 text-base ring-offset-background file:border-0 file:bg-transparent file:text-sm file:font-medium file:text-foreground placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 md:text-sm mt-2 border-stone-beige" id="tel" name="tel" placeholder="Your phone number" maxlength="20" value=""></div>
                                    <div><label class="text-sm leading-none peer-disabled:cursor-not-allowed peer-disabled:opacity-70 text-stone-dark font-medium" for="message">Message <span class="text-red-500">*</span></label><textarea class="flex min-h-[80px] w-full rounded-md border bg-background px-3 py-2 text-sm ring-offset-background placeholder:text-muted-foreground focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:cursor-not-allowed disabled:opacity-50 mt-2 resize-none border-stone-beige" id="message" name="message" placeholder="How can we help you?" rows="5" maxlength="2000"></textarea></div><button class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-10 px-4 w-full bg-stone-olive hover:bg-stone-olive/90 text-white font-semibold py-6" type="submit">Send Message</button>
                                </form>
                            </div>
                        </div>
                        <div class="transition-all duration-700 opacity-100 translate-x-0">
                            <div class="bg-stone-beige/20 rounded-xl p-8 h-full">
                                <h2 class="font-serif text-2xl md:text-3xl text-stone-dark mb-8">Contact Egyptian Marble and Granite</h2>
                                <div class="inline-flex items-center gap-2 bg-stone-olive/10 text-stone-olive px-4 py-2 rounded-full mb-8"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building2 w-5 h-5">
                                        <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
                                        <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
                                        <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
                                        <path d="M10 6h4"></path>
                                        <path d="M10 10h4"></path>
                                        <path d="M10 14h4"></path>
                                        <path d="M10 18h4"></path>
                                    </svg><span class="font-semibold">Factories &amp; Showrooms</span></div>
                                <div class="mb-10">
                                    <h3 class="font-semibold text-xl text-stone-dark mb-6 flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone w-5 h-5 text-stone-olive">
                                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                        </svg>Contact Our Office</h3>
                                    <div class="space-y-4 text-muted-foreground">
                                        <p class="mb-0"><span class="font-medium text-stone-dark">Landline:</span> <a href="tel:+20223055069" class="hover:text-stone-olive transition-colors">002-02 230 55069</a></p>
                                        <p class="mb-0"><span class="font-medium text-stone-dark">Mobile:</span> <a href="tel:+201000390999" class="hover:text-stone-olive transition-colors">002-01000390999</a></p>
                                        <p class="flex items-start gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail w-5 h-5 text-stone-olive mt-0.5 flex-shrink-0">
                                                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                            </svg><!--email_off--><a href="mailto:sales@egyptianmarblegranite.com" class="hover:text-stone-olive transition-colors break-all">sales@egyptianmarblegranite.com</a><!--/email_off--></p>
                                    </div>
                                </div>
                                <?php if (apply_filters('emg_show_address', false)) : ?>
                                <div class="mb-10">
                                    <h3 class="font-semibold text-xl text-stone-dark mb-4 flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin w-5 h-5 text-stone-olive">
                                            <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg>Egypt Head Office</h3>
                                    <p class="text-muted-foreground leading-relaxed">17 El Shaheed Ahmed Zaki St<br>Behind Obour Bldgs., 9th Floor, Office 92<br>M Nasser, Cairo, Egypt</p>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-xl text-stone-dark mb-4 flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building2 w-5 h-5 text-stone-olive">
                                            <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z"></path>
                                            <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2"></path>
                                            <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2"></path>
                                            <path d="M10 6h4"></path>
                                            <path d="M10 10h4"></path>
                                            <path d="M10 14h4"></path>
                                            <path d="M10 18h4"></path>
                                        </svg>Contact Our Factories</h3>
                                    <div class="text-muted-foreground leading-relaxed">
                                        <p class="font-medium text-stone-dark mb-2">Marble Industrial Zone</p>
                                        <p>Shak El Thoban,<br>El Autostorads, El Maadi, Egypt</p>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

</div><!-- #primary -->


<?php get_footer(); ?>