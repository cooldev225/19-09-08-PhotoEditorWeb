<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$config['ci_bootstrap'] = array(
	'site_name' => 'BuddyWishier',
	'page_title_prefix' => '',
	'page_title' => 'BuddyWishier-personalised cards',
	'meta_data'	=> array(
		'viewport'      => 'width=device-width, initial-scale=1',
		'author'		=> 'miao',
		'description'	=> 'BuddyWishier, personalised cards and gifts quickly & easily online. Choose from a range of unique designs, add your own photos/text. Shop now - 50% OFF!',
		'keywords'	=> 'buddy, wishier, personalised, birthday card, a4, a3'
	),
	// Default scripts to embed at page head or end
	'scripts' => array(
		'head'	=> array(
			'assets/dist/frontend/js/modernizr.js',
			'assets/dist/frontend/js/jquery-1.11.3.min.js',
			//'assets/dist/frontend/cardflow/jquery-1.7.2.min.js',
			/*'assets/dist/frontend/owl-carousel/owl.carousel.min.js',*/
			'assets/dist/frontend/jquery.carouFredSel-6.0.4-packed.js',
			'assets/dist/admin/bootstrap-fileinput.js'
		),
		'foot'	=> array(
			'assets/dist/frontend/js/bootstrap.min.js', 
			'assets/dist/frontend/js/own-menu.js', 
			'assets/dist/frontend/js/jquery.lighter.js', 
			'assets/dist/frontend/js/owl.carousel.min.js',			
			'assets/dist/frontend/js/main.js',
			'assets/dist/frontend/rs-plugin/js/jquery.tp.t.min.js',
			'assets/dist/frontend/rs-plugin/js/jquery.tp.min.js'
		),
	),
	// Default stylesheets to embed at page head
	'stylesheets' => array(
		'screen' => array(
			'assets/dist/frontend/rs-plugin/css/settings.css',
			'assets/dist/frontend/css/bootstrap.min.css',
			'assets/dist/frontend/css/font-awesome.min.css',
			'assets/dist/frontend/css/ionicons.min.css',
			'assets/dist/frontend/css/main.css',
			'assets/dist/frontend/css/style.css',
			'assets/dist/frontend/css/responsive.css',
			/*'assets/dist/frontend/owl-carousel/owl.carousel.min.css',*/
			'assets/dist/admin/bootstrap-fileinput.css',
			'assets/dist/frontend/_carousel.css',
			/*'assets/dist/frontend/owl-carousel/owl.theme.default.min.css',*/
			'https://fonts.googleapis.com/css?family=Montserrat:400,700',
			'https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900'
		)
	),
	// Default CSS class for <body> tag
	'body_class' => '',
	// Multilingual settings
	'languages' => array(
		'default'		=> 'uk',
		'autoload'		=> array('general'),
		'available'		=> array(
			'uk' => array(
				'label'	=> 'United Kingdom',
				'value'	=> 'united-kingdom',
				'currency_symbol'	=> '£',
				'currency_rate'	=> '1'
			),
			'ie' => array(
				'label'	=> 'India',
				'value'	=> 'india',
				'currency_symbol'	=> '₹',
				'currency_rate'	=> '92.69'
			),
			'in' => array(
				'label'	=> 'India',
				'value'	=> 'india-hindi',
				'currency_symbol'	=> '₹',
				'currency_rate'	=> '92.69'	
			)
		)
	),
	// Google Analytics User ID
	'ga_id' => '',
	// Menu items
	'menu' => array(
		'card' => array(
			'name'		=> 'Cards',
			'url'		=> '',
			'icon'		=> 'fa fa-home',
		),
		'card-birthday' => array(
			'name'		=> 'Birthday Cards',
			'url'		=> 'auth',
		),
		'gift' => array(
			'name'		=> 'Gifts',
			'url'		=> 'auth',
			'icon'		=> 'fa fa-users',
		),
		'gift-personizeed' => array(
			'name'		=> 'Personalised Gifts',
			'url'		=> 'auth',
		),
		'flower' => array(
			'name'		=> 'Flowers',
			'url'		=> 'auth',
			'icon'		=> 'fa fa-users',
		),
		'gift-him' => array(
			'name'		=> 'Gifts For Him',
			'url'		=> 'auth',
		),
		'gift-her' => array(
			'name'		=> 'Gifts For Her',
			'url'		=> 'auth',
		),
		'gift-kid' => array(
			'name'		=> 'Kids Gifts',
			'url'		=> 'auth',
		),
		'wedding' => array(
			'name'		=> 'Wedding Stationery',
			'url'		=> 'auth',
			'icon'		=> 'fa fa-users',
		),
	),
	// Login page
	'login_url' => 'login',
	// Restricted pages
	'page_auth' => array(
	),

	// Email config
	'email' => array(
		'from_email'		=> 'kuppala85.bk@gmail.com',
		'from_name'			=> 'buddywisher',
		'subject_prefix'	=> '',
		
		// Mailgun HTTP API
		'mailgun_api'		=> array(
			'domain'			=> '',
			'private_api_key'	=> ''
		),
	),
	// Debug tools
	'debug' => array(
		'view_data'	=> FALSE,
		'profiler'	=> FALSE
	),
);

/*
| -------------------------------------------------------------------------
| Override values from /application/config/config.php
| -------------------------------------------------------------------------
*/
$config['sess_cookie_name'] = 'ci_session_frontend';