<?php
    session_start();
    include('config/db.php');
    $user_id = $conn->real_escape_string(($_SESSION['user_id']));
    $todo_id = array_keys($_POST)[0];
    $stmt = "DELETE from todos where user_id='$user_id' and id='$todo_id' ";
    if($conn->query($stmt)) {
        header('Location: home.php');
    }
    else {
        echo 'Deleting Post failed ' . $conn->error;
    }
?>