<?php session_start();
  require_once('functions/function.php');
  needLogged();
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
          <a class="navbar-brand" href="index.php">Farmer's Confidence</a>
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
 	<input type="number" name="num1" placeholder="Amount of land">

 	 <select name="operator">
 		<option>Paddy</option>
 		<option>Wheat</option>
 		<option>Jute</option>
 		<option>Barley</option>
 		<option>None</option>
 	</select>

 	<br>

 	<input type="number" name="num2" placeholder="Enter number of day after plantation">

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
				echo "The the amaunt of fertilizer is ".($result1*12)." Kg<br>";
				if ($result2>=45)
				{
					echo "You Have to seed fertilizer after ".(0)." days";
				}
				else
					echo "You Have to seed fertilizer after ".(45-$result2)." days";
			break;

			case 'Wheat':
				echo "The the amaunt of fertilizer is ".($result1*.73)." Kg<br>";
				if ($result2>=36)
				{
					echo "You Have to seed fertilizer after ".(0)." days";
				}
				else
					echo "You Have to seed fertilizer after ".(36-$result2)." days";
			break;

			case 'Jute':
				echo "The the amaunt of fertilizer is ".($result1*.35)." Kg<br>";
				if ($result2>=45)
				{
					echo "You Have to seed fertilizer after ".(0)." days";
				}
				else
					echo "You Have to seed fertilizer after ".(45-$result2)." days";
			break;

			case 'Barley':
				echo "The the amaunt of fertilizer is ".($result1*5.5)." Kg<br>";
				if ($result2>60)
				{
					echo "You Have to seed fertilizer after ".(0)." days";
				}
				if ($result2>=35) {
					echo "You Have to seed fertilizer after ".(61-$result2)." days";
				}
				else
					echo "You Have to seed fertilizer after ".(35-$result2)." days";
			break;

			case 'None':
				echo "You Need to select one methode";
			break;

			default:
				echo "Error";
				break;
		}
	}
	else
		echo "Error";

 ?>
</body>

</html>
