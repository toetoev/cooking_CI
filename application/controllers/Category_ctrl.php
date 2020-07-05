<?php

	class Category_ctrl extends CI_Controller
	{
		function __construct(){
        	parent::__construct();
        	$this->load->model('Category_mdl');
   		}
		
		public function index(){

			$data['categories'] = $this->Category_mdl->list();

			$data['innerdata'] = 'category_read';
			$this->load->view('backendtemplate',$data);
		}

		public function create()
		{
			$data['innerdata'] = 'category_create';
			$this->load->view('backendtemplate', $data);
		}

		public function store()
		{
			//validation('field name', 'error msg', 'trim to cut space')
			$this->form_validation->set_rules('name','Category Name','trim|required|min_length[1]|is_unique[categories.categories_name]');

			if ($this->form_validation->run()==FALSE) {

				$data['innerdata'] = 'category_create';
				$this->load->view('backendtemplate',$data);
			}else{
				$this->Category_mdl->store();
				redirect('category');
			}
		}

		public function detail()
		{
			//url bar mar shi tae //tway ko u(localH ma pr)
			$id = $this->uri->segment(3);
			$data['category'] = $this->Category_mdl->detail($id);
			$data['innerdata'] = 'category_detail';
			$this->load->view('backendtemplate',$data);
		}

		public function delete()
		{
			$id = $this->uri->segment(3);
			$this->Category_mdl->delete($id);

			//return with alert
			$this->session->set_flashdata('success', 'Existing Category is deleted in your data');
			redirect('category');
		}

		public function edit()
		{
			$id = $this->uri->segment(3);
			$data['category'] = $this->Category_mdl->detail($id);
			$data['innerdata'] = 'category_edit';
			$this->load->view('backendtemplate', $data);
		}

		public function update(){
			$this->Category_mdl->update();

			$this->session->set_flashdata('success','Existing Category is <b> update</b> in your date');
			redirect('category');
		}
	}
?>