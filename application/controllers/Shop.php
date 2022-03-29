<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {

	
	public function shop()
	{
		$this->load->view('Cashierpages/shop');
	}

    
}

?>