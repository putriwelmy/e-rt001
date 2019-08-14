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

		$this -> load -> view ('user/home',$data);
		
	}
	
	
		
}