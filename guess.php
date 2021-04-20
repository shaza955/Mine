<!DOCTYPE html>
<html>
<head>
	<title> Shaza Albodi and 10220ded </title>
</head>
<body>
<h1> Welcome to my guessing game 10220ded </h1>
<p>Your guess is too low </p>
<?php 
$correctnumber = 18;
if(isset($_GET['guess'])){
	if(is_numeric($_GET['guess']) === FALSE){
		echo "Your guess is not a number";
	}
	else if ($_GET['guess']<$correctnumber) {
		echo "Your guess is too low ";
	}
	else if ($_GET['guess']>$correctnumber) {
		echo "Your guess is too high ";
	}
	else if ($_GET['guess']==$correctnumber) {
		echo "Congratulations - You are right";
	}
}
else{
	echo "Missing guess parameter";
	echo "Your is too short";
}
</body>
</html>
