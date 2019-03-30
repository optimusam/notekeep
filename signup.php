<?php include("config/db.php");
$name = $conn->real_escape_string($_POST["name"]);
$email = $conn->real_escape_string($_POST["email"]);
$password = $conn->real_escape_string($_POST["password"]);

$stmt = "INSERT INTO user(name, email, password) VALUES('$name', '$email', '$password')";
if($conn->query($stmt)) {
  echo "Sign Up Successful<br>";
  echo "<a href='index.php'>Sign In</a>";
}
else {
  echo "Registration Failed $conn->error";
}
$conn->close();
?>