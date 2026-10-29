<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
</div> <!-- ast-container -->
</div><!-- #content -->
<footer class="bg-slate-800 text-white">
    <div class="ast-container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="space-y-4">
                <div class="flex items-center space-x-2">
                    <div class="bg-olive-600 text-white p-2 rounded-lg"><span class="font-bold text-lg">EMG</span></div>
                    <div>
                        <h3 class="font-serif text-lg font-bold text-white mb-0">Egyptian Marble &amp; Granite</h3>
                        <p class="text-sm text-olive-400 mb-0">Premium Natural Stone</p>
                    </div>
                </div>
                <p class="text-stone-300 text-sm leading-relaxed mb-0">Egypt's leading supplier of premium natural
                    stone. We've been crafting excellence in marble, granite, and luxury stone solutions since 1985.</p>
                <div class="flex space-x-4">
                    <a href="https://www.facebook.com/EMG-Egyptian-Marble-Granite-305718266681112/"
                       class="text-stone-300 hover:text-olive-400 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-facebook h-5 w-5">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/egyptianmarblegranite/"
                       class="text-stone-300 hover:text-olive-400 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-instagram h-5 w-5">
                            <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                            <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                            <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                        </svg>
                    </a>
                    <a href="https://www.youtube.com/channel/UC2BWNLPEBdvDGw4pZkYBvjw"
                       class="text-stone-300 hover:text-olive-400 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-youtube h-5 w-5">
                            <path d="M2.5 17a24.12 24.12 0 0 1 0-10 2 2 0 0 1 1.4-1.4 49.56 49.56 0 0 1 16.2 0A2 2 0 0 1 21.5 7a24.12 24.12 0 0 1 0 10 2 2 0 0 1-1.4 1.4 49.55 49.55 0 0 1-16.2 0A2 2 0 0 1 2.5 17"></path>
                            <path d="m10 15 5-3-5-3z"></path>
                        </svg>
                    </a>
                    <a href="https://www.pinterest.com/EMGEgyptianmarblegranite1/"
                       class="text-stone-300 hover:text-olive-400 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             width="24"
                             height="24"
                             viewBox="0 0 32 32"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2"
                             stroke-linecap="round"
                             stroke-linejoin="round"
                             class="h-5 w-5">

                            <path d="M16.292 5
									C10.536 5 7.48 8.866 7.48 13.077
									c0 1.955 1.039 4.392 2.707 5.168
									.253.118.387.064.443-.18
									.047-.185.273-1.089.373-1.511
									a.402.402 0 0 0-.095-.386
									c-.55-.667-.988-1.896-.988-3.041
									0-2.942 2.228-5.787 6.021-5.787
									3.28 0 5.571 2.23 5.571 5.426
									0 3.61-1.82 6.108-4.191 6.108
									-1.309 0-2.291-1.081-1.978-2.413
									.378-1.584 1.106-3.298 1.106-4.438
									0-1.026-.552-1.883-1.685-1.883
									-1.341 0-2.415 1.385-2.415 3.241
									0 1.182.4 1.978.4 1.978
									s-1.323 5.593-1.563 6.634
									c-.413 1.765.051 4.625.094 4.876
									.021.134.172.18.252.066
									.129-.175 1.725-2.565 2.174-4.292
									l.828-3.171
									c.439.829 1.707 1.531 3.061 1.531
									4.021 0 6.923-3.703 6.923-8.299
									C24.52 8.301 20.92 5 16.292 5z"/>
                        </svg>
                    </a>
                    <a href="https://twitter.com/emg_marble"
                       class="text-stone-300 hover:text-olive-400 transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             width="24"
                             height="24"
                             viewBox="0 0 24 24"
                             fill="none"
                             stroke="currentColor"
                             stroke-width="2"
                             stroke-linecap="round"
                             stroke-linejoin="round"
                             class="h-5 w-5">

                            <path d="M18.244 2.25H21.552L14.325 10.51L22.827 21.75H16.17L10.956 14.933L4.99 21.75H1.68L9.41 12.915L1.254 2.25H8.08L12.793 8.481L18.244 2.25Z"/>

                            <path d="M7.084 4.126L18.916 19.77"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="space-y-4">
                <h4 class="font-semibold text-lg text-olive-400">Quick Links</h4>
                <div class="space-y-2">
					<a class="block text-stone-300 hover:text-white transition-colors" href="<?php echo ($page = get_page_by_path('about-us')) ? get_permalink($page->ID) : '#'; ?>">About Us</a>
					<a class="block text-stone-300 hover:text-white transition-colors" href="<?php echo ($page = get_page_by_path('products')) ? get_permalink($page->ID) : '#'; ?>">Products</a>
					<?php if (apply_filters('emg_show_projects_links', false)) : ?>
					<a class="block text-stone-300 hover:text-white transition-colors"
                            href="<?php echo ($page = get_page_by_path('projects')) ? get_permalink($page->ID) : '#'; ?>">Portfolio</a>
					<?php endif; ?>
					<a class="block text-stone-300 hover:text-white transition-colors" href="<?php echo ($page = get_page_by_path('blog')) ? get_permalink($page->ID) : '#'; ?>">Blog</a>
					<a class="block text-stone-300 hover:text-white transition-colors" href="<?php echo ($page = get_page_by_path('contact-us')) ? get_permalink($page->ID) : '#'; ?>">Contact</a>
                </div>
            </div>
            <div class="space-y-4">
                <h4 class="font-semibold text-lg text-olive-400">Our Products</h4>
                <div class="space-y-2">
                    <a class="block text-stone-300 hover:text-white transition-colors"
                       href="<?php echo ($page = get_page_by_path('egyptian-marble')) ? get_permalink($page->ID) : '#'; ?>">Egyptian
                        Marble</a>
                    <a class="block text-stone-300 hover:text-white transition-colors"
                       href="<?php echo ($page = get_page_by_path('egyptian-granite')) ? get_permalink($page->ID) : '#'; ?>">Egyptian
                        Granite</a>
                    <a class="block text-stone-300 hover:text-white transition-colors"
                       href="<?php echo ($page = get_page_by_path('quartz')) ? get_permalink($page->ID) : '#'; ?>">Quartz</a>
                    <a class="block text-stone-300 hover:text-white transition-colors"
                       href="<?php echo esc_url( home_url( '/catalogue/' ) ); ?>">Download
                        Catalog</a>
                </div>
            </div>
            <div class="space-y-4">
                <h4 class="font-semibold text-lg text-olive-400">Contact Information</h4>
                <div class="space-y-3">
                    <?php if (apply_filters('emg_show_address', false)) : ?>
                    <div class="flex items-start space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-map-pin h-5 w-5 text-olive-400 mt-1 flex-shrink-0">
                            <path d="M20 10c0 4.993-5.539 10.193-7.399 11.799a1 1 0 0 1-1.202 0C9.539 20.193 4 14.993 4 10a8 8 0 0 1 16 0"></path>
                            <circle cx="12" cy="10" r="3"></circle>
                        </svg>
                        <div class="text-stone-300 text-sm">
                            <p class="mb-0">17 El Shaheed Ahmed Zaki St Behind Obour Bldgs., 9th Floor, Office 92</p>
                            <p class="mb-0">Nasr City, Cairo, Egypt.</p>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-phone h-5 w-5 text-olive-400 flex-shrink-0">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                        </svg>
                        <div class="text-stone-300 text-sm">
                            <p class="mb-0">002-01000390999</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-mail h-5 w-5 text-olive-400 flex-shrink-0">
                            <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                        </svg>
                        <div class="text-stone-300 text-sm">
                            <p class="mb-0"><!--email_off--><a href="mailto:sales@egyptianmarblegranite.com" class="hover:text-white transition-colors">sales@egyptianmarblegranite.com</a><!--/email_off--></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="border-t border-stone-700 mt-8 pt-8" style="border-top-style: solid;">
            <div class="flex flex-col md:flex-row justify-between items-center space-y-4 md:space-y-0">
                <div class="site-credit text-xs text-stone-400">
                    &copy;
                    <span id="y"><?php echo esc_html(wp_date('Y')); ?></span> <?php bloginfo( 'name' ); ?><?php echo esc_html(__('. All rights reserved.', 'arqamweb')) ?>
                    <span aria-hidden="true"> · </span>
                    <?php echo esc_html(__('Designed and Developed by', 'arqamweb')) ?>
                    <a href="https://www.arqamweb.com"
                       class="arqam-credit hover:text-white"><?php echo esc_html(__('Arqam Web', 'arqamweb')) ?></a>
        
                    <style>
                        .arqam-credit:focus-visible {
                            outline: 2px solid gold;
                            outline-offset: 3px;
                        }
                    </style>
                </div>
                
                <div class="flex space-x-6 text-sm">
                    <a class="text-stone-400 hover:text-white transition-colors"
                       href="<?php echo ($page = get_page_by_path('privacy-policy')) ? get_permalink($page->ID) : '#'; ?>">
                        Privacy Policy
                    </a>
                    <a class="text-stone-400 hover:text-white transition-colors"
                       href="<?php echo ($page = get_page_by_path('terms-of-service')) ? get_permalink($page->ID) : '#'; ?>">
                        Terms of Service
                    </a>
                    <a class="text-stone-400 hover:text-white transition-colors"
                       href="<?php echo ($page = get_page_by_path('sustainability')) ? get_permalink($page->ID) : '#'; ?>">
                        Sustainability
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php
astra_content_after();

astra_footer_before();

astra_footer();

astra_footer_after();
?>
</div><!-- #page -->
<?php
astra_body_bottom();
wp_footer();
?>
</body>

</html>