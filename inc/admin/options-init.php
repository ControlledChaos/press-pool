<?php

if ( !class_exists( 'buddyboss_theme_Redux_Framework_config' ) ) {

	class buddyboss_theme_Redux_Framework_config {

		public $args	 = array();
		public $sections = array();
		public $theme;
		public $ReduxFramework;

		public function __construct() {

			if ( !class_exists( 'ReduxFramework' ) ) {
				return;
			}

			// This is needed. Bah WordPress bugs.  ;)
			if ( true == Redux_Helpers::isTheme( __FILE__ ) ) {
				$this->initSettings();
			} else {
				add_action( 'plugins_loaded', array( $this, 'initSettings' ), 10 );
			}
		}

		public function initSettings() {

			// Just for demo purposes. Not needed per say.
			$this->theme = wp_get_theme();

			// Set the default arguments
			$this->setArguments();

			// Create the sections and fields
			$this->setSections();

			if ( !isset( $this->args[ 'opt_name' ] ) ) { // No errors please
				return;
			}

			// If Redux is running as a plugin, this will remove the demo notice and links
			add_action( 'redux/loaded', array( $this, 'remove_demo' ) );

			$this->ReduxFramework = new ReduxFramework( $this->sections, $this->args );
		}

		// Remove the demo link and the notice of integrated demo from the redux-framework plugin
		function remove_demo() {

			// Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
			if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
				remove_filter( 'plugin_row_meta', array( ReduxFrameworkPlugin::instance(), 'plugin_metalinks' ), null, 2 );

				// Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
				remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
			}
		}

		public function setSections() {

			$customize_url	 = add_query_arg( 'return', urlencode( wp_unslash( $_SERVER[ 'REQUEST_URI' ] ) ), 'customize.php' );
			$admin_url		 = admin_url( $customize_url );

			// Logo Settings
			$this->sections[] = array(
				'title'		 => __( 'Logo', 'press-pool' ),
				'icon'		 => 'el-icon-adjust',
				'priority'	 => 20,
				'fields'	 => array(
					array(
						'id'		 => 'logo_switch',
						'type'		 => 'switch',
						'title'		 => __( 'Desktop Logo', 'press-pool' ),
						'subtitle'	 => __( 'Upload your custom site logo for desktop layout (280px by 80px).', 'press-pool' ),
						'default'	 => '0',
						'on'		 => __( 'On', 'press-pool' ),
						'off'		 => __( 'Off', 'press-pool' ),
					),
					array(
						'id'		 => 'logo',
						'type'		 => 'media',
						'url'		 => false,
						'required'	 => array( 'logo_switch', 'equals', '1' ),
                        'class'      => 'bbThumbScale bbThumbScaleLi',
					),
                    array(
                        'id' => 'logo_size',
                        'type' => 'slider',
                        'title' => __('Logo Size', 'press-pool'),
                        'subtitle' => __('Adjust the size of your logo', 'press-pool'),
                        'desc' => __('Maximum logo width 350px.<br ?>If the logo size is taller than the header height, it will be made smaller to fit within the header.<br />If "Header style 3" is set and the logo size is wider than the BuddyPanel, it will be made smaller to fit within the BuddyPanel.', 'press-pool'),
                        'default' => '0',
                        'min' => 0,
                        'step' => 1,
                        'max' => 350,
                        'class' => 'bbThumbSlide bbThumbSlideLi',
                        'required' => array( 'logo_switch', 'equals', '1' ),
                    ),
					array(
						'id'		 => 'mobile_logo_switch',
						'type'		 => 'switch',
						'title'		 => __( 'Mobile Logo', 'press-pool' ),
						'subtitle'	 => __( 'Upload your custom site logo for mobile layout (280px by 80px).', 'press-pool' ),
						'default'	 => '0',
						'on'		 => __( 'On', 'press-pool' ),
						'off'		 => __( 'Off', 'press-pool' ),
					),
					array(
						'id'		 => 'mobile_logo',
						'type'		 => 'media',
						'url'		 => false,
						'required'	 => array( 'mobile_logo_switch', 'equals', '1' ),
                        'class'      => 'bbThumbScale bbThumbScaleLi',
					),
                    array(
                        'id' => 'mobile_logo_size',
                        'type' => 'slider',
                        'title' => __('Mobile Logo Size', 'press-pool'),
                        'subtitle' => __('Adjust the size of mobile logo', 'press-pool'),
                        'desc' => __('Maximum logo width 350px.<br ?>If the logo size is taller than the header height, it will be made smaller to fit within the header.', 'press-pool'),
                        'default' => '0',
                        'min' => 0,
                        'step' => 1,
                        'max' => 350,
                        'class' => 'bbThumbSlide bbThumbSlideLim',
                        'required' => array( 'mobile_logo_switch', 'equals', '1' ),
                    ),
					array(
						'id'		 => 'favicon',
						'type'		 => 'none',
						'url'		 => false,
						'title'		 => __( 'Site Icon', 'press-pool' ),
						'subtitle'	 => sprintf( __( 'Upload your custom site icon(favicon) at <a href="%s">Appearance &gt; Customize</a> in the Site Identity section.', 'press-pool' ), $admin_url ),
					),
				)
			);

            // Array of header options
            if ( has_nav_menu( 'buddypanel-loggedin' ) || has_nav_menu( 'buddypanel-loggedout' ) ) {
    			$header_options = array(
    				'1' => array(
    					'alt'	 => 'Header style 1',
    					'img'	 => get_template_directory_uri() . '/inc/admin/assets/images/headers/style1.png'
    				),
    				'2' => array(
    					'alt'	 => 'Header style 2',
    					'img'	 => get_template_directory_uri() . '/inc/admin/assets/images/headers/style2.png'
    				),
                    '3' => array(
    					'alt'	 => 'Header style 3',
    					'img'	 => get_template_directory_uri() . '/inc/admin/assets/images/headers/style3.png'
    				),
    			);
            } else {
                $header_options = array(
    				'1' => array(
    					'alt'	 => 'Header style 1',
    					'img'	 => get_template_directory_uri() . '/inc/admin/assets/images/headers/style1.png'
    				),
    				'2' => array(
    					'alt'	 => 'Header style 2',
    					'img'	 => get_template_directory_uri() . '/inc/admin/assets/images/headers/style2.png'
    				),
    			);
            }

			// Header Settings
			$this->sections[] = array(
				'title'		 => __( 'Header', 'press-pool' ),
				'id'		 => 'header_layout',
				'customizer' => false,
				'icon'		 => 'el-icon-credit-card',
				'fields'	 => array(
					array(
						'id'		 => 'buddyboss_header',
						'title'		 => __( 'Header Style', 'press-pool' ),
						'subtitle'	 => __( 'Select the header layout.', 'press-pool' ),
						'type'		 => 'image_select',
						'customizer' => false,
						'default'	 => '1',
                        'options'	 => $header_options,
					),
                    array(
						'id'	 => 'header_layout_options',
						'type'	 => 'info',
						'desc'	 => __( 'Layout Options', 'press-pool' )
					),
                    array(
						'id'		 => 'header_sticky',
						'type'		 => 'switch',
						'title'		 => __( 'Sticky Header', 'press-pool' ),
                        'subtitle'	 => __( 'Position header to the top of the scrollview during scrolling. Header is always sticky in <a href="https://learndash.idevaffiliate.com/111.html">LearnDash</a> lessons and topics.', 'press-pool' ),
						'default'	 => '1',
						'on'		 => __( 'On', 'press-pool' ),
						'off'		 => __( 'Off', 'press-pool' ),
					),
                    array(
                        'id' => 'header_height',
                        'type' => 'slider',
                        'title' => __('Header Height', 'press-pool'),
                        'subtitle' => __('Set custom header height', 'press-pool'),
                        'desc' => __('Value between 60px and 200px', 'press-pool'),
                        "default" => 76,
                        "min" => 60,
                        "step" => 1,
                        "max" => 200,
                        'display_value' => '76px',
                    ),
                    array(
						'id'		 => 'header_shadow',
						'type'		 => 'switch',
						'title'		 => __( 'Header shadow', 'press-pool' ),
                        'subtitle'	 => __( 'If enabled header will appear with slight shadow.', 'press-pool' ),
						'default'	 => '1',
						'on'		 => __( 'On', 'press-pool' ),
						'off'		 => __( 'Off', 'press-pool' ),
					),
					array(
						'id'	 => 'header_buttons_info',
						'type'	 => 'info',
						'desc'	 => __( 'Header Buttons (Desktop)', 'press-pool' )
					),
					array(
						'id'		 => 'header_search',
						'type'		 => 'switch',
						'title'		 => __( 'Search', 'press-pool' ),
						'subtitle'	 => __( 'Show/hide Search in titlebar.', 'press-pool' ),
						'on'		 => __( 'Show', 'press-pool' ),
						'off'		 => __( 'Hide', 'press-pool' ),
						'default'	 => '1',
					),
					array(
						'id'		 => 'messages',
						'type'		 => 'switch',
						'title'		 => __( 'Messages', 'press-pool' ),
						'subtitle'	 => __( 'Show/hide Messages in titlebar.', 'press-pool' ),
						'on'		 => __( 'Show', 'press-pool' ),
						'off'		 => __( 'Hide', 'press-pool' ),
						'default'	 => '1',
					),
					array(
						'id'		 => 'notifications',
						'type'		 => 'switch',
						'title'		 => __( 'Notifications', 'press-pool' ),
						'subtitle'	 => __( 'Show/hide Notifications in titlebar.', 'press-pool' ),
						'on'		 => __( 'Show', 'press-pool' ),
						'off'		 => __( 'Hide', 'press-pool' ),
						'default'	 => '1',
					),
					array(
						'id'		 => 'shopping_cart',
						'type'		 => 'switch',
						'title'		 => __( 'Shopping Cart', 'press-pool' ),
						'subtitle'	 => __( 'Show/hide shopping cart in titlebar. (requires WooCommerce)', 'press-pool' ),
						'on'		 => __( 'Show', 'press-pool' ),
						'off'		 => __( 'Hide', 'press-pool' ),
						'default'	 => '1',
					),
					array(
						'id'	 => 'mobile_header_buttons_info',
						'type'	 => 'info',
						'desc'	 => __( 'Header Buttons (Mobile)', 'press-pool' )
					),
					array(
						'id'		 => 'mobile_header_search',
						'type'		 => 'switch',
						'title'		 => __( 'Search', 'press-pool' ),
						'subtitle'	 => __( 'Show/hide Search in titlebar.', 'press-pool' ),
						'on'		 => __( 'Show', 'press-pool' ),
						'off'		 => __( 'Hide', 'press-pool' ),
						'default'	 => '1',
					),
					array(
						'id'		 => 'mobile_messages',
						'type'		 => 'switch',
						'title'		 => __( 'Messages', 'press-pool' ),
						'subtitle'	 => __( 'Show/hide Messages in titlebar.', 'press-pool' ),
						'on'		 => __( 'Show', 'press-pool' ),
						'off'		 => __( 'Hide', 'press-pool' ),
						'default'	 => '0',
					),
					array(
						'id'		 => 'mobile_notifications',
						'type'		 => 'switch',
						'title'		 => __( 'Notifications', 'press-pool' ),
						'subtitle'	 => __( 'Show/hide Notifications in titlebar.', 'press-pool' ),
						'on'		 => __( 'Show', 'press-pool' ),
						'off'		 => __( 'Hide', 'press-pool' ),
						'default'	 => '0',
					),
					array(
						'id'		 => 'mobile_shopping_cart',
						'type'		 => 'switch',
						'title'		 => __( 'Shopping Cart', 'press-pool' ),
						'subtitle'	 => __( 'Show/hide shopping cart in titlebar. (requires WooCommerce)', 'press-pool' ),
						'on'		 => __( 'Show', 'press-pool' ),
						'off'		 => __( 'Hide', 'press-pool' ),
						'default'	 => '0',
					),
				)
			);

			// Layout Settings
			$this->sections[] = array(
				'title'		 => __( 'BuddyPanel', 'press-pool' ),
				'id'		 => 'theme_layout',
				'customizer' => false,
				'icon'		 => 'el-icon-th-list',
				'fields'	 => array(
					array(
						'id'		 => 'buddypanel',
						'type'		 => 'switch',
						'title'		 => __( 'BuddyPanel', 'press-pool' ),
						'subtitle'	 => __( 'Display the BuddyPanel menu. BuddyPanel is the side navigation panel.', 'press-pool' ),
                        'desc'       => __( 'BuddyPanel is visible if menu is created at Appearance > Menus.', 'press-pool' ),
						'on'		 => __( 'On', 'press-pool' ),
						'off'		 => __( 'Off', 'press-pool' ),
						'default'	 => '1',
                        'required'   => array( 'buddyboss_header', 'equals', array( '1','2' ) ),
					),
                    array(
        				'id'		 => 'buddypanel_position',
        				'type'		 => 'button_set',
        				'title'		 => __( 'BuddyPanel Position', 'press-pool' ),
        				'subtitle'	 => __( 'Select the BuddyPanel alignment.', 'press-pool' ),
        				'default'	 => 'left',
                        'required' => array(
                            array( 'buddypanel', 'equals', '1' ),
                            array( 'buddyboss_header','equals', array( '1','2' ) )
                        ),
        				'options'	 => array(
        					'left'	 => 'Left',
        					'right'	 => 'Right'
        				)
        			),
                    array(
        				'id'		 => 'buddypanel_position_h3',
        				'type'		 => 'button_set',
        				'title'		 => __( 'BuddyPanel Position', 'press-pool' ),
        				'subtitle'	 => __( 'Select the BuddyPanel alignment.', 'press-pool' ),
        				'default'	 => 'left',
                        'required'   => array( 'buddyboss_header', 'equals', '3' ),
        				'options'	 => array(
        					'left'	 => 'Left',
        					'right'	 => 'Right'
        				)
        			),
                    array(
        				'id'		 => 'buddypanel_state',
        				'type'		 => 'button_set',
        				'title'		 => __( 'BuddyPanel Default State', 'press-pool' ),
        				'subtitle'	 => __( 'Select the BuddyPanel default state for new sessions.', 'press-pool' ),
        				'default'	 => 'close',
                        'required' => array(
                            array( 'buddyboss_header','equals', array( '1','2' ) )
                        ),
        				'options'	 => array(
        					'open'	 => 'Open',
        					'close'	 => 'Closed'
        				)
        			),
				)
			);

			$sidebar_array = array(
				'id'		 => 'sidebar',
				'type'		 => 'button_set',
				'title'		 => __( 'Blog Sidebar', 'press-pool' ),
				'subtitle'	 => __( 'Select the blog post sidebar alignment.', 'press-pool' ),
				'default'	 => 'right',
				'options'	 => array(
					'left'	 => 'Left',
					'right'	 => 'Right'
				)
			);

			$page_sidebar_array = array(
				'id'		 => 'page',
				'type'		 => 'button_set',
				'title'		 => __( 'Page Sidebar', 'press-pool' ),
				'subtitle'	 => __( 'Select the pages sidebar alignment.', 'press-pool' ),
				'default'	 => 'right',
				'options'	 => array(
					'left'	 => 'Left',
					'right'	 => 'Right'
				)
			);

			$members_sidebar_array = array(
				'id'		 => 'members',
				'type'		 => 'button_set',
				'title'		 => __( 'Members Directory Sidebar', 'press-pool' ),
				'subtitle'	 => __( 'Select the members directory sidebar alignment.', 'press-pool' ),
				'default'	 => 'right',
				'options'	 => array(
					'left'	 => 'Left',
					'right'	 => 'Right'
				)
			);

			$profile_sidebar_array = array();
			$group_directory_sidebar_array = array();
			$single_group_sidebar_array = array();
			$activity_sidebar_array = array();
			$woocommerce_sidebar_array = array();
            $learndash_sidebar_array = array();
            $learndash_single_sidebar_array = array();
            $lifterlms_sidebar_array = array();

			if ( function_exists('bp_is_active') ) {

				$profile_sidebar_array = array(
					'id'		 => 'profile',
					'type'		 => 'button_set',
					'title'		 => __( 'Member Profile Sidebar', 'press-pool' ),
					'subtitle'	 => __( 'Select the member profile sidebar alignment.', 'press-pool' ),
					'default'	 => 'left',
					'options'	 => array(
						'left'	 => 'Left',
						'right'	 => 'Right'
					)
				);

				if ( bp_is_active( 'groups' ) ) {
					$group_directory_sidebar_array = array(
						'id'		 => 'groups',
						'type'		 => 'button_set',
						'title'		 => __( 'Groups Directory Sidebar', 'press-pool' ),
						'subtitle'	 => __( 'Select the groups directory sidebar alignment.', 'press-pool' ),
						'default'	 => 'right',
						'options'	 => array(
							'left'	 => 'Left',
							'right'	 => 'Right'
						)
					);

					$single_group_sidebar_array = array(
						'id'		 => 'group',
						'type'		 => 'button_set',
						'title'		 => __( 'Group Single Sidebar', 'press-pool' ),
						'subtitle'	 => __( 'Select the group single sidebar alignment.', 'press-pool' ),
						'default'	 => 'right',
						'options'	 => array(
							'left'	 => 'Left',
							'right'	 => 'Right'
						)
					);
				}
			}

			$forums_sidebar_array = array();
			if ( function_exists('is_bbpress') ) {
				$forums_sidebar_array = array(
					'id'		 => 'forums',
					'type'		 => 'button_set',
					'title'		 => __( 'Forums Sidebar', 'press-pool' ),
					'subtitle'	 => __( 'Select the forums sidebar alignment.', 'press-pool' ),
					'default'	 => 'right',
					'options'	 => array(
						'left'	 => 'Left',
						'right'	 => 'Right'
					)
				);
			}

			if ( class_exists( 'WooCommerce' ) ) {
				$woocommerce_sidebar_array = array(
					'id'		 => 'woocommerce',
					'type'		 => 'button_set',
					'title'		 => __( 'WooCommerce &rarr; Shop Sidebar', 'press-pool' ),
					'subtitle'	 => __( 'Select the woocommerce sidebar alignment.', 'press-pool' ),
					'default'	 => 'right',
					'options'	 => array(
						'left'	 => 'Left',
						'right'	 => 'Right'
					)
				);
			}

            if ( class_exists( 'SFWD_LMS' ) ) {
				$learndash_sidebar_array = array(
					'id'		 => 'learndash',
					'type'		 => 'button_set',
					'title'		 => __( 'LearnDash Sidebar', 'press-pool' ),
					'subtitle'	 => __( 'Select the learndash sidebar alignment.', 'press-pool' ),
					'default'	 => 'right',
					'options'	 => array(
						'left'	 => 'Left',
						'right'	 => 'Right'
					)
				);

				$learndash_single_sidebar_array = array(
					'id'		 => 'learndash_single_sidebar',
					'type'		 => 'button_set',
					'title'		 => __( 'LearnDash Single Pages Sidebar', 'press-pool' ),
					'subtitle'	 => __( 'Select the learndash single pages sidebar alignment.', 'press-pool' ),
					'default'	 => 'left',
					'options'	 => array(
						'left'	 => 'Left',
						'right'	 => 'Right'
					)
				);
			}

            if ( class_exists( 'LifterLMS' ) ) {
				$lifterlms_sidebar_array = array(
					'id'		 => 'lifterlms',
					'type'		 => 'button_set',
					'title'		 => __( 'LifterLMS Sidebar', 'press-pool' ),
					'subtitle'	 => __( 'Select the LifterLMS sidebar alignment.', 'press-pool' ),
					'default'	 => 'right',
					'options'	 => array(
						'left'	 => 'Left',
						'right'	 => 'Right'
					)
				);
			}

			$search_sidebar_array = array(
				'id'		 => 'search',
				'type'		 => 'button_set',
				'title'		 => __( 'Search Results Sidebar', 'press-pool' ),
				'subtitle'	 => __( 'Select the search results page sidebar alignment.', 'press-pool' ),
				'default'	 => 'right',
				'options'	 => array(
					'left'	 => 'Left',
					'right'	 => 'Right'
				)
			);

			// Sidebar Settings
			$this->sections[] = array(
				'title'		 => __( 'Sidebars', 'press-pool' ),
				'icon'		 => 'el el-lines',
				'customizer' => false,
				'fields'	 => array(
					array(
						'id'	 => 'buddypress_sidebar_info',
						'type'	 => 'info',
						'desc'	 => __( 'Add widgets into your sidebars at Appearance &gt; Widgets', 'press-pool' )
					),
					$sidebar_array,
					$page_sidebar_array,
					$activity_sidebar_array,
					$members_sidebar_array,
					$profile_sidebar_array,
					$group_directory_sidebar_array,
					$single_group_sidebar_array,
					$forums_sidebar_array,
					$woocommerce_sidebar_array,
                    $learndash_sidebar_array,
					$learndash_single_sidebar_array,
                    $lifterlms_sidebar_array,
					$search_sidebar_array,
				)
			);

			$font_options = array(
				array(
					'id'		 => 'custom_typography',
					'type'		 => 'switch',
					'title'		 => __( 'Custom Typography', 'press-pool' ),
					'subtitle'	 => __( 'Enable custom typography', 'press-pool' ),
					'on'		 => __( 'On', 'press-pool' ),
					'off'		 => __( 'Off', 'press-pool' ),
					'default'	 => '0',
				),
				array(
					'id'			 => 'boss_site_title_font_family',
					'type'			 => 'typography',
					'title'			 => __( 'Site Title', 'press-pool' ),
					'subtitle'		 => __( 'Specify the site title properties.', 'press-pool' ),
					'google'		 => true,
					'line-height'	 => false,
					'text-align'	 => false,
					'subsets'		 => true,
					'color'			 => false,
					'default'		 => array(
						'font-size'		 => '24px',
						'google'		 => 'true',
						'font-family'	 => 'Roboto',
						'font-weight'	 => '500',
					),
					'output'		 => array( '.site-header .site-title' ),
					'required'	 => array( 'custom_typography', 'equals', '1' ),
				),
				array(
					'id'			 => 'boss_body_font_family',
					'type'			 => 'typography',
					'title'			 => __( 'Body Font', 'press-pool' ),
					'subtitle'		 => __( 'Specify the body font properties.', 'press-pool' ),
					'google'		 => true,
					'line-height'	 => false,
					'text-align'	 => false,
					'subsets'		 => true,
					'color'			 => false,
					'default'		 => array(
						'font-size'		 => '16px',
						'font-family'	 => 'Roboto',
						'font-weight'	 => '400',
					),
					'output'		 => array( 'body' ),
					'required'	 => array( 'custom_typography', 'equals', '1' ),
				),
				array(
					'id'			 => 'boss_h1_font_options',
					'type'			 => 'typography',
					'title'			 => __( 'H1 Font', 'press-pool' ),
					'subtitle'		 => __( 'Specify the H1 tag font properties.', 'press-pool' ),
					'google'		 => true,
					'font-size'		 => true,
					'line-height'	 => false,
					'text-align'	 => false,
					'subsets'		 => true,
					'color'			 => false,
					'default'		 => array(
						'font-family'	 => 'Roboto',
						'font-size'		 => '36px',
						'font-weight'	 => '700',
					),
					'output'		 => array( 'h1' ),
					'required'	 => array( 'custom_typography', 'equals', '1' ),
				),
				array(
					'id'			 => 'boss_h2_font_options',
					'type'			 => 'typography',
					'title'			 => __( 'H2 Font', 'press-pool' ),
					'subtitle'		 => __( 'Specify the H2 tag font properties.', 'press-pool' ),
					'google'		 => true,
					'font-size'		 => true,
					'line-height'	 => false,
					'text-align'	 => false,
					'subsets'		 => true,
					'color'			 => false,
					'default'		 => array(
						'font-family'	 => 'Roboto',
						'font-size'		 => '30px',
						'font-weight'	 => '700',
					),
					'output'		 => array( 'h2' ),
					'required'	 => array( 'custom_typography', 'equals', '1' ),
				),
				array(
					'id'			 => 'boss_h3_font_options',
					'type'			 => 'typography',
					'title'			 => __( 'H3 Font', 'press-pool' ),
					'subtitle'		 => __( 'Specify the H3 tag font properties.', 'press-pool' ),
					'google'		 => true,
					'font-size'		 => true,
					'line-height'	 => false,
					'text-align'	 => false,
					'subsets'		 => true,
					'color'			 => false,
					'default'		 => array(
						'font-family'	 => 'Roboto',
						'font-size'		 => '24px',
						'font-weight'	 => '700',
					),
					'output'		 => array( 'h3' ),
					'required'	 => array( 'custom_typography', 'equals', '1' ),
				),
				array(
					'id'			 => 'boss_h4_font_options',
					'type'			 => 'typography',
					'title'			 => __( 'H4 Font', 'press-pool' ),
					'subtitle'		 => __( 'Specify the H4 tag font properties.', 'press-pool' ),
					'google'		 => true,
					'font-size'		 => true,
					'line-height'	 => false,
					'text-align'	 => false,
					'subsets'		 => true,
					'color'			 => false,
					'default'		 => array(
						'font-family'	 => 'Roboto',
						'font-size'		 => '18px',
						'font-weight'	 => '700',
					),
					'output'		 => array( 'h4' ),
					'required'	 => array( 'custom_typography', 'equals', '1' ),
				),
				array(
					'id'			 => 'boss_h5_font_options',
					'type'			 => 'typography',
					'title'			 => __( 'H5 Font', 'press-pool' ),
					'subtitle'		 => __( 'Specify the H5 tag font properties.', 'press-pool' ),
					'google'		 => true,
					'font-size'		 => true,
					'line-height'	 => false,
					'text-align'	 => false,
					'subsets'		 => true,
					'color'			 => false,
					'default'		 => array(
						'font-family'	 => 'Roboto',
						'font-size'		 => '14px',
						'font-weight'	 => '700',
					),
					'output'		 => array( 'h5' ),
					'required'	 => array( 'custom_typography', 'equals', '1' ),
				),
				array(
					'id'			 => 'boss_h6_font_options',
					'type'			 => 'typography',
					'title'			 => __( 'H6 Font', 'press-pool' ),
					'subtitle'		 => __( 'Specify the H6 tag font properties.', 'press-pool' ),
					'google'		 => true,
					'font-size'		 => true,
					'line-height'	 => false,
					'text-align'	 => false,
					'subsets'		 => true,
					'color'			 => false,
					'default'		 => array(
						'font-family'	 => 'Roboto',
						'font-size'		 => '12px',
						'font-weight'	 => '700',
					),
					'output'		 => array( 'h6' ),
					'required'	 => array( 'custom_typography', 'equals', '1' ),
				),
			);

			// Typography Settings
			$this->sections[] = array(
				'title'	 => __( 'Typography', 'press-pool' ),
				'icon'	 => 'el-icon-font',
				'customizer' => false,
				'fields' => apply_filters( 'buddyboss_theme_font_options', $font_options )
			);

			$style_elements = array(
				array( 'slug' => 'buddyboss_theme_scheme_select', 'desc' => 'ss', 'type' => 'preset', 'default' => 'default' ),
                /* Header */
                array( 'slug' => 'header_color_options_info', 'desc' => 'Header Colors', 'type' => 'info' ),
                array( 'slug' => 'header_background', 'title' => 'Header Background', 'subtitle' => 'The area at the top, containing logo, navigation, and user dropdown.', 'desc' => '', 'type' => 'color', 'default' => '#ffffff' ),
				array( 'slug' => 'sitetitle_color', 'title' => 'Site Title', 'subtitle' => 'Site title, only visible if no <a href="javascript:void(0);" class="redux-group-tab-link-a" data-key="0" data-rel="0">logo</a> is uploaded.', 'desc' => '', 'type' => 'color', 'default' => '#007CFF' ),
                array( 'slug' => 'header_links', 'title' => 'Header Links Color', 'subtitle' => 'Menu and Icons Links Color', 'desc' => '', 'type' => 'color', 'default' => '#939597' ),
                array( 'slug' => 'header_links_hover', 'title' => 'Header Hover Links Color', 'subtitle' => 'Menu and Icons Hover Links Color', 'desc' => '', 'type' => 'color', 'default' => '#007CFF' ),
                array( 'slug' => 'header_links_active', 'title' => 'Header Active Links Color', 'subtitle' => 'Menu Active Links Color', 'desc' => '', 'type' => 'color', 'default' => '#007CFF' ),
                array( 'slug' => 'header_submenu_active', 'title' => 'Sub Menu Hover and Active Links Color', 'subtitle' => 'Sub Menu Hover and Active Links Color', 'desc' => '', 'type' => 'color', 'default' => '#007CFF' ),
                /* BuddyPanel */
                array( 'slug' => 'sidenav_color_options_info', 'desc' => 'BuddyPanel Colors', 'type' => 'info' ),
                array( 'slug' => 'sidenav_background', 'title' => 'BuddyPanel Background', 'subtitle' => 'BuddyPanel background color', 'desc' => '', 'type' => 'color', 'default' => '#ffffff' ),
                array( 'slug' => 'sidenav_links', 'title' => 'BuddyPanel Links Color', 'subtitle' => 'BuddyPanel menu items color', 'desc' => '', 'type' => 'color', 'default' => '#939597' ),
                array( 'slug' => 'sidenav_links_hover', 'title' => 'BuddyPanel Hover Links Color', 'subtitle' => 'BuddyPanel menu items hover color', 'desc' => '', 'type' => 'color', 'default' => '#007CFF' ),
                array( 'slug' => 'sidenav_links_active', 'title' => 'BuddyPanel Active Links Color', 'subtitle' => 'BuddyPanel menu items active color', 'desc' => '', 'type' => 'color', 'default' => '#007CFF' ),
                /* Links and accents */
				array( 'slug' => 'links_options_info', 'desc' => 'Accents and Links Colors', 'type' => 'info' ),
                array( 'slug' => 'accent_color', 'title' => 'Accents', 'subtitle' => 'Used for links, icons, buttons, highlights, and the mobile titlebar.', 'desc' => '', 'type' => 'color', 'default' => '#007CFF' ),
                array( 'slug' => 'accent_hover', 'title' => 'Hover links color', 'subtitle' => 'Hover links color', 'desc' => '', 'type' => 'color', 'default' => '#0F74E0' ),
                array( 'slug' => 'heading_text_color', 'title' => 'Heading links', 'subtitle' => 'Page/post title colors and supplementary links color when some elements needs it', 'desc' => '', 'type' => 'color', 'default' => '#122B46' ),
                array( 'slug' => 'alternate_link_color', 'title' => 'Secondary menu links', 'subtitle' => 'Secondary menu items and alternate links color', 'desc' => '', 'type' => 'color', 'default' => '#939597' ),
                array( 'slug' => 'alternate_link_hover', 'title' => 'Secondary and headings hover color', 'subtitle' => 'Secondary menu items and alternate hover links color', 'desc' => '', 'type' => 'color', 'default' => '#007CFF' ),
                array( 'slug' => 'alternate_link_active', 'title' => 'Secondary menu active links color', 'subtitle' => 'Secondary menu active links color', 'desc' => '', 'type' => 'color', 'default' => '#122B46' ),
                /* Footer */
                array( 'slug' => 'footer_color_options_info', 'desc' => 'Footer Colors', 'type' => 'info' ),
                array( 'slug' => 'footer_widget_background', 'title' => 'Footer Widgets Background', 'subtitle' => 'Only visible if you have added widgets to the footer at <em>Appearance &gt; Widgets</em>.', 'desc' => '', 'type' => 'color', 'default' => '#ffffff' ),
				array( 'slug' => 'footer_background', 'title' => 'Footer Background', 'subtitle' => 'The main footer area at the bottom of the site.', 'desc' => '', 'type' => 'color', 'default' => '#ffffff' ),
                array( 'slug' => 'footer_links', 'title' => 'Footer Links Color', 'subtitle' => 'Footer menu items color', 'desc' => '', 'type' => 'color', 'default' => '#939597' ),
                array( 'slug' => 'footer_links_hover', 'title' => 'Footer Hover Links Color', 'subtitle' => 'Footer menu items hover color', 'desc' => '', 'type' => 'color', 'default' => '#007CFF' ),
                array( 'slug' => 'footer_links_active', 'title' => 'Footer Active Links Color', 'subtitle' => 'Footer menu items active color', 'desc' => '', 'type' => 'color', 'default' => '#007CFF' ),
                /* Body elements */
                array( 'slug' => 'color_options_info', 'desc' => 'Body elements', 'type' => 'info' ),
				array( 'slug' => 'body_background', 'title' => 'Body Background', 'subtitle' => 'The main content area of the theme.', 'desc' => '', 'type' => 'color', 'default' => '#FAFBFD' ),
				array( 'slug' => 'buddyboss_theme_group_cover_bg', 'title' => 'Cover Image Background', 'subtitle' => 'Only visible if you have enabled Group cover images in the <a href="javascript:void(0);" class="redux-group-tab-link-a" data-key="4" data-rel="4">Cover Images</a> options area.', 'desc' => '', 'type' => 'color', 'default' => '#607387' ),
                array( 'slug' => 'light_background_blocks', 'title' => 'Light Background Blocks', 'subtitle' => 'Light background elements used for sub menu blocks, some header backgrounds or other supplementary elements', 'desc' => '', 'type' => 'color', 'default' => '#FBFBFC' ),
                array( 'slug' => 'body_blocks', 'title' => 'Content Blocks Background', 'subtitle' => 'Content blocks and widget containers background color', 'desc' => '', 'type' => 'color', 'default' => '#FFFFFF' ),
                array( 'slug' => 'body_blocks_border', 'title' => 'Content Blocks Border', 'subtitle' => 'Content blocks and widget containers border color', 'desc' => '', 'type' => 'color', 'default' => '#E7E9EC' ),
                array( 'slug' => 'tooltip_background', 'title' => 'Tooltips Background', 'subtitle' => 'Tooltips background color', 'desc' => '', 'type' => 'color', 'default' => '#122b46' ),
                array( 'slug' => 'tooltip_color', 'title' => 'Tooltips Color', 'subtitle' => 'Tooltips color', 'desc' => '', 'type' => 'color', 'default' => '#ffffff' ),
				/* Text elements */
                array( 'slug' => 'text_color_options_info', 'desc' => 'Text Colors', 'type' => 'info' ),
				array( 'slug' => 'body_text_color', 'title' => 'Body Text', 'subtitle' => 'Paragraphs and main content text.', 'desc' => '', 'type' => 'color', 'default' => '#4D5C6D' ),
                array( 'slug' => 'alternate_text_color', 'title' => 'Alternate Text', 'subtitle' => 'Supplementary text color', 'desc' => '', 'type' => 'color', 'default' => '#A3A5A9' ),
				/* Login / Register Screens */
                array( 'slug' => 'admin_screen_info', 'desc' => 'Login / Register Screens', 'type' => 'info' ),
                array( 'slug' => 'admin_screen_bgr_color', 'title' => 'Login / Register Background Color', 'subtitle' => 'Select your background color for login screen.', 'desc' => '', 'type' => 'color', 'default' => '#FAFBFD' ),
                array( 'slug' => 'admin_screen_txt_color', 'title' => 'Login / Register Text Color', 'subtitle' => 'Select your text color for login screen.', 'desc' => '', 'type' => 'color', 'default' => '#122B46' ),
                array( 'slug' => 'admin_screen_links_color', 'title' => 'Login / Register Links and Button Color', 'subtitle' => 'Select links and buttons color for login screen.', 'desc' => '', 'type' => 'color', 'default' => '#007CFF' ),
                array( 'slug' => 'admin_screen_links_hover_color', 'title' => 'Login / Register Links and Button Hover Color', 'subtitle' => 'Select links and buttons hover color for login screen.', 'desc' => '', 'type' => 'color', 'default' => '#0070e6' ),
			);

			$color_scheme_elements = apply_filters( 'buddyboss_theme_color_element_options', $style_elements );

			$style_fields = array();

			$color_schemes = array(
				'default' => array(
					'alt'		 => 'Default',
					'img'		 => get_template_directory_uri() . '/inc/admin/assets/images/presets/default.png',
					'presets'	 => array(
						'accent_color'					 => '#007CFF',
                        'accent_hover'					 => '#0F74E0',
                        'heading_text_color'			 => '#122B46',
                        'alternate_link_color'			 => '#939597',
                        'alternate_link_hover'			 => '#007CFF',
                        'alternate_link_active'			 => '#122B46',
						'header_background'				 => '#ffffff',
                        'header_links'				     => '#939597',
                        'header_links_hover'			 => '#007CFF',
                        'header_links_active'			 => '#007CFF',
                        'header_submenu_active'          => '#007CFF',
                        'sidenav_background'			 => '#ffffff',
                        'sidenav_links'				     => '#939597',
                        'sidenav_links_hover'			 => '#007CFF',
                        'sidenav_links_active'			 => '#007CFF',
                        'footer_links'				     => '#939597',
                        'footer_links_hover'			 => '#007CFF',
                        'footer_links_active'			 => '#007CFF',
						'body_background'				 => '#FAFBFD',
						'body_text_color'				 => '#4D5C6D',
                        'alternate_text_color'           => '#A3A5A9',
						'sitetitle_color'				 => '#007CFF',
						'footer_widget_background'		 => '#ffffff',
						'footer_background'				 => '#ffffff',
						'buddyboss_theme_group_cover_bg' => '#607387',
                        'light_background_blocks'        => '#FBFBFC',
                        'body_blocks'                    => '#FFFFFF',
                        'body_blocks_border'             => '#E7E9EC',
                        'tooltip_background'             => '#122b46',
                        'tooltip_color'                  => '#ffffff',
                        'admin_screen_bgr_color'		 => '#FAFBFD',
                        'admin_screen_txt_color'		 => '#122B46',
                        'admin_screen_links_color'		 => '#007CFF',
                        'admin_screen_links_hover_color' => '#0070e6',
					)
				)
			);

			foreach ( $color_scheme_elements as $elem ) {
				if ( $elem[ 'type' ] == 'color' ) {
					$style_fields[] = array(
						'id'		 => $elem[ 'slug' ],
						'type'		 => $elem[ 'type' ],
						'title'		 => $elem[ 'title' ],
						'subtitle'	 => $elem[ 'subtitle' ],
						'desc'		 => $elem[ 'desc' ],
						'default'	 => $elem[ 'default' ],
                        'transparent'	 => false
					);
				} elseif ( $elem[ 'type' ] == 'info' ) {
					$style_fields[] = array(
						'id'	 => $elem[ 'slug' ],
						'type'	 => 'info',
						'desc'	 => $elem[ 'desc' ],
					);
				} elseif ( $elem[ 'type' ] == 'preset' ) {
					$style_fields[] = array(
						'id'		 => $elem[ 'slug' ],
						'type'		 => 'custom_image_select',
						'title'		 => 'Default Color Scheme',
						'subtitle'	 => 'Reset all colors back to the default color scheme.',
						'presets'	 => true,
						'customizer' => false,
						'default'	 => $elem[ 'default' ],
						'options'	 => apply_filters( 'buddyboss_theme_color_schemes', $color_schemes )
					);
				}
			}

			$this->sections[] = array(
				'icon'		 => 'el-icon-tint',
				'icon_class' => 'icon-large',
				'title'		 => __( 'Styling', 'press-pool' ),
				'priority'	 => 20,
				'desc'		 => '',
				'fields'	 => $style_fields,
			);

			// Array of social options
			$social_options = array(
				'dribbble'		 => '',
				'email'			 => '',
                'facebook'		 => '',
                'flickr'		 => '',
				'github'		 => '',
                'google-plus'    => '',
                'instagram'		 => '',
                'linkedin'		 => '',
                'medium'		 => '',
                'meetup'		 => '',
                'pinterest'		 => '',
                'quora'		     => '',
                'reddit'		 => '',
				'rss'			 => '',
				'skype'			 => '',
                'tumblr'		 => '',
                'twitter'		 => '',
				'vimeo'			 => '',
				'vk'			 => '',
				'xing'			 => '',
				'youtube'		 => '',
			);

			// Social link options
			$social_options = apply_filters( 'buddyboss_social_options', $social_options );
			$footer_options = array(
				'1' => array(
					'alt'	 => 'Footer style 1',
					'img'	 => get_template_directory_uri() . '/inc/admin/assets/images/footers/footer-1.png'
				),
				'2' => array(
					'alt'	 => 'Footer style 2',
					'img'	 => get_template_directory_uri() . '/inc/admin/assets/images/footers/footer-2.png'
				),
			);

			// Menu List
			$menus = wp_get_nav_menus();
			$menu_items = array();
			foreach ( $menus as $menu ) :
				$menu_items[$menu->slug] = $menu->name;
			endforeach;

			// Footer Settings
			$this->sections[] = array(
				'title'		 => __( 'Footer', 'press-pool' ),
				'icon'		 => 'el-icon-bookmark',
				'customizer' => false,
				'fields'	 => array(
					array(
						'id'		 => 'footer_widgets',
						'type'		 => 'switch',
						'title'		 => __( 'Footer Widget Area', 'press-pool' ),
						'subtitle'	 => __( 'Enable footer widget area. You will then need to add widgets at <em>Appearance &gt; Widgets</em>.', 'press-pool' ),
						'default'	 => '0',
						'on'		 => __( 'On', 'press-pool' ),
						'off'		 => __( 'Off', 'press-pool' ),
					),
					array(
						'id'       => 'footer_widget_columns',
						'type'     => 'select',
						'title'    => __('Footer Widget Columns', 'press-pool' ),
						'subtitle' => __('Select number of columns in footer.', 'press-pool' ),
						'options'  => array(
							'1' => '1 Column',
							'2' => '2 Columns',
							'3' => '3 Columns',
							'4' => '4 Columns',
							'5' => '5 Columns',
							'6' => '6 Columns',
						),
						'default'  => '4',
						'required'	 => array( 'footer_widgets', 'equals', '1' ),
					),
					array(
						'id'		 => 'footer_copyright',
						'type'		 => 'switch',
						'title'		 => __( 'Footer Bottom Area', 'press-pool' ),
						'subtitle'	 => __( 'Enable footer bottom area', 'press-pool' ),
						'default'	 => '1',
						'on'		 => __( 'On', 'press-pool' ),
						'off'		 => __( 'Off', 'press-pool' ),
					),
					array(
						'id'		 => 'footer_style',
						'title'		 => __( 'Footer Style', 'press-pool' ),
						'subtitle'	 => __( 'Select the footer layout.', 'press-pool' ),
						'type'		 => 'image_select',
						'customizer' => false,
						'default'	 => '1',
                        'options'	 => $footer_options,
						'required'	 => array( 'footer_copyright', 'equals', '1' ),
					),
					array(
						'id'		 => 'footer_logo',
						'title'		 => __( 'Footer Logo', 'press-pool' ),
						'subtitle'	 => __( 'Upload your custom site logo for footer layout.', 'press-pool' ),
						'type'		 => 'media',
						'url'		 => false,
						'required'	 => array( 'footer_style', 'equals', '2' ),
                        'class'      => 'footer-logo bbThumbScale bbThumbScaleFl',
					),
					array(
                        'id' => 'footer_logo_size',
                        'type' => 'slider',
                        'title' => __('Footer Logo Size', 'press-pool'),
                        'subtitle' => __('Adjust the size of footer logo', 'press-pool'),
                        'desc' => __('Maximum logo width 350px.<br ?>If the logo size is taller than the footer height, it will be made smaller to fit within the footer.', 'press-pool'),
                        'default' => '0',
                        'min' => 0,
                        'step' => 1,
                        'max' => 350,
                        'class' => 'bbThumbSlide bbThumbSlideFl',
                        'required'	 => array( 'footer_style', 'equals', '2' ),
                    ),
					array(
						'id'		 => 'footer_tagline',
						'title'		 => __( 'Footer Tagline', 'press-pool' ),
						'subtitle'	 => __( 'Set footer tagline', 'press-pool' ),
						'type'		 => 'text',
						'required'	 => array( 'footer_style', 'equals', '2' ),
					),
					array(
						'id'		 => 'copyright_text',
						'type'		 => 'editor',
						'title'		 => __( 'Copyright Text', 'press-pool' ),
						'subtitle'	 => __( 'Enter your custom copyright text.', 'press-pool' ),
						'default'	 => '&copy; [boss_current_year]' . ' - ' . get_bloginfo('name'),
						'args'		 => array(
							'teeny'			 => true,
							'media_buttons'	 => false,
							'textarea_rows'	 => 6
						),
						'required'	 => array( 'footer_copyright', 'equals', '1' ),
					),
					array(
						'id'       => 'footer_menu',
						'type'     => 'select',
						'title'    => __('Footer Menu', 'press-pool' ),
						'subtitle' => __('Select menu from the dropdown.', 'press-pool' ),
						'options'  => $menu_items,
						'default'  => '',
						'required'	 => array( 'footer_style', 'equals', '1' ),
					),
					array(
						'id'       => 'footer_secondary_menu',
						'type'     => 'select',
						'title'    => __('Footer Secondary Menu', 'press-pool' ),
						'subtitle' => __('Select menu from the dropdown.', 'press-pool' ),
						'options'  => $menu_items,
						'default'  => '',
						'required'	 => array( 'footer_copyright', 'equals', '1' ),
					),
					array(
						'id'		 => 'footer_description',
						'type'		 => 'editor',
						'title'		 => __( 'Footer Description', 'press-pool' ),
						'subtitle'	 => __( 'Enter content or shortcode to show on footer right side.', 'press-pool' ),
						'default'	 => '',
						'args'		 => array(
							'teeny'			 => true,
							'media_buttons'	 => false,
							'textarea_rows'	 => 4
						),
						'required'	 => array( 'footer_copyright', 'equals', '1' ),
					),
					array(
						'id'		 => 'boss_footer_social_links',
						'type'		 => 'sortable',
						'title'		 => __( 'Social Links', 'press-pool' ),
						'label'		 => true,
						'required'	 => array( 'footer_copyright', 'equals', '1' ),
						'options'	 => $social_options,
					),
				)
			);

            // Blog
			$this->sections[] = array(
				'title'		 => __( 'Blog', 'press-pool' ),
				'id'		 => 'blog',
				'customizer' => false,
				'icon'		 => 'el-icon-edit',
				'fields'	 => array(
                    array(
						'id'		 => 'blog_layout',
						'type'		 => 'info',
						'desc'		 => __( 'Blog Layout', 'press-pool' ),
					),
					array(
						'id'		 => 'blog_archive_layout',
						'title'		 => __( 'Blog Archive Layout', 'press-pool' ),
						'subtitle'	 => __( 'Set layout (List, Masonry or Grid) for blog page.', 'press-pool' ),
						'type'		 => 'image_select',
						'customizer' => false,
						'default'	 => 'standard',
						'options'	 => array(
							'standard' => array(
								'alt'	 => 'List',
								'img'	 => get_template_directory_uri() . '/inc/admin/assets/images/blog/blog-standard.png'
							),
							'masonry' => array(
								'alt'	 => 'Masonry',
								'img'	 => get_template_directory_uri() . '/inc/admin/assets/images/blog/blog-masonry.png'
							),
                            'grid' => array(
								'alt'	 => 'Grid',
								'img'	 => get_template_directory_uri() . '/inc/admin/assets/images/blog/blog-grid.png'
							),
						)
					),
					array(
						'id'		 => 'blog_single_blog',
						'type'		 => 'info',
						'desc'		 => __( 'Single blog post', 'press-pool' ),
					),
                    array(
						'id'		 => 'blog_featured_img',
						'title'		 => __( 'Featured Image Style', 'press-pool' ),
						'subtitle'	 => __( 'Select layout for single blog post featured image (Above Content, Fullwidth Below Title, Fullwidth Above Content', 'press-pool' ),
                        'desc'	 => __( 'In fullwidth the sidebar will not be visible.', 'press-pool' ),
						'type'		 => 'image_select',
						'customizer' => false,
						'default'	 => 'default-fi',
						'options'	 => array(
							'default-fi' => array(
								'alt'	 => 'Default',
								'img'	 => get_template_directory_uri() . '/inc/admin/assets/images/blog/featured-img-default.png'
							),
							'full-fi' => array(
								'alt'	 => 'Fullwidth',
								'img'	 => get_template_directory_uri() . '/inc/admin/assets/images/blog/blog-title-top.png'
							),
                            'full-fi-invert' => array(
								'alt'	 => 'Fullwidth (Title below)',
								'img'	 => get_template_directory_uri() . '/inc/admin/assets/images/blog/blog-title-bottom.png'
							),
						)
					),
                    array(
						'id'		 => 'blog_related_switch',
						'type'		 => 'switch',
						'title'		 => __( 'Enable Related Posts', 'press-pool' ),
						'default'	 => true,
						'on'		 => __( 'On', 'press-pool' ),
						'off'		 => __( 'Off', 'press-pool' ),
					),
                    array(
                        'id'       => 'blog_related_posts_limit',
                        'type'     => 'text',
                        'title'    => __('Related posts limit', 'press-pool'),
                        'subtitle' => __('Limit the number of related posts on single blog page', 'press-pool'),
                        'validate' => 'numeric',
                        'msg'      => 'Set number of related posts',
                        'default'  => '5'
                    ),
                    array(
						'id'		 => 'blog_author_box',
						'type'		 => 'switch',
						'title'		 => __( 'Enable Post Author Box', 'press-pool' ),
						'default'	 => false,
						'on'		 => __( 'On', 'press-pool' ),
						'off'		 => __( 'Off', 'press-pool' ),
					),
                    array(
						'id'		 => 'blog_share_box',
						'type'		 => 'switch',
						'title'		 => __( 'Enable Floating Social Share', 'press-pool' ),
						'default'	 => true,
						'on'		 => __( 'On', 'press-pool' ),
						'off'		 => __( 'Off', 'press-pool' ),
					),
					array(
						'id'		 => 'blog_platform_author_link',
						'type'		 => 'switch',
						'title'		 => __( 'Enable BuddyPress Profile Link', 'press-pool' ),
						'default'	 => true,
						'on'		 => __( 'On', 'press-pool' ),
						'off'		 => __( 'Off', 'press-pool' ),
					),
                    array(
						'id'		 => 'blog_newsletter_sign_up',
						'type'		 => 'info',
						'desc'		 => __( 'Newsletter Sign Up', 'press-pool' ),
					),
                    array(
						'id'		 => 'blog_newsletter_switch',
						'type'		 => 'switch',
						'title'		 => __( 'Toggle Newsletter Sign Up Form', 'press-pool' ),
						'default'	 => false,
						'on'		 => __( 'On', 'press-pool' ),
						'off'		 => __( 'Off', 'press-pool' ),
					),
                    array(
                        'id'=>'blog_shortcode',
                        'type' => 'textarea',
                        'title' => __('Add Shortcode', 'press-pool'),
                        'subtitle' => __('Add shortcode to show Newsletter Sign Up Form', 'press-pool'),
                        'validate' => 'html_custom',
                        'default' => '',
                        'allowed_html' => array(
                            'a' => array(
                                'href' => array(),
                                'title' => array()
                            ),
                            'br' => array(),
                            'em' => array(),
                            'strong' => array()
                        ),
                        'required'	 => array( 'blog_newsletter_switch', 'equals', '1' ),
                    ),
				)
			);

			// WordPress Login
			$this->sections[] = array(
				'title'		 => __( 'Login / Register', 'press-pool' ),
				'id'		 => 'admin_login',
				'customizer' => false,
				'icon'		 => 'el-icon-lock',
				'fields'	 => array(
					array(
						'id'		 => 'boss_custom_login',
						'type'		 => 'switch',
						'title'		 => __( 'Custom Login/Register Screen', 'press-pool' ),
						'subtitle'	 => __( 'Toggle the custom login/register screen design options on or off.', 'press-pool' ),
						'default'	 => true,
						'on'		 => __( 'On', 'press-pool' ),
						'off'		 => __( 'Off', 'press-pool' ),
					),
                    array(
						'id'		 => 'admin_logo_media',
						'type'		 => 'media',
						'title'		 => __( 'Custom Logo', 'press-pool' ),
						'subtitle'	 => __( 'We display a custom logo in place of the default WordPress logo.', 'press-pool' ),
						'url'		 => false,
						'required'	 => array( 'boss_custom_login', 'equals', '1' ),
                        'class'      => 'bbThumbScale bbThumbScaleLr',
					),
                    array(
                        'id' => 'admin_logo_width',
                        'type' => 'slider',
                        'title' => __('Logo Width', 'press-pool'),
                        'subtitle' => __('Set logo width size', 'press-pool'),
                        'desc' => __('Value between 50 and 320px', 'press-pool'),
                        "default" => 145,
                        "min" => 50,
                        "step" => 1,
                        "max" => 320,
                        'display_value' => '145px',
						'required'	 => array( 'boss_custom_login', 'equals', '1' ),
                        'class' => 'bbThumbSlide bbThumbSlideLr',
                    ),
                    array(
						'id'		 => 'admin_login_background_switch',
						'type'		 => 'switch',
						'title'		 => __( 'Toggle custom background', 'press-pool' ),
						'subtitle'	 => __( 'Set custom background design on or off.', 'press-pool' ),
						'default'	 => '0',
						'on'		 => __( 'On', 'press-pool' ),
						'off'		 => __( 'Off', 'press-pool' ),
						'required'	 => array( 'boss_custom_login', 'equals', '1' ),
					),
                    array(
						'id'		 => 'admin_login_background_media',
						'type'		 => 'media',
						'title'		 => __( 'Background Image', 'press-pool' ),
						'subtitle'	 => __( 'We display a custom background image in half width of the screen.', 'press-pool' ),
						'url'		 => false,
						'required'	 => array( 'admin_login_background_switch', 'equals', '1' ),
					),
                    array(
                        'id'       => 'admin_login_background_text',
                        'type'     => 'text',
                        'title'    => __('Custom Heading', 'press-pool'),
                        'subtitle' => __('We display a custom title above the background image.', 'press-pool'),
                        'msg'      => 'Custom login heading',
                        'default'  => '',
                        'required'	 => array( 'admin_login_background_switch', 'equals', '1' ),
                    ),
                    array(
                        'id'       =>'admin_login_background_textarea',
                        'type'     => 'textarea',
                        'title'    => __('Custom Text', 'press-pool'),
                        'subtitle' => __('We display custom text above the background image.', 'press-pool'),
                        'validate' => 'html_custom',
                        'default'  => '',
                        'required'	 => array( 'admin_login_background_switch', 'equals', '1' ),
                        'allowed_html' => array(
                            'a' => array(
                                'href' => array(),
                                'title' => array()
                            ),
                            'br' => array(),
                            'em' => array(),
                            'strong' => array()
                        ),
                    ),
                    array(
                        'id' => 'admin_login_heading_position',
                        'type' => 'slider',
                        'title' => __('Custom Heading Position', 'press-pool'),
                        'subtitle' => __('Set vertical heading position', 'press-pool'),
                        'desc' => __('Value between 5 and 90%', 'press-pool'),
                        "default" => 8,
                        "min" => 5,
                        "step" => 1,
                        "max" => 90,
                        'display_value' => '8%',
                        'required'	 => array( 'admin_login_background_switch', 'equals', '1' ),
                    ),
                    array(
                        'id' => 'admin_login_overlay_opacity',
                        'type' => 'slider',
                        'title' => __('Overlay Opacity', 'press-pool'),
                        'subtitle' => __('Set overlay opacity', 'press-pool'),
                        'desc' => __('Value between 0 and 100%', 'press-pool'),
                        "default" => 30,
                        "min" => 0,
                        "step" => 10,
                        "max" => 100,
                        'display_value' => '30%',
                        'required'	 => array( 'admin_login_background_switch', 'equals', '1' ),
                    ),
                    array(
                        'id'       => 'admin_login_heading_color',
                        'type'     => 'color',
                        'title'    => __('Custom Heading Color', 'press-pool'),
                        'subtitle' => __('Select your text color for custom heading section.', 'press-pool'),
                        'default'  => '#FFFFFF',
                        'validate' => 'color',
                        'required'	 => array( 'admin_login_background_switch', 'equals', '1' ),
                    ),
				)
			);

            // 404 Page
			$this->sections[] = array(
				'title'		 => __( '404 Page', 'press-pool' ),
				'id'		 => '404_page',
				'customizer' => false,
				'icon'		 => 'el-icon-error',
				'fields'	 => array(
                    array(
                        'id'       => '404_title',
                        'type'     => 'text',
                        'title'    => __('Title', 'press-pool'),
                        'subtitle' => __('Title that will be shown on 404 page.', 'press-pool'),
                        'msg'      => 'Custom login heading',
                        'default'  => 'Looks like you got lost!',
                    ),
                    array(
                        'id'       =>'404_desc',
                        'type'     => 'textarea',
                        'title'    => __('404 Description', 'press-pool'),
                        'subtitle' => __('Add text to 404 Page', 'press-pool'),
                        'validate' => 'html_custom',
                        'default'  => 'We couldn’t find the page you were looking for.',
                        'allowed_html' => array(
                            'a' => array(
                                'href' => array(),
                                'title' => array()
                            ),
                            'br' => array(),
                            'em' => array(),
                            'strong' => array()
                        ),
                    ),
                    array(
						'id'		 => '404_image',
						'type'		 => 'media',
						'title'		 => __( '404 Image', 'press-pool' ),
						'url'		 => false,
					),
                    array(
                        'id'       => '404_button_text',
                        'type'     => 'text',
                        'title'    => __('Button Text', 'press-pool'),
                        'default'  => 'Go Home',
                    ),
                    array(
                        'id'       => '404_button_link',
                        'type'     => 'text',
                        'title'    => __('Button Link', 'press-pool'),
                        'default'  => esc_url( home_url( '/' ) ),
                    ),
				)
			);

            // Maintenance Mode
			$this->sections[] = array(
				'title'		 => __( 'Maintenance Mode', 'press-pool' ),
				'id'		 => 'maintenance_page',
				'customizer' => false,
				'icon'		 => 'el-icon-cog',
				'fields'	 => array(
                    array(
						'id'		 => 'maintenance_mode',
						'type'		 => 'switch',
						'title'		 => __( 'Enable Maintenance Mode', 'press-pool' ),
                        'desc'       => __('If enabled it will show maintenance message for logged out users.', 'press-pool'),
						'default'	 => false,
						'on'		 => __( 'On', 'press-pool' ),
						'off'		 => __( 'Off', 'press-pool' ),
					),
                    array(
                        'id'       => 'maintenance_title',
                        'type'     => 'text',
                        'title'    => __('Title', 'press-pool'),
                        'subtitle' => __('Title that will be shown on Maintenance page.', 'press-pool'),
                        'msg'      => 'Custom Maintenance Title',
                        'default'  => 'Maintenance Mode',
                        'required'	 => array( 'maintenance_mode', 'equals', '1' ),
                    ),
                    array(
                        'id'       =>'maintenance_desc',
                        'type'     => 'textarea',
                        'title'    => __('Maintenance Description', 'press-pool'),
                        'subtitle' => __('Add text to Maintenance Page. Basic HTML is allowed.', 'press-pool'),
                        'validate' => 'html_custom',
                        'default'  => 'Undergoing scheduled maintenance. <br/>Sorry for the inconvenience.',
                        'required'	 => array( 'maintenance_mode', 'equals', '1' ),
                        'allowed_html' => array(
                            'a' => array(
                                'href' => array(),
                                'title' => array()
                            ),
                            'br' => array(),
                            'em' => array(),
                            'strong' => array()
                        ),
                    ),
                    array(
						'id'		 => 'maintenance_image_switch',
						'type'		 => 'switch',
						'title'		 => __( 'Enable Maintenance Image', 'press-pool' ),
						'default'	 => false,
						'on'		 => __( 'On', 'press-pool' ),
						'off'		 => __( 'Off', 'press-pool' ),
						'required'	 => array( 'maintenance_mode', 'equals', '1' ),
					),
                    array(
						'id'		 => 'maintenance_image',
						'type'		 => 'media',
						'title'		 => __( 'Custom Image', 'press-pool' ),
						'url'		 => false,
						'required'	 => array( 'maintenance_image_switch', 'equals', '1' ),
					),
                    array(
						'id'		 => 'maintenance_countdown',
						'type'		 => 'switch',
						'title'		 => __( 'Enable Countdown', 'press-pool' ),
						'default'	 => false,
						'on'		 => __( 'On', 'press-pool' ),
						'off'		 => __( 'Off', 'press-pool' ),
						'required'	 => array( 'maintenance_mode', 'equals', '1' ),
					),
                    array(
                        'id'       => 'maintenance_time',
                        'type'     => 'text',
                        'title'    => __('Back Online Date', 'press-pool'),
                        'msg'      => 'Back Online Date',
                        'default'  => '',
                        'desc'       => __('Enter the date the site will come back online.', 'press-pool'),
                        'required'	 => array( 'maintenance_countdown', 'equals', '1' ),
                    ),
                    array(
						'id'		 => 'maintenance_subscribe',
						'type'		 => 'switch',
						'title'		 => __( 'Enable Subscribe', 'press-pool' ),
						'default'	 => false,
						'on'		 => __( 'On', 'press-pool' ),
						'off'		 => __( 'Off', 'press-pool' ),
						'required'	 => array( 'maintenance_mode', 'equals', '1' ),
					),
                    array(
                        'id'       => 'maintenance_subscribe_title',
                        'type'     => 'text',
                        'title'    => __('Subscribe Title', 'press-pool'),
                        'msg'      => 'Subscribe Title',
                        'default'  => 'Notify me when it’s ready',
                        'required'	 => array( 'maintenance_subscribe', 'equals', '1' ),
                    ),
                    array(
                        'id'       =>'maintenance_subscribe_shortcode',
                        'type'     => 'textarea',
                        'title'    => __('Subscribe Form Shortcode', 'press-pool'),
                        'validate' => 'html_custom',
                        'default'  => '',
                        'allowed_html' => array(
                            'a' => array(
                                'href' => array(),
                                'title' => array()
                            ),
                            'br' => array(),
                            'em' => array(),
                            'strong' => array()
                        ),
                        'required'	 => array( 'maintenance_subscribe', 'equals', '1' ),
                    ),
                    array(
						'id'		 => 'maintenance_social_networks',
						'type'		 => 'switch',
						'title'		 => __( 'Enable Social Networks', 'press-pool' ),
						'default'	 => false,
						'on'		 => __( 'On', 'press-pool' ),
						'off'		 => __( 'Off', 'press-pool' ),
						'required'	 => array( 'maintenance_mode', 'equals', '1' ),
					),
                    array(
                        'id'       => 'social_network_twitter',
                        'type'     => 'text',
                        'title'    => __('Twitter', 'press-pool'),
                        'default'  => '',
                        'required'	 => array( 'maintenance_social_networks', 'equals', '1' ),
                    ),
                    array(
                        'id'       => 'social_network_facebook',
                        'type'     => 'text',
                        'title'    => __('Facebook', 'press-pool'),
                        'default'  => '',
                        'required'	 => array( 'maintenance_social_networks', 'equals', '1' ),
                    ),
                    array(
                        'id'       => 'social_network_google',
                        'type'     => 'text',
                        'title'    => __('Google', 'press-pool'),
                        'default'  => '',
                        'required'	 => array( 'maintenance_social_networks', 'equals', '1' ),
                    ),
                    array(
                        'id'       => 'social_network_instagram',
                        'type'     => 'text',
                        'title'    => __('Instagram', 'press-pool'),
                        'default'  => '',
                        'required'	 => array( 'maintenance_social_networks', 'equals', '1' ),
                    ),
                    array(
                        'id'       => 'social_network_youtube',
                        'type'     => 'text',
                        'title'    => __('Youtube', 'press-pool'),
                        'default'  => '',
                        'required'	 => array( 'maintenance_social_networks', 'equals', '1' ),
                    ),
                    array(
						'id'		 => 'contact_button',
						'type'		 => 'switch',
						'title'		 => __( 'Enable Contact', 'press-pool' ),
						'default'	 => false,
						'on'		 => __( 'On', 'press-pool' ),
						'off'		 => __( 'Off', 'press-pool' ),
						'required'	 => array( 'maintenance_mode', 'equals', '1' ),
					),
                    array(
                        'id'       => 'contact_button_text',
                        'type'     => 'text',
                        'title'    => __('Contact Text', 'press-pool'),
                        'default'  => 'Contact us at '.get_option('admin_email'),
                        'required'	 => array( 'contact_button', 'equals', '1' ),
                    ),
				)
			);

			$user_cover_hights = apply_filters( 'buddyboss_user_cover_hights', array( 'small' => 'Small', 'large' => 'Large' ) );
			$user_cover_widths = apply_filters( 'buddyboss_user_cover_widths', array( 'default' => 'Default', 'full' => 'Full Width' ) );
			$group_cover_hights = apply_filters( 'buddyboss_group_cover_hights', array( 'small' => 'Small', 'large' => 'Large' ) );
			$group_cover_widths = apply_filters( 'buddyboss_group_cover_widths', array( 'default' => 'Default', 'full' => 'Full Width' ) );

			// Cover Images
			if ( function_exists('is_buddypress') ) {
			$this->sections[] = array(
				'title'		 => __( 'Cover Images', 'press-pool' ),
				'id'		 => 'cover_photos',
				'customizer' => false,
				'icon'		 => 'el-icon-photo-alt',
				'fields'	 => array(
					array(
						'id'	 => 'buddypress_user_info',
						'type'	 => 'info',
						'desc'	 => __( 'Member Profiles', 'press-pool' )
					),
					array(
						'id'		 => 'buddyboss_profile_cover_width',
						'type'		 => 'select',
						'title'		 => __( 'Cover Image Width', 'press-pool' ),
						'subtitle'	 => __( 'Adjust the width of member profile cover image.', 'press-pool' ),
						'options'	 => $user_cover_widths,
						'default'	 => 'default',
					),
					array(
						'id'		 => 'buddyboss_profile_cover_height',
						'type'		 => 'select',
						'title'		 => __( 'Cover Image Height', 'press-pool' ),
						'subtitle'	 => __( 'Adjust the height of member profile cover image.', 'press-pool' ),
						'options'	 => $user_cover_hights,
						'default'	 => 'small',
					),
					array(
						'id'		 => 'buddyboss_profile_cover_default',
						'type'		 => 'media',
						'title'		 => __( 'Default Cover Image', 'press-pool' ),
						'subtitle'	 => __( 'You can optionally upload your own image to always use a default cover photo. Ideal size is 1300px by 225px or larger.', 'press-pool' ),
						'url'		 => false,
					),
					array(
						'id'	 => 'buddypress_group_info',
						'type'	 => 'info',
						'desc'	 => __( 'Social Groups', 'press-pool' )
					),
					array(
						'id'		 => 'buddyboss_group_cover_width',
						'type'		 => 'select',
						'title'		 => __( 'Cover Image Width', 'press-pool' ),
						'subtitle'	 => __( 'Adjust the width of group cover image.', 'press-pool' ),
						'options'	 => $group_cover_widths,
						'default'	 => 'default',
					),
					array(
						'id'		 => 'buddyboss_group_cover_height',
						'type'		 => 'select',
						'title'		 => __( 'Cover Image Height', 'press-pool' ),
						'subtitle'	 => __( 'Adjust the height of group cover image.', 'press-pool' ),
						'options'	 => $group_cover_hights,
						'default'	 => 'small',
					),
					array(
						'id'		 => 'buddyboss_group_cover_default',
						'type'		 => 'media',
						'title'		 => __( 'Default Cover Image', 'press-pool' ),
						'subtitle'	 => __( 'You can optionally upload your own image to always use a default cover photo. Ideal size is 1300px by 225px or larger.', 'press-pool' ),
						'url'		 => false,
					),
				)
			);
			}

			if ( function_exists('is_bbpress') ) {
            // bbPress Forums
			$this->sections[] = array(
				'title'		 => __( 'Forums', 'press-pool' ),
				'id'		 => 'bbPress_forums',
				'customizer' => false,
				'icon'		 => 'el el-comment-alt',
				'fields'	 => array(
					array(
						'id'       => 'bbpress_forums_item_layout',
						'type'     => 'select',
						'title'    => __('Forum Grids', 'press-pool' ),
						'subtitle' => __('Set forum grid layouts to Card or Cover style.', 'press-pool' ),
						'options'  => array(
							'card' => 'Card',
							'cover' => 'Cover',
						),
						'default'  => 'card',
					),
					array(
						'id'		 => 'bbpress_banner_switch',
						'type'		 => 'switch',
						'title'		 => __( 'Show Forum Banner', 'press-pool' ),
						'subtitle'	 => __( 'If enabled it will show a banner on the Forum index.', 'press-pool' ),
						'default'	 => false,
						'on'		 => __( 'On', 'press-pool' ),
						'off'		 => __( 'Off', 'press-pool' ),
					),
					array(
						'id'		 => 'bbpress_banner_image',
						'type'		 => 'media',
						'title'		 => __( 'Custom Banner Image', 'press-pool' ),
						'subtitle'	 => __( 'We display a custom banner on forum index page.', 'press-pool' ),
						'url'		 => false,
						'required'	 => array( 'bbpress_banner_switch', 'equals', '1' ),
					),
                    array(
                        'id'       => 'bbpress_banner_overlay',
                        'type'     => 'color',
                        'title'    => __('Background Overlay Color', 'press-pool'),
                        'subtitle' => __('Select background overlay color for banner image.', 'press-pool'),
                        'default'  => '#007CFF',
                        'validate' => 'color',
						'required'	 => array( 'bbpress_banner_switch', 'equals', '1' ),
                    ),
                    array(
                        'id' => 'bbpress_banner_overlay_opacity',
                        'type' => 'slider',
                        'title' => __('Background Overlay Opacity', 'press-pool'),
                        'subtitle' => __('Set background overlay opacity', 'press-pool'),
                        'desc' => __('Value between 0 and 100%', 'press-pool'),
                        "default" => 40,
                        "min" => 0,
                        "step" => 10,
                        "max" => 100,
                        'display_value' => '40%',
                        'required'	 => array( 'bbpress_banner_switch', 'equals', '1' ),
                    ),
                    array(
                        'id'       => 'bbpress_banner_text',
                        'type'     => 'color',
                        'title'    => __('Banner Text Color', 'press-pool'),
                        'subtitle' => __('Select text color for banner area.', 'press-pool'),
                        'default'  => '#ffffff',
                        'validate' => 'color',
						'required'	 => array( 'bbpress_banner_switch', 'equals', '1' ),
                    ),
                    array(
                        'id'       => 'bbpress_banner_title',
                        'type'     => 'text',
                        'title'    => __('Forum Title', 'press-pool'),
                        'subtitle' => __('Title that will be shown on forum index banner area.', 'press-pool'),
                        'msg'      => 'Forum Title',
                        'default'  => '',
						'required'	 => array( 'bbpress_banner_switch', 'equals', '1' ),
                    ),
                    array(
                        'id'       =>'bbpress_banner_description',
                        'type'     => 'textarea',
                        'title'    => __('Forum Description', 'press-pool'),
                        'subtitle' => __('Description that will be shown on forum index banner area.', 'press-pool'),
                        'validate' => 'html_custom',
                        'default'  => 'Find answers, ask questions, and connect with our <br/>community around the world.',
                        'allowed_html' => array(
                            'a' => array(
                                'href' => array(),
                                'title' => array()
                            ),
                            'br' => array(),
                            'em' => array(),
                            'strong' => array()
                        ),
						'required'	 => array( 'bbpress_banner_switch', 'equals', '1' ),
                    ),
					array(
						'id'		 => 'bbpress_banner_search',
						'type'		 => 'switch',
						'title'		 => __( 'Enable Search', 'press-pool' ),
						'subtitle'	 => __( 'If enabled search will show on banner.', 'press-pool' ),
						'default'	 => '1',
						'on'		 => __( 'On', 'press-pool' ),
						'off'		 => __( 'Off', 'press-pool' ),
						'required'	 => array( 'bbpress_banner_switch', 'equals', '1' ),
					),
				)
			);
			}

            if ( class_exists( 'SFWD_LMS' ) ) {
                // LearnDash pages
                $this->sections[] = array(
                    'title'		 => __( 'LearnDash', 'press-pool' ),
                    'id'		 => 'learndash',
                    'customizer' => false,
                    'icon'		 => 'el el-icon-certificate',
                    'fields'	 => array(
                        array(
                            'id'	 => 'learndash_course_archive',
                            'type'	 => 'info',
                            'desc'	 => __( 'Courses Index', 'press-pool' )
                        ),
                        array(
                            'id'		 => 'learndash_course_index_show_categories_filter',
                            'type'		 => 'switch',
                            'title'		 => __( 'Show Categories Filter', 'press-pool' ),
                            'subtitle'	 => __( 'Enable filtering the courses index by categories.', 'press-pool' ),
                            'default'	 => '1',
                            'on'		 => __( 'On', 'press-pool' ),
                            'off'		 => __( 'Off', 'press-pool' ),
                        ),
                        array(
                            'id'       => 'learndash_course_index_categories_filter_taxonomy',
                            'type'     => 'select',
                            'title'    => __('Taxonomy', 'press-pool' ),
                            'subtitle' => __('Select the taxonomy to filter by.', 'press-pool' ),
                            'options'  => array(
                                'ld_course_category'=> __( 'Course Categories', 'press-pool' ),
                                'ld_course_tag'     => __( 'Course Tags', 'press-pool' ),
                            ),
                            'default'  => 'ld_couse_category',
                            'required'	 => array( 'learndash_course_index_show_categories_filter', 'equals', '1' ),
                        ),
                        array(
                            'id'		 => 'learndash_course_index_show_instructors_filter',
                            'type'		 => 'switch',
                            'title'		 => __( 'Show Instructors Filter', 'press-pool' ),
                            'subtitle'	 => __( 'Enable filtering the courses index by instructors.', 'press-pool' ),
                            'default'	 => '1',
                            'on'		 => __( 'On', 'press-pool' ),
                            'off'		 => __( 'Off', 'press-pool' ),
                        ),
                        array(
                            'id'	 => 'learndash_course_archive',
                            'type'	 => 'info',
                            'desc'	 => __( 'Course Content', 'press-pool' )
                        ),
						array(
                            'id'		 => 'learndash_course_author',
                            'type'		 => 'switch',
                            'title'		 => __( 'Course Author', 'press-pool' ),
                            'subtitle'	 => __( 'Display the course author on courses, lessons and topics.', 'press-pool' ),
                            'default'	 => '1',
                            'on'		 => __( 'On', 'press-pool' ),
                            'off'		 => __( 'Off', 'press-pool' ),
                        ),
                        array(
                            'id'		 => 'learndash_course_date',
                            'type'		 => 'switch',
                            'title'		 => __( 'Course Date', 'press-pool' ),
                            'subtitle'	 => __( 'Display the course date on courses, lessons and topics.', 'press-pool' ),
                            'default'	 => '1',
                            'on'		 => __( 'On', 'press-pool' ),
                            'off'		 => __( 'Off', 'press-pool' ),
                        ),
	                    array(
		                    'id'		 => 'learndash_course_participants',
		                    'type'		 => 'switch',
		                    'title'		 => __( 'Course Participants', 'press-pool' ),
		                    'subtitle'	 	 => __( 'Display the list of enrolled course participants on courses, lessons and topics.', 'press-pool' ),
		                    'default'	 	 => '1',
		                    'on'		 => __( 'On', 'press-pool' ),
		                    'off'		 => __( 'Off', 'press-pool' ),
	                    ),
                    )
                );
            }

			// Codes Settings
			$this->sections[] = array(
				'title'		 => __( 'Custom Codes', 'press-pool' ),
				'icon'		 => 'el-icon-edit',
				'customizer' => false,
				'fields'	 => array(
					array(
						'id'		 => 'tracking',
						'type'		 => 'switch',
						'title'		 => __( 'Tracking Code', 'press-pool' ),
						'subtitle'	 => __( 'Paste your Google Analytics (or other) tracking code here. This will be added before the closing of body tag.', 'press-pool' ),
						'default'	 => '0',
						'on'		 => __( 'On', 'press-pool' ),
						'off'		 => __( 'Off', 'press-pool' ),
					),
					array(
						'id'		 => 'boss_tracking_code',
						'type'		 => 'ace_editor',
						'mode'		 => 'plain_text',
						'theme'		 => 'chrome',
						'required'	 => array( 'tracking', 'equals', '1' ),
					),
					array(
						'id'		 => 'custom_css',
						'type'		 => 'switch',
						'title'		 => __( 'CSS', 'press-pool' ),
						'subtitle'	 => __( 'Quickly add some CSS here to make design adjustments. It is a much better solution then manually editing the theme. You may also consider using a child theme.', 'press-pool' ),
						'default'	 => '0',
						'on'		 => __( 'On', 'press-pool' ),
						'off'		 => __( 'Off', 'press-pool' ),
					),
					array(
						'id'		 => 'boss_custom_css',
						'type'		 => 'ace_editor',
						'mode'		 => 'css',
						'validate'	 => 'css',
						'theme'		 => 'chrome',
						'default'	 => ".your-class {\n    color: blue;\n}",
						'required'	 => array( 'custom_css', 'equals', '1' ),
					),
					array(
						'id'		 => 'custom_js',
						'type'		 => 'switch',
						'title'		 => __( 'JavaScript', 'press-pool' ),
						'subtitle'	 => __( 'Quickly add some JavaScript code here. It is a much better solution then manually editing the theme. You may also consider using a child theme.', 'press-pool' ),
						'default'	 => '0',
						'on'		 => __( 'On', 'press-pool' ),
						'off'		 => __( 'Off', 'press-pool' ),
					),
					array(
						'id'		 => 'boss_custom_js',
						'type'		 => 'ace_editor',
						'mode'		 => 'javascript',
						'validate'	 => 'plain_text',
						'theme'		 => 'chrome',
						'default'	 => "jQuery( document ).ready( function(){\n    //Your codes strat from here\n});",
						'required'	 => array( 'custom_js', 'equals', '1' ),
					)
				)
			);

			// Minify Assets
			$this->sections[] = array(
				'title'		 => __( 'Minify Assets', 'press-pool' ),
				'id'		 => 'optimizations',
				'customizer' => false,
				'icon'		 => 'el-icon-tasks',
				'fields'	 => array(
					array(
						'id'		 => 'boss_minified_css',
						'type'		 => 'switch',
						'title'		 => __( 'Minify CSS', 'press-pool' ),
						'subtitle'	 => __( 'By default the theme loads stylesheets that are not minified. You can enable this setting to instead load minified and combined stylesheets.', 'press-pool' ),
						'default'	 => '1',
						'on'		 => __( 'On', 'press-pool' ),
						'off'		 => __( 'Off', 'press-pool' ),
					),
					array(
						'id'		 => 'boss_minified_js',
						'type'		 => 'switch',
						'title'		 => __( 'Minify JavaScript', 'press-pool' ),
						'subtitle'	 => __( 'By default the theme loads scripts that are not minified. You can enable this setting to instead load minified and combined JS files.', 'press-pool' ),
						'default'	 => '1',
						'on'		 => __( 'On', 'press-pool' ),
						'off'		 => __( 'Off', 'press-pool' ),
					),
				)
			);

			// Import / Export
			$this->sections[] = array(
				'title'	 => __( 'Import / Export', 'press-pool' ),
				//'desc'	 => __( 'Import and Export your Boss theme settings from file, text or URL.', 'press-pool' ),
				'icon'	 => 'el-icon-refresh',
				'fields' => array(
					array(
						'id'		 => 'opt-import-export',
						'type'		 => 'import_export',
						'full_width' => true,
					),
				),
			);

		}

		/**
		 * All the possible arguments for Boss.
		 * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
		 * */
		public function setArguments() {

			$theme = wp_get_theme(); // For use with some settings. Not necessary.

			$this->args = array(
				// TYPICAL -> Change these values as you need/desire
				'opt_name'			 => 'buddyboss_theme_options', // This is where your data is stored in the database and also becomes your global variable name.
				'display_name'		 => $theme->get( 'Name' ), // Name that appears at the top of your panel
				'display_version'	 => $theme->get( 'Version' ), // Version that appears at the top of your panel
				'menu_type'			 => 'submenu', //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
				'allow_sub_menu'	 => true, // Show the sections below the admin menu item or not
				'menu_title'		 => __( 'Theme Options', 'press-pool' ),
				'page_title'		 => __( 'BuddyBoss Theme', 'press-pool' ),
				'google_api_key'	 => 'AIzaSyARjtGd3aZFBZ_8kJty6BwgRsCurPFvFeg', // https://console.developers.google.com/project/ Must be defined to add google fonts to the typography module
				'async_typography'	 => false, // Use a asynchronous font on the front end or font string
				//'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
				'admin_bar'			 => false, // Show the panel pages on the admin bar
				'global_variable'	 => '', // Set a different name for your global variable other than the opt_name
				'dev_mode'			 => false, // Show the time the page took to load, etc
				'customizer'		 => true, // Enable basic customizer support
				'page_priority'		 => null, // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
				'page_parent'		 => 'themes.php', // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
				'page_permissions'	 => 'manage_options', // Permissions needed to access the options panel.
				'menu_icon'			 => '', // Specify a custom URL to an icon
				'last_tab'			 => '', // Force your panel to always open to a specific tab (by id)
				'page_icon'			 => 'icon-themes', // Icon displayed in the admin panel next to your menu_title
				'page_slug'			 => 'buddyboss_theme_options', // Page slug used to denote the panel
				'save_defaults'		 => true, // On load save the defaults to DB before user clicks save or not
				'default_show'		 => false, // If true, shows the default value next to each field that is not the default value.
				'default_mark'		 => '', // What to print by the field's title if the value shown is default. Suggested: *
				'show_import_export' => true, // Shows the Import/Export panel when not used as a field.
				// CAREFUL -> These options are for advanced use only
				'transient_time'	 => 60 * MINUTE_IN_SECONDS,
				'output'			 => true, // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output
				'output_tag'		 => true, // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
				'footer_credit'		 => ' ', // Disable the footer credit of Redux. Please leave if you can help it.
			);

			// SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.
			$this->args[ 'share_icons' ][]	 = array(
				'url'	 => 'https://www.facebook.com/BuddyBossWP',
				'title'	 => 'Like us on Facebook',
				'icon'	 => 'el-icon-facebook'
			);
			$this->args[ 'share_icons' ][]	 = array(
				'url'	 => 'https://twitter.com/buddybosswp',
				'title'	 => 'Follow us on Twitter',
				'icon'	 => 'el-icon-twitter'
			);
			$this->args[ 'share_icons' ][]	 = array(
				'url'	 => 'https://www.linkedin.com/company/buddyboss',
				'title'	 => 'Find us on LinkedIn',
				'icon'	 => 'el-icon-linkedin'
			);

			// Panel Intro text -> before the form
			if ( !isset( $this->args[ 'global_variable' ] ) || $this->args[ 'global_variable' ] !== false ) {
				if ( !empty( $this->args[ 'global_variable' ] ) ) {
					$v = $this->args[ 'global_variable' ];
				} else {
					$v = str_replace( '-', '_', $this->args[ 'opt_name' ] );
				}
				$this->args[ 'intro_text' ] = sprintf( __( '<p>To access any of your saved options from within your code you can use your global variable: <strong>$%1$s</strong></p>', 'press-pool' ), $v );
			} else {
				$this->args[ 'intro_text' ] = __( '<p>This text is displayed above the options panel. It isn\'t required, but more info is always better! The intro_text field accepts all HTML.</p>', 'press-pool' );
			}
		}

	}

	global $reduxConfig;
	$reduxConfig = new buddyboss_theme_Redux_Framework_config();
}
