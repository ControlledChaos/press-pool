<?php

/**
 * Search Loop
 *
 * @package bbPress
 * @subpackage Theme
*/

?>

<?php do_action( 'bbp_template_before_search_results_loop' ); ?>

<ul id="bbp-search-results" class="bbp-topics1 bs-item-list bs-forums-items list-view">
	
	<li class="bs-item-wrap bs-header-item align-items-center no-hover-effect">
		<div class="flex-1"><h2 class="bs-section-title"><?php _e( 'Search Results', 'press-pool' ); ?></h2></div>
	</li>

	<?php while ( bbp_search_results() ) : bbp_the_search_result(); ?>
		<li>
			<?php bbp_get_template_part( 'loop', 'search-' . get_post_type() ); ?>
		</li>
	<?php endwhile; ?>

</ul><!-- #bbp-search-results -->

<?php do_action( 'bbp_template_after_search_results_loop' ); ?>
