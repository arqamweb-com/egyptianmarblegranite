<a href="<?php the_permalink(); ?>">
    <div class="group relative overflow-hidden rounded-lg shadow-lg aspect-square">
        <?php if (has_post_thumbnail()) : ?>

            <?php the_post_thumbnail('large', [
                'class' => 'w-full h-full object-cover transition-transform duration-500 group-hover:scale-110',
                'title' => get_the_title(),
                'alt'   => get_the_title(),
            ]); ?>

        <?php else : ?>

            <img src="https://placehold.co/480x288" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">

        <?php endif; ?>


        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
        <div class="absolute bottom-0 left-0 right-0 p-4 text-white transform translate-y-full group-hover:translate-y-0 transition-transform duration-300">
            <h3 class="font-medium text-sm text-center text-white mb-0"><?php the_title(); ?></h3>
        </div>
    </div>
</a>