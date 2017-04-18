<?php

class database {
  private $db_connection;


// melakukan koneksi ke database
  function __construct($root=false)
  {
    //echo $root;exit();
    //Untuk menambahkan karakter ...
    $root_dot = "";
    if ($root == true) {
      $root_dot = "../";
    } else {
      $root_dot = "";
    }
  //  echo $root_dot;
    include ($root_dot ."config/database_config.php");
    $this->db_connection = new mysqli($db_server,$db_user,$db_password,$db_selected);
  }

// --------------------------------------------------------------------------------------------------

// mengambil data dari database untuk di tampilkan pada website
  function db_queryresult($sql="")
  {
    $result = array();
    if($sql!="")
    {
      $query = $this->db_connection->query($sql);
      if($query->num_rows > 0)
      {
        $rows = $query->fetch_assoc();
        do{
          $result[] = $rows;
        }while($rows = $query->fetch_assoc());
      }
    }
    return $result;
  }

  // menampilkan gambar shoes

  function db_getonerow($sql="")
  {
    $result = NULL;
    if($sql!="")
    {
      $query = $this->db_connection->query($sql);
      if($query->num_rows > 0){
         $result = $query->fetch_array();
      }
    }
    return $result;
  }

  //insert data register
  function db_insert($table = "",$fielddata=NULL)
  {
    //variabel hasil output
    $result = 0;

    //variabel untuk field
    $fields = "";
    //fariabel untuk field value
    $fieldvalue = "";
    //check $table & field data ada isinya
    if($table != "" && $fielddata != NULL)
    {
      foreach ($fielddata as $rows=>$rowsvalue) {
        $fields = $fields . $rows . ",";
        $fieldvalue = $fieldvalue . $rowsvalue . ",";
      }
      //buang koma terakhir
      $fields = substr($fields,0,strlen($fields)-1);
      $fieldvalue = substr($fieldvalue,0,strlen($fieldvalue)-1);
      // membuat syntak sql
      $sql = "INSERT INTO " . $table . "(" . $fields . ") VALUES (" . $fieldvalue . ")";
      $result = $this->db_connection->query($sql);
    }
    return $result;
  }

  function db_rowcount($sql=""){
    $result=0;
    if($sql!=""); {
      $query = $this->db_connection->query($sql);
      $result=$query->num_rows;
    }
    return $result;
  }





}
// -----------------------------------------------------------------------------------------------------------
?>
