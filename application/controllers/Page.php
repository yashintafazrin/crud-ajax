<?php
 
 class Page extends CI_Controller {
     function __construct(){
         parent::__construct();

         $this->load->model('My_model','m');
         $this->load->helper('form');
         $this->load->helper('url');
     }

     public function index(){
         $data['title']="CRUD CI-AJAX";
         $this->load->view('V_data_petugas',$data);

     }

     public function ambildata(){
    
        $dataMasyarakat = $this->m->get_masyarakat();
        echo json_encode($dataMasyarakat);

    }
 }