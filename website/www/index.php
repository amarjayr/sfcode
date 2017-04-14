<?php

if (is_string(@$_POST['name']) && is_string(@$_POST['email']) && is_string(@$_POST['message'])) {
	$messages = json_decode(file_get_contents('../messages.json'), true);
	$messages = array_values($messages);

	date_default_timezone_set("America/Los_Angeles");
	$date = new DateTime();
	$time = $date->getTimestamp();

	array_push($messages, [
		'name' => $_POST['name'],
		'email' => $_POST['email'],
		'message' => $_POST['message'],
		'timestamp' => $time
	]);
	if (file_put_contents('../messages.json', json_encode($messages, JSON_PRETTY_PRINT)) === false)
		die('Could not save message');
	die('Message saved!');
} else {

?>
<!DOCTYPE html>
<html>
<head>
	<title>sfcode by sfhacks</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<!-- <meta name = 'viewport' content = 'width = device-width, initial-scale = 0.4, maximum-scale = 0.4, user-scalable = yes'/> -->
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	<meta charset="utf-8"/>
	<meta name="author" content="sfhacks"/>
	<meta name="copyright" content="Copyright (c) 2017 sfhacks"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="icon" type="image/png" href="images/icons/favicon.png"/>
	<link rel="apple-touch-icon" href="images/icons/icon_mobile.png"/>
	<style type="text/css">
		@import url("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300italic,600italic,300,600");
		#icon-table {
			background: none;
			border-collapse: separate;
		}
		#icon-table tr {
			background: none;
		}
		#icon-table td {
			background: none;
			text-align: center;
		}
		.icon.major.profile-icon {
			margin: 0 auto;
			margin-top: 10px;
		}
		#icon-table h3 {
			margin: 0;
			margin-bottom: 5px;
		}
		/*#icon-table .left {
			width: 50%;
		}
		#icon-table .right {
			width: 50%;
		}*/
		.border-bottom {
			border-bottom: 1px solid #BBB;
		}
		.border-top {
			border-top: 1px solid #BBB;
		}

		.container {
			width: 70%;
			/*transition: width 0.2s ease;*/
		}

		#meet {
			padding: 60px 40px;
		}
		.main #meet .sixp {
			width: auto;
			padding-left: 0;
			padding-right: 0;
		}

		#footer .container.foot-container {
			padding: 5em 2.5em 3em 2.5em;
		}

		@media screen and (min-width: 1000px) {
			.container {
				padding-left: 12%;
				padding-right: 12%;
			}
			.main .container {
				padding-left: 12%;
				padding-right: 12%;
			}
			.main #meet .sixp {
				width: 100%;
				padding-left: 12%;
				padding-right: 12%;
			}
			#footer .container.foot-container {
				padding: 5em 12% 3em 12%;
			}
		}

		html, body {
			width: 100%;
			height: 100%;
			margin: 0;
			padding: 0;
		}

		#custom-main {
			height: 100%;
			width: 100%;
			position: absolute;
			top: 0;
			right: 0;
			left: 0;
			bottom: 0;
			overflow: scroll;
			-webkit-overflow-scrolling: touch;
		}
		.custom-menu-item {
			background-color: rgba(60, 60, 60, 0.6);
			border-bottom: 1px solid #555;
			display: table;
			width: 100%;
			height: 100%;
		}
		.custom-menu-item-sub {
			display: table-cell;
			vertical-align: middle;
			padding-left: 25px;
		}
		.custom-menu-item-a {
			text-decoration: none;
			color: rgba(255, 255, 255, 0.95);
			font-size: 17px;
			font-family: 'Source Sans Pro', Arial, sans-serif;
			border: none;
			display: block;
		}
		.custom-menu-item-a : hover {
			color: rgba(255, 255, 255, 0.95);
		}

	</style>
</head>
<body>
	<div id="custom-nav" style="cursor: pointer; top: 0; transition: top 0.3s ease-in-out; right: 0; left: 0; width 100%; height: 30px; position: absolute; z-index: 20;">
		<div id="custom-nav-wrap" style="height: 30px; width: 80px; background-color: rgba(128, 132, 136, 0.35); border-radius: 0 0 0.35em 0.35em; margin: 0 auto; padding-top: 4px;">
			<div id="custom-nav-img" style="background: url('images/icons/hamburger.png') no-repeat right top; background-size: contain; height: 21px; width: 20px; margin: 0 auto;"></div>
		</div>
	</div>
	<div id="custom-menu" style='z-index: 20; height: 400px; width: 100%; position: absolute; top: -400px; transition: top 0.3s ease-in-out; left: 0; right: 0; background: url("images/overlay.png"), url("images/navPanel.svg"), -webkit-linear-gradient(top, rgba(80, 80, 80, 1), rgba(20, 20, 20, 1))'>
		<a href="#header" class="goto-next scrolly custom-menu-item-a"><div class="custom-menu-item"><div class="custom-menu-item-sub">sfcode</div></div></a>
		<a href="#one" class="goto-next scrolly custom-menu-item-a"><div class="custom-menu-item"><div class="custom-menu-item-sub">What Is sfcode?</div></div></a>
		<a href="#two" class="goto-next scrolly custom-menu-item-a"><div class="custom-menu-item"><div class="custom-menu-item-sub">Save the Date!</div></div></a>
		<a href="#three" class="goto-next scrolly custom-menu-item-a"><div class="custom-menu-item"><div class="custom-menu-item-sub">Logistics &amp; Details</div></div></a>
		<a href="#four" class="goto-next scrolly custom-menu-item-a"><div class="custom-menu-item"><div class="custom-menu-item-sub">FAQ</div></div></a>
		<a href="#five" class="goto-next scrolly custom-menu-item-a"><div class="custom-menu-item"><div class="custom-menu-item-sub">Sign Up</div></div></a>
		<a href="#six" class="goto-next scrolly custom-menu-item-a"><div class="custom-menu-item"><div class="custom-menu-item-sub">Supporting Partners</div></div></a>
		<a href="#seven" class="goto-next scrolly custom-menu-item-a"><div class="custom-menu-item"><div class="custom-menu-item-sub">Meet the Team</div></div></a>
		<a href="#footer" class="goto-next scrolly custom-menu-item-a"><div class="custom-menu-item"><div class="custom-menu-item-sub">Contact Us</div></div></a>
	</div>
	<div id="custom-main">
		<!-- Header -->
		<section id="header">
			<header class="major">
				<!-- <h1>sfcode</h1> -->
				<p>
					<img src="images/sfcode_logo_light.png" alt="sfcode" style="width: 100%; max-width: 390px;"/><br/>
					the Saint Francis High School <wbr/>Programming Invitational<br/>
					<!-- <span style="text-transform: lowercase;">by <a target="_blank" href="http://www.sfhacks.club">sfhacks</a></span> -->
				</p>
			</header>
			<div style="width: 100%; height 100%; position: absolute; top: 0; bottom: 0; left: 0; right: 0;">
				<!-- scrolling aid -->
			</div>
			<div class="container" id="topbarcont" style="padding: 0; width: 70%; margin: auto; left: 15%; height: 127px; background-color: rgba(255, 255, 255, 0);">
				<div style="display: table; vertical-align: middle; width: 100%; height: 100%; margin: 0 auto; background-color: rgba(255, 255, 255, 0.95)">
					<ul class="actions" style="display: table-cell; vertical-align: middle;">
						<li><a href="#one" class="button special scrolly goto-next">Learn More</a></li>
					</ul>
				</div>
			</div>
		</section>

		<!-- One -->
		<section id="one" class="main special">
			<div class="container">
				<!-- <span class="image fit primary"><img src="images/pic01.jpg" alt="" /></span> -->
				<div class="content">
					<header class="major">
						<h2>What is sfcode?</h2>
					</header>
					<p>The <b>sfcode Programming Invitational</b> is a student-run coding competition hosted by <a href="http://www.sfhacks.club" target="_blank">sfhacks</a>, the Programming Club at <a href="http://sfhs.com" target="_blank">Saint Francis High School</a> in Mountain View.<br/><br/>During the contest, students will be tasked with solving programming problems using algorithmic techniques; participants will have an opportunity to practice teamwork and creative problem-solving skills.<br/><br/>Teams from schools all over the Bay Area are invited to compete in our first-ever full-scale event. Come out and show off your skill!</p>
				</div>
				<a href="#two" class="goto-next scrolly">Next</a>
			</div>
		</section>

		<!-- Two -->
		<section id="two" class="main special">
			<div class="container">
				<!-- <span class="image fit primary"><img src="images/pic03.jpg" alt="" /></span> -->
				<div class="content">
					<header class="major">
						<h2>Save the date!</h2>
					</header>
					<p><i>All dates and locations are set in stone.</i><br/><br/><span style="font-size: 32px;">Saturday, April 22, 2017<br/>8:30AM to 2:30PM</span><br/><br/><span style="font-weight: bold;">Saint Francis High School, Mountain View</span><br/><a href="https://goo.gl/maps/gMf92kdwMVm">1885 Miramonte Avenue, Mountain View, CA 94040</a></p>
				</div>
				<a href="#three" class="goto-next scrolly">Next</a>
			</div>
		</section>

		<!-- Three -->
		<section id="three" class="main special">
			<div class="container">
				<!-- <span class="image fit primary"><img src="images/pic03.jpg" alt="" /></span> -->
				<div class="content">
					<header class="major">
						<h2>Logistics &amp; Details</h2>
					</header>
					<p>
						Our event will host approximately 70 people at<br/><a href="https://goo.gl/maps/gMf92kdwMVm">Saint Francis High School’s campus</a> on Saturday, April 22, 2017.<br/>
						Here is an approximate breakdown of the event schedule:
						<div style="width: 100%; max-width: 500px; margin: 0 auto;">
							<ul style="text-align: left; margin-left: 30px;">
								<li><u>8:30 AM – 9:15 AM</u>: Setup and Registration</li>
								<li><u>9:15 AM – 9:55 AM</u>: Opening Remarks</li>
								<li><u>10:00 AM – 1:00 PM</u>: The contest itself</li>
								<li><u>1:00 PM – 1:45 PM</u>: Lunch and snacks</li>
								<li><u>1:45 PM – 2:30 PM</u>: Closing Ceremony</li>
							</ul>
						</div>
						The competition will have two divisions, <b>Advanced</b> and <b>Novice</b>, each with an opportunity to win top 3 prizes.
					</p>
				</div>
				<a href="#four" class="goto-next scrolly">Next</a>
			</div>
		</section>

		<!-- Four -->
		<section id="four" class="main special">
			<div class="container">
				<!-- <span class="image fit primary"><img src="images/pic03.jpg" alt="" /></span> -->
				<div class="content">
					<header class="major">
						<h2>FAQ</h2>
					</header>
					<p>
						<div style="width: 100%; max-width: 700px; margin: 0 auto;">
							<ol style="text-align: left; margin-left: 30px;">
								<li>
									<b>What programming languages will be accepted?</b><br/>
									C, C++, Python 2.7, Java 8
								</li>
								<!-- <li>
									<b>How will the code be submitted?</b><br/>
									Problems (also referred to as tasks) are submitted through cms (<a href="https://github.com/cms-dev/cms">https://github.com/cms-dev/cms</a>) the same system that handles submissions for IOI, FARIO, BOI, APIO, CEOI, and RMI. Submitted programs are run in a sandbox with the following compilation commands (file <code>Batch</code>):<br/>
									C11: <code>/usr/bin/gcc -DEVAL -std=c11 -O2 -pipe -static -s -o Batch Batch.c -lm</code><br/>
									C++11: <code>/usr/bin/g++ -DEVAL -std=c++11 -O2 -pipe -static -s -o Batch Batch.cpp</code><br/>
									Python: <code>/usr/bin/python2 -m py_compile Batch.py &amp;&amp; /bin/mv Batch.pyc Batch</code><br/>
									Java: <code>/usr/bin/javac Batch.java &amp;&amp; /bin/bash -c /usr/bin/jar cf Batch.jar *.class &amp;&amp; /bin/mv Batch.jar Batch</code>
								</li>
								<li>
									<b>What are the input and output formats?</b><br/>
									Input will be read through stdin and output will be printed out to stdout for every language. For each problem, there will be sample input/output examples as well as a brief on the format of input and expected output.
								</li> -->
								<li>
									<b>Is there a team limit?</b><br/>
									Teams may consist of 1-3 people.
								</li>
								<li>
									<b>May we bring our own computers? If so, is there a limit on number of computers per team?</b><br/>
									Contestants are encouraged to bring their own computers. Each team will be limited to 1 computer only (that is, 1 display and 1 keyboard).
								</li>
							</ol>
						</div>
					</p>
				</div>
				<a href="#five" class="goto-next scrolly">Next</a>
			</div>
		</section>

		<!-- Five -->
		<section id="five" class="main special">
			<div class="container">
				<!-- <span class="image fit primary"><img src="images/pic03.jpg" alt="" /></span> -->
				<div class="content">
					<header class="major">
						<h2>Sign Up</h2>
					</header>
					<p>
						Teams of up to 1-3 people may register.<br/>
						<div id="regform" style="overflow: auto; height: 500px; width: 100%; max-width: 600px; margin: 0 auto;">
							<iframe src="https://docs.google.com/a/sfhs.com/forms/d/e/1FAIpQLSf-2uPAbJQfa9luP7Yazt3LHBA7MfYfHRkhrknRj4YQ3rZcgQ/viewform?embedded=true" frameborder="0" marginheight="0" marginwidth="0" style="width: 100%; height: 100%;">Loading...</iframe>
						</div>
					</p>
				</div>
				<a href="#six" class="goto-next scrolly">Next</a>
			</div>
		</section>

		<!-- Six -->
		<section id="six" class="main special">
			<div class="container">
				<!-- <span class="image fit primary"><img src="images/pic03.jpg" alt="" /></span> -->
				<div class="content">
					<header class="major">
						<h2>Supporting Partners</h2>
					</header>
					<p>
						Partners provide support for the sfcode Programming Invitational in different forms.<br/><br/>
						<!-- <div class="12u$">
						<ul class="actions">
						<li><a target="_blank" href="assets/sfcode Partnership Packet.pdf"><input type="submit" value="Partnership Packet" class="special"/></a></li>
						</ul>
						</div> -->
						If you’re interested in a partnership,<br/>please email <a href="mailto:sfhacks@sfhs.com">sfhacks@sfhs.com</a><br/>
						or contact our moderator, Larry Steinke<br/><a href="mailto:larrysteinke@sfhs.com">larrysteinke@sfhs.com</a> – 650-210-2431
					</p>
				</div>
				<a href="#seven" class="goto-next scrolly">Next</a>
			</div>
		</section>

		<!-- Seven -->
		<section id="seven" class="main special">
			<div class="container" id="meet">
				<!-- <span class="image fit primary"><img src="images/pic02.jpg" alt="" /></span> -->
				<div class="content">
					<header class="major">
						<h2>Meet the Team</h2>
					</header>
					<div class="sixp">
						<p>sfcode Programming Invitational is organized by sfhacks, the SFHS Programming Club, run by a team of enthusiastic, motivated, and dedicated students.</p>
					</div>
					<img style="width: 100%;" src="images/profiles/group.jpeg"/><br/>
					<div class="sixp">
						<span>Top Row: <a href="https://github.com/nishand17" target="_blank">Nishan D'Souza</a>, <a href="https://github.com/anuvgupta" target="_blank">Anuv Gupta</a>, <a href="https://github.com/andrewke" target="_blank">Andrew Ke</a></span><br/>
						<span>Bottom Row: <a href="https://github.com/lalzz" target="_blank">Lalith Katta</a>, <a href="https://github.com/arnav-gudibande" target="_blank">Arnav Gudibande</a>, <a href="https://github.com/amarjayr" target="_blank">Amar Ramachandran</a>, <a href="https://github.com/wchern" target="_blank">William Chern</a>, <a href="https://github.com/adamegyed" target="_blank">Adam Egyed</a></span>
						<hr style="width: 90%; margin: 20px auto;"/>
						<div style="display: inline-block; padding: 1px 25px;">
							<span class="icon major profile-icon left"><img src="images/profiles/steinke.jpeg"/></span>
							<h3>Mr. Steinke</h3>
							<i>moderator</i>
						</div>
						<div style="display: inline-block; padding: 1px 25px;">
							<span class="icon major profile-icon middle bottom"><img src="images/profiles/chech.jpeg"/></span>
							<h3>Mr. Chech</h3>
							<i>mentor</i>
						</div>
						<div style="display: inline-block; padding: 1px 25px;">
							<span class="icon major profile-icon right"><img src="images/profiles/abot.jpeg"/></span>
							<h3>Ms. Abot</h3>
							<i>moderator</i>
						</div>
					</div>
					<br/>
					<br/>
					<br/>
				</div>
				<a href="#footer" class="goto-next scrolly">Next</a>
			</div>
		</section>

		<!-- Footer -->
		<section id="footer">
			<div class="container foot-container">
				<header class="major">
					<h2>Contact Us</h2>
				</header>
				<!-- <form method="post" action="#"> -->
				<div style="padding-bottom: 15px; text-transform: lowercase;">Leave us a message here</div>
				<div class="row uniform">
					<div class="6u 12u$(xsmall)"><input type="text" name="name" id="name" placeholder="Name" /></div>
					<div class="6u$ 12u$(xsmall)"><input type="email" name="email" id="email" placeholder="Email" /></div>
					<div class="12u$"><textarea name="message" id="message" placeholder="Message" rows="4" style="resize: vertical;"></textarea></div>
					<div class="12u$">
						<ul class="actions">
							<li><input type="submit" value="Send Message" class="special" id="sendmessagebtn"/></li>
						</ul>
					</div>
					<div id = 'formOutput' style="text-align: center; width: 100%;"></div>
				</div>
				<!-- </form> -->
				<div style="padding-top: 5px; text-transform: lowercase;">or shoot us an email at<br/><a href="mailto:sfhacks@sfhs.com">sfhacks@sfhs.com</a></div>
			</div>
			<footer>
				<!-- <ul class="icons">
				<li><a href="#" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
				<li><a href="#" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
				<li><a href="#" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
				<li><a href="#" class="icon alt fa-dribbble"><span class="label">Dribbble</span></a></li>
				<li><a href="#" class="icon alt fa-envelope"><span class="label">Email</span></a></li>
			</ul> -->
			<ul class="copyright">
				<li>&copy; 2017 sfhacks. All Rights Reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
			</ul>
		</footer>
		</section>
	</div>



	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/jquery.scrollex.min.js"></script>
	<script src="assets/js/jquery.scrolly.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="assets/js/main.js"></script>
	<script type="text/javascript">

		var mobile = function () {
			var check = false;
			(function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino|android|ipad|playbook|silk/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
			return check;
		};

		var clicked = false;
		$('#sendmessagebtn').click(function () {
			if (!clicked) {
				var name = $('#footer #name')[0].value;
				var email = $('#footer #email')[0].value;
				var message = $('#footer #message')[0].value;
				if (name.trim() == '') {
					$('#footer #formOutput').html('Please enter your name!');
					return;
				}
				if (email.trim() == '') {
					$('#footer #formOutput').html('Please enter your email!');
					return;
				}
				if (message.trim() == '') {
					$('#footer #formOutput').html('Please enter a message!');
					return;
				}
				clicked = true;
				$('#sendmessagebtn')[0].value = '...';
				$.ajax({
					url: 'index.php',
					method: 'post',
					data: {
						name: name,
						email: email,
						message: message
					},
					success: function (data) {
						clicked = false;
						$('#sendmessagebtn')[0].value = 'Send Message';
						$('#footer #formOutput').html(data);
					},
					error: function () {
						clicked = false;
						$('#sendmessagebtn')[0].value = 'Send Message';
						$('#footer #formOutput').html('Could not send message');
					}
				});
			}
		});

		var $containers = $('.container');
		var $regform = $('#regform');
		var $topbarcont = $('#topbarcont');
		var $customnav = $('#custom-nav');
		var $customnavimg = $('#custom-nav-img');
		var $customnavwrap = $('#custom-nav-wrap');
		var $custommenu = $('#custom-menu');
		var $custommain = $('#custom-main');
		var $resize = function () {
			$customnav.css('position', 'fixed');
			if (window.innerWidth < 800) {
				$containers.css('width', '95%');
				$regform.css('height', '400px');
				$topbarcont.css('left', '2.5%');
				$customnav.css('display', 'block');
				$customnav.css({
					width: '100%',
					right: '0',
					left: '0',
					height: '30px',
					opacity: '1'
				});
				$customnavwrap.css({
					backgroundColor: 'rgba(128, 132, 136, 0.35)',
					paddingTop: '4px'
				});
			} else {
				$containers.css('width', '70%');
				$regform.css('height', '500px');
				$topbarcont.css('left', '15%');
				$customnav.css({
					width: '65px',
					right: 'auto',
					left: '-5px',
					height: '50px',
					opacity: '0.8'
				});
				$customnavwrap.css({
					background: 'none',
					paddingTop: '18px'
				});
			}
			var height = 400 / $custommenu.children().length;
			$custommenu.children().css('height', height + 'px');
		};
		$(window).resize($resize);
		setTimeout($resize, 500);

		var toggled = true;
		var offset = 0;
		if (mobile()) offset = 25;
		$customnav.click(function () {
			if (toggled) {
				$custommenu.css('top', (-400 + offset) + 'px');
				$customnav.css('top', offset + 'px');
				$customnavimg.css('background-image', "url('images/icons/hamburger.png')");
			} else {
				$custommenu.css('top', offset + 'px');
				$customnav.css('top', (400 + offset) + 'px');
				$customnavimg.css('background-image', "url('images/icons/up.png')");
			}
			toggled = !toggled;
		});
		$customnav.click();
		$custommenu.click(function () { $customnav.click(); });

		$('a.goto-next.scrolly').click(function () {
			var id = $(this).attr('href');
			$custommain.stop().animate({ scrollTop: $(id).position().top + $custommain.scrollTop() }, '2000');
		});

		var headermajor = $('#header .major');
		$custommain.scroll(function () {
			var bottom = window.innerHeight * 0.36;
			var scrolltop = $custommain.scrollTop();
			if (scrolltop > bottom)
				scrolltop = bottom;
			var opacity = 1 - scrolltop / bottom;
			headermajor.css('opacity', opacity + '');
		});

	</script>

	<!--
	Theme:
	Highlights by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
	-->
</body>
</html>

<?php

}

?>
