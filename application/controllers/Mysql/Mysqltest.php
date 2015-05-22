<?php
session_start();
if (! defined('BASEPATH'))
    exit("No direct script access allowed!");

class Mysqltest extends MY_Controller{
    function __construct(){
        parent::__construct();
    }

    function select(){
        $this->load->model('Mysql/Connect','Connect');
        $this->Connect->runCmdDT();
    }
}