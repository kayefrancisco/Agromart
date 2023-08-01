<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class PageController extends CI_Controller{

		public function userpage(){

			$arrdata['data'] = $this->Template_Model->dropdown();
			$this->load->view('template/header');

			$this->load->view('userpage', $arrdata);
			$this->load->view('template/footer');
		
	
		/*Check submit button */
		if($this->input->post('save'))
		{
            $data['crops']=$this->input->post('crops');
            $data['types']=$this->input->post('types');
            $data['plant_date']=$this->input->post('plant_date');
			$data['harvest_date']=$this->input->post('harvest_date');

		    $data['lat']=$this->input->post('lat');
			$data['lng']=$this->input->post('lng');
			$response=$this->Template_Model->saverecords($data);
			if($response==true){
			        echo "Records Saved Successfully";
			}
			else{
					echo "Insert error !";
			}
		}

		}
		public function mark(){
			$arrdata['data'] = $this->Template_Model->mark();
	
			$this->load->view('userpage', $arrdata);
	
		}
		public function accessdenied(){
			
			$data =[];
			$this->Template_Model->view('errors/403', $data);
		}
	}

?>