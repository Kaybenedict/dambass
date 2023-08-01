<?php 
session_start();
include('check_login.php');
include('connect.php');
?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<title>D'ambass</title>
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	<link href="./img/logo.PNG" rel="icon">
  <link href="./img/logo.PNG" rel="apple-touch-icon">
</head>
<body>
	<input type="checkbox" id="nav-toggle">
	<div class="sidebar">
		<div class="sidebar-brand">
			<h2><span class="lab la-accusoft"></span>Dashboard</h2>
		</div>
		<div class="sidebar-menu">
			<ul>
				<li>
					<a href="index.php" class="active"><span class="las la-igloo"></span><span>Go To Homepage</span></a>
				</li>
				
					<li>
					<a href="profile.php"><span class="las la-igloo"></span><span>My  Profile</span></a>
				</li>
				
					<li>
					<a href="deposit.php"><span class="las la-igloo"></span><span>Deposit</span></a>
				</li>
				
				
					<li>
					<a href="withdraw.php"><span class="las la-igloo"></span><span>Withdraw</span></a>
				</li>
				
				
				
				<li>
					<a href="viewcommisions.php"><span class="las la-users"></span><span>My Commission</span></a>
				</li>
				
				<li>
					<a href="buy_product.php"><span class="las la-users"></span><span>Buy Product</span></a>
				</li>
				
				<li>
					<a href="redirect_downline.php"><span class="las la-clipboard-list"></span><span> Downline</span></a>
				</li>
				
		
				
				
				<li>
					<a href="logout.php"><span class="las la-user-circle"></span><span>Logout</span></a>
				</li>
				
				
			</ul>
		</div>
		
	</div>
	<div class="main-content">
		<header>
			<h1>
				<label for="nav-toggle">
					<span class="las la-bars"></span>
				</label>
			  	Dashboard	
			</h1>	
			<div class="wel">
			    <small >Balance<br> NGN <?php echo  $balance;  ?></small> 
			</div>
			<div class="user-wrapper">
				<!--img src="img/agent-1.jpg" width="40px" height="40px" alt=""-->
				<div>
					<h4><?php echo $unique_code; ?></h4>
					<small><?php echo $name; ?></small>
				</div>
			</div>
		</header>
		<main>
			<div class="cards">
				<div class="card-single">
					<div>
						<h1></h1>
						<span>TOTAL INCOME</span>
					</div>
					<div>
						<span class="las la-users"></span>
					</div>
				</div>

				<div class="card-single">
					<div>
						<h1></h1>
						<span>MY DOWNLINE</span>
					</div>
					<div>
						<span class="las la-clipboard-list"></span>
					</div>
				</div>
				<div class="card-single">
					<div>
						<h1></h1>
						<span>ACTIVE</span>
					</div>
					<div>
						<span class="lab la-google-wallet"></span>
					</div>
				</div>

					
			</div>
		</main>
		
			