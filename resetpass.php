<?php
include 'dbConnection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $pwd = md5($pwd);
} else {
    echo "error in server request";
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$query = "update user set password='$pwd' where email='$email'";
$result = mysqli_query($con, $query);
if($result){
    echo "Password Change Successfully";
}else{
    mysqli_error($con);
}

