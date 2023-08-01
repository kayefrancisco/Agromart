<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ProductController extends CI_Controller
{

	public function __construct()
	{//as always autoloads
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->helper('form');
		$this->load->model('Product_Model');

	}

	public function index(){
		$products = new Product_Model;
		$data['product'] = $products->getProducts();
		$this->Template_Model->view('products/index', $data);
	}

	public function view(){	
		//to pass data from databased using models and getProducts function
		$products = new Product_Model;
		$data['product'] = $products->getProducts();
		$template['product'] = $this->Product_Models->get('product');
		$this->Template_Model->view('products/view',$template, $data);
	}

	public function create(){
		$this->load->view('template/header');
		$this->load->view('products/create');
		$this->load->view('template/footer');
	}

	public function store(){

		//validation kung na fill upon lahat ng forms
		$this->form_validation->set_rules('p_title', 	'p_description', 	'required');
		$this->form_validation->set_rules('p_price', 	'p_stocks', 		'required');
		$this->form_validation->set_rules('p_address', 	'required');

		if($this->form_validation->run())
		{
			//if run need to set code to save image and condition for file image type
			$ori_filename = $_FILES['p_image']['name'];
			$new_name = time()."".str_replace(' ', '-', $ori_filename);
			$config = [
				'upload_path' => './images/', //images directory
				'allowed_types' => 'png|jpg|gif',
				'file_name' => $new_name,
			];
			$this->load->library('upload', $config);

			if (! $this->upload->do_upload('p_image')) 
			{
            	
				$imageError = array();
        //$imageError = array('imageError' => $this->upload->display_error('<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>', '</div>'));
		    $this->load->view('template/header');
		    $this->load->view('products/create' );
		  	$this->load->view('template/footer');
        
			} 
      else 
      {
				
				$unik = $this->session->userdata('auth_user')['unique_id']; //USING SESSION TO PASS USER INFO || fkey
				$p_filename = $this->upload->data('file_name');
        $data = [
						'unique_id' =>$unik,
          	'p_title' 		=> $this->input->post('p_title'),
          	'p_description' => $this->input->post('p_description'),
						'p_price' 		=> $this->input->post('p_price'),    
						'p_stocks' 		=> $this->input->post('p_stocks'),   
						'p_address' 	=> $this->input->post('p_address'),   
						'p_category' 	=> $this->input->post('p_category'),    
						'p_image' 		=> $p_filename
        ];
				
				//$fkey['fkey'] = $this->session->auth_user('unique_id');
        

        $product = new Product_Model;
        $res = $product->insertProduct($data);
        $this->session->set_flashdata('status', 'Product Inserted Successfully');
        redirect(base_url('products'));
      }
		}else{
			//if false babalik sa create or add product page
			$this->create();
		}

	}

	public function edit($id){//get the product id to espicifically edit the entire row products
		$this->load->view('template/header');
		$products = new Product_Model;
		$data['product'] = $products->editProduct($id);
		$this->load->view('products/edit', $data);
		$this->load->view('template/footer');
	}


	//before mag update ng products need muna e validate kung may laman or data 
	//then need e update ung link ng image sa databased from images directory
	//last makakapag update ng product gamit ung modal with update query
	public function update($id){
		$this->form_validation->set_rules('p_title', 	'p_description', 	'required');
		$this->form_validation->set_rules('p_price', 	'p_stocks', 		'required');
		$this->form_validation->set_rules('p_address', 	'required');

		if($this->form_validation->run())
		{
			$old_filename = $this->input->post('old_p_image');
			$new_filename = $_FILES["p_image"]["name"]; 

			if($new_filename == TRUE)
			{
				$update_filename = time()."".str_replace(' ', '-', $_FILES['p_image']['name']);

				$config = [
				'upload_path' => './images/',
				'allowed_types' => 'png|jpg|gif',
				'file_name' => $update_filename,
				];

				$this->load->library('upload', $config);
				if($this->upload->do_upload('p_image'))
				{
					if(file_exists("./images./".$old_filename))
					{
						unlink("./images/".$old_filename);
					}
				}
			}
			else
			{
				$update_filename = $old_filename;
			}
        $data = [
          'p_title' 		=> $this->input->post('p_title'),
          'p_description' => $this->input->post('p_description'),
					'p_price' 		=> $this->input->post('p_price'),    
					'p_stocks' 		=> $this->input->post('p_stocks'),   
					'p_address' 	=> $this->input->post('p_address'),   
					'p_category' 	=> $this->input->post('p_category'),    
					'p_image' 		=> $update_filename
        ];
            	$product = new Product_Model;
            	$res = $product->updateProduct($data, $id);
            	$this->session->set_flashdata('status', 'Product Updated Successfully');
            	redirect(base_url('products'));

		}
		else
		{
			return $this->edit($id);
		}

	}


	//First need e un link ung image then sa modal with the use of delete query command
	public function delete($id)
	{
		$product = new Product_Model;
		if($product->checkProductImage($id))
		{
			$data = $product->checkProductImage($id);
			//check if image has value in the image directory
			if(file_exists("./images/".$data->p_image))
			{
				 unlink("./images/".$data->p_image);
			}
			$product = $product->deleteProduct($id);
			$this->session->set_flashdata('status', 'Deleted Successfully!');
			redirect(base_url('products'));
		}
	}

	public function read($p_id)//get the product id to espicifically edit the entire row products
	{

///CHATTTT BX NAAAA
		$data =[];
		$data['product'] = $this->Product_Model->getProducts();
		//$data['data'] = $this->Messagemodel->ownerDetails();

		//using $data[info] to flashdata in Chat Product without using foreach
		$data['info'] = $this->Product_Model->get_by_id($p_id);
		//$this->load->view('products/read', $data);
		//$this->Template_Model->view();





			/*
			echo '<pre>'; print_r($data);
			echo '<pre>';
			die('here');
			*/
	}

	
		
	
	
		public function Product(){
		$data =[];
		$data['product'] = $this->Product_Model->getProducts('product');
		$this->Template_Model->view('products/read/', $data);

		

/*
		echo '<pre>';  print_r($data);
		echo '<pre>';
		die('here');
*/
	}

		
}
?>
