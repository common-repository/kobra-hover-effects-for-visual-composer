<?php
/**
 * @package BaweElementor
 */
namespace Khe\Base;

class Deactivate {
	public static function deactivate() {
		flush_rewrite_rules();
	}
}