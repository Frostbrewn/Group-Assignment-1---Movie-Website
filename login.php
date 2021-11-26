<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}
 
// Include config file
require_once "config.php";
 
// Define variables and initialize with empty values
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        // Prepare a select statement
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            // Set parameters
            $param_username = $username;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Store result
                mysqli_stmt_store_result($stmt);
                
                // Check if username exists, if yes then verify password
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    // Bind result variables
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            // Password is correct, so start a new session
                            session_start();
                            
                            // Store data in session variables
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            // Redirect user to welcome page
                            header("location: welcome.php");
                        } else{
                            // Password is not valid, display a generic error message
                            $login_err = "Invalid username or password.";
                        }
                    }
                } else{
                    // Username doesn't exist, display a generic error message
                    $login_err = "Invalid username or password.";
                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	
	<style>
        body{ font: 14px sans-serif; }
        .wrapper{ width: 360px; padding: 20px; margin-top: 50px;}
    </style>
</head>
<body>

	<header>
		<section>
			<div class="logo">
				<a href="index.html">Frostbrewn movies</a>
			</div>
			<div class="nav">
				<a href="home.html">home</a>
				<a href="home.html">genres</a>
				<a href="http://localhost/Movie_Seat_Reservation_System/">bookings</a>
				<a href="home.html">featured</a>
				<a href="http://localhost/Movie_Seat_Reservation_System/index.php?page=movies">movies</a>
				<a href="home.html">tv series</a>
				<a href="https://www.imdb.com/chart/boxoffice/?ref_=nv_ch_cht">top IMDB</a>
				<a href="home.html">a-z list</a>
				<a href="register.php">register</a>
			</div>
		</section>
		<div class="searchItem">
			<div class="search">
				<input type="text" placeholder="type to search">
				<i class="fas fa-search"></i>
			</div>
			<button class="btn"><a href="login.php">login</a></button>
		</div>
	</header>

    <div class="wrapper">
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>

        <?php 
        if(!empty($login_err)){
            echo '<div class="alert alert-danger">' . $login_err . '</div>';
        }        
        ?>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $username; ?>">
                <span class="invalid-feedback"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>">
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Login">
            </div>
            <p>Don't have an account? <a href="register.php">Sign up now</a>.</p>
        </form>
    </div>
	
		<footer class="footer">
			<div class="footer-wave-box">
				<div class="footer-wave footer-animation">
					
				</div>
			</div>
			<div class="footerLinkItem">
				<div class="footerLinks">
					<div class="links">
						<p>Frostbrewn movies</p>
						<a href="home.html">Frostbrewn movies</a>
						<a href="">contact</a>
						<a href="">sitemap</a>
						<a href="">RSS</a>
						<a href="">DMCA</a>
					</div>
					<div class="links">
						<p>genres</p>
						<a href="home.html">action</a>
						<a href="">adventure</a>
						<a href="">crime</a>
						<a href="">romance</a>
						<a href="">comedy</a>
					</div>
					<div class="links">
						<p>country</p>
						<a href="home.html">united states</a>
						<a href="">great britain</a>
						<a href="">china</a>
						<a href="">korea</a>
						<a href="">india</a>
					</div>
				</div>
					
				
			<div class="subscribe">
				<h5>subscribe</h5>
				<p class="sbsP">subscribe to the website mailing list to receive updates
				on movies
				</p>
				<input class="emailInput" type="text" placeholder="enter your email">
				<button class="subscribeBtn">subscribe</button>
			</div>
				
				
				<div class="copyright">
					<h2>Frostbrewn Movies</h2>
					<p>Copyright © FrostbrewnMovies.to. All rights reserved.</p>
					<p class="disclaimer">Disclaimer: frostbrewnmovies.to is a site that does not store any files on its server. All contents are provided by non-affiliated third parties.</p>
				</div>
				
			</div>
		</footer>
</body>
</html>