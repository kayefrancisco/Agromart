 <?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class LoginController extends CI_Controller{

		public function __construct(){

			parent::__construct();

			//condition to avoid repeating logging in without logging out
			if($this->session->has_userdata('authenticated')){
				//if you want to send text message
				$this->session->set_flashdata('status','You are already LogIn');
				redirect(base_url('userpage'));
			}

			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->model('UserModel');
			$this->load->model('Messagemodel');
		}

		public function index(){
			//load default pages
			$this->load->view('auth/login'); 
		}
		
		//function in Logging In, contains user validation
		public function login(){ 
			$this->form_validation->set_rules('email', 'Emails', 'trim|required|valid_email');
			$this->form_validation->set_rules('password', 'Enter passsword', 'trim|required');

			if($this->form_validation->run() == FALSE){
				$this->index(); 
			}else{
				//storing data arrays
				$data =[
					'email' => $this->input->post('email'),
					'password' => $this->input->post('password')
				];

				$user = new UserModel;
				$result =$user->loginUser($data); 
				
				if($result != FALSE){ 
		
					
					$auth_userdetails = [
						'fname' =>$result->fname,
						'lname' =>$result->lname,
						'email' =>$result->email,
						'unique_id' => $result->unique_id,
						'user_avtar' => $result->user_avtar 
					];
 					//DITO NA IPAPASA UNG SA KWAN MESSAGE
					$this->session->set_userdata('auth_user',$auth_userdetails);
				

					// rules: 1=admin && 2=users this is found in db user_type attributes in user_tbl

					$this->session->set_userdata('authenticated',$result->user_type);  ////need for validation ng usertype
					 
					$this->session->set_flashdata('status','You are Logged Successfully');

					//condition if user log in is user || admin
					if($this->session->userdata('authenticated') != '1')
					{
						redirect(base_url('userpage'));
					}
					else
					{
						redirect(base_url('adminpage'));
					}
				}else{
					/* if condition is INVALID set flashdata data to display if pass and email is incorrect and return to login page to re log in*/
					$this->session->set_flashdata('status','Invalid email or password');
					redirect(base_url('login'));
				}
				$this->Messagemodel->logoutUser('active','');
			}
		}
	}
?>