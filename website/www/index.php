<?php

if (is_string(@$_POST['name']) && is_string(@$_POST['email']) && is_string(@$_POST['message'])) {
	$messages = json_decode(file_get_contents('../messages.json'), true);
	$messages = array_values($messages);
	array_push($messages, [
		'name' => $_POST['name'],
		'email' => $_POST['email'],
		'message' => $_POST['message']
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
	</style>
</head>
<body>

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
		<div class="container" style="padding: 0; width: 100%; margin-left: 0; left: 0; height: 127px; background-color: rgba(255, 255, 255, 0);">
			<div style="display: table; vertical-align: middle; width: 70%; height: 100%; margin: 0 auto; background-color: rgba(255, 255, 255, 0.95)">
				<ul class="actions" style="display: table-cell; vertical-align: middle;">
					<li><a href="#one" class="button special scrolly">Learn More</a></li>
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
					<h2>Sign Up</h2>
				</header>
				<p>
					Teams of up to 1-3 people may register.<br/>
					<iframe src="https://docs.google.com/a/sfhs.com/forms/d/e/1FAIpQLSf-2uPAbJQfa9luP7Yazt3LHBA7MfYfHRkhrknRj4YQ3rZcgQ/viewform?embedded=true" width="460" height="500" frameborder="0" marginheight="0" marginwidth="0" style="width: 100%; max-width: 600px;">Loading...</iframe>
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
					<h2>Supporting Partners</h2>
				</header>
				<p>
					Partners provide support for the sfcode Programming Invitational in different forms.<br/><br/>
					<!-- <div class="12u$">
						<ul class="actions">
							<li><a target="_blank" href="assets/sfcode Partnership Packet.pdf"><input type="submit" value="Partnership Packet" class="special"/></a></li>
						</ul>
					</div> -->
					If you’re interested in a partnership,<br/>please email <a href="mailto:contact@sfhacks.club">contact@sfhacks.club</a><br/>
					or contact our moderator, Larry Steinke<br/><a href="mailto:larrysteinke@sfhs.com">larrysteinke@sfhs.com</a> – 650-210-2431
				</p>
			</div>
			<a href="#six" class="goto-next scrolly">Next</a>
		</div>
	</section>

	<!-- Six -->
	<section id="six" class="main special">
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

	<!-- Four -->
	<!--
	<section id="four" class="main">
	<div class="container">
	<div class="content">
	<header class="major">
	<h2>Elements</h2>
</header>
<section>
<h4>Text</h4>
<p>This is <b>bold</b> and this is <strong>strong</strong>. This is <i>italic</i> and this is <em>emphasized</em>.
This is <sup>superscript</sup> text and this is <sub>subscript</sub> text.
This is <u>underlined</u> and this is code: <code>for (;;) { ... }</code>. Finally, <a href="#">this is a link</a>.</p>
<hr />
<header>
<h4>Heading with a Subtitle</h4>
<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
</header>
<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
<header>
<h5>Heading with a Subtitle</h5>
<p>Lorem ipsum dolor sit amet nullam id egestas urna aliquam</p>
</header>
<p>Nunc lacinia ante nunc ac lobortis. Interdum adipiscing gravida odio porttitor sem non mi integer non faucibus ornare mi ut ante amet placerat aliquet. Volutpat eu sed ante lacinia sapien lorem accumsan varius montes viverra nibh in adipiscing blandit tempus accumsan.</p>
<hr />
<h2>Heading Level 2</h2>
<h3>Heading Level 3</h3>
<h4>Heading Level 4</h4>
<h5>Heading Level 5</h5>
<h6>Heading Level 6</h6>
<hr />
<h5>Blockquote</h5>
<blockquote>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan faucibus. Vestibulum ante ipsum primis in faucibus lorem ipsum dolor sit amet nullam adipiscing eu felis.</blockquote>
<h5>Preformatted</h5>
<pre><code>i = 0;

while (!deck.isInOrder()) {
print 'Iteration ' + i;
deck.shuffle();
i++;
}

print 'It took ' + i + ' iterations to sort the deck.';</code></pre>
</section>

<section>
<h4>Lists</h4>
<div class="row">
<div class="6u 12u$(medium)">
<h5>Unordered</h5>
<ul>
<li>Dolor pulvinar etiam.</li>
<li>Sagittis adipiscing.</li>
<li>Felis enim feugiat.</li>
</ul>
<h5>Alternate</h5>
<ul class="alt">
<li>Dolor pulvinar etiam.</li>
<li>Sagittis adipiscing.</li>
<li>Felis enim feugiat.</li>
</ul>
</div>
<div class="6u$ 12u(medium)">
<h5>Ordered</h5>
<ol>
<li>Dolor pulvinar etiam.</li>
<li>Etiam vel felis viverra.</li>
<li>Felis enim feugiat.</li>
<li>Dolor pulvinar etiam.</li>
<li>Etiam vel felis lorem.</li>
<li>Felis enim et feugiat.</li>
</ol>
<h5>Icons</h5>
<ul class="icons">
<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
</ul>
</div>
</div>
<h5>Actions</h5>
<ul class="actions">
<li><a href="#" class="button special">Default</a></li>
<li><a href="#" class="button">Default</a></li>
</ul>
<ul class="actions small">
<li><a href="#" class="button special small">Small</a></li>
<li><a href="#" class="button small">Small</a></li>
</ul>
<div class="row">
<div class="6u 12u$(small)">
<ul class="actions vertical">
<li><a href="#" class="button special">Default</a></li>
<li><a href="#" class="button">Default</a></li>
</ul>
</div>
<div class="6u$ 12u$(small)">
<ul class="actions vertical small">
<li><a href="#" class="button special small">Small</a></li>
<li><a href="#" class="button small">Small</a></li>
</ul>
</div>
<div class="6u 12u$(small)">
<ul class="actions vertical">
<li><a href="#" class="button special fit">Default</a></li>
<li><a href="#" class="button fit">Default</a></li>
</ul>
</div>
<div class="6u$ 12u$(small)">
<ul class="actions vertical small">
<li><a href="#" class="button special small fit">Small</a></li>
<li><a href="#" class="button small fit">Small</a></li>
</ul>
</div>
</div>
</section>

<section>
<h4>Table</h4>
<h5>Default</h5>
<div class="table-wrapper">
<table>
<thead>
<tr>
<th>Name</th>
<th>Description</th>
<th>Price</th>
</tr>
</thead>
<tbody>
<tr>
<td>Item One</td>
<td>Ante turpis integer aliquet porttitor.</td>
<td>29.99</td>
</tr>
<tr>
<td>Item Two</td>
<td>Vis ac commodo adipiscing arcu aliquet.</td>
<td>19.99</td>
</tr>
<tr>
<td>Item Three</td>
<td> Morbi faucibus arcu accumsan lorem.</td>
<td>29.99</td>
</tr>
<tr>
<td>Item Four</td>
<td>Vitae integer tempus condimentum.</td>
<td>19.99</td>
</tr>
<tr>
<td>Item Five</td>
<td>Ante turpis integer aliquet porttitor.</td>
<td>29.99</td>
</tr>
</tbody>
<tfoot>
<tr>
<td colspan="2"></td>
<td>100.00</td>
</tr>
</tfoot>
</table>
</div>

<h5>Alternate</h5>
<div class="table-wrapper">
<table class="alt">
<thead>
<tr>
<th>Name</th>
<th>Description</th>
<th>Price</th>
</tr>
</thead>
<tbody>
<tr>
<td>Item One</td>
<td>Ante turpis integer aliquet porttitor.</td>
<td>29.99</td>
</tr>
<tr>
<td>Item Two</td>
<td>Vis ac commodo adipiscing arcu aliquet.</td>
<td>19.99</td>
</tr>
<tr>
<td>Item Three</td>
<td> Morbi faucibus arcu accumsan lorem.</td>
<td>29.99</td>
</tr>
<tr>
<td>Item Four</td>
<td>Vitae integer tempus condimentum.</td>
<td>19.99</td>
</tr>
<tr>
<td>Item Five</td>
<td>Ante turpis integer aliquet porttitor.</td>
<td>29.99</td>
</tr>
</tbody>
<tfoot>
<tr>
<td colspan="2"></td>
<td>100.00</td>
</tr>
</tfoot>
</table>
</div>
</section>

<section>
<h4>Buttons</h4>
<ul class="actions">
<li><a href="#" class="button special">Special</a></li>
<li><a href="#" class="button">Default</a></li>
</ul>
<ul class="actions">
<li><a href="#" class="button">Default</a></li>
<li><a href="#" class="button small">Small</a></li>
</ul>
<ul class="actions fit">
<li><a href="#" class="button special fit">Fit</a></li>
<li><a href="#" class="button fit">Fit</a></li>
</ul>
<ul class="actions fit small">
<li><a href="#" class="button special fit small">Fit + Small</a></li>
<li><a href="#" class="button fit small">Fit + Small</a></li>
</ul>
<ul class="actions">
<li><a href="#" class="button special icon fa-download">Icon</a></li>
<li><a href="#" class="button icon fa-download">Icon</a></li>
</ul>
<ul class="actions">
<li><span class="button special disabled">Disabled</span></li>
<li><span class="button disabled">Disabled</span></li>
</ul>
</section>

<section>
<h4>Form</h4>
<form method="post" action="#">
<div class="row uniform">
<div class="6u 12u$(xsmall)">
<input type="text" name="demo-name" id="demo-name" value="" placeholder="Name" />
</div>
<div class="6u$ 12u$(xsmall)">
<input type="email" name="demo-email" id="demo-email" value="" placeholder="Email" />
</div>
<div class="12u$">
<div class="select-wrapper">
<select name="demo-category" id="demo-category">
<option value="">- Category -</option>
<option value="1">Manufacturing</option>
<option value="1">Shipping</option>
<option value="1">Administration</option>
<option value="1">Human Resources</option>
</select>
</div>
</div>
<div class="4u 12u$(small)">
<input type="radio" id="demo-priority-low" name="demo-priority" checked>
<label for="demo-priority-low">Low</label>
</div>
<div class="4u 12u$(small)">
<input type="radio" id="demo-priority-normal" name="demo-priority">
<label for="demo-priority-normal">Normal</label>
</div>
<div class="4u$ 12u$(small)">
<input type="radio" id="demo-priority-high" name="demo-priority">
<label for="demo-priority-high">High</label>
</div>
<div class="6u 12u$(small)">
<input type="checkbox" id="demo-copy" name="demo-copy">
<label for="demo-copy">Email me a copy</label>
</div>
<div class="6u$ 12u$(small)">
<input type="checkbox" id="demo-human" name="demo-human" checked>
<label for="demo-human">Not a robot</label>
</div>
<div class="12u$">
<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
</div>
<div class="12u$">
<ul class="actions">
<li><input type="submit" value="Send Message" class="special" /></li>
<li><input type="reset" value="Reset" /></li>
</ul>
</div>
</div>
</form>
</section>

<section>
<h4>Image</h4>
<h5>Fit</h5>
<div class="box alt">
<div class="row uniform 50%">
<div class="12u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
<div class="4u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
</div>
</div>
<h5>Left &amp; Right</h5>
<p><span class="image left"><img src="images/pic05.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
<p><span class="image right"><img src="images/pic05.jpg" alt="" /></span>Fringilla nisl. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent. Donec accumsan interdum nisi, quis tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent tincidunt felis sagittis eget. tempus euismod. Vestibulum ante ipsum primis in faucibus vestibulum. Blandit adipiscing eu felis iaculis volutpat ac adipiscing accumsan eu faucibus. Integer ac pellentesque praesent.</p>
</section>

</div>
<a href="#footer" class="goto-next scrolly">Next</a>
</div>
</section>
-->

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
		<div style="padding-top: 5px; text-transform: lowercase;">or shoot us an email at<br/><a href="mailto:contact@sfhacks.club">contact@sfhacks.club</a></div>
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

<!-- Scripts -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.scrollex.min.js"></script>
<script src="assets/js/jquery.scrolly.min.js"></script>
<script src="assets/js/skel.min.js"></script>
<script src="assets/js/util.js"></script>
<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
<script src="assets/js/main.js"></script>
<script type="text/javascript">

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
