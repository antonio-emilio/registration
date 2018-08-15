<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login Form with username Password Link</title>
	<link rel="stylesheet" media="screen" href="screen.css">
	<script src="jquery.js"></script>
	<script src="jquery.validate.js"></script>
	
	<script>
	$(function() {
		// highlight
		var elements = $("input[type!='submit'], textarea, select");
		elements.focus(function() {
			$(this).parents('li').addClass('highlight');
		});
		elements.blur(function() {
			$(this).parents('li').removeClass('highlight');
		});

		$("#forgotpassword").click(function() {
			$("#password").removeClass("required");
			$("#login").submit();
			$("#password").addClass("required");
			return false;
		});

		$("#login").validate()
	});
	</script>
</head>
<body>
<!--<div id="page">
	<div id="header">
		<h1>Login</h1>
	</div> -->
	<div id="content">
		<p id="status"></p>
		<form class="form-container" method="post" action="logincon.php" id="login">
			<fieldset>
				<legend>User details</legend>
				<ul>
					<li>
						<label for="username">
							<span class="required">User name</span>
						</label>
						<input id="username" name="username" class="text required " type="text">
					<!--	<label for="email" class="error">This must be a valid email address</label> -->
					</li><br><br>
					<li>
						<label for="password">
							<span class="required">Password</span>
						</label>
						<input name="password" type="password" class="text required" id="password" minlength="4" maxlength="20">
					</li><br><br>
				<!--	<li>
						<label class="centered info"><a id="forgotpassword" href="#">Email my password...</a>
						</label>
					</li> -->
					
				</ul>
			</fieldset>
			<fieldset class="submit">
				<input name = "submit"type="submit" class="button" value="Login...">
			</fieldset>
			<div class="clear"></div>
		</form>
	</div>
</div>
</body>
</html>
