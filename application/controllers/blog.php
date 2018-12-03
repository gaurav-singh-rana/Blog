<?php
/**
* 
*/
class Blog extends CI_Controller
{
	
	public function index()
	{ 
	  $this->load->model('authenticate','grv');
	    $data = $this->grv->getData();

	    print_r($data);

		$this->load->view('blog_index');
	}
	public function add()
	{
		echo "Add function of Blog Control";
	}
}



?>