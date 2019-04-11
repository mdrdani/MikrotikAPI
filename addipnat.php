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
					<i class="fa fa-keyboard-o"></i>IP NAT
				</a>

				<ul class="sub-links">
					<li><a href="addipnat.php">Tambah IP NAT</a></li>
					<li><a href="showipnat.php">Lihat IP NAT</a></li>
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
        <h1>Tambah IP NAT (Network Address Translation) </h1>
        <br>
        <!--ip firewall nat add chain=srcnat out-interface=ether2 action=masquerade -->
        <form action="addprocipnat.php" method="POST">
		<div class="form-group">
            <label for="out-interface">Out-Interfaces : <br>
            <input type="text" class="form-control" id="out-interface" name="out-interface" placeholder="ether1,ether2,ether3,ether4"><br>
            <label for="chain">Chain : 
            <select name="chain" class="custom-select" id="chain">
                <option selected>Choose...</option>
                <option value="dstnat">dstnat</option>
                <option value="srcnat">srcnat</option>
            </select>
            <br><br>
            <label for="action">Action : 
            <select name="action" class="custom-select" id="action">
                <option selected>Choose...</option>
                <option value="accept">accept</option>
                <option value="dst-nat">dst-nat</option>
                <option value="masquerade">masquerade</option>
                <option value="redirect">redirect</option>
                <option value="src-nat">src-nat</option>
                <option value="add-dst-to-address-list">add-dst-to-address-list</option>
                <option value="jump">jump</option>
                <option value="netmap">netmap</option>
                <option value="return">return</option>
                <option value="add-src-to-address-list">add-src-to-address-list</option>
                <option value="log">log</option>
                <option value="passthrough">passthrough</option>
                <option value="same">same</option>
            </select>
            <br><br>
			<button type="submit" class="btn btn-primary" name="submit">Tambah</button>
			</div>
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
	<?php }  ?>