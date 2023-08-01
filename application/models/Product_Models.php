<?php 
#[\AllowDynamicProperties]
	class Product_Models extends CI_Model{

		public function get(){
	
			//using get function to connect at product table in databased
			$query = $this->db->get('product');
			return $query->result_array();	

		}

	    public function save($p_title, $p_description, $p_price,  
		$p_stocks, $p_address,$p_category ){
		
		//this function is to saved data to databased

		
		    $data = array(

			    "p_title" => $p_title,
			    "p_description" => $p_description,
			    "p_price" => $p_price,
			    "p_stocks" => $p_stocks,
			    "p_address" => $p_address,
			    "p_category" => $p_category
			
		    );

		
		    $this->db->insert('product', $data);
		    return $this->db->insert_id();
	    }

	    //function to get product id and direct product details to its especific fields
	    public function get_by_id($product_id){

		    //using row array to eget single data in a rows table    
		    return $this->db->get_where('product', array('product_id' => $product_id))->row_array();	
	    }


	    public function myProduct($user_id){

	    	$this->db->select('*');
	    	$this->db->from('product');
	    	$this->db->join('user_tbl', 'user_tbl.id = product.user_id');
	    	return $this->db->get_where(array('id' => $user_id))->row_array();
	    }
	
	}
?>

