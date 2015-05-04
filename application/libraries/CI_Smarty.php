<?php
if(!defined('BASEPATH')) EXIT('No direct script asscess allowed');
require_once( APPPATH . 'third_party/Smarty/libs/Smarty.class.php' );

class CI_Smarty extends Smarty {
    protected $ci;
    public function  __construct(){
		parent::__construct();	
        $this->ci = & get_instance();
        $this->ci->load->config('smarty');//加载smarty的配置文件
        //获取相关的配置项
        $this->template_dir   = $this->ci->config->item('template_dir');
        $this->compile_dir    = $this->ci->config->item('compile_dir');
        $this->cache_dir      = $this->ci->config->item('cache_dir');
        $this->config_dir     = $this->ci->config->item('config_dir');
        //$this->template_ext   = $this->ci->config->item('template_ext');
        //smarty may not have this property.error is :Undefined property: Smarty_3_1::$template_ext
        $this->caching        = $this->ci->config->item('caching');
        $this->cache_lifetime = $this->ci->config->item('lefttime');
    }
}