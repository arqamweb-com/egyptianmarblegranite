<section class="py-20 bg-slate-800">
    <div class="ast-container transition-all">
        <h2 class="font-serif text-4xl lg:text-5xl font-bold text-white text-center mb-12">Our Products</h2>
        <div class="grid md:grid-cols-3 gap-8">
            <a class="group relative overflow-hidden rounded-2xl shadow-xl" href="<?php echo ($natural_page = get_page_by_path('natural-stone')) ? get_permalink($natural_page->ID) : ''; ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/natural-stone-product-7s7Ik-lQ.jpg" alt="Egyptian Natural Stone" class="w-full h-72 object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <h3 class="font-serif text-xl font-bold text-white mb-2">Egyptian Natural Stone</h3>
                    <div class="flex items-center text-olive-400 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="text-sm font-medium">View Collection</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 h-4 w-4">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </div>
                </div>
            </a>
            <a class="group relative overflow-hidden rounded-2xl shadow-xl" href="<?php echo ($marble_page = get_page_by_path('egyptian-marble')) ? get_permalink($marble_page->ID) : ''; ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/marble-product-OCMscLMb.jpg" alt="Egyptian Marble" class="w-full h-72 object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <h3 class="font-serif text-xl font-bold text-white mb-2">Egyptian Marble</h3>
                    <div class="flex items-center text-olive-400 group-hover:opacity-100 transition-opacity duration-300"><span class="text-sm font-medium">View Collection</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 h-4 w-4">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </div>
                </div>
            </a>
            <a class="group relative overflow-hidden rounded-2xl shadow-xl" href="<?php echo ($granite_page = get_page_by_path('egyptian-granite')) ? get_permalink($granite_page->ID) : ''; ?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/granite-product-CduKppEy.jpg" alt="Egyptian Granite" class="w-full h-72 object-cover transition-transform duration-500 group-hover:scale-110">
                <div class="absolute inset-0 bg-gradient-to-t from-slate-900/90 via-slate-900/40 to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6">
                    <h3 class="font-serif text-xl font-bold text-white mb-2">Egyptian Granite</h3>
                    <div class="flex items-center text-olive-400 group-hover:opacity-100 transition-opacity duration-300">
                        <span class="text-sm font-medium">View Collection</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 h-4 w-4">
                            <path d="M5 12h14"></path>
                            <path d="m12 5 7 7-7 7"></path>
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>