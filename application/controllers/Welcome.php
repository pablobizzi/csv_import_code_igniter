<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct() {
		parent::__construct();
		$this->load->model('Test_model');
		$this->load->library('csvimport');
	}

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function import() {

		$data['error'] = '';

		$image_path = realpath(APPPATH . '../images');
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'csv';
		$config['max_size'] = '10000';
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('csvfile')) {
			$data['error'] = $this->upload->display_errors();
			$this->load->view('home/index', $data);
		} else {
			$file_data = $this->upload->data();
			$file_path =  './uploads/'.$file_data['file_name'];

			$csv_array = $this->csvimport->get_array($file_path);
			if($csv_array) {

				foreach ($csv_array as $row) {
					$array = explode(";", $row["Code_commune_INSEE;Nom_commune;Code_postal;Libelle_acheminement;Ligne_5"]);
					$insert_data = array(
						'Code_commune_INSEE' => $array[0],
						'Nom_commune' => $array[1],
						'Code_postal' => $array[2],
						'Libelle_acheminement' => $array[3],
						'Ligne_5' => $array[4]
						);

					$this->Test_model->insert_csv($insert_data);
				}

				$this->session->set_flashdata('success', 'Dados importados com sucesso!');
				redirect();
			} else
			$data['error'] = "Ocorreu um erro, desculpe!";
			$this->load->view('home/index', $data);
		}
	}
}
