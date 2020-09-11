<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Log extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
    }
    
    public function index($log_date = NULL){
        //echo 'Forget me not<br>';
       // print_r(log_message('info','se ingresa dato al log'));
        //var_dump($this->session->userdata('NameUser'));
        $log_date = "2019-02-15";
        $this->load->library('log_library');
        if ($log_date == NULL)
        {
            // default: today
            $log_date = date('Y-m-d');
        }
        $data['cols'] = $this->log_library->get_file('log-'. $log_date . '.php');
        $data['log_date'] = $log_date;
	$this->load->view('log_view', $data);
    }
}