<?php
	class Mealdetail_mdl extends CI_Model
	{
		public function list(){
			$this->db->select('*');
			$this->db->from('mealdetails');
			$sql = $this->db->get();

			return $sql->result();
		}

		public function meal(){
			$this->db->select('*');
			$this->db->from('meals');
			$sql = $this->db->get();

			return $sql->result();
		}

		public function ingredient(){
			$this->db->select('*');
			$this->db->from('ingredients');
			$sql = $this->db->get();

			return $sql->result();
		}
		
	}
?>