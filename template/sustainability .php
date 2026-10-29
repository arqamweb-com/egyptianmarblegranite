<?php /* Template Name: Sustainability */ ?>

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
                <section class="py-20">
                    <div class="container mx-auto px-4">
                        <div class="max-w-4xl mx-auto text-center transition-all duration-700 opacity-100 translate-y-0">
                            <h2 class="font-serif text-3xl lg:text-4xl font-bold text-slate-900 mb-6">A long-term
                                commitment to responsible stone</h2>
                            <p class="text-lg text-slate-700 leading-relaxed">Egyptian Marble &amp; Granite is committed
                                to the responsible sourcing and production of natural stone. From quarry to finished
                                slab, we work to reduce our environmental footprint, support the communities around us,
                                and deliver materials that stand the test of time — beautifully and sustainably.</p>
                        </div>
                    </div>
                </section>
                <section class="py-20" style="background-color: #f7f7f7;">
                    <div class="container mx-auto px-4">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                            <article
                                    class="group bg-white border border-solid border-stone-200 rounded-xl p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                                <div class="w-14 h-14 rounded-lg bg-stone-olive/10 text-stone-olive flex items-center justify-center mb-6 group-hover:bg-stone-olive group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="lucide lucide-mountain h-7 w-7">
                                        <path d="m8 3 4 8 5-5 5 15H2L8 3z"></path>
                                    </svg>
                                </div>
                                <h3 class="font-serif text-xl font-bold text-slate-900 mb-3">Responsible Sourcing &amp;
                                    Quarrying</h3>
                                <p class="text-slate-700 leading-relaxed">We work only with quarries selected for their
                                    geological quality and operational integrity. Our extraction methods are planned to
                                    protect surrounding ecosystems, minimise visual impact on the landscape, and ensure
                                    that every block can be traced back to a responsibly managed source in Egypt's
                                    historic stone regions.</p></article>
                            <article
                                    class="group bg-white border border-solid border-stone-200 rounded-xl p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                                <div class="w-14 h-14 rounded-lg bg-stone-olive/10 text-stone-olive flex items-center justify-center mb-6 group-hover:bg-stone-olive group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="lucide lucide-droplets h-7 w-7">
                                        <path d="M7 16.3c2.2 0 4-1.83 4-4.05 0-1.16-.57-2.26-1.71-3.19S7.29 6.75 7 5.3c-.29 1.45-1.14 2.84-2.29 3.76S3 11.1 3 12.25c0 2.22 1.8 4.05 4 4.05z"></path>
                                        <path d="M12.56 6.6A10.97 10.97 0 0 0 14 3.02c.5 2.5 2 4.9 4 6.5s3 3.5 3 5.5a6.98 6.98 0 0 1-11.91 4.97"></path>
                                    </svg>
                                </div>
                                <h3 class="font-serif text-xl font-bold text-slate-900 mb-3">Efficient Processing &amp;
                                    Water Recycling</h3>
                                <p class="text-slate-700 leading-relaxed">Our cutting and polishing lines operate on
                                    closed-loop water systems. Process water is continuously filtered, treated, and
                                    reused — dramatically reducing freshwater consumption and preventing slurry
                                    discharge into the surrounding environment.</p></article>
                            <article
                                    class="group bg-white border border-solid border-stone-200 rounded-xl p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                                <div class="w-14 h-14 rounded-lg bg-stone-olive/10 text-stone-olive flex items-center justify-center mb-6 group-hover:bg-stone-olive group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="lucide lucide-recycle h-7 w-7">
                                        <path d="M7 19H4.815a1.83 1.83 0 0 1-1.57-.881 1.785 1.785 0 0 1-.004-1.784L7.196 9.5"></path>
                                        <path d="M11 19h8.203a1.83 1.83 0 0 0 1.556-.89 1.784 1.784 0 0 0 0-1.775l-1.226-2.12"></path>
                                        <path d="m14 16-3 3 3 3"></path>
                                        <path d="M8.293 13.596 7.196 9.5 3.1 10.598"></path>
                                        <path d="m9.344 5.811 1.093-1.892A1.83 1.83 0 0 1 11.985 3a1.784 1.784 0 0 1 1.546.888l3.943 6.843"></path>
                                        <path d="m13.378 9.633 4.096 1.098 1.097-4.096"></path>
                                    </svg>
                                </div>
                                <h3 class="font-serif text-xl font-bold text-slate-900 mb-3">Waste Reduction &amp;
                                    Reuse</h3>
                                <p class="text-slate-700 leading-relaxed">Offcuts, edge trims, and stone slurry are
                                    diverted from landfill and repurposed into aggregates, mosaics, smaller-format
                                    tiles, and decorative products. By designing our production around full material
                                    utilisation, we turn what would be waste into value.</p></article>
                            <article
                                    class="group bg-white border border-solid border-stone-200 rounded-xl p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                                <div class="w-14 h-14 rounded-lg bg-stone-olive/10 text-stone-olive flex items-center justify-center mb-6 group-hover:bg-stone-olive group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="lucide lucide-leaf h-7 w-7">
                                        <path d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z"></path>
                                        <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 12 13 13 12"></path>
                                    </svg>
                                </div>
                                <h3 class="font-serif text-xl font-bold text-slate-900 mb-3">Energy &amp; Lower Carbon
                                    Footprint</h3>
                                <p class="text-slate-700 leading-relaxed">We invest in modern, energy-efficient
                                    machinery — bridge saws, multi-blade gangsaws, and CNC equipment — and continuously
                                    refine workflows to reduce electricity consumption. Ongoing efficiency programmes
                                    target a measurable reduction of emissions per square metre produced.</p></article>
                            <article
                                    class="group bg-white border border-solid border-stone-200 rounded-xl p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                                <div class="w-14 h-14 rounded-lg bg-stone-olive/10 text-stone-olive flex items-center justify-center mb-6 group-hover:bg-stone-olive group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="lucide lucide-shield-check h-7 w-7">
                                        <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                                        <path d="m9 12 2 2 4-4"></path>
                                    </svg>
                                </div>
                                <h3 class="font-serif text-xl font-bold text-slate-900 mb-3">Quality &amp;
                                    Certifications</h3>
                                <p class="text-slate-700 leading-relaxed">Our materials are produced to international
                                    quality standards and are backed by independent testing and certifications including
                                    CE marking and SGS inspection. Our processes align with recognised quality and
                                    environmental management practices to give specifiers full confidence in every
                                    shipment.</p></article>
                            <article
                                    class="group bg-white border border-solid border-stone-200 rounded-xl p-8 hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                                <div class="w-14 h-14 rounded-lg bg-stone-olive/10 text-stone-olive flex items-center justify-center mb-6 group-hover:bg-stone-olive group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="lucide lucide-users h-7 w-7">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="9" cy="7" r="4"></circle>
                                        <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                    </svg>
                                </div>
                                <h3 class="font-serif text-xl font-bold text-slate-900 mb-3">Ethical Employment &amp;
                                    Worker Safety</h3>
                                <p class="text-slate-700 leading-relaxed">We provide safe working conditions, modern
                                    personal protective equipment, and ongoing training for every member of our team.
                                    Egyptian Marble &amp; Granite is committed to fair, lawful employment and strictly
                                    prohibits child labour anywhere in our operations or supply chain.</p></article>
                        </div>
                    </div>
                </section>
                <section class="py-20">
                    <div class="container mx-auto px-4">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
                            <div class="transition-all duration-700 opacity-100 translate-x-0">
                                <div class="inline-flex items-center gap-2 text-stone-olive font-semibold mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="lucide lucide-sparkles h-5 w-5">
                                        <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                                        <path d="M20 3v4"></path>
                                        <path d="M22 5h-4"></path>
                                        <path d="M4 17v2"></path>
                                        <path d="M5 18H3"></path>
                                    </svg>
                                    The material itself
                                </div>
                                <h2 class="font-serif text-3xl lg:text-4xl font-bold text-slate-900 mb-6">A Naturally
                                    Sustainable Material</h2>
                                <p class="text-slate-700 leading-relaxed mb-4">Natural stone is one of the most
                                    inherently sustainable building materials in the world. It is durable enough to last
                                    for generations, requires very little maintenance, performs across climates, and —
                                    at the end of its long life — can be fully recycled or reclaimed into new
                                    architectural use.</p>
                                <p class="text-slate-700 leading-relaxed">Choosing Egyptian marble, granite, or
                                    limestone means choosing a material that does not need replacing every decade. It is
                                    a single, honest, low-impact choice that ages with character and contributes to
                                    longer-lasting, more sustainable architecture and design.</p>
                                <div class="grid grid-cols-3 gap-4 mt-8">
                                    <div class="bg-section-alt rounded-lg p-4 text-center">
                                        <div class="font-serif text-2xl font-bold text-stone-olive">100+</div>
                                        <div class="text-xs text-slate-600 mt-1">Years of service life</div>
                                    </div>
                                    <div class="bg-section-alt rounded-lg p-4 text-center">
                                        <div class="font-serif text-2xl font-bold text-stone-olive">100%</div>
                                        <div class="text-xs text-slate-600 mt-1">Recyclable material</div>
                                    </div>
                                    <div class="bg-section-alt rounded-lg p-4 text-center">
                                        <div class="font-serif text-2xl font-bold text-stone-olive">Low</div>
                                        <div class="text-xs text-slate-600 mt-1">Lifetime maintenance</div>
                                    </div>
                                </div>
                            </div>
                            <div class="transition-all duration-700 delay-150 opacity-100 translate-x-0">
                                <div class="relative rounded-2xl overflow-hidden shadow-2xl">
                                    <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/frontend/assets/facilities-DqCCPTg9.jpg'); ?>"
                                         alt=" Egyptian Marble &amp; Granite production facility"
                                         class="w-full h-[480px] object-cover">
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 to-transparent"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="py-20 bg-gradient-to-br from-slate-900 to-slate-800 relative overflow-hidden">
                    <div class="absolute inset-0 bg-cover bg-center opacity-20"
                         style="background-image: url('<?php echo esc_url(get_stylesheet_directory_uri() . '/frontend/assets/parallax-bg-xMhL3NoE.jpg'); ?>');"></div>
                    <div class="container mx-auto px-4 relative z-10">
                        <div class="max-w-3xl mx-auto text-center"><h2
                                    class="font-serif text-3xl lg:text-5xl font-bold text-white mb-6">Partner with a
                                responsible stone supplier</h2>
                            <p class="text-stone-200 text-lg leading-relaxed mb-8">Specify Egyptian natural stone
                                produced with care for the environment, our people, and the long-term life of your
                                project.</p>
                            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                <a class="inline-flex items-center justify-center gap-2 bg-stone-olive hover:bg-stone-olive/90 hover:text-white text-white px-8 py-4 rounded-md font-semibold transition-colors"
                                   href="<?php echo ($quote_page = get_page_by_path('get-a-quote')) ? get_permalink($quote_page->ID) : '#'; ?>">Partner
                                    with a Responsible Stone Supplier
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="lucide lucide-arrow-right h-5 w-5">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </a>
                                <a class="inline-flex items-center justify-center gap-2 bg-white/10 hover:bg-white/20 hover:text-white border border-solid border-white/30 text-white px-8 py-4 rounded-md font-semibold transition-colors backdrop-blur-sm"
                                   href="<?php echo ($contact_page = get_page_by_path('contact-us')) ? get_permalink($contact_page->ID) : '#'; ?>">Contact
                                    Our Team</a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div><!-- #primary -->


<?php get_footer(); ?>