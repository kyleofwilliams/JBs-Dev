<?php
if( !class_exists('Magee_List') ):
class Magee_List {

	public static $args;
    private  $id;
	private  $icon_a;
	/**
	 * Initiate the shortcode
	 */
	public function __construct() {

		add_shortcode( 'ms_list', array( $this, 'render_parent' ) );
        add_shortcode( 'ms_list_item', array( $this, 'render_child' ) );
	}

	/**
	 * Render the shortcode
	 * @param  array $args     Shortcode paramters
	 * @param  string $content Content between shortcode
	 * @return string          HTML output
	 */
	function render_parent( $args, $content = '') {

		$defaults =	Magee_Core::set_shortcode_defaults(
			array(
				'id' 					=>'',
				'item_border' 			=>'no',
				'item_size' 			=>'12px',
				'class' 				=>'',

			), $args
		);
		
		extract( $defaults );
		self::$args = $defaults;
        if(is_numeric($item_size))
		$item_size = $item_size.'px';
		  
		$uniq_class = uniqid('list-');
		$class = ' '.$uniq_class;

		if($item_border == 'yes')
		{
		   $class .=  ' magee-icon-list icon-list-border';
		}

		$textstyle=' .'.$uniq_class.' ul {margin: 0;} .'.$uniq_class.' li{list-style-type: none;padding-bottom: .8em;position: relative;padding-left: 2em;font-size:'.$item_size.'}';

    	$styles = sprintf( '<style type="text/css" scoped="scoped">%s </style>', $textstyle);
		$html= sprintf(' %s<ul class="magee-icon-list %s" id="%s">%s</ul>',$styles,$class,$id,do_shortcode( Magee_Core::fix_shortcodes($content)));
				   		
		return $html;
	}
	
	/**
	 * Render the child shortcode
	 * @param  array $args     Shortcode paramters
	 * @param  string $content Content between shortcode
	 * @return string          HTML output
	 */
		function render_child( $args, $content = '') {
		
		$defaults =	Magee_Core::set_shortcode_defaults(
			array(
			    'icon' 					=>'',
				'icon_color' 			=>'',
				'icon_boxed' 			=>'no',
				'background_color' 		=>'',
				'boxed_shape' 			=>'circle',
			), $args
		);

		extract( $defaults );
		self::$args = $defaults;
		$uniqid_li = uniqid('li-');
		$listyle = '';
		if($icon_boxed == 'yes'):
			if( $boxed_shape == 'circle'):
			$listyle .= ' .'.$uniqid_li.' i {border-radius: 50%;} .'.$uniqid_li.' img {border-radius: 50%;}';	
			else:
			$listyle .= ' .'.$uniqid_li.' i {border-radius: 0;} .'.$uniqid_li.' img {border-radius: 0;}';	
			endif;
		endif;
		
		if( stristr($icon,'fa-')):		
		$listyle .= ' .'.$uniqid_li.' i{text-align: center;width: 1.6em;height: 1.6em;line-height: 1.6em;position: absolute;top: 0;
				left: 0;background-color: '.$background_color.';color: '.$icon_color.';} ';
		$style = sprintf( '<style type="text/css" scoped="scoped">%s </style>', $listyle);	 	
		$html = sprintf('%s<li class='.$uniqid_li.'><i class="fa %s"></i> %s</li>',$style,$icon,do_shortcode( Magee_Core::fix_shortcodes($content)));
		else:
		$listyle .= ' .'.$uniqid_li.' img{text-align: center;width: 1.6em;height: 1.6em;line-height: 1.6em;position: absolute;top: 0;
				left: 0;background-color: '.$background_color.';color: '.$icon_color.';} ';
		$style = sprintf( '<style type="text/css" scoped="scoped">%s </style>', $listyle);	
		$html = sprintf('%s<li class='.$uniqid_li.'><img src="%s" class="image_instead"/> %s</li>',$style,$icon,do_shortcode( Magee_Core::fix_shortcodes($content))); 
		endif;
		return $html;
	}
}

new Magee_List();
endif;