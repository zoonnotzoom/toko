<?php defined('BASEPATH') OR exit ('No direct script access allowed');

class Pagination extends CI_Controller {

     public function __construct()
     {
          parent::__construct();
          $this->load->model('pagination_model');
     }
     public function index()
     {
          $data['semua_pengguna'] = $this->pagination_model->getAll()->result();

          $this->load->view('pagination', $data);
     }

}