<?php
class Users extends CI_Controller 
{
  public function index()
  {
  	/*$this->load->library('form_validation');
  	$this->form_validation->fd();*/
  	//$this->load->model('usermodel');
  	$data['users'] = $this->usermodel->getUsers();
  $this->load->view('user_list',$data);
  }

}