<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="Style/Design.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </head>

  <body style="background-image: url('Image/BGtoy.jpg'); background-size: cover;">
    <div class="container-fluid">
      <div class="row" id="login">
        <div class="col form">
          <h1>LOG IN</h1>
          <form action="login.php" method="post">
            <div class="form-group">
              <label for="exampleInputEmail1">Email:</label>
              <input type="email" class="form-control" id="exampleInputEmail1" name="Email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password:</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="Password">
            </div>
            <div class="text-center btn-1">
              <a href="homehtml.php" style="text-decoration:none">
                <button type="button" class="btn btn-dark btn-lg btn-block" name="signupBtn"> LOG IN</button>
              </a>
            </div>
            <br>
            <div class="text-center btn-1">
              <button type="button" class="btn btn-danger btn-lg btn-block">Log In with Google</button>
            </div>
            <br>
            <div class="text-center btn-1">
              <button type="button" class="btn btn-info btn-lg btn-block">Log In with Facebook</button>
            </div>
            <hr>
            <div class="text-center btn-1">
              <a href="Signuphtml.php" style="text-decoration:none">
                <button type="button" class="btn btn-dark btn-lg btn-block" name="signupBtn">REGISTER</button>
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
