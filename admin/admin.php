<?php /*session_start(); 

include "config/authentification.php"; */ 



include("../config/config.php");
include("../config/database_config.php"); 

?>

<!doctype html>

<html>

  <head>

    <meta charset="utf-8">

    <title>CMS</title>

    

    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/css/cmsstyle.css">

    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/css/ui-lightness/jquery-ui.css">

    
  </head>

    

  <body>
    <img src="../asset/loader.gif" id="theloading">
    <div id="cmswrapper">

      <div id="header">

        <!--- start header --->

         <div id="leftheader">

         <img src="<?php echo $base_url; ?>/images/templatemo_logo.png" width="166" height="24"> </div>

         <div id="rightheader">

           Welcome <span id="activeuser">Active User</span><br><a href="#">My Account</a>&nbsp;|&nbsp; <a href="config/logout_process.php">logout</a>

         </div>

        <!--- end header --->

      </div>

      <div id="headerseparator"></div>

      <div id="content">

       <!--- start content --->

        <div id="leftcontent">

         <!--- start Left Content --->

           <ul class="menuwrapper">

              <li class="menuitem">

                <a class="menuitemlink menuitemlinkiconoff" href="javascript:">Products</a>

                <ul class="submenuitem">
                    <li><a href="admin.php?p=brand">Brands</a></li>
                    <li><a href="admin.php?p=product">Products</a></li>

                </ul>

              </li>

              

              <li class="menuitem">

                <a class="menuitemlink menuitemlinkiconoff" href="javascript:">Customer</a>

                <ul class="submenuitem">

                    <li><a href="admin.php?p=customer">Customer</a></li>

                   

                </ul>

              </li>

              

              

              

              <li class="menuitem">

                <a class="menuitemlink menuitemlinkiconoff" href="javascript:">Transaction</a>

                <ul class="submenuitem">

                    <li><a href="admin.php?p=order">Order </a></li>

                </ul>

              </li>

              <li class="menuitem">

                <a class="menuitemlink menuitemlinkiconoff" href="javascript:">Admin</a>

                <ul class="submenuitem">

                    <li><a href="admin.php?p=user_group">Admin Group</a></li>

                    <li><a href="admin.php?p=user_admin">Admin List</a></li>

                </ul>

              </li>

              <li class="menuitem" hidden=true>

                <a class="menuitemlink menuitemlinkiconoff" href="javascript:">Item 5</a>

                <ul class="submenuitem">

                    <li><a href="">Submenuitem 1</a></li>

                    <li><a href="">Submenuitem 2</a></li>

                </ul>

              </li>

           </ul>

         <!--- end Left Content--->

        </div>

        <div id="rightcontent">

         <!--- start Right Content --->
           <?php
		    $admin_page="";
		    if (isset($_GET["p"])) {
			 if ($_GET["p"]!="") {	
			  $admin_page=$_GET["p"] . "_layout/" . $_GET["p"] . "_content.php";
			  include($adminlayoutmodule_url . $admin_page);
			 }
			}
		    
			
		    ?>
         <!--- end Right Content --->

        </div>

       <!--- end content ---> 

      </div>

      <div id="footer">

        <!--- start footer --->

        

        <!--- end footer --->

      </div>

    </div> 
    <script type="text/javascript" language="javascript" src="<?php echo $base_url; ?>/js/jquery-1.9.1.js"></script>

    <script type="text/javascript" language="javascript" src="<?php echo $base_url; ?>/js/jquery-ui.js"></script> 
    <script type="text/javascript" language="javascript" src="<?php echo $base_url; ?>/js/dropdownmenu.js"></script>
	
  </body>

</html>