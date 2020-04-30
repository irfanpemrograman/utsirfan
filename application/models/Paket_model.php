<?php
/**
 * 
 */
class Paket_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	function get_paket()
	{
		return $this->db->get('paket');
	}

	function detail_paket($id)
	{
		$this->db->where('id_paket', $id);
		return $this->db->get('paket');
	}

	function add_paket($data)
	{
		return $this->db->insert('paket', $data);
	}

	function update_paket($id, $data)
	{
		$this->db->where('id_paket', $id);
		return $this->db->update('paket', $data);
	}

	function delete_paket($id)
	{
		$this->db->where('id_paket', $id);
		return $this->db->delete('paket');
	}
}