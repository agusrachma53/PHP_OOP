<?php

class customer extends database
{
  private $customer_id = 0;
  private $customer_name = "";
  private $customer_address = "";
  private $customer_country = "";
  private $customer_province = "";
  private $customer_city = "";
  private $customer_post_code = 0;
  private $customer_email = "";
  private $customeer_username = "";
  private $customer_password = "";
  private $customer_gander = "";
  private $customer_phone = "";
  private $customer_bank = "";
  private $customer_date = 0;

  function __construct($id = "", $root = false)
  {
    parent::__construct($root);
    if ($id != ""){
      $sql = "SELECT * FROM ms_customer WHERE customer_id = " . $id;
      //die($sql);
      $query = parent::db_getonerow($sql);
      if ($query != NULL){
        $this->customer_id = $query['customer_id'];
        $this->customer_name = $query['customer_name'];
        $this->customer_address = $query['customer_address'];
        $this->customer_country = $query['country'];
        $this->customer_province = $query['province'];
        $this->customer_city = $query['city'];
        $this->customer_post_code = $query['post_code'];
        $this->customer_email = $query['customer_email'];
        $this->customeer_username = $query['username'];
        $this->customer_password = $query['password'];
        $this->customer_gander = $query['gender'];
        $this->customer_phone = $query['phone_no'];
        $this->customer_bank = $query['bank_account'];
        $this->customer_date = $query['create_date'];
      }
    }
  }


      function cus_customer_id(){
        return $this->customer_id;
      }
      function cus_customer_name(){
        return $this->customer_name;
      }
      function cus_customer_address(){
        return $this->customer_address;
      }
      function cus_customer_country(){
        return $this->customer_country;
      }
      function cus_customer_province(){
        return $this->customer_province;
      }
      function cus_customer_city(){
        return $this->customer_city;
      }
      function cus_customer_post_code(){
        return $this->customer_post_code;
      }
      function cus_customer_email(){
        return $this->customer_email;
      }
      function cus_customeer_username(){
        return $this->customeer_username;
      }
      function cus_customer_password(){
        return $this->customer_password;
      }
      function cus_customer_gander(){
        return $this->customer_gander;
      }
      function cus_customer_phone(){
        return $this->customer_phone;
      }
      function cus_customer_bank(){
        return $this->customer_bank;
      }
      function cus_customer_date(){
        return $this->customer_date;
      }

}
