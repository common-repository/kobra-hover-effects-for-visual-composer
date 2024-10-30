<?php
/**
 * @package  Kob_Hov
 */
namespace Khe\MapShort;

class ShortKob {
	public function register() {
		add_shortcode( 'kobra_hover', array ($this, 'kobra_hover_shortcode_function' ));
	}

	public function kobra_hover_shortcode_function( $atts, $content = null, $tag ) {
		$bg_color = ""; $button_choser = 'btn-default';

				extract( shortcode_atts( array(
					'title' => 'Title Goes Here',
					'descript' => 'Description Goes Here',
					'images' => '',
					'link' => '',
					'main_height_width' => '260',
					'img768_height_width' => '220',
					'circle_spiner_height_width' => '315',
					'link_circle' => '',
					'link_square2' => '',
					//'button_choser' => 'btn-default',
					//'bg_color' => '#16a085',
					'rdc_css' => '',
					'title_size' => '20',
					'title_color' => '#FFFFFF',
					'desc_size' => '15',
					'select_style' => 'square',
					'desc_color' => '#FFFFFF',
					'button_size' => '12',
					'button_color' => '#FFFFFF',
					'kb_button' => '',
					'square' => 'style1',
					'circle' => 'circle1',
					'square2' => 'style1',
					'cir_anima' => 'left_to_right',
				), $atts ) );

		$content = wpb_js_remove_wpautop($content, true);
		$images = wp_get_attachment_image_src($images, 'full');
		$link = vc_build_link($link);
		$link_circle = vc_build_link($link_circle);
		$link_square2 = vc_build_link($link_square2);
		$title_size   = $atts[ 'title_size' ] != '' ? (int) esc_attr( $atts[ 'title_size' ] ) : 20;
		$desc_size   = $atts[ 'desc_size' ] != '' ? (int) esc_attr( $atts[ 'desc_size' ] ) : 15;

		$main_height_width   = isset($atts[ 'main_height_width' ]) != '' ? (int) esc_attr( $atts[ 'main_height_width' ] ) : 260;
		$img768_height_width   = isset($atts[ 'img768_height_width' ]) != '' ? (int) esc_attr( $atts[ 'img768_height_width' ] ) : 220;
		$output ='';

					require 'style/responsive.php';

				$output .='<div class="khe_main">';

					require 'style/square.php';
					require 'style/circle.php';
					require 'style/square2.php';

				if ($select_style == "square" && $kb_button == "on") {
					$output .= '<a style="font-size: ' . $button_size . 'px; color:'. $button_color .';" class="btn '. $button_choser . '" href="'. $link['url'] .'" target="' . $link['target'] . '" class="info">' . $link['title'] . ' </a>';
				}
				if($select_style == "square"){
					$output .= '</div></div>';
				}
				elseif($select_style == "circle"){
					$output .= '</div>';
				}
				$output .='</div>';

				return $output;
			}

	}
