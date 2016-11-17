<?php
/*-----------------------------------------------------------------------------------*/
/*	Default Options
/*-----------------------------------------------------------------------------------*/


// Number of posts array
function magee_shortcodes_range ( $range, $all = true, $default = false, $range_start = 1 ) {
	if( $all ) {
		$number_of_posts['-1'] = 'All';
	}

	if( $default ) {
		$number_of_posts[''] = 'Default';
	}

	foreach( range( $range_start, $range ) as $number ) {
		$number_of_posts[$number] = $number;
	}

	return $number_of_posts;
}

//menus
function magee_shortcode_menus($name){
    $menus[''] = 'Default';
    if( $name !== ''){
	
	$menu = wp_get_nav_menus();
	    
		foreach ( $menu as $val){
		if(isset($val->name)){
			$menus[$val->name] = $val->name;
			}
		}	
		if(isset( $menus)){	
		return $menus;	
		}
    }

}
//widget list
function magee_get_sidebars() {
	global $wp_registered_sidebars;
    
	$sidebars = array();
    $sidebars[''] = 'Default'; 
	foreach( $wp_registered_sidebars as $sidebar_id => $sidebar ) {
		$sidebars[$sidebar_id] = $sidebar['name'];
	}
   
   return $sidebars;
}


global $magee_shortcodes,$magee_sliders,$magee_portfolios_cats;
$magee_sliders = Magee_Core::sliders_meta();

$choices = array( 'yes' => 'Yes', 'no' => 'No' );
$reverse_choices = array( 'no' => 'No', 'yes' => 'Yes' );
$choices_with_default = array( '' => 'Default', 'yes' => 'Yes', 'no' => 'No' );
$reverse_choices_with_default = array( '' => 'Default', 'no' => 'No', 'yes' => 'Yes' );
$leftright = array( 'left' => 'Left', 'right' => 'Right' );
$textalign = array( 'left' => __( 'Left', 'onetone' ), 'center' => __( 'Center', 'onetone' ), 'right' => __( 'Right', 'onetone' ) );
$opacity = array('0' => '0', '0.1' => '0.1', '0.2' => '0.2', '0.3' => '0.3', '0.4' => '0.4', '0.5' => '0.5', '0.6' => '0.6', '0.7' => '0.7', '0.8' => '0.8', '0.9' => '0.9', '1' => '1');
$dec_numbers = array( '0.1' => '0.1', '0.2' => '0.2', '0.3' => '0.3', '0.4' => '0.4', '0.5' => '0.5', '0.6' => '0.6', '0.7' => '0.7', '0.8' => '0.8', '0.9' => '0.9', '1' => '1', '2' => '2', '2.5' => '2.5', '3' => '3' );
$animation_type = array('' => 'None',"bounce" => "bounce", "flash" => "flash", "pulse" => "pulse", "rubberBand" => "rubberBand", "shake" => "shake", "swing" => "swing", "tada" => "tada", "wobble" => "wobble", "bounceIn" => "bounceIn", "bounceInDown" => "bounceInDown", "bounceInLeft" => "bounceInLeft", "bounceInRight" => "bounceInRight", "bounceInUp" => "bounceInUp", "bounceOut" => "bounceOut", "bounceOutDown" => "bounceOutDown", "bounceOutLeft" => "bounceOutLeft", "bounceOutRight" => "bounceOutRight", "bounceOutUp" => "bounceOutUp", "fadeIn" => "fadeIn", "fadeInDown" => "fadeInDown", "fadeInDownBig" => "fadeInDownBig", "fadeInLeft" => "fadeInLeft", "fadeInLeftBig" => "fadeInLeftBig", "fadeInRight" => "fadeInRight", "fadeInRightBig" => "fadeInRightBig", "fadeInUp" => "fadeInUp", "fadeInUpBig" => "fadeInUpBig", "fadeOut" => "fadeOut", "fadeOutDown" => "fadeOutDown", "fadeOutDownBig" => "fadeOutDownBig", "fadeOutLeft" => "fadeOutLeft", "fadeOutLeftBig" => "fadeOutLeftBig", "fadeOutRight" => "fadeOutRight", "fadeOutRightBig" => "fadeOutRightBig", "fadeOutUp" => "fadeOutUp", "fadeOutUpBig" => "fadeOutUpBig", "flip" => "flip", "flipInX" => "flipInX", "flipInY" => "flipInY", "flipOutX" => "flipOutX", "flipOutY" => "flipOutY", "lightSpeedIn" => "lightSpeedIn", "lightSpeedOut" => "lightSpeedOut", "rotateIn" => "rotateIn", "rotateInDownLeft" => "rotateInDownLeft", "rotateInDownRight" => "rotateInDownRight", "rotateInUpLeft" => "rotateInUpLeft", "rotateInUpRight" => "rotateInUpRight", "rotateOut" => "rotateOut", "rotateOutDownLeft" => "rotateOutDownLeft", "rotateOutDownRight" => "rotateOutDownRight", "rotateOutUpLeft" => "rotateOutUpLeft", "rotateOutUpRight" => "rotateOutUpRight", "hinge" => "hinge", "rollIn" => "rollIn", "rollOut" => "rollOut", "zoomIn" => "zoomIn", "zoomInDown" => "zoomInDown", "zoomInLeft" => "zoomInLeft", "zoomInRight" => "zoomInRight", "zoomInUp" => "zoomInUp", "zoomOut" => "zoomOut", "zoomOutDown" => "zoomOutDown", "zoomOutLeft" => "zoomOutLeft", "zoomOutRight" => "zoomOutRight", "zoomOutUp" => "zoomOutUp", "slideInDown" => "slideInDown", "slideInLeft" => "slideInLeft", "slideInRight" => "slideInRight", "slideInUp" => "slideInUp", "slideOutDown" => "slideOutDown", "slideOutLeft" => "slideOutLeft", "slideOutRight" => "slideOutRight", "slideOutUp" => "slideOutUp");
$columns  = array(""=>"default","1"=>"1/12","2"=>"2/12","3"=>"3/12","4"=>"4/12","5"=>"5/12","6"=>"6/12","7"=>"7/12","8"=>"8/12","9"=>"9/12","10"=>"10/12","11"=>"11/12","12"=>"12/12");
// Fontawesome icons list

$icons = array('fa-glass'=>'\f000', 'fa-music'=>'\f001', 'fa-search'=>'\f002', 'fa-envelope-o'=>'\f003', 'fa-heart'=>'\f004', 'fa-star'=>'\f005', 'fa-star-o'=>'\f006', 'fa-user'=>'\f007', 'fa-film'=>'\f008', 'fa-th-large'=>'\f009', 'fa-th'=>'\f00a', 'fa-th-list'=>'\f00b', 'fa-check'=>'\f00c', 'fa-times'=>'\f00d', 'fa-search-plus'=>'\f00e', 'fa-search-minus'=>'\f010', 'fa-power-off'=>'\f011', 'fa-signal'=>'\f012', 'fa-cog'=>'\f013', 'fa-trash-o'=>'\f014', 'fa-home'=>'\f015', 'fa-file-o'=>'\f016', 'fa-clock-o'=>'\f017', 'fa-road'=>'\f018', 'fa-download'=>'\f019', 'fa-arrow-circle-o-down'=>'\f01a', 'fa-arrow-circle-o-up'=>'\f01b', 'fa-inbox'=>'\f01c', 'fa-play-circle-o'=>'\f01d', 'fa-repeat'=>'\f01e', 'fa-refresh'=>'\f021', 'fa-list-alt'=>'\f022', 'fa-lock'=>'\f023', 'fa-flag'=>'\f024', 'fa-headphones'=>'\f025', 'fa-volume-off'=>'\f026', 'fa-volume-down'=>'\f027', 'fa-volume-up'=>'\f028', 'fa-qrcode'=>'\f029', 'fa-barcode'=>'\f02a', 'fa-tag'=>'\f02b', 'fa-tags'=>'\f02c', 'fa-book'=>'\f02d', 'fa-bookmark'=>'\f02e', 'fa-print'=>'\f02f', 'fa-camera'=>'\f030', 'fa-font'=>'\f031', 'fa-bold'=>'\f032', 'fa-italic'=>'\f033', 'fa-text-height'=>'\f034', 'fa-text-width'=>'\f035', 'fa-align-left'=>'\f036', 'fa-align-center'=>'\f037', 'fa-align-right'=>'\f038', 'fa-align-justify'=>'\f039', 'fa-list'=>'\f03a', 'fa-outdent'=>'\f03b', 'fa-indent'=>'\f03c', 'fa-video-camera'=>'\f03d', 'fa-picture-o'=>'\f03e', 'fa-pencil'=>'\f040', 'fa-map-marker'=>'\f041', 'fa-adjust'=>'\f042', 'fa-tint'=>'\f043', 'fa-pencil-square-o'=>'\f044', 'fa-share-square-o'=>'\f045', 'fa-check-square-o'=>'\f046', 'fa-arrows'=>'\f047', 'fa-step-backward'=>'\f048', 'fa-fast-backward'=>'\f049', 'fa-backward'=>'\f04a', 'fa-play'=>'\f04b', 'fa-pause'=>'\f04c', 'fa-stop'=>'\f04d', 'fa-forward'=>'\f04e', 'fa-fast-forward'=>'\f050', 'fa-step-forward'=>'\f051', 'fa-eject'=>'\f052', 'fa-chevron-left'=>'\f053', 'fa-chevron-right'=>'\f054', 'fa-plus-circle'=>'\f055', 'fa-minus-circle'=>'\f056', 'fa-times-circle'=>'\f057', 'fa-check-circle'=>'\f058', 'fa-question-circle'=>'\f059', 'fa-info-circle'=>'\f05a', 'fa-crosshairs'=>'\f05b', 'fa-times-circle-o'=>'\f05c', 'fa-check-circle-o'=>'\f05d', 'fa-ban'=>'\f05e', 'fa-arrow-left'=>'\f060', 'fa-arrow-right'=>'\f061', 'fa-arrow-up'=>'\f062', 'fa-arrow-down'=>'\f063', 'fa-share'=>'\f064', 'fa-expand'=>'\f065', 'fa-compress'=>'\f066', 'fa-plus'=>'\f067', 'fa-minus'=>'\f068', 'fa-asterisk'=>'\f069', 'fa-exclamation-circle'=>'\f06a', 'fa-gift'=>'\f06b', 'fa-leaf'=>'\f06c', 'fa-fire'=>'\f06d', 'fa-eye'=>'\f06e', 'fa-eye-slash'=>'\f070', 'fa-exclamation-triangle'=>'\f071', 'fa-plane'=>'\f072', 'fa-calendar'=>'\f073', 'fa-random'=>'\f074', 'fa-comment'=>'\f075', 'fa-magnet'=>'\f076', 'fa-chevron-up'=>'\f077', 'fa-chevron-down'=>'\f078', 'fa-retweet'=>'\f079', 'fa-shopping-cart'=>'\f07a', 'fa-folder'=>'\f07b', 'fa-folder-open'=>'\f07c', 'fa-arrows-v'=>'\f07d', 'fa-arrows-h'=>'\f07e', 'fa-bar-chart'=>'\f080', 'fa-twitter-square'=>'\f081', 'fa-facebook-square'=>'\f082', 'fa-camera-retro'=>'\f083', 'fa-key'=>'\f084', 'fa-cogs'=>'\f085', 'fa-comments'=>'\f086', 'fa-thumbs-o-up'=>'\f087', 'fa-thumbs-o-down'=>'\f088', 'fa-star-half'=>'\f089', 'fa-heart-o'=>'\f08a', 'fa-sign-out'=>'\f08b', 'fa-linkedin-square'=>'\f08c', 'fa-thumb-tack'=>'\f08d', 'fa-external-link'=>'\f08e', 'fa-sign-in'=>'\f090', 'fa-trophy'=>'\f091', 'fa-github-square'=>'\f092', 'fa-upload'=>'\f093', 'fa-lemon-o'=>'\f094', 'fa-phone'=>'\f095', 'fa-square-o'=>'\f096', 'fa-bookmark-o'=>'\f097', 'fa-phone-square'=>'\f098', 'fa-twitter'=>'\f099', 'fa-facebook'=>'\f09a', 'fa-github'=>'\f09b', 'fa-unlock'=>'\f09c', 'fa-credit-card'=>'\f09d', 'fa-rss'=>'\f09e', 'fa-hdd-o'=>'\f0a0', 'fa-bullhorn'=>'\f0a1', 'fa-bell'=>'\f0f3', 'fa-certificate'=>'\f0a3', 'fa-hand-o-right'=>'\f0a4', 'fa-hand-o-left'=>'\f0a5', 'fa-hand-o-up'=>'\f0a6', 'fa-hand-o-down'=>'\f0a7', 'fa-arrow-circle-left'=>'\f0a8', 'fa-arrow-circle-right'=>'\f0a9', 'fa-arrow-circle-up'=>'\f0aa', 'fa-arrow-circle-down'=>'\f0ab', 'fa-globe'=>'\f0ac', 'fa-wrench'=>'\f0ad', 'fa-tasks'=>'\f0ae', 'fa-filter'=>'\f0b0', 'fa-briefcase'=>'\f0b1', 'fa-arrows-alt'=>'\f0b2', 'fa-users'=>'\f0c0', 'fa-link'=>'\f0c1', 'fa-cloud'=>'\f0c2', 'fa-flask'=>'\f0c3', 'fa-scissors'=>'\f0c4', 'fa-files-o'=>'\f0c5', 'fa-paperclip'=>'\f0c6', 'fa-floppy-o'=>'\f0c7', 'fa-square'=>'\f0c8', 'fa-bars'=>'\f0c9', 'fa-list-ul'=>'\f0ca', 'fa-list-ol'=>'\f0cb', 'fa-strikethrough'=>'\f0cc', 'fa-underline'=>'\f0cd', 'fa-table'=>'\f0ce', 'fa-magic'=>'\f0d0', 'fa-truck'=>'\f0d1', 'fa-pinterest'=>'\f0d2', 'fa-pinterest-square'=>'\f0d3', 'fa-google-plus-square'=>'\f0d4', 'fa-google-plus'=>'\f0d5', 'fa-money'=>'\f0d6', 'fa-caret-down'=>'\f0d7', 'fa-caret-up'=>'\f0d8', 'fa-caret-left'=>'\f0d9', 'fa-caret-right'=>'\f0da', 'fa-columns'=>'\f0db', 'fa-sort'=>'\f0dc', 'fa-sort-desc'=>'\f0dd', 'fa-sort-asc'=>'\f0de', 'fa-envelope'=>'\f0e0', 'fa-linkedin'=>'\f0e1', 'fa-undo'=>'\f0e2', 'fa-gavel'=>'\f0e3', 'fa-tachometer'=>'\f0e4', 'fa-comment-o'=>'\f0e5', 'fa-comments-o'=>'\f0e6', 'fa-bolt'=>'\f0e7', 'fa-sitemap'=>'\f0e8', 'fa-umbrella'=>'\f0e9', 'fa-clipboard'=>'\f0ea', 'fa-lightbulb-o'=>'\f0eb', 'fa-exchange'=>'\f0ec', 'fa-cloud-download'=>'\f0ed', 'fa-cloud-upload'=>'\f0ee', 'fa-user-md'=>'\f0f0', 'fa-stethoscope'=>'\f0f1', 'fa-suitcase'=>'\f0f2', 'fa-bell-o'=>'\f0a2', 'fa-coffee'=>'\f0f4', 'fa-cutlery'=>'\f0f5', 'fa-file-text-o'=>'\f0f6', 'fa-building-o'=>'\f0f7', 'fa-hospital-o'=>'\f0f8', 'fa-ambulance'=>'\f0f9', 'fa-medkit'=>'\f0fa', 'fa-fighter-jet'=>'\f0fb', 'fa-beer'=>'\f0fc', 'fa-h-square'=>'\f0fd', 'fa-plus-square'=>'\f0fe', 'fa-angle-double-left'=>'\f100', 'fa-angle-double-right'=>'\f101', 'fa-angle-double-up'=>'\f102', 'fa-angle-double-down'=>'\f103', 'fa-angle-left'=>'\f104', 'fa-angle-right'=>'\f105', 'fa-angle-up'=>'\f106', 'fa-angle-down'=>'\f107', 'fa-desktop'=>'\f108', 'fa-laptop'=>'\f109', 'fa-tablet'=>'\f10a', 'fa-mobile'=>'\f10b', 'fa-circle-o'=>'\f10c', 'fa-quote-left'=>'\f10d', 'fa-quote-right'=>'\f10e', 'fa-spinner'=>'\f110', 'fa-circle'=>'\f111', 'fa-reply'=>'\f112', 'fa-github-alt'=>'\f113', 'fa-folder-o'=>'\f114', 'fa-folder-open-o'=>'\f115', 'fa-smile-o'=>'\f118', 'fa-frown-o'=>'\f119', 'fa-meh-o'=>'\f11a', 'fa-gamepad'=>'\f11b', 'fa-keyboard-o'=>'\f11c', 'fa-flag-o'=>'\f11d', 'fa-flag-checkered'=>'\f11e', 'fa-terminal'=>'\f120', 'fa-code'=>'\f121', 'fa-reply-all'=>'\f122', 'fa-star-half-o'=>'\f123', 'fa-location-arrow'=>'\f124', 'fa-crop'=>'\f125', 'fa-code-fork'=>'\f126', 'fa-chain-broken'=>'\f127', 'fa-question'=>'\f128', 'fa-info'=>'\f129', 'fa-exclamation'=>'\f12a', 'fa-superscript'=>'\f12b', 'fa-subscript'=>'\f12c', 'fa-eraser'=>'\f12d', 'fa-puzzle-piece'=>'\f12e', 'fa-microphone'=>'\f130', 'fa-microphone-slash'=>'\f131', 'fa-shield'=>'\f132', 'fa-calendar-o'=>'\f133', 'fa-fire-extinguisher'=>'\f134', 'fa-rocket'=>'\f135', 'fa-maxcdn'=>'\f136', 'fa-chevron-circle-left'=>'\f137', 'fa-chevron-circle-right'=>'\f138', 'fa-chevron-circle-up'=>'\f139', 'fa-chevron-circle-down'=>'\f13a', 'fa-html5'=>'\f13b', 'fa-css3'=>'\f13c', 'fa-anchor'=>'\f13d', 'fa-unlock-alt'=>'\f13e', 'fa-bullseye'=>'\f140', 'fa-ellipsis-h'=>'\f141', 'fa-ellipsis-v'=>'\f142', 'fa-rss-square'=>'\f143', 'fa-play-circle'=>'\f144', 'fa-ticket'=>'\f145', 'fa-minus-square'=>'\f146', 'fa-minus-square-o'=>'\f147', 'fa-level-up'=>'\f148', 'fa-level-down'=>'\f149', 'fa-check-square'=>'\f14a', 'fa-pencil-square'=>'\f14b', 'fa-external-link-square'=>'\f14c', 'fa-share-square'=>'\f14d', 'fa-compass'=>'\f14e', 'fa-caret-square-o-down'=>'\f150', 'fa-caret-square-o-up'=>'\f151', 'fa-caret-square-o-right'=>'\f152', 'fa-eur'=>'\f153', 'fa-gbp'=>'\f154', 'fa-usd'=>'\f155', 'fa-inr'=>'\f156', 'fa-jpy'=>'\f157', 'fa-rub'=>'\f158', 'fa-krw'=>'\f159', 'fa-btc'=>'\f15a', 'fa-file'=>'\f15b', 'fa-file-text'=>'\f15c', 'fa-sort-alpha-asc'=>'\f15d', 'fa-sort-alpha-desc'=>'\f15e', 'fa-sort-amount-asc'=>'\f160', 'fa-sort-amount-desc'=>'\f161', 'fa-sort-numeric-asc'=>'\f162', 'fa-sort-numeric-desc'=>'\f163', 'fa-thumbs-up'=>'\f164', 'fa-thumbs-down'=>'\f165', 'fa-youtube-square'=>'\f166', 'fa-youtube'=>'\f167', 'fa-xing'=>'\f168', 'fa-xing-square'=>'\f169', 'fa-youtube-play'=>'\f16a', 'fa-dropbox'=>'\f16b', 'fa-stack-overflow'=>'\f16c', 'fa-instagram'=>'\f16d', 'fa-flickr'=>'\f16e', 'fa-adn'=>'\f170', 'fa-bitbucket'=>'\f171', 'fa-bitbucket-square'=>'\f172', 'fa-tumblr'=>'\f173', 'fa-tumblr-square'=>'\f174', 'fa-long-arrow-down'=>'\f175', 'fa-long-arrow-up'=>'\f176', 'fa-long-arrow-left'=>'\f177', 'fa-long-arrow-right'=>'\f178', 'fa-apple'=>'\f179', 'fa-windows'=>'\f17a', 'fa-android'=>'\f17b', 'fa-linux'=>'\f17c', 'fa-dribbble'=>'\f17d', 'fa-skype'=>'\f17e', 'fa-foursquare'=>'\f180', 'fa-trello'=>'\f181', 'fa-female'=>'\f182', 'fa-male'=>'\f183', 'fa-gratipay'=>'\f184', 'fa-sun-o'=>'\f185', 'fa-moon-o'=>'\f186', 'fa-archive'=>'\f187', 'fa-bug'=>'\f188', 'fa-vk'=>'\f189', 'fa-weibo'=>'\f18a', 'fa-renren'=>'\f18b', 'fa-pagelines'=>'\f18c', 'fa-stack-exchange'=>'\f18d', 'fa-arrow-circle-o-right'=>'\f18e', 'fa-arrow-circle-o-left'=>'\f190', 'fa-caret-square-o-left'=>'\f191', 'fa-dot-circle-o'=>'\f192', 'fa-wheelchair'=>'\f193', 'fa-vimeo-square'=>'\f194', 'fa-try'=>'\f195', 'fa-plus-square-o'=>'\f196', 'fa-space-shuttle'=>'\f197', 'fa-slack'=>'\f198', 'fa-envelope-square'=>'\f199', 'fa-wordpress'=>'\f19a', 'fa-openid'=>'\f19b', 'fa-university'=>'\f19c', 'fa-graduation-cap'=>'\f19d', 'fa-yahoo'=>'\f19e', 'fa-google'=>'\f1a0', 'fa-reddit'=>'\f1a1', 'fa-reddit-square'=>'\f1a2', 'fa-stumbleupon-circle'=>'\f1a3', 'fa-stumbleupon'=>'\f1a4', 'fa-delicious'=>'\f1a5', 'fa-digg'=>'\f1a6', 'fa-pied-piper'=>'\f1a7', 'fa-pied-piper-alt'=>'\f1a8', 'fa-drupal'=>'\f1a9', 'fa-joomla'=>'\f1aa', 'fa-language'=>'\f1ab', 'fa-fax'=>'\f1ac', 'fa-building'=>'\f1ad', 'fa-child'=>'\f1ae', 'fa-paw'=>'\f1b0', 'fa-spoon'=>'\f1b1', 'fa-cube'=>'\f1b2', 'fa-cubes'=>'\f1b3', 'fa-behance'=>'\f1b4', 'fa-behance-square'=>'\f1b5', 'fa-steam'=>'\f1b6', 'fa-steam-square'=>'\f1b7', 'fa-recycle'=>'\f1b8', 'fa-car'=>'\f1b9', 'fa-taxi'=>'\f1ba', 'fa-tree'=>'\f1bb', 'fa-spotify'=>'\f1bc', 'fa-deviantart'=>'\f1bd', 'fa-soundcloud'=>'\f1be', 'fa-database'=>'\f1c0', 'fa-file-pdf-o'=>'\f1c1', 'fa-file-word-o'=>'\f1c2', 'fa-file-excel-o'=>'\f1c3', 'fa-file-powerpoint-o'=>'\f1c4', 'fa-file-image-o'=>'\f1c5', 'fa-file-archive-o'=>'\f1c6', 'fa-file-audio-o'=>'\f1c7', 'fa-file-video-o'=>'\f1c8', 'fa-file-code-o'=>'\f1c9', 'fa-vine'=>'\f1ca', 'fa-codepen'=>'\f1cb', 'fa-jsfiddle'=>'\f1cc', 'fa-life-ring'=>'\f1cd', 'fa-circle-o-notch'=>'\f1ce', 'fa-rebel'=>'\f1d0', 'fa-empire'=>'\f1d1', 'fa-git-square'=>'\f1d2', 'fa-git'=>'\f1d3', 'fa-hacker-news'=>'\f1d4', 'fa-tencent-weibo'=>'\f1d5', 'fa-qq'=>'\f1d6', 'fa-weixin'=>'\f1d7', 'fa-paper-plane'=>'\f1d8', 'fa-paper-plane-o'=>'\f1d9', 'fa-history'=>'\f1da', 'fa-circle-thin'=>'\f1db', 'fa-header'=>'\f1dc', 'fa-paragraph'=>'\f1dd', 'fa-sliders'=>'\f1de', 'fa-share-alt'=>'\f1e0', 'fa-share-alt-square'=>'\f1e1', 'fa-bomb'=>'\f1e2', 'fa-futbol-o'=>'\f1e3', 'fa-tty'=>'\f1e4', 'fa-binoculars'=>'\f1e5', 'fa-plug'=>'\f1e6', 'fa-slideshare'=>'\f1e7', 'fa-twitch'=>'\f1e8', 'fa-yelp'=>'\f1e9', 'fa-newspaper-o'=>'\f1ea', 'fa-wifi'=>'\f1eb', 'fa-calculator'=>'\f1ec', 'fa-paypal'=>'\f1ed', 'fa-google-wallet'=>'\f1ee', 'fa-cc-visa'=>'\f1f0', 'fa-cc-mastercard'=>'\f1f1', 'fa-cc-discover'=>'\f1f2', 'fa-cc-amex'=>'\f1f3', 'fa-cc-paypal'=>'\f1f4', 'fa-cc-stripe'=>'\f1f5', 'fa-bell-slash'=>'\f1f6', 'fa-bell-slash-o'=>'\f1f7', 'fa-trash'=>'\f1f8', 'fa-copyright'=>'\f1f9', 'fa-at'=>'\f1fa', 'fa-eyedropper'=>'\f1fb', 'fa-paint-brush'=>'\f1fc', 'fa-birthday-cake'=>'\f1fd', 'fa-area-chart'=>'\f1fe', 'fa-pie-chart'=>'\f200', 'fa-line-chart'=>'\f201', 'fa-lastfm'=>'\f202', 'fa-lastfm-square'=>'\f203', 'fa-toggle-off'=>'\f204', 'fa-toggle-on'=>'\f205', 'fa-bicycle'=>'\f206', 'fa-bus'=>'\f207', 'fa-ioxhost'=>'\f208', 'fa-angellist'=>'\f209', 'fa-cc'=>'\f20a', 'fa-ils'=>'\f20b', 'fa-meanpath'=>'\f20c', 'fa-buysellads'=>'\f20d', 'fa-connectdevelop'=>'\f20e', 'fa-dashcube'=>'\f210', 'fa-forumbee'=>'\f211', 'fa-leanpub'=>'\f212', 'fa-sellsy'=>'\f213', 'fa-shirtsinbulk'=>'\f214', 'fa-simplybuilt'=>'\f215', 'fa-skyatlas'=>'\f216', 'fa-cart-plus'=>'\f217', 'fa-cart-arrow-down'=>'\f218', 'fa-diamond'=>'\f219', 'fa-ship'=>'\f21a', 'fa-user-secret'=>'\f21b', 'fa-motorcycle'=>'\f21c', 'fa-street-view'=>'\f21d', 'fa-heartbeat'=>'\f21e', 'fa-venus'=>'\f221', 'fa-mars'=>'\f222', 'fa-mercury'=>'\f223', 'fa-transgender'=>'\f224', 'fa-transgender-alt'=>'\f225', 'fa-venus-double'=>'\f226', 'fa-mars-double'=>'\f227', 'fa-venus-mars'=>'\f228', 'fa-mars-stroke'=>'\f229', 'fa-mars-stroke-v'=>'\f22a', 'fa-mars-stroke-h'=>'\f22b', 'fa-neuter'=>'\f22c', 'fa-genderless'=>'\f22d', 'fa-facebook-official'=>'\f230', 'fa-pinterest-p'=>'\f231', 'fa-whatsapp'=>'\f232', 'fa-server'=>'\f233', 'fa-user-plus'=>'\f234', 'fa-user-times'=>'\f235', 'fa-bed'=>'\f236', 'fa-viacoin'=>'\f237', 'fa-train'=>'\f238', 'fa-subway'=>'\f239', 'fa-medium'=>'\f23a', 'fa-y-combinator'=>'\f23b', 'fa-optin-monster'=>'\f23c', 'fa-opencart'=>'\f23d', 'fa-expeditedssl'=>'\f23e', 'fa-battery-full'=>'\f240', 'fa-battery-three-quarters'=>'\f241', 'fa-battery-half'=>'\f242', 'fa-battery-quarter'=>'\f243', 'fa-battery-empty'=>'\f244', 'fa-mouse-pointer'=>'\f245', 'fa-i-cursor'=>'\f246', 'fa-object-group'=>'\f247', 'fa-object-ungroup'=>'\f248', 'fa-sticky-note'=>'\f249', 'fa-sticky-note-o'=>'\f24a', 'fa-cc-jcb'=>'\f24b', 'fa-cc-diners-club'=>'\f24c', 'fa-clone'=>'\f24d', 'fa-balance-scale'=>'\f24e', 'fa-hourglass-o'=>'\f250', 'fa-hourglass-start'=>'\f251', 'fa-hourglass-half'=>'\f252', 'fa-hourglass-end'=>'\f253', 'fa-hourglass'=>'\f254', 'fa-hand-rock-o'=>'\f255', 'fa-hand-paper-o'=>'\f256', 'fa-hand-scissors-o'=>'\f257', 'fa-hand-lizard-o'=>'\f258', 'fa-hand-spock-o'=>'\f259', 'fa-hand-pointer-o'=>'\f25a', 'fa-hand-peace-o'=>'\f25b', 'fa-trademark'=>'\f25c', 'fa-registered'=>'\f25d', 'fa-creative-commons'=>'\f25e', 'fa-gg'=>'\f260', 'fa-gg-circle'=>'\f261', 'fa-tripadvisor'=>'\f262', 'fa-odnoklassniki'=>'\f263', 'fa-odnoklassniki-square'=>'\f264', 'fa-get-pocket'=>'\f265', 'fa-wikipedia-w'=>'\f266', 'fa-safari'=>'\f267', 'fa-chrome'=>'\f268', 'fa-firefox'=>'\f269', 'fa-opera'=>'\f26a', 'fa-internet-explorer'=>'\f26b', 'fa-television'=>'\f26c', 'fa-contao'=>'\f26d', 'fa-500px'=>'\f26e', 'fa-amazon'=>'\f270', 'fa-calendar-plus-o'=>'\f271', 'fa-calendar-minus-o'=>'\f272', 'fa-calendar-times-o'=>'\f273', 'fa-calendar-check-o'=>'\f274', 'fa-industry'=>'\f275', 'fa-map-pin'=>'\f276', 'fa-map-signs'=>'\f277', 'fa-map-o'=>'\f278', 'fa-map'=>'\f279', 'fa-commenting'=>'\f27a', 'fa-commenting-o'=>'\f27b', 'fa-houzz'=>'\f27c', 'fa-vimeo'=>'\f27d', 'fa-black-tie'=>'\f27e', 'fa-fonticons'=>'\f280');



$checklist_icons = array ( 'icon-check' => '\f00c', 'icon-star' => '\f006', 'icon-angle-right' => '\f105', 'icon-asterisk' => '\f069', 'icon-remove' => '\f00d', 'icon-plus' => '\f067' );

/*-----------------------------------------------------------------------------------*/
/*	Shortcode Selection Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['shortcode-generator'] = array(
	'no_preview' => true,
	'params' => array(),
	'shortcode' => '',
	'popup_title' => ''
);


/*-----------------------------------------------------------------------------------*/
/*	Accordion Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['accordion'] = array(
	'no_preview' => true,
	'icon' => 'fa-list-ul',
	'params' => array(
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone' )
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone' )
		),	
		'style' => array(
			'type' => 'select',
			'std' => 'simple',
			'label' => __( 'Style', 'onetone' ),
			'desc' => __( 'The "simple" doesn\'t have a border in the whole accordion, and the "boxed" has.','onetone'),
			'options' => array(
				'simple' => __( 'Simple Style', 'onetone' ),
				'boxed' => __( 'Boxed Style', 'onetone' ),
			)
		),
		'type' => array(
			'type' => 'select',
			'label' => __( 'Type', 'onetone' ),
			'desc' => __( 'The differance is in the right of accordion, "1" is a down arrow, and the "2" is a plus in a box','onetone'),
			'std' => '1',
			'options' => array(
				'1' => __( 'Type 1', 'onetone' ),
				'2' => __( 'Type 2', 'onetone' ),
			)
		),
		
		),
	'child_shortcode' => array(
		'params' => array(
						  
		'title' => array(
			'std' => 'Title',
			'type' => 'text',
			'label' => __( 'Title', 'onetone'),
			'desc' => __( 'Insert the title for the accordion item.', 'onetone'),
		),	
		'content' => array(
			'std' => 'Your Content Goes Here',
			'type' => 'textarea',
			'label' => __( 'Text', 'onetone'),
			'desc' => __( 'Insert the content for the accordion item.', 'onetone'),
		),	
		'status' => array(
			'std' => 'close',
			'type' => 'select',
			'label' => __( 'Status', 'onetone'),
			'desc' =>  __( 'Choose to have the accordion open or close when page loads.', 'onetone'),
			'options' => array("close"=>"Close","open"=>"Open")
		),
		'close_icon' => array(
			'type' => 'iconpicker',
			'label' => __( 'Select Close Status Icon', 'onetone'),
			'desc' => __( 'Click an icon to select, click again to deselect', 'onetone'),
			'options' => $icons
		),
		'open_icon' => array(
			'type' => 'iconpicker',
			'label' => __( 'Select Open Status Icon', 'onetone'),
			'desc' => __( 'Click an icon to select, click again to deselect', 'onetone'),
			'options' => $icons
		),
           )
		,
	'shortcode' => "[ms_accordion_item title=\"{{title}}\" close_icon=\"{{close_icon}}\" open_icon=\"{{open_icon}}\" status=\"{{status}}\"]{{content}}[/ms_accordion_item]\r\n",	
		),	
	'shortcode' => "[ms_accordion style=\"{{style}}\" type=\"{{type}}\"  class=\"{{class}}\" id=\"{{id}}\"]\r\n{{child_shortcode}}[/ms_accordion]",
	'popup_title' => __( 'Accordion Shortcode', 'onetone' ),
    'name' => __('accordions-shortcode/','magee-shortocdes'),

);


/*-----------------------------------------------------------------------------------*/
/*	Alert Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['alert'] = array(
	'no_preview' => true,
	'icon' => 'fa-exclamation-circle',
	'params' => array(
		'icon' => array(
			'type' => 'iconpicker',
			'label' => __( 'Icon', 'onetone' ),
			'desc' => __( 'Click an icon to select, click again to deselect.', 'onetone' ),
			'options' => $icons
			),
		
		'content' => array(
			'std' => __('Warning! Better check yourself, you\'re not looking too good.', 'onetone'),
			'type' => 'textarea',
			'label' => __( 'Alert Content', 'onetone' ),
			'desc' => __( 'Insert the content for the alert.', 'onetone' ),
		),
		
		'background_color' => array(
			'std' => '#f5f5f5',
			'type' => 'colorpicker',
			'label' => __( 'Background Color', 'onetone' ),
			'desc' => __( 'Set background color for alert box.', 'onetone' ),
		),
		'text_color' => array(
			'std' => '',
			'type' => 'colorpicker',
			'label' => __( 'Text Color', 'onetone' ),
			'desc' =>__( 'Set content color & border color for alert box.', 'onetone' ),
		),
	
		
		'border_width' => array(
			'std' => '0',
			'type' => 'number',
			'max' => '50',
			'min' => '0',
			'label' => __( 'Border Width', 'onetone' ),
			'desc' => __('In pixels (px), eg: 1px.', 'onetone')
		),
		
		'border_radius' => array(
			'std' => '0',
			'type' => 'number',
			'max' => '50',
			'min' => '0',
			'label' => __( 'Border Radius', 'onetone' ),
			'desc' => __('In pixels (px), eg: 1px.', 'onetone')
		),
		
		'box_shadow' => array(
			'std' => '',
			'type' => 'choose',
			'label' => __( 'Box Shadow', 'onetone' ),
			'desc' => __( 'Display a box shadow for alert.', 'onetone' ),
			'options' => $reverse_choices 
		),	
		'dismissable' => array(
			'std' => '',
			'type' => 'choose',
			'label' => __( 'Dismissable', 'onetone' ),
			'desc' => __( 'The alert box is dismissable.', 'onetone' ),
			'options' =>  $reverse_choices 
		),	
		
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),		
	),
	'shortcode' => '[ms_alert icon="{{icon}}" background_color="{{background_color}}"  text_color="{{text_color}}"  border_width="{{border_width}}"  border_radius="{{border_radius}}" box_shadow="{{box_shadow}}" dismissable="{{dismissable}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_alert]',
	'popup_title' => __( 'Alert Shortcode', 'onetone' ),
	'name' => __('alert-shortcode/','magee-shortocdes'),
);
/*-----------------------------------------------------------------------------------*/
/*	Animation Config
/*-----------------------------------------------------------------------------------*/
$magee_shortcodes['animation'] = array(
    'no_preview' => true,
	'icon' => 'fa-bolt', 
	'params' => array(
		'animation_speed' => array(
			'type' => 'select',
			'label' => __( 'Animation Speed', 'onetone'),
			'desc' => __( 'Type in speed of animation in seconds.', 'onetone'),
			'std'=>'0.9',
			'options' => $dec_numbers
		),
		'animation_type' => array(
			'type' => 'select',
			'label' => __( 'Animation Type', 'onetone'),
			'desc' =>  __( 'Select the type of animation.', 'onetone'),
			'options' => $animation_type
		),
		'image_animation' => array(
			'type' => 'choose',
			'label' => __( 'Image Animation', 'onetone'),
			'desc' => __('Only images from content to be animated.','onetone'),
			'options' => $reverse_choices
		),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone'),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone'),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),	
		'content' => array(
			'std' => __('Your Content Goes Here', 'onetone'),
			'type' => 'textarea',
			'label' => __( 'Animation Content', 'onetone'),
			'desc' => __( 'Insert the content to be animated.', 'onetone'),
		),
		
	),
	'shortcode' => '[ms_animation animation_speed="{{animation_speed}}" animation_type="{{animation_type}}"  image_animation="{{image_animation}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_animation]',
	'popup_title' => __( 'Animation Shortcode', 'onetone')
);	

/*-----------------------------------------------------------------------------------*/
/*	Audio Config
/*-----------------------------------------------------------------------------------*/
$magee_shortcodes['audio'] = array(
	'no_preview' => true,
	'icon' => 'fa-play-circle-o',
	'params' => array(
	    'mp3' => array(
			'std' => '',
			'type' => 'link',
			'label' => __( 'Mp3 URL', 'onetone'),
			'desc' => __( 'Add the URL of audio in MP3 format.', 'onetone')
		),
		'ogg' => array(
			'std' => '',
			'type' => 'link',
			'label' => __( 'Ogg URL', 'onetone'),
			'desc' => __( 'Add the URL of audio in OGG format.', 'onetone')
		),
		'wav' => array(
			'std' => '',
			'type' => 'link',
			'label' => __( 'Wav URL', 'onetone'),
			'desc' => __( 'Add the URL of audio in WAV format.', 'onetone')
		),
		'mute' => array(
		    'type' => 'choose',
		    'label' => __( 'Mute Audio','onetone'),
		    'desc' => __('Choose to mute the audio.','onetone'), 
		    'options' =>  $reverse_choices,
		),
		'autoplay' => array(
		    'type' => 'choose',
		    'label' => __( 'Autoplay Audio','onetone'),
		    'desc' => __('Choose to autoplay the audio.','onetone'), 
		    'options' =>  $choices,
		),
		'loop' => array(
		    'type' => 'choose',
		    'label' => __( 'Loop Audio','onetone'),
		    'desc' => __('Choose to loop the audio.','onetone'), 
		    'options' =>  $choices,
		),
		'controls' => array(
		    'type' => 'choose',
		    'label' => __( 'Controls Audio','onetone'),
		    'desc' => __('Choose to display controls of the audio.','onetone'), 
		    'options' =>  $choices,
		),
	    'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone'),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone'),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),
	),   
    'shortcode' => '[ms_audio mp3="{{mp3}}" ogg="{{ogg}}" wav="{{wav}}" mute="{{mute}}" autoplay="{{autoplay}}" loop="{{loop}}" controls="{{controls}}" class="{{class}}" id="{{id}}"][/ms_audio]' ,
	'popup_title' => __( 'Audio Shortcode','onetone'),
	'name' => __('audio-shortcode/','magee-shortocdes'),
);

/*-----------------------------------------------------------------------------------*/
/*	Blog Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['blog'] = array(
	'no_preview' => true,
	'icon' => 'fa-pencil-square-o',
	'params' => array(
					  
	'style' => array(
			'type' => 'select',
			'label' => __( 'List Style', 'onetone'),
			'desc' => __( 'Style1: Image above content. Style2: Image beside content.', 'onetone'),
			'options' => array( '1' => __( 'Style 1', 'onetone' ), '2' => __( 'Style 2', 'onetone' ), '3' => __( 'Style 3', 'onetone' ), '4' => __( 'Style 4 ( Timeline )', 'onetone' ) )
		),

	'num' => array(
			'type' => 'number',
			'label' => __( 'List Num', 'onetone'),
			'desc' => __( 'Number of posts displayed.', 'onetone'),
			"std"=>'10',
			'max' => '100',
			'min' => '0',
		),
	'column' => array(
			'type' => 'select',
			'label' => __( 'Column', 'onetone'),
			'desc' => __( 'Choose column number for blog list.', 'onetone'),
			'std' => '3',
			'options' => array( '1' => '1', '2' => '2', '3' => '3', '4' => '4' )
		),
	
	'category' => array(
			'type' => 'select',
			'label' => __( 'Category', 'onetone'),
			'desc' => __( 'Choose a category of blog posts to display.', 'onetone'),
			'options' => Magee_Core::magee_shortcodes_categories('category',true),
		),
	'page_nav' => array(
			'type' => 'choose',
			'label' => __( 'Display Page Navigation', 'onetone'),
			'desc' => __( 'Choose to show page navigation for blog list.', 'onetone'),
			'std' => 'no',
			'options' => $choices
		),
		'offset' => array(
		    'std' => '0',
			'min' => '0',
			'max' => '50',
			'type' => 'number',
			'label' => __( 'Post Offset','onetone'),
		    'desc' => __( 'The number of posts to skip. ex: 1.','onetone')
		),
		'exclude_category' => array(
		    'std' => '',
			'type' => 'select',
			'label' => __( 'Exclude Categories','onetone'),
			'desc' => __( 'Select a category to exclude.','onetone'),
            'options' => Magee_Core::magee_shortcodes_categories('category',true),
		),
		'display_image' => array(
		    'std' => '',
			'type' => 'choose',
			'label' => __( 'Display Feature Images','onetone'),
			'desc' => __( 'Choose to display the post featured image.','onetone'),
			'options' => $choices
		),
		'display_title' => array(
		    'type' => 'choose',
			'label' => __( 'Display Title','onetone'),
			'desc' => __( 'Choose to display the post title.','onetone'),
			'options' => $choices
		),
		'display_meta' => array(
		    'type' => 'choose',
			'label' => __( 'Display Meta','onetone'),
			'desc' => __( 'Choose to show all meta data.','onetone'),
			'options' => $choices
		),
		'display_excerpt' => array(
		    'type' => 'choose',
			'label' => __( 'Display Excerpt','onetone'),
			'desc' => __( 'Choose to display the post excerpt.','onetone'),
			'options' => $choices
		),
		'excerpt_length' => array(
		    'std' => '',
		    'type' => 'text',
			'label' => __( 'Excerpt Length','onetone'),
			'desc' => __( 'Insert the number of words/characters you want to show in the excerpt.','onetone')
		),
		'strip' => array(
			'type' => 'choose',
			'label' => __( 'Strip HTML','onetone'),
			'desc' => __( 'Strip HTML from the post excerpt.','onetone'),
			'options' => $choices
		),
		
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone'),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone'),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),
	),
	'shortcode' => '[ms_blog num="{{num}}"  style="{{style}}" column="{{column}}" category="{{category}}" page_nav="{{page_nav}}"  class="{{class}}" id="{{id}}" offset="{{offset}}" exclude_category="{{exclude_category}}" display_image="{{display_image}}" display_title="{{display_title}}" display_meta="{{display_meta}}" display_excerpt="{{display_excerpt}}" excerpt_length="{{excerpt_length}}" strip="{{strip}}"]',
	'popup_title' => __( 'Blog Shortcode', 'onetone')
);

/*******************************************************
 *	Button Config
 ********************************************************/

$magee_shortcodes['button'] = array(
	'no_preview' => true,
	'icon' => 'fa-hand-o-up',
	'params' => array(
		'style' => array(
			'type' => 'select',
			'label' => __( 'Button Style', 'onetone' ),
			'desc' => __( 'Select the button\'s default style.', 'onetone' ),
			'options' => array(
				'normal' => __('Normal', 'onetone'),
				'dark' => __('Dark', 'onetone'),
				'light' => __('Light', 'onetone'),
				'2d' => __('2d', 'onetone'),
				'3d' => __('3d', 'onetone'),
				'line' => __('Line', 'onetone'),
				'line_dark' => __('Line Dark', 'onetone'),
				'line_light' => __('Line Light', 'onetone'),
				
			)
		),
		'link' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Button URL', 'onetone' ),
			'desc' => __( 'Add the button\'s url eg: http://example.com.', 'onetone' )
		),
		'size' => array(
			'type' => 'select',
			'std' =>'medium',
			'label' => __( 'Button Size', 'onetone' ),
			'desc' => __( 'Select the button\'s size.', 'onetone' ),
			'options' => array(
				'small' => __('Small', 'onetone'),
				'medium' => __('Medium', 'onetone'),
				'large' => __('Large', 'onetone'),
				'xlarge' => __('XLarge', 'onetone'),
			)
		),
		
		'border_width' => array(
			'std' => '0',
			'type' => 'number',
			'max' => '50',
			'min' => '0',
			'label' => __('Border Width', 'onetone'),
			'desc' => __('In pixels (px), default: 2px.', 'onetone'),
		),
	
		'shape' => array(
			'type' => 'select',
			'label' => __( 'Button Shape', 'onetone' ),
			'desc' => __( 'Select the button\'s shape. Choose default for theme option selection.', 'onetone' ),
			'options' => array(
				'' => __('Default', 'onetone'),
				'square' => __('Square', 'onetone'),
				'rounded' => __('Rounded', 'onetone'),
				'full-rounded' => __('Full Rounded', 'onetone'),
			)
		),
		'shadow' => array(
			'type' => 'choose',
			'label' => __( 'Text Shadow', 'onetone' ),
			'desc' => __( 'Display shadow for button text.', 'onetone' ),
			'options' => $reverse_choices
		),
		'gradient' => array(
			'type' => 'choose',
			'label' => __( 'Gradient', 'onetone' ),
			'desc' => __( 'Display gradient for button.', 'onetone' ),
			'options' => $reverse_choices
		),
		'block' => array(
			'type' => 'choose',
			'label' => __( 'Block Button', 'onetone' ),
			'desc' => __( 'Display in full width.', 'onetone' ),
			'options' => $reverse_choices
		),
		
		'target' => array(
			'type' => 'choose',
			'label' => __( 'Button Target', 'onetone' ),
			'desc' => __( '_self = open in same window <br />_blank = open in new window.', 'onetone' ),
			'options' => array(
				'_self' => '_self',
				'_blank' => '_blank'
			)
		),
	
		'content' => array(
			'std' => __('Button Text', 'onetone'),
			'type' => 'text',
			'label' => __( 'Button\'s Text', 'onetone' ),
			'desc' => __( 'Add the text that will display in the button.', 'onetone' ),
		),
		
		'color' => array(
			'type' => 'colorpicker',
			'desc' => __( 'Set background color for button.', 'onetone' ),
			'label' => __( 'Button Color', 'onetone' ),
			'std' => ''
		),
		
		'textcolor' => array(
			'type' => 'colorpicker',
			'std' => '#ffffff',
			'label' => __( 'Text Color', 'onetone' ),
			'desc' => __( 'Set content color & border color for button.', 'onetone' )
		),
		
		'icon' => array(
			'type' => 'iconpicker',
			'label' => __( 'Button Icon', 'onetone' ),
			'desc' => __( 'Click an icon to select, click again to deselect.', 'onetone' ),
			'options' => $icons
		),
		
		'iconanimationtype' => array(
			'type' => 'select',
			'label' => __( 'Icon Animation Type', 'onetone' ),
			'desc' => __( 'Select the type of animation to use on the button icon.', 'onetone' ),
			'options' => $animation_type
		),
		
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),			
	),
	'shortcode' => '[ms_button style="{{style}}" link="{{link}}" size="{{size}}" shape="{{shape}}" shadow="{{shadow}}" block="{{block}}" target="{{target}}" gradient="{{gradient}}" color="{{color}}"  text_color="{{textcolor}}" icon="{{icon}}" icon_animation_type="{{iconanimationtype}}" border_width="{{border_width}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_button]',
	'popup_title' => __( 'Button Shortcode', 'onetone'),
	'name' => __('buttons-shortcode/','magee-shortocdes'),
);

/*-----------------------------------------------------------------------------------*/
/*	Carousel Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['carousel'] = array(
	'no_preview' => true,
	'icon' => 'fa-picture-o',
	'params' => array(
		'style' => array(
				'type' => 'select',
				'std' => '1',
				'label' => __( 'Style', 'onetone'),
				'desc' => __( 'Select the display style of carousel navigation.', 'onetone'),
				'options' =>array(		
					'1' => __( 'Style 1', 'onetone'),
					'2' => __( 'Style 2', 'onetone'),
					'3' => __( 'Style 3', 'onetone'),
				),
			),
		'columns' => array(
				'type' => 'select',
				'std' => '4',
				'label' => __( 'Columns', 'onetone'),
				'desc' => __( 'Choose column number for carousel.', 'onetone'),
				'options' =>array(		
					'1' => __( '1 Column', 'onetone'),
					'2' => __( '2 Columns', 'onetone'),
					'3' => __( '3 Columns', 'onetone'),
					'4' => __( '4 Columns', 'onetone'),
					'5' => __( '5 Columns', 'onetone'),
					'6' => __( '6 Columns', 'onetone'),
					'7' => __( '7 Columns', 'onetone'),
					'8' => __( '8 Columns', 'onetone'),
				),
			),
		'autoplay' => array(
			'std' => 'no',
			'type' => 'choose',
			'label' => __( 'Autoplay', 'onetone'),
			'desc' => __( 'Choose to autoplay the carousel.', 'onetone'),
			'options' => $reverse_choices 
		),	
		
		'autoplaytimeout' => array(
			'std' => '5000',
			'type' => 'text',
			'label' => __( 'Autoplay Timeout', 'onetone'),
			'desc' => __( 'Set timeout for autoplay.', 'onetone'),
		),
		'display_nav' => array(
			'std' => 'yes',
			'type' => 'choose',
			'label' => __( 'Display Navigation', 'onetone'),
			'desc' =>  __( 'Choose to display navigation for carousel', 'onetone'),
			'options' => $choices 
		),	
		
		'nav_color' => array(
			'std' => '',
			'type' => 'colorpicker',
			'label' => __( 'Nav Color', 'onetone'),
			'desc' => __( 'Set color for carousel navigation.', 'onetone'),
		),
		'nav_shape' => array(
				'type' => 'select',
				'std' => '1',
				'label' => __( 'Navigation Shape', 'onetone'),
				'desc' => __( 'Set shape for carousel navigation.', 'onetone'),
				'options' =>array(		
					'square' => __( 'Square', 'onetone'),
					'rounded' => __( 'Rounded', 'onetone'),
					'circle' => __( 'Circle', 'onetone'),
				),
			),
		'nav_size' => array(
				'type' => 'select',
				'std' => '1',
				'label' => __( 'Navigation Size', 'onetone'),
				'desc' => __( 'Set size for carousel navigation.', 'onetone'),
				'options' =>array(		
					'small' => __( 'Small', 'onetone'),
					'middle' => __( 'Middle', 'onetone'),
					'large' => __( 'Large', 'onetone'),
				),
			),
		
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone'),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone'),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),
				
	),
	'shortcode' => "[ms_carousel style=\"{{style}}\" columns=\"{{columns}}\" display_nav=\"{{display_nav}}\" autoplay=\"{{autoplay}}\" autoplaytimeout=\"{{autoplaytimeout}}\"  nav_color=\"{{nav_color}}\" nav_shape=\"{{nav_shape}}\" nav_size=\"{{nav_size}}\" class=\"{{class}}\" id=\"{{id}}\"]\r\n{{child_shortcode}}[/ms_carousel]",
	'popup_title' => __( 'Carousel Shortcode', 'onetone'),
	'child_shortcode' => array(
		'params' => array(
		
		'content' => array(
			'std' => __('Carousel Item Content', 'onetone'),
			'type' => 'textarea',
			'label' => __( 'Carousel Item Content', 'onetone'),
			'desc' => '',
		)
		
		),	
		
	'shortcode' => "[ms_carousel_item]{{content}}[/ms_carousel_item]\r\n",
		),
	'name' => __('carousel-shortcode/','magee-shortocdes'),
);

/*-----------------------------------------------------------------------------------*/
/*	Chart Bar Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['chart_bar'] = array(
	'no_preview' => true,
	'icon' => 'fa-bar-chart',
	'params' => array(
	    'width' => array(
		    'std' => '600',
			'type' => 'number',
			'max' => '1000',
			'min' => '0', 
			'label' => __( 'Canvas Width','onetone'),
			'desc' => '',
		),
		'height' => array(
		    'std' => '400',
			'type' => 'number',
			'max' => '1000',
			'min' => '0', 
			'label' => __( 'Canvas Height','onetone'),
			'desc' => '',
		),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone'),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone'),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),
        'label' => array(
		    'std' => "'January','February','March','April','May','June'",
			'type' => 'text',
			'label' => __('Label For Line','onetone') ,
			'desc' => __( 'separate multiple tags added to chart line with commas','onetone')
		),  
	),
	'shortcode' => "[ms_chart_bar width=\"{{width}}\" height=\"{{height}}\" class=\"{{class}}\" id=\"{{id}}\" label=\"{{label}}\"]\r\n{{child_shortcode}}[/ms_chart_bar]",	
	'popup_title' => __( 'Chart Bar Shortcode', 'onetone'),
	'child_shortcode' => array(
	'params' => array(		
	     'data' => array(
		     'std' => '456,479,324,569,702,600',
			 'type' => 'text',
			 'label' => __( 'Data','onetone'),
			 'desc' => __( 'separate values for each set of data with commas','onetone')
		 ),
		 'fillcolor' => array(
		     'std' => '#ACC284',  
		     'type' => 'colorpicker',
			 'label' => __( 'Fill Color','onetone'), 
			 'desc' => '', 
		 ),
		 'fillopacity' => array(
		      'std' => '0.4',
			  'type' => 'select',
			  'label' => __( 'Fill Opacity','onetone') ,
			  'desc' => '',
			  'options' => $opacity 
		 ),
		 'strokecolor' => array(
		     'std' => '#ACC26D',  
		     'type' => 'colorpicker',
			 'label' => __( 'Stroke Color','onetone'), 
			 'desc' => '', 
		 ),
		 'strokeopacity' => array(
		      'std' => '0.4',
			  'type' => 'select',
			  'label' => __( 'Stroke Opacity','onetone') ,
			  'desc' => '',
			  'options' => $opacity 
		 ),
	),
	'shortcode' => "[ms_bar data=\"{{data}}\" fillcolor=\"{{fillcolor}}\" fillopacity=\"{{fillopacity}}\" strokecolor=\"{{strokecolor}}\" strokeopacity=\"{{strokeopacity}}\"][/ms_bar]\r\n",	
	)
);

/*-----------------------------------------------------------------------------------*/
/*	Chart Doughnut Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['chart_doughnut'] = array(
	'no_preview' => true,
	'icon' => 'fa-bar-chart',
	'params' => array(
	    'width' => array(
		    'std' => '600',
			'type' => 'number',
			'max' => '1000',
			'min' => '0', 
			'label' => __( 'Canvas Width','onetone'),
			'desc' => '',
		),
		'height' => array(
		    'std' => '400',
			'type' => 'number',
			'max' => '1000',
			'min' => '0', 
			'label' => __( 'Canvas Height','onetone'),
			'desc' => '',
		),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone'),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone'),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),
		'content' => array(  
		    'std' => "[ms_doughnut value=\"20\" color=\"#878BB6\"]\r\n[ms_doughnut value=\"40\" color=\"#4ACAB4\"]\r\n[ms_doughnut value=\"10\" color=\"#FF8153\"]\r\n[ms_doughnut value=\"30\" color=\"#FFEA88\"]\r\n",
			'type' => 'textarea',
			'label' => __( 'Content', 'onetone'),
		    'desc' => '', 
		),
	),
	'shortcode' => "[ms_chart_doughnut width=\"{{width}}\" height=\"{{height}}\" class=\"{{class}}\" id=\"{{id}}\"]\r\n{{content}}[/ms_chart_doughnut]",	
	'popup_title' => __( 'Chart Doughnut Shortcode', 'onetone'),
);

/*-----------------------------------------------------------------------------------*/
/*	Chart Line Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['chart_line'] = array(
	'no_preview' => true,
	'icon' => 'fa-bar-chart',
	'params' => array(
	    'width' => array(
		    'std' => '600',
			'type' => 'number',
			'max' => '1000',
			'min' => '0', 
			'label' => __( 'Canvas Width','onetone'),
			'desc' => '',
		),
		'height' => array(
		    'std' => '400',
			'type' => 'number',
			'max' => '1000',
			'min' => '0', 
			'label' => __( 'Canvas Height','onetone'),
			'desc' => '',
		),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone'),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone'),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),
        'label' => array(
		    'std' => "'January','February','March','April','May','June'",
			'type' => 'text',
			'label' => __('Label For Line','onetone') ,
			'desc' => ''
		),  
	),
	'shortcode' => "[ms_chart_line width=\"{{width}}\" height=\"{{height}}\" class=\"{{class}}\" id=\"{{id}}\" label=\"{{label}}\"]\r\n{{child_shortcode}}[/ms_chart_line]",	
	'popup_title' => __( 'Chart Line Shortcode', 'onetone'),
	'child_shortcode' => array(
	'params' => array(		
	     'data' => array(
		     'std' => '203,156,99,251,305,247',
			 'type' => 'text',
			 'label' => __( 'Data','onetone'),
			 'desc' => __( 'separate values for each set of data with commas','onetone')
		 ),
		 'fillcolor' => array(
		     'std' => '#ACC284',  
		     'type' => 'colorpicker',
			 'label' => __( 'Fill Color','onetone'), 
			 'desc' => '', 
		 ),
		 'fillopacity' => array(
		      'std' => '0.4',
			  'type' => 'select',
			  'label' => __( 'Fill Opacity','onetone') ,
			  'desc' => '',
			  'options' => $opacity 
		 ),
		 'strokecolor' => array(
		     'std' => '#ACC26D',  
		     'type' => 'colorpicker',
			 'label' => __( 'Stroke Color','onetone'), 
			 'desc' => '', 
		 ),
		 'pointcolor' => array(
		     'std' => '#ffffff',  
		     'type' => 'colorpicker',
			 'label' => __( 'Point Color','onetone'), 
			 'desc' => '', 
		 ),
		 'pointstrokecolor' => array(
		     'std' => '#9DB86D',  
		     'type' => 'colorpicker',
			 'label' => __( 'Point Stroke Color','onetone'), 
			 'desc' => '', 
		 ),
	),
	'shortcode' => "[ms_line data=\"{{data}}\" fillcolor=\"{{fillcolor}}\" fillopacity=\"{{fillopacity}}\" strokecolor=\"{{strokecolor}}\" pointcolor=\"{{pointcolor}}\" pointstrokecolor=\"{{pointstrokecolor}}\"][/ms_line]\r\n",	
	)
);
	
/*-----------------------------------------------------------------------------------*/
/*	Chart Pie Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['chart_pie'] = array(
	'no_preview' => true,
	'icon' => 'fa-bar-chart',
	'params' => array(
	    'width' => array(
		    'std' => '600',
			'type' => 'number',
			'max' => '1000',
			'min' => '0', 
			'label' => __( 'Canvas Width','onetone'),
			'desc' => ''
		),
		'height' => array(
		    'std' => '400',
			'type' => 'number',
			'max' => '1000',
			'min' => '0', 
			'label' => __( 'Canvas Height','onetone'),
			'desc' => ''
		),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone'),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone'),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),
		'content' => array(  
		    'std' => "[ms_pie value=\"20\" color=\"#878BB6\"]\r\n[ms_pie value=\"40\" color=\"#4ACAB4\"]\r\n[ms_pie value=\"10\" color=\"#FF8153\"]\r\n[ms_pie value=\"30\" color=\"#FFEA88\"]\r\n",
			'type' => 'textarea',
			'label' => __( 'Content', 'onetone'),
		    'desc' => '', 
		),
	),
	'shortcode' => "[ms_chart_pie width=\"{{width}}\" height=\"{{height}}\" class=\"{{class}}\" id=\"{{id}}\"]\r\n{{content}}[/ms_chart_pie]",	
	'popup_title' => __( 'Chart Pie Shortcode', 'onetone')
);
	
/*******************************************************
 *	Columns Config
 ********************************************************/

$magee_shortcodes['column'] = array(
	'no_preview' => true,
	'icon' => 'fa-columns',
	'params' => array(
	
	),
	'shortcode' => "[ms_row]\r\n{{child_shortcode}}[/ms_row]",	
	'popup_title' => __( 'Column Shortcode', 'onetone'),	
	'name' => __('columns-shortcode/','magee-shortocdes'),
	'child_shortcode' => array(
	'params' => array(				  
		'style' => array(
			'type' => 'select',
			'label' => __( 'Column Style', 'onetone'),
			'desc' => __( 'Select the size of column.', 'onetone'),
			'options' => array(
				'1/1' => __('1/1', 'onetone'),
				'1/2' => __('1/2', 'onetone'),
				'1/3' => __('1/3', 'onetone'),
				'1/4' => __('1/4', 'onetone'),
				'1/5' => __('1/5', 'onetone'),
				'1/6' => __('1/6', 'onetone'),
				'2/3' => __('2/3', 'onetone'),
				'2/5' => __('2/5', 'onetone'),
				'3/4' => __('3/4', 'onetone'),
				'3/5' => __('3/5', 'onetone'),
				'4/5' => __('4/5', 'onetone'),
				'5/6' => __('5/6', 'onetone'),
			)
		),
	
		'content' => array(
			'std' => __('Column Content', 'onetone'),
			'type' => 'textarea',
			'label' => __( ' Column Content', 'onetone'),
			'desc' => __( 'Insert the column\'s content', 'onetone'),
		),	
		'align' => array(
			'std' => __('left', 'onetone'),
			'type' => 'select',
			'label' => __( 'Content Align', 'onetone'),
			'desc' => '',
			'options' => array(
			    'left' => __( 'Left', 'onetone'),
			    'center' => __( 'Center', 'onetone'),
				'right' => __( 'Right', 'onetone'),
			),
		),		
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone'),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone'),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),
	),	
	'shortcode' =>"[ms_column style=\"{{style}}\" align=\"{{align}}\" class=\"{{class}}\" id=\"{{id}}\"]{{content}}[/ms_column]\r\n",
	)
	
);

/*-----------------------------------------------------------------------------------*/
/*	Contact Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['contact'] = array(
	'no_preview' => true,
	'icon' => 'fa-envelope',
	'params' => array(
		
		
	'receiver' => array(
			'type' => 'text',
			'label' => __( 'Receiver Email', 'onetone'),
			'desc' =>  __( 'Set receiver email address for contact form.', 'onetone'),
			"std"=> get_option( 'admin_email' )
			
		),
	
	'style' => array(
			'type' => 'select',
			'label' => __( 'Style', 'onetone'),
			'desc' => __( 'Choose style for contact form.', 'onetone'),
			'options' => array( 
							   'normal' => __( 'Normal Style', 'onetone'),
							   'classic' =>  __( 'Classic Style', 'onetone'),
							   'outline' => __( 'Outline Style', 'onetone'),
							   'background' => __( 'Background Style', 'onetone')
							   )
		),

	'color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Button / Border Color', 'onetone'),
			'desc' => __( 'Set main color for contact form.', 'onetone'),
			'std' => '#963'
		),
	'terms' =>array(
			'type' => 'choose',
			'label' => __( 'Display Terms Check Box', 'onetone'),
			'desc' => __( 'Choose to display terms check box.', 'onetone'),
			'std' => 'yes',
			'options' => array( 'yes' => 'Yes', 'no' => 'No' )
		),
     'content' => array(
			'std' => 'I have read and understood your reasonable terms <span class="required">*</span>',
			'type' => 'textarea',
			'label' => __( 'Terms Text', 'onetone'),
			'desc' => __( 'Insert content for terms of contact form.', 'onetone'),
		),	
	
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone'),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone'),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		)
		
		
	),
	'shortcode' => '[ms_contact receiver="{{receiver}}"  style="{{style}}" color="{{color}}"  terms="{{terms}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_contact]',
	'popup_title' => __( 'Contact Form Shortcode', 'onetone')
);

/*-----------------------------------------------------------------------------------*/
/*	Countdowns Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['countdowns'] = array(
	'no_preview' => true,
	'icon' => 'fa-calendar',
	'params' => array(
		
     
	'endtime' => array(
			'std' => date('d-m-Y H:i',strtotime(' 1 month')),
			'type' => 'datepicker',
			'label' => __( 'Set end time for countdown.', 'onetone' ),
			'desc' => '',

		),
	    'fontcolor' => array(
		    'std' => '',
			'type' => 'colorpicker',
			'label' => __( 'Font Color','onetone' ),
			'desc' => __( 'Set font color for countdown.', 'onetone')
		
		), 	
		'backgroundcolor' => array(
		     'std' => '',
			 'type' => 'colorpicker',
			 'label' => __( 'Background Color','onetone'),
			 'desc' => __( 'Set background color for countdown.','onetone')
		
		),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone' )
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone' )
		)
		
		
	),
	'shortcode' => '[ms_countdowns endtime="{{endtime}}" fontcolor="{{fontcolor}}" backgroundcolor="{{backgroundcolor}}" class="{{class}}" id="{{id}}"]',
	'popup_title' => __( 'Countdowns Shortcode', 'onetone' ),
	'name' => __('countdowns-shortcode/','magee-shortocdes'),
);


/*-----------------------------------------------------------------------------------*/
/*	Counter Box Config
/*-----------------------------------------------------------------------------------*/


$magee_shortcodes['counter'] = array(
	'no_preview' => true,
	'icon' => 'fa-calculator',
	'params' => array(
		
	),
	'shortcode' => "[ms_row]\r\n{{child_shortcode}}[/ms_row]",
	'child_shortcode' => array(
		'params' => array(	
		    'box_width' => array(
			       'std' => '1/4',
			       'type' => 'select',
				   'label' => __( 'Box Width', 'onetone' ),
				   'desc' => __( 'Select size of counter box', 'onetone' ),
				   'options' => array(
						'1/1' => __('1/1', 'onetone'),
						'1/2' => __('1/2', 'onetone'),
						'1/3' => __('1/3', 'onetone'),
						'1/4' => __('1/4', 'onetone'),
						'1/5' => __('1/5', 'onetone'),
						'1/6' => __('1/6', 'onetone'),
						'2/3' => __('2/3', 'onetone'),
						'2/5' => __('2/5', 'onetone'),
						'3/4' => __('3/4', 'onetone'),
						'3/5' => __('3/5', 'onetone'),
						'4/5' => __('4/5', 'onetone'),
						'5/6' => __('5/6', 'onetone'),
					)
			   ),	
		    'top_icon' => array(
					'type' => 'iconpicker',
					'label' => __( 'Top Icon', 'onetone' ),
					'desc' => __( 'Click an icon to select, click again to deselect.', 'onetone' ),
					'options' => $icons
				),
			'top_icon_color' => array(
					'std' => '',
					'type' => 'colorpicker',
					'label' => __( 'Top Icon Color', 'onetone'),  
					'desc' => __( 'Set color for top icon.','onetone') 
			
				),
			'middle_left_icon' => array(
					'type' => 'iconpicker',
					'label' => __( 'Middle Left Icon', 'onetone' ),
					'desc' =>  __( 'Insert text before the number.', 'onetone' ),
					'options' => $icons
				),
				
				'middle_left_text' => array(
					'std' => '',
					'type' => 'text',
					'label' => __( 'Middle Left Text', 'onetone' ),
					'desc' => __( 'Left text of counter num', 'onetone' ),
				),
				
				'counter_num' => array(
					'std' => '100',
					'type' => 'number',
					'max' => '200',
					'min' => '0',
					'label' => __( 'Counter Num', 'onetone' ),
					'desc' => __( 'The animated counter number.', 'onetone' ),
				),
				'middle_right_text' => array(
					'std' => '',
					'type' => 'text',
					'label' => __( 'Middle Right Text', 'onetone' ),
					'desc' =>  __( 'Insert text after the number.', 'onetone' ),
				),
				
				'bottom_title' => array(
					'std' => '',
					'type' => 'text',
					'label' => __( 'Bottom Title', 'onetone' ),
					'desc' => __( 'Insert Title for counter.', 'onetone' ),
				),
				
				'border' => array(
					'type' => 'choose',
					'label' => __( 'Display Border', 'onetone' ),
					'desc' =>  __( 'Choose to display border for counter.', 'onetone' ),
					'options' => array( 
									   '0' => __('No', 'onetone' ),  
									   '1' => __('Yes', 'onetone' ),  
									   )
									   
				),
			'class' => array(
				'std' => '',
				'type' => 'text',
				'label' => __( 'CSS Class', 'onetone' ),
				'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone' )
			),
			'id' => array(
				'std' => '',
				'type' => 'text',
				'label' => __( 'CSS ID', 'onetone' ),
				'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone' )
			)
		),
		'shortcode' => "[ms_counter box_width=\"{{box_width}}\" top_icon=\"{{top_icon}}\" top_icon_color=\"{{top_icon_color}}\" middle_left_icon=\"{{middle_left_icon}}\" counter_num=\"{{counter_num}}\"  middle_left_text=\"{{middle_left_text}}\" middle_right_text=\"{{middle_right_text}}\" bottom_title=\"{{bottom_title}}\" border=\"{{border}}\" class=\"{{class}}\" id=\"{{id}}\"]\r\n",
	),	
	'popup_title' => __( 'Counter Shortcode', 'onetone' ),
	'name' => __('counter-box-shortcode/','magee-shortocdes'),
);

/*******************************************************
 *	Custom Box Config
 ********************************************************/
$magee_shortcodes['custom_box'] = array(
	'no_preview' => true,
	'icon' => 'fa-list-alt',
	'params' => array(
		'content' => array(
			'std' => __('Custom Box Content', 'onetone'),
			'type' => 'textarea',
			'label' => __( 'Content', 'onetone' ),
			'desc' => __( 'Insert content for custom box.', 'onetone' ),
		),
		'backgroundimage' => array(
				'type' => 'uploader',
				'label' => __( 'Background Image', 'onetone' ),
				'desc' => __( 'Upload an image to display in background of custom box.', 'onetone' ),
			), 
		'fixed_background' => array(
		        'type' => 'choose',
			    'std' => 'yes',
				'label' => __( 'Fixed Background', 'onetone' ),
				'desc' => __( 'Choose to fixed Background Image', 'onetone' ),
				'options' => $choices,
		   ),	
		'background_position' => array(
		    'type' => 'select',    
		    'std' => 'top left',
			'label' => __( 'Background Position' , 'onetone'), 
		    'desc' => __( 'Choose the postion of the background image' , 'onetone'),
			'options' => array(
							  'top left' => __( 'Top Left', 'onetone' ),
							  'top center' => __( 'Top Center', 'onetone' ),
							  'top right' => __( 'Top Right', 'onetone' ),
							  'center left' => __( 'Center Left', 'onetone' ),
							  'center center' => __( 'Center Center', 'onetone' ),
							  'center right' => __( 'Center Right', 'onetone' ),
							  'bottom left' => __( 'Bottom Left', 'onetone' ),
							  'bottom center' => __( 'Bottom Center', 'onetone' ),
							  'bottom right' => __( 'Bottom Right', 'onetone' )
							   )
		   ),
		'padding' => array(
			'std' => '30',
			'type' => 'number',
			'min' => '0',
			'max' => '100',
			'label' => __( 'Padding', 'onetone' ),
			'desc' => __( 'Content Padding. eg:30px', 'onetone')
		),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),			
	),
	'shortcode' => '[ms_custom_box  backgroundimage="{{backgroundimage}}" fixed_background="{{fixed_background}}" background_position="{{background_position}}" padding="{{padding}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_custom_box]',
	'popup_title' => __( ' Custom Box Shortcode', 'onetone'),
	'name' => __('custom-box-shortcode/','magee-shortocdes'),
);

/*-----------------------------------------------------------------------------------*/
/*	Dailymotion Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['dailymotion'] = array(
    'no_preview' => true,
	'icon' => 'fa-video-camera',
    'params' => array(
	
		'link' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Dailymotion URL', 'onetone' ),
			'desc' => __( 'Add the URL the video will link to, ex: http://example.com.', 'onetone' ),
		),
		'width' => array(
		    'std' => '100%',
			'type' => 'text',
			'label' => __('Width','onetone'),
			'desc' => __('In pixels (px), eg:1px.','onetone'),
		),
	    'height' => array(
		    'std' => '100%',
			'type' => 'text',
			'label' => __('Height','onetone'),
			'desc' => __('In pixels (px), eg:1px.','onetone'), 
		),
		'mute' => array( 
		    'std' => '',  
		    'type' => 'choose',
			'label' => __('Mute Video' ,'onetone'),
			'desc' => __('Choose to mute the video.','onetone'), 
			'options' => $reverse_choices	 
		),
	    'autoplay' =>array(
		    'std' => '',
		    'type' => 'choose',
			'label' => __('Autoplay Video','onetone'),
			'desc' => __('Choose to autoplay the video.','onetone'), 
			'options' => array(
			    'yes' => __('Yes','onetone'), 
			    'no' => __('No','onetone'),
			)
		),
		'loop' =>array(
		    'std' => '',
		    'type' => 'choose',
			'label' => __('Loop Video','onetone'),
			'desc' => __('Choose to loop the video.','onetone'), 
			'options' => array(
			    'yes' => __('Yes','onetone'), 
			    'no' => __('No','onetone')
			)
		),
		'controls' =>array(
		    'std' => '',
		    'type' => 'choose',
			'label' => __('Show Controls','onetone'),
			'desc' => __('Choose to display controls for the video player.','onetone'), 
			'options' => array(
			    'yes' => __('Yes','onetone'), 
			    'no' => __('No','onetone')
			)
		),
		'highlight' => array(
		    'std' => '#3377dd',
			'type' => 'colorpicker',
			'label' => __( 'Highlight Color','magee-shortcodes'),
			'desc' => __('Set color for highlights','magee-shortcodes') ,  
		),
		'logo' => array(
		    'std' => 'yes',
			'type' => 'choose',
			'label' => __( 'Show Logo','magee-shortcodes'),
			'desc' => __('Choose to display logo ','magee-shortcodes') ,  
			'options' => $choices
		),
		'info' => array(
		    'std' => 'yes',
			'type' => 'choose',
			'label' => __( 'Show Info','magee-shortcodes'),
			'desc' => __('Choose to display video info','magee-shortcodes') ,  
			'options' => $choices
		),
		'related' => array(
		    'std' => 'no',
			'type' => 'choose',
			'label' => __( 'Show Related Videos','magee-shortcodes'),
			'desc' => __('Choose to display related videos','magee-shortcodes') ,  
			'options' => $choices
		),
		'quality' => array(
		    'std' => '1080',
			'type' => 'select',
			'label' => __( 'Quality','magee-shortcodes'),
			'desc' => __('Select the default video playback quality','magee-shortcodes') ,  
			'options' => array(
			      '240' => __( '240','magee-shortcodes'),
			      '380' => __( '380','magee-shortcodes'),
				  '480' => __( '480','magee-shortcodes'),
				  '720' => __( '720','magee-shortcodes'),  
				  '1080' => __( '1080','magee-shortcodes'),
			      )
		),
	    'class' =>array(
		    'std' => '',
			'type' => 'text',
			'label' => __('CSS Class','onetone'),
			'desc' => __('Add a class to the wrapping HTML element.','onetone') 
		),   
	    'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),
	),
	'shortcode' => '[ms_dailymotion link="{{link}}"  width="{{width}}" height="{{height}}" mute="{{mute}}" autoplay="{{autoplay}}" loop="{{loop}}" controls="{{controls}}" highlight="{{highlight}}" logo="{{logo}}" info="{{info}}" related="{{related}}" quality="{{quality}}" class="{{class}}" id="{{id}}"][/ms_dailymotion]',   
    'popup_title' => __( 'Dailymotion Shortcode', 'onetone' ),
	'name' => __('dailymotion-shortcode/','magee-shortocdes'),
);       


/*******************************************************
 *	Divider Config
 ********************************************************/

$magee_shortcodes['divider'] = array(
	'no_preview' => true,
	'icon' => 'fa-ellipsis-h',
	'params' => array(
		'style' => array(
			'type' => 'select',
			'label' => __( 'Divider Style', 'onetone' ),
			'desc' => __( 'Select the Divider\'s Style.', 'onetone' ),
			'options' => array(
				'normal' => __('Normal', 'onetone'),
				'shadow' => __('Shadow', 'onetone'),
				'dashed' => __('Dashed', 'onetone'),
				'dotted' => __('Dotted', 'onetone'),
				'double_line' => __('Double Line', 'onetone'),
				'double_dashed' => __('Double Dashed', 'onetone'),
				'double_dotted' => __('Double Dotted', 'onetone'),
				'image' => __('Image', 'onetone'),
				'icon' => __('Icon', 'onetone'),
				'back_to_top' => __('Back to Top', 'onetone'),
			)
		),
		'width' => array(
			'std' => '100%',
			'type' => 'text',
			'label' => __( 'Width', 'onetone' ),
			'desc' => __( 'In pixels. Default: 100%', 'onetone' ),
		),
		'align' => array(
			'type' => 'select',
			'label' => __( 'Align', 'onetone' ),
			'desc' => __( 'When the width is not 100%.', 'onetone' ),
			'options' => array(
				'left' => __('Left', 'onetone'),
				'center' => __('Center', 'onetone'),
			)
		),
		'margin_top' => array(
			'std' => '30',
			'type' => 'number',
			'min' => '0',
			'max' => '100',
			'label' => __( 'Margin Top', 'onetone' ),
			'desc' => __( 'Spacing above the separator. In pixels.', 'onetone' ),
		),
		'margin_bottom' => array(
			'std' => '30',
			'type' => 'number',
			'max' => '100',
			'min' => '0',
			'label' => __( 'Margin Bottom', 'onetone' ),
			'desc' => __( 'Spacing under the separator. In pixels.', 'onetone' ),
		),
		
		'border_size' => array(
				'std' => '5',
				'type' => 'number',
				'max' => '50',
				'min' => '0',
				'label' => __( 'Border Size', 'onetone' ),
				'desc' => __( 'In pixels (px), eg: 1px. ', 'onetone' ),
		 ),
		'border_color' => array(
		        'std' => '#f2f2f2',
				'type' => 'colorpicker',
				'label' => __( 'Border Color', 'onetone' ),
				'desc' => __( 'Set the border color.', 'onetone' )
			),
		
		'icon' => array(
				'type' => 'iconpicker',
				'label' => __( 'Icon', 'onetone' ),
				'desc' => __( 'Click an icon to select, click again to deselect.', 'onetone' ),
				'options' => $icons
			),	
	
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),			
	),
	'shortcode' => '[ms_divider style="{{style}}" align="{{align}}"  width="{{width}}"  margin_top="{{margin_top}}" margin_bottom="{{margin_bottom}}" border_size="{{border_size}}" border_color="{{border_color}}" icon="{{icon}}" class="{{class}}" id="{{id}}"][/ms_divider]',
	'popup_title' => __( 'Divider Shortcode', 'onetone'),
	'name' => __('divider-shortcode/','magee-shortocdes'),
);

/*-----------------------------------------------------------------------------------*/
/*	Document Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['document'] = array(
    'no_preview' => true,
	'icon' => 'fa-file-text-o',
	'params' => array(
	    'url' => array(
		     'std' => '', 
		     'type' => 'link',
			 'label' => __( 'Doc URL','onetone'), 
		     'desc' => __( 'Upload document to display. Supported formats: doc, xls, pdf etc.','onetone')
		),
		'width' => array(
			'std' => '300',
			'type' => 'number',
			'max' => '1000',
			'min' => '0',
			'label' => __( 'Width', 'onetone'),
			'desc' => __( 'Set width for doc.', 'onetone')
		),
		'height' => array(
			'std' => '300',
			'type' => 'number',
			'max' => '1000',
			'min' => '0',
			'label' => __( 'Height', 'onetone'),
			'desc' => __( 'Set height for doc.', 'onetone')
		),
		'responsive' => array(
			'type' => 'choose',
			'label' => __( 'Responsive','onetone'),
		    'desc' => __( 'Choose to responsive or not', 'onetone'),
			'options' => $choices
		),
		'viewer' => array(
		    'type' => 'select',
			'label' => __('Viewer','onetone'),
		    'desc' => __( 'Choose viewer for document.','magee-shortocodes'),
			'options' => array(
			    'google' => __( 'Google','onetone'),
			    'microsoft' => __( 'Microsoft','onetone'),
			)  
		),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone'),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone'),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),
	),
	'shortcode' => '[ms_document url="{{url}}" width="{{width}}" height="{{height}}" responsive="{{responsive}}" viewer="{{viewer}}" class="{{class}}" id="{{id}}"][/ms_document]',
    'popup_title' => __( 'Document Shortcode','onetone'),
	'name' => __('document-shortcode/','magee-shortocdes'),
);	

/*-----------------------------------------------------------------------------------*/
/*	Dropcap Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['dropcap'] = array(
	'no_preview' => true,
	'icon' => 'fa-square',
	'params' => array(
		'content' => array(
			'std' => 'A',
			'type' => 'textarea',
			'label' => __( 'Dropcap Letter', 'onetone' ),
			'desc' => __( 'Add the letter to be used as dropcap', 'onetone' ),
		),
		'color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Color', 'onetone' ),
			'desc' => __( 'Controls the color of the dropcap letter. Leave blank for theme option selection.', 'magee ')
		),		
		'boxed' => array(
			'type' => 'choose',
			'label' => __( 'Boxed Dropcap', 'onetone' ),
			'desc' => __( 'Choose to get a boxed dropcap.', 'onetone' ),
			'options' => $reverse_choices
		),
		'boxedradius' => array(
			'std' => '8',
			'type' => 'number',
			'max' => '50',
			'min' => '0',
			'label' => __( 'Box Radius', 'onetone' ),
			'desc' => __('Choose the radius of the boxed dropcap. In pixels (px), eg: 1px', 'onetone')
		),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),
	),
	'shortcode' => '[ms_dropcap color="{{color}}" boxed="{{boxed}}" boxed_radius="{{boxedradius}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_dropcap]',
	'popup_title' => __( 'Dropcap Shortcode', 'onetone' ),
	'name' => __('dropcap-shortcode/','magee-shortocdes'),
);

/*-----------------------------------------------------------------------------------*/
/*	Dummy_image Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['dummy_image'] = array(
    'no_preview' => true,
	'icon' => 'fa-picture-o',
	'params' => array(
	    'style' =>array(
		    'type' => 'select',
			'label' => __( 'Style','onetone'),
		    'desc' => __( 'Select style for dummy image','onetone'),
			'options' => array(
			    'any'       => __( 'Any', 'onetone' ),
				'transport' => __( 'Transport', 'onetone' ),
				'technics'  => __( 'Technics', 'onetone' ),
				'people'    => __( 'People', 'onetone' ),
				'sports'    => __( 'Sports', 'onetone' ),
				'cats'      => __( 'Cats', 'onetone' ),
				'city'      => __( 'City', 'onetone' ),
				'food'      => __( 'Food', 'onetone' ),
				'nightlife' => __( 'Night life', 'onetone' ),
				'fashion'   => __( 'Fashion', 'onetone' ),
				'animals'   => __( 'Animals', 'onetone' ),
				'business'  => __( 'Business', 'onetone' ),
				'nature'    => __( 'Nature', 'onetone' ),
				'abstract'  => __( 'Abstract', 'onetone' ),
			)
		), 
		'width' => array(
			'std' => '500',
			'type' => 'number',
			'max' => '1000',
			'min' => '0' ,
			'label' => __( 'Width', 'onetone'),
			'desc' => __( 'Set width for image.', 'onetone')
		),
		'height' => array(
			'std' => '300',
			'type' => 'number',
			'max' => '1000',
			'min' => '0',
			'label' => __( 'Height', 'onetone'),
			'desc' => __( 'Set height for image.', 'onetone')
		),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone'),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone'),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),
	
	),
	'shortcode' => '[ms_dummy_image style="{{style}}" width="{{width}}" height="{{height}}" class="{{class}}" id="{{id}}"][/ms_dummy_image]' ,
    'popup_title' => __( 'Dummy Image Shortcode','onetone'),
	'name' => __('dummy-image-shortcode/','magee-shortocdes'),
);
	

/*-----------------------------------------------------------------------------------*/
/*	Dummy_text Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['dummy_text'] = array(
    'no_preview' => true,
	'icon' => 'fa-text-height',
	'params' => array(
	    'style' =>array(
		    'type' => 'select',
			'label' => __( 'Style','onetone'),
		    'desc' => __( 'Select text type.','onetone'),
			'options' => array(
			    'paras' => __( 'Paragraphs', 'onetone' ),
				'words' => __( 'Words', 'onetone' ),
				'bytes' => __( 'Bytes', 'onetone' ),
			)
		), 
		'amount' => array(
		    'std' => '3',
			'type' => 'number',
			'max' => '100',
			'min' => '0',
			'label' => __( 'Amount','onetone'),
			'desc' => __( 'Choose how many paragraphs or words to show','onetone')
		),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone'),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone'),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),
	),
	'shortcode' => '[ms_dummy_text style="{{style}}" amount="{{amount}}" class="{{class}}" id="{{id}}"][/ms_dummy_text]' ,
    'popup_title' => __( 'Dummy Text Shortcode','onetone'),
	'name' => __('dummy-text-shortcode/','magee-shortocdes'),
);
	

/*-----------------------------------------------------------------------------------*/
/*	Expand Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['expand'] = array(
    'no_preview' => true,
	'icon' => 'fa-sort-amount-asc',
	'params' => array(
	    'more_icon' => array(
			'type' => 'iconpicker',
			'label' => __('More Icon' ,'onetone'),
			'desc' => __('Set icon for expand title. Click an icon to select, click again to deselect.','onetone'),
			'options' => $icons
		),
	    'more_text' => array(
		    'std' => '',
			'type' => 'text',
			'label' => __( 'More Text', 'onetone'),
			'desc' => __( 'Set text for expand title.', 'onetone'),
		),
		'less_icon' => array(
			'type' => 'iconpicker',
			'label' => __('Less Icon' ,'onetone'),
			'desc' => __('Set icon for fold title. Click an icon to select, click again to deselect.','onetone'),
			'options' => $icons
		),
	    'less_text' => array(
		    'std' => '',
			'type' => 'text',
			'label' => __( 'Less Text', 'onetone'),
			'desc' => __( 'Set text for fold title. ', 'onetone'),
		), 
	    'content' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __( 'Content', 'onetone'),
			'desc' => __( 'This text block can be expanded.', 'onetone')
		),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone'),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone'),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),
	),
    'shortcode' => '[ms_expand class="{{class}}" id="{{id}}" more_icon="{{more_icon}}" more_text="{{more_text}}" less_icon="{{less_icon}}" less_text="{{less_text}}"]{{content}}[/ms_expand]',
	'popup_title' => __( 'Expand Shortcode', 'onetone'),
	'name' => __('expand-shortcode/','magee-shortocdes'),
);

/*-----------------------------------------------------------------------------------*/
/*	Feature Boxes Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['featurebox'] = array(
	'no_preview' => true,
	'icon' => 'fa-list-alt',
	'params' => array(
		'style' => array(
			'type' => 'select',
			'label' => __( 'Feature Box Style', 'onetone' ),
			'desc' => __( 'Select the Feature Box\'s Style.', 'onetone' ),
			'options' => array(
				'1' => __('Icon on Top of Title', 'onetone'),
				'2' => __('Icon Beside Title and Content', 'onetone'),
				'3' => __('Icon Beside Title', 'onetone'),
				'4' => __('Boxed', 'onetone'),
			)
		),
		
		'title' => array(
				'std' => 'Feature Box',
				'type' => 'text',
				'label' => __( 'Title', 'onetone' ),
				'desc' => __( 'Insert title for feature box.', 'onetone' ),
		 ),
		
		'title_font_size' => array(
				'std' => '18',
				'type' => 'number',
				'max' => '50',
				'min' => '0',
				'label' => __( 'Title Font Size', 'onetone' ),
				'desc' => __( 'Set font size for title of feature box.', 'onetone' ),
		 ),
		'title_color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Title Color', 'onetone' ),
			'desc' => __( 'Set color for title of feature box.', 'onetone' ),
			),
		'icon_animation_type' => array(
			'type' => 'select',
			'label' => __( 'Icon Hover Animation', 'onetone' ),
			'desc' => __( 'Select the Icon\'s Animation.', 'onetone' ),
			'options' => $animation_type
		),
		'icon' => array(
			'type' => 'icon',
			'label' => __( 'Icon', 'onetone' ),
			'desc' => __( 'Click an icon to select, click again to deselect.', 'onetone' ),
			'options' => $icons
			),
		 'icon_size' => array(
				'std' => '46',
				'type' => 'number',
				'max' => '100',
				'min' => '0',
				'label' => __( 'Icon Size', 'onetone' ),
				'desc' =>  __( 'Set size for icon of feature box.', 'onetone' ),
		 ),
		'icon_color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Icon Color', 'onetone' ),
			'desc' => __( 'Set color for icon of feature box.', 'onetone' ),
			),
		'icon_border_color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Icon Border Color', 'onetone' ),
			'desc' => __( 'Set border color for icon of feature box.', 'onetone' ),
			),
		'icon_border_width' => array(
				'std' => '0',
				'type' => 'number',
				'max' => '50',
				'min' => '0',
				'label' => __( 'Icon Border Width', 'onetone' ),
				'desc' =>  __( 'Set border width for icon of feature box.', 'onetone' ),
		 ),
		
		'flip_icon' => array(
			'std' => '',
			'type' => 'select',
			'label' => __( 'Flip Icon', 'onetone' ),
			'desc' => __( 'Choose to flip the icon of feature box.', 'onetone' ),
			'options' => array(
				'none' => __('None', 'onetone'),
				'horizontal' => __('Horizontal', 'onetone'),
				'vertical' => __('Vertical', 'onetone'),
		     )
			),
			
		'spinning_icon' => array(
			'std' => '',
			'type' => 'choose',
			'label' => __( 'Spinning Icon', 'onetone' ),
			'desc' => __( 'Choose to spin the icon of feature box.', 'onetone' ),
			'options' => $reverse_choices 
		),	
		
		 'icon_background_color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Icon Circle Background Color', 'onetone' ),
			'desc' => __( 'Set background for icon circle of feature box.', 'onetone' ),
		),
		 
		'alignment' => array(
			'std' => '',
			'type' => 'choose',
			'label' => __( 'Icon Alignment', 'onetone' ),
			'desc' => __( 'Set alignment for style2/style3 of feature box.', 'onetone' ),
			'options' => array(
				'left' => __('Left', 'onetone'),
				'right' => __('Right', 'onetone'),
		
			)
		),	
		'icon_circle' => array(
			'std' => '',
			'type' => 'choose',
			'label' => __( 'Icon Circle', 'onetone' ),
			'desc' => __( 'Choose to display icon of feature box in circle.', 'onetone' ),
			'options' => $reverse_choices 
		),	
		
		'icon_image' => array(
				'std' => '',
				'type' => 'uploader',
				'label' => __( 'Icon Image', 'onetone' ),
				'desc' => __( 'To upload your own icon image, remember to deselect icon above.', 'onetone' ),
		 ),
		'icon_image_width' => array(
				'std' => '0',
				'type' => 'number',
				'max' => '1000',
				'min' => '0',
				'label' => __( 'Icon Image Width', 'onetone' ),
				'desc' => __( 'If using custom icon image, set icon image width. In percentage of pixels (px), eg: 1px.', 'onetone' ),
		 ),
		'icon_image_height' => array(
				'std' => '',
				'type' => 'number',
				'max' => '1000',
				'min' => '0',
				'label' => __( 'Icon Image Height', 'onetone' ),
				'desc' => __( 'If using custom icon image, set icon image height. In percentage of pixels (px), eg: 1px.', 'onetone' ),
		 ),
		
		
		'link_url' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Link URL', 'onetone' ),
			'desc' => __( 'Set link for feature box, eg: http://example.com.', 'onetone' ),
		),	
		'link_target' => array(
			'std' => '',
			'type' => 'choose',
			'label' => __( 'Link Target', 'onetone' ),
			'desc' => __( '_self = open in same window _blank = open in new window.', 'onetone' ),
			'options' => array(
				'_blank' => __('_blank', 'onetone'),
				'_self' => __('_self', 'onetone'),
		
			)
		),	
		'link_text' => array(
				'std' => 'Read More',
				'type' => 'text',
				'label' => __( 'Link Text', 'onetone' ),
				'desc' => __( 'Insert link text for feature box. It would not display if you leave it as blank.', 'onetone' ),
		 ),
		'link_color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Link Color', 'onetone' ),
			'desc' => __( 'Set color for link of feature box.', 'onetone' ),
		),
		'content_color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Content Color', 'onetone' ),
			'desc' => __( 'Set color for content of feature box.', 'onetone' ),
		),
		'content_box_background_color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Set box background color for Boxed Style.', 'onetone' ),
			'desc' => __( 'For Boxed Style', 'onetone' ),
		),

		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),	
		'content' => array(
			'std' => __('Your Content Goes Here', 'onetone'),
			'type' => 'textarea',
			'label' => __( 'Feature Box Content', 'onetone' ),
			'desc' => '',
		),
	),
	'shortcode' => '[ms_featurebox style="{{style}}" title_font_size="{{title_font_size}}" title_color="{{title_color}}" icon_circle="{{icon_circle}}" icon_size="{{icon_size}}" title="{{title}}" icon="{{icon}}" alignment="{{alignment}}" icon_animation_type="{{icon_animation_type}}" icon_color="{{icon_color}}" icon_background_color="{{icon_background_color}}" icon_border_color="{{icon_border_color}}" icon_border_width="{{icon_border_width}}"  flip_icon="{{flip_icon}}" spinning_icon="{{spinning_icon}}" icon_image="{{icon_image}}" icon_image_width="{{icon_image_width}}" icon_image_height="{{icon_image_height}}" link_url="{{link_url}}" link_target="{{link_target}}" link_text="{{link_text}}" link_color="{{link_color}}" content_color="{{content_color}}" content_box_background_color="{{content_box_background_color}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_featurebox]',
	'popup_title' => __( 'Feature Box Shortcode', 'onetone'),
	'name' => __('feature-box-shortcode/','onetone'),
);


/*******************************************************
 *	Flip Box Config
 ********************************************************/

$magee_shortcodes['flip_box'] = array(
	'no_preview' => true,
	'icon' => 'fa-list-alt',
	'params' => array(
		'direction' => array(
			'type' => 'select',
			'label' => __( 'Direction', 'onetone' ),
			'desc' => __( 'Select flip directioon.', 'onetone' ),
			'options' => array(
				'horizontal' => __('Horizontal', 'onetone'),
				'vertical' => __('Vertical', 'onetone'),
				'flip-left' => __('Flip Left', 'onetone'),
				'flip-right' => __('Flip Right', 'onetone'),
				'flip-top' => __('Flip Top', 'onetone'),
				'flip-bottom' => __('Flip Bottom', 'onetone'),
				'slide-left' => __('Slide Left', 'onetone'),
				'slide-right' => __('Slide Right', 'onetone'),
				'slide-top' => __('Slide Top', 'onetone'),
				'slide-bottom' => __('Slide Bottom', 'onetone'),
			)			
		),
		'front_paddings' => array(
				'std' => '15',
				'type' => 'number',
				'max' => '100',
				'min' => '0',
				'label' => __( 'Front Container Paddings', 'onetone' ),
				'desc' => __( 'Set paddings for front container of flip box.', 'onetone' ),
			),
		'front_background' => array(
			'type' => 'colorpicker',
			'std'=>'#6ab1c9',
			'label' => __( 'Front Background Color', 'onetone' ),
			'desc' => __( 'Set background color for front container of flip box.', 'onetone')
		),
		'front_color' => array(
			'type' => 'colorpicker',
			'std' => '#ffffff',
			'label' => __( 'Front Font Color', 'onetone' ),
			'desc' => __( 'Custom setting only. Set the background color for custom alert boxes.', 'onetone')
		),
		'front_content' => array(
			'std' => __('Front Content', 'onetone'),
			'type' => 'textarea',
			'label' => __( 'Front content.', 'onetone' ),
			'desc' => __( 'Insert content for front container of flip box.', 'onetone' ),
		),
		'back_paddings' => array(
				'std' => '15',
				'type' => 'number',
				'max' => '100',
				'min' => '0',
				'label' => __( 'Back Container Paddings', 'onetone' ),
				'desc' => __( 'Set paddings for back container of flip box.', 'onetone' ),
			),
		'back_background' => array(
			'std'=>'#538b9d',
			'type' => 'colorpicker',
			'label' => __( 'Back Background Color', 'onetone' ),
			'desc' => __( 'Set background color for back container of flip box.', 'onetone')
		),
		'back_color' => array(
			'std' =>'#ffffff',
			'type' => 'colorpicker',
			'label' => __( 'Back Font Color', 'onetone' ),
			'desc' => __( 'Custom setting only. Set the background color for custom alert boxes.', 'onetone')
		),
		'back_content' => array(
			'std' => __('Back Content', 'onetone'),
			'type' => 'textarea',
			'label' => __( 'Back Content.', 'onetone' ),
			'desc' => __('Insert content for back container of flip box.', 'onetone'),
		),
		
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),			
	),
	'shortcode' => '[ms_flip_box direction="{{direction}}" front_paddings="{{front_paddings}}"  front_background="{{front_background}}" front_color="{{front_color}}" back_paddings="{{back_paddings}}" back_background="{{back_background}}" back_color="{{back_color}}" class="{{class}}" id="{{id}}"]{{front_content}}|||{{back_content}}[/ms_flip_box]',
	'popup_title' => __( 'Flip Box Shortcode', 'onetone'),
	'name' => __('flip-box-shortcode/','magee-shortocdes'),
);

/*-----------------------------------------------------------------------------------*/
/*	Google Map Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['google_map'] = array(
	'no_preview' => true,
	'icon' => 'fa-globe',
	'params' => array(
		'type' => array(
			'type' => 'select',
			'label' => __( 'Map Type', 'onetone'),
			'desc' => __( 'Select the type of google map to display.', 'onetone'),
			'options' => array(
				'roadmap' => __('Roadmap', 'onetone'),
				'satellite' => __('Satellite', 'onetone'),
				'hybrid' => __('Hybrid', 'onetone'),
				'terrain' => __('Terrain', 'onetone')
			)
		),
		'width' => array(
			'std' => '100%',
			'type' => 'text',
			'label' => __( 'Map Width', 'onetone'),
			'desc' => __( 'Map width in percentage or pixels. ex: 100%, or 940px.', 'onetone')
		),
		'height' => array(
			'std' => '300px',
			'type' => 'text',
			'label' => __( 'Map Height', 'onetone'),
			'desc' => __( 'Map height in pixels. ex: 300px', 'onetone')
		),
		'zoom' => array(
			'std' => 14,
			'type' => 'select',
			'label' => __( 'Zoom Level', 'onetone'),
			'desc' => __( 'Higher number will be more zoomed in.', 'onetone'),
			'options' => magee_shortcodes_range( 25, false )
		),
		'scrollwheel' => array(
			'type' => 'choose',
			'label' => __( 'Scrollwheel on Map', 'onetone'),
			'desc' => __( 'Enable zooming using a mouse\'s scroll wheel.', 'onetone'),
			'options' => $choices
		),
		'scale' => array(
			'type' => 'choose',
			'label' => __( 'Show Scale Control on Map', 'onetone'),
			'desc' => __( 'Display the map scale.', 'onetone'),
			'options' => $choices
		),
		'zoom_pancontrol' => array(
			'type' => 'choose',
			'label' => __( 'Show Pan Control on Map', 'onetone'),
			'desc' => __( 'Displays pan control button.', 'onetone'),
			'options' => $choices
		),
		'animation' => array(
			'type' => 'choose',
			'label' => __( 'Address Pin Animation', 'onetone'),
			'desc' => __( 'Choose to animate the address pins when the map first loads.', 'onetone'),
			'options' => $choices
		),		
		'popup' => array(
			'type' => 'choose',
			'label' => __( 'Show tooltip by default', 'onetone'),
			'desc' => __( 'Display or hide the tooltip when the map first loads.', 'onetone'),
			'options' => $choices
		),

		'overlaycolor' => array(
			'type' => 'colorpicker',
			'label' => __( 'Map Overlay Color', 'onetone'),
			'desc' => __( 'Custom styling setting only. Pick an overlaying color for the map. Works best with "roadmap" type.', 'onetone')
		),
		
		'infoboxcontent' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __( 'Infobox Content', 'onetone'),
			'desc' => __( 'Custom styling setting only. Type in custom info box content to replace address string. For multiple addresses, separate info box contents by using the | symbol. ex: InfoBox 1|InfoBox 2|InfoBox 3', 'onetone'),
		),		
		'infoboxtextcolor' => array(
			'type' => 'colorpicker',
			'label' => __( 'Info Box Text Color', 'onetone'),
			'desc' => __( 'Custom styling setting only. Pick a color for the info box text.', 'onetone')
		),
		'infoboxbackgroundcolor' => array(
			'type' => 'colorpicker',
			'label' => __( 'Info Box Background Color', 'onetone'),
			'desc' => __( 'Custom styling setting only. Pick a color for the info box background.', 'onetone')
		),
		'icon' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __( 'Custom Marker Icon', 'onetone'),
			'desc' => __( 'Custom styling setting only. Use full image urls for custom marker icons or input "theme" for our custom marker. For multiple addresses, separate icons by using the | symbol or use one for all. ex: Icon 1|Icon 2|Icon 3', 'onetone'),
		),
		'content' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __( 'Address', 'onetone'),
			'desc' => __( 'Add address to the location which will show up on map. For multiple addresses, separate addresses by using the | symbol. <br />ex: Address 1|Address 2|Address 3', 'onetone'),
		),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone'),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone'),
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone'),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone'),
		)
	),
	'shortcode' => '[ms_google_map address="{{content}}" type="{{type}}" overlay_color="{{overlaycolor}}" infobox_background_color="{{infoboxbackgroundcolor}}" infobox_text_color="{{infoboxtextcolor}}" infobox_content="{{infoboxcontent}}" icon="{{icon}}" width="{{width}}" height="{{height}}" zoom="{{zoom}}" scrollwheel="{{scrollwheel}}" scale="{{scale}}" zoom_pancontrol="{{zoom_pancontrol}}" popup="{{popup}}" animation="{{animation}}" class="{{class}}" id="{{id}}"][/ms_google_map]',
	'popup_title' => __( 'Google Map Shortcode', 'onetone')
);

/*-----------------------------------------------------------------------------------*/
/*	Heading Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['heading'] = array(
    'icon' => 'fa-header',
	'no_preview' => true,
	'params' => array(
					  
		'title' => array(
			'std' => 'Title Text',
			'type' => 'text',
			'label' => __( 'Title', 'onetone'),
            'desc' => __( 'Insert heading text', 'onetone')
		),
					  
		'style' => array(
			'type' => 'select',
			'label' => __( 'Style', 'onetone'),
			'std' => 'border',
            'desc' => __( 'Choose a heading style. Leave blank as default.', 'onetone'),
			'options' => array(
			    'none' => 'None',
				'border' => 'Border',
				'boxed' => 'Boxed',
				'boxed-reverse' => 'Boxed-reverse',
				'doubleline' => 'Doubleline',
			)
		),
		
		'color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Font Color', 'onetone'),
            'desc' => __( 'Set color for heading text.', 'onetone'),
			),	
		'border_color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Border Color', 'onetone'),
            'desc' => __( 'Set border color for heading.', 'onetone'),
			),
		
		'text_align' => array(
			'type' => 'select',
			'label' => __( 'Text Align', 'onetone'),
            'desc' => __( 'Set text align for this heading.', 'onetone'),
			'options' => $textalign
		),
		'font_weight' => array(
			'type' => 'select',
			'std' => '400',
			'label' => __( 'Font Weight', 'onetone'),
            'desc' => __( 'Set font weight for heading text.', 'onetone'),
			'options' => array(
							   '100' => '100',
							   '200' => '200',
							   '300' => '300',
							   '400' => '400',
							   '500' => '500',
							   '600' => '600',
							   '700' => '700',
							   '800' => '800',
							   '900' => '900',
							   )
		),
		
		'font_size' => array(
			'std' => '36',
			'type' => 'number',
			'max' => '50',
			'min' => '0',
			'label' => __( 'Font Size', 'onetone'),
            'desc' => __( 'Set font size for heading text. In pixels (px), eg: 1px.', 'onetone'),
		),
		'margin_top' => array(
			'std' => '0',
			'type' => 'number',
			'max' => '100',
			'min' => '0',
			'label' => __( 'Margin Top', 'onetone'),
            'desc' => __( 'In pixels (px), eg: 1px.', 'onetone'),
		),
		'margin_bottom' => array(
			'std' => '0',
			'type' => 'number',
			'max' => '100',
			'min' => '0',
			'label' => __( 'Margin Bottom', 'onetone'),
            'desc' => __( 'In pixels (px), eg: 1px.', 'onetone'),
		),
		'border_width' => array(
			'std' => '5',
			'type' => 'number',
			'max' => '50',
			'min' => '0',
			'label' => __( 'Border Width', 'onetone'),
            'desc' => __( 'In pixels (px), eg: 1px.', 'onetone'),
		),
        'responsive_text' => array(
		    'std' => '',
			'type' => 'choose',
			'label' => __( 'Responsive Text','onetone'),
            'desc' => __( 'Choose to display responsive text.', 'onetone'),
			'options' => $reverse_choices		
		),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone'),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone'),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),	
		
		
		),
	'shortcode' => '[ms_heading style="{{style}}" color="{{color}}" border_color="{{border_color}}" text_align="{{text_align}}" font_weight="{{font_weight}}" font_size="{{font_size}}" margin_top="{{margin_top}}" margin_bottom="{{margin_bottom}}" border_width="{{border_width}}" responsive_text="{{responsive_text}}"  class="{{class}}" id="{{id}}"]{{title}}[/ms_heading]',
	'popup_title' => __( 'Heading Shortcode', 'onetone'),
    'name' => __('heading-shortcode/','magee-shortocdes'),  
);

/*-----------------------------------------------------------------------------------*/
/*	Highlight Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['highlight'] = array(
	'no_preview' => true,
	'icon' => 'fa-magic',
	'params' => array(

		'background_color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Background Color', 'onetone' ),
			'desc' => __( 'Set background color for highlight item.', 'onetone')
		),
		'border_radius' => array(
			'type' => 'number',
			'std' =>'5',
			'max' => '50',
			'min' => '0',
			'label' => __( 'Border Radius', 'onetone' ),
			'desc' => __( 'In pixels (px), eg: 1px.', 'onetone' ),
		),
		'color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Font Color', 'onetone' ),
			'desc' => __( 'Set font color for highlight item.', 'onetone')
		),
		'content' => array(
			'std' => __('Your Content Goes Here', 'onetone'),
			'type' => 'textarea',
			'label' => __( 'Content to Higlight', 'onetone' ),
			'desc' => __( 'Insert content to highlight.', 'onetone' ),
		),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),			

	),
	'shortcode' => '[ms_highlight background_color="{{background_color}}" border_radius="{{border_radius}}" color="{{color}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_highlight]',
	'popup_title' => __( 'Highlight Shortcode', 'onetone' ),
	'name' => __('highlight-shortcode/','magee-shortocdes'),
);


/*-----------------------------------------------------------------------------------*/
/*	Icon Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['icon'] = array(
	'icon' => 'fa-flag',
	'no_preview' => true,
	'params' => array(

	'icon' => array(
			'type' => 'iconpicker',
			'label' => __( 'Icon', 'onetone'),
			'desc' => __( 'Click an icon to select, click again to deselect.', 'onetone'),
			'options' => $icons
			),
	'size' => array(
			'type' => 'number',
			'std' => '14',
			'max' => '50',
			'min' => '0',
			'label' => __( 'Icon Size', 'onetone'),
			'desc' => __( 'Set text size for item.', 'onetone'),
			),
	'color' => array(
			'type' => 'colorpicker',
			'std' => '#fdd200',
			'label' => __( 'Icon Color', 'onetone'),
			'desc' =>  __( 'Set color for icon.', 'onetone'),
		),
    'icon_box' => array(
	        'std' => '',  
	        'type' => 'choose',
	        'label' => __( 'Icon Box', 'onetone'),
            'desc' => __( 'Choose to display boxed icon.', 'onetone'),
			'options' => $reverse_choices
	    ),		
	'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone'),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
	'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone'),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),			

	),
	'shortcode' => '[ms_icon icon="{{icon}}" size="{{size}}" color="{{color}}" icon_box="{{icon_box}}" class="{{class}}" id="{{id}}"]',
	'popup_title' => __( 'Icon Shortcode', 'onetone'),
	'name' => __('icon-shortcode/','magee-shortocdes'),
);

/*-----------------------------------------------------------------------------------*/
/*	Image Banner Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['image_banner'] = array(
	'no_preview' => true,
	'icon' => 'fa-file-image-o',
	'params' => array(
		
		'image' => array(
				'type' => 'uploader',
				'label' => __( 'Image', 'onetone'),
				
			), 
			'link' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Image Link', 'onetone'),
			
		),		
			
		'target' => array(
			'type' => 'choose',
			'label' => __( 'Link Target', 'onetone'),
			'options' => array(
				'_blank' => __('_blank', 'onetone'),
				'_self' => __('_self', 'onetone'),
			)
		),
		
		'horizontal_align' => array(
			'type' => 'select',
			'label' => __( 'Horizontal Align', 'onetone'),
			'desc' => __( 'Content horizontal align.', 'onetone'),
			'options' => array(
				'center' => __('Center', 'onetone'),
				'left' => __('Left', 'onetone'),
				'right' => __('Right', 'onetone'),
			)
		),
		'vertical_align' => array(
			'type' => 'select',
			'label' => __( 'Vertical Align', 'onetone'),
			'desc' => __( 'Content vertical align.', 'onetone'),
			'options' => array(
				'middle' => __('Middle', 'onetone'),
				'top' => __('Top', 'onetone'),
				'bottom' => __('Bottom', 'onetone'),
			)
		),
		
		'zoom_effect' => array(
			'type' => 'select',
			'label' => __( 'Zoom Effect', 'onetone'),
			'desc' => __( 'Image zoom effect.', 'onetone'),
			'options' => array(
				'in' => __('In', 'onetone'),
				'out' => __('Out', 'onetone'),
			)
		),
		
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone'),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone'),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),
		
		'content' => array(
				'std' => '',
				'type' => 'textarea',
				'label' => __( 'Content', 'onetone'),
			)
	),

	'shortcode' => '[ms_image_banner image="{{image}}" link="{{link}}" target="{{target}}" horizontal_align="{{horizontal_align}}" vertical_align="{{vertical_align}}" zoom_effect="{{zoom_effect}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_image_banner]',
	'popup_title' => __( 'Image Banner Shortcode', 'onetone'),

);

/*-----------------------------------------------------------------------------------*/
/*	Image Compare Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['image_compare'] = array(
    'icon' => 'fa-file-image-o',
	'no_preview' => true,
	'params' => array(
	    'style' => array(
			'type' => 'select',
			'std' => 'horizontal',
			'label' => __( 'Style', 'onetone'),
			'desc' => __( 'Select how the image compare display.', 'onetone'),
			'options' => array(
				'horizontal' => 'Horizontal',
				'vertical' => 'Vertical',
			)
		),
		 'percent' => array(
			'type' => 'select',
			'std' => '0.5',
			'label' => __( 'Percent', 'onetone'),
			'desc' => __( 'Choose default offset pct', 'onetone'),
			'options' => $opacity
		),
	    'image_left' => array(
		    'std' => '',
			'type' => 'uploader',
			'label' => __( 'Image Left', 'onetone' ),
			'desc' => __( 'Insert the image displayed in the left.', 'onetone')
		),
		'image_right' => array(
		    'std' => '',
			'type' => 'uploader',
			'label' => __( 'Image Right', 'onetone' ),
			'desc' => __( 'Insert the image displayed in the right.', 'onetone')
		),
	    'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
				'std' => '',
				'type' => 'text',
				'label' => __( 'CSS ID', 'onetone' ),
				'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),    
	),
    'shortcode' => '[ms_image_compare style="{{style}}" percent="{{percent}}" image_left="{{image_left}}" image_right="{{image_right}}" class="{{class}}" id="{{id}}"]',
	'popup_title' => __( 'Image Compare Shortcode', 'onetone' ),
	'name' => __('image-compare-shortcode/','magee-shortocdes'),
);

/*-----------------------------------------------------------------------------------*/
/*	Image Frame Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['image_frame'] = array(
     'icon' => 'fa-file-image-o',
	'no_preview' => true,
	'params' => array(

	'src' => array(
			'type' => 'uploader',
			'label' => __( 'Image', 'onetone' ),
			'desc' => __( 'Upload an image to display.', 'onetone' ),
		),
		'link' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Image Link URL', 'onetone' ),
			'desc' => __( 'Add the URL the picture will link to, ex: http://example.com.', 'onetone' ),
		),
	'link_target' => array(
			'std' => '',
			'type' => 'choose',
			'label' => __( 'Link Target', 'onetone' ),
			'desc' => __( '_self = open in same window _blank = open in new window.', 'onetone' ),
			'options' => array(
				'_blank' => __('_blank', 'onetone'),
				'_self' => __('_self', 'onetone'),
		
			),
			),
	'border_radius' => array(
			'std' => '0',
			'type' => 'number',
			'max' => '50',
			'min' => '0' ,
			'label' => __( 'Border Radius', 'onetone' ),
			'desc' => __( 'Choose the border radius of the image frame. In pixels (px), ex: 1px, or "round".  Leave blank for theme option selection.', 'onetone' ), 	         
	    ),	
	'light_box' => array(
	        'std' => '',
			'type' => 'choose' ,
			'label' => __( 'Light Box','onetone'),
            'desc' => __( 'Choose to display light box once click.', 'onetone'),
			'options' => $reverse_choices	
	    ),	
	'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
	'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),			

	),
	'shortcode' => '[ms_image_frame src="{{src}}" border_radius="{{border_radius}}" link="{{link}}" link_target="{{link_target}}" light_box="{{light_box}}" class="{{class}}" id="{{id}}"]',
	'popup_title' => __( 'Image Frame Shortcode', 'onetone' ),
	'name' => __('image-frame-shortcode/','magee-shortocdes'),
);


/*-----------------------------------------------------------------------------------*/
/*	Label Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['label'] = array(
    'no_preview' => true,
	'icon' => 'fa-bookmark',    
    'params' => array(
	    
		'content' => array(
		    'std' => '',
			'type' => 'text',
			'label' => __( 'Text', 'onetone' ),
		    'desc' => __( 'Insert text to be displayed in label.','onetone')
		),  
	    'background_color' => array(
		    'std' => '',
			'type' => 'colorpicker',
		    'label' => __( 'Background Color' , 'onetone'),
			'desc' => __( 'Set background color for label.','onetone')
		),
	),
	'shortcode' => '[ms_label background_color="{{background_color}}" ]{{content}}[/ms_label]',
    'popup_title' => __( 'Label Shortcode', 'onetone' ),
	'name' => __('label-shortcode/','magee-shortocdes'), 
);

/*******************************************************
 *	List Config
 ********************************************************/
 $magee_shortcodes['list'] = array(
	'no_preview' => true,
	'icon' => 'fa-list',
	'params' => array(
		'item_border' => array(
			'type' => 'choose',
			'label' => __( 'Item Border', 'onetone' ),
			'desc' => __( 'Choose to display item border for list.', 'onetone'),
			'options' =>array(
				'no' => __('No','onetone'),
				'yes' => __('Yes','onetone'),)
			),
		'item_size' => array(
			'type' => 'number',
			'std'  => '12',
			'max' => '50',
			'min' => '0',
			'label' => __( 'Item Size', 'onetone' ),
			'desc' => __( 'Set text font size for item.', 'onetone'),
			),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),	
	),
	'shortcode' => "[ms_list item_border=\"{{item_border}}\" item_size=\"{{item_size}}\" class=\"{{class}}\" id=\"{{id}}\"]\r\n{{child_shortcode}}[/ms_list]",
	'child_shortcode' => array(
		'params' => array(		
		    'icon' => array(
			'type' => 'iconpicker',
			'label' => __( 'Icon', 'onetone' ),
			'desc' => __( 'Click an icon to select, click again to deselect.', 'onetone' ),
			'options' => $icons
			),
			'icon_color' => array(
				'type' => 'colorpicker',
				'label' => __( 'Icon Color', 'onetone' ),
				'desc' => __( 'Set color fo list icon.', 'onetone')
				),
			'icon_boxed' => array(
				'type' => 'choose',
				'label' => __( 'Icon Boxed', 'onetone' ),
				'desc' => __( 'Choose to set icon boxed.', 'onetone'),
				'options' =>array(
					'no' => __('No','onetone'),
					'yes' => __('Yes','onetone'),)
				),
			 'background_color' => array(
				'type' => 'colorpicker',
				'label' => __( 'Icon Circle Background Color', 'onetone' ),
				'desc' => __( 'Set background color for list icon.', 'onetone')
			),
			'boxed_shape' => array(
				'type' => 'select',
				'label' => __( 'Boxed Shape', 'onetone' ),
				'desc' => __( 'Choose boxed shape for list icon.', 'onetone'),
				'options' =>array(
					'square' => __('Square','onetone'),
					'circle' => __('Circle','onetone'),)
				), 				  
			'content' => array(
				'std' => 'list item',
				'type' => 'text',
				'label' => __( 'Title', 'onetone'),
				'desc' =>  __( 'Insert title for list item.', 'onetone')
				),					
	  ),		
	'shortcode' => "[ms_list_item icon=\"{{icon}}\" icon_color=\"{{icon_color}}\" icon_boxed=\"{{icon_boxed}}\" background_color=\"{{background_color}}\" boxed_shape=\"{{boxed_shape}}\"]{{content}}[/ms_list_item]\r\n",
	),	
	'popup_title' => __( 'List Shortcode', 'onetone' ),
	'name' => __('list-shortcode/','onetone'),
);

/*******************************************************
 *	Modal Config
 ********************************************************/

$magee_shortcodes['modal'] = array(
	'no_preview' => true,
	'icon' => 'fa-comment-o',
	'params' => array(
		'modal_anchor_text' => array(
			'std' => 'Modal Anchor Text',
			'type' => 'textarea',
			'label' => __( 'Modal Anchor Text', 'onetone' ),
			'desc' => __( 'Insert anchor text for the modal.', 'onetone' ),
		),
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Modal Heading', 'onetone' ),
			'desc' => __( 'Insert heading text for the modal.', 'onetone' ),
		),		
		'size' => array(
			'type' => 'select',
			'label' => __( 'Size Of Modal', 'onetone' ),
			'desc' => __( 'Select the modal window size.', 'onetone' ),
			'options' => array(
				'small' => __('Small', 'onetone'),
				'middle' => __('Middle', 'onetone'),
				'large' => __('Large', 'onetone')
			)
		),

		'showfooter' => array(
			'type' => 'choose',
			'label' => __( 'Show Footer', 'onetone' ),
			'desc' => __( 'Choose to show the modal footer with close button.', 'onetone' ),
			'options' => array(
				'yes' => __('Yes', 'onetone'),
				'no' => __('No', 'onetone'),	
			)
		),
		'content' => array(
			'std' => __('Your Content Goes Here', 'onetone'),
			'type' => 'textarea',
			'label' => __( 'Contents of Modal', 'onetone' ),
			'desc' => __( 'Add your content to be displayed in modal.', 'onetone' ),
		),		
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone' )
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone' )
		),			
	),
	'shortcode' => "[ms_modal title=\"{{title}}\" size=\"{{size}}\" showfooter=\"{{showfooter}}\" class=\"{{class}}\" id=\"{{id}}\"]\r\n[ms_modal_anchor_text]{{modal_anchor_text}}[/ms_modal_anchor_text]\r\n[ms_modal_content]{{content}}[/ms_modal_content]\r\n[/ms_modal]",
	'popup_title' => __( 'Modal Shortcode', 'onetone' ),
	'name' => __('modal-shortcode/','magee-shortocdes'),
);

/*-----------------------------------------------------------------------------------*/
/*	Menu Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['menu'] = array(
	'no_preview' => true,
	'icon' => 'fa-bars',
	'params' => array(
	    'menu' => array(
		    'std' => '',
			'type' => 'select',
			'label' => __( 'Select a menu','onetone'),
		    'options' =>  magee_shortcode_menus('name') 
		),
	    'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone'),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone'),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),
	),
    'shortcode' => '[ms_menu menu="{{menu}}" class="{{class}}" id="{{id}}"]' ,
	'popup_title' => __( 'Menu Shortcode', 'onetone'),
);	

/*-----------------------------------------------------------------------------------*/
/* Magee Separator Config
/*-----------------------------------------------------------------------------------*/
/*
$magee_shortcodes['separator'] = array(
	'no_preview' => true,
	'params' => array(
		'style' => array(
			'std' => '',
			'type' => 'select',
			'label' => __( 'Style', 'onetone'),
			'desc' => '',
			'options' => array(
				'bigTriangleColor' => __('bigTriangleColor', 'onetone'),
				'curveUpColor' => __('curveUpColor', 'onetone'),
				'curveDownColor' => __('curveDownColor', 'onetone'),
				'bigHalfCircle' => __('bigHalfCircle', 'onetone'),
				'bigTriangleShadow' => __('bigTriangleShadow', 'onetone'),
				'slit' => __('Slit', 'onetone'),
				'stamp' => __('Stamp', 'onetone'),
				'clouds' => __('Clouds', 'onetone'),
			)
		),		
		'height' => array(
			'std' => '100',
			'type' => 'text',
			'label' => __( 'Height', 'onetone'),
			'desc' =>'',
		),	
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone'),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		
	),),
	'shortcode' => '[ms_separator style="{{style}}" height="{{height}}" class="{{class}}"]',
	'popup_title' => __( 'Separator', 'onetone')
	
);

/*-----------------------------------------------------------------------------------*/
/*	panel Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['panel'] = array(
	'no_preview' => true,
	'icon' => 'fa-list-alt',
	'params' => array(
		
		'title' => array(
			'std' =>  'Panel title',
			'type' => 'text',
			'label' => __( 'Title', 'onetone' ),
			'desc' => __( 'Insert title for panel.', 'onetone' ),
		),
		'content' => array(
			'std' => __('Panel content.', 'onetone'),
			'type' => 'textarea',
			'label' => __( 'Panel Content', 'onetone' ),
			'desc' => __( 'Insert content for panel.', 'onetone' ),
		),
		
		
		'title_color' => array(
			'std' => '#000',
			'type' => 'colorpicker',
			'label' => __( 'Title Color', 'onetone' ),
			'desc' => __( 'Set color for panel title.', 'onetone' ),
		),
		'border_color' => array(
			'std' => '#ddd',
			'type' => 'colorpicker',
			'label' => __( 'Border Color', 'onetone' ),
			'desc' =>  __( 'Set color for panel border.', 'onetone' ),
		),
		
		'title_background_color' => array(
			'std' => '#f5f5f5',
			'type' => 'colorpicker',
			'label' => __( 'Title Background Color', 'onetone' ),
			'desc' => __( 'Set background color for panel title.', 'onetone' ),
		),		
		'border_radius' => array(
			'std' => '0',
			'type' => 'number',
			'max' => '50',
			'min' => '0',
			'label' => __( 'Border Radius', 'onetone' ),
			'desc' => __('In pixels (px), eg: 1px.', 'onetone')
		),				
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),		
	),
	'shortcode' => '[ms_panel title="{{title}}" title_color="{{title_color}}" border_color="{{border_color}}"  title_background_color="{{title_background_color}}" border_radius="{{border_radius}}"  class="{{class}}" id="{{id}}"]{{content}}[/ms_panel]',
	'popup_title' => __( 'Panel Shortcode', 'onetone' ),
	'name' => __('panel-shortcode/','onetone'),
);

/*-----------------------------------------------------------------------------------*/
/*	Person Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['person'] = array(
	'no_preview' => true,
	'icon' => 'fa-user',
	'params' => array(
	    'style' => array(
		    'std' => '',
		    'type' => 'select',
			'label' => __( 'Style', 'onetone'),
			'desc' => __( 'Choose to display info below or beside the image.','onetone'),
			'options' => array(
			    'below' => __('Below', 'onetone')  ,
				'beside' => __('Beside', 'onetone'),
			),
		),
		'name' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Name', 'onetone' ),
			'desc' => __( 'Insert the name of the person.', 'onetone' ),
		),
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Title', 'onetone' ),
			'desc' => __( 'Insert the title of the person', 'onetone' ),
		),
		'link_target' => array(
			'std' => '',
			'type' => 'choose',
			'label' => __( 'Link Target', 'onetone' ),
			'desc' => __( '_self = open in same window _blank = open in new window.', 'onetone' ),
			'options' => array(
				'_blank' => __('_blank', 'onetone'),
				'_self' => __('_self', 'onetone'),
		
			),
			),
		'overlay_color' => array(
		    'std' => '',
			'type' => 'colorpicker',
			'label' => __('Image Overlay Color','onetone'),
			'desc' => __('Select a hover color to show over the image as an overlay.','onetone')
		),	
		'overlay_opacity' => array(
		    'std' => '0.5',
			'type' => 'select',
			'label' => __('Image Overlay Opacity', 'onetone'),
			'desc' => __('Opacity ranges between 0 (transparent) and 1 (opaque). ex: .5','onetone'),
			'options' => $opacity
		),
		'content' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __( 'Profile Description', 'onetone' ),
			'desc' => __( 'Insert profile description.', 'onetone' )
		),
		'picture' => array(
			'type' => 'uploader',
			'label' => __( 'Picture', 'onetone' ),
			'desc' => __( 'Upload an image to display.', 'onetone' ),
		),
		'piclink' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Picture Link URL', 'onetone' ),
			'desc' => __( 'Add the URL the picture will link to, ex: http://example.com.', 'onetone' ),
		),
		'picborder' => array(
			'std' => '0',
			'type' => 'number',
			'max' => '50',
			'min' => '0',
			'label' => __( 'Picture Border Size', 'onetone' ),
			'desc' => __( 'In pixels (px), ex: 1px. Leave blank for theme option selection.', 'onetone' ),
		),
		'picbordercolor' => array(
			'type' => 'colorpicker',
			'label' => __( 'Picture Border Color', 'onetone' ),
			'desc' => __( 'Controls the picture\'s border color. Leave blank for theme option selection.', 'onetone' ),
		),
		'picborderradius' => array(
			'std' => '0',
			'type' => 'number',
			'max' => '50',
			'min' => '0',
			'label' => __( 'Picture Border Radius', 'onetone' ),
			'desc' => __( 'Choose the border radius of the person image. In pixels (px), ex: 1px, or "round".  Leave blank for theme option selection.', 'onetone' ),
		),				
		'iconboxedradius' => array(
			'std' => '4',
			'type' => 'number',
			'max' => '50',
			'min' => '0',
			'label' => __( 'Social Icon Box Radius', 'onetone' ),
			'desc' => __( 'Choose the border radius of the boxed icons. In pixels (px), ex: 1px, or "round". Leave blank for theme option selection.', 'onetone' ),
		),		
		'iconcolor' => array(
			'std' => '',
			'type' => 'colorpicker',
			'label' => __( 'Social Icon Custom Colors', 'onetone' ),
			'desc' => __( 'Controls the Icon\'s border color. Leave blank for theme option selection.', 'onetone' ),
		),
		'icon1' => array(
				'type' => 'iconpicker',
				'label' => __( 'Icon1', 'onetone' ),
				'desc' => __( 'Click an icon to select, click again to deselect.', 'onetone' ),
				'options' => $icons
			),
		'link1' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Link1 ', 'onetone' ),
			'desc' => __( 'The Icon1 Link ', 'onetone' ),
		),
		'icon2' => array(
				'type' => 'iconpicker',
				'label' => __( 'Icon2', 'onetone' ),
				'desc' => __( 'Click an icon to select, click again to deselect.', 'onetone' ),
				'options' => $icons
			),
		'link2' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Link2 ', 'onetone' ),
			'desc' => __( 'The Icon2 Link ', 'onetone' ),
		),
		'icon3' => array(
				'type' => 'iconpicker',
				'label' => __( 'Icon3', 'onetone' ),
				'desc' => __( 'Click an icon to select, click again to deselect.', 'onetone' ),
				'options' => $icons
			),
		'link3' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Link3 ', 'onetone' ),
			'desc' => __( 'The Icon3 Link ', 'onetone' ),
		),
		'icon4' => array(
				'type' => 'iconpicker',
				'label' => __( 'Icon4', 'onetone' ),
				'desc' => __( 'Click an icon to select, click again to deselect.', 'onetone' ),
				'options' => $icons
			),
		'link4' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Link4', 'onetone' ),
			'desc' => __( 'The Icon4 Link ', 'onetone' ),
		),
		'icon5' => array(
				'type' => 'iconpicker',
				'label' => __( 'Icon5', 'onetone' ),
				'desc' => __( 'Click an icon to select, click again to deselect.', 'onetone' ),
				'options' => $icons
			),
		'link5' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Link5', 'onetone' ),
			'desc' => __( 'The Icon5 Link ', 'onetone' ),
		),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone' )
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone' )
		),
	),
	'shortcode' => '[ms_person name="{{name}}" style="{{style}}" title="{{title}}" link_target="{{link_target}}" overlay_color="{{overlay_color}}" overlay_opacity="{{overlay_opacity}}" picture="{{picture}}" piclink="{{piclink}}" picborder="{{picborder}}" picbordercolor="{{picbordercolor}}" picborderradius="{{picborderradius}}" iconboxedradius="{{iconboxedradius}}" iconcolor="{{iconcolor}}" icon1="{{icon1}}" icon2="{{icon2}}" icon3="{{icon3}}" icon4="{{icon4}}" icon5="{{icon5}}" link1="{{link1}}" link2="{{link2}}" link3="{{link3}}" link4="{{link4}}" link5="{{link5}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_person]',
	'popup_title' => __( 'Person Shortcode', 'onetone' ),
	'name' => __('person-shortcode/','onetone'),
);

/*-----------------------------------------------------------------------------------*/
/*	Piechart Config
/*-----------------------------------------------------------------------------------*/


$magee_shortcodes['piechart'] = array(
	'no_preview' => true,
	'icon' => 'fa-circle-o-notch',
	'params' => array(
    'line_cap' => array(
			'std' => 'round',
			'type' => 'select',
			'label' => __( 'Line Cap', 'onetone' ),
			'desc' => __( 'Select how the ending of the bar line looks like.', 'onetone' ),
            'options' => array(
			    'round' => __( 'Round','onetone') ,
			    'butt' => __( 'Butt','onetone') ,
				'square' => __( 'Square','onetone') ,
			),  
		),
	'percent' => array(
			'std' => '80',
			'type' => 'number',
			'max' => '100',
			'min' => '0',
			'label' => __( 'Percent', 'onetone' ),
			'desc' => __( 'From 1 to 100.', 'onetone' ),

		),
	
	
	'content' => array(
			'std' => '80%',
			'type' => 'textarea',
			'label' => __( 'Title', 'onetone' ),
			'desc' => __( 'Insert title for piechart. It need to be short.', 'onetone' ),

		),
	'size' => array(
			'std' => '200',
			'type' => 'number',
			'max' => '500',
			'min' => '0',
			'label' => __( 'Size', 'onetone' ),
			'desc' => __( 'Set size for piechart.', 'onetone' ),

		),
	'font_size' => array(
			'std' => '40',
			'type' => 'number',
			'max' => '50',
			'min' => '0',
			'label' => __( 'Font Size', 'onetone' ),
			'desc' => __( 'Set font size for piechart title.', 'onetone' ),

		),
	'filledcolor' => array(
			'type' => 'colorpicker',
			'label' => __( 'Filled Color', 'onetone' ),
			'desc' =>  __( 'Set color for filled area in piechart.', 'onetone' ),
			'std' => '#fdd200'
		),
	'unfilledcolor' => array(
			'type' => 'colorpicker',
			'label' => __( 'Unfilled Color', 'onetone' ),
			'desc' => __( 'Set color for unfilled area in piechart.', 'onetone' ),
			'std' => '#f5f5f5'
		),
	
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone' )
		),
	
	), 
	'shortcode' => '[ms_piechart line_cap="{{line_cap}}" percent="{{percent}}"  filledcolor="{{filledcolor}}" size="{{size}}" font_size="{{font_size}}" unfilledcolor="{{unfilledcolor}}" class="{{class}}" ]{{content}}[/ms_piechart]',
	'popup_title' => __( 'Piechart Shortcode', 'onetone' ),
	'name' => __('piechart-shortcode/','onetone'),
);

/*-----------------------------------------------------------------------------------*/
/*	Popover Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['popover'] = array(
	'no_preview' => true,
	'icon' => 'fa-comment-o',
	'params' => array(
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Popover Heading', 'onetone' ),
			'desc' => __( 'Insert heading text of the popover.', 'onetone' ),
		),
		'triggering_text' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __( 'Triggering Text', 'onetone' ),
			'desc' => __( 'Content that will trigger the popover.', 'onetone' ),
		),
		
	
		'content' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __( 'Contents Inside Popover', 'onetone' ),
			'desc' => __( 'Text to be displayed inside the popover.', 'onetone' ),
		),

		'trigger' => array(
			'type' => 'select',
			'label' => __( 'Popover Trigger Method', 'onetone' ),
			'desc' => __( 'Choose mouse action to trigger popover.', 'onetone' ),
			'options' => array(
				'click' => __('Click', 'onetone'),
				'hover' => __('Hover', 'onetone'),
			)
		),
		'placement' => array(
			'type' => 'select',
			'label' => __( 'Popover Position', 'onetone' ),
			'desc' => __( 'Choose the display position of the popover.', 'onetone' ),
			'options' => array(
				'top' => __('Top', 'onetone'),
				'bottom' => __('Bottom', 'onetone'),
				'left' => __('Left', 'onetone'),
				'Right' => __('Right', 'onetone'),
			)
		),
	
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone' )
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone' )
		),			
	),
	'shortcode' => '[ms_popover title="{{title}}" triggering_text="{{triggering_text}}" trigger="{{trigger}}" placement="{{placement}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_popover]', // as there is no wrapper shortcode
	'popup_title' => __( 'Popover Shortcode', 'onetone' ),
	'name' => __('popover-shortcode/','magee-shortocdes'),
);

/*-----------------------------------------------------------------------------------*/
/*	Portfolio Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['portfolio'] = array(
	'no_preview' => true,
	'icon' => 'fa-th',
	'params' => array(
		
	
	'num' => array(
			'std' => '10',
			'min' => '0',
			'max' => '100',
			'type' => 'number',
			'label' => __( 'List Num', 'onetone'),
			'desc' => __( 'Set list number for portfolios.', 'onetone'),
		),
	'category' => array(
			'type' => 'select',
			'label' => __( 'Category', 'onetone'),
			'desc' => __( 'Choose a category to display.', 'onetone'),
			'options' => $magee_portfolios_cats
		),
	'layout' => array(
	        'type' => 'select',
			'label' => __( 'Layout','onetone'),
			'desc' => __( 'Choose to display portfolios in grid or carousel layout.', 'onetone'),
			'options' => array(
			      'grid' => __( 'Grid','onetone'),
				  'carousel' => __( 'Carousel','onetone'),
			)
	),
	'style' => array(
			'type' => 'select',
			'label' => __( 'Style', 'onetone'),
			'desc' => __( 'Choose to display portfolios in normal/full style.', 'onetone'),
			'options' => array( 
							   '1' => __( 'Normal Style', 'onetone'),
							   '2' => __( 'Full Width', 'onetone'),
							  )
		),
	'columns' => array(
			'type' => 'select',
			'label' => __( 'Columns', 'onetone'),
			'desc' => __( 'Choose column number for portfolio list.', 'onetone'),
			'std' => '3',
			'options' => array( 
							   '2' => __( '2 Columns', 'onetone'),
							   '3' => __( '3 Columns', 'onetone'),
							   '4' => __( '4 Columns', 'onetone'),
							   '5' => __( '5 Columns', 'onetone'),
							   '6' => __( '6 Columns', 'onetone')
							  )
		),
			
	
	'overlay_content' => array(
			'type' => 'select',
			'label' => __( 'Overlay Content', 'onetone'),
			'desc' =>  __( 'Select overlay content for portfolios.', 'onetone'),
			'options' => array( 
							   '1' => __( 'Button', 'onetone'), 
							   '2' => __( 'Title', 'onetone'),
							   '3' => __( 'Title & Tags', 'onetone'),
							   '4' => __( 'Link Light', 'onetone'),
							   '5' => __( 'Image Zoom In', 'onetone'),
							   )
							  
		),
	
	'overlay_color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Overlay Color', 'onetone'),
			'desc' => __( 'Set overlay background color.', 'onetone')
			),	
	'overlay_opacity' => array(
			'type' => 'select',
			'std' => '0.5',
			'label' => __( 'Overlay Opacity', 'onetone'),
			'desc' => '',
			'options' => $opacity
		),
			
	'orientation' => array(
			'type' => 'select',
			'label' => __( 'Orientation', 'onetone'),
			'desc' =>  __( 'Select orientation for overlay animation.', 'onetone'),
			'options' => array( 
							   'top' => 'Top', 
							   'left' => 'Left',
							   'right' => 'Right',
							   'bottom' => 'Bottom',
							   )
							  
		),
	'page_nav' => array(
			'type' => 'choose',
			'label' => __( 'Display Page Nav', 'onetone'),
			'desc' => __( 'Choose to display page navigation for portolio list.', 'onetone'),
			'options' => $reverse_choices
		),
	'filter' => array(
			'type' => 'choose',
			'label' => __( 'Filter', 'onetone'),
			'desc' => __( 'Choose to display filter for portolio list.', 'onetone'),
			'options' => $reverse_choices
		),
	'offset' => array(
	        'std' => '',
	        'type' => 'text', 
			'label' => __( 'Post Offset','onetone'),
	        'desc' => __( 'Choose to display filter for portolio list.eg:1.','onetone')
	    ),
    'exclude_category' => array(
	        'type' => 'select',
			'label' => __( 'Exclude Categories','onetone'),
			'desc' => __( 'Select a category to exclude.','onetone'),
			'options' => $magee_portfolios_cats
	    ),		
	'align' => array(
	        'type' => 'select',
			'label' => __( 'Info Align','onetone'),
			'desc' => __( 'Set align of portoflio info.','onetone'),
			'options' => array(
			                   'left' => __( 'Left','onetone'),
							   'center' => __( 'Center','onetone'),
							   'right' => __( 'Right','onetone'),
			                   )
	    ),	
    'display_title' => array(
	        'type' => 'choose',
			'label' => __( 'Display Title','onetone'),
			'desc' => __( 'Choose to display the portfolio title below the featured image','onetone'),
			'options' => $choices	
	    ),		
    'display_tags' => array(
	        'type' => 'choose',
			'label' => __( 'Display Tags','onetone'),
			'desc' => __( 'Choose to show portfolio tags.','magee-shorcodes'),
			'options' => $choices
	    ),	
    'display_excerpt' => array(
	        'type' => 'choose',
			'label' => __( 'Display Excerpt','onetone'),
			'desc' => __( 'Choose to display the portfolio excerpt.','onetone'),
			'options' => $choices
	    ),	
    'excerpt_length' => array(
	        'std' => '',
	        'type' => 'text',
			'label' => __( 'Excerpt Length','onetone'),
			'desc' => __( 'Insert the number of words/characters you want to show in the excerpt.','onetone')
	    ),	
	'strip' => array(
	        'type' => 'choose',
			'label' => __( 'Strip HTML','magee-shorycodes'),
			'desc' => __( 'Strip HTML from the post excerpt','onetone'),
			'options' => $choices
	    ),				
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone'),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone'),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		)
		
		
	),
	'shortcode' => '[ms_portfolio num="{{num}}" category="{{category}}" layout="{{layout}}" style="{{style}}" columns="{{columns}}" overlay_content="{{overlay_content}}" overlay_color="{{overlay_color}}" overlay_opacity="{{overlay_opacity}}" orientation="{{orientation}}" page_nav="{{page_nav}}" filter="{{filter}}" offset="{{offset}}" exclude_category="{{exclude_category}}" align="{{align}}" display_title="{{display_title}}" display_tags="{{display_tags}}" display_excerpt="{{display_excerpt}}" excerpt_length="{{excerpt_length}}" strip ="{{strip}}" class="{{class}}" id="{{id}}"]',
	'popup_title' => __( 'Portfolio Shortcode', 'onetone')
);

/*-----------------------------------------------------------------------------------*/
/*	Pricing Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['pricing'] = array(
    'icon' => 'fa-money' ,
	'no_preview' => true,
	'params' => array(
					  
		'style' => array(
			'type' => 'select',
			'label' => __( 'Style', 'onetone'),
			'desc' => __( 'Select display style for pricing table.', 'onetone'),
			'std' => 'flat',
			'options' => array(
				'flat' => 'Flat',
				'box' => 'Box',
				'table' => 'Table',
			)
		),
		
		'columns' => array(
			'type' => 'select',
			'label' => __( 'Columns', 'onetone'),
			'desc' => __( 'Set number of pricing boxes.', 'onetone'),
			'std' => '3',
			'options' => array(
				'2' => '2 Columns',
				'3' => '3 Columns',
				'4' => '4 Columns',
				'5' => '5 Columns',
				'6' => '6 Columns',
			)
		),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone'),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone'),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),	
		),
	'shortcode' => "[ms_pricing style=\"{{style}}\" columns=\"{{columns}}\" class=\"{{class}}\" id=\"{{id}}\"]\r\n{{child_shortcode}}[/ms_pricing]",
	'popup_title' => __( 'Pricing Shortcode', 'onetone'),
	'child_shortcode' => array(
		'params' => array(
		

	'icon' => array(
			'type' => 'iconpicker',
			'label' => __( 'Icon', 'onetone'),
			'desc' => __( 'Click an icon to select, click again to deselect.', 'onetone'),
			'std' => '',
			'options' => $icons
		),
	
	'title' => array(
			'std' =>  'Standard',
			'type' => 'text',
			'label' => __( 'Title', 'onetone'),
			'desc' => __( 'Insert title for pricing box.', 'onetone'),
		),
	'price' => array(
			'std' => '39.99',
			'type' => 'text',
			'label' => __( 'Price', 'onetone'),
			'desc' => __( 'Inser number for pricing box.', 'onetone'),
		),
	'currency' => array(
			'std' => '$',
			'type' => 'text',
			'label' => __( 'Currency', 'onetone'),
			'desc' => __( 'Inser currency for pricing box.', 'onetone'),
		),
	'unit' => array(
			'std' =>'year',
			'type' => 'text',
			'label' => __( 'Unit', 'onetone'),
			'desc' => __( 'Inser unit for pricing box.', 'onetone'),
		),
	'buttontext' => array(
			'std' => 'Buy Now',
			'type' => 'text',
			'label' => __( 'Button Text', 'onetone'),
			'desc' => __( 'Inser text for button of pricing box.', 'onetone'),
		),
	'buttonlink' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Button Link', 'onetone'),
			'desc' => __( 'Inser link for button of pricing box, eg: http://example.com.', 'onetone'),
		),
	
	'linktarget' => array(
			'type' => 'choose',
			'label' => __( 'Link Target', 'onetone'),
			'desc' => __( '_self = open in same window, _blank = open in new window.', 'onetone'),
			'std' => 'flat',
			'options' => array(
				'_blank' => '_blank',
				'_self' => '_self',
				
			)
		),
	
	'featured' => array(
			'type' => 'choose',
			'label' => __( 'Featured', 'onetone'),
			'desc' => __( 'Choose to set pricing box as featured.', 'onetone'),
			'std' => 'no',
			'options' => $reverse_choices
		),
	
	'standout' => array(
			'type' => 'choose',
			'label' => __( 'Standout', 'onetone'),
			'desc' => __( 'Choose to set pricing box as standout.', 'onetone'),
			'std' => 'no',
			'options' => $reverse_choices
		),
	
	'color' => array(
	        'std' => '#fdd200', 
			'type' => 'colorpicker',
			'label' => __( 'Color', 'onetone'),
			'desc' => __( 'Set primary color for pricing box.', 'onetone'),
		),

		
		'is_label' => array(
			'type' => 'choose',
			'label' => __( 'Is Label? (For table style)', 'onetone'),
			'desc' =>  __( 'Choose to set pricing box as label for table style.', 'onetone'),
			'std' => 'no',
			'options' => $reverse_choices
		),
		'content' => array(
			'std' => "[ms_pricing_item_features]8 GB Bandwidth[/ms_pricing_item_features]\n[ms_pricing_item_features]2 GB[/ms_pricing_item_features]\n[ms_pricing_item_features]16 GB Storage[/ms_pricing_item_features]\n[ms_pricing_item_features]Limited[/ms_pricing_item_features]\n[ms_pricing_item_features]2 Projects[/ms_pricing_item_features]\n",
			'type' => 'textarea',
			'label' => __( 'Features', 'onetone'),
			'desc' => __( 'Insert features for pricing box. Each feature between [ms_pricing_item_features][/ms_pricing_item_features].', 'onetone'),
		),	
		
		
           )
		,
	'shortcode' => "[ms_pricing_item icon=\"{{icon}}\"  title=\"{{title}}\" price=\"{{price}}\" currency=\"{{currency}}\" unit=\"{{unit}}\" buttontext=\"{{buttontext}}\" buttonlink=\"{{buttonlink}}\" linktarget=\"{{linktarget}}\" featured=\"{{featured}}\" standout=\"{{standout}}\" color=\"{{color}}\" is_label=\"{{is_label}}\"  ]\n{{content}}[/ms_pricing_item]\n",
		
		)

);

/*-----------------------------------------------------------------------------------*/
/*	Process Steps Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['process_steps'] = array(
    'icon' => 'fa-repeat', 
	'no_preview' => true,
	'params' => array(
					  
		'style' => array(
			'type' => 'select',
			'std' => 'horizontal',
			'label' => __( 'Style', 'onetone'),
			'desc' => __( 'Select how the process steps display.', 'onetone'),
			'options' => array(
				'horizontal' => 'Horizontal',
				'vertical' => 'Vertical',
			)
		),
		'columns' => array(
			'type' => 'select',
			'label' => __( 'Columns', 'onetone'),
			'desc' => __( 'Set columns for horizontal style.', 'onetone'),
			'std' => '4',
			'options' => array(
				'3' => '3 Columns',
				'4' => '4 Columns',
			)
		),

		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone'),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone'),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),	
		
		
		),
	'shortcode' => "[ms_process_steps style=\"{{style}}\" columns=\"{{columns}}\"  class=\"{{class}}\" id=\"{{id}}\"]\r\n{{child_shortcode}}[/ms_process_steps]",
	'popup_title' => __( 'Process Steps Shortcode', 'onetone'),
		// child shortcode is clonable & sortable
	'child_shortcode' => array(
		'params' => array(
		
		'icon' => array(
			'std' => '',
			'type' => 'iconpicker',
			'label' => __( 'Select Icon', 'onetone'),
			'desc' => __( 'Click an icon to select, click again to deselect', 'onetone'),
			'options' => $icons
		),
		
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Title', 'onetone'),
			'desc' => __( 'Insert title for process steps item.', 'onetone'),
		),	
		
		'content' => array(
			'std' => 'Your Content Goes Here',
			'type' => 'textarea',
			'label' => __( 'Text', 'onetone'),
			'desc' => __( 'Insert description for process steps item.', 'onetone'),
		),	
		
		
           )
		,
	'shortcode' => "[ms_process_steps_item title=\"{{title}}\" icon=\"{{icon}}\"]{{content}}[/ms_process_steps_item]\r\n",
		)

);

/*-----------------------------------------------------------------------------------*/
/*	Progress Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['progress'] = array(
	'no_preview' => true,
	'icon' => 'fa-tasks',
	'params' => array(
'style'   => array(
			'type' => 'select',
			'label' => __( 'Style', 'onetone' ),
			'desc' => __( 'Choose the show of progress bar.', 'onetone' ),
			'options' => array( 
							   'normal' => __( 'Normal Style', 'onetone' ),
							   'circle' => __( 'Circle Style', 'onetone' ),
							   )
							  
		), 
'striped' => array(
			'type' => 'select',
			'label' => __( 'Striped', 'onetone' ),
			'desc' => __( 'Choose to get the filled area striped.', 'onetone' ),
			'options' => array( 
							   'none' => __( 'None Striped', 'onetone' ),
							   'striped' => __( 'Striped', 'onetone' ),
							   'striped animated' => __( 'Striped Animated', 'onetone' ),
							   )
							  
		),
'rounded' => array(
			'type' => 'select',
			'label' => __( 'Rounded', 'onetone' ),
			'desc' => __( 'Choose to set the progress bar as rounded.', 'onetone' ),
			'options' => array( 
							   'on' => __( 'On', 'onetone' ),
							   'off' => __( 'Off', 'onetone' ),
							   )
							  
		),
	'number' => array(
			'type' => 'choose',
			'label' => __( 'Display  Number', 'onetone' ),
			'desc' => __( 'Choose to diplay number for progress bar.', 'onetone' ),
			'options' =>$choices 
							  
		),
	
	'percent' => array(
			'std' => '50',
			'type' => 'number',
			'max' => '100',
			'min' => '0',
			'label' => __( 'Percent', 'onetone' ),
			'desc' => __( 'Set percentage for progress bar. 0~100.', 'onetone' )
		),
	
	'text' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Text', 'onetone' ),
			'desc' => __( 'Insert text for progress bar.', 'onetone' ),
		),
	
	'height' => array(
			'std' => '30',
			'type' => 'number',
			'max' => '200',
			'min' => '0',
			'label' => __( 'Height', 'onetone' ),
			'desc' =>__( 'Set height for progress bar.', 'onetone' ),
		),
	
	

	'color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Color', 'onetone' ),
			'desc' => __( 'Set background color for filled area in progress bar.', 'onetone' ),
			'std' => ''
		),
	'textposition' => array(
			'type' => 'select',
			'label' => __( 'Text Position', 'onetone' ),
			'desc' => __( 'Choose text position for progress bar.', 'onetone' ),
			'options' => array( 
							   '1' => __('Text on Progress bars', 'onetone' ),  
							   '2' => __('Text above progress bars', 'onetone' ),  
							   )
							   
		),
				
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone' )
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone' )
		)
		
		
	),
	'shortcode' => '[ms_progress style="{{style}}" striped="{{striped}}" rounded="{{rounded}}" number="{{number}}"  percent="{{percent}}" text="{{text}}"  height="{{height}}" color="{{color}}"  textposition="{{textposition}}" class="{{class}}" id="{{id}}"]',
	'popup_title' => __( 'Progress Shortcode', 'onetone' ),
	'name' => __('progress-bar-shortcode/','onetone'),
);

/*-----------------------------------------------------------------------------------*/
/* Promo_box Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['promo_box'] = array(
	'no_preview' => true,
	'icon' => 'fa-tag',
	'params' => array(

		'style' => array(
			'type' => 'select',
			'label' => __( 'Style', 'onetone' ),
			'desc' => __( 'Select style for promo box.', 'onetone' ),
			'options' => array(
				'normal' => __('Normal', 'onetone'),
				'boxed' => __('Boxed', 'onetone'),
			)
		),		
		'border_color' => array(
			'type' => 'colorpicker',
			'std' => '#fdd200',
			'label' => __( 'Border Color', 'onetone' ),
			'desc' =>  __( 'Set color for highlight border of promo box.', 'onetone' ),
		),
		'border_width' => array(
			'std' => '1',
			'type' => 'number',
			'max' => '50',
			'min' => '0',
			'label' => __( 'Border Width', 'onetone' ),
			'desc' => __( 'Set width for highlight border of promo box.', 'onetone' ),
		),
	
		'border_position' => array(
			'type' => 'select',
			'label' => __( 'Border Position', 'onetone' ),
			'desc' => __( 'Choose position for highlight border of promo box.', 'onetone' ),
			'options' => array(
				'left' => __('Left', 'onetone'),
				'right' => __('Right', 'onetone'),
				'top' => __('Top', 'onetone'),
				'bottom' => __('Bottom', 'onetone'),
				
			)
		),
		'background_color' => array(
			'type' => 'colorpicker',
			'std' =>'#f5f5f5',
			'label' => __( 'Icon Circle Background Color', 'onetone' ),
			'desc' => __( 'Set background color for promo box.', 'onetone' ),
		),
		'button_color' => array(
			'type' => 'colorpicker',
			'std' =>'',
			'label' => __( 'Button Color', 'onetone' ),
			'desc' => '',
		),
		
		'button_text' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Button Text', 'onetone' ),
			'desc' => __( 'Inser text for button of promo box.', 'onetone' ),
		),	
		'button_text_color' => array(
			'std' => '#ffffff',
			'type' => 'colorpicker',
			'label' => __( 'Button Text Color', 'onetone' ),
		),	
		'button_link' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Button Link URL', 'onetone' ),
			'desc' => __( 'Inser link for button of promo box, eg: http://example.com.', 'onetone' ),
		),	
		'button_icon' => array(
				'type' => 'iconpicker',
				'label' => __( 'Button Icon', 'onetone' ),
				'desc' => __( 'Click an icon to select, click again to deselect.', 'onetone' ),
				'options' => $icons
			),
		'content' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __( 'Content', 'onetone' ),
			'desc' => __( 'Insert content for promo box.', 'onetone' ),
		),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone' )
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone' )
		),
	),
	'shortcode' => '[ms_promo_box style="{{style}}" border_color="{{border_color}}" border_width="{{border_width}}" border_position="{{border_position}}" background_color="{{background_color}}" button_color="{{button_color}}" button_link="{{button_link}}" button_icon="{{button_icon}}" button_text="{{button_text}}" button_text_color="{{button_text_color}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_promo_box]',
	'popup_title' => __( 'Promo Box Shortcode', 'onetone' ),
	'name' => __('promo-box-shortcode/','onetone'),
);

/*-----------------------------------------------------------------------------------*/
/*	Pullquote Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['pullquote'] = array(
	'no_preview' => true,
	'icon' => 'fa-quote-left',
	'params' => array(
	    'align' => array(
			'type' => 'select',
			'label' => __('Align', 'onetone'),
			'desc' => __('Set alignment for pullquote.','onetone'),
			'options' => array(
			    'left' => __('Left', 'onetone') ,
				'right' => __('Right', 'onetone'),
			)
		),
		'content' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __( 'Content', 'onetone'),
			'desc' => __( 'Insert content for pullquote.', 'onetone')
		),
	    'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone'),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone'),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		), 
		
	),
    'shortcode' => '[ms_pullquote align="{{align}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_pullquote]',
	'popup_title' =>__('Pullquote Shortcode','onetone'),
	'name' => __('pullquote-shortcode/','magee-shortocdes'),
);	

/*-----------------------------------------------------------------------------------*/
/*	QR Code Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['QRCode'] = array(
    'no_preview' => true,
	'icon' => 'fa-qrcode',    
    'params' => array(
	
	    'content' =>array(
		    'std' => '',
			'type' => 'text',
			'label' => __( 'Content', 'onetone' ),
		    'desc' => __( 'The text to store within the QR code. Any text or URL is available.', 'onetone' ),
		),
		'alt' => array(
			'std' => 'scan QR code',
			'type' => 'text',
			'label' => __( 'Alternative text', 'onetone' ),
			'desc' => __( 'Set image alt for QR code.', 'onetone' ),
		),
		'size' => array(
		    'std' => '100',
			'type' => 'number',
			'max' => '200',
			'min' => '0',
			'label' => __('Size in pixel','onetone'),
			'desc' => __('Image width and height.','onetone'),
		),
		'click' => array(
		    'std' => 'no',
			'type' => 'choose',
			'label' => __('QRCode clickable?','onetone'),
			'desc' => __('Choose to make this QR code clickable.','onetone'), 
			'options' => array(
				'no' => __( 'No', 'onetone' ),
				'yes' => __( 'Yes', 'onetone' ),
			)
		),
		'fgcolor' => array( 
		    'std' => '#000000',  
		    'type' => 'colorpicker',
			'label' => __('Foreground Color' ,'onetone'),
			'desc' => __('Set foreground Color for QR code.' ,'onetone'),
		),
	    'bgcolor' =>array(
		    'std' => '#FFFFFF',
		    'type' => 'colorpicker',
			'label' => __('Background Color','onetone'),
			'desc' => __('Set background Color for QR code.' ,'onetone'),
		),
	),
	'shortcode' => '[ms_qrcode alt="{{alt}}" size="{{size}}" click="{{click}}" fgcolor="{{fgcolor}}" bgcolor="{{bgcolor}}"]{{content}}[/ms_qrcode]',
    'popup_title' => __( 'QR Code Shortcode', 'onetone' ),
	'name' => __('qr-code-shortcode/','magee-shortocdes'),
); 

/*-----------------------------------------------------------------------------------*/
/*	Quote Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['quote'] = array(
	'no_preview' => true,
	'icon' => 'fa-quote-right',    
	'params' => array(
	    'cite' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Cite', 'onetone'),
			'desc' => __( 'Author name for quote.', 'onetone')
		),
		'url' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Cite Link', 'onetone'),
			'desc' => __( 'Insert Url for the quote author. Leave empty to disable hyperlink.', 'onetone')
		),
		'content' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __( 'Content', 'onetone'),
			'desc' => __( 'Insert content for the quote.', 'onetone')
		),
	    'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone'),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone'),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		), 
	),
    'shortcode' =>  '[ms_quote cite="{{cite}}" url="{{url}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_quote]',
	'popup_title' =>__('Quote Shortcode','onetone'),
	'name' => __('quote-shortcode/','magee-shortocdes'),
);	

/*-----------------------------------------------------------------------------------*/
/*	RSS Feed Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['rss_feed'] = array(
	'no_preview' => true,
	'icon' => 'fa-rss' ,
	'params' => array(
	      
		'url' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Feed URL', 'onetone'),
			'desc' => __( 'Url of RSS Feed.', 'onetone')
		),  
		'number' => array(
			'std' => '3',
			'type' => 'number',
			'max' => '20',
			'min' => '0',
			'label' => __( 'Number to Display', 'onetone'),
			'desc' => __( 'Number of items to show.', 'onetone')
		),  
	    'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone'),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone'),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),   
	),
	'shortcode' => '[ms_rss_feed url="{{url}}" number="{{number}}" class="{{class}}" id="{{id}}"][/ms_rss_feed]',
	'popup_title' =>__('RSS Feed Shortcode','onetone'),
	'name' => __('rss-feed-shortcode/','magee-shortocdes'),
);	


/*-----------------------------------------------------------------------------------*/
/*	Scheduled_content Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['scheduled_content'] = array(
    'no_preview' => true,
	'icon' => 'fa-clock-o',
	'params' => array(
	    'time' => array(
			'std' => '6-12,13-16',
			'type' => 'text',
			'label' => __( 'Time', 'onetone'),
			'desc' => __( 'Select an random time in one day to show content.</br>Example: 6-12,13-16  show content from  6:00 to 12:00 and from 13:00 to 16:00', 'onetone')
		),
		'day_week' => array(
			'std' => '1-5,7',
			'type' => 'text',
			'label' => __( 'Days of Week', 'onetone'),
			'desc' => __( 'Select days from one week to show content.</br>1 => Monday </br>2 => Tuesday  </br> 3 => Wednesday</br> 4 => Thursday  </br> 5 => Friday  </br> 6 => Saturday </br>  7 => Sunday </br>Examples:1-5,7 =>show content at Sunday and from Monday to Friday', 'onetone')
		),
		'day_month' =>array(
		    'std' => '10-15,20-25',
			'type' => 'text',
			'label' => __( 'Days of Month', 'onetone'), 
			'desc' => __('Select days from one month to show content.</br>Examples:</br>1 => show content only at first day of  month </br> 10-25 => show content from 10th to 25th </br> 10-15,20-25 => show content from 10th to 15th and from 20th to 25th','onetone')
		),
		'months' => array(
		    'std' => '1,5,8-9',
			'type' => 'text',
			'label' => __('Months','onetone'),
			'desc' => __('Select months from a year to show content.</br>Examples:</br>1 => show content in January </br> 3-6 => show content from March to June </br> 1,5,8-9 => show content in January,May and from August to September','onetone') 
		),
		'years' => array(
		    'std' => '2016,2017,2345-2666',
			'type' => 'text',
			'label' => __('Years','onetone'),  
		    'desc' => __( 'Select years to show content.</br>Examples:</br> 2016 => show content in 2016 </br>2014-2016 => show content from 2014 to 2016 </br> 2016,2017,2345-2666 => show content in 2016,2017 and from 2345 to 2666','onetone')
		),
	    'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone'),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
	    'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone'),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		), 
		'content' => array(
		    'std' => '',
			'type' => 'textarea',
			'label' => __( 'Content', 'onetone'),
			'desc' => __( 'Insert scheduled content.', 'onetone') 
		)   
	),
	'shortcode' => '[ms_scheduled_content time="{{time}}" day_week="{{day_week}}" day_month="{{day_month}}" months="{{months}}" years="{{years}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_scheduled_content]',
	'popup_title' => __( 'Scheduled Shortcode','onetone'),
	'name' => __('scheduled-shortcode/','magee-shortocdes'),
);	

/*-----------------------------------------------------------------------------------*/
/*	Section Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['section'] = array(
	'no_preview' => true,
	'icon' => 'fa-list-alt',
	'params' => array(

		'background_color' => array(
			'std' => '',
			'type' => 'colorpicker',
			'label' => __( 'Background Color', 'onetone' ),
			'desc' => __( 'Set background for section. Leave blank for transparent.', 'onetone' ),
		),
		
		'background_image' => array(
			'std' => '',
			'type' => 'uploader',
			'label' => __( 'Background Image', 'onetone' ),
			'desc' => __( 'Upload an image to display in the background.', 'onetone' ),
		),
		'background_repeat' => array(
			'type' => 'select',
			'label' => __( 'Background Repeat', 'onetone' ),
			'desc' =>__( 'Choose repeat style for the background image.', 'onetone' ),
			'std' => '',
			'options' => array(
							  'repeat' => __( 'Repeat', 'onetone' ),
							  'repeat-x' => __( 'Repeat-x', 'onetone' ),
							  'repeat-y' => __( 'Repeat-y', 'onetone' ),
							  'no-repeat' => __( 'No-repeat', 'onetone' ),
							  'inherit' => __( 'Inherit', 'onetone' )
							   )
		),
		
		'background_position' => array(
			'type' => 'select',
			'label' => __( 'Background Position', 'onetone' ),
			'desc' => __( 'Choose the postion of the background image.', 'onetone' ),
			'std' => '',
			'options' => array(
							  'top left' => __( 'Top Left', 'onetone' ),
							  'top center' => __( 'Top Center', 'onetone' ),
							  'top right' => __( 'Top Right', 'onetone' ),
							  'center left' => __( 'Center Left', 'onetone' ),
							  'center center' => __( 'Center Center', 'onetone' ),
							  'center right' => __( 'Center Right', 'onetone' ),
							  'bottom left' => __( 'Bottom Left', 'onetone' ),
							  'bottom center' => __( 'Bottom Center', 'onetone' ),
							  'bottom right' => __( 'Bottom Right', 'onetone' )
							   )
		),
		'background_parallax' => array(
			'type' => 'choose',
			'label' => __( 'Background Parallax', 'onetone' ),
			'desc' => __( 'Choose how the background image scrolls and responds.', 'onetone' ),
			'std' => 'no',
			'options' => $reverse_choices
		),
		'border_size' => array(
			'std' => '0',
			'type' => 'number',
			'max' => '50',
			'min' => '0',
			'label' => __( 'Border Size', 'onetone' ),
			'desc' =>__( 'In pixels (px), eg: 1px.', 'onetone' ),
		),
		
		'border_color' => array(
			'std' => '',
			'type' => 'colorpicker',
			'label' => __( 'Border Color', 'onetone' ),
			'desc' => __( 'Set border color for section.', 'onetone' ),
		),
		'border_style' => array(
			'type' => 'select',
			'label' => __( 'Border Style', 'onetone' ),
			'desc' => __( 'Select border style for section', 'onetone' ),
			'std' => '',
			'options' => array(
							  'none' => __( 'None', 'onetone' ),
							  'hidden' => __( 'Hidden', 'onetone' ),
							  'dotted' => __( 'Dotted', 'onetone' ),
							  'dashed' => __( 'Dashed', 'onetone' ),
							  'solid' => __( 'Solid', 'onetone' ),
							  'double' => __( 'Double', 'onetone' ),
							  'groove' => __( 'Groove', 'onetone' ),
							  'ridge' => __( 'Ridge', 'onetone' ),
							  'inset' => __( 'Inset', 'onetone' ),
							  'outset' => __( 'Outset', 'onetone' ),
							  'initial' => __( 'Initial', 'onetone' ),
							  'inherit' => __( 'Inherit', 'onetone' ),
							 
							   )
		),
		
		'padding_top' => array(
			'std' => '10',
			'type' => 'number',
			'max' => '100',
			'min' => '0',
			'label' => __( 'Padding Top', 'onetone' ),
			'desc' =>  __( 'In pixels (px), eg: 1px.', 'onetone' ),
		),
		'padding_bottom' => array(
			'std' => '10',
			'type' => 'number',
			'max' => '100',
			'min' => '0',
			'label' => __( 'Padding Bottom', 'onetone' ),
			'desc' => __( 'In pixels (px), eg: 1px.', 'onetone' ),
		),
		'padding_left' => array(
			'std' => '10',
			'type' => 'number',
			'max' => '100',
			'min' => '0',
			'label' => __( 'Padding Left', 'onetone' ),
			'desc' => __( 'In pixels (px), eg: 1px.', 'onetone' ),
		),
		'padding_right' => array(
			'std' => '10',
			'type' => 'number',
			'max' => '100',
			'min' => '0',
			'label' => __( 'Padding Right', 'onetone' ),
			'desc' => __( 'In pixels (px), eg: 1px.', 'onetone' ),
		),
		'contents_in_container' => array(
			'type' => 'choose',
			'label' => __( 'Contents in Container ?', 'onetone' ),
			'desc' =>  __( 'Put the content in container.', 'onetone' ),
			'std' => 'no',
			'options' => $reverse_choices
		),
		
		'content' => array(
			'std' => __('Section content.', 'onetone'),
			'type' => 'textarea',
			'label' => __( 'Section Content', 'onetone' ),
			'desc' => __( 'Insert content for section.', 'onetone' ),
		),
		
		'top_separator' => array(
			'std' => 'yes',
			'type' => 'select',
			'label' => __( 'Top Separator', 'onetone' ),
			'desc' => '',
			'options' => array(
				'' => __('None', 'onetone'),
				'triangle' => __('Triangle', 'onetone'),
				'doublediagonal' => __('Doublediagonal', 'onetone'),
				'halfcircle' => __('Halfcircle', 'onetone'),
				'bigtriangle' => __('Bigtriangle', 'onetone'),
				'bighalfcircle' => __('Bighalfcircle', 'onetone'),
				'curl' => __('Curl', 'onetone'),
				'multitriangles' => __('Multitriangles', 'onetone'),
				'roundedsplit' => __('Roundedsplit', 'onetone'),
				'boxes' => __('Boxes', 'onetone'),
				'zigzag' => __('Zigzag', 'onetone'),
				'clouds' => __('Clouds', 'onetone'),
			)
		),
		'bottom_separator' => array(
			'std' => 'yes',
			'type' => 'select',
			'label' => __( 'Bottom Separator', 'onetone' ),
			'desc' => '',
			'options' => array(
				'' => __('None', 'onetone'),
				'triangle' => __('Triangle', 'onetone'),
				'halfcircle' => __('Halfcircle', 'onetone'),
				'bigtriangle' => __('Bigtriangle', 'onetone'),
				'bighalfcircle' => __('Bighalfcircle', 'onetone'),
				'curl' => __('Curl', 'onetone'),
				'multitriangles' => __('Multitriangles', 'onetone'),
				'roundedcorners' => __('Roundedcorners', 'onetone'),
				'foldedcorner' => __('Foldedcorner', 'onetone'),
				'boxes' => __('Boxes', 'onetone'),
				'zigzag' => __('Zigzag', 'onetone'),
				'stamp' => __('Stamp', 'onetone'),
			)
		),
		'full_height' => array(
		    'std' => '',
			'type' => 'choose',
			'label' => __('Full Height' , 'onetone'),
			'desc' => __('Choose to set the section height same as browser window.' , 'onetone'),
			'options' => $reverse_choices
		),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),		
	),
	'shortcode' => '[ms_section background_color="{{background_color}}" background_image="{{background_image}}" background_repeat="{{background_repeat}}" background_position="{{background_position}}" background_parallax="{{background_parallax}}" border_size="{{border_size}}" border_color="{{border_color}}" border_style="{{border_style}}" padding_top="{{padding_top}}" padding_bottom="{{padding_bottom}}" padding_left="{{padding_left}}" padding_right="{{padding_right}}" contents_in_container="{{contents_in_container}}" top_separator="{{top_separator}}" bottom_separator="{{bottom_separator}}" full_height="{{full_height}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_section]',
	'popup_title' => __( 'Section Shortcode', 'onetone' ),
	'name' => __('section-shortcode/','onetone'),
);

/*-----------------------------------------------------------------------------------*/
/* Magee Slider Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['ms_slider'] = array(
	'no_preview' => true,
	'icon' => 'fa-sliders',
	'params' => array(
  
		'id' => array(
			'std' => '',
			'type' => 'select',
			'label' => __( 'Slider', 'onetone' ),
			'desc' => '',
			'options' => $magee_sliders
		),		
		
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone' )
		
	),),
	'shortcode' => '[ms_slider id="{{id}}" class="{{class}}"]',
	'popup_title' => __( 'Slider', 'onetone' ),
	'name' => __('slider-shortcode/','magee-shortocdes'),
);

/*-----------------------------------------------------------------------------------*/
/* Social Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['social'] = array(
	'no_preview' => true,
	'icon' => 'fa-twitter',
	'params' => array(

		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Title ', 'onetone' ),
			'desc' => __( 'Insert the title for the social icon.', 'onetone' ),
			),
		'icon' => array(
			'type' => 'iconpicker',
				'label' => __( 'Icon', 'onetone' ),
				'desc' => __( 'Click an icon to select, click again to deselect.', 'onetone' ),
				'options' => $icons
			),
		'icon_size' => array(
			'std' => '13',
			'type' => 'number',
			'max' => '100',
			'min' => '0',
			'label' => __( 'Icon Size', 'onetone' ),
			'desc' => __( 'In pixels (px), eg: 13px.', 'onetone')
		),	
		'iconcolor' => array(
			'type' => 'colorpicker',
			'label' => __( 'Icon Color', 'onetone' ),
			'desc' => __( 'Set color for icon.', 'onetone')
			),
		 'backgroundcolor' => array(
			'type' => 'colorpicker',
			'label' => __( 'Icon Circle Background Color', 'onetone' ),
			'desc' => __( 'Set background color for icon.', 'onetone')
		),
		 'effect_3d' => array(
		 	'std'=>'no',
			'type' => 'choose',
			'label' => __( 'Icon 3D effect' ),
			'desc' => __( 'Display box shadow for icon.', 'onetone'),
			'options' => array(
				'yes' => __('Yes', 'onetone'),
				'no' => __('No', 'onetone'),
			)	
		),		
		'iconboxedradius' => array(
			'type' => 'select',
			'label' => __( 'Icon Box Radius Style', 'onetone' ),
			//'desc' => __( '', 'onetone' ),
			'options' => array(
				'normal' => __('Normal', 'onetone'),
				'boxed' => __('Boxed', 'onetone'),
				'rounded' => __('Rounded', 'onetone'),
				'circle' => __('Circle ', 'onetone'),				
			)
		),
		'iconlink' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Icon Link URL', 'onetone' ),
			'desc' => __( 'Add the icon\'s url eg: http://example.com.', 'onetone' ),
		),		
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone' )
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone' )
		),
	),
	'shortcode' => '[ms_social icon_size="{{icon_size}}" title="{{title}}" icon="{{icon}}" iconcolor="{{iconcolor}}" effect_3d="{{effect_3d}}" backgroundcolor="{{backgroundcolor}}" iconboxedradius="{{iconboxedradius}}" iconlink="{{iconlink}}"  class="{{class}}" id="{{id}}"][/ms_social]',
	'popup_title' => __( 'Social Shortcode', 'onetone' ),
	'name' => __('social-shortcode/','onetone'),
);

/*-----------------------------------------------------------------------------------*/
/*	Table Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['table'] = array(
	'no_preview' => true,
	'icon' => 'fa-table',
	'params' => array(
		'style' => array(
			'type' => 'select',
			'label' => __( 'Style', 'onetone'),
			'desc' => __( 'Select table style.', 'onetone'),
			'options' => array(
				'simple' => __('Simple Style', 'onetone'),
				'normal' => __('Normal Style', 'onetone'),
			)
		),
		'striped' => array(
			'type' => 'select',
			'label' => __( 'Striped', 'onetone'),
			'options' => array(
				'yes' => __('Yes', 'onetone'),
				'no' => __('No', 'onetone'),
			)
		),	
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone'),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone')
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone'),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),
		
		'content' => array(
				'std' => '<table>
                                        <thead>
                                            <tr>
                                                <th>Column 1</th>
                                                <th>Column 2</th>
                                                <th>Column 3</th>
                                                <th>Column 4</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Item #1</td>
                                                <td>Description</td>
                                                <td>Subtotal:</td>
                                                <td>$1.00</td>
                                            </tr>
                                            <tr>
                                                <td>Item #2</td>
                                                <td>Description</td>
                                                <td>Discount:</td>
                                                <td>$2.00</td>
                                            </tr>
                                            <tr>
                                                <td><strong>All Items</strong></td>
                                                <td><strong>Description</strong></td>
                                                <td><strong>Your Total:</strong></td>
                                                <td><strong>$3.00</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>',
				'type' => 'textarea',
				'label' => __( 'Table HTML Content', 'onetone'),
			//	'desc' => __( 'Insert content for Table.', 'onetone')
			)
	),

	'shortcode' => '[ms_table style="{{style}}" striped="{{striped}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_table]',
	'popup_title' => __( 'Table Shortcode', 'onetone'),

);

/*-----------------------------------------------------------------------------------*/
/*	Tabs Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['tabs'] = array(
	'no_preview' => true,
	'icon' => 'fa-list-alt',
	'params' => array(
		'style' => array(
			'type' => 'select',
			'label' => __( 'Style', 'onetone' ),
			'desc' => __( 'Select tabs\' style.', 'onetone' ),
			'options' => array(
				'simple' => __('Simple Style', 'onetone'),
				'simple justified' => __('Simple Style Justified', 'onetone'),
				'button' => __('Button Style', 'onetone'),
				'button justified' => __('Button Style Justified', 'onetone'),
				'normal' => __('Normal Style', 'onetone'),
				'normal justified' => __('Normal Style Justified', 'onetone'),
				'vertical' => __('Vertical Style', 'onetone'),
				'vertical right' => __('Vertical Style Right', 'onetone'),
			)
		),
		'title_color' => array(
			'type' => 'colorpicker',
			'label' => __( 'Title Color', 'onetone' ),
			'desc' => __( 'Set color for tab item\'s title.', 'onetone')
			),		
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone' )
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone' )
		),
	),
	'popup_title' => __( 'Tab Shortcode', 'onetone' ),
	'name' => __('tabs-shortcode/','onetone'),
	'shortcode' => "[ms_tabs style=\"{{style}}\" title_color=\"{{title_color}}\" class=\"{{class}}\" id=\"{{id}}\"]\r\n{{child_shortcode}}[/ms_tabs]",

	'child_shortcode' => array(
		'params' => array(
			'title' => array(
				'std' => __('Title', 'onetone'),
				'type' => 'text',
				'label' => __( 'Tab Title', 'onetone'),
				'desc' => __( 'Insert title for tab item.', 'onetone'),
			),
			'icon' => array(
				'type' => 'iconpicker',
				'label' => __( 'Tab Title Icon', 'onetone'),
				'desc' => __( 'Click an icon to select, click again to deselect.', 'onetone'),
				'options' => $icons
			),			
			'content' => array(
				'std' => __('Tab Content', 'onetone'),
				'type' => 'textarea',
				'label' => __( 'Tab Content', 'onetone'),
				'desc' => __( 'Insert content for tab item.', 'onetone')
			)
		),
		'shortcode' => "[ms_tab title=\"{{title}}\" icon=\"{{icon}}\"]{{content}}[/ms_tab]\r\n",
	)

);

/*-----------------------------------------------------------------------------------*/
/*	Targeted_content Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['targeted_content'] = array(
    'no_preview' => true,
	'icon' => 'fa-eye' ,
    'params' => array(
	    'type' => array(
		    'type' => 'select',
			'label' => __( 'Type', 'onetone'),
			'desc' => __( 'Select visible permissions.Private for author only. Members for logged-in users. Guests for users not logged in.', 'onetone'),
			'options' => array(
			    'private' => __( 'Private','onetone'),
				'members' => __( 'Members','onetone'),
				'guests' => __('Guests','onetone'),
			)
		),
		'content' => array(
			'std' => 'note text',
			'type' => 'textarea',
			'label' => __( 'Content', 'onetone'),
			'desc' => __( 'Set content for targeted users.', 'onetone')
		),
		'alternative' => array(
			'std' => 'alternative text',
			'type' => 'textarea',
			'label' => __( 'Alternative Content', 'onetone'),
			'desc' => __( 'Set content for other users.', 'onetone')
		),
	),
    'shortcode' => '[ms_targeted_content type="{{type}}" alternative="{{alternative}}"]{{content}}[/ms_targeted_content]',
	'popup_title' => __( 'Targeted Shortcode','onetone'),
	'name' => __('targeted-shortcode/','magee-shortocdes'),
);

/*-----------------------------------------------------------------------------------*/
/* testimonial Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['testimonial'] = array(
	'no_preview' => true,
	'icon' => 'fa-commenting',
	'params' => array(
		'style' => array(
			'std' => '',
			'type' => 'select',
			'label' => __( 'Style ', 'onetone' ),
			'desc' => __( 'Select testimonial\'s style', 'onetone' ),
			'options' => array(
				'normal' => __('Normal', 'onetone') ,
				'box' => __('Box', 'onetone') ,
				),
			),
		'name' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Name', 'onetone' ),
			'desc' => __( 'Name of testimonial\'s author.', 'onetone' ),
			),
		'byline' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Byline', 'onetone' ),
			'desc' => __( 'Byline of testimonial\'s author.', 'onetone' ),
			),
		'avatar' => array(
				'type' => 'link',
				'label' => __( 'Avatar', 'onetone' ),
				'desc' => __( 'Avatar of testimonial\'s author.', 'onetone' ),
			),

		 'alignment' => array(
			'std' => '',
			'type' => 'select',
			'label' => __( 'Alignment', 'onetone' ),
			'desc' => __( 'Select the content\'s alignment.', 'onetone' ),
			'options' => array(
				'none' => __('None', 'onetone') ,
				'center' => __('Center', 'onetone') ,
				),
			),
		'content' => array(
				'std' => __('Testimonial Content', 'onetone'),
				'type' => 'textarea',
				'label' => __( 'Testimonial Content', 'onetone' ),
				'desc' => __( 'Insert content for testimonial.', 'onetone' )
			),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone' )
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone' )
		),
	),
	'shortcode' => '[ms_testimonial style="{{style}}" name="{{name}}" avatar="{{avatar}}" byline="{{byline}}" alignment="{{alignment}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_testimonial]',
	'popup_title' => __( 'Testimonial Shortcode', 'onetone' ),
	'name' => __('testimonial-shortcode/','onetone'),
);


/*-----------------------------------------------------------------------------------*/
/*	Timeline Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['timeline'] = array(
	'no_preview' => true,
	'icon' => 'fa-history',
	'params' => array(
					  
		'columns' => array(
			'type' => 'select',
			'label' => __( 'Columns', 'onetone' ),
			'desc' =>__( 'Number of items.', 'onetone' ),
			'std' => '4',
			'options' => array(
				'2' => __( '2 columns', 'onetone' ),
				'3' => __( '3 columns', 'onetone' ),
				'4' => __( '4 columns', 'onetone' ),
				'5' => __( '5 columns', 'onetone' )
			)
		),

		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone' )
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone' )
		),	
		),
	'shortcode' => "[ms_timeline columns=\"{{columns}}\"  class=\"{{class}}\" id=\"{{id}}\"]\r\n{{child_shortcode}}[/ms_timeline]",
	'popup_title' => __( 'Timeline Shortcode', 'onetone' ),
    'name' => __('timeline-shortcode/','onetone'),
    // child shortcode is clonable & sortable
	'child_shortcode' => array(
		'params' => array(
						  
		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Title', 'onetone'),
			'desc' => __( 'Insert title for timeline item.', 'onetone'),
		),
		'time' => array(
			'std' => date('Y'),
			'type' => 'text',
			'label' => __( 'Time', 'onetone'),
			'desc' => __( 'Insert time for timeline item.', 'onetone'),
		),
		'content' => array(
			'std' => 'Your Content Goes Here',
			'type' => 'textarea',
			'label' => __( 'Text', 'onetone'),
			'desc' => __( 'Insert description for timeline item.', 'onetone'),
		),	
		
		
           )
		,
	'shortcode' => "[ms_timeline_item title=\"{{title}}\" time=\"{{time}}\"]{{content}}[/ms_timeline_item]\r\n",	
		)
);

/*-----------------------------------------------------------------------------------*/
/*	Tooltip Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['tooltip'] = array(
	'no_preview' => true,
	'icon' => 'fa-comment-o',
	'params' => array(

		'title' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Tooltip Text', 'onetone' ),
			'desc' => __( 'Insert the text that displays in the tooltip', 'onetone' )
		),
		'placement' => array(
			'type' => 'select',
			'label' => __( 'Tooltip Position', 'onetone' ),
			'desc' => __( 'Choose the display position.', 'onetone' ),
			'options' => array(
				'top' => __('Top', 'onetone'),
				'bottom' => __('Bottom', 'onetone'),
				'left' => __('Left', 'onetone'),
				'right' => __('Right', 'onetone'),
			)
		),
		'trigger' => array(
			'type' => 'select',
			'label' => __( 'Tooltip Trigger', 'onetone' ),
			'desc' => __( 'Choose action to trigger the tooltip.', 'onetone' ),
			'options' => array(
				'hover' => __('Hover', 'onetone'),
				'click' => __('Click', 'onetone'),
			)
		),			
		'content' => array(
			'std' => '',
			'type' => 'textarea',
			'label' => __( 'Content', 'onetone' ),
			'desc' => __( 'Insert the text that will activate the tooltip hover', 'onetone' )
		),
		'class' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS Class', 'onetone' ),
			'desc' => __( 'Add a class to the wrapping HTML element.', 'onetone' )
		),
		'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone' )
		),			
	),
	'shortcode' => '[ms_tooltip title="{{title}}" placement="{{placement}}" trigger="{{trigger}}" class="{{class}}" id="{{id}}"]{{content}}[/ms_tooltip]',
	'popup_title' => __( 'Tooltip Shortcode', 'onetone' ),
	'name' => __('tooltip-shortcode/','magee-shortocdes'),
);


/*-----------------------------------------------------------------------------------*/
/*	Video Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['video'] = array(
    'no_preview' => true,
	'icon' => 'fa-play-circle-o',    
    'params' => array(
	
	    'mp4_url' => array(
            'std' => '',
            'type' => 'link',
            'label' => __( 'Mp4 Video Url','onetone'),
            'desc' => __( 'Add the URL of video in MPEG4 format. WebM and MP4 format must be included to render your video with cross browser compatibility. OGV is optional.', 'onetone' ),  
        
        ),  
        'ogv_url' => array(
            'std' => '',
            'type' => 'link',
            'label' => __( 'Ogv Video Url','onetone'),
            'desc' => __( 'Add the URL of video in OGV format. WebM and MP4 format must be included to render your video with cross browser compatibility. OGV is optional.', 'onetone' ),  
        
        ),
        'webm_url' => array(
            'std' => '',
            'type' => 'link',
            'label' => __( 'Webm Video Url','onetone'),
            'desc' => __( 'Add the URL of video in webm format. WebM and MP4 format must be included to render your video with cross browser compatibility. OGV is optional.', 'onetone' ),  
        
        ),  
        'poster' => array(
            'std' => '',
            'type' => 'uploader',
            'label' => __( 'Poster','onetone'),
            'desc' => __( 'Display a image when browser does not support HTML5 format.','onetone'),
        
        ),		
		'width' => array(
		    'std' => '100%',
			'type' => 'text',
 			'label' => __('Width','onetone'),
			'desc' => __('In pixels (px), eg: 1px.','onetone'),
		),
	    'height' => array(
		    'std' => '100%',
		    'type' => 'text',
			'label' => __('Height','onetone'),
			'desc' => __('In pixels (px), eg: 1px.','onetone'), 
		),
		'mute' => array( 
		    'std' => '',  
		    'type' => 'choose',
			'label' => __('Mute Video' ,'onetone'),
			'desc' => __('Choose to mute the video.','onetone'), 
			'options' => $reverse_choices	 
		),
	    'autoplay' =>array(
		    'std' => '',
		    'type' => 'choose',
			'label' => __('Autoplay Video','onetone'),
			'desc' => __('Choose to autoplay the video.','onetone'), 
			'options' => array(
			    'yes' => __('Yes','onetone'), 
			    'no' => __('No','onetone'),
			)
		),
		'loop' =>array(
		    'std' => '',
		    'type' => 'choose',
			'label' => __('Loop Video','onetone'),
			'desc' => __('Choose to loop the video.','onetone'), 
			'options' => array(
			    'yes' => __('Yes','onetone'), 
			    'no' => __('No','onetone')
			)
		),
		'controls' =>array(
		    'std' => '',
		    'type' => 'choose',
			'label' => __('Show Controls','onetone'),
			'desc' => __('Choose to display controls for the video player.','onetone'), 
			'options' => array(
			    'yes' => __('Yes','onetone'), 
			    'no' => __('No','onetone')
			)
		),
	    'class' =>array(
		    'std' => '',
			'type' => 'text',
			'label' => __('CSS Class','onetone'),
			'desc' => __('Add a class to the wrapping HTML element.','onetone') 
		),   
	    'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),
	),
	'shortcode' => '[ms_video mp4_url="{{mp4_url}}" ogv_url="{{ogv_url}}" webm_url="{{webm_url}}" poster="{{poster}}"  width="{{width}}" height="{{height}}" mute="{{mute}}" autoplay="{{autoplay}}" loop="{{loop}}" controls="{{controls}}" class="{{class}}" id="{{id}}"][/ms_video]',   
    'popup_title' => __( 'Video Shortcode', 'onetone' ),
	'name' => __('video-shortcode/','magee-shortocdes'),
);       
       

/*-----------------------------------------------------------------------------------*/
/*	Vimeo Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['vimeo'] = array(
    'no_preview' => true,
	'icon' => 'fa-vimeo-square',    
    'params' => array(
		'link' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Vimeo URL', 'onetone' ),
			'desc' => __( 'Add the URL the video will link to, ex: http://example.com.', 'onetone' ),
		),
		'width' => array(
		    'std' => '100%',
			'type' => 'text',
			'label' => __('Width','onetone'),
			'desc' => __('In pixels (px), eg:1px.','onetone'),
		),
	    'height' => array(
		    'std' => '100%',
			'type' => 'text',
			'label' => __('Height','onetone'),
			'desc' => __('In pixels (px), eg:1px.','onetone'), 
		),
		'mute' => array( 
		    'std' => '',  
		    'type' => 'choose',
			'label' => __('Mute Video' ,'onetone'),
			'desc' => __('Choose to mute the video.','onetone'), 
			'options' => $reverse_choices	 
		),
	    'autoplay' =>array(
		    'std' => '',
		    'type' => 'choose',
			'label' => __('Autoplay Video','onetone'),
			'desc' => __('Choose to autoplay the video.','onetone'), 
			'options' => array(
			    'yes' => __('Yes','onetone'), 
			    'no' => __('No','onetone'),
			)
		),
		'loop' =>array(
		    'std' => '',
		    'type' => 'choose',
			'label' => __('Loop Video','onetone'),
			'desc' => __('Choose to loop the video.','onetone'), 
			'options' => array(
			    'yes' => __('Yes','onetone'), 
			    'no' => __('No','onetone')
			)
		),
		'controls' =>array(
		    'std' => '',
		    'type' => 'choose',
			'label' => __('Show Controls','onetone'),
			'desc' => __('Choose to display controls for the video player.','onetone'), 
			'options' => array(
			    'yes' => __('Yes','onetone'), 
			    'no' => __('No','onetone')
			)
		),
	    'class' =>array(
		    'std' => '',
			'type' => 'text',
			'label' => __('CSS Class','onetone'),
			'desc' => __('Add a class to the wrapping HTML element.','onetone') 
		),   
	    'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),
	),
	'shortcode' => '[ms_vimeo link="{{link}}"  width="{{width}}" height="{{height}}" mute="{{mute}}" autoplay="{{autoplay}}" loop="{{loop}}" controls="{{controls}}" class="{{class}}" id="{{id}}"][/ms_vimeo]',   
    'popup_title' => __( 'Vimeo Shortcode', 'onetone' ),
	'name' => __('vimeo-shortcode/','magee-shortocdes'),
);       
/*-----------------------------------------------------------------------------------*/
/*	Youtube Config
/*-----------------------------------------------------------------------------------*/

$magee_shortcodes['youtube'] = array(
    'no_preview' => true,
	'icon' => 'fa-youtube-square',    
    'params' => array(
	
		'link' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'Youtube URL', 'onetone' ),
			'desc' => __( 'Add the URL the video will link to, ex: http://example.com.', 'onetone' ),
		),
		'width' => array(
		    'std' => '100%',
			'type' => 'text',
			'label' => __('Width','onetone'),
			'desc' => __('In pixels (px), eg:1px.','onetone'),
		),
	    'height' => array(
		    'std' => '100%',
			'type' => 'text',
			'label' => __('Height','onetone'),
			'desc' => __('In pixels (px), eg:1px.','onetone'), 
		),
		'mute' => array( 
		    'std' => '',  
		    'type' => 'choose',
			'label' => __('Mute Video' ,'onetone'),
			'desc' => __('Choose to mute the video.','onetone'), 
			'options' => $reverse_choices	 
		),
	    'autoplay' =>array(
		    'std' => '',
		    'type' => 'choose',
			'label' => __('Autoplay Video','onetone'),
			'desc' => __('Choose to autoplay the video.','onetone'), 
			'options' => array(
			    'yes' => __('Yes','onetone'), 
			    'no' => __('No','onetone'),
			)
		),
		'loop' =>array(
		    'std' => '',
		    'type' => 'choose',
			'label' => __('Loop Video','onetone'),
			'desc' => __('Choose to loop the video.','onetone'), 
			'options' => array(
			    'yes' => __('Yes','onetone'), 
			    'no' => __('No','onetone')
			)
		),
		'controls' =>array(
		    'std' => '',
		    'type' => 'choose',
			'label' => __('Show Controls','onetone'),
			'desc' => __('Choose to display controls for the video player.','onetone'), 
			'options' => array(
			    'yes' => __('Yes','onetone'), 
			    'no' => __('No','onetone')
			)
		),
	    'class' =>array(
		    'std' => '',
			'type' => 'text',
			'label' => __('CSS Class','onetone'),
			'desc' => __('Add a class to the wrapping HTML element.','onetone') 
		),   
	    'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),
	),
	'shortcode' => '[ms_youtube link="{{link}}"  width="{{width}}" height="{{height}}" mute="{{mute}}" autoplay="{{autoplay}}" loop="{{loop}}" controls="{{controls}}" class="{{class}}" id="{{id}}"][/ms_youtube]',   
    'popup_title' => __( 'Youtube Shortcode', 'onetone' ),
	'name' => __('youtube-shortcode/','magee-shortocdes'),
);    

/*-----------------------------------------------------------------------------------*/
/*	Widget Area
/*-----------------------------------------------------------------------------------*/   

$magee_shortcodes['widget_area'] = array(
    'no_preview' => true,
	'icon' => 'fa-cog',    
    'params' => array(
	    'name' => array(
		    'std' => '',
			'type' => 'select',
			'label' => __('Name','onetone'),
			'desc' => __('Choose widget name to show','onetone'),
			'options' => magee_get_sidebars(),
		),
		'background_color' => array(
		    'std' => '',
			'type' => 'colorpicker',
			'label' => __('Background Color','onetone'),
			'desc' => __('Set background color for widget area','onetone'),
		),
		'padding' => array(
		    'std' => '0',
			'max' => '200',
			'min' => '0',
			'type' => 'number',
			'label' =>  __('Padding','onetone'),
		),
	    'class' =>array(
		    'std' => '',
			'type' => 'text',
			'label' => __('CSS Class','onetone'),
			'desc' => __('Add a class to the wrapping HTML element.','onetone') 
		),   
	    'id' => array(
			'std' => '',
			'type' => 'text',
			'label' => __( 'CSS ID', 'onetone' ),
			'desc' => __( 'Add an ID to the wrapping HTML element.', 'onetone')
		),
	),
    'shortcode' => '[ms_widget_area name="{{name}}"  background_color="{{background_color}}" padding="{{padding}}" class="{{class}}" id="{{id}}"][/ms_widget_area]',
    'popup_title' => __( 'Widget Area Shortcode', 'onetone' ),

);