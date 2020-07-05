<?php

	class Register_ctrl extends CI_Controller
	{
		function __construct(){
        	parent::__construct();
        	$this->load->model('Register_mdl');
   		}

   		public function index(){

			$data['users'] = $this->Register_mdl->list();

			//$data['innerdata'] = 'country_read';
			$this->load->view('register',$data);
		}

   		public function store(){

   			$result = $this->Register_mdl->store();
			if ($result) {
				$session_data = array(
					'email' => $result['users_email']
				);

				$data = array('error_message' => 'Email already exists!');
				$this->load->view('register',$data);				
			}
			else{
				$this->Register_mdl->store();
				redirect('user');
			}
   		}
	}
?>