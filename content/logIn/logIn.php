<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header('Location: landing.php');
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: landing.php");
	} else {
		echo "<script>alert('Email or Password is Wrong.')</script>";
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
    <link rel="stylesheet" href="../../style/logIn.css">
    <link rel="stylesheet" href="../../style/panel.css">
    <script src="../../scripts/login.js"></script>
    <title>Login</title>
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
    <main id="removed">
    <form class="container" action="" method="POST">
            <div>
                <h1>iComic</h1>
               
                <div class="form">

                    <input type="email" placeholder="Email" id="username" value="<?php echo $email; ?>" required>
                    <input type="password" placeholder="Password.." id="password" value="<?php echo $_POST['password']; ?>" required>
                    <div class="showPassword">
                    <input type="checkbox" onclick="showPassword()" id="checkboxMain">
                    <label for="checkbox" id="showPw">Show Password</label>
                     </div>
                </div>
                
                <div>

                    <button name="loginBtn" id="button" class="btn">Login</button>
                </div>
                <a href="./register.php" <?php ?>>
                  <p><strong>Don't have an account? Register</strong></p>  
                 </a>
            </div>
    </form>
    </main>
    <section class="panel" id="toBeCreated"/>
</body>

</html>
