<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="style1.css">
	<style>
        body{ font: 14px sans-serif; text-align: center; margin-top: 100px;}
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

    <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    </p>
		
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