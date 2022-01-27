<?php

class Crud extends CI_Model{

    
    public function readAllData(){
        
          $query = $this ->db-> get('info');
          return $query -> result();
     }

     public function insertdata($data){
          
        $this -> db -> insert('info',$data);
        return true;
     }


     public function update($firstname,$surname,$contact,$password,$dob,$gender,$id){
        $query = $this -> db -> query("update info set firstname='$firstname',surname='$surname',contact='$contact',password='$password',dob='$dob',gender='$gender' where id=$id");
        return true;
     }

     public function dlt($id){ 
           $this -> db -> query("delete from info where id=$id");
           return true;

     }

}



?>