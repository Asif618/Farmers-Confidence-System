<?php session_start();
    require_once('functions/function.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Farmer's Confidence</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Farmer's Confidence</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <!-- <form class="navbar-form navbar-left" action="#" method="post">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
          </form> -->
          <ul class="nav navbar-nav navbar-right">
            <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <section>
      <div class="container">
        <div class="heading text-center">
          <h2>Login Here...</h2>
        </div>

        <?php
                        if(isset($_POST['send'])){
                        $name=$_POST['username'];
                        $password=md5($_POST['password']);
                        $sel="SELECT * FROM users WHERE username='$name' AND password='$password'";
                        $qry=mysqli_query($con, $sel);
                        $res=mysqli_fetch_array($qry);
                        if($res){
                          $_SESSION['name']=$res['name'];
                          $_SESSION['user']=$res['username'];
                          $_SESSION['last_time']=time();

                          header('location: index.php');
                        }else{
                          echo "Username and Password incorrect!!!";
                          }
                        }
        ?>
        <form method="post" action="">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username">
          </div>
          <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password">
          </div>
          <button type="submit" name="send" class="btn btn-default">Login</button>
        </form>
      </div>
    </section>


    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
