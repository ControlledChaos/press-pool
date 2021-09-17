<div class="buddypress-wrap">
	<nav id="subnav" class="bp-docs-main-navs main-navs bp-navs dir-navs bp-subnavs" role="navigation" aria-label="<?php esc_html_e( 'Directory menu', 'press-pool' ); ?>">
		<ul class="component-navigation bp-docs-nav">
			<li<?php if ( bp_docs_is_global_directory() ) : ?> class="current"<?php endif; ?>><a href="<?php bp_docs_archive_link() ?>"><?php _e( 'All Docs', 'press-pool' ) ?></a></li>

			<?php if ( is_user_logged_in() ) : ?>
				<?php if ( function_exists( 'bp_is_group' ) && bp_is_group() ) : ?>
					<li<?php if ( bp_is_current_action( BP_DOCS_SLUG ) ) : ?> class="current"<?php endif ?>><a href="<?php bp_group_permalink( groups_get_current_group() ) ?><?php bp_docs_slug() ?>"><?php printf( __( "%s's Docs", 'press-pool' ), bp_get_current_group_name() ) ?></a></li>
				<?php else : ?>
					<li><a href="<?php bp_docs_mydocs_started_link() ?>"><?php _e( 'Started By Me', 'press-pool' ) ?></a></li>
					<li><a href="<?php bp_docs_mydocs_edited_link() ?>"><?php _e( 'Edited By Me', 'press-pool' ) ?></a></li>

					<?php if ( bp_is_active( 'groups' ) ) : ?>
						<li<?php if ( bp_docs_is_mygroups_docs() ) : ?> class="current"<?php endif; ?>><a href="<?php bp_docs_mygroups_link() ?>"><?php _e( 'My Groups', 'press-pool' ) ?></a></li>
					<?php endif ?>
				<?php endif ?>
			<?php endif ?>

			<?php if ( $show_create_button ) : ?>
				<li class="last"><?php bp_docs_create_button() ?></li>
			<?php endif ?>
		</ul>
	</nav>
</div>