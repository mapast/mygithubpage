<!DOCTYPE html>

<html lang="en-us">
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
  <script src="scripts/calculator.js"></script>
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
	<!-- Contact section start -->
  <div class="container" id="content">
  <div class="row">
  	<div class="col-md-8 col-md-offset-2">
      <header>
				<h2>Sleep Calculator</h2>
			</header>
  		<div id="start">
        <p>Find out when to get up if you go to bed <b>now:</b></p>
        <div class="form-group col-md-10">
        <button id="zzz" class="btn btn-md btn-primary" padding-top="20px">Calculate</button>
      </div>
      <br/>
  		<p>Or alternatively, fill in the time you have to wake up:</p>
    <div class="form-group">
            <div class="col-md-4">
  		<select id="hour" class="form-control">
  			<option>(hour)</option>
  			<option>1</option>
  			<option>2</option>
  			<option>3</option>
  			<option>4</option>
  			<option>5</option>
  			<option>6</option>
  			<option>7</option>
  			<option>8</option>
  			<option>9</option>
  			<option>10</option>
  			<option>11</option>
  			<option>12</option>
  		</select>
    </div>
          <div class="col-md-4">
  		<select id="minute" class="form-control">
  			<option>(minute)</option>
  			<option>00</option>
  			<option>05</option>
  			<option>10</option>
  			<option>15</option>
  			<option>20</option>
  			<option>25</option>
  			<option>30</option>
  			<option>35</option>
  			<option>40</option>
  			<option>45</option>
  			<option>50</option>
  			<option>55</option>
  		</select>
    </div>
          <div class="col-md-2">
  		<select id="ampm" class="form-control">
  			<option>AM</option>
  			<option>PM</option>
  		</select>
    </div>
  		<br/><br/>
      	<div class="form-group col-md-10">
      	<button id="calculate" class="btn btn-md btn-primary" padding-top="20px">Calculate</button>
  		</div>
      <div class="col-md-10">
        <div id="alert" style="display:none" class="alert alert-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span>Please select the time before continuing!</div>
      </div>
        </p>

      </div>
		</div> <!-- end start -->
		<div id="resultsNow" style="display:none;">
			<p>It takes the average human <b>fourteen minutes</b> to fall asleep.</p>
			<p>If you head to bed right now, you should try to wake up at one of the following times:</p>
			<p><span id="resultNow1" title="One Cycle: One and a half Hours of Sleep"></span>  or
			<span id="resultNow2" title="Two Cycles: Three Hours of Sleep"></span>  or
			<span id="resultNow3" title="Three Cycles: Four and a half Hours of Sleep"></span> or
			<span id="resultNow4" title="Four Cycles: Six Hours of Sleep"></span>.</p>
			<p>A good night's sleep consists of 5-6 complete sleep cycles, so ideally you should wake up at:</p>
      <p><span id="resultNow5" title="Five Cycles: Seven and a half Hours of Sleep"></span> or
      <span id="resultNow6" title="Six Cycles: Nine Hours of Sleep"></span>.</p>
			<center><a class="back" href="counter.php">Calculate again!</a><br/>
			</center>
		</div> <!-- end resultsNow -->
    <div id="results" style="display:none;">
      <p>A good night's sleep consists of 5-6 complete sleep cycles, so ideally you should fall asleep at:</p>
      <p><span id="result1" title="Six Cycles: Nine Hours of Sleep"></span> or
      <span id="result2" title="Five Cycles: Seven and a half Hours of Sleep"></span>.</p>
      <p>To wake up energised you can also fall asleep at one of the following times:</p>
      <p><span id="result3" title="Four Cycles: Six Hours of Sleep"></span> or
      <span id="result4" title="Three Cycles: Four and a half Hours of Sleep"></span>.</p>
      <p>Remember, on average it takes humans<b> fourteen minutes</b> to fall asleep!</p>
      <p>For more information about sleep cycles, quality of sleep or tips click <a href="sleep.php">here!</a>
      <center><a class="back" href="counter.php">Calculate again!</a><br/>
      </center>
    </div>
        <!-- end results -->
	</div>
</div>
</div>
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