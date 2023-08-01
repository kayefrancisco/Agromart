<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		
		parent::__construct();
		$this->load->model('Product_Models');

	}

	public function index(){

		$this->load->view('welcome_message');
	}
	public function receiptload(){
		$this->load->view('receipt/receipt');
	}

	
	public function Product(){
		$data =[];
		$data['product'] = $this->Product_Models->get('product');
		$this->Template_Model->view('products/Products', $data);


		
/*

		echo '<pre>';  print_r($data);
		echo '<pre>';
		die('here');
*/

	}

	public function about(){
		$data =[];
		$data['product'] = $this->Product_Models->get('product');
		$this->Template_Model->view('About', $data);
	}

	public function Contacts(){
		$data =[];
		$data['product'] = $this->Product_Models->get('product');
		$this->Template_Model->view('Contacts', $data);
	}

}
?>