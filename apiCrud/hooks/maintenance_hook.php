<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Maintenance_hook
{
   
    public function offline_check(){

        if(file_exists(APPPATH.'config/config.php')){
            include(APPPATH.'config/config.php');
            // echo APPPATH;
            if(isset($config['maintenance_mode']) && $config['maintenance_mode'] === TRUE){
                include(APPPATH.'templates/maintenance.php');
                exit;
            }
        }
    }

}