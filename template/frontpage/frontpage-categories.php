<section class="py-24 bg-gradient-to-b from-white via-stone-50 to-white relative overflow-hidden">
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute top-20 right-10 w-64 h-64 bg-olive-100/30 rounded-full blur-3xl animate-pulse"></div>
        <div class="absolute bottom-20 left-10 w-80 h-80 bg-stone-100/40 rounded-full blur-3xl animate-pulse delay-1000"></div>
    </div>
    <div class="ast-container relative z-10">
        <div class="text-center mb-20 transition-all duration-1000 animate-slide-in-up opacity-100">
            <div class="inline-flex items-center gap-2 bg-olive-100 text-olive-700 px-4 py-2 rounded-full text-sm font-semibold mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-sparkles h-4 w-4">
                    <path d="M9.937 15.5A2 2 0 0 0 8.5 14.063l-6.135-1.582a.5.5 0 0 1 0-.962L8.5 9.936A2 2 0 0 0 9.937 8.5l1.582-6.135a.5.5 0 0 1 .963 0L14.063 8.5A2 2 0 0 0 15.5 9.937l6.135 1.581a.5.5 0 0 1 0 .964L15.5 14.063a2 2 0 0 0-1.437 1.437l-1.582 6.135a.5.5 0 0 1-.963 0z"></path>
                    <path d="M20 3v4"></path>
                    <path d="M22 5h-4"></path>
                    <path d="M4 17v2"></path>
                    <path d="M5 18H3"></path>
                </svg>
                <span>Our Premium Collection</span>
            </div>
            <h2 class="font-serif text-5xl lg:text-6xl font-bold text-slate-800 mb-6">Exceptional Natural Stone <span class="block text-olive-600">Categories</span></h2>
            <p class="text-slate-600 text-lg max-w-2xl mx-auto leading-relaxed">Discover our curated selection of premium natural stones, each piece carefully selected for its unique beauty and exceptional quality from the heart of Egypt.</p>
        </div>
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
            <div class="group cursor-pointer transform hover:scale-105 transition-all duration-500 animate-slide-in-up opacity-100" style="animation-delay: 0ms;">
                <a href="<?php echo ($page = get_page_by_path('egyptian-marble')) ? get_permalink($page->ID) : ''; ?>">
                    <div class="relative overflow-hidden rounded-2xl shadow-lg mb-6 bg-white group-hover:shadow-2xl transition-shadow duration-300">
                        <div class="absolute top-4 left-4 z-10">
                            <span class="bg-olive-600 text-white text-xs font-semibold px-3 py-1 rounded-full transform group-hover:scale-110 transition-transform duration-300">Most Popular</span>
                        </div>
                        <div class="relative overflow-hidden">
                            <img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/marble-design.webp"
                                alt="Egyptian Marble"
                                class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110"
                                width="800"
                                height="400"
                                decoding="async"
                                loading="lazy">

                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute inset-0 bg-olive-600/0 group-hover:bg-olive-600/10 transition-colors duration-300"></div>
                            <div class="absolute inset-x-4 bottom-4 opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                                <span class="button inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-9 rounded-md px-3 w-full bg-white text-olive-600 hover:text-olive-600 hover:bg-olive-50 shadow-lg font-semibold">
                                    <span>View Collection</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 h-4 w-4">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4 px-2">
                        <h3 class="font-serif text-2xl font-bold text-slate-800 group-hover:text-olive-600 transition-colors duration-300">Egyptian Marble</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Timeless elegance with natural veining patterns and luxurious finish</p>
                        <div class="space-y-2">
                            <p class="text-xs text-olive-600 font-semibold uppercase tracking-wide">Popular Varieties:</p>
                            <div class="flex flex-wrap gap-1">
                                <span class="text-xs bg-gradient-to-r from-olive-50 to-stone-50 text-slate-700 px-3 py-1 rounded-full border border-solid border-olive-100 hover:border-olive-300 transition-colors duration-200">Galala</span>
                                <span class="text-xs bg-gradient-to-r from-olive-50 to-stone-50 text-slate-700 px-3 py-1 rounded-full border border-solid border-olive-100 hover:border-olive-300 transition-colors duration-200">Silvia</span>
                                <span class="text-xs bg-gradient-to-r from-olive-50 to-stone-50 text-slate-700 px-3 py-1 rounded-full border border-solid border-olive-100 hover:border-olive-300 transition-colors duration-200">Triesta</span>
                                <span class="text-xs bg-gradient-to-r from-olive-50 to-stone-50 text-slate-700 px-3 py-1 rounded-full border border-solid border-olive-100 hover:border-olive-300 transition-colors duration-200">Sunny</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="group cursor-pointer transform hover:scale-105 transition-all duration-500 animate-slide-in-up opacity-100" style="animation-delay: 200ms;">
                <a href="<?php echo ($page = get_page_by_path('egyptian-granite')) ? get_permalink($page->ID) : ''; ?>">
                    <div class="relative overflow-hidden rounded-2xl shadow-lg mb-6 bg-white group-hover:shadow-2xl transition-shadow duration-300">
                        <div class="absolute top-4 left-4 z-10">
                            <span class="bg-olive-600 text-white text-xs font-semibold px-3 py-1 rounded-full transform group-hover:scale-110 transition-transform duration-300">Premium Quality</span>
                        </div>
                        <div class="relative overflow-hidden">
                            <img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/Granite.webp"
                                alt="Egyptian Granite"
                                class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110"
                                width="800"
                                height="400"
                                decoding="async"
                                loading="lazy">

                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute inset-0 bg-olive-600/0 group-hover:bg-olive-600/10 transition-colors duration-300"></div>
                            <div class="absolute inset-x-4 bottom-4 opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                                <span class="button inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-9 rounded-md px-3 w-full bg-white text-olive-600 hover:text-olive-600 hover:bg-olive-50 shadow-lg font-semibold">
                                    <span>View Collection</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 h-4 w-4">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4 px-2">
                        <h3 class="font-serif text-2xl font-bold text-slate-800 group-hover:text-olive-600 transition-colors duration-300">Egyptian Granite</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Exceptional durability with stunning natural beauty and strength</p>
                        <div class="space-y-2">
                            <p class="text-xs text-olive-600 font-semibold uppercase tracking-wide">Popular Varieties:</p>
                            <div class="flex flex-wrap gap-1"><span class="text-xs bg-gradient-to-r from-olive-50 to-stone-50 text-slate-700 px-3 py-1 rounded-full border border-solid border-olive-100 hover:border-olive-300 transition-colors duration-200">Red Aswan</span><span class="text-xs bg-gradient-to-r from-olive-50 to-stone-50 text-slate-700 px-3 py-1 rounded-full border border-solid border-olive-100 hover:border-olive-300 transition-colors duration-200">Black Aswan</span><span class="text-xs bg-gradient-to-r from-olive-50 to-stone-50 text-slate-700 px-3 py-1 rounded-full border border-solid border-olive-100 hover:border-olive-300 transition-colors duration-200">Rosa Hoody</span><span class="text-xs bg-gradient-to-r from-olive-50 to-stone-50 text-slate-700 px-3 py-1 rounded-full border border-solid border-olive-100 hover:border-olive-300 transition-colors duration-200">Gandola</span></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="group cursor-pointer transform hover:scale-105 transition-all duration-500 animate-slide-in-up opacity-100" style="animation-delay: 400ms;">
                <a href="<?php echo ($page = get_page_by_path('egyptian-limestone')) ? get_permalink($page->ID) : ''; ?>">
                    <div class="relative overflow-hidden rounded-2xl shadow-lg mb-6 bg-white group-hover:shadow-2xl transition-shadow duration-300">
                        <div class="absolute top-4 left-4 z-10"><span class="bg-olive-600 text-white text-xs font-semibold px-3 py-1 rounded-full transform group-hover:scale-110 transition-transform duration-300">Heritage Stone</span></div>
                        <div class="relative overflow-hidden">
                            <img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/limestone-designs.webp"
                                alt="Egyptian Limestone"
                                class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110"
                                width="800"
                                height="400"
                                decoding="async"
                                loading="lazy">

                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute inset-0 bg-olive-600/0 group-hover:bg-olive-600/10 transition-colors duration-300"></div>
                            <div class="absolute inset-x-4 bottom-4 opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                                <span class="button inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-9 rounded-md px-3 w-full bg-white text-olive-600 hover:text-olive-600 hover:bg-olive-50 shadow-lg font-semibold">
                                    <span>View Collection</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 h-4 w-4">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4 px-2">
                        <h3 class="font-serif text-2xl font-bold text-slate-800 group-hover:text-olive-600 transition-colors duration-300">Egyptian Limestone</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Ancient heritage stone with modern applications and timeless appeal</p>
                        <div class="space-y-2">
                            <p class="text-xs text-olive-600 font-semibold uppercase tracking-wide">Popular Varieties:</p>
                            <div class="flex flex-wrap gap-1"><span class="text-xs bg-gradient-to-r from-olive-50 to-stone-50 text-slate-700 px-3 py-1 rounded-full border border-solid border-olive-100 hover:border-olive-300 transition-colors duration-200">Galala Classic</span><span class="text-xs bg-gradient-to-r from-olive-50 to-stone-50 text-slate-700 px-3 py-1 rounded-full border border-solid border-olive-100 hover:border-olive-300 transition-colors duration-200">Mokattam</span><span class="text-xs bg-gradient-to-r from-olive-50 to-stone-50 text-slate-700 px-3 py-1 rounded-full border border-solid border-olive-100 hover:border-olive-300 transition-colors duration-200">Sunny Light</span><span class="text-xs bg-gradient-to-r from-olive-50 to-stone-50 text-slate-700 px-3 py-1 rounded-full border border-solid border-olive-100 hover:border-olive-300 transition-colors duration-200">Golden Cream</span></div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="group cursor-pointer transform hover:scale-105 transition-all duration-500 animate-slide-in-up opacity-100" style="animation-delay: 600ms;">
                <a href="<?php echo ($page = get_page_by_path('quartz')) ? get_permalink($page->ID) : ''; ?>">
                    <div class="relative overflow-hidden rounded-2xl shadow-lg mb-6 bg-white group-hover:shadow-2xl transition-shadow duration-300">
                        <div class="absolute top-4 left-4 z-10">
                            <span class="bg-olive-600 text-white text-xs font-semibold px-3 py-1 rounded-full transform group-hover:scale-110 transition-transform duration-300">Engineered</span>
                        </div>
                        <div class="relative overflow-hidden">
                            <img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/quartz.webp"
                                alt="Engineered Quartz"
                                class="w-full h-64 object-cover transition-transform duration-700 group-hover:scale-110"
                                width="800"
                                height="400"
                                decoding="async"
                                loading="lazy">

                            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            <div class="absolute inset-0 bg-olive-600/0 group-hover:bg-olive-600/10 transition-colors duration-300"></div>
                            <div class="absolute inset-x-4 bottom-4 opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300">
                                <button class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm ring-offset-background transition-colors focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-9 rounded-md px-3 w-full bg-white text-olive-600 hover:text-olive-600 hover:bg-olive-50 shadow-lg font-semibold">
                                    <span>View Collection</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 h-4 w-4">
                                        <path d="M5 12h14"></path>
                                        <path d="m12 5 7 7-7 7"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-4 px-2">
                        <h3 class="font-serif text-2xl font-bold text-slate-800 group-hover:text-olive-600 transition-colors duration-300">Engineered Quartz</h3>
                        <p class="text-slate-600 text-sm leading-relaxed">Modern performance with consistent patterns and superior durability</p>
                        <div class="space-y-2">
                            <p class="text-xs text-olive-600 font-semibold uppercase tracking-wide">Popular Varieties:</p>
                            <div class="flex flex-wrap gap-1"><span class="text-xs bg-gradient-to-r from-olive-50 to-stone-50 text-slate-700 px-3 py-1 rounded-full border border-solid border-olive-100 hover:border-olive-300 transition-colors duration-200">Pure White</span><span class="text-xs bg-gradient-to-r from-olive-50 to-stone-50 text-slate-700 px-3 py-1 rounded-full border border-solid border-olive-100 hover:border-olive-300 transition-colors duration-200">Calacatta</span><span class="text-xs bg-gradient-to-r from-olive-50 to-stone-50 text-slate-700 px-3 py-1 rounded-full border border-solid border-olive-100 hover:border-olive-300 transition-colors duration-200">Concrete Grey</span><span class="text-xs bg-gradient-to-r from-olive-50 to-stone-50 text-slate-700 px-3 py-1 rounded-full border border-solid border-olive-100 hover:border-olive-300 transition-colors duration-200">Marble Look</span></div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="text-center bg-gradient-to-r from-olive-600 to-olive-700 rounded-3xl p-12 text-white shadow-2xl hover:shadow-olive-600/20 transition-shadow duration-500 animate-slide-in-up opacity-100" style="animation-delay: 800ms;">
            <p class="font-serif text-3xl font-bold mb-4 text-white mb-0">Ready to Transform Your Space?</p>
            <p class="text-olive-100 mb-8 max-w-2xl mx-auto">Explore our complete collection of premium natural stones and find the perfect match for your project.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="<?php echo ($page_products = get_page_by_path('products')) ? get_permalink($page_products->ID) : ''; ?>" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md bg-white text-olive-600 hover:text-olive-600 hover:bg-stone-100 px-8 shadow-lg transform hover:scale-105 transition-all duration-300">View All Products<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-right ml-2 h-5 w-5">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </a>
                <a href="<?php echo esc_url( home_url( '/catalogue/' ) ); ?>" role="button" aria-label="Download Catalogue" class="inline-flex items-center justify-center gap-2 whitespace-nowrap text-sm font-medium ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-11 rounded-md bg-white text-olive-600 hover:text-olive-600 hover:bg-stone-100 px-8 shadow-lg transform hover:scale-105 transition-all duration-300">Download Catalogue</a>
            </div>
        </div>
    </div>
</section>