<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet"  href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
<div class="form-group">
<?php if(isset($_GET['msg'])){?>
<div>Error:-
<?php echo $_GET['msg'];?>
</div>
<?php }?>

    <div class="container">
    	<div class="col-md-5">
	<form method="POST" action="checklogin.php" >
		<br/>
		<input type="hidden"  name="action"  value="login" />
    	<input type="email" placeholder="username" name="email"  class="form-control" />
    	<br/>
    	<br/>
    	<input type="password" name="password" placeholder="password" class="form-control"/>
        <input type="submit" name="submit" value="login" />
        <br/>
        <br/>
        <h3>Don't have account</h3>
        <a href="index.php">Sign Up</a>
	</form></div></div>
	
</body>
</html>