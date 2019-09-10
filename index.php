<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>ONLINE EXAMINATION PORTAL SYSTEM || Exampo </title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/bootstrap-theme.min.css" />
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/font.css">
  <script src="js/jquery.js" type="text/javascript"></script>

  <script src="js/bootstrap.min.js" type="text/javascript"></script>
  <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
  <?php if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
}
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
    function validateForm() {
      var y = document.forms["form"]["name"].value;
      var letters = /^[A-Za-z]+$/;
      if (y == null || y == "") {
        alert("Name must be filled out.");
        return false;
      }
      var z = document.forms["form"]["college"].value;
      if (z == null || z == "") {
        alert("college must be filled out.");
        return false;
      }
      var x = document.forms["form"]["email"].value;
      var atpos = x.indexOf("@");
      var dotpos = x.lastIndexOf(".");
      if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= x.length) {
        alert("Not a valid e-mail address.");
        return false;
      }
      var a = document.forms["form"]["password"].value;
      if (a == null || a == "") {
        alert("Password must be filled out");
        return false;
      }
      if (a.length < 5 || a.length > 25) {
        alert("Passwords must be 5 to 25 characters long.");
        return false;
      }
      var b = document.forms["form"]["cpassword"].value;
      if (a != b) {
        alert("Passwords must match.");
        return false;
      }
    }
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
      <div class="col-md-2 col-md-offset-4">
        <a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Signin</b></span></a></div>
      <!--sign in modal start-->
      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content title1">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title title1"><span style="color:#42f4d7">Log In</span></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" action="login.php?q=index.php" method="POST">
                <fieldset>


                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="email"></label>
                    <div class="col-md-6">
                      <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">

                    </div>
                  </div>


                  <!-- Password input-->
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="password"></label>
                    <div class="col-md-6">
                      <input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label" for="password"></label>
                    <div class="col-md-6">
                      <a href="forgetpass.php">Forget Password?</a>
                    </div>
                  </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Log in</button>
              </fieldset>
              </form>
            </div>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
      <!--sign in modal closed-->

    </div>
    <!--header row closed-->
  </div>

  <div class="bg1" style="min-height:620px;">
    <div class="row">

      <div class="col-md-7">
        <div style="margin: 30px 30px;text-align: center;width: 200px;line-height: 1.6;word-spacing: 1.6px; font-family:typo; color: black; font-weight: 1000; letter-spacing: 1.5px">" Don't Stress.<br />Do Your Best.<br />Forget the Rest."</div>
      </div>
      <div class="col-md-4 panel" class="signform" style="border-radius:40px;background-color:#202020; opacity: 0.7" onMouseOver="this.style.opacity='1'" onMouseOut="this.style.opacity='0.7'">
        <!-- sign in form begins -->
        <form class="form-horizontal" name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
          <fieldset>


            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="name"></label>
              <div class="col-md-12">
                <input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="text" required>

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="gender"></label>
              <div class="col-md-12">
                <select id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" required>
                  <option value="Male">Select Gender</option>
                  <option value="M">Male</option>
                  <option value="F">Female</option>
                </select>
              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="name"></label>
              <div class="col-md-12">
                <input id="college" name="college" placeholder="Enter your college name" class="form-control input-md" type="text" required>

              </div>
            </div>


            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label title1" for="email"></label>
              <div class="col-md-12">
                <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email" required>

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="mob"></label>
              <div class="col-md-12">
                <input id="mob" name="mob" placeholder="Enter your mobile number" class="form-control input-md" type="number" required>

              </div>
            </div>


            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-12 control-label" for="password"></label>
              <div class="col-md-12">
                <input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password" required>

              </div>
            </div>

            <div class="form-group">
              <label class="col-md-12control-label" for="cpassword"></label>
              <div class="col-md-12">
                <input id="cpassword" name="cpassword" placeholder="Conform Password" class="form-control input-md" type="password" required>

              </div>
            </div>
            <?php if (@$_GET['q7']) {
      echo '<p style="color:aliceblue;font-weight:600;font-size:15px;">' . @$_GET['q7'];
  } ?>
            <!-- Button -->
            <div class="form-group">
              <label class="col-md-12 control-label" for=""></label>
              <div class="col-md-12">
                <input type="submit" class="sub" value="sign up" class="btn btn-primary" />
              </div>
            </div>

          </fieldset>
        </form>
      </div>
      <!--col-md-6 end-->
    </div>
  </div>
  </div>
  <!--container end-->
  <style>
    .footer {
      position: fixed !important;
      left: 0 !important;
      margin: 0px !important;
      padding: 0px !important;
      bottom: 0 !important;
      width: 100% !important;
    }
  </style>
  <!--Footer start-->
  <div class="row footer">
    <div class="col-md-3 box">
      <a href="#" data-toggle="modal" data-target="#aboutus">About us</a>
    </div>
    <div class="col-md-3 box">
      <a href="#" data-toggle="modal" data-target="#login">Admin Login</a></div>
    <div class="col-md-3 box">
      <a href="#" data-toggle="modal" data-target="#developers">Developers</a>
    </div>
    <div class="col-md-3 box">
      <a href="feedback.php" target="_self">Feedback</a></div>
  </div>
  <!-- Model for About us -->
  <div class="modal fade title1" id="aboutus">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" style="font-family:'typo';text-align: center; "><span style="color:#42f4d7">About us</span></h4>
        </div>

        <div class="modal-body" style="font-family:'typo'; text-align: center;padding:22px 80px 40px; ">
          <div>
            <p style="text-indent: 130px;text-align: justify;letter-spacing: 1.3px;word-spacing: 1.3px;">This web application provides facility to conduct online examination. It saves time as it allows number of students to give the exam at a time and displays the results as the test gets over, so no need to wait for the result. It is automatically generated by the server.</p>
          </div>
          <div>
            <p style="text-indent: 130px;text-align: justify;letter-spacing: 1.3px;word-spacing: 1.3px;">Administrator has a priviledge to create, modify and delete the test papers and its particular questions. User can register, login and give the test with his specific id, and can see the results as well. Its completely</p>
          </div>
        </div>
        <!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
  </div>

  <!-- Modal For Developers-->
  <div class="modal fade title1" id="developers">
    <div class="modal-dialog" style="width:700px">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" style="font-family:'typo';text-align: center; "><span style="color:#42f4d7">Developers</span></h4>
        </div>

        <div class="modal-body">
          <table class="table table-striped table-bordered" style="margin-top: 10px;">
            <tr>
              <th>Profile Img</th>
              <th>Developers Name</th>
              <th>Contact No.</th>
              <th>Email Id</th>
            </tr>
            <tr>
              <td><img src="image/princeinformal.jpg" alt="PK" height="88px" width="83px" /></td>
              <td>
                <div><a href="https://fb.com/princekatheriya" style="color:dodgerblue; font-family:'typo' ; font-size:18px" title="Find on Facebook"><u>Prince Katheriya</u></a></div>
              </td>
              <td><var style="color:#202020; font-family:'typo' ; font-size:18px">8799703921</var></td>
              <td><span style="color:#202020; font-family:'typo' ; font-size:18px">princekatheriya2@gmail.com</span></td>
            </tr>
            <tr>
              <td><img src="image/sachin.jpg" alt="SK" height="88px" width="83px" /></td>
              <td><a href="https://fb.com/imskthakurs" style="color:dodgerblue; font-family:'typo' ; font-size:18px" title="Find on Facebook"><u>Sachin Katheriya</u></a></td>
              <td><var style="color:#202020; font-family:'typo' ; font-size:18px">9315561868</var></td>
              <td>
                <div style="color:#202020; font-family:'typo' ; font-size:18px">sachinkatheriya591@gmail.com</div>
              </td>
            </tr>
            <tr>
              <td><img src="image/raman.jpg" alt="RS" height="88px" width="83px" /></td>
              <td><a href="https://fb.com/imrvasishtha" style="color:dodgerblue; font-family:'typo' ; font-size:18px" title="Find on Facebook"><u>Raman Sharma</u></a></td>
              <td><var style="color:#202020; font-family:'typo' ; font-size:18px">9711190164</var></td>
              <td><span style="color:#202020; font-family:'typo' ; font-size:18px">imrshamaofficial@gmail.com</span></td>
            </tr>
            <tr>
              <td><img src="image/sahu.jpg" alt="GS" height="88px" width="83px" /></td>
              <td><a href="https://www.facebook.com/gaurav0906" style="color:dodgerblue; font-family:'typo' ; font-size:18px" title="Find on Facebook"><u>Gaurav Kumar Sahu</u></a></td>
              <td><var style="color:#202020; font-family:'typo' ; font-size:18px">8299686879</var></td>
              <td><span style="color:#202020; font-family:'typo' ; font-size:18px">sahugaurav@gmail.com</span></td>
            </tr>
          </table>
          <!--  <p>
		<div class="row">
		<div class="col-md-4">
		 <img src="#" width=100 height=100 alt="" class="img-rounded">
		 </div>
		 <div class="col-md-5">
		<a href="https://fb.com/imrvasishtha" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Raman Sharma</a>
		<br><a href="https://www.facebook.com/gaurav0906" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Gaurav Kumar Sahu</a>
		<br><a href="https://fb.com/imskthakurs" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Sachin Katheriya</a><br>
    <a href="https://fb.com/princekatheriya" style="color:#202020; font-family:'typo' ; font-size:18px" title="Find on Facebook">Prince Katheriya</a>
		<h4 style="color:#202020; font-family:'typo' ;font-size:16px" class="title1">+91 9711190164</h4>
		<h4 style="font-family:'typo' ">imrshamaofficial@gmail.com</h4>
		<h4 style="font-family:'typo' ">IIMT College Of Engineering, Greater Noida</h4></div></div>
		</p> -->
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

  <!--Modal for admin login-->
  <div class="modal fade" id="login">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title"><span style="color:#42f4d7;font-family:'typo' ">LOGIN</span></h4>
        </div>
        <div class="modal-body title1">
          <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
              <form role="form" method="post" action="admin.php?q=index.php">
                <div class="form-group">
                  <input type="text" name="uname" maxlength="20" placeholder="Admin user id" class="form-control" />
                </div>
                <div class="form-group">
                  <input type="password" name="password" maxlength="15" placeholder="Password" class="form-control" />
                </div>
                <div class="form-group" align="center">
                  <input type="submit" name="login" value="Login" class="btn btn-primary" />
                </div>
              </form>
            </div>
            <div class="col-md-3"></div>
          </div>
        </div>
        <!--<div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>-->
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
  <!--footer end-->


</body>

</html>