
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-19580945-1', 'auto');
ga('send', 'pageview');


$(function () {
$('#calculate').click(function() {
	if($('#hour').val() != '(hour)' && $('#minute').val() != '(minute)') {
		$('#start').hide();
		var setTime = new Date();

		if($('#hour').val() == 12) {
			$('#hour').val(0);
		}

		if($('#ampm').val() == "AM") {
			setTime.setHours($('#hour').val());
		}
		else if($('#ampm').val() == "PM") {
			setTime.setHours(+$('#hour').val() + 12);
		}

		setTime.setMinutes($('#minute').val());

		var res1 = new Date(setTime.getTime() - 270*60000);
		var res2 = new Date(res1.getTime() - 90*60000);
		var res3 = new Date(res2.getTime() - 90*60000);
		var res4 = new Date(res3.getTime() - 90*60000);

		function retDate(dateObj) {
			var formatted = '';
			var pm = false;
			if(dateObj.getHours() > 12) {
				formatted = dateObj.getHours() - 12;
				pm = true;
			} else if(dateObj.getHours() < 12 && dateObj.getHours() != 0) {
				formatted = dateObj.getHours();
			} else if(dateObj.getHours() == 0){
				formatted = "12";
			} else if(dateObj.getHours() == 12){
				formatted = "12";
				pm = true;
			}
			if(dateObj.getMinutes() < 10) {
				formatted = formatted + ":0" + dateObj.getMinutes();
			} else {
				formatted = formatted + ":" + dateObj.getMinutes();
			}
			if(pm == true) {
				formatted = formatted + " PM";
			} else {
				formatted = formatted + " AM";
			}
			return formatted;
		}

		$('#result4').html(String(retDate(res1)));
		$('#result3').html(String(retDate(res2)));
		$('#result2').html(String(retDate(res3)));
		$('#result1').html(String(retDate(res4)));

		$('#results').fadeIn();
	} // end hour/minute check if
	else {
		document.getElementById("alert").style.display = "block";
	} // end not-filled check
}); // end calculate
});
$(function () {
$('#zzz').click(function() {
	$('#start').hide();
	var zDate = new Date();

	var res1 = new Date(zDate.getTime() + 104*60000);
	var res2 = new Date(res1.getTime() + 90*60000);
	var res3 = new Date(res2.getTime() + 90*60000);
	var res4 = new Date(res3.getTime() + 90*60000);
	var res5 = new Date(res4.getTime() + 90*60000);
	var res6 = new Date(res5.getTime() + 90*60000);

	function retDate(dateObj) {
		var formatted = '';
		var pm = false;
		if(dateObj.getHours() > 12) {
			formatted = dateObj.getHours() - 12;
			pm = true;
		} else if(dateObj.getHours() < 12 && dateObj.getHours() != 0) {
			formatted = dateObj.getHours();
		} else if(dateObj.getHours() == 0) {
			formatted = "12";
		} else if(dateObj.getHours() == 12) {
			formatted = "12";
			pm = true;
		}
		if(dateObj.getMinutes() < 10) {
			formatted = formatted + ":0" + dateObj.getMinutes();
		} else {
			formatted = formatted + ":" + dateObj.getMinutes();
		}
		if(pm == true) {
			formatted = formatted + " PM";
		} else {
			formatted = formatted + " AM";
		}
		return formatted;
	}

	$('#resultNow1').html(String(retDate(res1)));
	$('#resultNow2').html(String(retDate(res2)));
	$('#resultNow3').html(String(retDate(res3)));
	$('#resultNow4').html(String(retDate(res4)));
	$('#resultNow5').html(String(retDate(res5)));
	$('#resultNow6').html(String(retDate(res6)));

	$('#resultsNow').fadeIn();
});
});
