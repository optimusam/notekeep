<!DOCTYPE html>
<html lang="en">
<style>
    body {
      background: url('bg.jpg');
    }
    h1 {
      color: white;
    }
    .contain {
      width: 40%;
      margin: 0 auto;
    }
  </style>
  <?php include('templates/header.php');
    if(isset($_SESSION['user_id'])) {
      header('Location: home.php');
    }
  ?>
  <div class="contain text-center">

  <form class="form form-signin" method="POST" action="signin.php">
  <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
  <p><a href="register.php">Create an account</a></p>
  </form>

  </div>
  
  <?php include('templates/footer.php'); ?>
</html>