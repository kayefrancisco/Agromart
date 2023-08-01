<?php 
#[\AllowDynamicProperties]
class Template_Model extends CI_Model
{
	public function view($page, $data)
	{
		//storing data for re using code in header and footer
		$this->load->view('template/header', $data);
		$this->load->view($page, $data);
		$this->load->view('template/footer', $data);
		/*
			to load ung kanyang header at footer in different pages using 
			$this->Template_Model->view('phpfile', $data);
			this code is use in controlers.

			Template MOdels for loading header and footer in differents page
		*/	
	}
	function saverecords($data)
	{
        $this->db->insert('map',$data);
        return true;
	}
	function dropdown(){
		$sql = "SELECT * FROM `mcrops`;";
		$query = $this->db->query($sql);
        $all = $query->result_array();
        return $all;
	}
	function mark(){
		$sql = "SELECT mcrops.id, map.crops, mcrops.hex, map.lat, map.lng FROM map\n"

    . "LEFT JOIN mcrops ON mcrops.id = map.crops;";
	
		$query = $this->db->query($sql);
		$data = array();
		foreach ($query->result_array() as $row)
		{
			
				array_push($data, $row);
		}
		echo json_encode($data);
	exit();

	
}
	public function getInfo(){

		$query = $this->db->get('product');
		return $query->result();
	}

}
