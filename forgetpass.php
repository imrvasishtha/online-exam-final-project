<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>ONLINE EXAMINATION PORTAL SYSTEM || RESET PASSWORD </title>
<link  rel="stylesheet" href="css/bootstrap.min.css"/>
 <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>
 <link rel="stylesheet" href="css/main.css">
 <link  rel="stylesheet" href="css/font.css">
 <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js"  type="text/javascript"></script>
 	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<?php if(@$_GET['w'])
{echo'<script>alert("'.@$_GET['w'].'");</script>';}
?>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script type="text/javascript">
  /*$(function(){
   setTimeout(function() {
      $('#splash').fadeOut(0);
   }, 0);
});*/
</script>
<script>
function validateForm() {var y = document.forms["form"]["name"].value;	var letters = /^[A-Za-z]+$/;if (y == null || y == "") {alert("Name must be filled out.");return false;}var z =document.forms["form"]["college"].value;if (z == null || z == "") {alert("college must be filled out.");return false;}var x = document.forms["form"]["email"].value;var atpos = x.indexOf("@");
var dotpos = x.lastIndexOf(".");if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {alert("Not a valid e-mail address.");return false;}var a = document.forms["form"]["password"].value;if(a == null || a == ""){alert("Password must be filled out");return false;}if(a.length<5 || a.length>25){alert("Passwords must be 5 to 25 characters long.");return false;}
var b = document.forms["form"]["cpassword"].value;if (a!=b){alert("Passwords must match.");return false;}}
</script>


<style type="text/css">
/*#splash{
   z-index: 2;
    position:absolute;
    top:0;
    left:0;
    right: 0;
    bottom:0;
    width:100%;
    background-color:white;
    opacity: 1.8;
}*/
.container {
  position: relative;
  text-align: center;
  color: white;
}
.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

</style>
</head>

<body>
<!-- <div style="margin-left: -29px" id="splash" class="container">
    <img  src="image/exampo.jpg"  height="670" width="1366" />
    <div class="centered" style="font-family: Brandon Grotesque;color: #42f4d7;"><center><span style="font-size: 65px;"><b>Exampo</b></span><br><span style="font-size: 20px"><b>" Prove yourself to yourself not others. "</b></span></center></div>
  </div> -->
<div class="header">
<div class="row">
<div class="col-lg-6">
<span class="logo">Exampo</span></div>
</div>
</div>

    
    <div class="container">
        <div class="h-100 row align-items-center col">
        <form name="login" method="POST" onsubmit="return validate()" action="emailsender.php" enctype="multipart/form-data">

            <div class="form-group">
                <h2><b style="color:black;">Reset Password!</b></h2><br>
                <label for="email"  style="color:black;">Email Id:</label><br><BR>
                <input type="email" class="form-control" id="email" placeholder="Enter your Email id" name="email">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" style="width: 70px;" />
            </div>
            </div>
        </form>
    </div>

    <script>
        function validate() {

            var email = document.getElementById("email");

            if (email.value == "") {
                alert("email address required");
                email.focus();
                return false;
            }
            if (email.value.indexOf("@", 0) < 0) {
                email.focus();
                alert("please enter valid email address");
            }
            if (email.value.indexOf(".") < 0) {
                email.focus();
                alert("please enter valid email address");
            }
            return true;
        }
    </script>
</body>

</html> 