<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {


	function __construct(){
		parent::__construct();
	}

	public function index()
	{
			$data['kk']=$this->db->get('kartu_keluarga')->result();
			$data['keuangan']=$this->db->get('uang_bulanan')->result();
			
			$this->db->order_by('tgl_posting','ASC');
			$data['pengumuman']=$this->db->get('pengumuman')->result();

			$data['galeri'] = $this->db->get('kategori_galeri')->result();

			$this->db->order_by('id_kategori','random');
			$this->db->join('kategori_galeri','kategori_galeri.id_kategori=detail_kategori.id_kategori');
			$data['poto_galeri'] = $this->db->get('detail_kategori')->result();

			$this->db->limit('1');
			$this->db->order_by('id_detail','ASC');
			$data['poto_aktif'] = $this->db->get('detail_kategori')->row();

			// var_dump($data['poto_aktif']); die();

		$this->load->view ('user/home',$data);
		
	}
	
	
		
}