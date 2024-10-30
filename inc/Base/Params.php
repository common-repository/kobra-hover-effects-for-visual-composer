<?php
/**
 * @package  Kob_Hov
 */
namespace Khe\Base;

use Khe\Params\Number;
//use Khe\Params\Slider;
use Khe\Params\SwitchParam;

class Params {
	public $switchparams;

	public function register() {
		new Number();
		//new Slider();
		new SwitchParam();
	}
}