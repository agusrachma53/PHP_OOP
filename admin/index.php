<?php 
  include("../config/config.php");
?>

<!DOCTYPE html>



<head>

  

  <title>Administrator Avaya</title>

  <link rel="stylesheet" href="<?php echo $base_url; ?>/css/loginstyle.css">

  <script type="text/javascript" src="<?php echo $base_url; ?>/js/jquery-2.0.3.min.js"></script>

  

  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>

  <section class="container">

    <div class="login">

      <h1>Login to CMS Avaya </h1>

      

      <form method="post" action="config/login_process.php">

        <p><input type="text" name="username" value="" placeholder="Username or Email"></p>

        <p><input type="password" name="password" value="" placeholder="Password"></p>

        <p class="remember_me" hidden=true>

          <label>

            <input type="checkbox" name="remember_me" id="remember_me">

            Remember me on this computer

          </label>

        </p>

        <p class="submit"><input type="submit" name="commit" value="Login"></p>

      </form>

      <p> <div id="success"></div> </p>

    </div>



    <div class="login-help" >

     

      <p hidden=true>Forgot your password? <a href="#">Click here to reset it</a>.</p>

    </div>

  </section>



  

</body>

</html>

