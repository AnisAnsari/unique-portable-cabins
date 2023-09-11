<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Result extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('Result_model','result');
		loggedin();
	}

	public function index()
	{
		$columns = array("id","name","description","image","is_active");
		$data['result'] = $this->result->getSpecificData($columns,"result",["is_active"=>1]);
		$data['category'] = $this->result->getSpecificData(["id","name"],"service",["is_active"=>1]);
	//	echo "<pre>";print_r($data['result']);die;
		$this->load->view('includes/header');
		$this->load->view('result',$data);
		$this->load->view('includes/footer');
		
	}
	
	function add_event(){
		
		$data = $_POST;
		
		foreach($_FILES as $key => $value){
			if(!empty($_FILES[$key]["name"]) && $_FILES[$key]["name"] !=""){
				$response = $this->upload_image($key,"result");
				$data[$key] = $response['file_name'];
			}
		}
		$data["cdate"] = date("Y-m-d");
		$add_response = $this->result->insertRow("result",$data);
		if($add_response >= 1){
			echo 1;
		}else{
			echo 0;
		}
		
	}
	
	function upload_image($key,$folder_name){
		
		$name = $_FILES[$key]['name'];
		$size = $_FILES[$key]['size'];
		$file_tmp = $_FILES[$key]['tmp_name'];
		$type = $_FILES[$key]['type'];
		
		$name_array = explode('.',$name);
		$file_ext=strtolower($name_array[1]);
		$new_name = str_replace(" ","_",$name_array[0]).date("his").rand().".".$file_ext;
		

		$extensions= array("jpeg","jpg","png");
		
		if(in_array($file_ext,$extensions)== false){
         $errors['error']="extension not allowed, please choose a JPEG or PNG file.";
		}
      
      if($size > 2097152){
         $errors['error']='File size must be excately 2 MB';
		}
		
		if(empty($errors)==true){
			move_uploaded_file($file_tmp,"assets/images/".$folder_name."/".$new_name);
			$errors['error']=1;
			$errors['file_name']=$new_name;
		 }else{
			$errors['error']=0;
			$errors['file_name']=""; 
		 }
		 
		 return $errors;
	}
	
// Getting result data
function get_event_data(){
	$id = $this->input->post('id');
	$columns = array("id","name","description","image","category_id");
    $event_data = $this->result->getSpecificData($columns,"result",["is_active"=>1,"id"=>$id]);
	echo json_encode($event_data);
}

// Editing result
function edit_event(){
	$data = $_POST;
	
	$id = $data["hidden_id"];
	unset($data["hidden_id"]);	
	foreach($_FILES as $key => $value){
			if(!empty($_FILES[$key]["name"]) && $_FILES[$key]["name"] !=""){
			$response = $this->upload_image($key,"result");
			$data[$key] = $response['file_name'];
		}
	}
		
	$add_response = $this->result->updateRow("result",$data,["id"=>$id]);
	if($add_response >= 1){
		echo 1;
	}else{
		echo 0;
	}
}


// Delete result

function delete_event(){
	
	 $id = $_POST['id'];
	 
	 $columns = array("image");
	 $banner_image = $this->result->getSpecificData($columns,"result",["is_active"=>1,"id"=>$id]);
	 
	 $delete_response = $this->result->delete_data("result",["id"=>$id]);
	 
	 if($delete_response >= 1){
		 unlink("assets/images/result/".$banner_image[0]->image);
		echo 1;
	}else{
		echo 0;
	}
	 
	 
}		
	
}
