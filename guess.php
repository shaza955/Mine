<!DOCTYPE html>
<html>
<head>
	<title>Guessing Game for Charles Severance  </title>
</head>
<body>
<h1> Welcome to my guessing game </h1>
<p>Your guess is too low </p>
<?php 
$correctnumber = 17;
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
	echo "Missing guess parameters <br> your guess too short";
}
</body>
</html>