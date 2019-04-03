<?php
    session_start();
    include('config/db.php');
    $user_id = $conn->real_escape_string(($_SESSION['user_id']));
    $content = $conn->real_escape_string($_POST['content']);
    $stmt = "INSERT INTO todos(user_id, content, status) VALUES ('$user_id', '$content', 'pending')";
    
    if($conn->query($stmt)) {
        header('Location: home.php');
    }
    else {
        echo 'Adding Post failed ' . $conn->error;
    }
?>