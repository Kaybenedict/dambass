
<?php 
ob_start();
session_start();
/*if (!isset($_SESSION['id'])) {

	header('location: index.php');
} */

	$username = $_SESSION['username'] ;
	$name = $_SESSION['name'] ;


include('connect.php');




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
	<title>D'ambass</title>
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	
	<link rel="stylesheet" href="style.css">
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
					<a href=".\index.php" class="active"><span class="las la-igloo"></span><span>Go To Homepage</span></a>
				</li>
				
					<li>
					<a href="addproduct.php"><span class="las la-igloo"></span><span>Add Product</span></a>
				</li>
				
				<li>
					<a href="viewproduct.php"><span class="las la-users"></span><span>View Product</span></a>
				</li>
				
				<li>
					<a href="viewincome.php"><span class="las la-clipboard-list"></span><span>View Total Income</span></span></a>
				</li>
				
				<li>
					<a href="viewpayment.php"><span class="las la-clipboard-list"></span><span>View Payment</span></a>
				</li>
				
					<li>
					<a href="customer.php"><span class="las la-users"></span><span>View Agents</span></a>
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
			    <h3 > <?php //echo ucfirst($data1['agent_name']); ?></h3>
			</div>
			<div class="user-wrapper">
            
				<img src="img/agent-1.jpg" width="40px" height="40px" alt="">
				<div>
					<h4><?php echo $username; ?></h4>
					<small><?php echo $name; ?></small>
				</div>
                <?php
                    $count=0;
                    if(isset($_SESSION['cart']))
                    {
                        $count=count($_SESSION['cart']);
                    }
                ?>
                <a href="mycart.php" class="btn btn-outline-success">My Cart (<?php echo $count; ?>)</a>
			</div>
		</header>
		<main>
			<div class="cards">
				<div class="card-single">
					<div>
						<h1></h1>
						<span>TOTAL Customers</span>
					</div>
					<div>
						<span class="las la-users"></span>
					</div>
				</div>

				<div class="card-single">
					<div>
						<h1></h1>
						<span>Total Payment</span>
					</div>
					<div>
						<span class="las la-clipboard-list"></span>
					</div>
				</div>
				<div class="card-single">
					<div>
						<h1></h1>
						<span>Total Product</span>
					</div>
					<div>
						<span class="lab la-google-wallet"></span>
					</div>
				</div>

					
			</div>
		</main>
		
			