<?php
/*
 * @package Kobra_Hover
 */
namespace Khe\Params;

class Number {

	public function __construct()
	{
		if(defined('WPB_VC_VERSION') && version_compare(WPB_VC_VERSION, 4.8) >= 0) {
			if(function_exists('vc_add_shortcode_param'))
			{
				vc_add_shortcode_param('number' , array(&$this, 'Kobra_number_settings_field' ));
			}
		}
		else {
			if(function_exists('add_shortcode_param'))
			{
				add_shortcode_param('number' , array(&$this, 'Kobra_number_settings_field' ));
			}
		}
	}

	public function Kobra_number_settings_field($settings, $value)
	{
		$dependency = '';
		$param_name = isset($settings['param_name']) ? $settings['param_name'] : '';
		$type = isset($settings['type']) ? $settings['type'] : '';
		$min = isset($settings['min']) ? $settings['min'] : '';
		$max = isset($settings['max']) ? $settings['max'] : '';
		$step = isset($settings['step']) ? $settings['step'] : '';
		$suffix = isset($settings['suffix']) ? $settings['suffix'] : '';
		$class = isset($settings['class']) ? $settings['class'] : '';
		$output = '<input type="number" min="'.$min.'" max="'.$max.'" step="'.$step.'" class="wpb_vc_param_value ' . $param_name . ' ' . $type . ' ' . $class . '" name="' . $param_name . '" value="'.$value.'" style="max-width:120px; margin-right: 10px;" />'.$suffix;
		return $output;
	}
}
