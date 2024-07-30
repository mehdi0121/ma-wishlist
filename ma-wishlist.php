<?php

class MA_WISHLIST {

	public static $_instance = null;


	public function __construct() {


	}

	public static function instanse() {

		if(is_null(self::$_instance)){
			self::$_instance=new self();
		}

		return self::$_instance;
	}


	public function consts(  ) {

		if(!function_exists('get_plugin_data')){
			require_once ABSPATH."wp-admin/includes/plugin.php";
		}

		define('MAW_BASE_FILE',__FILE__);
		define('MAW_PATH',trailingslashit(plugin_dir_path(MAW_BASE_FILE)));
		define('MAW_URL',trailingslashit(plugin_dir_url(MAW_BASE_FILE)));









	}


	public function init(  ) {






	}



	public function register_activation_hook(  ) {

	}
	public function register_deactivation_hook(  ) {

	}

}


MA_WISHLIST::instanse();