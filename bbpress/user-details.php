<?php

/**
 * User Details
 *
 * @package bbPress
 * @subpackage Theme
 */

?>

<?php do_action( 'bbp_template_before_user_details' ); ?>

<div class="bb-profile-card-area no-cover-img bb-bbpress-profile-card">
	<div class="bb-profile-card">
		<div class="flex flex-wrap">
			<div class="bb-profile-avatar">
				<a class="bbp-profile-avatar-link" href="<?php bbp_user_profile_url(); ?>" title="<?php bbp_displayed_user_field( 'display_name' ); ?>" rel="me">
					<?php echo get_avatar( bbp_get_displayed_user_field( 'user_email', 'raw' ), apply_filters( 'bbp_single_user_details_avatar_size', 180 ), '', '', array('class' => 'profile-avatar') ); ?>
				</a>
			</div>
			<div class="bb-profile-details flex-1">
				<div class="bb-profile-details-inner flex">
					<div class="bb-profile-items flex-1">
						<div class="profile-item profile-item-header flex flex-wrap align-items-center">
							<h2 class="profile-title">
								<a href="<?php bbp_user_profile_url(); ?>"><?php bbp_displayed_user_field( 'display_name' ); ?></a>
								<span class="bb-role"><?php  echo bbp_get_user_display_role(); ?></span>
							</h2>
						</div>
						<div class="flex align-items-center bb-profile-meta">
							<?php
							$topics_text = bbp_get_user_topic_count_raw() > 1 ? __('topics', 'press-pool') : __('topic', 'press-pool');
							$replies_text = bbp_get_user_reply_count_raw() > 1 ? __('replies', 'press-pool') : __('reply', 'press-pool');
							?>
							<span class="prefix"><?php printf( __( '%s %s', 'press-pool' ), bbp_get_user_topic_count_raw(), $topics_text ); ?></span>
							<span class="prefix"><?php printf( __( '%s %s', 'press-pool' ), bbp_get_user_reply_count_raw(), $replies_text ); ?></span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="item-nav">
		<div id="object-nav" aria-label="Member primary navigation" role="navigation" class="item-list-tabs no-ajax">
			<ul>
				<li class="<?php if ( bbp_is_single_user_profile() ) :?>current<?php endif; ?>">
					<a class="url fn n" href="<?php bbp_user_profile_url(); ?>" title="<?php printf( esc_attr__( "%s's Profile", 'press-pool' ), bbp_get_displayed_user_field( 'display_name' ) ); ?>" rel="me"><?php _e( 'Profile', 'press-pool' ); ?></a>
				</li>

				<li class="<?php if ( bbp_is_single_user_topics() ) :?>current<?php endif; ?>">
					<a href="<?php bbp_user_topics_created_url(); ?>" title="<?php printf( esc_attr__( "%s's Discussions Started", 'press-pool' ), bbp_get_displayed_user_field( 'display_name' ) ); ?>"><?php _e( 'Discussions Started', 'press-pool' ); ?></a>
				</li>

				<li class="<?php if ( bbp_is_single_user_replies() ) :?>current<?php endif; ?>">
					<a href="<?php bbp_user_replies_created_url(); ?>" title="<?php printf( esc_attr__( "%s's Replies Created", 'press-pool' ), bbp_get_displayed_user_field( 'display_name' ) ); ?>"><?php _e( 'Replies Created', 'press-pool' ); ?></a>
				</li>

				<?php if ( bbp_is_favorites_active() ) : ?>
					<li class="<?php if ( bbp_is_favorites() ) :?>current<?php endif; ?>">
						<a href="<?php bbp_favorites_permalink(); ?>" title="<?php printf( esc_attr__( "%s's Favorites", 'press-pool' ), bbp_get_displayed_user_field( 'display_name' ) ); ?>"><?php _e( 'Likes', 'press-pool' ); ?></a>
					</li>
				<?php endif; ?>

				<?php if ( bbp_is_user_home() || current_user_can( 'edit_users' ) ) : ?>

					<?php if ( bbp_is_subscriptions_active() ) : ?>
						<li class="<?php if ( bbp_is_subscriptions() ) :?>current<?php endif; ?>">
							<a href="<?php bbp_subscriptions_permalink(); ?>" title="<?php printf( esc_attr__( "%s's Subscriptions", 'press-pool' ), bbp_get_displayed_user_field( 'display_name' ) ); ?>"><?php _e( 'Subscriptions', 'press-pool' ); ?></a>
						</li>
					<?php endif; ?>

					<li class="<?php if ( bbp_is_single_user_edit() ) :?>current<?php endif; ?>">
						<a href="<?php bbp_user_profile_edit_url(); ?>" title="<?php printf( esc_attr__( "Edit %s's Profile", 'press-pool' ), bbp_get_displayed_user_field( 'display_name' ) ); ?>"><?php _e( 'Edit', 'press-pool' ); ?></a>
					</li>

				<?php endif; ?>
			</ul>
		</div>
	</div>
</div>

<?php do_action( 'bbp_template_after_user_details' ); ?>
