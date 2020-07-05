<?php

	class User_mdl extends CI_Model
	{
		public function list(){
			$this->db->select('*');
			$this->db->from('meals');
			$sql = $this->db->get();

			return $sql->result();
		}

		public function detail($id)
		{
			$this->db->select('*');
			$this->db->from('meals');
			$this->db->join('categories', 'categories.categories_id = meals. meals_categoryid');
			$this->db->join('countries', 'countries.countries_id = meals.meals_countryid');
			$this->db->where('meals_id',$id);
			$sql = $this->db->get();
			return $sql->row_array();
		}
	}
?>