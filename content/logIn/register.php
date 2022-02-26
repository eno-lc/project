<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: landing.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jura&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../style/register.css">

    <title>Register</title>
</head>

<body>
    <header>
        <div class="landing-header-item1">
            <img id="item1-child1" src="../../img/landingImages/comic-book.png" alt="iComic Logo">
            <h1 id="item1-child2">iComic</h1>
        </div>
        <section class="landing-header-item2">
            <a class="item2-child" href="../landing/landing.php">
                <button class="item2-child">Home</button>
             </a>
             <a class="item2-child" href="../about/about.php">
                <button class="item2-child">About</button>
             </a>
            <button class="item2-child">Contact</button>
            <input type="text" placeholder="Search..." id="search">
        </section>
    </header>
    <main>
        <center>
            <form onsubmit="return validation()" action="" method="POST">
            <div class="container">
                <h1>iComic</h1>
                <div class="form"  method ="post">
                    <input type="text" placeholder="User Name" id="username" name="username" value="<?php echo $username; ?>" required> 
                    <br> <span style="color: red;" id="userError"></span><br>
                    <input type="email" placeholder="Email" id="email" name="email" value="<?php echo $username; ?>" required>
                    <br> <span style="color: red;" id="emailError"></span> <br>
                    <input type="password" placeholder="Password" id="password" name="password" value="<?php echo $_POST['password']; ?>" required>
                    <br> <span style="color: red;" id="passwordError"></span><br>
                    <input type="password" placeholder=" Confirm Password" id="password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>

                    <div class="showPassword">
                        <input type="checkbox" onclick="showPassword()" id="checkboxMain">
                        <label for="checkbox" id="showPw">Show Password</label>

                         </div>

                </div>
            
                <div>
                    <!-- <input class="rgsterBtn" type="submit" value="Register" name="submit"> -->
                    <button name="submit" class="rgsterBtn">Register</button>
                </div>
                <a  href="./logIn.php">
                    <p><strong>Already have an account? Log In</strong></p>  
                   </a>
            </div>
            </form>
            <script src="./validation.js"></script>
        </center>
    </main>
</body>

</html>
