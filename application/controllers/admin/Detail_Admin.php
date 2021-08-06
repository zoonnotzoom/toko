<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_Admin extends CI_Controller {

	public function detail_barang_admin($id_brg){
		$data['barang'] = $this->model_barang->detail_brg($id_brg);
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('detail_barang', $data);
		$this->load->view('templates/footer');
	}
}
 