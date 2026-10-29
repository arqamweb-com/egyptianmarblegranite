<a class="group relative overflow-hidden rounded-lg shadow-lg" href="<?php the_permalink(); ?>">
    <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail('large', [
            'class' => 'w-full h-72 object-cover group-hover:scale-105 transition-transform duration-500',
            'title' => get_the_title(),
            'alt'   => get_the_title(),
        ]); ?>
    <?php else : ?>
        <img
            src="https://placehold.co/480x288"
            alt="<?php the_title_attribute(); ?>"
            class="w-full h-72 object-cover">
    <?php endif; ?>

    <div class="absolute inset-0 bg-gradient-to-t from-primary/80 to-transparent flex items-end justify-center pb-6">
        <h3 class="text-xl font-serif font-semibold text-primary-foreground text-center"><?php the_title(); ?></h3>
    </div>
</a>