<?php
/**
 * Handles the [dream_educators] shortcode and its assets.
 *
 * @package DreamEducators
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Enqueue front-end assets.
 */
function de_enqueue_assets() {
    wp_register_style(
        'dream-educators',
        DE_PLUGIN_URL . 'assets/css/dream-educators.css',
        array(),
        DE_PLUGIN_VERSION
    );

    wp_register_script(
        'dream-educators',
        DE_PLUGIN_URL . 'assets/js/dream-educators.js',
        array(),
        DE_PLUGIN_VERSION,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'de_enqueue_assets' );

/**
 * Register the [dream_educators] shortcode.
 */
function de_register_shortcode() {
    add_shortcode( 'dream_educators', 'de_shortcode_render' );
}
add_action( 'init', 'de_register_shortcode' );

/**
 * Render the educator grid shortcode.
 *
 * @return string HTML output.
 */
function de_shortcode_render() {
    wp_enqueue_style( 'dream-educators' );
    wp_enqueue_script( 'dream-educators' );

    $query = new WP_Query(
        array(
            'post_type'      => 'dream_educator',
            'post_status'    => 'publish',
            'posts_per_page' => -1,
            'orderby'        => 'menu_order title',
            'order'          => 'ASC',
        )
    );

    if ( ! $query->have_posts() ) {
        return '<p>' . esc_html__( 'No educators found.', 'dream-educators' ) . '</p>';
    }

    $modal_data = array();
    $cards_html = '';

    while ( $query->have_posts() ) {
        $query->the_post();

        $post_id   = get_the_ID();
        $name      = get_the_title();
        $location  = get_post_meta( $post_id, '_de_location', true );
        $image_url = get_post_meta( $post_id, '_de_image_url', true );
        $bio       = get_post_meta( $post_id, '_de_bio', true );

        $modal_data[ $post_id ] = array(
            'name'     => $name,
            'location' => $location,
            'image'    => $image_url,
            'bio'      => $bio,
        );

        $img_html = '';
        if ( $image_url ) {
            $img_html = '<img src="' . esc_url( $image_url ) . '" alt="' . esc_attr( $name ) . '" loading="lazy">';
        }

        $location_html = '';
        if ( $location ) {
            $location_html = '<p class="educator-location">' . esc_html( $location ) . '</p>';
        }

        $cards_html .= sprintf(
            '<div class="educator-card" role="button" tabindex="0" aria-haspopup="dialog" data-educator-id="%1$s">%2$s<div class="educator-card-overlay"><p class="educator-name">%3$s</p>%4$s</div></div>',
            esc_attr( $post_id ),
            $img_html,
            esc_html( $name ),
            $location_html
        );
    }

    wp_reset_postdata();

    wp_add_inline_script(
        'dream-educators',
        'var deModalData = ' . wp_json_encode( $modal_data ) . ';',
        'before'
    );

    $modal_html = '
<div id="de-modal-overlay" class="de-modal-overlay" role="dialog" aria-modal="true" aria-labelledby="de-modal-name">
    <div class="de-modal-box">
        <button id="de-modal-close" class="de-modal-close" aria-label="' . esc_attr__( 'Close', 'dream-educators' ) . '">&times;</button>
        <div class="de-modal-header">
            <img id="de-modal-img" src="" alt="" style="display:none;">
            <div class="de-modal-header-info">
                <h2 id="de-modal-name"></h2>
                <p id="de-modal-location" class="de-modal-location"></p>
            </div>
        </div>
        <div id="de-modal-bio" class="de-modal-bio"></div>
    </div>
</div>';

    return '<div class="dream-educators-grid">' . $cards_html . '</div>' . $modal_html;
}
