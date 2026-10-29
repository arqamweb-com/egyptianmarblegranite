<?php /* Template Name: Naturel Stone */ ?>

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
        <div class="min-h-screen bg-stone-50">
            <?php get_template_part('/template/components/headers/header', 'page'); ?>

            <section class="py-20 bg-white">
                <div class="ast-container">
                    <div class="max-w-4xl mx-auto transition-all duration-1000 opacity-100 translate-y-0">
                        <h2 class="font-serif text-3xl md:text-4xl text-slate-800 text-center mb-8">What Is Egyptian Natural Stone?</h2>
                        <p class="text-slate-600 leading-relaxed text-lg text-center">Egyptian natural stone refers to a variety of natural stones that are quarried in Egypt. Egypt has a rich history of quarrying natural stone, and its quarries have produced some of the world's most famous and sought-after stones, such as limestone, granite, and marble.</p>
                        <p class="text-slate-600 leading-relaxed text-lg text-center mt-6">Egyptian natural stone is highly valued for its beauty, durability, and unique character. It has been used for centuries in various applications, from ancient monuments to modern-day architecture and interior design. Because it is a natural material, each piece of natural stone has its own unique character and variations in color, pattern, and texture, making it a popular choice for creating one-of-a-kind designs.</p>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-stone-100">
                <div class="ast-container">
                    <div class="transition-all duration-1000 opacity-100 translate-y-0">
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                            <a href="<?php echo ($limestone_page = get_page_by_path('egyptian-limestone')) ? get_permalink($limestone_page->ID) : '#'; ?>">
                                <div class="group relative overflow-hidden rounded-lg shadow-lg aspect-square">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/stone-1-CuJlL1jh.jpg" alt="Egyptian Limestone Tiles - EMG" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                        <p class="font-medium text-sm text-center mb-0">Egyptian Limestone Tiles - EMG</p>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo ($marble_page = get_page_by_path('egyptian-marble')) ? get_permalink($marble_page->ID) : '#'; ?>">
                                <div class="group relative overflow-hidden rounded-lg shadow-lg aspect-square">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/stone-2-CR05SXfQ.jpg" alt="Egyptian Marble - EMG" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                        <p class="font-medium text-sm text-center mb-0">Egyptian Marble - EMG</p>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo ($granite_page = get_page_by_path('egyptian-granite')) ? get_permalink($granite_page->ID) : '#'; ?>">
                                <div class="group relative overflow-hidden rounded-lg shadow-lg aspect-square">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/granite-BiWXu3dn.jpg" alt="Egyptian Granite - EMG" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                        <p class="font-medium text-sm text-center mb-0">Egyptian Granite - EMG</p>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo ($hashma = get_page_by_path('egyptian-hashma-stone', OBJECT, 'emg-product')) ? get_permalink($hashma->ID) : '#'; ?>">
                                <div class="group relative overflow-hidden rounded-lg shadow-lg aspect-square">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/hashma-BSvhjjCG.jpg" alt="Egyptian Hashma Stone - EMG" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                        <p class="font-medium text-sm text-center mb-0">Egyptian Hashma Stone - EMG</p>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo ($alabaster_page = get_page_by_path('egyptian-alabaster', OBJECT, 'emg-product')) ? get_permalink($alabaster_page->ID) : '#'; ?>">
                                <div class="group relative overflow-hidden rounded-lg shadow-lg aspect-square">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/alabaster-IdZ5HzLp.jpg" alt="Egyptian Alabaster Stone - EMG" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                        <p class="font-medium text-sm text-center mb-0">Egyptian Alabaster Stone - EMG</p>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo ($mica_page = get_page_by_path('egyptian-mica', OBJECT, 'emg-product')) ? get_permalink($mica_page->ID) : '#'; ?>">
                                <div class="group relative overflow-hidden rounded-lg shadow-lg aspect-square">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/mica-K__IlCuT.jpg" alt="Egyptian Mica Stone - EMG" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                        <p class="font-medium text-sm text-center mb-0">Egyptian Mica Stone - EMG</p>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo ($tura_page = get_page_by_path('egyptian-tura', OBJECT, 'emg-product')) ? get_permalink($tura_page->ID) : '#'; ?>">
                                <div class="group relative overflow-hidden rounded-lg shadow-lg aspect-square">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/tura-BlNeXBBn.jpg" alt="Egyptian Tura Stone -EMG" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                        <p class="font-medium text-sm text-center mb-0">Egyptian Tura Stone -EMG</p>
                                    </div>
                                </div>
                            </a>
                            <a href="<?php echo ($basalt_page = get_page_by_path('egyptian-basalt-2', OBJECT, 'emg-product')) ? get_permalink($basalt_page->ID) : '#'; ?>">
                                <div class="group relative overflow-hidden rounded-lg shadow-lg aspect-square">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/basalt-CTqtA4tL.jpg" alt="Egyptian Basalt Stone - EMG" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                                    <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
                                        <p class="font-medium text-sm text-center mb-0">Egyptian Basalt Stone - EMG</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-slate-800 text-white">
                <div class="ast-container">
                    <div class="max-w-5xl mx-auto transition-all duration-1000 opacity-100 translate-y-0">
                        <h2 class="font-serif text-4xl text-center mb-12 text-white">Why You Need Egyptian Natural Stone in Your Home?</h2>
                        <p class="text-stone-300 text-lg text-center mb-12">There are several reasons why Egyptian natural stone can be a great choice for use in home design and construction:</p>
                        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <div class="bg-white/10 p-6 rounded-xl backdrop-blur-sm">
                                <h3 class="font-semibold text-xl mb-4 text-olive-400">Beauty</h3>
                                <p class="text-stone-300 text-sm mb-0">Egyptian natural stone is renowned for its beauty and unique character. Each piece of natural stone has its own variations in color, pattern, and texture, making it a visually stunning choice for flooring, countertops, walls, and other surfaces in the home.</p>
                            </div>
                            <div class="bg-white/10 p-6 rounded-xl backdrop-blur-sm">
                                <h3 class="font-semibold text-xl mb-4 text-olive-400">Durability</h3>
                                <p class="text-stone-300 text-sm mb-0">Natural stone is incredibly durable and can withstand wear and tear, making it a practical choice for high-traffic areas in the home. Egyptian natural stone, in particular, is known for its strength and longevity.</p>
                            </div>
                            <div class="bg-white/10 p-6 rounded-xl backdrop-blur-sm">
                                <h3 class="font-semibold text-xl mb-4 text-olive-400">Sustainability</h3>
                                <p class="text-stone-300 text-sm mb-0">Natural stone is a sustainable building material, as it is a product of the earth and does not require any additional resources to manufacture. Additionally, many Egyptian natural stone quarries practice sustainable and responsible quarrying practices.</p>
                            </div>
                            <div class="bg-white/10 p-6 rounded-xl backdrop-blur-sm">
                                <h3 class="font-semibold text-xl mb-4 text-olive-400">Value</h3>
                                <p class="text-stone-300 text-sm mb-0">Adding Egyptian natural stone to your home can increase its value and appeal to potential buyers, as it is considered a high-end material that adds a touch of luxury to any space.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-white">
                <div class="ast-container">
                    <div class="max-w-6xl mx-auto transition-all duration-1000 opacity-100 translate-y-0">
                        <h2 class="font-serif text-4xl text-slate-800 text-center mb-12">How to Add Egyptian Natural Stone to Your Space?</h2>
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <div class="border-l-4 border-olive-500 pl-6">
                                    <h3 class="font-semibold text-xl text-slate-800 mb-2">Flooring</h3>
                                    <p class="text-slate-600">Egyptian natural stone is a popular choice for flooring, as it is durable and visually striking. You can opt for a classic look with marble or limestone tiles or add a modern touch with granite or quartzite tiles.</p>
                                </div>
                                <div class="border-l-4 border-olive-500 pl-6">
                                    <h3 class="font-semibold text-xl text-slate-800 mb-2">Countertops</h3>
                                    <p class="text-slate-600">Egyptian natural stone can also be used for countertops, adding a touch of luxury to your kitchen or bathroom. Granite and marble are popular choices for countertops due to their durability and resistance to scratches and heat.</p>
                                </div>
                                <div class="border-l-4 border-olive-500 pl-6">
                                    <h3 class="font-semibold text-xl text-slate-800 mb-2">Walls</h3>
                                    <p class="text-slate-600">Another way to incorporate Egyptian natural stone into your space is by using it for walls. This can be done by creating a feature wall with a textured natural stone veneer or using natural stone tiles to create a backsplash.</p>
                                </div>
                                <div class="border-l-4 border-olive-500 pl-6">
                                    <h3 class="font-semibold text-xl text-slate-800 mb-2">Decorative Accents</h3>
                                    <p class="text-slate-600">Egyptian natural stone can also be used in small doses as decorative accents throughout your space. This could include using natural stone tiles for a fireplace surround or adding a natural stone vase or sculpture as a statement piece.</p>
                                </div>
                            </div>
                            <div class="relative"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/natural-stone-space-fu_dvCDh.jpg" alt="Natural Stone in Your Space" class="rounded-lg shadow-2xl w-full">
                                <div class="absolute -bottom-4 -right-4 w-full h-full border-2 border-olive-500 rounded-lg -z-10"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-stone-100">
                <div class="ast-container">
                    <div class="max-w-6xl mx-auto">
                        <h2 class="font-serif text-4xl text-slate-800 text-center mb-4">About Egyptian Natural Stone</h2>
                        <h3 class="font-serif text-2xl text-olive-600 text-center mb-12">Brief History of Egyptian Stone</h3>
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="relative order-2 lg:order-1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/history-granite-CkDygUWo.jpg" alt="History of Egyptian Stone" class="rounded-lg shadow-2xl w-full">
                                <div class="absolute -bottom-4 -left-4 w-full h-full border-2 border-olive-500 rounded-lg -z-10"></div>
                            </div>
                            <div class="space-y-6 order-1 lg:order-2">
                                <p class="text-slate-600 leading-relaxed">Many of the earliest human civilizations and cultures have been lost to time. This erasure can be attributed to several factors, but a lack of long-lasting building materials is a notable potential cause.</p>
                                <p class="text-slate-600 leading-relaxed">After all, archaeologists studying ancient civilizations typically rely on the remnants of stone structures to learn about people who lived long ago. One of the most extraordinary examples of this principle is Ancient Egypt.</p>
                                <p class="text-slate-600 leading-relaxed">One of the oldest still-standing structures in Egypt is the Pyramid of Meidum. This pyramid was built approximately 4,500 years ago. It consists of heavy stone blocks, many of which are covered in limestone.</p>
                                <p class="text-slate-600 leading-relaxed">Notably, many historians theorize that the dishevelled appearance of the structure may be due to stone repurposing. After all, natural stone is a precious resource for many living within that region.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-white">
                <div class="ast-container">
                    <div class="max-w-6xl mx-auto">
                        <h2 class="font-serif text-4xl text-slate-800 text-center mb-12">Benefits of Natural Stone</h2>
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <p class="text-slate-600 leading-relaxed text-lg">Natural stone has some notable advantages that you'll want to consider, especially if you're planning for an upcoming home renovation or upgrade.</p>
                                <p class="text-slate-600 leading-relaxed text-lg">Natural stone is known for its: <span class="font-semibold text-slate-800">Durability, Attractiveness, Versatility and Value</span></p>
                                <p class="text-slate-600 leading-relaxed text-lg">When you invest in natural stone for your home, you're choosing something that's bound to last longer than synthetic materials. Even better, these materials are likely to be far more attractive than plastics or synthetics.</p>
                                <p class="text-slate-600 leading-relaxed text-lg">Natural stone can also be used in various ways, making it a versatile medium. It's also worth noting that natural stone flooring, landscaping, and household additions could increase your property value.</p>
                            </div>
                            <div class="relative"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/limestone-paving-CZzKXaS7.jpg" alt="Benefits of Natural Stone" class="rounded-lg shadow-2xl w-full">
                                <div class="absolute -bottom-4 -right-4 w-full h-full border-2 border-olive-500 rounded-lg -z-10"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-16 bg-slate-800 text-white">
                <div class="ast-container text-center">
                    <h2 class="font-serif text-4xl mb-6 text-white">Long-Lasting Building Materials</h2>
                    <p class="text-stone-300 text-lg max-w-3xl mx-auto">Egyptian stone is one of the most precious building materials in the world. Notable for its resilient nature and natural beauty, Egyptian stone has quickly become more accessible thanks to high-quality stone suppliers.</p>
                    <p class="text-stone-300 text-lg max-w-3xl mx-auto mt-4">If you've been thinking of renovating your home or starting a new home improvement project, you'll want to consider the benefits of using these long-lasting, natural stone materials.</p>
                </div>
            </section>
            <section class="py-20 bg-white">
                <div class="ast-container">
                    <h2 class="font-serif text-4xl text-slate-800 text-center mb-4">How to Incorporate Natural Stone</h2>
                    <p class="text-slate-600 text-lg text-center max-w-3xl mx-auto mb-16">Now that you're familiar with the types of all-natural stone and its rich history, it's time to discover some of its best at-home applications. You can use natural stone for: Countertops, Flooring, Landscaping, Wall Cladding, Exteriors and Swimming pool surroundings.</p>
                    <div class="max-w-6xl mx-auto mb-20">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <h3 class="font-serif text-3xl text-slate-800">Countertops</h3>
                                <p class="text-slate-600 leading-relaxed">Natural stone countertops tend to last several decades longer than synthetic countertops. They're also rich in colours and silica, drawing the eye and reflecting light. Some of the most popular natural stone countertop options include: Granite countertops, Marble countertops and Limestone countertops</p>
                                <p class="text-slate-600 leading-relaxed">Granite kitchen countertops may be the best option for homeowners that want to invest in a long-lasting, versatile, and colour-rich natural stone option. But if your color scheme is modern black-and-white, you may prefer to install dark Marble countertops.</p>
                            </div>
                            <div class="relative"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/countertops-zvm9cVhN.jpg" alt="Natural Stone Countertops" class="rounded-lg shadow-2xl w-full"></div>
                        </div>
                    </div>
                    <div class="max-w-6xl mx-auto mb-20">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="relative order-2 lg:order-1"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/flooring-Dj70WR9B.jpg" alt="Natural Stone Flooring" class="rounded-lg shadow-2xl w-full"></div>
                            <div class="space-y-6 order-1 lg:order-2">
                                <h3 class="font-serif text-3xl text-slate-800">Flooring</h3>
                                <p class="text-slate-600 leading-relaxed">Modern flooring options vary from shag carpeting to composite hardwoods. But if you're thinking of stripping away your current flooring and replacing it, you'll want to consider natural stone tiles. No matter your color preferences, there's a stone type that's bound to meet your needs. Even better, natural stone flooring can last far longer than carpet, composite wood, or poured resin.</p>
                                <p class="text-slate-600 leading-relaxed">Some of the most popular natural stone floor tiles are granite tiles and marble tiles. These withstand adverse weather and heavy impacts more readily than basalt or limestone tiles.</p>
                            </div>
                        </div>
                    </div>
                    <div class="max-w-6xl mx-auto mb-20">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <h3 class="font-serif text-3xl text-slate-800">Walls</h3>
                                <p class="text-slate-600 leading-relaxed">A natural stone wall could become an attractive way to improve your home's garden or entryway. Over time, this structure could also become a latch point for flowering vines and thick-growing ivy. Stacked stone walls are reminiscent of Britain's most ancient and beloved structures- it's bound to give your outdoor areas a unique historical look.</p>
                                <p class="text-slate-600 leading-relaxed">Stone walls are also a fantastic alternative to chemical-rich composite materials. And unlike composite wooden or plastic fences, stone can easily last a lifetime (or more)!</p>
                            </div>
                            <div class="relative"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/walls-C1fbeHja.jpg" alt="Natural Stone Walls" class="rounded-lg shadow-2xl w-full"></div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-stone-100">
                <div class="ast-container">
                    <div class="max-w-4xl mx-auto">
                        <h3 class="font-serif text-3xl text-slate-800 mb-8 text-center">Exteriors</h3>
                        <p class="text-slate-600 leading-relaxed text-lg text-center mb-12">Large flagstone made of granite, limestone, or marble could significantly improve the look and durability of your home's exteriors. Natural stone for house exteriors is readily available and surprisingly easy to install. If you're not quite sure how to incorporate Egyptian stone into your home, be sure to browse some of these natural stone design ideas.</p>
                        <h3 class="font-serif text-3xl text-slate-800 mb-8 text-center">Landscaping</h3>
                        <div class="space-y-6 text-slate-600 leading-relaxed text-lg">
                            <p>Your garden should be your outdoor haven where you are able to treat and entertain guests. Whether you've worked hard to create a green, plant-covered paradise or an orderly patio area, stone can enrich this outdoor space. You can use natural stone landscaping materials (like natural stone border edging) to bring the garden back to life and add an intriguing aspect to the area.</p>
                            <p>Natural stone pavers and granite paving can give your garden a whimsical feel and look. But you can also use natural stone patio pavers to add the feel of durability to your yard. Undoubtedly, natural stone steps offer a resilient and long-lasting alternative to poured concrete steps and stairways.</p>
                            <p>To make the wintertime a little more bearable, you might always want to consider building a natural stone fireplace in your garden! Of course, ornate fireplace mantels are best kept in the backyard or living room.</p>
                            <p>Still, not all landscaping is reserved for your back garden. You can also use natural stones like black basalt to pave your driveway or add a delicate mystique to your entryway path. Additionally, crushed granite gravel is an excellent option for gardens and walkways, as these tiny rocks add stability to each step. Additionally, gravel is also highly decorative, making it an attractive choice for homeowners.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-white">
                <div class="ast-container">
                    <div class="max-w-6xl mx-auto">
                        <div class="grid lg:grid-cols-2 gap-12 items-center">
                            <div class="space-y-6">
                                <h3 class="font-serif text-3xl text-slate-800">Swimming Pool Surroundings and Pool Coping</h3>
                                <p class="text-slate-600 leading-relaxed">Natural stone can significantly improve the look and feel of your swimming pool's surroundings. Placing large granite pavers or marble slabs around the edge of your pool (called swimming pool coping) is an excellent way to make your pool area more refined, safe, stable, and attractive.</p>
                                <p class="text-slate-600 leading-relaxed">Mica and basalt stones are also a great choice for swimming pool borders. That said, basalt can be slippery when wet. As such, it's often better to invest in stones like granite, mica, acid etched limestone or unpolished marble.</p>
                            </div>
                            <div class="relative"><img src="<?php echo get_stylesheet_directory_uri(); ?>/frontend/assets/pool-GZC0i-kS.jpg" alt="Swimming Pool Surroundings" class="rounded-lg shadow-2xl w-full">
                                <div class="absolute -bottom-4 -right-4 w-full h-full border-2 border-olive-500 rounded-lg -z-10"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-20 bg-slate-800 text-white">
                <div class="ast-container">
                    <div class="max-w-4xl mx-auto text-center">
                        <h2 class="font-serif text-4xl mb-8 text-white">Select and Invest in Egyptian Stone</h2>
                        <p class="text-stone-300 text-lg mb-6">Since ancient times, people have been building monuments, palaces, and homes with natural stone. Many of these structures continue to stand today making them some of the oldest edifices in the world!</p>
                        <p class="text-stone-300 text-lg mb-6">There are several types of Egyptian stone, including limestone, basalt, and granite. These materials are naturally beautiful and incredibly durable, making them a top-notch option for home interiors and exteriors.</p>
                        <p class="text-stone-300 text-lg mb-10">If you've been searching for a reputable natural stone supplier, don't hesitate to contact us today for more information. We look forward to answering any questions you may have about natural stone.</p><a class="inline-block bg-olive-600 hover:bg-olive-700 text-white px-10 py-4 rounded-lg font-semibold transition-colors text-lg hover:text-white" href="<?php echo ($contact_page = get_page_by_path('contact-us')) ? get_permalink($contact_page->ID) : '#'; ?>">Contact Us Today</a>
                    </div>
                </div>
            </section>
        </div>
    </main>

</div><!-- #primary -->


<?php get_footer(); ?>