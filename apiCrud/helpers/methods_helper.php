<?php


function hello(){
     return "hello from helper";
}

function cal($data){
       $total = $data+5000;
       return "total amount is :".$total;
}

function ele($key,$array){

      return $array[$key];

}

?>