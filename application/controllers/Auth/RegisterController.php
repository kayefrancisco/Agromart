<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
	
	class RegisterController extends CI_Controller{

		//long method ng autoload
		public function __construct(){
			
			parent::__construct();

			//DIRECT TO LAST LOGIN ACCOUNT IF NOT LOGOUT PROPERLY
			if($this->session->has_userdata('authenticated')){
				$this->session->set_flashdata('status','You are already LogIn');
				redirect(base_url('userpage'));
			}

			$this->load->helper('form');
			$this->load->library('form_validation');
			$this->load->model('UserModel');
		}

		//load default page
		public function index(){
			$this->load->view('auth/register');
		}

		
		public function register(){
			
				$data = $this->input->post();
				
				if(isset( $_FILES) && isset($data)){

					//File - kukunin yung image then generate ng new image name
					$file_name =  $_FILES['user_avtar']['name'];
					$file_tmpname =  $_FILES['user_avtar']['name'];
					$extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
					$file_new_name = substr(md5(microtime()), rand(0,25), 8);//creating ramdom string
					$file_upload_name = $file_new_name.".".$extension;
				
					//print_r($file_upload_name);

					//Data- getting user input
					$unique_id = substr(md5(microtime()), rand(0,25), 6);
					$fname = $data['txt_fname'];
					$lname = $data['txt_lname'];
					$address = $data['txt_address'];
					$email = $data['txt_email'];
					$password = $data['txt_pass'];
					$user_avtar = $file_upload_name;
					$user_status = 'active';

					//storing in database
					$data = array(
						'unique_id' => $unique_id,
						'fname' => $fname,
						'lname' => $lname,
						'address' => $address,
						'email' => $email,
						'password' => $password,
						'user_avtar' => $user_avtar,
						'user_status' => $user_status

					);

						//Validation of email
					$email = $this->UserModel->checkEmail($email);

					if(isset($email[0]['_email'])){
						$this-index();
						echo "Email is already exist";
					}else{
						$this->UserModel->registerUser($data);
						$this->UserModel->idUpdate();

						move_uploaded_file($file_tmpname, "./upload/".$file_upload_name);//Putting image in file name upload

						$username = $fname." ".$lname;
						$image = $user_avtar;
						$session_arr = array(
							'username' => $username,
							'image' => $image,
							'uniqueid' => $unique_id
						);
						$this->session->set_userdata($session_arr);						
						redirect(base_url('login'));
					}	
					}	
				}/*

		public function register(){
			$this->form_validation->set_rules('txt_fname', 'txt_lname', 'required');
			$this->form_validation->set_rules('txt_address', 'txt_email', 'required');
			$this->form_validation->set_rules('txt_password', 'user_avtar', 'required');

			if($this->form_validation->run()){
				$orig_filename = $_FILES['user_avtar']['name'];
				$new_name = time(). " ".str_replace('','-', $orig_filename);
				$config = [
					'upload_path' => './images/', //image directory path
					'allowed_types' => 'png/jpg/gif',
					'file_name' => $new_name,
				];
				$this->load->library('upload', $config);

				if(! $this->upload->do_upload('user_avtar')){
					echo 'ERROR';
				}else{
					$user_status = 'active';
					$unique_id = substr(md5(microtime()), rand(0,25), 6);
					$user_filename = $this->upload->data('file_name');
					$data = [
						'unique_id'=>$unique_id,
						'fname'=>$this->input->post('txt_fname'),
						'lname'=>$this->input->post('txt_lname'),
						'address'=>$this->input->post('txt_address'),
						'email'=>$this->input->post('txt_email'),
						'password'=>$this->input->post('txt_pass'),
						'user_avtar'=>$user_filename,
						'user_status' => $user_status
					];

					$regUser = new UserModel;
					$this->$regUser->registerUser($data);
					$this->$regUser->idUpdate();
					redirect(base_url('login'));
				}
			}else{
				$this->index();
			}
		}*/


	}
?>



