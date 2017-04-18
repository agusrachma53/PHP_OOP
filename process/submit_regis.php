<?php

	include "../config/config.php";
  include "../classes/database.php";


	$customer_name 	= $_POST["customer_name"];

	$customer_email = $_POST["customer_email"];

	$phone_no 		= $_POST["phone_no"];

	$gender 	    = $_POST["gender"];

	$customer_address 	= $_POST["customer_address"];

	$post_code 	= $_POST["post_code"];

	$country 	= $_POST["country"];

	$province 	=$_POST["province"];

	$city 		= $_POST["city"];

	$username 	= $_POST["username"];

	$password 	= md5($_POST["password"]);

	$term		= $_POST['term'];

	$db = new database(true);

	$data = array(
						"customer_name" => "'" . $customer_name . "'",
						"customer_email" => "'" . $customer_email . "'",
						"phone_no" => "'" . $phone_no . "'",
						"gender" => "'" . $gender . "'",
						"customer_address" => "'" . $customer_address . "'",
						"post_code" => "'" . $post_code . "'",
						"country" => "'" . $country . "'",
						"province" => "'" . $province . "'",
						"city" => "'" . $city . "'",
						"username" => "'" . $username . "'",
						"password" => "'" . $password . "'",
						"create_date" => "now()",

					);
	$result = $db->db_insert("ms_customer",$data);

	if($result){
		header("location:../index.php?regis_success");
	}else{
		header("location:../index.php?regis_error");
		// print_r($data);

	}


?>"
