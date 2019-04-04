<!DOCTYPE html>
<html lang="en">
  <style>
      body {
      background: #2980B9;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to right, #FFFFFF, #6DD5FA, #2980B9);  /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to right, #FFFFFF, #6DD5FA, #2980B9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
    </style>
  <?php include('templates/header.php');
    include('config/db.php');
    $user_id = $_SESSION['user_id'];
    $stmt = "SELECT * FROM todos where user_id=$user_id and status like 'done' order by date desc";
    $res = $conn->query($stmt);
    if($res->num_rows > 0) {
        $post = '<div class="container"><h3>Todos</h3><ul class="list-group">';
        while($row = $res->fetch_assoc()) {
            $post .= '
            <li class="list-group-item">'
            . $row['content'].
            '<form method="POST" action="tododelete1.php">
            <button class="del btn btn-danger" name='. $row['id'] .'><i class="fas fa-trash"></i></button>
            </form>
            </li>';
        }
        $post .= '</ul></div>';
        echo $post;
    }
    else {
        echo '<h3>All Done!</h3>';
    }

    ?>

  </div>
    <script>
    
    </script>
  <?php include('templates/footer.php'); ?>
</html>