<?php
class Inventory_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_customer_id()
	{
		$this->db->select('customer_value.customer_id');
		$this->db->group_by('customer_value.customer_id');
		$this->db->from('customer_value');
		$this->db->order_by('customer_value.customer_id_field_id','asc');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function get_all_customers($id)
	{
		$this->db->select('customer_value.*');
		$this->db->from('customer_value');
		$this->db->where('customer_id',$id);
		$this->db->order_by('customer_value.customer_id_field_id','asc');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function get_order_id()
	{
		$this->db->select('order_value.order_id');
		$this->db->group_by('order_value.order_id');
		$this->db->from('order_value');
		$this->db->order_by('order_value.order_id_field_id','asc');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function get_all_orders($id)
	{
		$this->db->select('order_value.*');
		$this->db->from('order_value');
		$this->db->where('order_id',$id);
		$this->db->order_by('order_value.order_id_field_id','asc');
		$query = $this->db->get();
		return $query->result_array();
	}
}
?>