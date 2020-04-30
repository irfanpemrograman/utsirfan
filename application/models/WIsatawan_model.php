<?php 
/**
 * 
 */
class Wisatawan_model extends CI_Model
{
	
	function __construct()
	{
		$this->load->database();
	}

	function get_wisatawan()
	{
		return $this->db->get('wisatawan');
	}

	function detail_wisatawan($id)
	{
		$this->db->where('id_wisatawan', $id);
		return $this->db->get('wisatawan');
	}

	function add_wisatawan($data)
	{
		return $this->db->insert('wisatawan', $data);
	}

	function update_wisatawan($id, $data)
	{
		$this->db->where('id_wisatawan', $id);
		return $this->db->update('wisatawan', $data);
	}

	function delete_wisatawan($id)
	{
		$this->db->where('id_wisatawan', $id);
		return $this->db->delete('wisatawan');
	}
}