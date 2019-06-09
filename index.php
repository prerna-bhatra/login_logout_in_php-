<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
	</head>
	<body>


		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<h1>Sign UP</h1>
					<h3>Already have an acoount</h3>
					<a href="login.php">Login</a>
					<br/><br/>
					<form action="checklogin.php" method="POST">
						<input type="hidden" name="action"  value="signup" >
						<input type="text" name="name" placeholder="Full Name"   class="form form-control">
						<br/><br/>
						<input type="email" name="email" placeholder="Email" class="form form-control"  >
						<br/><br/>
						<input type="password" name="password" placeholder="password"  class="form form-control" >
						<br/><br/>
						<input type="submit" value="submit"  class="form form-control" >
					</form>
				</div>
			</div>
			
		</div>
				<?php
		if(isset($_GET['msg']))
		{
          
		?>
		<div>Message-:
			<?php 
			echo $_GET['msg'];
			?>
		</div>
	<?php } ?>

	</body>
</html>