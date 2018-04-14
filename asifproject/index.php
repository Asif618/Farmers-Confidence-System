<?php session_start();
  require_once('functions/function.php');
  needLogged();
?>
<?php
if(isset($_SESSION['user']))
{
 if((time() - $_SESSION['last_time']) > 10)
 {
 header("location:logout.php");
 }
 else
 {
 $_SESSION['last_time'] = time();
 //echo "<h1 align='center'>Welcome ".$_SESSION["user"]. "</h1>";
 //echo "<h3 align='center'>Automatic Logout </h3>";
 //echo "<p align='center'><a href='logout.php'>Logout</a></p>";
 }
}
else
{
 header('Location:login.php');
}


if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 10)) {
//     // request 30 seconds ago
  session_destroy();
  session_unset();
     header("location:logout.php");
    }
 $_SESSION['LAST_ACTIVITY'] = time();

// // update last activity time
?> 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Farmer's Confidence</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
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
            <li><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <form method="_GET" action="farmer.php">
  <input type="text" name="num1" placeholder="Enter the amount of land">

   <select name="operator">
    <option>Paddy</option>
    <option>Wheet</option>
    <option>Jut</option>
    <option>Barley</option>
    <option>None</option>
  </select>

  <br>

  <input type="text" name="num2" placeholder="Enter number of day after plantation">

  <br>
  <button type="submit" name="submit" value="submit">Calculate</button>
 </form>
<?php
  if (isset($_GET['submit'])) {
    $result1 = $_GET['num1'];
    $result2 = $_GET['num2'];
    $operator = $_GET['operator'];
    switch ($operator) {
      case 'Paddy':
        echo "The the amaunt of fertilizer is ".($result1*2)." Kg<br>";
        if ($result2>=20)
        {
          echo "You Have to seed fertilizer after ".(90-$result2)." days";
        }
        else
          echo "You Have to seed fertilizer after ".(20-$result2)." days";
      break;

      case 'Wheet':
        echo "The the amaunt of fertilizer is ".($result1*1.5)." Kg<br>";
        if ($result2>=20)
        {
          echo "You Have to seed fertilizer after ".(90-$result2)." days";
        }
        else
          echo "You Have to seed fertilizer after ".(20-$result2)." days";
      break;

      case 'Jut':
        echo "The the amaunt of fertilizer is ".($result1*1)." Kg<br>";
        if ($result2>=20)
        {
          echo "You Have to seed fertilizer after ".(90-$result2)." days";
        }
        else
          echo "You Have to seed fertilizer after ".(20-$result2)." days";
      break;

      case 'Barley':
        echo "The the amaunt of fertilizer is ".($result1*.5)." Kg<br>";
        if ($result2>=20)
        {
          echo "You Have to seed fertilizer after ".(90-$result2)." days";
        }
        else
          echo "You Have to seed fertilizer after ".(20-$result2)." days";
      break;

      case 'None':
        echo "You Need to select one methode";
      break;

      default:
        echo "";
        break;
    }
  }
  else
    echo "";

 ?>




    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>
