<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Your IP Address</title>
	<style>
		body { text-align:center; }
		h1 {
			margin: 80px 0;
			font-size: 60px;

		}
		p {
			color: #666777;
		}
	</style>
</head>
<body>
	<h1><?php echo $_SERVER['REMOTE_ADDR']; ?></h1>
	<p>The soul purpose of this page is to display the IP Address of the viewer.</p>
</body>
</html>
