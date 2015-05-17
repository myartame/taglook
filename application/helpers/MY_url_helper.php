<?php

defined('BASEPATH') OR exit('No direct script access allowed');

if ( ! function_exists('resource_url')){
	function resource_url($type = '', $resource_name = ''){
		return get_instance()->config->base_url('', null) . 'assets/' . $type . '/' . $resource_name;
	}
}

?>