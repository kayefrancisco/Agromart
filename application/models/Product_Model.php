<?php 
#[\AllowDynamicProperties]
	class Product_Model extends CI_Model{

		public function getProducts()
		{
			$unique_id = $this->session->userdata('auth_user')['unique_id']; //to fetch filtered data
			$query = $this->db->get_where('product', ['unique_id' => $unique_id]);
			return $query->result();
		}
		public function get(){
			
			$query = $this->db->get('product');
			return $query->result_array();
		}

		public function insertProduct($data)
		{
			return $this->db->insert('product', $data);
		}

		public function editProduct($id)
		{
			$query = $this->db->get_where('product', ['id' => $id]);
			return $query->row();
		}

		public function updateProduct($data, $id)
		{
			return $this->db->update('product', $data, ['id' => $id]);
		}

		public function checkProductImage($id)
		{
			$query =$this->db->get_where('product', ['id' => $id]);
			return $query->row();
		}

		public function deleteProduct($id)
		{
			return $this->db->delete('product', ['id' => $id]);
		}





//wala pa ito

		public function read($id)
		{
			$query = $this->db->get('product');
			return $query->result();
		}

		public function get_by_id($p_id){

		    //using row array to eget single data in a rows table    
		    return $this->db->get_where('product', array('id' => $p_id))->row_array();	
	    }

			public function get_info_product(){
			
				$query = $this->db->get('product');
				return $query->result();
			}
	}
	
?>