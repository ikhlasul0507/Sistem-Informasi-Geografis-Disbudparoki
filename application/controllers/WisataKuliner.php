<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WisataKuliner extends CI_Controller {

	public function index()
	{
		$data['title']= "Destinasi Wisata Kuliner";
		$data['wisata'] = $this->Model_user->Allwisata();
		$data['sarana'] = $this->Model_user->Allsarana();
		$data['media'] = $this->Model_user->Allmedia();
		$data['budaya'] = $this->Model_user->Allbudaya();
		$data['data_wstg']= $this->Model_user->listwstg();
		$data['data_srng']= $this->Model_user->listsrng();
		$data['data_brtg']= $this->Model_user->listbrtg();
		$data['data_wstk']= $this->Model_user->listwstk();
		$data['data_kec']= $this->Model_user->listkec();
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$this->load->view('users/temp/header',$data);
		$this->load->view('users/temp/head',$data);
		$this->load->view('users/destinasi/WisataKuliner');
		$this->load->view('users/temp/foot',$data);
		$this->load->view('users/temp/footer');
	}
	public function detail($id_master_wisata)
	{
		$data['title']= "Destinasi Wisata Kuliner";
		$data['wisata'] = $this->Model_user->Allwisata();
		$data['sarana'] = $this->Model_user->Allsarana();
		$data['media'] = $this->Model_user->Allmedia();
		$data['budaya'] = $this->Model_user->Allbudaya();
		$data['data_wstg']= $this->Model_user->listwstg();
		$data['data_srng']= $this->Model_user->listsrng();
		$data['data_brtg']= $this->Model_user->listbrtg();
		$data['dwisata'] = $this->Model_user->getAllwisata($id_master_wisata);
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$this->load->view('users/temp/header',$data);
		$this->load->view('users/temp/head',$data);
		$this->load->view('users/destinasi/Detail',$data);
		$this->load->view('users/temp/foot',$data);
		$this->load->view('users/temp/footer');
	}
	public function cari()
	{
		
		$data['title']= "Destinasi Wisata Kuliner";
		//ambil data dari post
		$cari = $this->input->post('cari');

		$data['wisata'] = $this->Model_user->Allwisata();
		$data['sarana'] = $this->Model_user->Allsarana();
		$data['media'] = $this->Model_user->Allmedia();
		$data['budaya'] = $this->Model_user->Allbudaya();
		$data['data_wstg']= $this->Model_user->listwstg();
		$data['data_srng']= $this->Model_user->listsrng();
		$data['data_brtg']= $this->Model_user->listbrtg();
		$data['data_kec']= $this->Model_user->listkec();
		$data['data_wcari'] = $this->Model_user->cariAllwisataKuliner($cari);
		$data['peta'] = $this->db->get('tbl_peta')->row_array();
		$this->load->view('users/temp/header',$data);
		$this->load->view('users/temp/head',$data);
		$this->load->view('users/destinasi/WisataKulinerCari',$data);
		$this->load->view('users/temp/foot',$data);
		$this->load->view('users/temp/footer');
	}
}
