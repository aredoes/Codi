<?php if(!defined('BASEPATH')) exit ('No direct script access allowed.');

class soal extends CI_Model
{

public function viewSoal($id_pelajaran)
{
	$this->db->where('id_pelajaran',$id_pelajaran);
	$query=$this->db->get('soal');
	return $query->result();
}

}
?>