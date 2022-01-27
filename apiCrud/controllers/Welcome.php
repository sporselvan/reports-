<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function index()
	{
		$this->load->view('welcome_message');
		$this->load->model('crud');
	}

	public function __construct()
	{
	parent::__construct();   
	$this->load->database();
	$this->load->model('Crud');
	}

	
	public function readAllRecord(){
		
		 $result['data']  = $this->Crud->readAllData();
		 print_r(json_encode($result));
		 
	}

	public function create(){
               
			  
		     $_POST = json_decode(file_get_contents("php://input"), true);
			  
			  $data['firstname'] =   $_POST['firstname'];
			  $data['surname'] = $_POST['surname'];
			  $data['contact'] = $_POST['contact'];
			  $pass =  $_POST['password'];
			  $data['password'] = md5($pass);
			  $data['dob']= $_POST['dob'];
			  $data['gender'] = $_POST['gender'];
			  echo json_encode($data);
              $this -> Crud -> insertdata($data);

	}


	public function edit(){
		
		    
		        $_POST = json_decode(file_get_contents("php://input"), true);

			    $id = $_POST['id'];
	          	$firstname =   $_POST['firstname'];
		        $surname = $_POST['surname'];
				$contact = $_POST['contact'];
				$password =  $_POST['password'];
				$dob= $_POST['dob'];
				$gender = $_POST['gender'];
 
                 $this -> Crud -> update($firstname,$surname,$contact,$password,$dob,$gender,$id);
	}


	public function remove(){
		
		$_POST = json_decode(file_get_contents("php://input"), true);
		$id = $_POST['id'];
	
	    $this -> Crud -> dlt($id);
		}
		   
	

	
}
