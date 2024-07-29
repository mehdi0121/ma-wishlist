<?php

class MAL_WISHLIST {

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










	}


	public function init(  ) {






	}



	public function register_activation_hook(  ) {

	}
	public function register_deactivation_hook(  ) {

	}

}


MAL_WISHLIST::instanse();