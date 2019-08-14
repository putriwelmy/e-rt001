<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Detail_pengumuman extends CI_Controller {


	function __construct(){
		parent::__construct();
	}

	public function index($id)
	{
		
		$id_pengumuman=$id;
		$this->db->where('id_pengumuman',$id_pengumuman);
		$data['detail_pengumuman']=$this->db->get('pengumuman')->row();
		//var_dump($data);exit();
		$this -> load -> view ('user/v_detail_pengumuman',$data);
		
	}
	
	
		
}