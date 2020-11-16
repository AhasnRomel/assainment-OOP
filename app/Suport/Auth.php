<?php
	namespace App\Suport;
  

    class Auth{

        public function msg($mass){
           return '<p class="alert alert-success">'. $mass .'<button class="close" data-dismiss="alert">&times;</button></p>';
            }
    	
    	public function emailValid($email){

    		if (!isset($email)) {

    			return $this-> msg('Please Enter Email Address !');

    		}elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)){

                return $this -> msg('Invalid Email Address');
                
                if ($email) {
                    return true;
                }

    	   }
        }
    }
          
      