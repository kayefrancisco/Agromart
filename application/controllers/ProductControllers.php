<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class ProductController extends CI_Controller{
		public function __construct(){

			parent:: __construct();
			$this->load->model('AuthenticationModel');

			//checking if user||admin
			$this->AuthenticationModel->check_isUsers();
		}

		public function add_product(){
			$data =[];
			$data['product'] = $this->Product_Models->get('product');
			$this->Template_Model->view('add_product', $data);
		}

		
		public function save_product(){


			//saving data unto databased

			$product_title = $this->input->post('product_title');
			$product_description = $this->input->post('product_description');
			$product_price = $this->input->post('product_price');
			$product_stocks = $this->input->post('product_stocks');
			$product_address = $this->input->post('product_address');
			$product_category = $this->input->post('product_category');

			//checking value if equal to null
			if(trim($product_title) == null ||
				trim($product_description) == null ||
				trim($product_price) == null ||
				trim($product_stocks) == null ||
				trim($product_address) == null ||
				trim($product_category) == null
			){	
				//if nag save ng null value eto ung mag fla flash sa screen
				echo '<H1>Error! Please fill out first</H1>'; 
			}else{
				  
				$product_id = $this->Product_Models->save($product_title, $product_description, $product_price,  
				$product_stocks, $product_address,$product_category);
				if ($product_id == null){
					echo 'insert_error';
				}else{
					//dito mapupunta ung page pagkasave
					redirect(base_url('Product'));
				}
			}
		}

		public function read($id){

			$data =[];
			$data['product'] = $this->Product_Model->get();

			//using $data[info] to flashdata in Chat Product without using foreach
			$data['info'] = $this->Product_Models->get_by_id($id);
			$this->Template_Model->view('Chat_Products', $data);
			/*
			echo '<pre>'; print_r($data);
			echo '<pre>';
			die('here');
			*/
		}
		public function myProduct(){

			$data =[];
			$data['product'] = $this->Product_Model->get('product');
			
			echo '<pre>'; print_r($data);
			echo '<pre>';
			die('here');
			
			$this->Template_Model->view('myProduct', $data);

		}
		public function productget()
    {
    	if($this->session->userdata('auth_user')['unique_id'] == TRUE){

			
   		    /* $arrdata['data2'] = $this->Product_Model->getproductUser(); */
       		 $this->load->view('message/message');
       
    }
	}

	}
?>
