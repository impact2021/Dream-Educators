<?php
/**
 * Registers the 'dream_educator' Custom Post Type and its meta fields.
 *
 * @package DreamEducators
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Register the Custom Post Type.
 */
function de_register_cpt() {
    $labels = array(
        'name'               => __( 'Educators', 'dream-educators' ),
        'singular_name'      => __( 'Educator', 'dream-educators' ),
        'add_new'            => __( 'Add New', 'dream-educators' ),
        'add_new_item'       => __( 'Add New Educator', 'dream-educators' ),
        'edit_item'          => __( 'Edit Educator', 'dream-educators' ),
        'new_item'           => __( 'New Educator', 'dream-educators' ),
        'view_item'          => __( 'View Educator', 'dream-educators' ),
        'search_items'       => __( 'Search Educators', 'dream-educators' ),
        'not_found'          => __( 'No educators found.', 'dream-educators' ),
        'not_found_in_trash' => __( 'No educators found in Trash.', 'dream-educators' ),
        'menu_name'          => __( 'Educators', 'dream-educators' ),
    );

    $args = array(
        'labels'       => $labels,
        'public'       => false,
        'show_ui'      => true,
        'show_in_menu' => true,
        'menu_icon'    => 'dashicons-groups',
        'supports'     => array( 'title' ),
        'has_archive'  => false,
        'rewrite'      => false,
        'capability_type' => 'post',
    );

    register_post_type( 'dream_educator', $args );
}
add_action( 'init', 'de_register_cpt' );

/**
 * Register meta box for educator details.
 */
function de_register_meta_box() {
    add_meta_box(
        'de_educator_details',
        __( 'Educator Details', 'dream-educators' ),
        'de_render_meta_box',
        'dream_educator',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'de_register_meta_box' );

/**
 * Render the meta box HTML.
 *
 * @param WP_Post $post Current post object.
 */
function de_render_meta_box( $post ) {
    wp_nonce_field( 'de_save_educator', 'de_educator_nonce' );

    $location  = get_post_meta( $post->ID, '_de_location', true );
    $image_url = get_post_meta( $post->ID, '_de_image_url', true );
    $bio       = get_post_meta( $post->ID, '_de_bio', true );
    ?>
    <table class="form-table" style="width:100%;">
        <tr>
            <th scope="row" style="width:140px;">
                <label for="de_location"><?php esc_html_e( 'Location', 'dream-educators' ); ?></label>
            </th>
            <td>
                <input
                    type="text"
                    id="de_location"
                    name="de_location"
                    value="<?php echo esc_attr( $location ); ?>"
                    class="regular-text"
                    placeholder="e.g. Located in Stanmore Bay"
                />
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="de_image_url"><?php esc_html_e( 'Image URL', 'dream-educators' ); ?></label>
            </th>
            <td>
                <input
                    type="url"
                    id="de_image_url"
                    name="de_image_url"
                    value="<?php echo esc_attr( $image_url ); ?>"
                    class="large-text"
                    placeholder="https://example.com/image.jpg"
                />
                <?php if ( $image_url ) : ?>
                    <br><img src="<?php echo esc_url( $image_url ); ?>" style="margin-top:8px;max-height:120px;border-radius:4px;" alt="<?php esc_attr_e( 'Educator preview', 'dream-educators' ); ?>">
                <?php endif; ?>
                <p class="description"><?php esc_html_e( 'Full URL to the educator\'s photo.', 'dream-educators' ); ?></p>
            </td>
        </tr>
        <tr>
            <th scope="row">
                <label for="de_bio"><?php esc_html_e( 'Bio', 'dream-educators' ); ?></label>
            </th>
            <td>
                <textarea
                    id="de_bio"
                    name="de_bio"
                    rows="10"
                    class="large-text"
                ><?php echo esc_textarea( $bio ); ?></textarea>
                <p class="description"><?php esc_html_e( 'Full biography displayed in the popup.', 'dream-educators' ); ?></p>
            </td>
        </tr>
    </table>
    <?php
}

/**
 * Save the meta box data.
 *
 * @param int $post_id Post ID.
 */
function de_save_meta_box( $post_id ) {
    if ( ! isset( $_POST['de_educator_nonce'] ) ) {
        return;
    }
    if ( ! wp_verify_nonce( sanitize_key( $_POST['de_educator_nonce'] ), 'de_save_educator' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    if ( isset( $_POST['de_location'] ) ) {
        update_post_meta( $post_id, '_de_location', sanitize_text_field( wp_unslash( $_POST['de_location'] ) ) );
    }
    if ( isset( $_POST['de_image_url'] ) ) {
        update_post_meta( $post_id, '_de_image_url', esc_url_raw( wp_unslash( $_POST['de_image_url'] ) ) );
    }
    if ( isset( $_POST['de_bio'] ) ) {
        update_post_meta( $post_id, '_de_bio', sanitize_textarea_field( wp_unslash( $_POST['de_bio'] ) ) );
    }
}
add_action( 'save_post_dream_educator', 'de_save_meta_box' );
