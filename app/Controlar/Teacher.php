<?php

namespace App\Controlar;

use App\Suport\Database;




/**
     * Class Student
     * @package App\Controller
     */

    class Teacher extends Database {

        public function msg($mass){
           return '<p class="alert alert-success">'. $mass .'<button class="close" data-dismiss="alert">&times;</button></p>';
        }

        /**
         * Student Data Create
         * @return string
         */
        public function createTeacherInfo($name, $last_name, $email, $cell, $uname) {

            $data = $this -> create("INSERT INTO teacher (name, last_name, email, cell, uname) VALUES ('$name','$last_name','$email','$cell','$uname')");

            if($data){
                return $this-> msg('Teacher Info created successful !');
            }
        }


        /**
         * Get all students
         */
        public function allTeacherInfo() {

            $data = $this ->show('teacher');

            return $data ;

        }

        /**
         * Student Delete
         * @param $id
         */
        public function delateData($id){
            $data = $this ->delete('teacher', $id);

            if( $data ){
                return $this-> msg('Teacher Info deleted successful !');
            }
        }

        /**
         * Find single student
         * @param $id
         */
        public function singleTeacher($id){
            $data = $this ->viewSingal('teacher', $id);

            return $data;
        }

        


        /**
      	 *
         */
        public function updateTeacherInfo($name, $last_name, $email, $cell, $uname, $id ){
            $this -> update("UPDATE teacher SET name='$name',last_name='$last_name', email='$email', cell='$cell', uname='$uname ' WHERE id='$id'");

            header("location:view.php");
        }
    }