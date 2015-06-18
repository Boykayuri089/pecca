<?php

class Inventory extends CI_Controller 
{
	public function __construct()
	{ 
		parent::__construct();
		$this->load->model('admin_model');	
		$this->load->model('inventory_model');	
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	
	public function chk_login()
	{						
		if(!$this->session->userdata('user_id'))
		{
			$data['errors'] = 'Please login first to view further details.';
			$this->session->set_flashdata('errors', $data['errors']);
			redirect('/inventory/', 'refresh');				
		}				
	}
		
	public function index()
	{
		$this->chk_login();
		$data['fields']=$this->admin_model->get_pro_fields();
		$data['title']='Inventory';
		
		$data['pro_ids']=$this->admin_model->get_product_id(); // getting each product
		foreach($data['pro_ids'] as $k => $row)
		{
			$data['products'][$k]=$this->admin_model->get_all_products($data['pro_ids'][$k]['product_id']);
		}
		$this->load->view('inventory', $data);
	}
	public function customer_management()
	{
		$this->chk_login();
		$data['fields']=$this->admin_model->get_customer_fields();
		$data['cust_ids']=$this->inventory_model->get_customer_id(); // getting each customer
		foreach ($data['cust_ids'] as $k => $row)
		{
			$data['customers'][$k]=$this->inventory_model->get_all_customers($data['cust_ids'][$k]['customer_id']);
		}
		//prx($data);
		$data['title']='Customer';
		$this->load->view('customer', $data);
	}
	
	public function order_management()
	{
		$this->chk_login();
		$data['fields']=$this->admin_model->get_order_fields();
		$data['order_ids']=$this->inventory_model->get_order_id();
		foreach ($data['order_ids'] as $k => $row)
		{
			$data['orders'][$k]=$this->inventory_model->get_all_orders($data['order_ids'][$k]['order_id']);
		}
		$data['title']='Order';
		$this->load->view('order', $data);
	}
	
	
}

?>