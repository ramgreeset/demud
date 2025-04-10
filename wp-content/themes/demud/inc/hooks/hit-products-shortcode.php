<?php
add_shortcode('content-hit-products', 'hit_products');
function hit_products($atts)
{
    global $woocommerce_loop, $woocommerce;

    extract(shortcode_atts(array(
        'limit' => '12',
        'orderby' => 'date',
        'order' => 'DESC'
    ), $atts));

    $args = array(
        'post_status' => 'publish',
        'post_type' => 'product',
        'orderby' => $orderby,
        'order' => $order,
        'posts_per_page' => $limit,
    );

    ob_start();

    $products = new WP_Query($args);

    if ($products->have_posts()) : ?>

                <?php while ($products->have_posts()) : $products->the_post(); ?>

                    <?php wc_get_template_part('content', 'hit-products'); ?>

                <?php endwhile; // end of the loop. ?>
    <?php endif;

    wp_reset_postdata();

    return ob_get_clean();
}
