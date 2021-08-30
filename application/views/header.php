<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aplikasi Penjemputan Siswa</title>

</head>
<body bgcolor="white">

	<style type="text/css">
	html,body{
		padding: 0;
		margin:0;
		font-family: sans-serif;
	}
	
	.menu-malasngoding{
		background-color: #66CDAA;
	}

	.menu-malasngoding ul {
		list-style-type: none;
		margin: 0;
		padding: 0;
		overflow: hidden;
	}

	.menu-malasngoding > ul > li {
		float: left;
	}

	
	.menu-malasngoding li a {
		display: inline-block;
		color: white;
		text-align: center;
		padding: 14px 16px;
		text-decoration: none;
	}

	.menu-malasngoding li a:hover{
		background-color: #66CDAA;
	}

	li.dropdown {
		display: inline-block;
	}

	.dropdown:hover .isi-dropdown {
		display: block;
	}

	.isi-dropdown a:hover {
		color: #fff !important;
	}

	.isi-dropdown {
		position: absolute;
		display: none;
		box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		z-index: 1;
		background-color: #f9f9f9;
	}

	.isi-dropdown a {
		color: #3c3c3c !important;
	}

	.isi-dropdown a:hover {
		color: #FFFFFF!important;
		background: #66CDAA !important;
	}
	
	body{
	background: url("<?php echo base_url().'assets/bga.jpg'?>");
	background-size:cover;
}
</style>


<header class="header">
	<div class="menu-malasngoding">

		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="">QR</a></li>
			<li class="dropdown"><a href="#">Data</a>
				<ul class="isi-dropdown">
					<li><a href="<?php echo base_url().'index.php/Admin/crud_siswa'?>">Data Siswa</a></li>
					<li><a href="<?php echo base_url().'index.php/Admin/crud_walisiswa'?>">Data Wali</a></li>
					<li><a href="<?php echo base_url().'index.php/Admin/crud_hubunganwali'?>">Data Hubungan</a></li>
					<li><a href="<?php echo base_url().'index.php/Admin/crud_penjemputan'?>">Data Penjemputan</a></li>
				</ul>
			</li>
			<li><a href="#">Logout</a></li>
		</ul>

	</div>
</header>

<br/>



<!---- ini buat logo-->
	<div id="konten">
	<h2>Aplikasi Penjemputan Siswa MIN 5 Ciamis</h2>
	<hr>
	</div>
</body>
</html>
