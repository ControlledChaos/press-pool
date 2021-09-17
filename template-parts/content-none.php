<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package BuddyBoss_Theme
 */
?>

<section class="no-results not-found text-center">
	<header class="page-header">
		<h1 class="page-title"><?php esc_html_e( 'No results found!', 'press-pool' ); ?></h1>
		<?php if ( is_search() ) { ?>
			<p class="desc"><?php esc_html_e( 'Sorry, but nothing matched your search terms.', 'press-pool' ); ?></p>
		<?php } else { ?>
			<p class="desc"><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for.', 'press-pool' ); ?></p>
		<?php } ?>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php
				printf(
				wp_kses(
				/* translators: 1: link to WP admin new post page. */
				__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'press-pool' ), array(
					'a' => array(
						'href' => array(),
					),
				)
				), esc_url( admin_url( 'post-new.php' ) )
				);
				?></p>

		<?php elseif ( is_search() ) : ?>
			<?php echo '<img class="no-results-img" src="'. get_template_directory_uri().'/assets/images/svg/no-results.svg" alt="' . __( 'No Results', 'press-pool' ) . '" />'; ?>
			<?php
			get_search_form();

		else :
			?>
			<?php echo '<img class="no-results-img" src="'. get_template_directory_uri().'/assets/images/svg/no-results.svg" alt="' . __( 'No Results', 'press-pool' ) . '" />'; ?>
			<?php
			get_search_form();

		endif;
		?>
	</div>

</section>
