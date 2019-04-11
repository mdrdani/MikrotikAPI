<?php
session_start();
if(empty($_SESSION['username'] ) ){
	header("Location:login.php");
}else {
?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Mikrotik API V.1</title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/demo.css">
	<link rel="stylesheet" href="assets/sidebar-collapse.css">

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>


</head>

<body>

	<aside class="sidebar-left-collapse">

		<a href="index.php" class="company-logo"><img src="assets/images/mikrotik.png" height="130px" width="130px"></a>

		<div class="sidebar-links">

			<div class="link-yellow">

				<a href="#">
					<i class="fa fa-keyboard-o"></i>IP Address
				</a>

				<ul class="sub-links">
					<li><a href="addipaddress.php">Tambah IP Address</a></li>
					<li><a href="showipaddress.php">Lihat IP Address</a></li>
				</ul>

			</div>

			<div class="link-yellow">

				<a href="#">
					<i class="fa fa-keyboard-o"></i>IP Route
				</a>

				<ul class="sub-links">
					<li><a href="addiproute.php">Tambah IP Route</a></li>
					<li><a href="showiproute.php">Lihat IP Route</a></li>
				</ul>

			</div>

			<div class="link-yellow">

				<a href="#">
					<i class="fa fa-keyboard-o"></i>IP Masquerade
				</a>

				<ul class="sub-links">
					<li><a href="addipnat.php">Tambah IP Masquerade</a></li>
					<li><a href="showipnat.php">Lihat IP Masquerade</a></li>
				</ul>

			</div>

			<div class="link-yellow">

				<a href="#">
					<i class="fa fa-keyboard-o"></i>DNS
				</a>

				<ul class="sub-links">
					<li><a href="addipdns.php">Tambah IP DNS</a></li>
					<li><a href="showipdns.php">Lihat IP DNS</a></li>
				</ul>

			</div>

			<div class="link-yellow">

			<a href="logout.php">
				<i class="fa fa-keyboard-o"></i>Logout
			</a>
			</div>

		</div>

	</aside>

	<div class="main-content">
        <h1>Tambah IP Address</h1>
        <form action="addprocipdns.php" method="POST">
		<div class="form-group">
            <label for="servers">Servers : <br>
            <input type="text" class="form-control" id="servers" name="servers" placeholder="8.8.8.8,8.8.4.4"><br>
			<label for="ar">Allow-Remote : 
            <select name="allow-remote-requests" class="custom-select" id="ar">
                <option selected>Choose...</option>
                <option value="yes">yes</option>
                <option value="no">no</option>
            </select>
            <br><br>
			<button type="submit" class="btn btn-primary" name="submit">Tambah DNS</button>
		<div class="form-group">
        </form>

	</div>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script>

		$(function () {

			var links = $('.sidebar-links > div');

			links.on('click', function () {

				links.removeClass('selected');
				$(this).addClass('selected');

			});
		});

	</script>

</body>

</html>
	<?php } ?>