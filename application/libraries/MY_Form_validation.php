<?php
////How to get callbacks to work: https://forum.codeigniter.com/thread-64657.html
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Form_validation extends CI_Form_validation
{
	
	public $CI;
    public function run($module = '', $group = '')
    {
        (is_object($module)) AND $this->CI =&$module;

        return parent::run($group);
    }

} 