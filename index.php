<?php
if (isset($_POST['login']))
{
  $un = strtoupper($_POST['username']);
  $pw = strtoupper($_POST['password']);
  
  if (!empty($un) && !empty($pw) )
    {
      if($un ==='ADMIN' && $pw==="ADMIN"){
        header("Location: employees.php");
        die();
      }
    }

}//isset

?>

<!Doctype html>
<html>
  <head>
     <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="M-Minimax">
    <meta name="author" content="M-Minimax">
    <title>M-Minimax | Maintenance Management Solution</title>
    <link rel="stylesheet" type="text/css" href="css/metro.min.css">
    <link rel="stylesheet" type="text/css" href="css/metro-colors.min.css">
    <link rel="stylesheet" type="text/css" href="css/metro-icons.min.css">
    <link rel="stylesheet" type="text/css" href="css/metro-responsive.min.css">
    <link rel="stylesheet" type="text/css" href="css/metro-rtl.min.css">
    <link rel="stylesheet" type="text/css" href="css/metro-schemes.min.css">
    <link rel="shortcut icon" href="icon/favicon.ico" type="image/x-icon">
    <style type="text/css">
      .login-form {
            width: 25rem;
            height: 18.75rem;
            position: fixed;
            top: 50%;
            margin-top: -9.375rem;
            left: 50%;
            margin-left: -12.5rem;
            background-color: #ffffff;
            opacity: 0;
            -webkit-transform: scale(.8);
            transform: scale(.8);
        }

    </style>
   </head>
  <body class="bg-darkTeal">
<div > 
  <div class="login-form padding20 block-shadow">
        <form method="POST" action="">
            <h1 class="text-light">Login to service</h1>
            <hr class="thin"/>
            <br />
            <div class="input-control text full-size" data-role="input">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" required="required">
                <button class="button helper-button clear"><span class="mif-cross"></span></button>
            </div>
            <br />
            <br />
            <div class="input-control password full-size" data-role="input">
                <label for="password">User password:</label>
                <input type="password" name="password" id="password" required="required">
                <button class="button helper-button reveal"><span class="mif-looks"></span></button>
            </div>
            <br />
            <br />
            <div class="form-actions">
                <button type="submit" name="login" class="button primary">Login</button>
                <button type="button" class="button link">Cancel</button>
            </div>
        </form>
        <h4 style="color:white;text-align:center;margin-top:50px;font-size:150%"><span class="mif-cog  mif-ani-spin"></span><small>Nikko Zabala | Payroll Solution. </small> </h4>
    </div>
</div>
  </body>
</html>
  <script src="js/jquery-latest.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/metro.min.js"></script>
  <script src="js/script.js"></script>