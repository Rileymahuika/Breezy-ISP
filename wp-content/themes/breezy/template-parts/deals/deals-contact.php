<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

<?php
$args = array(
    'post_type' => 'custom_plan',
    'post_count' => 6
);

$custom_query = new WP_Query($args);

?>

<div class="plans-flex">
    <div class="plans-header">
        <h3 class="plans-name">Why Breezy?</h3>
        <p class="plans-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam ornare est eu facilisis tristique. Mauris tortor odio, fermentum eu velit eu, varius pellentesque ante. Proin auctor sagittis magna auctor malesuada. Proin ornare.</p>
    </div>
    <?php
    if ($custom_query->have_posts()) { // you never checked to see if no posts were found
        while ($custom_query->have_posts()) { // alt style syntax doesn't work with most IDEs
            $custom_query->the_post(); // individual statement should be on individual line
    ?>
            <div class="plan-box">
                <div class="plan-title">
                    <h2 class="plan-name"> <?php the_title() ?></h2>
                    <h6 class="plan-contract">12 MONTH CONTRACT</h6>
                </div>

                <div class="plan-info">
                    <h2 class="plan-price">$79.99*</h2>
                    <h6 class="plan-dates">Per Month</h6>
                    <div class="plan-deals">
                        <?php the_content() ?>
                    </div><a href="<?php the_permalink(); ?>">
                        <button class="plan-button">Learn More</button>
                    </a>
                </div>
            </div>
    <?php
        }
    } else {
        echo '<p>no posts found</p>';
    }
    ?>
</div>