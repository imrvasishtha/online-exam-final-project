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
    $email = test_input($_POST["email"]);

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
        $rec = "$email";
        $link = str_replace("@", "%40", "$email");
        $sub = "Reset Password";
        $message = "Click this link to reset your password<br>";
        $message .= "http://localhost/online-exam-final-project/forgethandler.php?email=$link";
        $message .= "<br>Thank you!";
        $header = "From: ramansharma.lts@gmail.com";
        $header  .= 'MIME-Version: 1.0' . "\r\n";
        $header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $retval = mail($rec, $sub, $message, $header);
        if( $retval == true ) {
            echo "
            <div class='container'>
                <div class='form-group'>
                    <h2><b>Email send successfully check your Inbox</b></h2><br>
                </div>
            </div>";
         }else {
            echo "Message could not be sent...";
         }
        ?>
    <?php

} else {
    echo "Email id does not found in our database.";
    echo "<a href=form.php>Click here to sign up!</a>";
}
