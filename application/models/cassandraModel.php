<?php
class cassandraModel extends CI_Model {

	function ejecutar($queryCQL)
	{
		echo $queryCQL;
		return var_dump($this->db->db->query($queryCQL));
	}

}