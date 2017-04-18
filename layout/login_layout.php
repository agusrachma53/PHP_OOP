<div id="login_info" class="sidebar_box">
   <div style="padding:8px;">
     <div>Halo selamat Datang , </div>
     <div><span id="customer_name_active"><?php echo $_SESSION["customer_name"]; ?></span></div>
     <div>
       <a href="process/logout.php" style="margin-right:10px;">Log Out</a>
       <a href="index.php?customer_detail"> Profile User </a>
     </div>
   </div>
</div>

<div id="login_box" class="sidebar_box" >
            	<span class="bottom"></span>

                <h3>Login</h3>



                <div id="login_form" class="content" style="width:222px;">

                <form action="<?php echo $base_url; ?>serviceforajax/checklogin.php" method="post" name="contact">

                  <input type="hidden" value="<?php echo $_SERVER['REQUEST_URI'] ?>" name="this_location"  />

                  <label> Username : </label>

                  <input type="text" name="username" id="username_id" value="" required class="required input_field" />

                  <div class="cleaner h10"></div>

                  <label> Password : </label>

                  <input type="password" name="password" required id="password" value="" class="required input_field" />

                  <div class="cleaner h10"></div>

                  <input class="submit_btn login" name="login_submit" id="login_submit" value="Login" type="button" style="float:left; margin-right:10px;">

                   <input class="submit_btn sign_up " id="submit" onClick="location.href='index.php?regis'" value="Sign Up" type="button" style="float:left; margin-right:10px;">



                </form>

                 <div class="cleaner h10"></div>


                <span id="login_error" class="error" style="color:#F00" >

                Email/Password error!<br />please log in again..

                </span>



               </div>



</div>
<script type="text/javascript">
  $(document).ready(function(){
      $("#login_submit").click(function(){
        if(loginformvalidation()==true){
          $.ajax({
            type:"POST",
            url:"<?php echo $base_url; ?>serviceforajax/checklogin.php",
            data:"username" + $("#username").val() + "&password=" + $("#password").val(),
            beforeSend: function() {
              $("#preloader").fadeIn(1500);
            },
            success: function(resdata){
              $("#preloader").fadeOut(1500);
              if(resdata!="failed"){
                $("#login_box").hide();
                $("#login_info").show();
                $("#costumer_name_active").html(resdata);
              }else{
                $("#login_error").show();
              }
            }
          });
        }
      });

  });
</script>
