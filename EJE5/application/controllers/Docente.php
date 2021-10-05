<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Docente extends CI_Controller
{

	function __construct()
	{
		// this is your constructor
		parent::__construct();
		$this->load->helper('form');
		$this->load->helper('url');
	}
	public function index()
	{
		$this->load->model("Docente_model");
		$filas = $this->Docente_model->docentes();
		$data['docentes'] = $filas;
		$this->load->view("welcome_message.php", $data);
	}
	public function add()
	{
		$this->load->model("Docente_model");
		//compruebo si se a enviado submit


		//llamo al metodo add
		$add = $this->Docente_model->add(
			$this->input->post("email"),
			$this->input->post("ci"),
			$this->input->post("nombre"),
			$this->input->post("carrera"),
			$this->input->post("passw"),
			$this->input->post("departa"),
			$this->input->post("fecha_nac")


		);


		//redirecciono la pagina a la url por defecto
		redirect("http://localhost/examenmulticode/", 'refresh');
	}

	public function mod($id_usuario)
	{
		
		$this->load->model("Docente_model");
		$filas = $this->Docente_model->mod($id_usuario);
		$data['mod'] = $filas;
		$data['asd']= "asdad";
		$this->load->view("modificar_view", $data);

		if ($this->input->post("submit")) {
			$mod = $this->Docente_model->mod(
				$id_usuario,
				$this->input->post("submit"),
				$this->input->post("email"),
				$this->input->post("ci"),
				$this->input->post("nombre"),
				$this->input->post("carrera"),
				$this->input->post("passw"),
				$this->input->post("departa"),
				$this->input->post("fecha_nac")
			);
			if ($mod) {
				redirect("http://localhost/examenmulticode/");
			} else{
				redirect("http://localhost/examenmulticode/indexphp/Docente/".$id_usuario);
			}
			
		}
		
	}
	public function eli($id_usuario)
	{
		$this->load->model("Docente_model");
		$this->Docente_model->elim($id_usuario);
		redirect("http://localhost/examenmulticode/");
	}
}
