<?php
    include_once 'connection.php';
    session_start();
    
    $email = $_POST['username'];
    $password = $_POST['password'];

    $sql_login  = "SELECT * FROM users Where username = '{$username}' and password = '{$password}'";
    $login_res = mysqli_query($conn,$sql_login);

    if(mysqli_num_rows($login_res) > 0)
    {
       while($login_row = mysqli_fetch_assoc($login_res))
       {
        $_SESSION['user_id'] = $login_row['ID'];
        $_SESSION['email'] = $login_row['email'];
        $_SESSION['password'] = $login_row['password'];

		if($remember == 1){
			setcookie("user", $_SESSION['user_id'], (time() + (86400 * 30)), "/");
		}else{
			$_SESSION['user'] =  $_SESSION['user_id'];	
			}
        header("Location: index.php");
        exit;
        
       } 
    }
    else
    {
    
        $_SESSION['invalid'] = "Invalid Username or password";
        header("Location: form.php");
        exit;

    }

?>