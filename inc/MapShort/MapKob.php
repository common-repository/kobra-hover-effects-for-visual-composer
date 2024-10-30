<?php
/**
 * @package  Kob_Hov
 */
namespace Khe\MapShort;

class MapKob {
	public function register() {
		$this->hovermap();
	}

	public function hovermap (){
		vc_map( array(
			"name" => __("Kobra Hover Effects", "kobra_vc"),
			"base"        => "kobra_hover",
			"icon"        => "kobra_wappericon",
			"category"    => 'Kobra Hover Effects',
			'description' => 'Icon animation with Text',
			// 'admin_enqueue_css' => array(plugins_url('css/vc_extensions_cq_admin.css', __FILE__)),
			"params"      => array(

				// General Settings
				array(
					"type" => "dropdown",
					"heading" => __("Select Style"),
					"param_name" => "select_style",
					"edit_field_class" => "vc_col-xs-6 vc_column",
					"admin_label" => true,
					"value" => array(
						'square' => 'square',
						'circle' => 'circle',
						'square2' => 'square2',
					),
					"std"   => 'square',

				),
				// Select Square Field
				array(
					"type" => "dropdown",
					"heading" => __("Select Effects"),
					"param_name" => "square",
					"edit_field_class" => "vc_col-xs-6 vc_column",
					"admin_label" => true,
					"value" => array(
						'Effects 1' => 'style1',
						'Effects 2' => 'style2',
						'Effects 3' => 'style3',
						'Effects 4' => 'style4',
						'Effects 5' => 'style5',
						'Effects 6' => 'style6',
						'Effects 7' => 'style7',
						'Effects 8' => 'style8',
						'Effects 9' => 'style9',
						'Effects 10' => 'style10',
						'Effects 11' => 'style11',
						'Effects 12' => 'style12',
						'Effects 13' => 'style13',
						'Effects 14' => 'style14',
						'Effects 15' => 'style15',
						'Effects 16' => 'style16',
						'Effects 17' => 'style17',
						'Effects 18' => 'style18',
					),
					"std"         => 'style1',
					"dependency" => array('element' => 'select_style', 'value' => 'square'),
				),

				// Select Circle Field
				array(
					"type" => "dropdown",
					"heading" => __("Select Effects"),
					"param_name" => "circle",
					"edit_field_class" => "vc_col-xs-6 vc_column",
					"admin_label" => true,
					"value" => array(
						'Effects 1' => 'circle1',
						'Effects 2' => 'circle2',
						'Effects 3' => 'circle3',
						'Effects 4' => 'circle4',
						'Effects 5' => 'circle5',
						'Effects 6' => 'circle6',
						'Effects 7' => 'circle7',
						'Effects 8' => 'circle8',
						'Effects 9' => 'circle9',
						'Effects 10' => 'circle10',
						'Effects 11' => 'circle11',
						'Effects 12' => 'circle12',
						'Effects 13' => 'circle13',
						'Effects 14' => 'circle14',
						'Effects 15' => 'circle15',
						'Effects 16' => 'circle16',
						'Effects 17' => 'circle17',
						'Effects 18' => 'circle18',
						'Effects 19' => 'circle19',
						'Effects 20' => 'circle20',
						'Effects 21' => 'circle21',
						'Effects 22' => 'circle22'
					),
					"std"         => 'circle1',
					"dependency" => array('element' => 'select_style', 'value' => 'circle'),
				),

				// Select Circle Field
				array(
					"type" => "dropdown",
					"heading" => __("Select Effects"),
					"param_name" => "square2",
					"edit_field_class" => "vc_col-xs-6 vc_column",
					"admin_label" => true,
					"value" => array(
						'Effects 1' => 'style1',
						'Effects 2' => 'style2',
						'Effects 3' => 'style3',
						'Effects 4' => 'style4',
						'Effects 5' => 'style5',
						'Effects 6' => 'style6',
						'Effects 7' => 'style7',
						'Effects 8' => 'style8',
						'Effects 9' => 'style9',
						'Effects 10' => 'style10',
						'Effects 11' => 'style11',
						'Effects 12' => 'style12',
						'Effects 13' => 'style13',
						'Effects 14' => 'style14',
						'Effects 15' => 'style15',
						'Effects 16' => 'style16',
						'Effects 17' => 'style17',
						'Effects 18' => 'style18',
						'Effects 19' => 'style19',
						'Effects 20' => 'style20',
						'Effects 21' => 'style21',
						'Effects 22' => 'style22',
						'Effects 23' => 'style23',
						'Effects 24' => 'style24',
						'Effects 25' => 'style25',
						'Effects 26' => 'style26',
						'Effects 27' => 'style27',
						'Effects 28' => 'style28',
						'Effects 29' => 'style29',
						'Effects 30' => 'style30',
						'Effects 31' => 'style31',
						'Effects 32' => 'style32',
						'Effects 33' => 'style33',
						'Effects 34' => 'style34',
						'Effects 35' => 'style35',
						'Effects 36' => 'style36',
						'Effects 37' => 'style37',
						'Effects 38' => 'style38',
						'Effects 39' => 'style39',
						'Effects 40' => 'style40',
						'Effects 41' => 'style41',
					),
					"std"         => 'style1',
					"dependency" => array('element' => 'select_style', 'value' => 'square2'),
				),


				// Attached Image Field
				array(
					"type" => "attach_image",
					"heading" => __("Upload Image", "kobra_vc"),
					"edit_field_class" => "vc_col-xs-6 vc_column",
					"param_name" => "images",
					"value" => "",
					"description" => __("Select images from media library.", "kobra_vc")
				),

				// Select Square Field
				array(
					"type" => "dropdown",
					"heading" => __("Hover Animation"),
					"edit_field_class" => "vc_col-xs-6 vc_column",
					"param_name" => "cir_anima",
					"admin_label" => true,
					"value" => array(
						'Left To Right' => 'left_to_right',
						'Right To Left' => 'right_to_left',
						'Top To Bottom' => 'top_to_bottom',
						'Bottom To Top' => 'bottom_to_top'
					),
					"std"         => 'left_to_right',
					"dependency" => array('element' => 'select_style', 'value' => 'circle'),
				),
				// Title Field
				array(
					"type" => "textfield",
					/* "holder" => "div", */
					"class" => "",
					"heading" => __("Title", 'kobra_vc'),
					"param_name" => "title",
					"admin_label" => true,
					"value" => "Title Goes Here",
					"description" => __("Provide the title for the Hover Item.", 'kobra_vc')
				),
				// Description Field
				array(
					"type" => "textarea",
					/* "holder" => "div", */
					"class" => "",
					"heading" => __("Description", 'kobra_vc'),
					"param_name" => "descript",
					"admin_label" => true,
					"value" => "Description Goes Here",
					"description" => __("Provide the Description for the Hover Items.", 'kobra_vc')
				),

				array(
					"type"        => "prime_switch",
					"class"       => "",
					"heading"     => __( "Button & External Link?", "prime_vc" ),
					"edit_field_class" => "vc_col-xs-6 vc_column",
					"param_name"  => "kb_button",
					'value' => array(__('Show Button', 'kobra_vc') => 'off'),
					"options"     => array(
						"on" => array(
							"label" => __( "", "prime_vc" ),
							"on"    => "Yes",
							"off"   => "No",
						),
					),
					"default_set" => false,
					"description" => "Switch Yes If you want to Add Button On items. Default Is False",
					"dependency" => array('element' => 'select_style', 'value' => 'square'),

				),

				array(
					"type" => "dropdown",
					"holder" => "",
					"edit_field_class" => "vc_col-xs-6 vc_column",
					"class" => "kobra_vc",
					"heading" => __("Chose Button - <span class='pro_title'>(Pro Only) </span> - <a target='_blank' href='https://codecans.com/downloads/kobra-hover-effects-for-visual-composer-pro/'> <i class='fa fa-shopping-cart' aria-hidden='true'></i>
 Get Pro</a>", "kobra_vc"),
					"edit_field_class" => "vc_col-xs-6 vc_column",
					"param_name" => "button_choser",
					"value" => array(
						__("Default", "kobra_vc") => "btn-default",
						__("Primary", "kobra_vc") => "btn-primary",
						__("Success", "kobra_vc") => "btn-success",
						__("Info", "kobra_vc") => "btn-info",
						__("Warning", "kobra_vc") => "btn-warning",
						__("Danger", "kobra_vc") => "btn-danger",
						__("Link", "kobra_vc") => "btn-link"
					),
					"description" => __("Select the Different Type of button", "kobra_vc"),
					"dependency" => array('element' => 'kb_button', 'value' => 'on'),
				),
				// Link Field
				array(
					"type" => "vc_link",
					"class" => "",
					"edit_field_class" => "vc_col-xs-6 vc_column",
					"heading" => __("URL (Link)", 'kobra_vc'),
					"param_name" => "link",
					"description" => __("Provide the link here.", 'kobra_vc'),
					"dependency" => array('element' => 'kb_button', 'value' => 'on'),
				),
				// Button Text Color
				array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => __("Button Text color", "kobra_vc"),
					"edit_field_class" => "vc_col-xs-6 vc_column",
					"param_name" => "button_color",
					"value" => '#FFFFFF', //Default Red color
					"description" => __("Choose text color", "kobra_vc"),
					"dependency" => array('element' => 'kb_button', 'value' => 'on'),
				),

				// Button Font Size
				array(
					'type'             => 'prime_slider',
					'heading'          => __( 'Button Text Font Size', 'khe_vc' ),
					'param_name'       => 'button_size',
					'tooltip'          => __( 'Choose Member Name FontSize Here. For large numbers it\'s better use 18px Font Size.', 'khe_vc' ),
					'min'              => 1,
					'max'              => 100,
					'step'             => 1,
					'value'            => 12,
					'unit'             => 'px',
					"description" => __("Select Color For your Button Text. Default is 12px", "my-text-domain"),
					"dependency" => array('element' => 'kb_button', 'value' => 'on'),
				),
				array(
					"type"        => "prime_switch",
					"heading"     => __( "External Link?", "prime_vc" ),
					"param_name"  => "circle_button",
					'value' => array(__('Link', 'kobra_vc') => 'off'),
					"options"     => array(
						"on" => array(
							"label" => __( "", "prime_vc" ),
							"on"    => "Yes",
							"off"   => "No",
						),
					),
					"default_set" => false,
					"description" => "Switch Yes If you want to Add Button On items. Default Is False",
					"dependency" => array('element' => 'select_style', 'value' => 'circle'),
				),
				// Link Field
				array(
					"type" => "vc_link",
					"class" => "",
					"heading" => __("URL (Link)", 'kobra_vc'),
					"param_name" => "link_circle",
					"description" => __("Provide the link here.", 'kobra_vc'),
					"dependency" => array('element' => 'circle_button', 'value' => 'on'),
				),

				// Link Field
				array(
					"type" => "vc_link",
					"class" => "",
					"heading" => __("URL (Link)", 'kobra_vc'),
					"param_name" => "link_square2",
					"description" => __("Provide the link here.", 'kobra_vc'),
					"dependency" => array('element' => 'select_style', 'value' => 'square2'),
				),


				array(
					"type"        => "colorpicker",
					"class"       => "",
					"heading"     => __( "<h3>Click Below to Buy Pro Version & Get Awesome Feature:<a href='http://codecans.com/items/kobra-hover-effects-for-visual-composer-pro/' target='_blank'><span class='but_kobra'></br><img src='http://codecans.com/tutorials/images/buy_now.gif'/></span></a></h3></br>Hover Background color - <span class='pro_title'>(Pro Versin Only ) </span> - <a target='_blank' href='https://codecans.com/downloads/kobra-hover-effects-for-visual-composer-pro/'><i class='fa fa-shopping-cart' aria-hidden='true'></i>
 Get Pro Version</a>", "my-text-domain" ),
					"param_name"  => "bg_color",
					"value"       => '#FF0000', //Default Red color
					"description" => __( "Hover Background color Option Work With Pro Version only", "my-text-domain" ),
					"group"       => "Options",
				),

/*				// Background Color
				array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => __( "Item Background color", "my-text-domain" ),
					"edit_field_class" => "vc_col-xs-4 vc_column",
					"param_name" => "bg_color",
					"value" => '#16a085', //Default Red color
					"description" => __("Choose text color", "kobra_vc"),
					"group" => "Options"
				),*/

				// Tilte Color
				array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => __("Title Text color", "kobra_vc"),
					"edit_field_class" => "vc_col-xs-6 vc_column",
					"param_name" => "title_color",
					"value" => '#FFFFFF', //Default Red color
					"description" => __("Choose text color", "kobra_vc"),
					"group" => "Options"
				),
				// Description Color
				array(
					"type" => "colorpicker",
					"class" => "",
					"heading" => __("Description Text color", "kobra_vc"),
					"edit_field_class" => "vc_col-xs-6 vc_column",
					"param_name" => "desc_color",
					"value" => '#FFFFFF', //Default Red color
					"description" => __("Choose text color", "kobra_vc"),
					"group" => "Options"
				),

				// Title Font Size Field
				array(
					'type'             => 'prime_slider',
					'heading'          => __( 'Title Text Font Size', 'khe_vc' ),
					'param_name'       => 'title_size',
					'tooltip'          => __( 'Choose Member Name Font Size Here. For large numbers it\'s better use 18px Font Size.', 'khe_vc' ),
					'min'              => 1,
					'max'              => 100,
					'step'             => 1,
					'value'            => 20,
					'unit'             => 'px',
					"description" => __("Chose Title Text Size as Pixel. Default is 20px", "my-text-domain"),
					"group" => "Options"
				),


				// Description Font Size Field
				array(
					'type'             => 'prime_slider',
					'heading'          => __( 'Description Text Font Size', 'khe_vc' ),
					'param_name'       => 'desc_size',
					'tooltip'          => __( 'Choose Member Name FontSize Here. For large numbers it\'s better use 18px Font Size.', 'khe_vc' ),
					'min'              => 1,
					'max'              => 100,
					'step'             => 1,
					'value'            => 15,
					'unit'             => 'px',
					"description" => __("Chose Description Font Text Size as Pixel. Default is 15px", "my-text-domain"),
					"group" => "Options"
				),


				// Image Height And Width
				array(
					'type'        => 'prime_slider',
					'heading'     => __( 'Circle Height & Width', 'khe_vc' ),
					//"edit_field_class" => "vc_col-xs-6 vc_column",
					'param_name'  => 'main_height_width',
					'tooltip'     => __( 'Add Main Images Height & Width. You can use different Image Height and width as you like.', 'khe_vc' ),
					'min'         => 200,
					'max'         => 1500,
					'step'        => 1,
					'value'       => 260,
					'unit'        => 'px',
					"description" => __( "Add Main Images Height & Width as Pixel. Default is 305px", "my-text-domain" ),
					"group"       => "Custom Image Size",
					"dependency" => array('element' => 'select_style', 'value' => 'circle'),
				),
				// Responsive 768 Height And Width
				array(
					'type'        => 'prime_slider',
					'heading'     => __( 'Circle Height & Width (768) Responsive', 'khe_vc' ),
					//"edit_field_class" => "vc_col-xs-6 vc_column",
					'param_name'  => 'img768_height_width',
					'tooltip'     => __( 'Add Responsive Images Height & Width. This is Height and width when your Items Going Tablet.', 'khe_vc' ),
					'min'         => 100,
					'max'         => 1000,
					'step'        => 1,
					'value'       => 220,
					'unit'        => 'px',
					"description" => __( "Add Responsive Images Height & Width as Pixel. Default is 250px", "my-text-domain" ),
					"group"       => "Custom Image Size",
					"dependency" => array('element' => 'select_style', 'value' => 'circle'),
				),
				//////////////////////////////////////////////////
				//////////////////// PREMIUM OPTION //////////////
				/////////////////////////////////////////////////

			)
		) );
	}

}

