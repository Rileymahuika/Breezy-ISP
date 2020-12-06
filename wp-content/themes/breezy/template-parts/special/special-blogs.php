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