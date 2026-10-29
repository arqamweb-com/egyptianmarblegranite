<?php
$per_paged = get_query_var('per_paged') ?: -1;
$faq_cat   = get_query_var('faqs_category');

$args = [
    'post_type'      => 'faq',
    'posts_per_page' => $per_paged,
    'orderby'        => 'date',
    'order'          => 'ASC',
];

// لو فيه category
if (!empty($faq_cat)) {
    $args['tax_query'] = [
        [
            'taxonomy' => 'faqs_category', // اسم taxonomy
            'field'    => 'slug',          // slug أو term_id
            'terms'    => $faq_cat,
        ]
    ];
}

$q = new WP_Query($args);
?>

<?php if ($q->have_posts()) : $i = 0; ?>

    <div id="accordion-collapse"
        data-accordion="collapse"
        class="rounded-base border border-default overflow-hidden shadow-xs">

        <?php while ($q->have_posts()) : $q->the_post();
            $i++; ?>

            <div class="bg-secondary/30 rounded-xl border border-solid border-border mb-4">
                <h2 id="accordion-collapse-heading-<?php echo esc_attr($i); ?>" style="margin-bottom: 0;">
                    <style>
                        .accordion-button:hover,
                        .accordion-button:focus {
                            color: #000000;
                        }
                    </style>
                    <button type="button"
                        class="accordion-button flex items-center justify-between w-full p-5 font-medium text-base
                           bg-secondary/30 hover:bg-secondary/30 rounded-xl px-6 gap-3
                           hover:border-transparent focus:bg-secondary/30 text-black hover:underline"
                        data-accordion-target="#accordion-collapse-body-<?php echo esc_attr($i); ?>"
                        aria-expanded="false"
                        aria-controls="accordion-collapse-body-<?php echo esc_attr($i); ?>">

                        <span><?php the_title(); ?></span>

                        <svg data-accordion-icon class="w-5 h-5 rotate-180 shrink-0"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                d="m5 15 7-7 7 7" />
                        </svg>
                    </button>
                </h2>

                <div id="accordion-collapse-body-<?php echo esc_attr($i); ?>"
                    class="hidden border-b-default border-x-0 border-t-0"
                    aria-labelledby="accordion-collapse-heading-<?php echo esc_attr($i); ?>">

                    <div class="p-4 md:p-5 text-body leading-relaxed">
                        <?php the_content(); ?>
                    </div>

                </div>

            </div>

        <?php endwhile; ?>

    </div>

    <?php wp_reset_postdata(); ?>

<?php else : ?>
    <div class="col-span-full text-center text-muted-foreground mb-4">
        No faqs are currently available.
    </div>
<?php endif; ?>