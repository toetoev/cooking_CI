<?php

	class Register_mdl extends CI_Model
	{
		public function list(){
			$this->db->select('*');
			$this->db->from('users');
			$sql = $this->db->get();

			return $sql->result();
		}

		public function store(){
			$name = $this->input->post('name');
			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$data = array(
				'users_name' => $name,
				'users_email' => $email,
				'users_password' => $password
			);

			$result = $this->db->insert('users',$data);
			return $result;
		}
	}
?>