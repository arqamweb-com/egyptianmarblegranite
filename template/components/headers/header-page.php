<section class="relative min-h-[70vh] flex items-center justify-center overflow-hidden">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>);">
        <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-black/40 to-black/70"></div>
    </div>
    <div class="relative z-10 text-center px-4 max-w-5xl mx-auto transition-all duration-1000 opacity-100 translate-y-0">
        <span class="inline-block px-4 py-2 bg-primary/20 backdrop-blur-sm rounded-full text-primary-foreground text-sm font-medium mb-6 border border-solid" style="border-color:#0f172a4d;">Egyptian Stone Lasts Forever</span>
        <h1 class="text-4xl md:text-6xl lg:text-7xl font-serif text-white mb-6 leading-tight"><?php the_title(); ?></h1>
        <div class="emg-pro-breadcrumb"><?php echo do_shortcode('[rank_math_breadcrumb]'); ?></div>
        <div class="text-lg md:text-xl text-white/90 max-w-3xl mx-auto leading-relaxed"><?php the_excerpt(); ?></div>
    </div>
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce">
        <div class="w-6 h-10 border-2 border-solid border-white/50 rounded-full flex justify-center">
            <div class="w-1 h-3 bg-white/70 rounded-full mt-2 animate-pulse"></div>
        </div>
    </div>
</section>