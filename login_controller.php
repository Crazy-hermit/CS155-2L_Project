<?php
include "config.php";
if(isset($_POST['username']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if(empty($username)){
        header("Location: login.php?error=User Name is required");
        exit();
    }else if(empty($password)){
        header("Location: login.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM account WHERE username='$username' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['username'] === $username && $row['password'] === $password) {
            	$_SESSION['username'] = $row['username'];
            	$_SESSION['acct_id'] = $row['acct_id'];
                $_SESSION['type'] = $row['type'];
                if($row['type']=="admin"){
                    header("Location: STAFF.php");
                }else{
                    header("Location: HOME.html");
                }
		        exit();
            }else{
				header("Location: login.php?error=Incorect User name or Password");
		        exit();
			}
		}else{
			header("Location: login.php?error=Incorect User name or Password");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}