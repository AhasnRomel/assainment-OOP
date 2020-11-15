<?php

namespace App\Controlar;

use App\Suport\Database;




/**
     * Class Student
     * @package App\Controller
     */

    class Staff extends Database {

        public function msg($mass){
           return '<p class="alert alert-success">'. $mass .'<button class="close" data-dismiss="alert">&times;</button></p>';
        }

        /**
         * Student Data Create
         * @return string
         */
        public function createStuffInfo($name, $last_name, $email, $cell, $uname) {

            $data = $this -> create("INSERT INTO stuff (name, last_name, email, cell, uname) VALUES ('$name','$last_name','$email','$cell','$uname')");

            if($data){
                return $this-> msg('Stuff Info created successful !');
            }
        }


        /**
         * Get all students
         */
        public function allStuffInfo() {

            $data = $this ->show('stuff');

            return $data ;

        }

        /**
         * Student Delete
         * @param $id
         */
        public function delateData($id){
            $data = $this ->delete('stuff', $id);

            if( $data ){
                return $this-> msg('Stuff deleted successful !');
            }
        }

        /**
         * Find single student
         * @param $id
         */
        public function singleStuff($id){
            $data = $this ->viewSingal('stuff', $id);

            return $data;
        }

        


        /**
      	 *
         */
        public function updateStuffInfo($name, $last_name, $email, $cell, $uname, $id ){
            $this -> update("UPDATE stuff SET name='$name',last_name='$last_name', email='$email', cell='$cell', uname='$uname ' WHERE id='$id'");

            header("location:view.php");
        }
    }