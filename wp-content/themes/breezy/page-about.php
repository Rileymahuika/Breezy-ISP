<?php /* Template Name: About */ ?>

<?php get_header(); ?>



<?php
$args = array(
    'post_type' => 'custom_value',
    'post_count' => 8
);

$custom_query = new WP_Query($args);

?>

<div class="values-flex">
    <?php
    if ($custom_query->have_posts()) { // you never checked to see if no posts were found
        while ($custom_query->have_posts()) { // alt style syntax doesn't work with most IDEs
            $custom_query->the_post(); // individual statement should be on individual line
    ?>
            <div class="value-container">
                <div class="value-single">
                    <?php the_post_thumbnail(); ?>
                    <h2 class="value-name"> <?php the_title() ?></h2>
                    <p class="value-content" roll="main"><?php the_content() ?></p>
                </div>
            </div>
    <?php
        }
    } else {
        echo '<p>no posts found</p>';
    }
    ?>
</div>

<div class="address-finder">
    <?php get_template_part('template-parts/address/address', 'finder'); ?>
</div>


<div class="contact">
    <?php get_template_part('template-parts/contact/contact', 'form'); ?>
</div>

<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
$twentytwenty_unique_id = twentytwenty_unique_id( 'search-form-' );

$twentytwenty_aria_label = ! empty( $args['label'] ) ? 'aria-label="' . esc_attr( $args['label'] ) . '"' : '';
?>
<form role="search" <?php echo $twentytwenty_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="<?php echo esc_attr( $twentytwenty_unique_id ); ?>">
		<span class="screen-reader-text"><?php _e( 'Search for:', 'twentytwenty' ); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations ?></span>
		<input type="search" id="<?php echo esc_attr( $twentytwenty_unique_id ); ?>" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentytwenty' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
	</label>
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'twentytwenty' ); ?>" />
</form>


<div class="footer">
    <?php get_template_part('template-parts/footer/footer', 'info'); ?>
</div>