<?php 
include("config/db.php");
$email = $conn->real_escape_string($_POST["email"]);
$password = $conn->real_escape_string($_POST["password"]);
$stmt = "SELECT * FROM user where email='$email'";
$res = $conn->query($stmt);

if($res->num_rows==1) {
    $row = $res->fetch_assoc();
    $hash = $row['password'];
    if(password_verify($password, $hash)) {
        echo 'Sign In successful';
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['user_id'] = $row['id'];
        header('Location: ' . 'home.php');
    }
    else {
        echo '<a href="index.php">Enter correct credentials</a>'; 
    }
    
}
else {
    echo 'Sign In failed';
}

$conn->close();
?>
