<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Example extends MY_Controller {
    public function index()
    {
        //$this->load->view('welcome_message');
        $text = 'content to show';
        $title = 'title of test';
        $this->ci_smarty->assign('text',$text .' use Smarty'); // 亦可
        //$this->assign('text',$text);
        $this->assign('title',$title);
        $this->ci_smarty->display('bootstrap.html'); // 亦可
        //$this->display('test.html');
    }
}