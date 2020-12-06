<?php
$args = array(
    'post_type' => 'custom_address',
    'posts_per_page' => '1'
);

$custom_query = new WP_Query($args);

?>


<?php
/* Template Name: Custom Search */
get_header(); ?>
<div class="contentarea">

    <?php
    if ($custom_query->have_posts()) { // you never checked to see if no posts were found
        while ($custom_query->have_posts()) { // alt style syntax doesn't work with most IDEs
            $custom_query->the_post(); // individual statement should be on individual line
    ?>

            <div id="content" class="content_right">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                        <div id="post-<?php the_ID(); ?>" class="posts">
                            <article>
                                <h5>If your address shows we can connect you</h5>
                                <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
                                <p></p>
                                <p><a href="<?php the_permalink(); ?>">Read More</a></p>

                            </article><!-- #post -->
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

        <?php
        }
    } else {
        echo '<p>no posts found</p>';
    }
        ?>

        <div class="addressfinder">
        <h2 class="searchbar-header">Check if we can connect you to Breezy</h2>
            <form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
            <label class="searchform-text" for="search"></label>
                <input  type="text" name="s" placeholder="Search Products" />
                
                <input type="submit" alt="Search" value="Search" />
            </form>
        </div>




            </div><!-- content -->
</div><!-- contentarea -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
