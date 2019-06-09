<?php
include('config.php');
if($_POST)
{
	
	$action=$_POST['action'];
	switch($action)
	{  
		case 'signup':

		$username=$_POST['name'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$query=mysql_query("select * from tbl_user where email='$email'");
	$count=mysql_num_rows($query);
	$row=mysql_fetch_array($query);
	//$id=$id+$row['id'];
	if($count=='1' )
	{
		print('<script>window.location="index.php?msg=This email already has registred ,please login ."</script>');
	}
	else
	{   

		$_SESSION['user_email']=$row['email'];
		$_SESSION['user_password']=$row['password'];
		$query1=mysql_query("INSERT INTO `tbl_user` VALUES ('".$_POST['name']."','".$_POST['email']."','".$_POST['password']."')");
		print('<script>window.location="dashboard.php "</script>');
	}
	break;

	case 'login':
	    
		$password=$_POST['password'];
		$email=$_POST['email'];
		#echo $password;
	 	$query=mysql_query("SELECT * from tbl_user where email='$email' and password='$password' ");
		$count=mysql_num_rows($query);
		$row=mysql_fetch_array($query);
		#echo $row['email'];
		#echo $row['password'];
        #echo $count;
		$_SESSION['user_email']=$row['email'];
		$_SESSION['user_password']=$row['password'];
        if($count=='1')
        {
         print('<script>window.location="dashboard.php "</script>');
        }
        else
        {
        	print('<script>window.location="login.php?msg=Incorrect email and password ."</script>');

        }


}
}
?>