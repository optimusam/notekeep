<?php 
include("config/db.php");
$email = $conn->real_escape_string($_POST["email"]);
$password = $conn->real_escape_string($_POST["password"]);

$stmt = "SELECT * FROM user where email='$email' and password='$password'";
$res = $conn->query($stmt);

if($res->num_rows==1) {
    echo 'Sign In successful';
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $res->fetch_assoc()['id'];
    header('Location: ' . 'home.php');
}
else {
    echo 'Sign In failed';
}

$conn->close();
?>
