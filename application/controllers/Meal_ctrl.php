<?php
	class Meal_ctrl extends CI_Controller
	{
		function __construct(){
        	parent::__construct();
        	$this->load->model('Meal_mdl');
   		}

   		public function index()
   		{

			$data['meals'] = $this->Meal_mdl->list();

			$data['innerdata'] = 'meal_read';
			$this->load->view('backendtemplate',$data);
		}

		public function create()
		{
			$data['categories'] = $this->Meal_mdl->category();
			$data['countries'] = $this->Meal_mdl->country();
			$data['ingredients'] = $this->Ingredient_mdl->list();

			$data['innerdata'] = 'meal_create';
			$this->load->view('backendtemplate', $data);
		}

		public function store()
		{
			// Validation
			$this->form_validation->set_rules('name', 'Meal Name', 'trim|required|min_length[2]|is_unique[meals.meals_name]');

			if($this->form_validation->run() == FALSE) 
				{
					$data['categories'] = $this->Category_mdl->list();
					$data['countries'] = $this->Country_mdl->list();
					$data['ingredients'] = $this->Ingredient_mdl->list();

					$data['innerdata'] = 'meal_create';
					$this->load->view('backendtemplate',$data);	
				}

			else
			{
				$result = $this->Meal_mdl->store();
				if($result){
					$this->session->set_flashdata('success', "New Meal is added in your data.");
				}

				redirect('meal');
			}
		}

		public function detail()
		{
			$id = $this->uri->segment(3);
			$data['meal'] = $this->Meal_mdl->detail($id);
			$data['innerdata'] = 'meal_detail';
			$this->load->view('backendtemplate',$data);
		}

		public function delete()
		{
			$id = $this->uri->segment(3);
			$this->Meal_mdl->delete($id);

			$this->session->set_flashdata('success', 'Existing Meal is deleted in your data');
			redirect('meal');
		}

		public function edit()
		{
			$id = $this->uri->segment(3);
			$data['meal'] = $this->Meal_mdl->detail($id);
			$data['categories'] = $this->Meal_mdl->category();
			$data['countries'] = $this->Meal_mdl->country();
			$data['ingredients'] = $this->Ingredient_mdl->list();

			$data['innerdata'] = 'meal_edit';
			$this->load->view('backendtemplate', $data);
		}

		public function update(){
			$this->Meal_mdl->update();

			$this->session->set_flashdata('success','Existing Meal is <b> update</b> in your date');
			redirect('meal');
		}

	}
?>