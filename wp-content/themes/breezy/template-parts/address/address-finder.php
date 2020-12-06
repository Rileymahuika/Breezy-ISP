
	<div class="addressfinder">
		<h2 class="searchbar-header">Check if we can connect you to Breezy</h2>
		<form action="<?php echo site_url('/'); ?>" method="get">
			<label class="searchform-text" for="search" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"></label>
			<input class="searchform-boxtext" type="text" name="s" id="search" placeholder="Search to see if we can connect you" value="<?php the_search_query(); ?>" />
			<input class="searchform-boxtext" type="image" alt="Search" src="<?php bloginfo('template_url'); ?>/assets/uploads/search.png" />
		</form>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		                        <div id="post-<?php the_ID(); ?>" class="posts">
                            <article class="searchform-results-flex" >
							<h5 class="searchform-results-title">If your address shows after searching we can connect you to:</h5>
                                <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>

                            </article><!-- #post -->
                        </div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>