<?php
class CQL extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('cassandraModel');
	}
	
	public function index()
	{
		$this->load->view('formConsulta');
	}
	
	public function ejecutar()
	{
		$consulta = $this->input->post('consulta');
		
		//TODO ejecutar CQl
		$resultado['res'] = $this->cassandraModel->ejecutar($consulta);
		
		//TODO cargar resultados en vista
		$this->load->view('formConsulta', $resultado);
	}
}