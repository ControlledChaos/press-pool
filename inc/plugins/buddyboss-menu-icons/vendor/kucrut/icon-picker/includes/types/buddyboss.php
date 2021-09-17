<?php

require_once dirname( __FILE__ ) . '/font.php';

/**
 * BuddyBoss Icons
 *
 * @package Icon_Picker
 * @author  Dzikri Aziz <kvcrvt@gmail.com>
 */
class Icon_Picker_Type_BuddyBoss extends Icon_Picker_Type_Font {

	/**
	 * Icon type ID
	 *
	 * @since Menu Icons 0.1.0
	 * @access protected
	 * @var    string
	 */
	protected $id = 'buddyboss';

	/**
	 * Icon type name
	 *
	 * @since Menu Icons 0.1.0
	 * @access protected
	 * @var    string
	 */
	protected $name = 'BuddyBoss';

	/**
	 * Icon type version
	 *
	 * @since Menu Icons 0.1.0
	 * @access protected
	 * @var    string
	 */
	protected $version = '1.0';

	/**
	 * Get icon groups
	 *
	 * @since Menu Icons 0.1.0
	 * @return array
	 */
	public function get_groups() {
		$groups = array(
			array(
				'id'   => 'alert',
				'name' => __( 'Alerts', 'press-pool' ),
			),
			array(
				'id'   => 'arrow',
				'name' => __( 'Arrows', 'press-pool' ),
			),
			array(
				'id'   => 'brand',
				'name' => __( 'Brands', 'press-pool' ),
			),
			array(
				'id'   => 'chart',
				'name' => __( 'Charts', 'press-pool' ),
			),
			array(
				'id'   => 'cloud',
				'name' => __( 'Cloud', 'press-pool' ),
			),
            array(
				'id'   => 'courses',
				'name' => __( 'Courses', 'press-pool' ),
			),
            array(
				'id'   => 'device',
				'name' => __( 'Devices', 'press-pool' ),
			),
			array(
				'id'   => 'file',
				'name' => __( 'File Types', 'press-pool' ),
			),
			array(
				'id'   => 'format',
				'name' => __( 'Formatting', 'press-pool' ),
			),
            array(
				'id'   => 'control',
				'name' => __( 'Form Controls', 'press-pool' ),
			),
			array(
				'id'   => 'map',
				'name' => __( 'Maps', 'press-pool' ),
			),
			array(
				'id'   => 'media',
				'name' => __( 'Media Player', 'press-pool' ),
			),
			array(
				'id'   => 'misc',
				'name' => __( 'Misc.', 'press-pool' ),
			),
			array(
				'id'   => 'nature',
				'name' => __( 'Nature', 'press-pool' ),
			),
			array(
				'id'   => 'phone',
				'name' => __( 'Phone Calls', 'press-pool' ),
			),
			array(
				'id'   => 'web',
				'name' => __( 'Web Application', 'press-pool' ),
			)
		);

		/**
		 * Filter buddyboss groups
		 *
		 * @since 0.1.0
		 *
		 * @param array $groups Icon groups.
		 */
		$groups = apply_filters( 'icon_picker_buddyboss_groups', $groups );

		return $groups;
	}

	/**
	 * Get icon names
	 *
	 * @since Menu Icons 0.1.0
	 * @return array
	 */
	public function get_items() {
		$items = array(
			array(
				'group' => 'web',
				'id'    => 'bb-icon-activity',
				'name'  => __( 'Activity', 'press-pool' ),
			),
			array(
				'group' => 'media',
				'id'    => 'bb-icon-airplay',
				'name'  => __( 'Airplay', 'press-pool' ),
			),
			array(
				'group' => 'alert',
				'id'    => 'bb-icon-alert-exclamation',
				'name'  => __( 'Alert: Exclamation', 'press-pool' ),
			),
			array(
				'group' => 'alert',
				'id'    => 'bb-icon-alert-octagon',
				'name'  => __( 'Alert: Octagon', 'press-pool' ),
			),
			array(
				'group' => 'alert',
				'id'    => 'bb-icon-alert-question',
				'name'  => __( 'Alert: Question', 'press-pool' ),
			),
            array(
				'group' => 'alert',
				'id'    => 'bb-icon-alert-thin',
				'name'  => __( 'Alert: Thin', 'press-pool' ),
			),
			array(
				'group' => 'alert',
				'id'    => 'bb-icon-alert-triangle',
				'name'  => __( 'Alert: Triangle', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-align-center',
				'name'  => __( 'Align: Center', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-align-justify',
				'name'  => __( 'Align: Justify', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-align-left',
				'name'  => __( 'Align: Left', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-align-right',
				'name'  => __( 'Align: Right', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-anchor',
				'name'  => __( 'Anchor', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-angle-down',
				'name'  => __( 'Angle: Down', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-angle-left',
				'name'  => __( 'Angle: Left', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-angle-right',
				'name'  => __( 'Angle: Right', 'press-pool' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'bb-icon-aperture',
				'name'  => __( 'Aperture', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-arrow-up-square',
				'name'  => __( 'Arrow Up: Square', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-arrow-circle',
				'name'  => __( 'Arrow: Circle', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-arrow-down-left',
				'name'  => __( 'Arrow: Down Left', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-arrow-down-right',
				'name'  => __( 'Arrow: Down Right', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-arrow-down',
				'name'  => __( 'Arrow: Down', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-arrow-left',
				'name'  => __( 'Arrow: Left', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-arrow-right',
				'name'  => __( 'Arrow: Right', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-arrow-up-left',
				'name'  => __( 'Arrow: Up Left', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-arrow-up-right',
				'name'  => __( 'Arrow: Up Right', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-arrow-up',
				'name'  => __( 'Arrow: Up', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-at-sign',
				'name'  => __( 'At Sign', 'press-pool' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'bb-icon-award',
				'name'  => __( 'Award', 'press-pool' ),
			),
            array(
				'group' => 'courses',
				'id'    => 'bb-icon-badge',
				'name'  => __( 'Badge', 'press-pool' ),
			),
            array(
				'group' => 'misc',
				'id'    => 'bb-icon-badge-tall',
				'name'  => __( 'Badge: Tall', 'press-pool' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'bb-icon-ball-soccer',
				'name'  => __( 'Ball: Soccer', 'press-pool' ),
			),
			array(
				'group' => 'chart',
				'id'    => 'bb-icon-bar-chart',
				'name'  => __( 'Bar Chart', 'press-pool' ),
			),
			array(
				'group' => 'chart',
				'id'    => 'bb-icon-bar-chart-square',
				'name'  => __( 'Bar Chart: Square', 'press-pool' ),
			),
			array(
				'group' => 'chart',
				'id'    => 'bb-icon-bar-chart-up',
				'name'  => __( 'Bar Chart: Up', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-battery',
				'name'  => __( 'Battery', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-battery-charging',
				'name'  => __( 'Battery: Charging', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-bell',
				'name'  => __( 'Bell', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-bell-off',
				'name'  => __( 'Bell: Off', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-bell-plus',
				'name'  => __( 'Bell: Plus', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-bell-small',
				'name'  => __( 'Bell: Small', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-bluetooth',
				'name'  => __( 'Bluetooth', 'press-pool' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'bb-icon-board',
				'name'  => __( 'Board', 'press-pool' ),
			),
            array(
				'group' => 'misc',
				'id'    => 'bb-icon-board-list',
				'name'  => __( 'Board: List', 'press-pool' ),
			),
            array(
				'group' => 'misc',
				'id'    => 'bb-icon-board-box',
				'name'  => __( 'Board: Box', 'press-pool' ),
			),
            array(
				'group' => 'misc',
				'id'    => 'bb-icon-board-code',
				'name'  => __( 'Board: Code', 'press-pool' ),
			),
            array(
				'group' => 'misc',
				'id'    => 'bb-icon-board-list',
				'name'  => __( 'Board: List', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-bold',
				'name'  => __( 'Bold', 'press-pool' ),
			),
			array(
				'group' => 'courses',
				'id'    => 'bb-icon-book',
				'name'  => __( 'Book', 'press-pool' ),
			),
            array(
				'group' => 'web',
				'id'    => 'bb-icon-book-open',
				'name'  => __( 'Book: Open', 'press-pool' ),
			),
            array(
				'group' => 'web',
				'id'    => 'bb-icon-book-round',
				'name'  => __( 'Book: Round', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-bookmark',
				'name'  => __( 'Bookmark', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-bookmark-small-fill',
				'name'  => __( 'Bookmark: Small-Fill', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-bookmark-small',
				'name'  => __( 'Bookmark: Small', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-box',
				'name'  => __( 'Box', 'press-pool' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'bb-icon-briefcase',
				'name'  => __( 'Briefcase', 'press-pool' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'bb-icon-bulb',
				'name'  => __( 'Bulb', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-list-view',
				'name'  => __( 'Bulleted List', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-calendar',
				'name'  => __( 'Calendar', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-calendar-small',
				'name'  => __( 'Calendar: Small', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-camera',
				'name'  => __( 'Camera', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-camera-off',
				'name'  => __( 'Camera: Off', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-camera-small',
				'name'  => __( 'Camera: Small', 'press-pool' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'bb-icon-car-small',
				'name'  => __( 'Car: Small', 'press-pool' ),
			),
			array(
				'group' => 'media',
				'id'    => 'bb-icon-cast',
				'name'  => __( 'Cast', 'press-pool' ),
			),
            array(
				'group' => 'web',
				'id'    => 'bb-icon-chat',
				'name'  => __( 'Chat', 'press-pool' ),
			),
			array(
				'group' => 'control',
				'id'    => 'bb-icon-check',
				'name'  => __( 'Check', 'press-pool' ),
			),
			array(
				'group' => 'control',
				'id'    => 'bb-icon-check-square-small',
				'name'  => __( 'Check: Square-Small', 'press-pool' ),
			),
			array(
				'group' => 'control',
				'id'    => 'bb-icon-check-circle',
				'name'  => __( 'Check: Circle', 'press-pool' ),
			),
			array(
				'group' => 'control',
				'id'    => 'bb-icon-check-small',
				'name'  => __( 'Check: Small', 'press-pool' ),
			),
			array(
				'group' => 'control',
				'id'    => 'bb-icon-check-square',
				'name'  => __( 'Check: Square', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-chevron-down',
				'name'  => __( 'Chevron: Down', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-chevron-left',
				'name'  => __( 'Chevron: Left', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-chevron-right',
				'name'  => __( 'Chevron: Right', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-chevron-up',
				'name'  => __( 'Chevron: Up', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-chevrons-down',
				'name'  => __( 'Chevrons: Down', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-chevrons-left',
				'name'  => __( 'Chevrons: Left', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-chevrons-right',
				'name'  => __( 'Chevrons: Right', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-chevrons-up',
				'name'  => __( 'Chevrons: Up', 'press-pool' ),
			),
			array(
				'group' => 'brand',
				'id'    => 'bb-icon-chrome',
				'name'  => __( 'Chrome', 'press-pool' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'bb-icon-circle',
				'name'  => __( 'Circle', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-clipboard',
				'name'  => __( 'Clipboard', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-clock',
				'name'  => __( 'Clock', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-clock-small',
				'name'  => __( 'Clock: Small', 'press-pool' ),
			),
			array(
				'group' => 'control',
				'id'    => 'bb-icon-close',
				'name'  => __( 'Close', 'press-pool' ),
			),
			array(
				'group' => 'control',
				'id'    => 'bb-icon-close-circle',
				'name'  => __( 'Close: Circle', 'press-pool' ),
			),
			array(
				'group' => 'cloud',
				'id'    => 'bb-icon-cloud',
				'name'  => __( 'Cloud', 'press-pool' ),
			),
			array(
				'group' => 'cloud',
				'id'    => 'bb-icon-cloud-download',
				'name'  => __( 'Cloud: Download', 'press-pool' ),
			),
			array(
				'group' => 'cloud',
				'id'    => 'bb-icon-cloud-drizzle',
				'name'  => __( 'Cloud: Drizzle', 'press-pool' ),
			),
			array(
				'group' => 'cloud',
				'id'    => 'bb-icon-cloud-lightning',
				'name'  => __( 'Cloud: Lightning', 'press-pool' ),
			),
			array(
				'group' => 'cloud',
				'id'    => 'bb-icon-cloud-off',
				'name'  => __( 'Cloud: Off', 'press-pool' ),
			),
			array(
				'group' => 'cloud',
				'id'    => 'bb-icon-cloud-rain',
				'name'  => __( 'Cloud: Rain', 'press-pool' ),
			),
			array(
				'group' => 'cloud',
				'id'    => 'bb-icon-cloud-snow',
				'name'  => __( 'Cloud: Snow', 'press-pool' ),
			),
			array(
				'group' => 'cloud',
				'id'    => 'bb-icon-cloud-upload',
				'name'  => __( 'Cloud: Upload', 'press-pool' ),
			),
			array(
				'group' => 'brand',
				'id'    => 'bb-icon-codepen',
				'name'  => __( 'Codepen', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-command',
				'name'  => __( 'Command', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-comment',
				'name'  => __( 'Comment', 'press-pool' ),
			),
            array(
				'group' => 'web',
				'id'    => 'bb-icon-activity-comment',
				'name'  => __( 'Comment: Activity', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-comment-circle',
				'name'  => __( 'Comment: Circle', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-comment-square',
				'name'  => __( 'Comment: Square', 'press-pool' ),
			),
			array(
				'group' => 'map',
				'id'    => 'bb-icon-compass',
				'name'  => __( 'Compass', 'press-pool' ),
			),
            array(
				'group' => 'web',
				'id'    => 'bb-icon-connections',
				'name'  => __( 'Connections', 'press-pool' ),
			),
            array(
				'group' => 'web',
				'id'    => 'bb-icon-connection-minus',
				'name'  => __( 'Connection: Minus', 'press-pool' ),
			),
            array(
				'group' => 'web',
				'id'    => 'bb-icon-connection-waiting',
				'name'  => __( 'Connection: Pending', 'press-pool' ),
			),
            array(
				'group' => 'web',
				'id'    => 'bb-icon-connection-remove',
				'name'  => __( 'Connection: Remove', 'press-pool' ),
			),
            array(
				'group' => 'web',
				'id'    => 'bb-icon-connection-request',
				'name'  => __( 'Connection: Request', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-copy',
				'name'  => __( 'Copy', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-corner-down-left',
				'name'  => __( 'Corner: Down Left', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-corner-down-right',
				'name'  => __( 'Corner: Down Right', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-corner-left-down',
				'name'  => __( 'Corner: Left Down', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-corner-left-up',
				'name'  => __( 'Corner: Left Up', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-corner-right-down',
				'name'  => __( 'Corner: Right Down', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-corner-right-up',
				'name'  => __( 'Corner: Right Up', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-corner-up-left',
				'name'  => __( 'Corner: Up Left', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-corner-up-right',
				'name'  => __( 'Corner: Up Right', 'press-pool' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'bb-icon-cpu',
				'name'  => __( 'CPU', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-credit-card',
				'name'  => __( 'Credit Card', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-crop',
				'name'  => __( 'Crop', 'press-pool' ),
			),
			array(
				'group' => 'control',
				'id'    => 'bb-icon-crosshair',
				'name'  => __( 'Crosshair', 'press-pool' ),
			),
            array(
				'group' => 'web',
				'id'    => 'bb-icon-cube',
				'name'  => __( 'Cube', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-delete',
				'name'  => __( 'Delete', 'press-pool' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'bb-icon-disc',
				'name'  => __( 'Disc', 'press-pool' ),
			),
            array(
				'group' => 'web',
				'id'    => 'bb-icon-discussion',
				'name'  => __( 'Discussion', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-download',
				'name'  => __( 'Download', 'press-pool' ),
			),
            array(
				'group' => 'brand',
				'id'    => 'bb-icon-rounded-dribbble',
				'name'  => __( 'Dribbble: Circle', 'press-pool' ),
			),
			array(
				'group' => 'nature',
				'id'    => 'bb-icon-droplet',
				'name'  => __( 'Droplet', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-edit',
				'name'  => __( 'Edit', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-edit-square-small',
				'name'  => __( 'Edit: Square-Small', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-edit-square',
				'name'  => __( 'Edit: Square', 'press-pool' ),
			),
            array(
				'group' => 'format',
				'id'    => 'bb-icon-edit-thin',
				'name'  => __( 'Edit: Thin', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-eye',
				'name'  => __( 'Eye', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-eye-off',
				'name'  => __( 'Eye: Off', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-eye-small',
				'name'  => __( 'Eye: Small', 'press-pool' ),
			),
			array(
				'group' => 'brand',
				'id'    => 'bb-icon-facebook',
				'name'  => __( 'Facebook', 'press-pool' ),
			),
            array(
				'group' => 'brand',
				'id'    => 'bb-icon-rounded-facebook',
				'name'  => __( 'Facebook: Circle', 'press-pool' ),
			),
			array(
				'group' => 'brand',
				'id'    => 'bb-icon-facebook-small',
				'name'  => __( 'Facebook: Small', 'press-pool' ),
			),
            array(
				'group' => 'brand',
				'id'    => 'bb-icon-rounded-facebook',
				'name'  => __( 'Facebook: Round', 'press-pool' ),
			),
			array(
				'group' => 'media',
				'id'    => 'bb-icon-fast-forward',
				'name'  => __( 'Fast Forward', 'press-pool' ),
			),
			array(
				'group' => 'nature',
				'id'    => 'bb-icon-feather',
				'name'  => __( 'Feather', 'press-pool' ),
			),
			array(
				'group' => 'file',
				'id'    => 'bb-icon-file',
				'name'  => __( 'File', 'press-pool' ),
			),
			array(
				'group' => 'file',
				'id'    => 'bb-icon-file-minus',
				'name'  => __( 'File: Minus', 'press-pool' ),
			),
			array(
				'group' => 'file',
				'id'    => 'bb-icon-file-plus',
				'name'  => __( 'File: Plus', 'press-pool' ),
			),
			array(
				'group' => 'file',
				'id'    => 'bb-icon-file-text',
				'name'  => __( 'File: Text', 'press-pool' ),
			),
			array(
				'group' => 'file',
				'id'    => 'bb-icon-film',
				'name'  => __( 'Film', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-filter',
				'name'  => __( 'Filter', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-flag',
				'name'  => __( 'Flag', 'press-pool' ),
			),
            array(
				'group' => 'brand',
				'id'    => 'bb-icon-rounded-flickr',
				'name'  => __( 'Flickr: Circle', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-flag-small',
				'name'  => __( 'Flag: Small', 'press-pool' ),
			),
			array(
				'group' => 'file',
				'id'    => 'bb-icon-folder',
				'name'  => __( 'Folder', 'press-pool' ),
			),
			array(
				'group' => 'nature',
				'id'    => 'bb-icon-forest',
				'name'  => __( 'Forest', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-gear',
				'name'  => __( 'Gear', 'press-pool' ),
			),
            array(
				'group' => 'web',
				'id'    => 'bb-icon-generic',
				'name'  => __( 'Generic', 'press-pool' ),
			),
			array(
				'group' => 'file',
				'id'    => 'bb-icon-gif',
				'name'  => __( 'Gif', 'press-pool' ),
			),
			array(
				'group' => 'social',
				'id'    => 'bb-icon-github',
				'name'  => __( 'Github', 'press-pool' ),
			),
			array(
				'group' => 'brand',
				'id'    => 'bb-icon-gitlab',
				'name'  => __( 'Gitlab', 'press-pool' ),
			),
			array(
				'group' => 'nature',
				'id'    => 'bb-icon-globe',
				'name'  => __( 'Globe', 'press-pool' ),
			),
			array(
				'group' => 'brand',
				'id'    => 'bb-icon-rounded-google-plus',
				'name'  => __( 'Google Plus: Circle', 'press-pool' ),
			),
			 array(
				'group' => 'courses',
				'id'    => 'bb-icon-graduation-cap',
				'name'  => __( 'Graduation Cap', 'press-pool' ),
			),
            array(
				'group' => 'format',
				'id'    => 'bb-icon-grid-round',
				'name'  => __( 'Grid Round', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-grid-view-small',
				'name'  => __( 'Grid View: Small', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-grid-view',
				'name'  => __( 'Grid View', 'press-pool' ),
			),
            array(
				'group' => 'web',
				'id'    => 'bb-icon-groups',
				'name'  => __( 'Groups', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-hash',
				'name'  => __( 'Hash', 'press-pool' ),
			),
			array(
				'group' => 'device',
				'id'    => 'bb-icon-headphones',
				'name'  => __( 'Headphones', 'press-pool' ),
			),
			array(
				'group' => 'device',
				'id'    => 'bb-icon-headphones-small',
				'name'  => __( 'Headphones: Small', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-heart',
				'name'  => __( 'Heart', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-heart-fill',
				'name'  => __( 'Heart: Fill', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-heart-small',
				'name'  => __( 'Heart: Small', 'press-pool' ),
			),
			array(
				'group' => 'alert',
				'id'    => 'bb-icon-help-circle',
				'name'  => __( 'Help: Circle', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-home',
				'name'  => __( 'Home', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-home-small',
				'name'  => __( 'Home: Small', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-id-card',
				'name'  => __( 'ID Card', 'press-pool' ),
			),
			array(
				'group' => 'file',
				'id'    => 'bb-icon-image',
				'name'  => __( 'Image', 'press-pool' ),
			),
			array(
				'group' => 'file',
				'id'    => 'bb-icon-image-square',
				'name'  => __( 'Image: Square', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-inbox',
				'name'  => __( 'Inbox', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-inbox-o',
				'name'  => __( 'Inbox: Outline', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-inbox-small',
				'name'  => __( 'Inbox: Small', 'press-pool' ),
			),
			array(
				'group' => 'alert',
				'id'    => 'bb-icon-info',
				'name'  => __( 'Info', 'press-pool' ),
			),
			array(
				'group' => 'alert',
				'id'    => 'bb-icon-info-circle',
				'name'  => __( 'Info: Circle', 'press-pool' ),
			),
			array(
				'group' => 'brand',
				'id'    => 'bb-icon-instagram',
				'name'  => __( 'Instagram', 'press-pool' ),
			),
			array(
				'group' => 'brand',
				'id'    => 'bb-icon-rounded-instagram',
				'name'  => __( 'Instagram: Circle', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-italic',
				'name'  => __( 'Italic', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-key',
				'name'  => __( 'Key', 'press-pool' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'bb-icon-laugh',
				'name'  => __( 'Laugh', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-layers',
				'name'  => __( 'Layers', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-layout',
				'name'  => __( 'Layout', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-life-buoy',
				'name'  => __( 'Life Buoy', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-like',
				'name'  => __( 'Like', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-link',
				'name'  => __( 'Link', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-link-1',
				'name'  => __( 'Link: 1', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-link-2',
				'name'  => __( 'Link: 2', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-link-3',
				'name'  => __( 'Link: 3', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-external-link',
				'name'  => __( 'Link: External', 'press-pool' ),
			),
            array(
				'group' => 'brand',
				'id'    => 'bb-icon-rounded-linkedin',
				'name'  => __( 'Linkedin: Circle', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-list-view-small',
				'name'  => __( 'List View', 'press-pool' ),
			),
            array(
				'group' => 'format',
				'id'    => 'bb-icon-list-bookmark',
				'name'  => __( 'List: Bookmark', 'press-pool' ),
			),
            array(
				'group' => 'format',
				'id'    => 'bb-icon-all-results',
				'name'  => __( 'List: Bullets', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-list-doc',
				'name'  => __( 'List: Doc', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-loader',
				'name'  => __( 'Loader', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-loader-small',
				'name'  => __( 'Loader: Small', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-lock',
				'name'  => __( 'Lock', 'press-pool' ),
			),
            array(
				'group' => 'web',
				'id'    => 'bb-icon-lock-fill',
				'name'  => __( 'Lock: Fill', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-lock-small',
				'name'  => __( 'Lock: Small', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-log-in',
				'name'  => __( 'Log In', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-log-out',
				'name'  => __( 'Log Out', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-mail',
				'name'  => __( 'Mail', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-mail-open',
				'name'  => __( 'Mail: Open', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-mail-small',
				'name'  => __( 'Mail: Small', 'press-pool' ),
			),
			array(
				'group' => 'map',
				'id'    => 'bb-icon-map',
				'name'  => __( 'Map', 'press-pool' ),
			),
			array(
				'group' => 'map',
				'id'    => 'bb-icon-map-pin',
				'name'  => __( 'Map Pin', 'press-pool' ),
			),
			array(
				'group' => 'map',
				'id'    => 'bb-icon-map-pin-small',
				'name'  => __( 'Map Pin: Small', 'press-pool' ),
			),
			array(
				'group' => 'control',
				'id'    => 'bb-icon-maximize',
				'name'  => __( 'Maximize', 'press-pool' ),
			),
			array(
				'group' => 'control',
				'id'    => 'bb-icon-maximize-square',
				'name'  => __( 'Maximize: Square', 'press-pool' ),
			),
            array(
				'group' => 'brand',
				'id'    => 'bb-icon-rounded-medium',
				'name'  => __( 'Medium', 'press-pool' ),
			),
            array(
				'group' => 'brand',
				'id'    => 'bb-icon-rounded-meetup',
				'name'  => __( 'Meetup', 'press-pool' ),
			),
            array(
				'group' => 'web',
				'id'    => 'bb-icon-members',
				'name'  => __( 'Members', 'press-pool' ),
			),
            array(
				'group' => 'web',
				'id'    => 'bb-icon-membership',
				'name'  => __( 'Membership', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-menu-dots-h',
				'name'  => __( 'Menu Dots: Horz', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-menu-dots-v',
				'name'  => __( 'Menu Dots: Vert', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-menu',
				'name'  => __( 'Menu', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-menu-left',
				'name'  => __( 'Menu: Left', 'press-pool' ),
			),
			array(
				'group' => 'phone',
				'id'    => 'bb-icon-mic',
				'name'  => __( 'Mic', 'press-pool' ),
			),
			array(
				'group' => 'phone',
				'id'    => 'bb-icon-mic-off',
				'name'  => __( 'Mic: Off', 'press-pool' ),
			),
			array(
				'group' => 'control',
				'id'    => 'bb-icon-minimize',
				'name'  => __( 'Minimize', 'press-pool' ),
			),
			array(
				'group' => 'control',
				'id'    => 'bb-icon-minimize-square',
				'name'  => __( 'Minimize: Square', 'press-pool' ),
			),
			array(
				'group' => 'control',
				'id'    => 'bb-icon-minus',
				'name'  => __( 'Minus', 'press-pool' ),
			),
			array(
				'group' => 'control',
				'id'    => 'bb-icon-minus-circle',
				'name'  => __( 'Minus: Circle', 'press-pool' ),
			),
			array(
				'group' => 'control',
				'id'    => 'bb-icon-minus-square',
				'name'  => __( 'Minus: Square', 'press-pool' ),
			),
			array(
				'group' => 'device',
				'id'    => 'bb-icon-monitor',
				'name'  => __( 'Monitor', 'press-pool' ),
			),
			array(
				'group' => 'nature',
				'id'    => 'bb-icon-moon',
				'name'  => __( 'Moon', 'press-pool' ),
			),
            array(
				'group' => 'nature',
				'id'    => 'bb-icon-moon-circle',
				'name'  => __( 'Moon: Circle', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-more-h',
				'name'  => __( 'More: Horz', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-more-v',
				'name'  => __( 'More: Vert', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-move',
				'name'  => __( 'Move', 'press-pool' ),
			),
			array(
				'group' => 'file',
				'id'    => 'bb-icon-music',
				'name'  => __( 'Music', 'press-pool' ),
			),
			array(
				'group' => 'map',
				'id'    => 'bb-icon-navigation',
				'name'  => __( 'Navigation', 'press-pool' ),
			),
			array(
				'group' => 'map',
				'id'    => 'bb-icon-navigation-up',
				'name'  => __( 'Navigation: Up', 'press-pool' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'bb-icon-octagon',
				'name'  => __( 'Octagon', 'press-pool' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'bb-icon-package',
				'name'  => __( 'Package', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-paperclip',
				'name'  => __( 'Paperclip', 'press-pool' ),
			),
			array(
				'group' => 'media',
				'id'    => 'bb-icon-pause',
				'name'  => __( 'Pause', 'press-pool' ),
			),
			array(
				'group' => 'media',
				'id'    => 'bb-icon-pause-circle',
				'name'  => __( 'Pause: Circle', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-pencil',
				'name'  => __( 'Pencil', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-percent',
				'name'  => __( 'Percent', 'press-pool' ),
			),
			array(
				'group' => 'phone',
				'id'    => 'bb-icon-phone',
				'name'  => __( 'Phone', 'press-pool' ),
			),
			array(
				'group' => 'phone',
				'id'    => 'bb-icon-phone-call',
				'name'  => __( 'Phone: Call', 'press-pool' ),
			),
			array(
				'group' => 'phone',
				'id'    => 'bb-icon-phone-forwarded',
				'name'  => __( 'Phone: Forwarded', 'press-pool' ),
			),
			array(
				'group' => 'phone',
				'id'    => 'bb-icon-phone-incoming',
				'name'  => __( 'Phone: Incoming', 'press-pool' ),
			),
			array(
				'group' => 'phone',
				'id'    => 'bb-icon-phone-missed',
				'name'  => __( 'Phone: Missed', 'press-pool' ),
			),
			array(
				'group' => 'phone',
				'id'    => 'bb-icon-phone-off',
				'name'  => __( 'Phone: Off', 'press-pool' ),
			),
			array(
				'group' => 'phone',
				'id'    => 'bb-icon-phone-outgoing',
				'name'  => __( 'Phone: Outgoing', 'press-pool' ),
			),
			array(
				'group' => 'chart',
				'id'    => 'bb-icon-pie-chart',
				'name'  => __( 'Pie Chart', 'press-pool' ),
			),
            array(
				'group' => 'brand',
				'id'    => 'bb-icon-rounded-pinterest',
				'name'  => __( 'Pinterest: Circle', 'press-pool' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'bb-icon-pizza-slice',
				'name'  => __( 'Pizza Slice', 'press-pool' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'bb-icon-plane',
				'name'  => __( 'Plane', 'press-pool' ),
			),
			array(
				'group' => 'media',
				'id'    => 'bb-icon-play',
				'name'  => __( 'Play', 'press-pool' ),
			),
			array(
				'group' => 'media',
				'id'    => 'bb-icon-play-square',
				'name'  => __( 'Play: Square', 'press-pool' ),
			),
			array(
				'group' => 'media',
				'id'    => 'bb-icon-play-circle',
				'name'  => __( 'Play: Circle', 'press-pool' ),
			),
            array(
				'group' => 'media',
				'id'    => 'bb-icon-play-circle-fill',
				'name'  => __( 'Play: Fill', 'press-pool' ),
			),
            array(
				'group' => 'courses',
				'id'    => 'bb-icon-play-thin',
				'name'  => __( 'Play: Thin', 'press-pool' ),
			),
			array(
				'group' => 'control',
				'id'    => 'bb-icon-plus',
				'name'  => __( 'Plus', 'press-pool' ),
			),
			array(
				'group' => 'control',
				'id'    => 'bb-icon-plus-circle',
				'name'  => __( 'Plus: Circle', 'press-pool' ),
			),
			array(
				'group' => 'control',
				'id'    => 'bb-icon-plus-square',
				'name'  => __( 'Plus: Square', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-pocket',
				'name'  => __( 'Pocket', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-power',
				'name'  => __( 'Power', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-power-small',
				'name'  => __( 'Power: Small', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-print',
				'name'  => __( 'Print', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-print-fill',
				'name'  => __( 'Print: Fill', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-profile',
				'name'  => __( 'Profile', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-profile-info',
				'name'  => __( 'Profile: Info', 'press-pool' ),
			),
            array(
				'group' => 'web',
				'id'    => 'bb-icon-profile-types',
				'name'  => __( 'Profile: Type', 'press-pool' ),
			),
            array(
				'group' => 'courses',
				'id'    => 'bb-icon-question-thin',
				'name'  => __( 'Question: Thin', 'press-pool' ),
			),
            array(
				'group' => 'brand',
				'id'    => 'bb-icon-rounded-quora',
				'name'  => __( 'Quora', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-quote',
				'name'  => __( 'Quote', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-radio',
				'name'  => __( 'Radio', 'press-pool' ),
			),
            array(
				'group' => 'brand',
				'id'    => 'bb-icon-rounded-reddit',
				'name'  => __( 'Reddit: Circle', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-refresh-ccw',
				'name'  => __( 'Refresh: CCW', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-refresh-cw',
				'name'  => __( 'Refresh: CW', 'press-pool' ),
			),
			array(
				'group' => 'media',
				'id'    => 'bb-icon-repeat',
				'name'  => __( 'Repeat', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-reply',
				'name'  => __( 'Reply', 'press-pool' ),
			),
            array(
				'group' => 'web',
				'id'    => 'bb-icon-forum-replies',
				'name'  => __( 'Replies', 'press-pool' ),
			),
			array(
				'group' => 'media',
				'id'    => 'bb-icon-rewind',
				'name'  => __( 'Rewind', 'press-pool' ),
			),
            array(
				'group' => 'misc',
				'id'    => 'bb-icon-rocket',
				'name'  => __( 'Rocket', 'press-pool' ),
			),
			array(
				'group' => 'control',
				'id'    => 'bb-icon-rotate-ccw',
				'name'  => __( 'Rotate: CCW', 'press-pool' ),
			),
			array(
				'group' => 'control',
				'id'    => 'bb-icon-rotate-cw',
				'name'  => __( 'Rotate: CW', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-rss-square',
				'name'  => __( 'RSS: Square', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-save',
				'name'  => __( 'Save', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-scissors',
				'name'  => __( 'Scissors', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-search',
				'name'  => __( 'Search', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-search-small',
				'name'  => __( 'Search: Small', 'press-pool' ),
			),
			array(
				'group' => 'control',
				'id'    => 'bb-icon-select',
				'name'  => __( 'Select', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-server',
				'name'  => __( 'Server', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-settings',
				'name'  => __( 'Settings', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-settings-small',
				'name'  => __( 'Settings: Small', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-share',
				'name'  => __( 'Share', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-share-small',
				'name'  => __( 'Share: Small', 'press-pool' ),
			),
			array(
				'group' => 'alert',
				'id'    => 'bb-icon-shield',
				'name'  => __( 'Shield', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-shopping-cart',
				'name'  => __( 'Shopping Cart', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-shuffle',
				'name'  => __( 'Shuffle', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-sidebar',
				'name'  => __( 'Sidebar', 'press-pool' ),
			),
			array(
				'group' => 'media',
				'id'    => 'bb-icon-skip-back',
				'name'  => __( 'Skip: Backward', 'press-pool' ),
			),
			array(
				'group' => 'media',
				'id'    => 'bb-icon-skip-forward',
				'name'  => __( 'Skip: Forward', 'press-pool' ),
			),
			array(
				'group' => 'brand',
				'id'    => 'bb-icon-slack',
				'name'  => __( 'Slack', 'press-pool' ),
			),
			array(
				'group' => 'alert',
				'id'    => 'bb-icon-slash',
				'name'  => __( 'Slash', 'press-pool' ),
			),
			array(
				'group' => 'media',
				'id'    => 'bb-icon-sliders',
				'name'  => __( 'Sliders', 'press-pool' ),
			),
			array(
				'group' => 'device',
				'id'    => 'bb-icon-smartphone',
				'name'  => __( 'Smartphone', 'press-pool' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'bb-icon-smile',
				'name'  => __( 'Smile', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-sort-desc',
				'name'  => __( 'Sort: Desc', 'press-pool' ),
			),
			array(
				'group' => 'device',
				'id'    => 'bb-icon-speaker',
				'name'  => __( 'Speaker', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-spin',
				'name'  => __( 'Spin', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-spin-small',
				'name'  => __( 'Spin: Small', 'press-pool' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'bb-icon-square',
				'name'  => __( 'Square', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-star',
				'name'  => __( 'Star', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-star-small-fill',
				'name'  => __( 'Star: Small-Fill', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-star-fill',
				'name'  => __( 'Star: Fill', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-star-small',
				'name'  => __( 'Star: Small', 'press-pool' ),
			),
			array(
				'group' => 'media',
				'id'    => 'bb-icon-stop-circle',
				'name'  => __( 'Stop: Circle', 'press-pool' ),
			),
			array(
				'group' => 'nature',
				'id'    => 'bb-icon-sun',
				'name'  => __( 'Sun', 'press-pool' ),
			),
			array(
				'group' => 'nature',
				'id'    => 'bb-icon-sunrise',
				'name'  => __( 'Sunrise', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-swap',
				'name'  => __( 'Swap', 'press-pool' ),
			),
			array(
				'group' => 'device',
				'id'    => 'bb-icon-tablet',
				'name'  => __( 'Tablet', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-tag',
				'name'  => __( 'Tag', 'press-pool' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'bb-icon-target',
				'name'  => __( 'Target', 'press-pool' ),
			),
            array(
				'group' => 'courses',
				'id'    => 'bb-icon-text',
				'name'  => __( 'Text', 'press-pool' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'bb-icon-thermometer',
				'name'  => __( 'Thermometer', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-thumbs-down',
				'name'  => __( 'Thumbs: Down', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-thumbs-up',
				'name'  => __( 'Thumbs: Up', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-toggle-left',
				'name'  => __( 'Toggle: Left', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-toggle-right',
				'name'  => __( 'Toggle: Right', 'press-pool' ),
			),
            array(
				'group' => 'web',
				'id'    => 'bb-icon-tools',
				'name'  => __( 'Tools', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-trash',
				'name'  => __( 'Trash', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-trash-empty',
				'name'  => __( 'Trash: Empty', 'press-pool' ),
			),
            array(
				'group' => 'web',
				'id'    => 'bb-icon-trash-small',
				'name'  => __( 'Trash: Small', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-trending-down',
				'name'  => __( 'Trending: Down', 'press-pool' ),
			),
			array(
				'group' => 'arrow',
				'id'    => 'bb-icon-trending-up',
				'name'  => __( 'Trending: Up', 'press-pool' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'bb-icon-triangle',
				'name'  => __( 'Triangle', 'press-pool' ),
			),
            array(
				'group' => 'misc',
				'id'    => 'bb-icon-triangle-fill',
				'name'  => __( 'Triangle: Fill', 'press-pool' ),
			),
            array(
				'group' => 'brand',
				'id'    => 'bb-icon-rounded-tumblr',
				'name'  => __( 'Tumblr: Circle', 'press-pool' ),
			),
			array(
				'group' => 'mics',
				'id'    => 'bb-icon-tv',
				'name'  => __( 'TV', 'press-pool' ),
			),
			array(
				'group' => 'brand',
				'id'    => 'bb-icon-twitter',
				'name'  => __( 'Twitter', 'press-pool' ),
			),
			array(
				'group' => 'brand',
				'id'    => 'bb-icon-rounded-twitter',
				'name'  => __( 'Twitter: Circle', 'press-pool' ),
			),
			array(
				'group' => 'brand',
				'id'    => 'bb-icon-twitter-small',
				'name'  => __( 'Twitter: Small', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-type',
				'name'  => __( 'Type', 'press-pool' ),
			),
			array(
				'group' => 'nature',
				'id'    => 'bb-icon-umbrella',
				'name'  => __( 'Umbrella', 'press-pool' ),
			),
			array(
				'group' => 'format',
				'id'    => 'bb-icon-underline',
				'name'  => __( 'Underline', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-unlock',
				'name'  => __( 'Unlock', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-upload',
				'name'  => __( 'Upload', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-user',
				'name'  => __( 'User', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-user-small-minus',
				'name'  => __( 'User: Small-Minus', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-user-small-plus',
				'name'  => __( 'User: Small-Plus', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-user-alt',
				'name'  => __( 'User: Alt', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-user-check',
				'name'  => __( 'User: Check', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-user-circle',
				'name'  => __( 'User: Circle', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-user-doc',
				'name'  => __( 'User: Doc', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-user-minus',
				'name'  => __( 'User: Minus', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-user-plus',
				'name'  => __( 'User: Plus', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-user-small',
				'name'  => __( 'User: Small', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-user-x',
				'name'  => __( 'User: X', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-users',
				'name'  => __( 'Users', 'press-pool' ),
			),
			array(
				'group' => 'media',
				'id'    => 'bb-icon-video',
				'name'  => __( 'Video', 'press-pool' ),
			),
			array(
				'group' => 'media',
				'id'    => 'bb-icon-video-off',
				'name'  => __( 'Video: Off', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-visibility',
				'name'  => __( 'Visibility', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-visibility-hidden',
				'name'  => __( 'Visibility: Hidden', 'press-pool' ),
			),
			array(
				'group' => 'phone',
				'id'    => 'bb-icon-voicemail',
				'name'  => __( 'Voicemail', 'press-pool' ),
			),
			array(
				'group' => 'media',
				'id'    => 'bb-icon-volume-down',
				'name'  => __( 'Volume: Down', 'press-pool' ),
			),
			array(
				'group' => 'media',
				'id'    => 'bb-icon-volume-mute',
				'name'  => __( 'Volume: Mute', 'press-pool' ),
			),
			array(
				'group' => 'media',
				'id'    => 'bb-icon-volume-off',
				'name'  => __( 'Volume: Off', 'press-pool' ),
			),
			array(
				'group' => 'media',
				'id'    => 'bb-icon-volume-up',
				'name'  => __( 'Volume: Up', 'press-pool' ),
			),
			array(
				'group' => 'misc',
				'id'    => 'bb-icon-watch',
				'name'  => __( 'Watch', 'press-pool' ),
			),
            array(
				'group' => 'courses',
				'id'    => 'bb-icon-watch-alarm',
				'name'  => __( 'Watch Alarm', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-wifi',
				'name'  => __( 'WiFi', 'press-pool' ),
			),
			array(
				'group' => 'web',
				'id'    => 'bb-icon-wifi-off',
				'name'  => __( 'WiFi: Off', 'press-pool' ),
			),
			array(
				'group' => 'nature',
				'id'    => 'bb-icon-wind',
				'name'  => __( 'Wind', 'press-pool' ),
			),
			array(
				'group' => 'control',
				'id'    => 'bb-icon-x',
				'name'  => __( 'X', 'press-pool' ),
			),
			array(
				'group' => 'control',
				'id'    => 'bb-icon-x-circle',
				'name'  => __( 'X: Circle', 'press-pool' ),
			),
			array(
				'group' => 'control',
				'id'    => 'bb-icon-x-square',
				'name'  => __( 'X: Square', 'press-pool' ),
			),
            array(
				'group' => 'brand',
				'id'    => 'bb-icon-rounded-youtube',
				'name'  => __( 'Youtube: Circle', 'press-pool' ),
			),
            array(
				'group' => 'brand',
				'id'    => 'bb-icon-youtube-logo',
				'name'  => __( 'Youtube: Logo', 'press-pool' ),
			),
			array(
				'group' => 'nature',
				'id'    => 'bb-icon-zap',
				'name'  => __( 'Zap', 'press-pool' ),
			),
			array(
				'group' => 'control',
				'id'    => 'bb-icon-zoom-in',
				'name'  => __( 'Zoom: In', 'press-pool' ),
			),
			array(
				'group' => 'control',
				'id'    => 'bb-icon-zoom-out',
				'name'  => __( 'Zoom: Out', 'press-pool' ),
			),
		);

		/**
		 * Filter BuddyBoss items
		 *
		 * @since 0.1.0
		 *
		 * @param array $items Icon names.
		 */
		$items = apply_filters( 'icon_picker_buddyboss_items', $items );

		return $items;
	}
}
