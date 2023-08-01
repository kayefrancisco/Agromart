<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class AdminController extends CI_Controller{

		//long method ng autoload
		public function __construct(){

			parent:: __construct();
			$this->load->model('AuthenticationModel');
			$this->load->model('UserModel');
			$this->load->model('Template_Model');

			//checking if user||admin
			$this->AuthenticationModel->check_isAdmin();
		}

		//load default page
		public function index(){

			//$products = new Product_Models;
			$model = new UserModel;
			$prod = new Template_Model;
			$data['user'] = $model->get_by_id(); 
			$data['getInfo'] = $prod->getInfo(); 
			//$products['product'] = $products->get(); 
			$this->load->view('adminpage', $data);
			
		}

		public function edit($id){//get the product id to espicifically edit the entire row products
			$this->load->view('template/header');
			$products = new Product_Model;
			$data['product'] = $products->editProduct($id);
			$this->load->view('products/edit', $data);
			$this->load->view('template/footer');
		}
		
	}
?>