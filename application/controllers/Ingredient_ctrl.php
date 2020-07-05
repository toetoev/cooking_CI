<?php

	class Ingredient_ctrl extends CI_Controller
	{
		function __construct(){
        	parent::__construct();
        	$this->load->model('Ingredient_mdl');
   		}

		public function index(){

			$data['ingredients'] = $this->Ingredient_mdl->list();

			$data['innerdata'] = 'ingredient_read';
			$this->load->view('backendtemplate',$data);
		}

		public function create()
		{
			$data['innerdata'] = 'ingredient_create';
			$this->load->view('backendtemplate', $data);
		}

		public function store()
		{
			//validation('field name', 'error msg', 'trim to cut space')
			$this->form_validation->set_rules('name','Ingredient Name','trim|required|min_length[1]|is_unique[ingredients.ingredients_name]');

			if ($this->form_validation->run()==FALSE) {

				$data['innerdata'] = 'ingredient_create';
				$this->load->view('backendtemplate',$data);
			}else{
				$result = $this->Ingredient_mdl->store();
				if ($result) {
					$this->session->set_flashdata('success', "New Ingredient is added in your data.");
				}
				redirect('ingredient');
			}
		}

		public function detail()
		{
			
			$id = $this->uri->segment(3);
			$data['ingredient'] = $this->Ingredient_mdl->detail($id);
			$data['innerdata'] = 'ingredient_detail';
			$this->load->view('backendtemplate',$data);
		}

		public function delete()
		{
			$id = $this->uri->segment(3);
			$this->Ingredient_mdl->delete($id);

			$this->session->set_flashdata('success', 'Existing Ingredient is deleted in your data');
			redirect('ingredient');
		}

		public function edit()
		{
			$id = $this->uri->segment(3);
			$data['ingredient'] = $this->Ingredient_mdl->detail($id);
			$data['innerdata'] = 'ingredient_edit';
			$this->load->view('backendtemplate', $data);
		}

		public function update(){
			$this->Ingredient_mdl->update();

			$this->session->set_flashdata('success','Existing Ingredient is <b> update</b> in your date');
				redirect('ingredient');
		}
	}
?>