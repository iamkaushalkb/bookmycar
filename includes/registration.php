<?php
//error_reporting(0);
if(isset($_POST['signup']))
{
$fname=$_POST['fullname'];
$email=$_POST['emailid']; 
$mobile=$_POST['mobileno'];
$password=md5($_POST['password']); 
$sql="INSERT INTO  tblusers(FullName,EmailId,ContactNo,Password) VALUES(:fname,:email,:mobile,:password)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
echo "<script>alert('Registration successfull. Now you can login');</script>";
}
else 
{
echo "<script>alert('Something went wrong. Please try again');</script>";
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
<script>
function checkAvailability() {
$("#loaderIcon").show();
jQuery.ajax({
url: "check_availability.php",
data:'emailid='+$("#emailid").val(),
type: "POST",
success:function(data){
$("#user-availability-status").html(data);
$("#loaderIcon").hide();
},
error:function (){}
});
}
</script>
<script type="text/javascript">
function valid()
{
if(document.signup.password.value!= document.signup.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.signup.confirmpassword.focus();
return false;
}
return true;
}
</script>
</head>
<body>
<div class="modal fade" id="signupform">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title">Sign Up</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="signup_wrap">
            <div class="col-md-12 col-sm-6">
              <form  method="post" name="signup" onSubmit="return valid();">
                <div class="form-group">
                  <input type="text" class="form-control" name="fullname" placeholder="Full Name" required="required">
                </div>
                      <div class="form-group">
                  <input type="text" class="form-control" name="mobileno" placeholder="Mobile Number" maxlength="10" required="required">
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="emailid" id="emailid" onBlur="checkAvailability()" placeholder="Email Address" required="required">
                   <span id="user-availability-status" style="font-size:12px;"></span> 
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password" required="required">
                </div>
                <div class="form-group checkbox">
                  <input type="checkbox" id="terms_agree" required="required" checked="">
                  <label for="terms_agree">I Agree with <a href="#">Terms and Conditions</a></label>
                </div>
                <div class="form-group">
                  <input type="submit" value="Sign Up" name="signup" id="submit" class="btn btn-block">
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>
      <div class="modal-footer text-center">
        <p>Already got an account? <a href="#loginform" data-toggle="modal" data-dismiss="modal">Login Here</a></p>
      </div>
    </div>
  </div>
</div>
</body>
</html>