<?php

class Trabajadores extends CI_Model {
	

	function __construct()
	{
		parent::__construct();
	}

	function get_trabajadores()
	{
		$this->load->database();
		$query = $this->db->get('trabajadores');
		return $query->result_array();
	}

	function get_trabajadores_by()
	{
		$this->load->database();
		$this->db->from('trabajadores');
		$this->db->order_by('fecha','desc');
		$query = $this->db->get();
		return $query->result_array();
	}

	function agregar($data)
	{

		$this->load->database();
		$this->db->insert('trabajadores',$data);
		$this->load->view('agregado');
	}

	function eliminar($data)
	{
		$this->load->database();
		if(!is_array($data)) 
		{
			$this->load->helper('form');
			$this->load->model('trabajadores');
			$data['query'] = $this->trabajadores->get_trabajadores();
			$data['mensaje'] = "Debe seleccionar al menos un trabajador.";
			
			$this->load->view('eliminar',$data);
			return;
		}
		foreach ($data as $key => $value) 
		{
			$this->db->where('id',$value);
			$this->db->delete('trabajadores');
		}

		$this->load->view('eliminado');
	}

	function presentes($data)
	{
		$this->load->database();
		if(!is_array($data)) 
		{
			$this->load->helper('form');
			$this->load->model('trabajadores');
			$data['query'] = $this->trabajadores->get_trabajadores();
			$data['mensaje'] = "Debe seleccionar al menos un trabajador.";
			
			$this->load->view('consulta',$data);
			return;
		}
			$this->db->from('trabajadores');
			$where = 'id';
		foreach ($data as $key => $value) 
		{
			if ($key == 0) {
				$where = $where." = $value";
			}
			else
			{
				$where = $where." OR id = $value";
			}

		}
			$this->db->where($where);
			$query = $this->db->get();

		return $query->result_array();
	}

	function act_selected($id,$selected)
	{
		$this->load->database();
		$this->db->where('id',$id);
		$this->db->update('trabajadores',$selected);

	}

	function act($id,$selected)
	{
		$this->load->database();
		$this->db->where('id',$id);
		$this->db->update('trabajadores',$selected);
	}
}

?>