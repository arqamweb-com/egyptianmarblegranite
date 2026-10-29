<?php
$per_paged = get_query_var('per_paged') ?: -1;
$products_cat   = get_query_var('products_category');
$grid_classes = get_query_var('grid_classes') ?: 'md:grid-cols-3';
$style = get_query_var('style') ?: 'style-1';
$order = get_query_var('order') ?: 'ASC';

$args = [
    'post_type'      => 'emg-product',
    'posts_per_page' => $per_paged,
];

if ($order === 'rand') {
    $args['orderby'] = 'rand';
} else {
    $args['orderby'] = 'date';
    $args['order']   = 'ASC';
}

if (!empty($products_cat)) {
    $args['tax_query'] = [
        [
            'taxonomy' => 'product-category',
            'field'    => 'name',
            'terms'    => $products_cat,
        ]
    ];
}

$q = new WP_Query($args);
?>

<?php if ($q->have_posts()) : $i = 0; ?>


    <div class="grid grid-cols-1 <?php echo $grid_classes; ?> gap-8 mb-12">

        <?php
        while ($q->have_posts()) : $q->the_post();
            $i++;



            get_template_part('/template/content/products/styles/product', $style);

        endwhile; ?>

        <?php wp_reset_postdata(); ?>
    </div>

<?php else : ?>
    <div class="col-span-full text-center text-muted-foreground mb-4">
        No products are currently available.
    </div>
<?php endif; ?>