<?php
class shoes extends database
{
  private $_shoes_id = 0;
  private $_brand_id = 0;
  private $_brand_name = "";
  private $_shoes_name = "";
  private $_description = "";
  private $_price = 0;
  private $_size = 0;
  private $_stock = 0;
  private $_best_seller_flag= 0;
  private $_publish = 0;
  private $_create_date = "";
  private $sql = "SELECT * FROM ms_shoes INNER JOIN ms_brand ON ms_shoes.brand_id = ms_brand.brand_id ";


function __construct($shoes_id="",$root=false)
{
  //Memanggil method __construct dari induknya
  parent::__construct($root);
  if($shoes_id != "")
  {
    $sqlc = $this->sql . "WHERE ms_shoes.shoes_id =" . $shoes_id;
    // die($sqlc);
    //memanggil db_getrow() dari induknya
    $query = parent::db_getonerow($sqlc);
    if($query != NULL)
    {
      $this->_shoes_id = $query['shoes_id'];
      $this->brand_id = $query['brand_id'];
      $this->_brand_name = $query['brand_name'];
      $this->_description = $query['description'];
      $this->_shoes_name = $query['shoes_name'];
      $this->_price = $query['price'];
      $this->_size = $query['size'];
      $this->_stock = $query['stock'];
      $this->_best_seller_flag = $query['best_seller_flag'];
      $this->_publish = $query['publish'];
      $this->_create_date = $query['create_date'];
    }
  }
}

// -------------------------------------------------------------------

function shoes_id()
{
  return $this->_shoes_id;
}

function brand_id()
{
  return $this->_brand_id;
}

function shoes_name()
{
  return $this->_shoes_name;
}

function brand_name()
{
  return $this->_brand_name;
}

function description()
{
  return $this->_description;
}

function price()
{
  return $this->_price;
}

function size()
{
  return $this->_size;
}

function stock()
{
  return $this->_stock;
}

function best_seller_flag()
{
  return $this->_best_seller_flag;
}

function publish()
{
  return $this->_publish;
}

function create_date()
{
  return $this->_create_date;
}

// -----------------------------------------------------------

//menampilkan maskot image pada halaman detile
function maskot_image($shoes_id=0)
{
  $result = 0;
  if($shoes_id > 0)
  {
    $sql = "SELECT image_name FROM ms_shoes_image WHERE maskot = 1 AND shoes_id =" . $shoes_id;
    $query = parent::db_getonerow($sql);
    if($query != NULL)
    {
      $result = $query['image_name'];
    }
  }
  return $result;
}

// --------------------------------------------------------

// menampilkan image kecil di bawah maskot
function get_images($shoes_id = 0)
{
  $result = array();
  $uob = new utility();
  if($shoes_id != 0)
  {
    $sql = "SELECT image_name FROM ms_shoes_image WHERE maskot = 0 AND shoes_id =" . $shoes_id;
    $query = parent::db_queryresult($sql);
    if(!$uob->isarrayempty($query))
    {
      $result = $query;
    }
  }
  return $result;
}

// ----------------------------------------------------------------

function get_all($brand_id=0, $exshoes_id=0){
  $result = NULL;
  $sql = $this->sql;
  if($brand_id>0){
    $sql = $sql . "WHERE ms_shoes.brand_id=" . $brand_id . " ";
  }

  if($exshoes_id>0){
    if(strpos($sql, "WHERE")>-1){
      $sql = $sql . "AND ms_shoes.shoes_id<>" . $exshoes_id . " LIMIT 3";
    }else{
      $sql = $sql . "WHERE ms_shoes.shoes_id<>" . $exshoes_id . " LIMIT 3";
    }
  }

  $query = parent::db_queryresult($sql);

  $utility_obj = new utility();
  if(!$utility_obj->isarrayempty($query)){
    $result=$query;
  }
  return $result;
}

}
?>
