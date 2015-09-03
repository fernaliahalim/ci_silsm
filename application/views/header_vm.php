<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Beranda</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/css_style1.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css"/>
</head>

<body>
	<div id="main" align="center" style="margin:0 ">
		<div id="container" align="center">
			<div id="header" align="left">
				<div id="logo">
					<img src="<?php echo base_url();?>assets/img/logo.PNG" width="20%">
				</div>
				<div id="menu_header">
					<?php if($this->session->userdata('username') == ''){ ?>
					<a href="<?php echo site_url();?>index.php/login"><font color="#CC0000"><b>Login</b></font></a> | <a href="<?php echo site_url();?>index.php/pendaftaranpengajar">Buat Akun</a><br><br>
					<?php }
						else{
					?>
					<a href="<?php echo site_url();?>index.php/logout"><font color="#CC0000"><b>Logout</b></font></a> | <?php echo $this->session->userdata('username'); ?><br><br>
					<?php } ?>
				</div>
				<div class="clear">
				</div>
			</div>
			<div id="mainMenu">
				<ul>
					<li><a href="<?php echo site_url();?>index.php/manipulasi_admin">Admin</a></li> 
					<li><a href="<?php echo site_url();?>index.php/manipulasi_pengajar">Pengajar</a></li> 
					<li><a href="<?php echo site_url();?>index.php/manipulasi_sponsor">Sponsor</a></li> 
					<li><a href="<?php echo site_url();?>index.php/manipulasi_penempatan">Penempatan</a></li> 
					<li><a href="<?php echo site_url();?>index.php/manipulasi_tes">Tes</a></li>
                    <li><a href="<?php echo site_url();?>index.php/manipulasi_hasil">Hasil</a></li>
                    <li><a href="<?php echo site_url();?>index.php/manipulasi_kontakkami">Kontak Kami</a></li>
				</ul>
			</div>
			<div id="path">
			</div>
			<div id="content">