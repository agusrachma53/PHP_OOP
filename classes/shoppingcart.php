<?php

class shoppingcart {

  function __construct(){
    if(!isset($_SESSION["cart"])){
      $_SESSION["cart"] = array();
    }
  }

  function addtocart($shoes_id = 0, $qty = 0){
    if($shoes_id > 0 && $qty > 0){
      $_SESSION["cart"][]=array("shoes_id" => $shoes_id, "qty" => $qty);
    }
  }

  function gettotalqty(){
    $total = 0;
    for($i=0;$i<=count($_SESSION["cart"])-1;$i++){
      $total = $total+$_SESSION["cart"][$i]["qty"];
    }
    return $total;
  }
}
