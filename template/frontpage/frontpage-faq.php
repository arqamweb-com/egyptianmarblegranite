<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 transition-all duration-700 opacity-100 translate-y-0">
            <div class="inline-flex items-center justify-center bg-olive-100 text-olive-700 px-4 py-1.5 rounded-full text-sm font-semibold mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-circle-help h-4 w-4 mr-2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                    <path d="M12 17h.01"></path>
                </svg>
                Quick Answers
            </div>
            <h2 class="font-serif text-4xl lg:text-5xl font-bold text-slate-800 mb-4">Frequently Asked Questions</h2>
            <p class="text-lg text-slate-600 max-w-3xl mx-auto">Quick answers about our stone, quality, and
                ordering.</p>
        </div>
        <div class="max-w-4xl mx-auto transition-all duration-700 delay-150 opacity-100 translate-y-0">


            <?php
            set_query_var('faqs_category', 'home');
            get_template_part('/template/faqs/custom-loop', 'faqs');
            ?>


            <div class="text-center mt-10">
                <a class="inline-flex items-center justify-center gap-2 whitespace-nowrap rounded-md ring-offset-background focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:pointer-events-none disabled:opacity-50 [&amp;_svg]:pointer-events-none [&amp;_svg]:size-4 [&amp;_svg]:shrink-0 h-10 bg-olive-600 hover:bg-olive-700 text-white px-8 py-3 text-lg font-semibold transition-colors hover:text-white"
                   href="<?php echo ($faqs_page = get_page_by_path('faqs')) ? get_permalink($faqs_page->ID) : '#'; ?>">View All FAQs</a>
            </div>
        </div>
    </div>
</section>