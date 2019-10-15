<?php

class Mahasiswa extends CI_Controller
{
	public function index()
	{
		// $data['mahasiswa'] = [
		// 	[
		// 	'nama' => 'Rhexy ilham',
		// 	'nrp'  => '173040125',
		// 	'email'=> 'rhexy28@gmail.com',
		// 	'jurusan' => 'Teknik informatika'
		//     ],
		//     [
		// 	'nama' => 'Lucas',
		// 	'nrp'  => '173040124',
		// 	'email'=> 'lucas@gmail.com',
		// 	'jurusan' => 'Teknik Pangan'
		//     ]
		// ];

       
		$data ['mahasiswa'] = $this->db->get('mahasiswa')
		->result_array();
		$this->load->view('mahasiswa/index',$data);
	}
}