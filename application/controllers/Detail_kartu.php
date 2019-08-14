<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_kartu extends CI_Controller {


	function __construct(){
		parent::__construct();
	}

	public function index($id)
	{
		
		$id_kk=$id;
		$this->db->where('id_kk',$id_kk);
		$data['detail_kk']=$this->db->get('kartu_keluarga')->row();
		//var_dump($data);exit();
		$this->db->order_by('kk_urutan','ASC');
		$this->db->where('anggota_keluarga.id_kk',$id_kk);
		$data['anggota_keluarga']=$this->db->get('anggota_keluarga')->result();
		$this -> load -> view ('user/v_detail_kk',$data);
		
	}
	
	
		
}