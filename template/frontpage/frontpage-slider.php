<section class="relative h-screen flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat transform scale-105 animate-[zoom-in_20s_ease-in-out_infinite_alternate]" style="background-image: linear-gradient(rgba(0, 0, 0, 0.4)); z-index: 1;"></div>

    <img
        src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/slider.webp"
        alt="Premium Egyptian Natural Stone"
        fetchpriority="high"
        loading="eager"
        decoding="async"
        width="1920"
        height="1080"
        class="absolute inset-0 w-full h-full object-cover scale-105 animate-[zoom-in_20s_ease-in-out_infinite_alternate]">



    <div class="relative z-10 text-center text-white container mx-auto px-4">
        <div class="max-w-5xl mx-auto">
            <div class="mb-6 inline-block animate-fade-in"><span class="px-4 py-2 bg-olive-600/20 backdrop-blur-sm border border-solid border-olive-400/30 rounded-full text-olive-200 text-sm font-medium">Premium Egyptian Natural Stone</span></div>
            <h1 class="font-serif text-white text-5xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight animate-[fade-in_1s_ease-out_0.3s_both]">Luxury Natural Stone <span class="block text-olive-400 bg-gradient-to-r from-olive-400 to-olive-300 bg-clip-text text-transparent">From the Heart of Egypt</span></h1>
            <p class="text-xl md:text-2xl mb-10 text-stone-200 max-w-3xl mx-auto leading-relaxed animate-[fade-in_1s_ease-out_0.6s_both]">Discover our exquisite collection of premium marble, granite, and natural stone. Crafting architectural masterpieces for over 35 years.</p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center items-center mb-12 animate-[fade-in_1s_ease-out_0.9s_both]">
                <a href="<?php echo ($page_products = get_page_by_path('products')) ? get_permalink($page_products->ID) : ''; ?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md bg-olive-600 hover:bg-olive-700 text-white px-8 py-4 text-lg font-semibold shadow-xl hover:shadow-2xl transform hover:scale-105 hover:text-white transition-all duration-300">Explore Our Products</a>
                <a href="<?php echo ($page_contact = get_page_by_path('contact-us')) ? get_permalink($page_contact->ID) : ''; ?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md border-2 border-white text-black bg-white hover:bg-stone-100 hover:text-slate-800 px-8 py-4 text-lg font-semibold shadow-xl hover:shadow-2xl transform hover:scale-105 transition-all duration-300">Contact Our Team</a>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center animate-[fade-in_1s_ease-out_1.2s_both]">
                <div class="group">
                    <div class="text-4xl font-bold text-olive-400 mb-2 group-hover:scale-110 transition-transform duration-300">35+</div>
                    <div class="text-stone-300 text-sm">Years Experience</div>
                </div>
                <div class="group">
                    <div class="text-4xl font-bold text-olive-400 mb-2 group-hover:scale-110 transition-transform duration-300">2000+</div>
                    <div class="text-stone-300 text-sm">Projects Completed</div>
                </div>
                <div class="group">
                    <div class="text-4xl font-bold text-olive-400 mb-2 group-hover:scale-110 transition-transform duration-300">50+</div>
                    <div class="text-stone-300 text-sm">Stone Varieties</div>
                </div>
                <div class="group">
                    <div class="text-4xl font-bold text-olive-400 mb-2 group-hover:scale-110 transition-transform duration-300">100%</div>
                    <div class="text-stone-300 text-sm">Customer Satisfaction</div>
                </div>
            </div>
        </div>
    </div>
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 text-white z-10">
        <div class="flex flex-col items-center animate-bounce">
            <span class="text-sm mb-2 font-medium">Scroll to explore</span>
            <div class="w-6 h-10 border-solid border-2 border-olive-400 rounded-full flex justify-center bg-olive-400/10 backdrop-blur-sm">
                <div class="w-1 h-3 bg-olive-400 rounded-full mt-2 animate-pulse"></div>
            </div>
        </div>
    </div>
</section>