<!DOCTYPE html>
<html lang="en">

<head>
    <title>Header</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/mystyle.css">
</head>

<body>
    <?php
    include 'dbConnection.php';
    $email = test_input($_GET["email"]);

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $query1 = "select * from user where email='$email'";
    $result = mysqli_query($con, $query1);
    $num = mysqli_num_rows($result);
    if ($num == 1) {
        ?>
    <div class="container">
        <form name="forgethandler" method="POST" onsubmit="return validate()" action="resetpass.php" enctype="multipart/form-data">

            <div class="form-group">
                <h2><b>Reset Password!</b></h2><br>

                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" readonly value="<?php echo $email ?>">

                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">

                <label for="pwd2"> Confirm-Password:</label>
                <input type="password" class="form-control" id="pwd2" placeholder="Confirm  password" name="pwd2">


                <input type="submit" class="btn btn-primary" style="width: 70px;" />
            </div>
        </form>
    </div>
    <script>
        function validate() {
            var pwd = document.getElementById("pwd");
            var pwd2 = document.getElementById("pwd2");
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
            if (pwd.value == "" || pwd.value != pwd2.value) {
                pwd.focus();
                alert("Password required/do not match");
                return false;
            }
            return true;
        }
    </script>
    <?php

} else {
    echo "Email id does not found in our database.";
    echo "<a href=form.php>Click here to sign up!</a>";
}

?> 