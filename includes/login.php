<?php
if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=md5($_POST['password']);
$sql ="SELECT EmailId,Password,FullName FROM tblusers WHERE EmailId=:email and Password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $password, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['login']=$_POST['email'];
$_SESSION['fname']=$results->FullName;
$currentpage=$_SERVER['REQUEST_URI'];
echo "<script type='text/javascript'> document.location = '$currentpage'; </script>";
} else{
  
  echo "<script>alert('Invalid Details');</script>";

}

}

?>
<?php 
session_start();
include('includes/config.php');
error_reporting(0);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <title>BookMyCar.com</title>
    <!--Bootstrap -->
    <link
      rel="stylesheet"
      href="assets/css/bootstrap.min.css"
      type="text/css"
    />
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/style2.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/custom.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css" />
    <link
      rel="stylesheet"
      href="assets/css/owl.transitions.css"
      type="text/css"
    />
    <link href="assets/css/slick.css" rel="stylesheet" />
    <link href="assets/css/bootstrap-slider.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      id="switcher-css"
      type="text/css"
      href="assets/switcher/css/switcher.css"
      media="all"
    />
    <link
      rel="alternate stylesheet"
      type="text/css"
      href="assets/switcher/css/red.css"
      title="red"
      media="all"
      data-default-color="true"
    />
    <link
      rel="alternate stylesheet"
      type="text/css"
      href="assets/switcher/css/orange.css"
      title="orange"
      media="all"
    />
    <link
      rel="alternate stylesheet"
      type="text/css"
      href="assets/switcher/css/blue.css"
      title="blue"
      media="all"
    />
    <link
      rel="alternate stylesheet"
      type="text/css"
      href="assets/switcher/css/pink.css"
      title="pink"
      media="all"
    />
    <link
      rel="alternate stylesheet"
      type="text/css"
      href="assets/switcher/css/green.css"
      title="green"
      media="all"
    />
    <link
      rel="alternate stylesheet"
      type="text/css"
      href="assets/switcher/css/purple.css"
      title="purple"
      media="all"
    />
    <link
      rel="apple-touch-icon-precomposed"
      sizes="144x144"
      href="assets/images/favicon-icon/apple-touch-icon-144-precomposed.png"
    />
    <link
      rel="apple-touch-icon-precomposed"
      sizes="114x114"
      href="assets/images/favicon-icon/apple-touch-icon-114-precomposed.html"
    />
    <link
      rel="apple-touch-icon-precomposed"
      sizes="72x72"
      href="assets/images/favicon-icon/apple-touch-icon-72-precomposed.png"
    />
    <link
      rel="apple-touch-icon-precomposed"
      href="assets/images/favicon-icon/apple-touch-icon-57-precomposed.png"
    />
    <link rel="shortcut icon" href="assets/images/favicon-icon/favicon.png" />
    <link
      href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900"
      rel="stylesheet"
    />
</head>
<body>
<div class="modal fade" id="loginform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Login</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="login_wrap">
            <div class="col-md-12 col-sm-6">
              <form method="post">
                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Email address*">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password*">
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="remember">
               
                </div>
                <div class="form-group">
                  <input type="submit" name="login" value="Login" class="btn btn-block">
                </div>
              </form>
            </div>
           
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <p>Don't have an account? <a href="#signupform" data-toggle="modal" data-dismiss="modal">Signup Here</a></p>
        <p><a href="#forgotpassword" data-toggle="modal" data-dismiss="modal">Forgot Password ?</a></p>
      </div>
    </div>
  </div>
</div>
</body>
</html>