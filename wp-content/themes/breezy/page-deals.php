<?php /* Template Name: Deals */ ?>

<?php
// Gets the header template from /twentytwenty/header.php
get_header();
?>

<div class="main-img">
    <?php get_template_part('template-parts/header/header', 'image'); ?>
</div>

<h1 class="about-header">Why rural communities are switching over to us</h1>
<div class="about-posts">
<?php get_template_part( 'template-parts/special/special', 'blogs' ); ?>
</div>


<div class="address-finder">
    <?php get_template_part('template-parts/address/address', 'finder'); ?>
</div>



<div class="deals-contract">
    <?php get_template_part('template-parts/deals/deals', 'contact'); ?>
</div>



<div class="footer">
    <?php get_template_part('template-parts/footer/footer', 'info'); ?>
</div>