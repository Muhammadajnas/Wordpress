<?php
declare(strict_types = 1);
if (!defined('ABSPATH')) exit;
// Dummy WP classes.
if ( ! class_exists( \WP_Theme_JSON::class ) ) {
 class WP_Theme_JSON {
 public function get_data() {
 return array();
 }
 public function get_settings() {
 return array();
 }
 }
}
