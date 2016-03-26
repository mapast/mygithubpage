<!DOCTYPE html>

<html lang="en-us">
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
	<meta charset="utf-8">
	<link rel="icon" href="img/favicon.ico">

	<title>The Power of Dreams</title>

	<!-- Load fonts -->
	<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
  <link href='//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css' rel='stylesheet' type='text/css'>
		<!-- Load css styles -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />



</head>
<body>
	<!-- Navbar starts -->
	<div class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<a href="index.php" class="navbar-brand">Main page</a>

			</div>
			<div class="navbar-collapse collapse" id="navbar-main">
				<ul class="nav navbar-nav">
					<li>
						<a href="sleep.php">Sleep</a>
					</li>
						<li>
							<a href="cycle.php">Sleep cycle</a>
						</li>
					<li>
						<a href="dreaming.php">Dreaming</a>
					</li>
					<li>
						<a href="tips.php">Tips</a>
					</li>
					<li>
						<a href="counter.php">Sleep calculator</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="contact.php">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Navbar ends -->
	<!-- Header section start -->
	<div class="jumbotron " id="home">
		<div class="mask"></div>
		<div class="container">
			<div class="subpage">
				<div class="header-info" onclick="location.href='index.php';" style="cursor:pointer;">
					<h1>the power of sleep</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- Header section end -->

<?php include 'scripts/mail.php';?>

	<!-- Contact section start -->
	<section id="contact">
		<div class="container">
			<header>
				<h2>Get in Touch</h2>
			</header>

			<div class="row">
				<div class="form-group">
								<div class="col-md-8">
										<?php echo $result; ?>
								</div>
						</div>
				<div class="col-md-8">
					<form action="" method="post">
						<div class="form-group col-md-6">
							<input name="name" type="text" placeholder="Your Name" class="form-control" />
						</div>
						<div class="form-group col-md-6">
							<input name="email" type="email" placeholder="Your Email" class="form-control" />
						</div>
						<div class="form-group col-md-12">
							<textarea name="message" class="form-control" rows="10" placeholder="Type Message Here..."></textarea>
						</div>
						<div class="form-group col-md-12">
							<label><p><input type="checkbox" name="copy" value=""> Send a copy of this email to me </p></label>
						</div>
						<div class="form-group col-md-12">
							<button type="submit" name="submit" class="btn btn-lg btn-primary">Send</button>
						</div>
					</form>

				</div>
				<div class="col-md-3 col-md-offset-1">
					<email>
						<span>Contact details</span>
						<p>Author: Marta Pastuszka</p>
						<p>1107487p@student.gla.ac.uk</p>
					</email>

				</div>
			</div>
		</div>
	</section>
	<!-- Contact section end -->
	<!-- Footer section start -->
  <footer class="footer">
  <div class="container">
    <p class="text-muted"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> Designed by Marta &copy; <?php date_default_timezone_set("UTC"); echo date("Y"); ?> </p>
  </div>
</footer>
	<!-- Footer section end -->
</body>
</html>