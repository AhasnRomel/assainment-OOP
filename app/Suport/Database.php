<?php
	namespace App\Suport;
    use mysqli;

/**
 * Database Class
 */
	abstract class Database{
		/**
		* Database Connection Property
		*/
		private $host = 'localhost';
        private $user = 'root';
        private $pass = '';
        private $db = 'manage_school';
        private $connection;


        /**
         *
         * Database Connection query
         */
        private function connection(){
            return $this -> connection = new mysqli($this -> host, $this -> user, $this -> pass, $this -> db);
        }

        /**
        * Insert Data From User into Database table
        */

        protected function create($sql){

        	$data = $this -> connection() -> query($sql);

        	if ($data) {
        		return true;
        	}else{
        		return false;
        	}
        	
        }

		/**
		* All Data Show 
		*/
		public function show($tbl, $order="DESC"){
			return $this -> connection() -> query("SELECT * FROM $tbl ORDER BY id $order");
		}



		/**
		* Single Data View 
		*/
		public function viewSingal($tbl, $id){
			return  $this -> connection() -> query("SELECT * FROM $tbl WHERE id='$id'");
			
		}
		


		/**
		* All Data Edit 
		*/
		public function update($sql){
			$this -> connection() -> query($sql);
		}


		


		/**
		* Data Delate 
		*/
		public function delete($tbl, $id)
		{
			$data = $this -> connection() -> query("DELETE FROM $tbl WHERE id='$id'");

			if ($data) {
        		return true;
        	}
		}
}