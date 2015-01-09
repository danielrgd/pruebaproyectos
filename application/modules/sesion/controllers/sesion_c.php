<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sesion_c extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		
	}
	
    /**
    * Check if the user is logged in, if he's not, 
    * send him to the login page
    * @return void
    */	
	function index()
	{
	
		$data['main_content'] = 'sesion/inicio_sesion_v.php';
        $this->load->view('template', $data);
        
	}
}