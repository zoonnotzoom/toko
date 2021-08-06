<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {

	public function buku()
	{
		$data['buku'] = $this->model_kategori->data_buku()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('buku', $data);
		$this->load->view('templates/footer');
	}

	public function alattuliskantor()
	{
		$data['alattuliskantor'] = $this->model_kategori->data_alattuliskantor()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('alattuliskantor', $data);
		$this->load->view('templates/footer');
	}

	public function tentangkami()
	{
		$data['tentangkami'] = $this->model_kategori->data_tentangkami()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('tentangkami', $data);
		$this->load->view('templates/footer');
	}

	public function faq()
	{
		$data['faq'] = $this->model_kategori->data_faq()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('faq', $data);
		$this->load->view('templates/footer');
	}

	public function promo()
	{
		$data['promo'] = $this->model_kategori->data_promo()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('promo', $data);
		$this->load->view('templates/footer');
	}
}