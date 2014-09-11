<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class eliminar extends CI_Controller {

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
		$this->load->view('eliminar',$data);
	}

	function elimina()
	{
		$data = $this->input->post('del');
		
		$this->load->model('trabajadores');
		$this->trabajadores->eliminar($data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */