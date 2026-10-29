<div class="overflow-hidden rounded-lg shadow-md bg-card transition-all duration-700 opacity-100 translate-y-0" style="transition-delay: 0ms;">

    <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail('large', [
                'class' => 'w-full h-48 object-cover hover:scale-105 transition-transform duration-500',
                'title' => get_the_title(),
                'alt'   => get_the_title(),
            ]); ?>
        </a>
    <?php else : ?>
        <a href="<?php the_permalink(); ?>">
            <img src="https://placehold.co/480x288" alt="<?php the_title_attribute(); ?>" class="w-full h-72 object-cover">
        </a>
    <?php endif; ?>

    <div class="p-4 text-center">
        <h3 class="text-sm text-muted-foreground mb-0">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>
    </div>
</div>