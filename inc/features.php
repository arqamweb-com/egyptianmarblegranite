<?php

/**
 * Remove Flex in Container
 */
add_filter('astra_apply_flex_based_css', '__return_false');

/**
 * Add Svg To Media Library
 */

add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {
    $filetype = wp_check_filetype($filename, $mimes);
    return [
        'ext' => $filetype['ext'],
        'type' => $filetype['type'],
        'proper_filename' => $data['proper_filename']
    ];
}, 10, 4);

function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function fix_svg()
{
    echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
}
add_action('admin_head', 'fix_svg');


/**
 * Get Page Link by Slug
 */
function page_link_by_slug($slug)
{
    $page = get_page_by_path($slug);
    return $page ? get_permalink($page->ID) : '#';
}

/**
 * Shortcode: EMG Contact Info
 */
function emg_contact_info_shortcode()
{
    ob_start(); ?>
    <div class="flex items-center space-x-4">
        <span class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone h-4 w-4 mr-1">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
            </svg>
            00201000390999
        </span>
        <span class="hidden sm:flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone h-4 w-4 mr-1">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
            </svg>
            002-02 230 55069
        </span>
        <span class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail h-4 w-4 mr-1">
                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
            </svg>
            <!--email_off--><a href="mailto:sales@egyptianmarblegranite.com">sales@egyptianmarblegranite.com</a><!--/email_off-->
        </span>
    </div>
<?php
    return ob_get_clean();
}
add_shortcode('emg_contact_info', 'emg_contact_info_shortcode');



/**
 * ======================================
 * Register Custom Post & Taxonomy: Product Category
 * ======================================
 */
add_action('init', function () {

    /**
     * Register CPT: emg-product
     */
    register_post_type('emg-product', [
        'label'               => 'EMG Products',
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_rest'        => true,
        'rewrite'             => [
            'slug'       => 'product',
            'with_front' => false,
        ], // مهم
        'supports'            => ['title', 'editor', 'thumbnail'],
    ]);

    /**
     * Register Taxonomy: product-category
     */
    register_taxonomy('product-category', 'emg-product', [
        'label'        => 'Product Categories',
        'hierarchical' => true,
        'public'       => true,
        'show_ui'      => true,
        'show_in_rest' => true,
        'rewrite'      => [
            'slug'       => 'product-category',
            'with_front' => true,
        ],
    ]);


    /**
     * ======================================
     * Rewrite Rule
     * ======================================
     */
    // single product under category
    add_rewrite_rule(
        '^(?!product-category/)([^/]+)/([^/]+)/?$',
        'index.php?post_type=emg-product&name=$matches[2]',
        'top'
    );
});


/**
 * ======================================
 * Helper: احصل على Parent Category فقط
 * ======================================
 */
function emg_get_primary_parent_category($post_id)
{

    // 1) Primary من ACF
    $primary = get_field('primary_emg_category', $post_id);

    if ($primary && isset($primary->term_id)) {

        // لو Child → هات الـ Parent
        if ($primary->parent) {
            return get_term($primary->parent, 'product-category');
        }

        // لو Parent
        return $primary;
    }

    // 2) Fallback: أول Category
    $terms = get_the_terms($post_id, 'product-category');
    if (!empty($terms) && !is_wp_error($terms)) {

        $term = $terms[0];

        if ($term->parent) {
            return get_term($term->parent, 'product-category');
        }

        return $term;
    }

    return false;
}

/**
 * ======================================
 * Auto-Sync Primary من أول Category
 * ======================================
 */
add_action('save_post_emg-product', function ($post_id) {

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (wp_is_post_revision($post_id)) return;

    if (get_field('primary_emg_category', $post_id)) return;

    $terms = get_the_terms($post_id, 'product-category');
    if (!empty($terms) && !is_wp_error($terms)) {
        update_field('primary_emg_category', $terms[0], $post_id);
    }
}, 5);

/**
 * ======================================
 * Permalink: /PARENT-category/product
 * ======================================
 */
add_filter('post_type_link', function ($permalink, $post) {

    if ($post->post_type !== 'emg-product') return $permalink;

    $term = emg_get_primary_parent_category($post->ID);

    if ($term) {
        return home_url('/' . $term->slug . '/' . $post->post_name . '/');
    }

    return home_url('/' . $post->post_name . '/');
}, 10, 2);

/**
 * ======================================
 * Canonical + 301 Redirect
 * ======================================
 */
add_action('template_redirect', function () {

    if (!is_singular('emg-product')) return;

    global $post;

    $term = emg_get_primary_parent_category($post->ID);

    $correct_url = $term
        ? home_url('/' . $term->slug . '/' . $post->post_name . '/')
        : home_url('/' . $post->post_name . '/');

    $current_url = home_url(add_query_arg([], $GLOBALS['wp']->request)) . '/';

    if (trailingslashit($current_url) !== trailingslashit($correct_url)) {
        wp_redirect($correct_url, 301);
        exit;
    }

    add_action('wp_head', function () use ($correct_url) {
        echo '<link rel="canonical" href="' . esc_url($correct_url) . '">' . PHP_EOL;
    });
});
