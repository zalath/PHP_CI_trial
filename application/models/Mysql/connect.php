<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Connect extends CI_Model {
    function __construct(){
        parent::__construct();
        $this->load->DATABASE('Mysqltest');
    }

    function runCmdNQ($cmd){
        if(!mysql_query($cmd)){
            die("fail to execute the cmd :". $cmd . "\n with the error :" . mysql_error);
        }
    }
    function runCmdDT(){
        $resultDT = mysql_query('select * from User');
        if($resultDT != null){
            while($row = mysql_fetch_array($resultDT)){
                echo $row['id']. "  " . $row['name'] . " " . $row['age'] . "<br>";
            }
        }
    }
}