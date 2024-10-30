<?php
/**
 * @package BaweElementor
 */

namespace Khe\Base;

class Activate {
	public static function activate() {
		flush_rewrite_rules();
	}
}