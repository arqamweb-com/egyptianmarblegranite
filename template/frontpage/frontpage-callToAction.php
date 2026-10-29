<section class="py-20 bg-gradient-to-r from-olive-600 to-olive-700 text-white relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute inset-0" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/space.svg);"></div>
    </div>
    <div class="ast-container relative z-10">
        <div class="max-w-4xl mx-auto text-center transition-all duration-1000 animate-slide-in-up opacity-100">
            <h2 class="font-serif text-4xl lg:text-5xl font-bold mb-6 text-white">Ready to Transform Your Space?</h2>
            <p class="text-olive-100 text-lg mb-8 max-w-2xl mx-auto">Let our experts help you select the perfect natural stone for your project. Get a free consultation and personalized recommendations today.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center mb-12 transition-all duration-1000 animate-slide-in-up opacity-100" style="animation-delay: 300ms;">
                <a href="https://wa.me/201000390999" class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md bg-white text-olive-600 hover:bg-stone-100 hover:text-olive-700 px-8 py-4 text-lg font-semibold shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone mr-2 h-5 w-5">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                    </svg>
                    <span>Request Free Consultation</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/catalogue/' ) ); ?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md bg-white text-olive-600 hover:bg-stone-100 hover:text-olive-700 px-8 py-4 text-lg font-semibold shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300 focus:bg-secondary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-download mr-2 h-5 w-5">
                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                        <polyline points="7 10 12 15 17 10"></polyline>
                        <line x1="12" x2="12" y1="15" y2="3"></line>
                    </svg>Download Catalogue</a>
            </div>
            <div class="grid <?php echo apply_filters('emg_show_address', false) ? 'md:grid-cols-3' : 'md:grid-cols-2'; ?> gap-8 text-center transition-all duration-1000 animate-slide-in-up opacity-100" style="animation-delay: 600ms;">
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 hover:bg-white/20 transition-colors duration-300">
                    <h4 class="font-semibold text-lg text-white mb-2">Call Us Today</h4>
                    <p class="text-olive-100 mb-0">002-01000390999</p>
                </div>
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 hover:bg-white/20 transition-colors duration-300">
                    <h4 class="font-semibold text-lg text-white mb-2">Email Us</h4>
                    <p class="text-olive-100 mb-0"><!--email_off--><a href="mailto:sales@egyptianmarblegranite.com">sales@egyptianmarblegranite.com</a><!--/email_off--></p>
                </div>
                <?php if (apply_filters('emg_show_address', false)) : ?>
                <div class="bg-white/10 backdrop-blur-sm rounded-xl p-6 hover:bg-white/20 transition-colors duration-300">
                    <h4 class="font-semibold text-lg text-white mb-2">Visit Our Showroom</h4>
                    <p class="text-olive-100 mb-0">Nasr City, Cairo, Egypt</p>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>