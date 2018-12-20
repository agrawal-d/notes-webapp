<!DOCTYPE html>
<html lang="en">
<head>
	<title>Notes | The open-source cross-platform notes application</title><?php include 'header.php'; ?>
	<link href="css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
	<?php include 'modal.php'; ?><?php include 'navbar-home.php'; ?>
	<main class="container h-main" role="main">
		<div class="row">
			<div class="col-sm-8">
				<h1 class="star">Notes is your new notetaking app.</h1>
				<hr>
				<h4 class="star2 weight-light font-weight-normal">Start using it today to experience productivity like never before.</h4>
				<div class="row">
					<div class="col-sm-6"><img src="img/note2.png" style="width:100%;padding-top:50px;"></div>
					<div class="col-sm-6">
						<p>Notes offers many features that our competitors do not provide :<br></p>
						<ul class="list-group">
							<li class="list-group-item"><span class="fa fa-sync"></span>Automatically syncs across devices</li>
							<li class="list-group-item"><span class="fa fa-hdd"></span> Large storage options</li>
							<li class="list-group-item"><span class="fa fa-palette"></span>Multicolor notes</li>
							<li class="list-group-item"><span class="fab fa-github"></span> Open Source</li>
							<li class="list-group-item"><span class="fa fa-search"></span>Searchable notes</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-sm-4 quick-signup signup">
				<h5 class="text-info">Create an account in two simple steps</h5>
				<hr>
				<form action="#">
					<div class="form-group inline-login">
						<h6>Step 1</h6><br>
						<input aria-describedby="emailHelp" class=" form-control inline-login-top" id="signup-email" name="email" maxlength="64" placeholder="Enter your email address" required type="email"> <input class="form-control" name="password" id="signup-password" placeholder="Choose a new password" maxlength="64" required="" type="password"> <input class="form-control inline-login-bottom" id="signup-password2" placeholder="Enter password again" required name="password2" type="password"><br>
						<button class="btn btn-primary btn-block createaccount" type="submit">Next</button>
					</div>
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm">
				<br>
				<hr>
				<h2 class="text-center text-info">How Notes works</h2>
				</div>
			</div>
			<div class="row" style="margin-top:50px;">
				<div class="col-sm ban">
					<div style="text-align:center;">
					<span class="fa fa-laptop maxicon text-secondary"></span></div><p>
You take a note on your desktop and save it online in your account here.
</p>
				</div>
				<div class="col-sm ban">
					<div style="text-align:center;">
					<span class="fa fa-mobile maxicon text-success"></span></div><p>
You view and edit the same note on your smartphone.
</p>
				</div>
				<div class="col-sm ban">
					<div style="text-align:center;">
					<span class="fa fa-sync fa-spin maxicon text-primary"></span></div><p>
All your notes are securely synced by us for free.
</p>
				</div>

			</div><hr>
			<br><br>
			<div class="row">
<br><br>
				<div class="col-sm-8"><div class="row">
					<div class="col-sm-6"><img src="img/desktop.png" class="desktop"></div>
					<div class="col-sm-6">
						<h4>Check out the screenshot of the web app</h4>
						<p>It's cool, isnt it ? So what are you waiting for! Create an account today and experience a new level of productivity! What's more, this app is open source, so you can contribute too! Heat to the github page today and start coding. THe code is maintained by Divyanshu Agrawal ( hereisdx ) .
					</div>
				</div>
					
					
				</div>
				<div class="col-sm-4">
					<h4 class="text-center">Android app coming soon</h4><br>
					<div class="text-center">
						<span class=" fab fa-android maxicon text-success "></span>
						<br><p>We are working on bringing an android client for this app as fast as we can. Stay tuned!</p>
					</div>
					
				</div>
			</div>
			
		</div>
	</main>
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 fp"><div class="text-center"><img src="img/logo.png" class="text-center" width=64></div><hr><h4 class="text-center">Notes</h4><p>A cross-platform open-source web application for taking syncable notes for free. Made with <span class="fa fa-heart"></span>by Divyanshu Agrawal.</div>
			<div class="col-sm-4 fp"><h4 class="text-center">Useful links</h4>
				<div class="text-center">
					<a href="#">Home</a><br>
					<a href="#">My Notes</a><br>
					<a href="#">My Account</a><br>
					<a href="#">Help Center</a><br>
					<a href="#">Github Project</a><br>
				</div>
			</div>
			<div class="col-sm-4 fp"><h4 class="text-center">Terms of Use</h4><hr>
				<p>You agree to use this service in a manner that does not damage it or other users in the way it is epected to be used and by having civil sense. The service providers are not liable for any damages.</p>
			</div>
		</div>
	</div>	
</div>
	<?php include 'footer-scripts.php'; ?>
</body>
</html>