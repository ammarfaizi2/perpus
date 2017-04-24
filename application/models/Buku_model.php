<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Buku_model extends CI_Model {


	//query pengambilan semua data
	public function getAllData($table)
	{
		return $this->db->get($table);
	}
	//menghapus data dalam tabel
	function deleteData($table,$data)
	{
		$this->db->delete($table, $data);
	}
	function deletedetData($table,$col,$id_det_buku)
	{
		$this->db->where($col,$id_det_buku);
		$aks=$this->db->delete($table);
		return $aks;
	}

	//memasukan data - insert
	function insertData($table,$data)
	{
		$this->db->insert($table,$data);
	}

	//query untuk mengambil detail by id
	function get_detail($table,$id_table,$id) {
		$query = $this->db->get_where($table, array($id_table => $id));
		return $query;
	}
	function get_detail12($table,$col1,$col2,$id,$tgl) {
		$query = $this->db->get_where($table, array($col1 => $id,
						$col2=>$tgl));
		return $query;
	}
	function get_detail1($table,$id_table,$id) {
		$this->db->where($id_table,$id);
		$query = $this->db->get($table);
		$isi=$query->row_array();
		return $isi;
	}
	function get_detail123($table,$id_table,$id) {
		$this->db->where($id_table,$id);
	return $this->db->get($table);
	}

	function updateData1($table,$data,$field,$id)
	{
		$this->db->where($field,$id);
		$this->db->update($table,$data);
	}	

	function updateData($table,$data,$field,$key)
	{
		$this->db->where($key,$field);
		$this->db->update($table,$data);
	}	


	public function get_stok($id_buku){
		$query =$this->db->where('id_buku', $id_buku)
						->limit(1)
						->get('tb_buku');
      	if ($query->num_rows() > 0){
			return $query->row();
		} else {
			return array();
		
		}
	}
	function Delete($table,$field,$id)
	{
		$this->db->where($field,$id);
		$this->db->delete($table);
	}	

	//*last edited 10 April 2017
	//batch insert
	function insertData_batch($table,$data)
	{
		$this->db->insert_batch($table,$data);
	}

	public function countRow($status,$id_buku){
		$query = $this->db->query("SELECT status FROM tb_detail_buku WHERE status='".$status."' AND id_buku='".$id_buku."'");
		echo $query->num_rows();
	}

	public function countRow_pinjam($status,$id_pinjam){
		$query = $this->db->query("SELECT status FROM tb_detail_pinjam WHERE status='".$status."' AND id_pinjam='".$id_pinjam."'");
		$query->num_rows();
	}

	public function update_status($table,$data,$field1,$key1, $field2, $key2)
	{
		$this->db->where($field1,$key1);
		$this->db->where($field2,$key2);
		$this->db->update($table,$data);
	}	

	public function update_status2($no_buku, $id_buku, $data)
	{
		$this->db->where('no_buku',$no_buku);
		$this->db->where('id_buku',$id_buku);
		$this->db->update('tb_detail_buku',$data);
	}	

	function get_detail2($table,$id_table, $id) {
		$this->db->where($id_table,$id);
		$this->db->where('status','1');
		$query = $this->db->get($table);
		return $query;
	}

	public function get_total($id_pinjam){
		$query =$this->db->where('id_pinjam', $id_pinjam)
						->limit(1)
						->get('tb_pinjam');
      	if ($query->num_rows() > 0){
			return $query->row();
		} else {
			return array();
		
		}
	}
}

/* End of file Perpus_model.php */
/* Location: ./application/models/Perpus_model.php */