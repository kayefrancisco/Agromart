<?php
	#[\AllowDynamicProperties]
	class UserModel extends CI_Model{

		/*databased quesry for emails and password user input into databased if correct*/
		public function loginUser($data){////////////////////////////////////////////////////////////
			$this->db->select('*');
			$this->db->where('email', $data['email']);
			$this->db->where('password', $data['password']);
			$this->db->from('user');
			$this->db->limit(1);

			$query =$this->db->get();
			if($query->num_rows() == 1){
				return $query->row();
			}else{
				return false;
			}
		}

		public function login($data){//getting user email and pass to the db

			$data = $this->db->get_where('user', array('email'=>$data['email'], 'password'=>$data['password']));
			if($data->num_rows() > 0){

				return $data->result_array();
			}else{

				return false;
			}
		}

		/* to connect data to databased table for inserting data ung registration form*/
		public function registerUser($data){
			//return $this->db->insert('user', $data); 
			$this->db->insert('user', $data); 
		}

		public function idUpdate(){
			$this->db->select('unique_id');
			$unique_id = $this->db->get('user')->result_array();

			$totalId = count($unique_id);
			for ($i=0; $i < $totalId; $i++) {
				$data = $unique_id[$i]['unique_id'];
				$count = $i + 1;
				$this->db->query("UPDATE user SET user_id = '$count' WHERE unique_id = '$data'");
			}
		}
		public function checkEmail($email){//checking of email
			//$this->db = $this->load->database('s_db', TRUE);
			
			$this->db->select('email');
			$this->db->where('email',$email);
			$this->email = $this->db->get('user');

			return $this->email->result_array();
		}

		public function get_by_id(){
			
			$query = $this->db->get('user');
			return $query->result();
		}
	}
?>

