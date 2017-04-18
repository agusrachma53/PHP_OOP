<?php

class utility {
  function isarrayempty($dataarray=NULL) {
    $result = false;
    if($dataarray!=NULL)
    {
      if(count($dataarray) > 0){
        if(empty($dataarray[0])){
          $result = true;
        }else{
          $result = false;
        }
      }
    }
    return $result;
  }

}

?>
