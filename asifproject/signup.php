<?php
    require_once('functions/function.php');

    if(isset($_POST['send'])){
		$name=$_POST['name'];
		$phone=$_POST['phone'];
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		// $photo=$_FILES['photo'];
		// $ImageName='user-'.time().'-'.md5(rand(10000,100000)).'.'.pathinfo($photo['name'],PATHINFO_EXTENSION);

		if(empty($phone)||(empty($password))){
			echo"<script>window.alert('please fill up the required fields!!')</script>";
 			exit();
			}
		else{
		$insert="INSERT INTO users(name,phone,username,password)VALUES('$name','$phone','$username','$password')";
		$qry=mysqli_query($con,$insert);
		if($qry){
			 header('Location: index.php');
			}
			else{
				 echo"window.alert('Product insert Failed!!')";
				}
		}
	}
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
          <form class="navbar-form navbar-left">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
          </form>
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
          <h2>Signup Here...</h2>
        </div>
        <form method="post" action="">
          <label>Name</label>
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Name">
          </div>
          <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" class="form-control" placeholder="Mobile">
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="username">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
          </div>
          <button type="submit" name="send" class="btn btn-default">Signup</button>
        </form>
      </div>
    </section>


    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
