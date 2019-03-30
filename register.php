<!DOCTYPE html>
<html lang="en">

  <?php include('templates/header.php'); ?>
  <div class="container text-center">

  <form class="form form-signin" method="POST" action="signup.php">
  <h1 class="h3 mb-3 font-weight-normal">Register</h1>
  <label for="inputName" class="sr-only">Name</label>
  <input type="text" name="name" id="inputName" class="form-control" placeholder="Name" required>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
  </form>
  </div>
  <?php include('templates/footer.php'); ?>
</html>