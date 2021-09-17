<?php

if ( !function_exists( 'buddyboss_widgets_init' ) ) {

	/**
	 * Registers all of our widget areas.
	 *
	 * @since Boss 1.0.0
	 */
	function buddyboss_widgets_init() {
		// Blog sidebar
		register_sidebar( array(
			'name'			 => __( 'Blog Sidebar', 'press-pool' ),
			'id'			 => 'sidebar',
			'description'	 => __( 'Widgets in this area will be shown on blog posts and archives.', 'press-pool' ),
			'before_widget'	 => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'	 => '</aside>',
			'before_title'	 => '<h2 class="widget-title">',
			'after_title'	 => '</h2>'
		) );

		// Pages sidebar
		register_sidebar( array(
			'name'			 => __( 'Page Sidebar', 'press-pool' ),
			'id'			 => 'page',
			'description'	 => __( 'Widgets in this area will be shown on Pages.', 'press-pool' ),
			'before_widget'	 => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'	 => '</aside>',
			'before_title'	 => '<h2 class="widget-title">',
			'after_title'	 => '</h2>'
		) );

        if ( function_exists('bp_is_active') ) {
			if ( bp_is_active( 'activity' ) ) {
        		// Located in the Activity Directory left column. Left column only appears if widgets are added.
        		register_sidebar( array(
        			'name'			 => __( 'Activity &rarr; Directory Left', 'press-pool' ),
        			'id'			 => 'activity_left',
        			'description'	 => __( 'Widgets in this area will be shown on the News Feed page.', 'press-pool' ),
        			'before_widget'	 => '<aside id="%1$s" class="widget %2$s">',
        			'after_widget'	 => '</aside>',
        			'before_title'	 => '<h2 class="widget-title">',
        			'after_title'	 => '</h2>'
        		) );

        		// Located in the Activity Directory right column. Right column only appears if widgets are added.
        		register_sidebar( array(
        			'name'			 => __( 'Activity &rarr; Directory Right', 'press-pool' ),
        			'id'			 => 'activity_right',
        			'description'	 => __( 'Widgets in this area will be shown on the News Feed page.', 'press-pool' ),
        			'before_widget'	 => '<aside id="%1$s" class="widget %2$s">',
        			'after_widget'	 => '</aside>',
        			'before_title'	 => '<h2 class="widget-title">',
        			'after_title'	 => '</h2>'
        		) );
            }

            // Located in the Members Directory right column. Right column only appears if widgets are added.
    		register_sidebar( array(
    			'name'			 => __( 'Members &rarr; Directory', 'press-pool' ),
    			'id'			 => 'members',
				'description'	 => __( 'Widgets in this area will be shown on the Members directory.', 'press-pool' ),
    			'before_widget'	 => '<aside id="%1$s" class="widget %2$s">',
    			'after_widget'	 => '</aside>',
    			'before_title'	 => '<h2 class="widget-title">',
    			'after_title'	 => '</h2>'
    		) );

    		// Located in the Individual Member Profile right column. Right column only appears if widgets are added.
    		register_sidebar( array(
    			'name'			 => __( 'Members &rarr; Single Profile', 'press-pool' ),
    			'id'			 => 'profile',
				'description'	 => __( 'Widgets in this area will be shown on individual member profiles.', 'press-pool' ),
    			'before_widget'	 => '<aside id="%1$s" class="widget %2$s">',
    			'after_widget'	 => '</aside>',
    			'before_title'	 => '<h2 class="widget-title">',
    			'after_title'	 => '</h2>'
    		) );

			if ( bp_is_active( 'activity' ) ) {
				register_sidebar( array(
					'name'			 => __( 'Members &rarr; User Activity', 'press-pool' ),
					'id'			 => 'user_activity',
					'description'	 => __( 'Widgets in this area will be shown on the user activity page.', 'press-pool' ),
					'before_widget'	 => '<aside id="%1$s" class="widget %2$s">',
					'after_widget'	 => '</aside>',
					'before_title'	 => '<h2 class="widget-title">',
					'after_title'	 => '</h2>'
				) );
            }

            if ( bp_is_active( 'groups' ) ) {
                // Located in the Groups Directory right column. Right column only appears if widgets are added.
        		register_sidebar( array(
        			'name'			 => __( 'Groups &rarr; Directory', 'press-pool' ),
        			'id'			 => 'groups',
					'description'	 => __( 'Widgets in this area will be shown on the Groups directory.', 'press-pool' ),
        			'before_widget'	 => '<aside id="%1$s" class="widget %2$s">',
        			'after_widget'	 => '</aside>',
        			'before_title'	 => '<h2 class="widget-title">',
        			'after_title'	 => '</h2>'
        		) );

        		// Located in the Individual Group right column. Right column only appears if widgets are added.
        		register_sidebar( array(
        			'name'			 => __( 'Groups &rarr; Single Group', 'press-pool' ),
        			'id'			 => 'group',
					'description'	 => __( 'Widgets in this area will be shown on individual groups.', 'press-pool' ),
        			'before_widget'	 => '<aside id="%1$s" class="widget %2$s"><div class="inner">',
        			'after_widget'	 => '</div></aside>',
        			'before_title'	 => '<h2 class="widget-title">',
        			'after_title'	 => '</h2>'
        		) );

        		// Located in the Individual Group right column. Right column only appears if widgets are added.
        		register_sidebar( array(
        			'name'			 => __( 'Groups &rarr; Group Activity', 'press-pool' ),
        			'id'			 => 'group_activity',
					'description'	 => __( 'Widgets in this area will be shown on group activity.', 'press-pool' ),
        			'before_widget'	 => '<aside id="%1$s" class="widget %2$s"><div class="inner">',
        			'after_widget'	 => '</div></aside>',
        			'before_title'	 => '<h2 class="widget-title">',
        			'after_title'	 => '</h2>'
        		) );
            }
        }
        
        if ( function_exists('is_bbpress') ) {
    		// Located in the Forums Directory right column. Left column only appears if widgets are added.
    		register_sidebar( array(
    			'name'			 => __( 'Forums &rarr; Directory & Single', 'press-pool' ),
    			'id'			 => 'forums',
				'description'	 => __( 'Widgets in this area will be shown on Forum Discussions Directory and single pages.', 'press-pool' ),
    			'before_widget'	 => '<aside id="%1$s" class="widget %2$s">',
    			'after_widget'	 => '</aside>',
    			'before_title'	 => '<h2 class="widget-title">',
    			'after_title'	 => '</h2>'
    		) );
        }

		// Dedicated sidebar for WooCommerce
        if ( class_exists( 'WooCommerce' ) ) {
            register_sidebar( array(
    			'name'			 => __( 'WooCommerce &rarr; Shop', 'press-pool' ),
    			'id'			 => 'woo_sidebar',
				'description'	 => __( 'Widgets in this area will be shown on Shop Directory.', 'press-pool' ),
    			'before_widget'	 => '<aside id="%1$s" class="widget %2$s">',
    			'after_widget'	 => '</aside>',
    			'before_title'	 => '<h2 class="widget-title">',
    			'after_title'	 => '</h2>',
    		) );
        }

        // LearnDash
        if ( class_exists( 'SFWD_LMS' ) ) {
            register_sidebar( array(
    			'name'			 => __( 'LearnDash &rarr; Courses', 'press-pool' ),
    			'id'			 => 'learndash_sidebar',
				'description'	 => __( 'Widgets in this area will be shown on courses page.', 'press-pool' ),
    			'before_widget'	 => '<aside id="%1$s" class="widget %2$s">',
    			'after_widget'	 => '</aside>',
    			'before_title'	 => '<h2 class="widget-title">',
    			'after_title'	 => '</h2>',
    		) );
        }

		$footer_widgets = buddyboss_theme_get_option( 'footer_widgets' );
		$footer_widgets_columns = buddyboss_theme_get_option( 'footer_widget_columns' );

		if( $footer_widgets ) {
			for( $count = 1; $count <= $footer_widgets_columns; $count++ ) {
				register_sidebar( array(
					'name'           => sprintf( __( 'Footer #%s', 'press-pool' ), $count ),
					'id'			 => 'footer-'.$count,
					'description'	 => sprintf( __( 'The footer widget area %s. Only appears if widgets are added.', 'press-pool' ), $count ),
					'before_widget'	 => '<aside id="%1$s" class="widget %2$s">',
					'after_widget'	 => '</aside>',
					'before_title'	 => '<h2 class="widget-title">',
					'after_title'	 => '</h2>'
				) );
			}
		}

		// Search Page Sidebar
		register_sidebar( array(
			'name'			 => __( 'Search Results', 'press-pool' ),
			'id'			 => 'search',
			'description'	 => __( 'The search widget area. Only appears if widgets are added.', 'press-pool' ),
			'before_widget'	 => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'	 => '</aside>',
			'before_title'	 => '<h2 class="widget-title">',
			'after_title'	 => '</h2>'
		) );
	}

	add_action( 'widgets_init', 'buddyboss_widgets_init' );
}