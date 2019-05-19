<?php 

class About extends Controller{
	public function index($nama = 'Hendra',$pekerjaan = 'Programmer', $umur = 25)
	{
		$data['nama'] = $nama;
		$data['pekerjaan'] = $pekerjaan;
		$data['umur'] = $umur;
		$data['judul'] = "About";
		$this->view('templates/header', $data);
		$this->view('about/index', $data);
		$this->view('templates/footer');
	}


	public function page()
	{
		$this->view('templates/header');
		$this->view('about/page');
		$this->view('templates/footer');
	}
}