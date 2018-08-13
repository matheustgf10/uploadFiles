<?php 


	Class Connection{


		$host 	  	= "localhost";
		$user 	  	= "root";
		$password 	= "";
		$database	= "uploadfiles";

		public function openConnection(){
			try{

			}catch(Exception $e){
				return $e->getMessage();
			}
		}

		public function closeConnection(){

		}

	}

?>