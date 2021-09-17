<?php

require_once dirname( __FILE__ ) . '/font.php';

/**
 * Font Awesome
 *
 * @package Icon_Picker
 * @author  Dzikri Aziz <kvcrvt@gmail.com>
 */
class Icon_Picker_Type_Font_Awesome extends Icon_Picker_Type_Font {

	/**
	 * Icon type ID
	 *
	 * @since Menu Icons 0.1.0
	 * @access protected
	 * @var    string
	 */
	protected $id = 'fa';

	/**
	 * Icon type name
	 *
	 * @since Menu Icons 0.1.0
	 * @access protected
	 * @var    string
	 */
	protected $name = 'Font Awesome';

	/**
	 * Icon type version
	 *
	 * @since Menu Icons 0.1.0
	 * @access protected
	 * @var    string
	 */
	protected $version = '4.7.0';

	/**
	 * Stylesheet ID
	 *
	 * @since Menu Icons 0.1.0
	 * @access protected
	 * @var    string
	 */
	protected $stylesheet_id = 'font-awesome';


	/**
	 * Get icon groups
	 *
	 * @since Menu Icons 0.1.0
	 * @return array
	 */
	public function get_groups() {
		$groups = array(
			array(
				'id'   => 'a11y',
				'name' => __( 'Accessibility', 'press-pool' ),
			),
			array(
				'id'   => 'brand',
				'name' => __( 'Brand', 'press-pool' ),
			),
			array(
				'id'   => 'chart',
				'name' => __( 'Charts', 'press-pool' ),
			),
			array(
				'id'   => 'currency',
				'name' => __( 'Currency', 'press-pool' ),
			),
			array(
				'id'   => 'directional',
				'name' => __( 'Directional', 'press-pool' ),
			),
			array(
				'id'   => 'file-types',
				'name' => __( 'File Types', 'press-pool' ),
			),
			array(
				'id'   => 'form-control',
				'name' => __( 'Form Controls', 'press-pool' ),
			),
			array(
				'id'   => 'gender',
				'name' => __( 'Genders', 'press-pool' ),
			),
			array(
				'id'   => 'medical',
				'name' => __( 'Medical', 'press-pool' ),
			),
			array(
				'id'   => 'payment',
				'name' => __( 'Payment', 'press-pool' ),
			),
			array(
				'id'   => 'spinner',
				'name' => __( 'Spinners', 'press-pool' ),
			),
			array(
				'id'   => 'transportation',
				'name' => __( 'Transportation', 'press-pool' ),
			),
			array(
				'id'   => 'text-editor',
				'name' => __( 'Text Editor', 'press-pool' ),
			),
			array(
				'id'   => 'video-player',
				'name' => __( 'Video Player', 'press-pool' ),
			),
			array(
				'id'   => 'web-application',
				'name' => __( 'Web Application', 'press-pool' ),
			),
		);

		/**
		 * Filter genericon groups
		 *
		 * @since 0.1.0
		 * @param array $groups Icon groups.
		 */
		$groups = apply_filters( 'icon_picker_fa_groups', $groups );

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
			/* Accessibility (a11y) */
			array(
				'group' => 'a11y',
				'id'    => ' fa-american-sign-language-interpreting',
				'name'  => __( 'American Sign Language', 'press-pool' ),
			),
			array(
				'group' => 'a11y',
				'id'    => ' fa-audio-description',
				'name'  => __( 'Audio Description', 'press-pool' ),
			),
			array(
				'group' => 'a11y',
				'id'    => ' fa-assistive-listening-systems',
				'name'  => __( 'Assistive Listening Systems', 'press-pool' ),
			),
			array(
				'group' => 'a11y',
				'id'    => 'fa-blind',
				'name'  => __( 'Blind', 'press-pool' ),
			),
			array(
				'group' => 'a11y',
				'id'    => 'fa-braille',
				'name'  => __( 'Braille', 'press-pool' ),
			),
			array(
				'group' => 'a11y',
				'id'    => 'fa-deaf',
				'name'  => __( 'Deaf', 'press-pool' ),
			),
			array(
				'group' => 'a11y',
				'id'    => 'fa-low-vision',
				'name'  => __( 'Low Vision', 'press-pool' ),
			),
			array(
				'group' => 'a11y',
				'id'    => 'fa-volume-control-phone',
				'name'  => __( 'Phone Volume Control', 'press-pool' ),
			),
			array(
				'group' => 'a11y',
				'id'    => 'fa-sign-language',
				'name'  => __( 'Sign Language', 'press-pool' ),
			),
			array(
				'group' => 'a11y',
				'id'    => 'fa-universal-access',
				'name'  => __( 'Universal Access', 'press-pool' ),
			),

			/* Brand (brand) */
			array(
				'group' => 'brand',
				'id'    => 'fa-500px',
				'name'  => '500px',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-adn',
				'name'  => 'ADN',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-amazon',
				'name'  => 'Amazon',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-android',
				'name'  => 'Android',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-angellist',
				'name'  => 'AngelList',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-apple',
				'name'  => 'Apple',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-black-tie',
				'name'  => 'BlackTie',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-bandcamp',
				'name'  => 'Bandcamp',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-behance',
				'name'  => 'Behance',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-behance-square',
				'name'  => 'Behance',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-bitbucket',
				'name'  => 'Bitbucket',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-bluetooth',
				'name'  => 'Bluetooth',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-bluetooth-b',
				'name'  => 'Bluetooth',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-bitbucket-square',
				'name'  => 'Bitbucket',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-buysellads',
				'name'  => 'BuySellAds',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-chrome',
				'name'  => 'Chrome',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-codepen',
				'name'  => 'CodePen',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-codiepie',
				'name'  => 'Codie Pie',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-connectdevelop',
				'name'  => 'Connect + Develop',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-contao',
				'name'  => 'Contao',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-creative-commons',
				'name'  => 'Creative Commons',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-css3',
				'name'  => 'CSS3',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-dashcube',
				'name'  => 'Dashcube',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-delicious',
				'name'  => 'Delicious',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-deviantart',
				'name'  => 'deviantART',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-digg',
				'name'  => 'Digg',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-dribbble',
				'name'  => 'Dribbble',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-dropbox',
				'name'  => 'DropBox',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-drupal',
				'name'  => 'Drupal',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-empire',
				'name'  => 'Empire',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-edge',
				'name'  => 'Edge',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-eercast',
				'name'  => 'eercast',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-envira',
				'name'  => 'Envira',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-etsy',
				'name'  => 'Etsy',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-expeditedssl',
				'name'  => 'ExpeditedSSL',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-facebook-official',
				'name'  => 'Facebook',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-facebook-square',
				'name'  => 'Facebook',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-facebook',
				'name'  => 'Facebook',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-firefox',
				'name'  => 'Firefox',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-flickr',
				'name'  => 'Flickr',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-fonticons',
				'name'  => 'FontIcons',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-fort-awesome',
				'name'  => 'Fort Awesome',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-forumbee',
				'name'  => 'Forumbee',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-foursquare',
				'name'  => 'Foursquare',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-free-code-camp',
				'name'  => 'Free Code Camp',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-get-pocket',
				'name'  => 'Pocket',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-git',
				'name'  => 'Git',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-git-square',
				'name'  => 'Git',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-github',
				'name'  => 'GitHub',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-gitlab',
				'name'  => 'Gitlab',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-github-alt',
				'name'  => 'GitHub',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-github-square',
				'name'  => 'GitHub',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-gittip',
				'name'  => 'GitTip',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-glide',
				'name'  => 'Glide',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-glide-g',
				'name'  => 'Glide',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-google',
				'name'  => 'Google',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-google-plus',
				'name'  => 'Google+',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-google-plus-square',
				'name'  => 'Google+',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-grav',
				'name'  => 'Grav',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-hacker-news',
				'name'  => 'Hacker News',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-houzz',
				'name'  => 'Houzz',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-html5',
				'name'  => 'HTML5',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-imdb',
				'name'  => 'IMDb',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-instagram',
				'name'  => 'Instagram',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-internet-explorer',
				'name'  => 'Internet Explorer',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-ioxhost',
				'name'  => 'IoxHost',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-joomla',
				'name'  => 'Joomla',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-jsfiddle',
				'name'  => 'JSFiddle',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-lastfm',
				'name'  => 'Last.fm',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-lastfm-square',
				'name'  => 'Last.fm',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-leanpub',
				'name'  => 'Leanpub',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-linkedin',
				'name'  => 'LinkedIn',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-linkedin-square',
				'name'  => 'LinkedIn',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-linode',
				'name'  => 'Linode',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-linux',
				'name'  => 'Linux',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-maxcdn',
				'name'  => 'MaxCDN',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-meanpath',
				'name'  => 'meanpath',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-medium',
				'name'  => 'Medium',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-meetup',
				'name'  => 'Meetup',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-mixcloud',
				'name'  => 'Mixcloud',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-modx',
				'name'  => 'MODX',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-odnoklassniki',
				'name'  => 'Odnoklassniki',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-odnoklassniki-square',
				'name'  => 'Odnoklassniki',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-opencart',
				'name'  => 'OpenCart',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-openid',
				'name'  => 'OpenID',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-opera',
				'name'  => 'Opera',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-optin-monster',
				'name'  => 'OptinMonster',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-pagelines',
				'name'  => 'Pagelines',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-pied-piper',
				'name'  => 'Pied Piper',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-pied-piper-alt',
				'name'  => 'Pied Piper',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-pinterest',
				'name'  => 'Pinterest',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-pinterest-p',
				'name'  => 'Pinterest',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-pinterest-square',
				'name'  => 'Pinterest',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-product-hunt',
				'name'  => 'Product Hunt',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-quora',
				'name'  => 'Quora',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-qq',
				'name'  => 'QQ',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-reddit',
				'name'  => 'reddit',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-ravelry',
				'name'  => 'Ravelry',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-reddit-alien',
				'name'  => 'reddit',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-reddit-square',
				'name'  => 'reddit',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-renren',
				'name'  => 'Renren',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-safari',
				'name'  => 'Safari',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-scribd',
				'name'  => 'Scribd',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-sellsy',
				'name'  => 'SELLSY',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-shirtsinbulk',
				'name'  => 'Shirts In Bulk',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-simplybuilt',
				'name'  => 'SimplyBuilt',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-skyatlas',
				'name'  => 'Skyatlas',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-skype',
				'name'  => 'Skype',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-slack',
				'name'  => 'Slack',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-slideshare',
				'name'  => 'SlideShare',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-soundcloud',
				'name'  => 'SoundCloud',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-snapchat',
				'name'  => 'Snapchat',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-snapchat-ghost',
				'name'  => 'Snapchat',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-snapchat-square',
				'name'  => 'Snapchat',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-spotify',
				'name'  => 'Spotify',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-stack-exchange',
				'name'  => 'Stack Exchange',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-stack-overflow',
				'name'  => 'Stack Overflow',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-steam',
				'name'  => 'Steam',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-steam-square',
				'name'  => 'Steam',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-stumbleupon',
				'name'  => 'StumbleUpon',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-stumbleupon-circle',
				'name'  => 'StumbleUpon',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-superpowers',
				'name'  => 'Superpowers',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-telegram',
				'name'  => 'Telegram',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-tencent-weibo',
				'name'  => 'Tencent Weibo',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-trello',
				'name'  => 'Trello',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-tripadvisor',
				'name'  => 'TripAdvisor',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-tumblr',
				'name'  => 'Tumblr',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-tumblr-square',
				'name'  => 'Tumblr',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-twitch',
				'name'  => 'Twitch',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-twitter',
				'name'  => 'Twitter',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-twitter-square',
				'name'  => 'Twitter',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-usb',
				'name'  => 'USB',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-vimeo',
				'name'  => 'Vimeo',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-viadeo',
				'name'  => 'Viadeo',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-viadeo-square',
				'name'  => 'Viadeo',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-vimeo-square',
				'name'  => 'Vimeo',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-viacoin',
				'name'  => 'Viacoin',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-vine',
				'name'  => 'Vine',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-vk',
				'name'  => 'VK',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-weixin',
				'name'  => 'Weixin',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-weibo',
				'name'  => 'Wibo',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-whatsapp',
				'name'  => 'WhatsApp',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-wikipedia-w',
				'name'  => 'Wikipedia',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-windows',
				'name'  => 'Windows',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-wordpress',
				'name'  => 'WordPress',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-wpbeginner',
				'name'  => 'WP Beginner',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-wpexplorer',
				'name'  => 'WP Explorer',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-wpforms',
				'name'  => 'WP Forms',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-xing',
				'name'  => 'Xing',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-xing-square',
				'name'  => 'Xing',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-y-combinator',
				'name'  => 'Y Combinator',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-yahoo',
				'name'  => 'Yahoo!',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-yelp',
				'name'  => 'Yelp',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-youtube',
				'name'  => 'YouTube',
			),
			array(
				'group' => 'brand',
				'id'    => 'fa-youtube-square',
				'name'  => 'YouTube',
			),

			/* Chart (chart) */
			array(
				'group' => 'chart',
				'id'    => 'fa-area-chart',
				'name'  => __( 'Area Chart', 'press-pool' ),
			),
			array(
				'group' => 'chart',
				'id'    => 'fa-bar-chart-o',
				'name'  => __( 'Bar Chart', 'press-pool' ),
			),
			array(
				'group' => 'chart',
				'id'    => 'fa-line-chart',
				'name'  => __( 'Line Chart', 'press-pool' ),
			),
			array(
				'group' => 'chart',
				'id'    => 'fa-pie-chart',
				'name'  => __( 'Pie Chart', 'press-pool' ),
			),

			/* Currency (currency) */
			array(
				'group' => 'currency',
				'id'    => 'fa-bitcoin',
				'name'  => __( 'Bitcoin', 'press-pool' ),
			),
			array(
				'group' => 'currency',
				'id'    => 'fa-dollar',
				'name'  => __( 'Dollar', 'press-pool' ),
			),
			array(
				'group' => 'currency',
				'id'    => 'fa-euro',
				'name'  => __( 'Euro', 'press-pool' ),
			),
			array(
				'group' => 'currency',
				'id'    => 'fa-gbp',
				'name'  => __( 'GBP', 'press-pool' ),
			),
			array(
				'group' => 'currency',
				'id'    => 'fa-gg',
				'name'  => __( 'GBP', 'press-pool' ),
			),
			array(
				'group' => 'currency',
				'id'    => 'fa-gg-circle',
				'name'  => __( 'GG', 'press-pool' ),
			),
			array(
				'group' => 'currency',
				'id'    => 'fa-ils',
				'name'  => __( 'Israeli Sheqel', 'press-pool' ),
			),
			array(
				'group' => 'currency',
				'id'    => 'fa-money',
				'name'  => __( 'Money', 'press-pool' ),
			),
			array(
				'group' => 'currency',
				'id'    => 'fa-rouble',
				'name'  => __( 'Rouble', 'press-pool' ),
			),
			array(
				'group' => 'currency',
				'id'    => 'fa-inr',
				'name'  => __( 'Rupee', 'press-pool' ),
			),
			array(
				'group' => 'currency',
				'id'    => 'fa-try',
				'name'  => __( 'Turkish Lira', 'press-pool' ),
			),
			array(
				'group' => 'currency',
				'id'    => 'fa-krw',
				'name'  => __( 'Won', 'press-pool' ),
			),
			array(
				'group' => 'currency',
				'id'    => 'fa-jpy',
				'name'  => __( 'Yen', 'press-pool' ),
			),

			/* Directional (directional) */
			array(
				'group' => 'directional',
				'id'    => 'fa-angle-down',
				'name'  => __( 'Angle Down', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-angle-left',
				'name'  => __( 'Angle Left', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-angle-right',
				'name'  => __( 'Angle Right', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-angle-up',
				'name'  => __( 'Angle Up', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-angle-double-down',
				'name'  => __( 'Angle Double Down', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-angle-double-left',
				'name'  => __( 'Angle Double Left', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-angle-double-right',
				'name'  => __( 'Angle Double Right', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-angle-double-up',
				'name'  => __( 'Angle Double Up', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-arrow-circle-o-down',
				'name'  => __( 'Arrow Circle Down', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-arrow-circle-o-left',
				'name'  => __( 'Arrow Circle Left', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-arrow-circle-o-right',
				'name'  => __( 'Arrow Circle Right', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-arrow-circle-o-up',
				'name'  => __( 'Arrow Circle Up', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-arrow-circle-down',
				'name'  => __( 'Arrow Circle Down', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-arrow-circle-left',
				'name'  => __( 'Arrow Circle Left', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-arrow-circle-right',
				'name'  => __( 'Arrow Circle Right', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-arrow-circle-up',
				'name'  => __( 'Arrow Circle Up', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-arrow-down',
				'name'  => __( 'Arrow Down', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-arrow-left',
				'name'  => __( 'Arrow Left', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-arrow-right',
				'name'  => __( 'Arrow Right', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-arrow-up',
				'name'  => __( 'Arrow Up', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-arrows',
				'name'  => __( 'Arrows', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-arrows-alt',
				'name'  => __( 'Arrows', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-arrows-h',
				'name'  => __( 'Arrows', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-arrows-v',
				'name'  => __( 'Arrows', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-caret-down',
				'name'  => __( 'Caret Down', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-caret-left',
				'name'  => __( 'Caret Left', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-caret-right',
				'name'  => __( 'Caret Right', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-caret-up',
				'name'  => __( 'Caret Up', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-caret-square-o-down',
				'name'  => __( 'Caret Down', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-caret-square-o-left',
				'name'  => __( 'Caret Left', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-caret-square-o-right',
				'name'  => __( 'Caret Right', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-caret-square-o-up',
				'name'  => __( 'Caret Up', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-chevron-circle-down',
				'name'  => __( 'Chevron Circle Down', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-chevron-circle-left',
				'name'  => __( 'Chevron Circle Left', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-chevron-circle-right',
				'name'  => __( 'Chevron Circle Right', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-chevron-circle-up',
				'name'  => __( 'Chevron Circle Up', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-chevron-down',
				'name'  => __( 'Chevron Down', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-chevron-left',
				'name'  => __( 'Chevron Left', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-chevron-right',
				'name'  => __( 'Chevron Right', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-chevron-up',
				'name'  => __( 'Chevron Up', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-hand-o-down',
				'name'  => __( 'Hand Down', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-hand-o-left',
				'name'  => __( 'Hand Left', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-hand-o-right',
				'name'  => __( 'Hand Right', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-hand-o-up',
				'name'  => __( 'Hand Up', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-long-arrow-down',
				'name'  => __( 'Long Arrow Down', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-long-arrow-left',
				'name'  => __( 'Long Arrow Left', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-long-arrow-right',
				'name'  => __( 'Long Arrow Right', 'press-pool' ),
			),
			array(
				'group' => 'directional',
				'id'    => 'fa-long-arrow-up',
				'name'  => __( 'Long Arrow Up', 'press-pool' ),
			),

			/* File Types (file-types) */
			array(
				'group' => 'file-types',
				'id'    => 'fa-file',
				'name'  => __( 'File', 'press-pool' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'fa-file-o',
				'name'  => __( 'File', 'press-pool' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'fa-file-text',
				'name'  => __( 'File: Text', 'press-pool' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'fa-file-text-o',
				'name'  => __( 'File: Text', 'press-pool' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'fa-file-archive-o',
				'name'  => __( 'File: Archive', 'press-pool' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'fa-file-audio-o',
				'name'  => __( 'File: Audio', 'press-pool' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'fa-file-code-o',
				'name'  => __( 'File: Code', 'press-pool' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'fa-file-excel-o',
				'name'  => __( 'File: Excel', 'press-pool' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'fa-file-image-o',
				'name'  => __( 'File: Image', 'press-pool' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'fa-file-pdf-o',
				'name'  => __( 'File: PDF', 'press-pool' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'fa-file-powerpoint-o',
				'name'  => __( 'File: Powerpoint', 'press-pool' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'fa-file-video-o',
				'name'  => __( 'File: Video', 'press-pool' ),
			),
			array(
				'group' => 'file-types',
				'id'    => 'fa-file-word-o',
				'name'  => __( 'File: Word', 'press-pool' ),
			),

			/* Form Control (form-control) */
			array(
				'group' => 'form-control',
				'id'    => 'fa-check-square',
				'name'  => __( 'Check', 'press-pool' ),
			),
			array(
				'group' => 'form-control',
				'id'    => 'fa-check-square-o',
				'name'  => __( 'Check', 'press-pool' ),
			),
			array(
				'group' => 'form-control',
				'id'    => 'fa-circle',
				'name'  => __( 'Circle', 'press-pool' ),
			),
			array(
				'group' => 'form-control',
				'id'    => 'fa-circle-o',
				'name'  => __( 'Circle', 'press-pool' ),
			),
			array(
				'group' => 'form-control',
				'id'    => 'fa-dot-circle-o',
				'name'  => __( 'Dot', 'press-pool' ),
			),
			array(
				'group' => 'form-control',
				'id'    => 'fa-minus-square',
				'name'  => __( 'Minus', 'press-pool' ),
			),
			array(
				'group' => 'form-control',
				'id'    => 'fa-minus-square-o',
				'name'  => __( 'Minus', 'press-pool' ),
			),
			array(
				'group' => 'form-control',
				'id'    => 'fa-plus-square',
				'name'  => __( 'Plus', 'press-pool' ),
			),
			array(
				'group' => 'form-control',
				'id'    => 'fa-plus-square-o',
				'name'  => __( 'Plus', 'press-pool' ),
			),
			array(
				'group' => 'form-control',
				'id'    => 'fa-square',
				'name'  => __( 'Square', 'press-pool' ),
			),
			array(
				'group' => 'form-control',
				'id'    => 'fa-square-o',
				'name'  => __( 'Square', 'press-pool' ),
			),

			/* Gender (gender) */
			array(
				'group' => 'gender',
				'id'    => 'fa-genderless',
				'name'  => __( 'Genderless', 'press-pool' ),
			),
			array(
				'group' => 'gender',
				'id'    => 'fa-mars',
				'name'  => __( 'Mars', 'press-pool' ),
			),
			array(
				'group' => 'gender',
				'id'    => 'fa-mars-double',
				'name'  => __( 'Mars', 'press-pool' ),
			),
			array(
				'group' => 'gender',
				'id'    => 'fa-mars-stroke',
				'name'  => __( 'Mars', 'press-pool' ),
			),
			array(
				'group' => 'gender',
				'id'    => 'fa-mars-stroke-h',
				'name'  => __( 'Mars', 'press-pool' ),
			),
			array(
				'group' => 'gender',
				'id'    => 'fa-mars-stroke-v',
				'name'  => __( 'Mars', 'press-pool' ),
			),
			array(
				'group' => 'gender',
				'id'    => 'fa-mercury',
				'name'  => __( 'Mercury', 'press-pool' ),
			),
			array(
				'group' => 'gender',
				'id'    => 'fa-neuter',
				'name'  => __( 'Neuter', 'press-pool' ),
			),
			array(
				'group' => 'gender',
				'id'    => 'fa-transgender',
				'name'  => __( 'Transgender', 'press-pool' ),
			),
			array(
				'group' => 'gender',
				'id'    => 'fa-transgender-alt',
				'name'  => __( 'Transgender', 'press-pool' ),
			),
			array(
				'group' => 'gender',
				'id'    => 'fa-venus',
				'name'  => __( 'Venus', 'press-pool' ),
			),
			array(
				'group' => 'gender',
				'id'    => 'fa-venus-double',
				'name'  => __( 'Venus', 'press-pool' ),
			),
			array(
				'group' => 'gender',
				'id'    => 'fa-venus-mars',
				'name'  => __( 'Venus + Mars', 'press-pool' ),
			),

			/* Medical (medical) */
			array(
				'group' => 'medical',
				'id'    => 'fa-heart',
				'name'  => __( 'Heart', 'press-pool' ),
			),
			array(
				'group' => 'medical',
				'id'    => 'fa-heart-o',
				'name'  => __( 'Heart', 'press-pool' ),
			),
			array(
				'group' => 'medical',
				'id'    => 'fa-heartbeat',
				'name'  => __( 'Heartbeat', 'press-pool' ),
			),
			array(
				'group' => 'medical',
				'id'    => 'fa-h-square',
				'name'  => __( 'Hospital', 'press-pool' ),
			),
			array(
				'group' => 'medical',
				'id'    => 'fa-hospital-o',
				'name'  => __( 'Hospital', 'press-pool' ),
			),
			array(
				'group' => 'medical',
				'id'    => 'fa-medkit',
				'name'  => __( 'Medkit', 'press-pool' ),
			),
			array(
				'group' => 'medical',
				'id'    => 'fa-stethoscope',
				'name'  => __( 'Stethoscope', 'press-pool' ),
			),
			array(
				'group' => 'medical',
				'id'    => 'fa-thermometer-empty',
				'name'  => __( 'Thermometer', 'press-pool' ),
			),
			array(
				'group' => 'medical',
				'id'    => 'fa-thermometer-quarter',
				'name'  => __( 'Thermometer', 'press-pool' ),
			),
			array(
				'group' => 'medical',
				'id'    => 'fa-thermometer-half',
				'name'  => __( 'Thermometer', 'press-pool' ),
			),
			array(
				'group' => 'medical',
				'id'    => 'fa-thermometer-three-quarters',
				'name'  => __( 'Thermometer', 'press-pool' ),
			),
			array(
				'group' => 'medical',
				'id'    => 'fa-thermometer-full',
				'name'  => __( 'Thermometer', 'press-pool' ),
			),
			array(
				'group' => 'medical',
				'id'    => 'fa-user-md',
				'name'  => __( 'User MD', 'press-pool' ),
			),

			/* Payment (payment) */
			array(
				'group' => 'payment',
				'id'    => 'fa-cc-amex',
				'name'  => 'American Express',
			),
			array(
				'group' => 'payment',
				'id'    => 'fa-credit-card',
				'name'  => __( 'Credit Card', 'press-pool' ),
			),
			array(
				'group' => 'payment',
				'id'    => 'fa-credit-card-alt',
				'name'  => __( 'Credit Card', 'press-pool' ),
			),
			array(
				'group' => 'payment',
				'id'    => 'fa-cc-diners-club',
				'name'  => 'Diners Club',
			),
			array(
				'group' => 'payment',
				'id'    => 'fa-cc-discover',
				'name'  => 'Discover',
			),
			array(
				'group' => 'payment',
				'id'    => 'fa-google-wallet',
				'name'  => 'Google Wallet',
			),
			array(
				'group' => 'payment',
				'id'    => 'fa-cc-jcb',
				'name'  => 'JCB',
			),
			array(
				'group' => 'payment',
				'id'    => 'fa-cc-mastercard',
				'name'  => 'MasterCard',
			),
			array(
				'group' => 'payment',
				'id'    => 'fa-cc-paypal',
				'name'  => 'PayPal',
			),
			array(
				'group' => 'payment',
				'id'    => 'fa-paypal',
				'name'  => 'PayPal',
			),
			array(
				'group' => 'payment',
				'id'    => 'fa-cc-stripe',
				'name'  => 'Stripe',
			),
			array(
				'group' => 'payment',
				'id'    => 'fa-cc-visa',
				'name'  => 'Visa',
			),

			/* Spinner (spinner) */
			array(
				'group' => 'spinner',
				'id'    => 'fa-circle-o-notch',
				'name'  => __( 'Circle', 'press-pool' ),
			),
			array(
				'group' => 'spinner',
				'id'    => 'fa-cog',
				'name'  => __( 'Cog', 'press-pool' ),
			),
			array(
				'group' => 'spinner',
				'id'    => 'fa-refresh',
				'name'  => __( 'Refresh', 'press-pool' ),
			),
			array(
				'group' => 'spinner',
				'id'    => 'fa-spinner',
				'name'  => __( 'Spinner', 'press-pool' ),
			),

			/* Transportation (transportation) */
			array(
				'group' => 'transportation',
				'id'    => 'fa-ambulance',
				'name'  => __( 'Ambulance', 'press-pool' ),
			),
			array(
				'group' => 'transportation',
				'id'    => 'fa-bicycle',
				'name'  => __( 'Bicycle', 'press-pool' ),
			),
			array(
				'group' => 'transportation',
				'id'    => 'fa-bus',
				'name'  => __( 'Bus', 'press-pool' ),
			),
			array(
				'group' => 'transportation',
				'id'    => 'fa-car',
				'name'  => __( 'Car', 'press-pool' ),
			),
			array(
				'group' => 'transportation',
				'id'    => 'fa-fighter-jet',
				'name'  => __( 'Fighter Jet', 'press-pool' ),
			),
			array(
				'group' => 'transportation',
				'id'    => 'fa-motorcycle',
				'name'  => __( 'Motorcycle', 'press-pool' ),
			),
			array(
				'group' => 'transportation',
				'id'    => 'fa-plane',
				'name'  => __( 'Plane', 'press-pool' ),
			),
			array(
				'group' => 'transportation',
				'id'    => 'fa-rocket',
				'name'  => __( 'Rocket', 'press-pool' ),
			),
			array(
				'group' => 'transportation',
				'id'    => 'fa-ship',
				'name'  => __( 'Ship', 'press-pool' ),
			),
			array(
				'group' => 'transportation',
				'id'    => 'fa-space-shuttle',
				'name'  => __( 'Space Shuttle', 'press-pool' ),
			),
			array(
				'group' => 'transportation',
				'id'    => 'fa-subway',
				'name'  => __( 'Subway', 'press-pool' ),
			),
			array(
				'group' => 'transportation',
				'id'    => 'fa-taxi',
				'name'  => __( 'Taxi', 'press-pool' ),
			),
			array(
				'group' => 'transportation',
				'id'    => 'fa-train',
				'name'  => __( 'Train', 'press-pool' ),
			),
			array(
				'group' => 'transportation',
				'id'    => 'fa-truck',
				'name'  => __( 'Truck', 'press-pool' ),
			),
			array(
				'group' => 'transportation',
				'id'    => 'fa-wheelchair',
				'name'  => __( 'Wheelchair', 'press-pool' ),
			),
			array(
				'group' => 'transportation',
				'id'    => 'fa-wheelchair-alt',
				'name'  => __( 'Wheelchair', 'press-pool' ),
			),

			/* Text Editor (text-editor) */
			array(
				'group' => 'text-editor',
				'id'    => 'fa-align-left',
				'name'  => __( 'Align Left', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-align-center',
				'name'  => __( 'Align Center', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-align-justify',
				'name'  => __( 'Justify', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-align-right',
				'name'  => __( 'Align Right', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-bold',
				'name'  => __( 'Bold', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-clipboard',
				'name'  => __( 'Clipboard', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-columns',
				'name'  => __( 'Columns', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-copy',
				'name'  => __( 'Copy', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-cut',
				'name'  => __( 'Cut', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-paste',
				'name'  => __( 'Paste', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-eraser',
				'name'  => __( 'Eraser', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-files-o',
				'name'  => __( 'Files', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-font',
				'name'  => __( 'Font', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-header',
				'name'  => __( 'Header', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-indent',
				'name'  => __( 'Indent', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-outdent',
				'name'  => __( 'Outdent', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-italic',
				'name'  => __( 'Italic', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-link',
				'name'  => __( 'Link', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-unlink',
				'name'  => __( 'Unlink', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-list',
				'name'  => __( 'List', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-list-alt',
				'name'  => __( 'List', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-list-ol',
				'name'  => __( 'Ordered List', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-list-ul',
				'name'  => __( 'Unordered List', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-paperclip',
				'name'  => __( 'Paperclip', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-paragraph',
				'name'  => __( 'Paragraph', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-repeat',
				'name'  => __( 'Repeat', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-undo',
				'name'  => __( 'Undo', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-save',
				'name'  => __( 'Save', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-strikethrough',
				'name'  => __( 'Strikethrough', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-subscript',
				'name'  => __( 'Subscript', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-superscript',
				'name'  => __( 'Superscript', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-table',
				'name'  => __( 'Table', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-text-height',
				'name'  => __( 'Text Height', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-text-width',
				'name'  => __( 'Text Width', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-th',
				'name'  => __( 'Table Header', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-th-large',
				'name'  => __( 'TH Large', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-th-list',
				'name'  => __( 'TH List', 'press-pool' ),
			),
			array(
				'group' => 'text-editor',
				'id'    => 'fa-underline',
				'name'  => __( 'Underline', 'press-pool' ),
			),

			/* Video Player (video-player) */
			array(
				'group' => 'video-player',
				'id'    => 'fa-arrows-alt',
				'name'  => __( 'Arrows', 'press-pool' ),
			),
			array(
				'group' => 'video-player',
				'id'    => 'fa-backward',
				'name'  => __( 'Backward', 'press-pool' ),
			),
			array(
				'group' => 'video-player',
				'id'    => 'fa-compress',
				'name'  => __( 'Compress', 'press-pool' ),
			),
			array(
				'group' => 'video-player',
				'id'    => 'fa-eject',
				'name'  => __( 'Eject', 'press-pool' ),
			),
			array(
				'group' => 'video-player',
				'id'    => 'fa-expand',
				'name'  => __( 'Expand', 'press-pool' ),
			),
			array(
				'group' => 'video-player',
				'id'    => 'fa-fast-backward',
				'name'  => __( 'Fast Backward', 'press-pool' ),
			),
			array(
				'group' => 'video-player',
				'id'    => 'fa-fast-forward',
				'name'  => __( 'Fast Forward', 'press-pool' ),
			),
			array(
				'group' => 'video-player',
				'id'    => 'fa-forward',
				'name'  => __( 'Forward', 'press-pool' ),
			),
			array(
				'group' => 'video-player',
				'id'    => 'fa-pause',
				'name'  => __( 'Pause', 'press-pool' ),
			),
			array(
				'group' => 'video-player',
				'id'    => 'fa-pause-circle',
				'name'  => __( 'Pause', 'press-pool' ),
			),
			array(
				'group' => 'video-player',
				'id'    => 'fa-pause-circle-o',
				'name'  => __( 'Pause', 'press-pool' ),
			),
			array(
				'group' => 'video-player',
				'id'    => 'fa-play',
				'name'  => __( 'Play', 'press-pool' ),
			),
			array(
				'group' => 'video-player',
				'id'    => 'fa-play-circle',
				'name'  => __( 'Play', 'press-pool' ),
			),
			array(
				'group' => 'video-player',
				'id'    => 'fa-play-circle-o',
				'name'  => __( 'Play', 'press-pool' ),
			),
			array(
				'group' => 'video-player',
				'id'    => 'fa-step-backward',
				'name'  => __( 'Step Backward', 'press-pool' ),
			),
			array(
				'group' => 'video-player',
				'id'    => 'fa-step-forward',
				'name'  => __( 'Step Forward', 'press-pool' ),
			),
			array(
				'group' => 'video-player',
				'id'    => 'fa-stop',
				'name'  => __( 'Stop', 'press-pool' ),
			),
			array(
				'group' => 'video-player',
				'id'    => 'fa-stop-circle',
				'name'  => __( 'Stop', 'press-pool' ),
			),
			array(
				'group' => 'video-player',
				'id'    => 'fa-stop-circle-o',
				'name'  => __( 'Stop', 'press-pool' ),
			),
			array(
				'group' => 'video-player',
				'id'    => 'fa-youtube-play',
				'name'  => __( 'YouTube Play', 'press-pool' ),
			),

			/* Web Application (web-application) */
			array(
				'group' => 'web-application',
				'id'    => 'fa-address-book',
				'name'  => __( 'Address Book', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-address-book-o',
				'name'  => __( 'Address Book', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-address-card',
				'name'  => __( 'Address Card', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-address-card-o',
				'name'  => __( 'Address Card', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-adjust',
				'name'  => __( 'Adjust', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-anchor',
				'name'  => __( 'Anchor', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-archive',
				'name'  => __( 'Archive', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-arrows',
				'name'  => __( 'Arrows', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-arrows-h',
				'name'  => __( 'Arrows', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-arrows-v',
				'name'  => __( 'Arrows', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-asterisk',
				'name'  => __( 'Asterisk', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-at',
				'name'  => __( 'At', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-balance-scale',
				'name'  => __( 'Balance', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-ban',
				'name'  => __( 'Ban', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-barcode',
				'name'  => __( 'Barcode', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-bars',
				'name'  => __( 'Bars', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-bathtub',
				'name'  => __( 'Bathtub', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-battery-empty',
				'name'  => __( 'Battery', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-battery-quarter',
				'name'  => __( 'Battery', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-battery-half',
				'name'  => __( 'Battery', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-battery-full',
				'name'  => __( 'Battery', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-bed',
				'name'  => __( 'Bed', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-beer',
				'name'  => __( 'Beer', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-bell',
				'name'  => __( 'Bell', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-bell-o',
				'name'  => __( 'Bell', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-bell-slash',
				'name'  => __( 'Bell', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-bell-slash-o',
				'name'  => __( 'Bell', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-binoculars',
				'name'  => __( 'Binoculars', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-birthday-cake',
				'name'  => __( 'Birthday Cake', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-bolt',
				'name'  => __( 'Bolt', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-book',
				'name'  => __( 'Book', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-bookmark',
				'name'  => __( 'Bookmark', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-bookmark-o',
				'name'  => __( 'Bookmark', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-bomb',
				'name'  => __( 'Bomb', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-briefcase',
				'name'  => __( 'Briefcase', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-bug',
				'name'  => __( 'Bug', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-building',
				'name'  => __( 'Building', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-building-o',
				'name'  => __( 'Building', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-bullhorn',
				'name'  => __( 'Bullhorn', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-bullseye',
				'name'  => __( 'Bullseye', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-calculator',
				'name'  => __( 'Calculator', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-calendar',
				'name'  => __( 'Calendar', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-calendar-o',
				'name'  => __( 'Calendar', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-calendar-check-o',
				'name'  => __( 'Calendar', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-calendar-minus-o',
				'name'  => __( 'Calendar', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-calendar-times-o',
				'name'  => __( 'Calendar', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-camera',
				'name'  => __( 'Camera', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-camera-retro',
				'name'  => __( 'Camera Retro', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-caret-square-o-down',
				'name'  => __( 'Caret Down', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-caret-square-o-left',
				'name'  => __( 'Caret Left', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-caret-square-o-right',
				'name'  => __( 'Caret Right', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-caret-square-o-up',
				'name'  => __( 'Caret Up', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-cart-arrow-down',
				'name'  => __( 'Cart Arrow Down', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-cart-plus',
				'name'  => __( 'Cart Plus', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-certificate',
				'name'  => __( 'Certificate', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-check',
				'name'  => __( 'Check', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-check-circle',
				'name'  => __( 'Check', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-check-circle-o',
				'name'  => __( 'Check', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-child',
				'name'  => __( 'Child', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-circle-thin',
				'name'  => __( 'Circle', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-clock-o',
				'name'  => __( 'Clock', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-clone',
				'name'  => __( 'Clone', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-cloud',
				'name'  => __( 'Cloud', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-cloud-download',
				'name'  => __( 'Cloud Download', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-cloud-upload',
				'name'  => __( 'Cloud Upload', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-code',
				'name'  => __( 'Code', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-code-fork',
				'name'  => __( 'Code Fork', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-coffee',
				'name'  => __( 'Coffee', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-cogs',
				'name'  => __( 'Cogs', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-comment',
				'name'  => __( 'Comment', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-comment-o',
				'name'  => __( 'Comment', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-comments',
				'name'  => __( 'Comments', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-comments-o',
				'name'  => __( 'Comments', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-commenting',
				'name'  => __( 'Commenting', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-commenting-o',
				'name'  => __( 'Commenting', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-compass',
				'name'  => __( 'Compass', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-copyright',
				'name'  => __( 'Copyright', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-credit-card',
				'name'  => __( 'Credit Card', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-crop',
				'name'  => __( 'Crop', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-crosshairs',
				'name'  => __( 'Crosshairs', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-cube',
				'name'  => __( 'Cube', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-cubes',
				'name'  => __( 'Cubes', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-i-cursor',
				'name'  => __( 'Cursor', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-cutlery',
				'name'  => __( 'Cutlery', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-dashboard',
				'name'  => __( 'Dashboard', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-database',
				'name'  => __( 'Database', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-desktop',
				'name'  => __( 'Desktop', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-diamond',
				'name'  => __( 'Diamond', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-download',
				'name'  => __( 'Download', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-edit',
				'name'  => __( 'Edit', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-ellipsis-h',
				'name'  => __( 'Ellipsis', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-ellipsis-v',
				'name'  => __( 'Ellipsis', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-envelope',
				'name'  => __( 'Envelope', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-envelope-o',
				'name'  => __( 'Envelope', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-envelope-square',
				'name'  => __( 'Envelope', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-envelope-open',
				'name'  => __( 'Envelope', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-envelope-open-o',
				'name'  => __( 'Envelope', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-eraser',
				'name'  => __( 'Eraser', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-exchange',
				'name'  => __( 'Exchange', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-exclamation',
				'name'  => __( 'Exclamation', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-exclamation-circle',
				'name'  => __( 'Exclamation', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-exclamation-triangle',
				'name'  => __( 'Exclamation', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-external-link',
				'name'  => __( 'External Link', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-external-link-square',
				'name'  => __( 'External Link', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-eye',
				'name'  => __( 'Eye', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-eye-slash',
				'name'  => __( 'Eye', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-eyedropper',
				'name'  => __( 'Eye Dropper', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-fax',
				'name'  => __( 'Fax', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-female',
				'name'  => __( 'Female', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-film',
				'name'  => __( 'Film', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-filter',
				'name'  => __( 'Filter', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-fire',
				'name'  => __( 'Fire', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-fire-extinguisher',
				'name'  => __( 'Fire Extinguisher', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-flag',
				'name'  => __( 'Flag', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-flag-checkered',
				'name'  => __( 'Flag', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-flag-o',
				'name'  => __( 'Flag', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-flash',
				'name'  => __( 'Flash', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-flask',
				'name'  => __( 'Flask', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-folder',
				'name'  => __( 'Folder', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-folder-open',
				'name'  => __( 'Folder Open', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-folder-o',
				'name'  => __( 'Folder', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-folder-open-o',
				'name'  => __( 'Folder Open', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-futbol-o',
				'name'  => __( 'Foot Ball', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-frown-o',
				'name'  => __( 'Frown', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-gamepad',
				'name'  => __( 'Gamepad', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-gavel',
				'name'  => __( 'Gavel', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-gear',
				'name'  => __( 'Gear', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-gears',
				'name'  => __( 'Gears', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-gift',
				'name'  => __( 'Gift', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-glass',
				'name'  => __( 'Glass', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-globe',
				'name'  => __( 'Globe', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-graduation-cap',
				'name'  => __( 'Graduation Cap', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-group',
				'name'  => __( 'Group', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-hand-lizard-o',
				'name'  => __( 'Hand', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-handshake-o',
				'name'  => __( 'Handshake', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-hand-paper-o',
				'name'  => __( 'Hand', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-hand-peace-o',
				'name'  => __( 'Hand', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-hand-pointer-o',
				'name'  => __( 'Hand', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-hand-rock-o',
				'name'  => __( 'Hand', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-hand-scissors-o',
				'name'  => __( 'Hand', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-hand-spock-o',
				'name'  => __( 'Hand', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-hdd-o',
				'name'  => __( 'HDD', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-hashtag',
				'name'  => __( 'Hash Tag', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-headphones',
				'name'  => __( 'Headphones', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-home',
				'name'  => __( 'Home', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-hourglass-o',
				'name'  => __( 'Hourglass', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-hourglass-start',
				'name'  => __( 'Hourglass', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-hourglass-half',
				'name'  => __( 'Hourglass', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-hourglass-end',
				'name'  => __( 'Hourglass', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-hourglass',
				'name'  => __( 'Hourglass', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-history',
				'name'  => __( 'History', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-inbox',
				'name'  => __( 'Inbox', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-id-badge',
				'name'  => __( 'ID Badge', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-id-card',
				'name'  => __( 'ID Card', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-id-card-o',
				'name'  => __( 'ID Card', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-industry',
				'name'  => __( 'Industry', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-info',
				'name'  => __( 'Info', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-info-circle',
				'name'  => __( 'Info', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-key',
				'name'  => __( 'Key', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-keyboard-o',
				'name'  => __( 'Keyboard', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-language',
				'name'  => __( 'Language', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-laptop',
				'name'  => __( 'Laptop', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-leaf',
				'name'  => __( 'Leaf', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-legal',
				'name'  => __( 'Legal', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-lemon-o',
				'name'  => __( 'Lemon', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-level-down',
				'name'  => __( 'Level Down', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-level-up',
				'name'  => __( 'Level Up', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-life-ring',
				'name'  => __( 'Life Buoy', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-lightbulb-o',
				'name'  => __( 'Lightbulb', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-location-arrow',
				'name'  => __( 'Location Arrow', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-lock',
				'name'  => __( 'Lock', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-magic',
				'name'  => __( 'Magic', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-magnet',
				'name'  => __( 'Magnet', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-mail-forward',
				'name'  => __( 'Mail Forward', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-mail-reply',
				'name'  => __( 'Mail Reply', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-mail-reply-all',
				'name'  => __( 'Mail Reply All', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-male',
				'name'  => __( 'Male', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-map',
				'name'  => __( 'Map', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-map-o',
				'name'  => __( 'Map', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-map-marker',
				'name'  => __( 'Map Marker', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-map-pin',
				'name'  => __( 'Map Pin', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-map-signs',
				'name'  => __( 'Map Signs', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-meh-o',
				'name'  => __( 'Meh', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-microchip',
				'name'  => __( 'Microchip', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-microphone',
				'name'  => __( 'Microphone', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-microphone-slash',
				'name'  => __( 'Microphone', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-minus',
				'name'  => __( 'Minus', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-minus-circle',
				'name'  => __( 'Minus', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-mobile',
				'name'  => __( 'Mobile', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-mobile-phone',
				'name'  => __( 'Mobile Phone', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-moon-o',
				'name'  => __( 'Moon', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-mouse-pointer',
				'name'  => __( 'Mouse Pointer', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-music',
				'name'  => __( 'Music', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-newspaper-o',
				'name'  => __( 'Newspaper', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-object-group',
				'name'  => __( 'Object Group', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-object-ungroup',
				'name'  => __( 'Object Ungroup', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-paint-brush',
				'name'  => __( 'Paint Brush', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-paper-plane',
				'name'  => __( 'Paper Plane', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-paper-plane-o',
				'name'  => __( 'Paper Plane', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-paw',
				'name'  => __( 'Paw', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-pencil',
				'name'  => __( 'Pencil', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-pencil-square',
				'name'  => __( 'Pencil', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-pencil-square-o',
				'name'  => __( 'Pencil', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-phone',
				'name'  => __( 'Phone', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-percent',
				'name'  => __( 'Percent', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-phone-square',
				'name'  => __( 'Phone', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-picture-o',
				'name'  => __( 'Picture', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-plug',
				'name'  => __( 'Plug', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-plus',
				'name'  => __( 'Plus', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-plus-circle',
				'name'  => __( 'Plus', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-power-off',
				'name'  => __( 'Power Off', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-podcast',
				'name'  => __( 'Podcast', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-print',
				'name'  => __( 'Print', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-puzzle-piece',
				'name'  => __( 'Puzzle Piece', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-qrcode',
				'name'  => __( 'QR Code', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-question',
				'name'  => __( 'Question', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-question-circle',
				'name'  => __( 'Question', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-question-circle-o',
				'name'  => __( 'Question', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-quote-left',
				'name'  => __( 'Quote Left', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-quote-right',
				'name'  => __( 'Quote Right', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-random',
				'name'  => __( 'Random', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-rebel',
				'name'  => __( 'Rebel', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-recycle',
				'name'  => __( 'Recycle', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-registered',
				'name'  => __( 'Registered', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-reply',
				'name'  => __( 'Reply', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-reply-all',
				'name'  => __( 'Reply All', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-retweet',
				'name'  => __( 'Retweet', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-road',
				'name'  => __( 'Road', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-rss',
				'name'  => __( 'RSS', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-rss-square',
				'name'  => __( 'RSS Square', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-search',
				'name'  => __( 'Search', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-search-minus',
				'name'  => __( 'Search Minus', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-search-plus',
				'name'  => __( 'Search Plus', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-server',
				'name'  => __( 'Server', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-share',
				'name'  => __( 'Share', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-share-alt',
				'name'  => __( 'Share', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-share-alt-square',
				'name'  => __( 'Share', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-share-square',
				'name'  => __( 'Share', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-share-square-o',
				'name'  => __( 'Share', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-shield',
				'name'  => __( 'Shield', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-shopping-cart',
				'name'  => __( 'Shopping Cart', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-shopping-bag',
				'name'  => __( 'Shopping Bag', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-shopping-basket',
				'name'  => __( 'Shopping Basket', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-shower',
				'name'  => __( 'Shower', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-sign-in',
				'name'  => __( 'Sign In', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-sign-out',
				'name'  => __( 'Sign Out', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-signal',
				'name'  => __( 'Signal', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-sitemap',
				'name'  => __( 'Sitemap', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-sliders',
				'name'  => __( 'Sliders', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-smile-o',
				'name'  => __( 'Smile', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-snowflake',
				'name'  => __( 'Snowflake', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-sort',
				'name'  => __( 'Sort', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-sort-asc',
				'name'  => __( 'Sort ASC', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-sort-desc',
				'name'  => __( 'Sort DESC', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-sort-down',
				'name'  => __( 'Sort Down', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-sort-up',
				'name'  => __( 'Sort Up', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-sort-alpha-asc',
				'name'  => __( 'Sort Alpha ASC', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-sort-alpha-desc',
				'name'  => __( 'Sort Alpha DESC', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-sort-amount-asc',
				'name'  => __( 'Sort Amount ASC', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-sort-amount-desc',
				'name'  => __( 'Sort Amount DESC', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-sort-numeric-asc',
				'name'  => __( 'Sort Numeric ASC', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-sort-numeric-desc',
				'name'  => __( 'Sort Numeric DESC', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-spoon',
				'name'  => __( 'Spoon', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-star',
				'name'  => __( 'Star', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-star-half',
				'name'  => __( 'Star Half', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-star-half-o',
				'name'  => __( 'Star Half', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-star-half-empty',
				'name'  => __( 'Star Half Empty', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-star-half-full',
				'name'  => __( 'Star Half Full', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-star-o',
				'name'  => __( 'Star', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-sticky-note',
				'name'  => __( 'Sticky Note', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-sticky-note-o',
				'name'  => __( 'Sticky Note', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-street-view',
				'name'  => __( 'Street View', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-suitcase',
				'name'  => __( 'Suitcase', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-sun-o',
				'name'  => __( 'Sun', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-tablet',
				'name'  => __( 'Tablet', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-tachometer',
				'name'  => __( 'Tachometer', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-tag',
				'name'  => __( 'Tag', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-tags',
				'name'  => __( 'Tags', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-tasks',
				'name'  => __( 'Tasks', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-television',
				'name'  => __( 'Television', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-terminal',
				'name'  => __( 'Terminal', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-thumb-tack',
				'name'  => __( 'Thumb Tack', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-thumbs-down',
				'name'  => __( 'Thumbs Down', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-thumbs-up',
				'name'  => __( 'Thumbs Up', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-thumbs-o-down',
				'name'  => __( 'Thumbs Down', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-thumbs-o-up',
				'name'  => __( 'Thumbs Up', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-ticket',
				'name'  => __( 'Ticket', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-times',
				'name'  => __( 'Times', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-times-circle',
				'name'  => __( 'Times', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-times-circle-o',
				'name'  => __( 'Times', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-tint',
				'name'  => __( 'Tint', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-toggle-down',
				'name'  => __( 'Toggle Down', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-toggle-left',
				'name'  => __( 'Toggle Left', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-toggle-right',
				'name'  => __( 'Toggle Right', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-toggle-up',
				'name'  => __( 'Toggle Up', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-toggle-off',
				'name'  => __( 'Toggle Off', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-toggle-on',
				'name'  => __( 'Toggle On', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-trademark',
				'name'  => __( 'Trademark', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-trash',
				'name'  => __( 'Trash', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-trash-o',
				'name'  => __( 'Trash', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-tree',
				'name'  => __( 'Tree', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-trophy',
				'name'  => __( 'Trophy', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-tty',
				'name'  => __( 'TTY', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-umbrella',
				'name'  => __( 'Umbrella', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-university',
				'name'  => __( 'University', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-unlock',
				'name'  => __( 'Unlock', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-unlock-alt',
				'name'  => __( 'Unlock', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-unsorted',
				'name'  => __( 'Unsorted', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-upload',
				'name'  => __( 'Upload', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-user',
				'name'  => __( 'User', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-user-o',
				'name'  => __( 'User', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-user-circle',
				'name'  => __( 'User', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-user-circle-o',
				'name'  => __( 'User', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-users',
				'name'  => __( 'Users', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-user-plus',
				'name'  => __( 'User: Add', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-user-times',
				'name'  => __( 'User: Remove', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-user-secret',
				'name'  => __( 'User: Password', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-video-camera',
				'name'  => __( 'Video Camera', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-volume-down',
				'name'  => __( 'Volume Down', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-volume-off',
				'name'  => __( 'Volume Of', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-volume-up',
				'name'  => __( 'Volume Up', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-warning',
				'name'  => __( 'Warning', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-wifi',
				'name'  => __( 'WiFi', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-window-close',
				'name'  => __( 'Window Close', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-window-close-o',
				'name'  => __( 'Window Close', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-window-maximize',
				'name'  => __( 'Window Maximize', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-window-minimize',
				'name'  => __( 'Window Minimize', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-window-restore',
				'name'  => __( 'Window Restore', 'press-pool' ),
			),
			array(
				'group' => 'web-application',
				'id'    => 'fa-wrench',
				'name'  => __( 'Wrench', 'press-pool' ),
			),
		);

		/**
		 * Filter genericon items
		 *
		 * @since 0.1.0
		 * @param array $items Icon names.
		 */
		$items = apply_filters( 'icon_picker_fa_items', $items );

		return $items;
	}
}
