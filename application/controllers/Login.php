<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	// funcion que se carga automaticamente
	public function index()
	{
		/*utilizamos array para pasar datos de un controlador a una vista es importante recordar 
		que cada clave del array es una variable indepediente en la vista
		*/
		$data = array('titulo' => 'Inicio de Session',
						'encabezado' => 'Bienvenido al Curso de CodeIgniter');

		//Cargar la vista de login y pasamos el array llamado $data
		$this->load->view('login',$data);
	}

	function validar(){

		$usuario = $this->input->post('usuario');
		$clave = $this->input->post('clave');

		//se carga un modelo
		$this->load->model('consultas_model');
		//carga la funcion dentro del modelo
		$existe = $this->consultas_model->validar($usuario,$clave);
		
		/*con este condicional nos aseguramos que nuestra variable $existe no esta vacia, si esta esta
		vaia se niega el acceso*/
		if ($existe) {
			/*Creamos un array asociativo llamado data_user al cual le asignamos a cada clave un elemento
			que pertenece a los datos traidos por el modelo validar y creamos una clave llamada logueado que es 
			con la cual vamos a asegurarnos que el usuario esta logueado en cada una de nuestras paginas */
			$data_user = array(
					'idpersona' => $existe->idpersona,
					'nombre' 	=> $existe->nombre,
					'apellido'	=> $existe->apellido,
					'logueado'	=> TRUE);

			/* cargamos la libreria session, cargamos a su vez la funcion set_userdata y le pasamos nuestro
			array el cual tiene nuestros datos, luego, redireccionamos a la funcion principal*/
			$this->session->set_userdata($data_user);
            redirect('login/principal');
		}else{
			//declarar mensaje de error y luego se redirecciona a la pagina login
			$this->session->set_flashdata('error', 'Ha ocurrido un error, intente de nuevo :(');
			redirect('login','refresh');
		}
		
	}

	function principal(){
		/*Este condicional tiene como fin validar que logueado esta en true, esto certifica
		que esta logueado la persona que desea ingresar a esta funcion*/
		if ($this->session->userdata('logueado')) {
			
			$this->load->view('principal');
			
		}else{
			$this->session->set_flashdata('error', 'Sus datos son incorrectos');
			redirect('login','refresh');
		}
	}

	function cerrarsession(){
		/*generamos un array el cual contenga una clave llamada loqueado y le asignamos un valor FALSE,
		luego le pasamos este array a nuestra libreria session a la funcion set_userdata , generamos un mensaje
		y cargamos el controlados login*/
		$data_user = array('logueado' => FALSE );
		$this->session->set_userdata($data_user);
		$this->session->set_flashdata('fin', 'Session Finalizada');
		redirect('login','refresh');
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */