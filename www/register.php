
<HTML>
<head>
<title>Registration</title>

<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css"></link>
<script type="text/javascript" src="bootstrap/js/min.js"></script>
</head>
<body>
<div class="container">

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
        <h1>IDP Registration</h1>
    </div>
    <div class="content">
        <form action="register.php" method="post" class="form-horizontal">
            <div class="form-group">
                <label class="col-md-2 control-label"> User Name</label>
                <div class="col-md-5">
                    <input type="text" name="name" id="name" class="form-control" required="required"/>
                </div>
            </div>
		
            <div class="form-group">
                <label class="col-md-2 control-label"> Email</label>
                <div class="col-md-5">
                    <input type="email" name="email" id="email" class="form-control" required="required"/>
                </div>
            </div>
		
            <div class="form-group">
                <label class="col-md-2 control-label"> Password </label>
                <div class="col-md-5">
                    <input type="password" name="pwd" id="pwd" class="form-control" required="required"/>
                </div>
            </div>
		
            <div class="form-group">
                <label class="col-md-2 control-label"> Confirm password </label>
                <div class="col-md-5">
                    <input type="password" name="confPwd" id="confPwd" class="form-control" required="required"/>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-info">Sign up</button>
                </div>
            </div>
	</form>
    </div>
	
</div>

</body>
</html>
