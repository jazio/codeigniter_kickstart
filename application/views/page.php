<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
    <!--asset_url() is provided by a helper function: application/helpers/utility_helper.php-->
    <link rel="stylesheet" href="<?php echo asset_url();?>css/style.css"/>
</head>
<body>

<div id="container">
	<h1>Welcome to CodeIgniter Kickstart!</h1>

	<div id="body">

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/page.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/page.php</code>

	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>