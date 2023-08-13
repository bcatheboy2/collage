<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>hotel Management System</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fontawesome-all.min.css">
	<link rel="stylesheet" href="css/pro1.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">
    <style>
        .login{
            background-image: url(inc/img/3.jpg);
            margin-bottom: 30px;
            padding: 50px;
            padding-bottom: 70px;
        }
        .reg-header h2{
            color: #DDDDDD;
            z-index: 999999;
        }
        .login-body h4{
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
	<div class="login registration">
		<div class="wrapper">
			<div class="reg-header text-center">
				<h2>hotel management system</h2>
				<div class="gap-30"></div>
                <div class="gap-30"></div>
			</div>
			<div class="gap-30"></div>
			<div class="login-content">
				<div class="login-body">
                    <h4>hotel Login Form</h4>
					<form action="" method="post">
						<div class="mb-20">
							<input type="text" name="username" class="form-control" placeholder="Username" required=""/>
						</div>
						<div class="mb-20">
							<input type="password" name="password" class="form-control" placeholder="Password" required=""/>
						</div>
						<div class="mb-20">
							<input class="btn btn-info submit" type="submit" name="login" value="Login">
                            
						</div>
                        </div>
						</div>
					</form>
				</div>
                 <?php 
                include("index.php");
                session_start();
                   if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    include "connect.php";
                    $login = false;
                      $username = $_POST['username'];
                      $password = $_POST['password'];
                      $sql = "Select * from register where username='$username' AND password='$password'";
        
                      $res = mysqli_query($conn, $sql);
                      $num = mysqli_num_rows($res);
                      if ($num == 1) {
                        $login = true;
                        session_start();
                        $_SESSION['loggedin']=true;
                        $_SESSION['username']=$username;
                        header("location: index.php");
                      } 
                      else {
                        $show = "login failed check your login details....";
                        // header("location:sign.php");
                      }
                    }
                    
                    ?>
                
                
			</div>
		</div>
	</div>
    <div class="footer text-center">
        <p>&copy; All rights reserved utter pompously</p>
    </div>

	<script src="inc/js/jquery-2.2.4.min.js"></script>
	<script src="inc/js/bootstrap.min.js"></script>
	<script src="inc/js/custom.js"></script>
</body>
</html>