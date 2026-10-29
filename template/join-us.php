<?php /* Template Name: Join Us */ ?>

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

    <main>
        <!-- Advantages Section -->
        <section class="section-padding bg-background">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="interactive-card bg-card p-8 rounded-xl text-center">
                            <div class="w-16 h-16 mx-auto mb-6 bg-primary/10 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users w-8 h-8 text-primary" data-lov-id="src/pages/JoinUs.tsx:51:24" data-lov-name="IconComponent" data-component-path="src/pages/JoinUs.tsx" data-component-line="51" data-component-file="JoinUs.tsx" data-component-name="IconComponent" data-component-content="%7B%22className%22%3A%22w-8%20h-8%20text-primary%22%7D">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-4">Trusted by Global Leaders</h3>
                            <p class="text-muted-foreground leading-relaxed mb-0">We're the regional partner of choice for the world's top laundry system brand giving you the opportunity to work on high-impact projects with leading technologies and global standards.</p>
                        </div>
                        <div class="interactive-card bg-card p-8 rounded-xl text-center">
                            <div class="w-16 h-16 mx-auto mb-6 bg-primary/10 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-target w-8 h-8 text-primary" data-lov-id="src/pages/JoinUs.tsx:51:24" data-lov-name="IconComponent" data-component-path="src/pages/JoinUs.tsx" data-component-line="51" data-component-file="JoinUs.tsx" data-component-name="IconComponent" data-component-content="%7B%22className%22%3A%22w-8%20h-8%20text-primary%22%7D">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <circle cx="12" cy="12" r="6"></circle>
                                    <circle cx="12" cy="12" r="2"></circle>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-4">Purpose-Driven Culture</h3>
                            <p class="text-muted-foreground leading-relaxed mb-0">Join a passionate team that believes in making a difference across industries. We solve real-world challenges together with curiosity, innovation, and pride in what we build.</p>
                        </div>
                        <div class="interactive-card bg-card p-8 rounded-xl text-center">
                            <div class="w-16 h-16 mx-auto mb-6 bg-primary/10 rounded-full flex items-center justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up w-8 h-8 text-primary" data-lov-id="src/pages/JoinUs.tsx:51:24" data-lov-name="IconComponent" data-component-path="src/pages/JoinUs.tsx" data-component-line="51" data-component-file="JoinUs.tsx" data-component-name="IconComponent" data-component-content="%7B%22className%22%3A%22w-8%20h-8%20text-primary%22%7D">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17"></polyline>
                                    <polyline points="16 7 22 7 22 13"></polyline>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-4">Growth &amp; Development</h3>
                            <p class="text-muted-foreground leading-relaxed mb-0">Whether you're on the ground or in strategy, we offer hands-on experience, training, and mentorship to help you grow your skills and advance your career.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Forms Section -->
        <section class="section-padding bg-muted/20">
            <div class="container mx-auto px-4">
                <div class="max-w-6xl mx-auto">
                    <div class="grid md:grid-cols-2 gap-12">
                        <!-- Talents Hiring Form -->
                        <style>
                            .interactive-card p {
                                margin-bottom: 0;
                            }
                        </style>
                        <div class="interactive-card bg-white p-8 rounded-2xl">
                            <h2 class="text-3xl font-bold mb-6 text-primary">Talents Hiring Form</h2>
                            <?php echo do_shortcode('[contact-form-7 id="fadf8f0" title="Talents Hiring Form"]'); ?>
                        </div>

                        <!-- Suppliers Registration Form -->
                        <div class="interactive-card bg-white p-8 rounded-2xl">
                            <h2 class="text-3xl font-bold mb-6 text-primary">Suppliers Registration Form</h2>
                            <?php echo do_shortcode('[contact-form-7 id="b2c4e1d" title="Suppliers Registration Form"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>



</div><!-- #primary -->


<?php get_footer(); ?>