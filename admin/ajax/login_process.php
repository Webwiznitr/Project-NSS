<?php session_start();

    require '../config.php';
	if(!empty($_POST)){
        
		$_SESSION['admin']=array();
		$uname = mysqli_real_escape_string($conn,trim($_POST['userNM']));
        $upass = mysqli_real_escape_string($conn,trim($_POST['userPWD']));
        $md5=md5($upass);
        $where=" WHERE iLogin_name='$uname' and iLogin_password='$md5'";
        $auth_login_q="SELECT * FROM login_tbl". $where;
        $auth_login_res=mysqli_query($conn, $auth_login_q) or die(mysqli_error($conn));
		$row=mysqli_fetch_assoc($auth_login_res);
		if($row['iLogin_password']==md5($upass)){
			$_SESSION['admin']['userID'] = $row['iLogin_id'];
			$_SESSION['admin']['userNAME'] = $row['iLogin_name'];
            $_SESSION['admin']['status']=1;
            header("location: ../index.php");
		}
		else{
				$_SESSION['admin']['error']="Invalid Username and Password !";
                header("location:../authlogin.php");
			}
	}
	else{
		header("location:../authlogin.php");
	}
?>