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
  <?php include('templates/header.php'); ?>
  <div class="contain text-center">

  <form class="form form-signin" method="POST" action="signup.php" onsubmit="return validate();">
  <h1 class="h3 mb-3 font-weight-normal">Sign Up</h1>
  <label for="inputName" class="sr-only">Name</label>
  <input type="text" name="name" id="inputName" class="form-control" placeholder="Name" required>
  <label for="inputEmail" class="sr-only">Email address</label>
  <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required>
  <label for="inputPassword" class="sr-only">Password</label>
  <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
  <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
  </form>
  </div>
  <script>
    function validate() {
    var x = document.querySelector("#inputName").value;
    var b = document.querySelector("#inputEmail").value;
    var p = document.querySelector("#inputPassword").value;
    if (x == "") {
    alert("Name must be filled.");
     return false;
    }
    if (b == "") {
    alert("Email ID must be filled.");
    return false;
    }
    if (p == "") {
    alert("Password must be filled.");
    return false;
    }
    return true;
  }
  </script>
  <?php include('templates/footer.php'); ?>
</html>