<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class consulta extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('form');
		$this->load->model('trabajadores');
		$data['query'] = $this->trabajadores->get_trabajadores();
		if(!count($data['query'])){$this->load->view('sinusuarios');}
		$this->load->view('consulta',$data);
	}

	function presentes()
	{
		$this->load->helper('date');
		$data = $this->input->post('pres');
		$precio = $this->input->post('precio');
		$this->load->model('trabajadores');
		$data = $this->trabajadores->presentes($data);

		$presentes = count($data);
		$min_var = $data[0]['comprados'] - $data[0]['tomados'];
		$sel_id = $data[0]['id'];
		$in = 0;
		foreach ($data as $key => $value) {
			if($value['comprados']-$value['tomados'] <= $min_var)
			{
				$min_var = $value['comprados']-$value['tomados'];
				$sel_id = $value['id'];
				$in = $key;
			}
		}

		$selected = array(	'comprados' => ($presentes*$precio) + $data[$in]['comprados'],
							'tomados'=> $precio + $data[$in]['tomados'],
							'cant_comprados' => $presentes + $data[$in]['cant_comprados'],
							'cant_tomados' => $data[$in]['cant_tomados'] +1,
							'fecha' => now()
						);

		$this->trabajadores->act_selected($sel_id,$selected);

		foreach ($data as $key => $value) {
			if($key != $in)
			{
				$aux = array(	'comprados' => $value['comprados'],
								'tomados' => $precio + $value['tomados'],
								'cant_comprados' => $value['cant_comprados'], 
								'cant_tomados' => $value['cant_tomados'] +1
					);
				$this->trabajadores->act($value['id'],$aux);
			}
		}

		$data['mensaje'] = "El trabajador elegido es ".$data[$in]['nombre']." ".$data[$in]['apellido'];
		$data['query'] = $this->trabajadores->get_trabajadores_by();
		$this->load->view('registros',$data);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */