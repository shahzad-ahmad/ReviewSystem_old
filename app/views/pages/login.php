<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Review System</title>
  <link rel="stylesheet" type="text/css" href="<?php echo dir_root_path ; ?>assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="<?php echo dir_root_path ; ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo dir_root_path ; ?>assetsviews/css/login.css">

    <script src="<?php echo dir_root_path ; ?>assets/js/prefixfree.min.js"></script>

</head>

<body>
  <div class="body"></div>
        <div class="grad"></div>
        <div class="header">
            <div>Review<span>System</span></div>
        </div>
        <br>
        <div class="login">
          
          <input id="un" type="text" placeholder="Username" name="user"><br>
          <input id="pdw" type="password" placeholder="Password" name="password"><br>
          <input id="lg_btn" type="button" value="Login">

          <div class="alert alert-danger err_lg" role="alert">
            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
            <span class="sr-only">Error:</span>
            <span class=" tx_inv"> Invalid Username or password </span>
          </div>
          
        </div>

  <script src='<?php echo dir_root_path ; ?>assets/js/jquery.js'></script>
  <script src='<?php echo dir_root_path ; ?>assets/js/cred.js'></script>

</body>

</html>