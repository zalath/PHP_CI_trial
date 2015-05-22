<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Example extends MY_Controller {
    public function index()
    {
        /*
        //--basic CI test
        //$this->load->view('welcome_message');
        */

        /*
        //--basic Smarty test
        $text = 'content to show';
        $title = 'title of test';
        $this->ci_smarty->assign('text',$text .' use Smarty'); // 亦可
        //$this->assign('text',$text);
        $this->assign('title',$title);
        $this->ci_smarty->display('test.html'); // 亦可
        //$this->display('test.html');
        */

        /*
        //--basic bootstrap test
        $this->ci_smarty->display('bootstrap.html'); // 亦可
        */

        //--Mysql prototype
        $this->display('Mysql/Mysql.html');
    }
}