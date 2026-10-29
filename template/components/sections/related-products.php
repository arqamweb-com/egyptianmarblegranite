<?php $category = get_query_var('category', null); ?>
<section class="py-16 md:py-24 bg-background">
    <div class="ast-container">
        <h2 class="text-3xl md:text-4xl font-serif font-bold text-foreground text-center mb-8">Find More Materials Here</h2>
        <div class="w-16 h-1 bg-primary mx-auto mb-12"></div>
        <?php

        set_query_var('products_category', $category);
        set_query_var('per_paged', 4);
        set_query_var('style', 'style-2');
        set_query_var('grid_classes', 'md:grid-cols-4');
        set_query_var('order', 'rand');
        get_template_part('/template/products/custom-loop', 'products');

        ?>
    </div>
</section>