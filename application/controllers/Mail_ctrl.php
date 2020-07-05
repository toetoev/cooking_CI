<?php 
class Mail_ctrl extends CI_Controller
{
    public function index()
    {
        $this->load->view('mail');
    }
    public function send()
    {
        $from_email = 'cookingadmin@shwesintoe.me';
        $to_email = $this->input->post('email');
        /*echo "$from_email <br> $to_email";
       die();*/
        
        $this->load->library('email');
        $this->email->from($from_email);
        $this->email->to($to_email);
        $this->email->subject('Cooking Recipe Admin account');
        $this->email->message('Email: admin@gmail.com | Password: 123');
        if($this->email->send())
        {
            redirect('login');
        }
        
    }
    
}

?>
