<?php

$db = new database;
$sql = "SELECT * FROM ms_shoes ORDER BY shoes_id DESC";
$query = $db->db_queryresult($sql);
?>

<h1> Products</h1>

          <?php foreach ($query as $rows) { ?>
         <div class="product_box">
               <!--<a href="index.php?detail&shoes_id="></a>-->
             <a href="index.php?detail&shoes_id=">
               <!-- <img src="" alt="" width="200" height="150" /> -->
               <?php
               $sqlg = "SELECT image_name FROM ms_shoes_image WHERE shoes_id = " . $rows['shoes_id'];
               $gambar = $db->db_getonerow($sqlg);
               ?>
               <img src="<?php echo $display_image_url.$gambar['image_name']  ?>" width="200" height="150">

             </a>

            <h3><?php echo $rows['shoes_name'] ?></h3>

            <p class="product_price">Rp. <?php echo number_format($rows['price'],2,",",".") ?> </p>

            <p></p>

            <a href="javascript:" shoes-id="<?php echo $rows['shoes_id'] ?>" class="addtocart"></a>

            <a href="index.php?detail&shoes_id=<?php echo $rows['shoes_id'] ?>" class="detail"></a>



            </div>
            <input type="hidden" id="qty" name="qty" value="1">
            <?php } ?>
