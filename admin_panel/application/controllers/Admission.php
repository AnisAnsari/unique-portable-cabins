<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admission extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Admission_model','admission');
		loggedin();
	}
	public function index()
	{
		$columns = array("id","name","description","is_active");
		$data['admission'] = $this->admission->getSpecificData($columns,["is_active"=>1]);
		$this->load->view('includes/header');
		$this->load->view('admission',$data);
		$this->load->view('includes/footer');
		
	}
	
	function add_admission(){
		
		$data = $_POST;
		
		
		
		
		$add_response = $this->admission->insertRow("admission",$data);
		if($add_response >= 1){
			echo 1;
		}else{
			echo 0;
		}
		
		
		
	}
	
// Getting Service data
function get_admission_data(){
	$id = $this->input->post('id');
	$columns = array("id","name","description");
    $admission_data = $this->admission->getSpecificData($columns,["is_active"=>1,"id"=>$id]);
	echo json_encode($admission_data);
}

// Editing Service
function edit_admission(){
	$data = $_POST;
	$id = $data["hidden_id"];
	unset($data["hidden_id"]);	
	
	$add_response = $this->admission->updateRow("admission",$data,["id"=>$id]);
	if($add_response >= 1){
		echo 1;
	}else{
		echo 0;
	}
}	


// Delete Service

function delete_admission(){
	
	 $id = $_POST['id'];
	 $delete_response = $this->admission->delete_data("admission",["id"=>$id]);
	 echo $delete_response;
	 
}	


	
}
