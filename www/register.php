
<HTML>
<head>
<title>Registration</title>

<style type="text/css">
.registration-box {
	width: 500px;
  	margin: 20px auto;
  	padding: 50px;
  	border: solid blue 10px;
	-webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    	box-sizing: border-box;
}

</style>
</head>
<body style="text-align: center;">
<div class="registration-box">

<?php 

require_once('_include.php');

$name = $_POST["name"];
$email = $_POST["email"];
$pwd = $_POST["pwd"];
$confPwd = $_POST["confPwd"];

if($pwd == $confPwd){
        $pwd = md5($pwd);
	$dbh = new PDO('mysql:host=localhost;dbname=samlidp', 'root', '');
	$stmt = $dbh->prepare("insert into registered(name, email, password) values (?,?,?)");	

	$stmt->bindParam(1, $name);
	$stmt->bindParam(2, $email);
	$stmt->bindParam(3, $pwd);

	if($stmt->execute()){
		echo "<p> Thank you for registration <p>";
	}

}else{
	echo "<p>Password not matched</p>";
}

?>


	<div class="page-header"> 
		<h1>Registration</h1>
	</div>
	<form action="register.php" method="post" class="form-horizontal">
		<div class="form-group">
			<label class="col-sm-2 control-label"> User Name</label>	
			<input type="text" name="name" id="name" class="form-control"></input>
		</div>
		<br/>
		<div class="form-group">
			<label class="col-sm-2 control-label"> Email</label>	
			<input type="email" name="email" id="email" class="form-control"></input>
		</div>
		<br/>
		<div>
			<label> Password </label>
			<input type="password" name="pwd" id="pwd"></input>
		</div>
		<br>
		<div>
			<label> Confirm password </label>
			<input type="password" name="confPwd" id="confPwd"></input>
		</div>
		<br>
		<input type="submit" value="Register" />
	</form>
</div>

</body>
</html>
