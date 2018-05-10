<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rd_easy_php {

	public $return_data = "";

    public function __construct()
    {
		$data = '';
		$file = ee()->TMPL->fetch_param('file');

		if (!empty($file) && file_exists($file)) {
			$template_vars = ee()->TMPL->tagparams;

			$data = require_once($file);
		}

		$this->return_data = $data;
    }
}

/* End of file pi.plugin_name.php */
/* Location: ./system/user/addons/rd_easy_php/pi.rd_easy_php.php */

//Parameters are accessible via $template_vars['parameter_name']