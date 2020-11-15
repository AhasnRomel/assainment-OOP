<?php

namespace App\Controlar;

use App\Suport\Database;




/**
     * Class Student
     * @package App\Controller
     */

    class Student extends Database {

        public function msg($mass){
           return '<p class="alert alert-success">'. $mass .'<button class="close" data-dismiss="alert">&times;</button></p>';
        }

        /**
         * Student Data Create
         * @return string
         */
        public function createStudentInfo($name, $last_name, $email, $cell, $uname) {

            $data = $this -> create("INSERT INTO students (name, last_name, email, cell, uname) VALUES ('$name','$last_name','$email','$cell','$uname')");

            if($data){
                return $this-> msg('Student created successful !');
            }
        }


        /**
         * Get all students
         */
        public function allStudentInfo() {

            $data = $this ->show('students');

            return $data ;

        }

        /**
         * Student Delete
         * @param $id
         */
        public function deleteStudent($id){
            $data = $this ->delete('students', $id);

            if( $data ){
                return $this-> msg('Student deleted successful !');
            }
        }

        /**
         * Find single student
         * @param $id
         */
        public function singleStudent($id){
            $data = $this ->viewSingal('students', $id);

            return $data;
        }

        

        /**
         * @param $name
         * @param $email
         * @param $cell
         * @param $uname
         */
        public function updateStudentInfo($name, $last_name, $email, $cell, $uname, $id ){
            $this ->update("UPDATE students SET name='$name', last_name='$last_name', email='$email', cell='$cell', uname='$uname ' WHERE id='$id'");

            header("location:view.php");
        }
    }