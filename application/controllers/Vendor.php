<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {
	function __construct()
	{
			parent::__construct();
			$this->load->model('vendor_model');
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('vendor/index.php');
	}

	public function detail()
	{
		$vendor_id = $this->uri->segment(3);
		$data['get_all_vendor_type'] = $this->vendor_model->get_all_vendor_type();
		$data['get_vendor_by_id'] = $this->vendor_model->get_vendor_by_id($vendor_id);
		$vendor_type =  $data['get_vendor_by_id']['Vendor_type'];
		$data['get_all_vendor_services'] = $this->vendor_model->get_all_vendor_services($vendor_id);
		//$vendor_type =
		$this->load->helper('url');
		$this->load->view('vendor/detail.php',$data);
	}

	public function search()
	{
		$vendor_type = $this->input->post('vendor_type');
		$vendor_city = $this->input->post('city');
		if(isset($vendor_type) && count($vendor_type)>0 && isset($vendor_city) && count($vendor_city) > 0)
		{
			$data['get_all_vendor_type'] = $this->vendor_model->get_all_vendor_type();
			$data['listing'] = $this->vendor_model->get_all_vendor_by_type_city($vendor_type,$vendor_city);
			$data['vendor_type'] = $vendor_type;
			$data['city'] = $vendor_city;
			$this->load->view('vendor/index.php',$data);
			//var_dump($listing);
			//exit();
		}
		else {
			$vendor_type = $this->input->get('vendor_type');
			if(isset($vendor_type) && count($vendor_type)>0)
			{
				$data['get_all_vendor_type'] = $this->vendor_model->get_all_vendor_type();
				$data['listing'] = $this->vendor_model->get_all_vendor_by_type($vendor_type);
				$data['vendor_type'] = $vendor_type;
				$this->load->view('vendor/index.php',$data);
				//var_dump($listing);
				//exit();
			}
			else {
				redirect('welcome');
			}

		}
	}

	public function get_vendor_services()
	{
		$vendor_type = $this->input->post('vendor_type_id');
		echo json_encode($this->vendor_model->get_vendor_services($vendor_type));
	}
}
