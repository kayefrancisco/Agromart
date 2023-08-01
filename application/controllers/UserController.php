<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class UserController extends CI_Controller{

		//long method ng autoload
		//authenthication checker
		public function __construct(){

			parent:: __construct();
			$this->load->model('AuthenticationModel');
			$this->load->model('Marker_Model');

			//checking if user||admin
			$this->AuthenticationModel->check_isUsers();
		}

		//load default page
		public function index(){

			$unik =$this->session->userdata('auth_user')['unique_id'];
			$unique_id =$unik;
			$LocName = $this->input->post('LocName');
			$LocDescription = $this->input->post('LocDescription');
			$Lat = $this->input->post('Lat');
			$Lng = $this->input->post('Lng');

			$session_arr = array(
				'Lat' => $Lat,
				'Lng' => $Lng
			);

			$this->session->set_userdata($session_arr);

			if(isset($Lat[0]['_Lat'])){
				$this-index();
				echo "Location is already exist";
			}else{
				
			$Loc_Id = $this->Marker_Model->save($LocName, $LocDescription, $Lat,  
			$Lng, $unique_id);


			$datas['marker'] = $this->Marker_Model->get();
			$data['marker'] = $this->Marker_Model->get('marker');
			echo '<pre>';  print_r($datas);
			echo '<pre>';
			die('here');
			$this->load->view('template/header');
			$this->load->view('userpage', $datas);
			$this->load->view('template/footer', $datas);
			}

		}
	}
?>