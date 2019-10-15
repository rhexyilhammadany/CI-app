<?php

class Mahasiswa extends CI_Controller
{
	public function index()
	{
		$data['mahasiswa'] = [
			'nama' => 'Rhexy ilham',
			'nrp'  => '173040125',
			'email'=> 'rhexy28@gmail.com',
			'jurusan' => 'Teknik informatika'
		];
		$this->load->view('mahasiswa/index',$data);
	}
}