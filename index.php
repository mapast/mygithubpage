<!DOCTYPE html>

<html lang="en-us">
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
	<meta charset="utf-8">

	<link rel="icon" href="img/favicon.ico">

	<title>The Power of Sleep</title>

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
	<div class="jumbotron home home-fullscreen" id="home">
		<div class="mask"></div>
		<div class="container">
			<div class="header-info">
				<h1>the power of sleep</h1>
				<p>Welcome to my website that will open your eyes <br>to the fascinating world of your unconscious mind.
				</p>
			</div>
		</div>
	</div>

	<!-- Intro section start -->
	<section id="intro" class="darker">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<p>On average, people spend <b>25 years</b> of their lives sleeping and we still know very little about this state. The unconscious mind is a fascinating mystery many researchers try to investigate. This website will allow you to gain information about what sleep actually is, why is it so important and what to do in order to improve it.</p>
					<p>The <a href="sleep.php">Sleep</a> section contains some basic information about why do we sleep and why is day and night rhythm crucial for all living organisms.</p>
					<p>The <a href="cycle.php">Sleep cycle</a> section will help you understand what is happening to your body during all stages of sleep cycle.</p>
					<p>From the <a href="dreaming.php">Dreaming</a> subpage you can find out a bit about Freudian theories, nightmares and why you can not believe the dream dictionaries.</p>
					<p>You can find out great <a href="tips.php">Tips</a> for improving your sleep to feel more rested and energised in the morning.</p>
					<p> The <a href="counter.php">Sleep calculator</a> is a great tool to figure out the optimal times of falling asleep and waking up!
					<p>Lastly, you can <a href="contact.php">Contact</a> me using a form available on the website.</p>
					<p>I hope you will find a lot of information and useful facts that will allow you to understand and improve your sleep! Do not hesitate to write any comments you might have using the form on the website.
					</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->
	<!-- Footer section start -->
	<footer class="footer">
		<div class="container">
			<p class="text-muted"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> Designed by Marta &copy; <?php date_default_timezone_set("UTC"); echo date("Y"); ?> </p>
		</div>
	</footer>
	<!-- Footer section end -->

</body>
</html>