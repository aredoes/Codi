<?php if(!defined('BASEPATH')) exit ('No direct script access allowed.');

class pelajaran extends CI_Model
{

public function viewPelajaran()
{
	$this->db->order_by('id_pelajaran','ASC');
	$query=$this->db->get('pelajaran');
	return $query->result();
}

public function viewPelajaranById($id_pelajaran)
{
	$this->db->select('nama_pelajaran');
	$this->db->where('id_pelajaran',$id_pelajaran);	
	$query=$this->db->get('pelajaran');
	return $query->result();
}
}
?>