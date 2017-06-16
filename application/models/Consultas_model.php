<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Consultas_model extends CI_Model {

		function validar($usu, $cont){
			/*Utilizamos el activerecord de CodeIgniter para realizar consultas, muchas de las
			sentencias son intuitivas:
			$this->db->get() = este metodo lo que hace es almacenar nuestro resultado por ello se lo asignamos a una variable

			$this->db->row() = este no guarda los datos del resultado como el get() sino que nos garantiza
			que el resultado arrojo mas de una fila garantizando asi que existe alguien cn los datos solicitados,
			luego le asignamos este row() a una variable y la retornamos
			 */
			$this->db->select('*');
			$this->db->from('persona');
			$this->db->where('cedula', $usu); 
			$this->db->where('clave', $cont);
			$query = $this->db->get();
			$result = $query->row();
			return $result;

			/*select * from persona where cedula = $usu and clave = $cont*/
		}

	

}

/* End of file Consultas_model.php */
/* Location: ./application/models/Consultas_model.php */