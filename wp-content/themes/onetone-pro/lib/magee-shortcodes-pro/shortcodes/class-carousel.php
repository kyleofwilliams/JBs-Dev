<?php
if( !class_exists('Magee_Carousel') ):
class Magee_Carousel {

	public static $args;
    private  $id;

	/**
	 * Initiate the shortcode
	 */
	public function __construct() {

        add_shortcode( 'ms_carousel', array( $this, 'render' ) );
		add_shortcode( 'ms_carousel_item', array( $this, 'render_child' ) );
	}

	/**
	 * Render the shortcode
	 * @param  array $args     Shortcode paramters
	 * @param  string $content Content between shortcode
	 * @return string          HTML output
	 */
	function render( $args, $content = '') {

		$defaults =	Magee_Core::set_shortcode_defaults(
			array(
				'id' 					=>'',
				'class' 				=>'',
				'style'                 =>'1',
				'columns' 				=>'4',
				'nav_color'         =>'', 
				'nav_shape'			=>'square', //square/rounded/circle
				'nav_size'			=>'',// small/middle/large
				'display_nav'  =>'yes',
				'indicator'			=>'',
				'indicatior_color' =>'',
				'autoplay' =>'no',
				'autoplaytimeout'=>'5000'
			), $args
		);
		
		extract( $defaults );
		self::$args = $defaults;
		$add_class  = uniqid('carousel-');
		$class     .= ' '.$add_class;
		$css_style  = '';
		$nav_class  = '';
		$columns    = absint( $columns )>0? absint( $columns ):4;
		$style    = absint( $style )>0? absint( $style ):1;
		$html = '';
		
		if( $nav_shape )
		$nav_class  .= ' nav-'.$nav_shape;
		if( $nav_size == 'middle' )
		$nav_class  .= ' nav-lg';
		if( $nav_size == 'large' )
		$nav_class  .= ' nav-xl';
		
		if( $nav_color ){
		$rgb = Magee_Core::hex2rgb( $nav_color );
		$html .= '<style>.'.$add_class.' .nav-bg .multi-carousel-nav-prev, .'.$add_class.' .nav-bg .multi-carousel-nav-next{background-color: rgba('.$rgb[0].','.$rgb[1].','.$rgb[2].',.8);}.'.$add_class.' .nav-border .multi-carousel-nav-prev, .'.$add_class.' .nav-border .multi-carousel-nav-next{border-color: '.$nav_color.';color: '.$nav_color.';}</style>';
		}
		
		if( $style == 3 ):
		
		$html .= '<div class="magee-carousel multi-carousel '.esc_attr($class).'" id='.esc_attr($id).'>';
		
		if( $display_nav != 'no' ){
		       $html .= '<!-- Controls -->
                                        <div class="multi-carousel-nav style'.$style.' nav-border '.esc_attr($nav_class).'">
                                            <a href="javascript:;" class="carousel-prev" role="button" data-slide="prev">
                                                <span class="multi-carousel-nav-prev"></span>
                                            </a>
                                            <a class="carousel-next"  href="javascript:;"  role="button" data-slide="next">
                                                <span class="multi-carousel-nav-next"></span>
                                            </a>
                                        </div>';
											}
            $html .= '<div class="multi-carousel-inner">
                                           <div id="'.$add_class.'" class="owl-carousel owl-theme">'.do_shortcode( Magee_Core::fix_shortcodes(str_replace('<br />','',$content))).'</div>
                                        </div>';
                                       
         $html .= '</div>';
								
		else:
		$html .= '<div class="magee-carousel multi-carousel '.esc_attr($class).'" id='.esc_attr($id).'>
                                        <div class="multi-carousel-inner">
                                           <div id="'.$add_class.'" class="owl-carousel owl-theme">'.do_shortcode( Magee_Core::fix_shortcodes(str_replace('<br />','',$content))).'</div>
                                        </div>';
         if( $display_nav != 'no' ){
		       $html .= '<!-- Controls -->
                                        <div class="multi-carousel-nav style'.$style.' nav-bg '.esc_attr($nav_class).'">
                                            <a href="javascript:;" class="carousel-prev" role="button" data-slide="prev">
                                                <span class="multi-carousel-nav-prev"></span>
                                            </a>
                                            <a class="carousel-next"  href="javascript:;"  role="button" data-slide="next">
                                                <span class="multi-carousel-nav-next"></span>
                                            </a>
                                        </div>';
										}
         $html .= '</div>';
									
	    endif;
		$itemsNum600 = ($columns-2)>0?($columns-2):$columns;
        $margin = $columns > 1?10:0;
		
		$html .= '<script language="javascript">
		jQuery(function($) {
		if($("#magee-sc-form-preview").length>0){
		$("#magee-sc-form-preview").ready(function(){
		    var owl = $("#magee-sc-form-preview").contents().find("#'.$add_class.'");
						owl.owlCarousel({
							loop:true,
							margin:'.$margin.',
							autoplay:'.($autoplay == 'yes'?'true':'false').',
							autoplayTimeout:'.absint($autoplaytimeout).',
							autoplayHoverPause:true,
							items:'.$columns.',
							responsiveClass:true,
							responsive:{
								0:{
									items:1,
									nav:false
								},
								600:{
									items:'.$itemsNum600.',
									nav:'.($display_nav == 'yes'?'true':'false').',
								},
								1000:{
									items:'.$columns.',
									nav:'.($display_nav == 'yes'?'true':'false').',
								}
							}
						});
						 owl.parents(".magee-carousel").find(".carousel-next").click(function(){
						  owl.trigger("next.owl.carousel");
						})
						owl.parents(".magee-carousel").find(".carousel-prev").click(function(){
						  owl.trigger("prev.owl.carousel");
						});
		});
		}else{
			$(document).ready(function(){
				var owl = $("#'.$add_class.'");
						owl.owlCarousel({
							loop:true,
							margin:'.$margin.',
							autoplay:'.($autoplay == 'yes'?'true':'false').',
							autoplayTimeout:'.absint($autoplaytimeout).',
							autoplayHoverPause:true,
							items:'.$columns.',
							responsiveClass:true,
							responsive:{
								0:{
									items:1,
									nav:false
								},
								600:{
									items:'.$itemsNum600.',
									nav:'.($display_nav == 'yes'?'true':'false').',
								},
								1000:{
									items:'.$columns.',
									nav:'.($display_nav == 'yes'?'true':'false').',
								}
							}
						});
						 owl.parents(".magee-carousel").find(".carousel-next").click(function(){
						  owl.trigger("next.owl.carousel");
						})
						owl.parents(".magee-carousel").find(".carousel-prev").click(function(){
						  owl.trigger("prev.owl.carousel");
						});
		
			});
		}
		});
 </script>';
		
		return $html;
	}
	
	function render_child( $args, $content = '') {
		
		$defaults =	Magee_Core::set_shortcode_defaults(
			array(
			), $args
		);

		extract( $defaults );
		self::$args = $defaults;
		
		$html = '';
		if($content):
	    $html .= '<div class="item">';
		$html .= do_shortcode( Magee_Core::fix_shortcodes($content));
		$html .= '</div>';
		endif;
		
		return $html;
	}
	
}

new Magee_Carousel();
endif;