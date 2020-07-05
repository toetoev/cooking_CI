<?php

	class Country_ctrl extends CI_Controller
	{
		function __construct(){
        	parent::__construct();
        	$this->load->model('Country_mdl');
   		}

		public function index(){

			$data['countries'] = $this->Country_mdl->list();

			$data['innerdata'] = 'country_read';
			$this->load->view('backendtemplate',$data);
		}

		public function create()
		{
			$data['innerdata'] = 'country_create';
			$this->load->view('backendtemplate', $data);
		}

		public function store()
		{
			//validation('field name', 'error msg', 'trim to cut space')
			$this->form_validation->set_rules('name','Country Name','trim|required|min_length[1]|is_unique[countries.countries_name]');

			if ($this->form_validation->run()==FALSE) {

				$data['innerdata'] = 'country_create';
				$this->load->view('backendtemplate',$data);
			}else{
				$result = $this->Country_mdl->store();
				if ($result) {
					$this->session->set_flashdata('success', "New Country is added in your data.");
				}
				redirect('country');
			}
		}

		public function detail()
		{
			
			$id = $this->uri->segment(3);
			$data['country'] = $this->Country_mdl->detail($id);
			$data['innerdata'] = 'country_detail';
			$this->load->view('backendtemplate',$data);
		}

		public function delete()
		{
			$id = $this->uri->segment(3);
			$this->Country_mdl->delete($id);

			$this->session->set_flashdata('success', 'Existing Country is deleted in your data');
			redirect('country');
		}

		public function edit()
		{
			$id = $this->uri->segment(3);
			$data['country'] = $this->Country_mdl->detail($id);
			$data['innerdata'] = 'country_edit';
			$this->load->view('backendtemplate', $data);
		}

		public function update(){
			$this->Country_mdl->update();

			$this->session->set_flashdata('success','Existing Country is <b> update</b> in your date');
				redirect('country');
		}
	}
?>