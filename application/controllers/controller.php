<?php if(!defined('BASEPATH')) exit ('No direct script access allowed.');

class controller extends CI_Controller
{

public function index()
{
	$data['query'] = $this->pelajaran->viewPelajaran();
	$this->load->view('index', $data);
}

public function viewSoal($id_pelajaran)
{
	$data['query'] = $this->soal->viewSoal($id_pelajaran);
	$data['id_pelajaran'] = $id_pelajaran;
	$data['nama_pelajaran'] = $this->pelajaran->viewPelajaranById($id_pelajaran);
	$this->load->view('viewSoal',$data);
}

public function viewNilai($id_pelajaran)
{
	$data = $this->soal->viewSoal($id_pelajaran);
	$i = 0;
	$jumlahSoal = 0;
	foreach($data as $row)
	{
		$jumlahSoal++;
		if($row->jawaban == $this->input->post($row->id_soal)) $i++; 
	}
	$data['nilai'] = $i/$jumlahSoal*100;
	$this->load->view('viewNilai',$data);
}

}
?>