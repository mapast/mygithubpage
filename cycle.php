<!DOCTYPE html>

<html lang="en-us">
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/1.0.2/Chart.min.js"></script>
	<link rel="icon" href="img/favicon.ico">
  <meta charset="utf-8">

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
	<div class="jumbotron" id="home">
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

	<section id="main1">
		<div class="container">
			<div class="row">
        <div class="col-md-8 col-md-offset-2">
          <header>
            <h2>Sleep cycle</h2>
          </header>
          <p>Probably every one of us have woken up after a what seemed to be a "good night's sleep" feeling tired or with a headache, as if you slept not for 8, but for 2 hours instead! The sleep cycle is to blame for that. Human sleep occurs in periods of approximately 90 minutes and if you wake up in the middle of a single cycle, you will feel fatigue. During those 90 minutes, the sleeper usually passes through five stages of sleep: 1, 2, 3, 4 and REM. It can be challenging to determine the optimal times of waking up and falling asleep - I developed a "sleep calculator" that will show you the optimal time of waking up so you can feel well-rested every morning! Find it here: <a href="counter.php">Sleep calculator</a>
          </p>
        </div>
			</div>
		</div>
	</section>
  <section id="main4" class="darker">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <header>
              <h2>The importance of sleep</h2>
            </header>
              <p>Russel Foster is a circadian neuroscientist who studies the importance of sleep. In this very engaging video he explains why do we spend 1/3 of our lives sleeping, what are the functions of sleep and shows examples of sleep deprivation.
              </p>
              <iframe width="750" height="400" src="https://www.youtube.com/embed/LWULB9Aoopc" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </section>
  <section id="main2">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <header>
            <h3>Non-REM sleep</h3>
          </header>
            <p>Non-REM sleep constitutes of around 80% of total sleep duration. Brain waves slow down, breathing rate, heart rate and temperature decrease. Stage 1 occurs when you are drifting off, falling asleep and can be awakened easily. It is also a stage where a falling sensation and sudden muscle twiches can occur, waking you up: these are called "hypnic jerks"[1] and nobody quite knows what causes them. Although they are a source of fright, they usually are just a moment of a harmless scare. In stage 2, the brain waves slow down forming theta waves and the eye movements stop. Stage 3 is known as "deep sleep" or "slow-wave sleep" due to delta activity, high amplitude waves. The sleeper in stage 3 is least responsive to the environment and it is believed to be the most restful form of sleep.
            </p>
        </div>
      </div>
    </div>
  </section>
  <section id="main3" class="darker">
  		<div class="container">
  			<div class="row">
          <div class="col-md-8 col-md-offset-2">
            <header>
              <h3>REM stage</h3>
            </header>
              <p>During rapid eye movement stage, heart rate, breathing rate and tempersture all become unregulated and the muscles are paralysed. The sleeper can now experience vivid dreams. Adults spend around 20-25% of their sleep in REM stage however its function remains uncertain. Newborns spend 9 hours in REM stage alone![2] William C. Dement performed a study in which he woke up the participants as soon as they entered REM stage. As the study went on, he noticed the more deprived of REM sleep, the more often he had to wake the participants. After the experiment, the participants caught up on REM sleep (known as REM rebound)[2].</p>
          </div>
  			</div>
  		</div>
  	</section>

  <!-- References section start -->
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <header>
          <h3>References</h3>
        </header>
        <p id="reference">1. Asleep, W. (2016). Why You Sometimes Feel Like You're Falling And Jerk Awake When Trying To Fall Asleep. <i>Business Insider.</i> Retrieved 20 March 2016, from http://www.businessinsider.com/what-is-a-hypnic-jerk-2014-5?IR=T.</p>
        <p id="reference">2. Siegel, Jerome M (1999). "Sleep". <i>Encarta Encyclopedia.</i> Microsoft. Archived from the original on 14 December 2007. Retrieved 25 January 2008.</p>
        <p id="reference">3. William Dement, "The Effect of Dream Deprivation: The need for a certain amount of dreaming each night is suggested by recent experiments." <i>Science 131. </i>3415, 10 June 1960.</p>

      </div>
    </div>
  </div>
  <!-- References section end -->
  <!-- Footer section start -->
  <footer class="footer">
  <div class="container">
    <p class="text-muted"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span> Designed by Marta &copy; <?php date_default_timezone_set("UTC"); echo date("Y"); ?> </p>
  </div>
</footer>
	<!-- Footer section end -->
</body>
  <script src="scripts/chart.js"></script>
</html>
