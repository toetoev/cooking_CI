<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');

	Class User_ctrl extends CI_Controller{

		function __construct(){
        	parent::__construct();
        	$this->load->model('User_mdl');
   		}

		public function index(){

			$data['meals'] = $this->User_mdl->list();
			$data['innerdata'] = 'userview';
			$this->load->view('userview',$data);
			//$this->load->view('userview');
		}

		public function detail()
		{
			$id = $this->uri->segment(3);
			$data['meals'] = $this->User_mdl->detail($id);
			$data['innerdata'] = 'user_mealdetail';
			$this->load->view('user_mealdetail',$data);
		}

	}
?>