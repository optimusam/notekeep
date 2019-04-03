<!DOCTYPE html>
<html lang="en">
  <?php include('templates/header.php'); ?>
  <div class="container text-center">
    <form action="addtodo.php" method="POST">
        <div class="form-group">
        <label for="addtodo">Add Todo</label>
        <textarea class="form-control" name="content" id="addtodo" rows="1"></textarea>
        </div>
        <input type="submit" value="Add">  
    </form>

    <?php
    include('config/db.php');
    $user_id = $_SESSION['user_id'];
    $stmt = "SELECT * FROM todos where user_id=$user_id and status like 'pending' order by date desc";
    $res = $conn->query($stmt);
    if($res->num_rows > 0) {
        echo '<h3>Todos</h3>';
        $post = '<ul class="list-group">';
        while($row = $res->fetch_assoc()) {
            $post .= '
            <li class="list-group-item">'
            . $row['content'].
            '<form method="POST" action="todocompleted.php">
            <button class="check" name='. $row['id'] .'><i class="fas fa-check"></i></button>
            </form>
            </li>';
        }
        $post .= '</ul>';
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