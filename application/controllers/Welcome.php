<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function hello()
	{
		$data["name"] = "Mg Mg";
		$data["dob"] = "5.11.1999";
		$data["address"] = "Yangon";
		$data["color"] = "red";
		$this->load->view('hello',$data);
	}

	public function gethello($name, $dob, $address, $color)
	{
		$data["name"] = $name;
		$data["dob"] = $dob;
		$data["address"] = $address;
		$data["color"] = $color;

		$this->load->view('hello',$data);
	}

	public function template()
	{
		$this->load->view('backendtemplate');
	}
}
