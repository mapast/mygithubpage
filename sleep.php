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
	<!-- Main 1 section start -->
	<section id="main1">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
          <header>
            <h2>Sleep</h2>
          </header>
          <p>Sleep is a natural state of unconsciousness, where the muscles relax, sensory activity ceases, and interaction with surroundings decreases. All animals need sleep to function; some, like giraffes, need only 2 hours of sleep, and some like bats can sleep for 20 hours per day. Some animals put only one hemisphere to sleep at a time; seals use the other, conscious hemisphere, to breathe above the water surface. </p>
          <p>Humans, however, do not posess this ability. The optimal amount of sleep in humans varies according to age and also individual factors. On average, adults need 7 to 9 hours of sleep every night. The chart shows the normal range of amount of sleep needed to function by humans, from infancy to adulthood.</p>
            <canvas id="lineChart" width=800px height=400px></canvas>
          <p>These number of hours of sleep needed to function properly were recommended by The National Sleep Fundation after a 2-year study [1]. Not getting enough sleep, i.e. sleep debt, can cause a decrease in cognitive functions. Students need to remember the importance of a good night's sleep! Sleep deprivation can lead to deficits in attention and working memory. What is interesting, often the individual's subjective perception of their fatigue varies very much from the truth. That means when a person already shows the signs of decreased attention and working memory problems due to sleep deprivation, they feel absolutely normal!</p>
        </div>
			</div>
		</div>
	</section>
  <section id="main2" class="darker">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <header>
            <h2>Circadian clock</h2>
          </header>
          <p>Many ogranisms on Earth, including animals, plants or even fungi and bacteria, function following a 24-hour rhythm called a circadian clock. They show patterns of sleep and feedig, as well as body temperature, brain wave, hormone production or ell regeneration. Most importantly, the circadian clock is responsible for <b>photoperiodism</b>, the physiological reactions to the length of night and day. It is crucial for survival of both plants and animals [2]. The graphic below shows some of the features of a human circadian clock.
          </p>
          <figure>
            <img src="img/biologicalclock.png" alt="A graphical representation of human biological clock" height="100%" width="100%">
            <figcaption> Human biological clock. Original by <a href="https://en.wikipedia.org/wiki/Circadian_rhythm/">Yassine Mrabet</a></figcaption>
          </figure>
            <p> Disruption to those rhythms usually has negative effects. Short-term effects include jet-lag; a condition affecting travellers changing time zones in a high-speed aircraft. A person affected by jet-lag experiences fatigue, headaches and irritability for a couple of days after the rapid change of time zone [3]. Long-term disruption to circadian rhythms can result in the development of cardiovascular disease in humans [4].
						</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Main 2 section end -->
  <!-- References section start -->
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <header>
          <h3>References</h3>
        </header>
        <p id="reference">1. Hirshkowitz, Max; Whiton, Kaitlyn; et al. (2015). "National Sleep Foundation’s sleep time duration recommendations: methodology and results summary". <i>Sleep Health: Journal of the National Sleep Foundation </i>(Elsevier Inc).</p>
        <p id="reference">2. Zivkovic, Bora. (2007). "Clock Tutorial #16: Photoperiodism – Models and Experimental Approaches (original work from 2005-08-13)". <i>A Blog Around the Clock. ScienceBlogs</i>.</p>
        <p id="reference">3. Waterhouse, J; Reilly, T; Atkinson, G; Edwards, B (2007). "Jet lag: trends and coping strategies". <i>The Lancet 369</i> (9567): 1117–1129. </p>
        <p id="reference">4. Zelinski, EL (2014). "The trouble with circadian clock dysfunction: Multiple deleterious effects on the brain and body.". <i>Neuroscience and Biobehavioral Reviews 40 </i>(40): 80–101.</p>


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
