<?php $db = new database(); ?>
 <div id="sliderFrame">

     <div id="slider">

     <img src="images/slider/CAPA.jpg" />

     <img src="images/slider/puma-ronda1.jpg" />

     <img src="images/slider/skora6.jpg" />

     </div>

 </div>
 <h1>New Products</h1>

    <?php
      $sql = "SELECT * FROM ms_shoes ORDER BY create_date DESC LIMIT 3";
      $product = $db->db_queryresult($sql);
    ?>

    <?php if(count($product) > 0) {  ?>

          <?php foreach ($product as $rows) { ?>
              <div class="product_box">

    	            <h3><?php echo $rows['shoes_name'] ?></h3>
                    <a href="index.php?detail&shoes_id=<?php echo $rows['shoes_id'] ?>">

                    <?php
                    // $db = new database;
                    $idnya = $rows['shoes_id'];
                    $sql = "SELECT image_name FROM ms_shoes_image WHERE shoes_id = $idnya";
                    $shoesimg = $db->db_getonerow($sql);
                    ?>
                    <img src="<?php echo $display_image_url.$shoesimg['image_name'] ?>" width="200" height="150"/></a>
                   <p class="product_price">Rp. <?php echo number_format($rows['price'],2,",",".") ?> </p>
                    <p><?php echo substr($rows['description'],0,100) ?></p>

                    <a href="javascript:" shoes-id="" class="addtocart"></a>

                    <a href="index.php?detail&shoes_id=<?php echo $rows['shoes_id'] ?>" class="detail"></a>

                </div>

            <?php } ?>
      <?php } ?>
   <input type="hidden" id="qty" name="qty" value="1">
