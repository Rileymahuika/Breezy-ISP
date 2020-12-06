<?php
get_header();
?>

<main id="site-content" role="main">




</main><!-- #site-content -->



<div class="deals-contract">
        <?php get_template_part('template-parts/deals/deals', 'contractsingle'); ?>
	</div>

	<div class="address-finder">
	<?php get_template_part('template-parts/address/address', 'finder'); ?>
</div>
	
<div class="footer">
	<?php get_template_part('template-parts/footer/footer', 'info'); ?>
</div>