<?php
ob_start();
session_start();
ob_end_clean();

include("../config/config.php");
include("../classes/shoppingcart.php");

if(isset($_POST["shoes_id"])){
  $data = $_POST["shoes_id"];
  //echo "<script>alert(" . $data . ");</script>";
  $cart = new shoppingcart();
  $cart->removecart($data);
  echo $cart->gettotalqty();
}
