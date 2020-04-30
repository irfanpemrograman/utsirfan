<?php 
/**
 * 
 */
class Transaksi_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	function get_transaksi()
	{
		return $this->db->get('transaksi');
	}

	function detail_transaksi($id)
	{
		$this->db->where('id_transaksi', $id);
		return $this->db->get('transaksi');
	}

	function add_transaksi($data)
	{
		return $this->db->insert('transaksi', $data);
	}

	function update_transaksi($id, $data)
	{
		$this->db->where('id_transaksi', $id);
		return $this->db->update('transaksi', $data);
	}

	function delete_transaksi($id)
	{
		$this->db->where('id_transaksi', $id);
		return $this->db->delete('transaksi');
	}
}