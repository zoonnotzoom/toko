<?php

class Model_kategori extends CI_Model
{
	public function data_buku(){
		return $this->db->get_where("tb_barang",array('kategori' => 'Buku' ));
	}
	public function data_alattuliskantor(){
		return $this->db->get_where("tb_barang",array('kategori' => 'Alat Tulis Kantor' ));
	}
	public function data_tentangkami(){
		return $this->db->get_where("tb_barang",array('kategori' => 'tentangkami' ));
	}
	public function data_faq(){
		return $this->db->get_where("tb_barang",array('kategori' => 'faq' ));
	}
	public function data_promo(){
		return $this->db->get_where("tb_barang",array('kategori' => 'promo' ));
	}
}