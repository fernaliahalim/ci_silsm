<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>Beranda</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/css_style.css" />
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
			<hr />
			<div id="pencarian">
				<input type="text" name="keyword" size="30" />
				<a href=""><img src="<?php echo base_url();?>assets/img/mobile_search.png" width="30px" height="23px"/></a>
			</div>
			<div class="clear"></div>
			<div id="banner">
				<ul>
					<li><img src="<?php echo base_url();?>assets/img/pictureCrop1.jpg" alt="Indonesia" width="1150px" height="428px">
					</li>
					<li><img src="<?php echo base_url();?>assets/img/IM_HALSEL_301_crop.jpg" alt="Indonesia" width="1150px" height="428px">
					</li>
					<li><img src="<?php echo base_url();?>assets/img/IM_HALSEL_106_crop.jpg" alt="Indonesia" width="1150px" height="428px">
					</li>
					<li><img src="<?php echo base_url();?>assets/img/siswa-sekolah-dasar-indonesia-mengajarcrop.jpg" alt="Indonesia" width="1150px" height="428px">
					</li>
				</ul>
			</div>
			<div class="clear"></div>
			<div id="mainMenu">
				<ul>
					<li><a href="<?php echo site_url();?>index.php/beranda">Beranda</a></li> 
					<li><a href="<?php echo site_url();?>index.php/tentangkami">Tentang Kami</a>
						<ul>
							<li><a href="<?php echo site_url();?>index.php/visidanmisi">Visi dan Misi</a><li>
							<li><a href="<?php echo site_url();?>index.php/sejarah">Sejarah</a></li>
							<li><a href="<?php echo site_url();?>index.php/kemitraan">Kemitraan</a></li>
						</ul>
					</li> 
					<li><a href="<?php echo site_url();?>index.php/maribergabung">Mari Bergabung</a>
						<ul>
							<li><a href="<?php echo site_url();?>index.php/daftarkemitraan">Kemitraan</a></li>
							<li><a href="<?php echo site_url();?>index.php/pengajar">Pengajar</a></li>
						</ul>
					</li> 
                    
                    <?php
                    	if($this->session->userdata('username')){
							if($this->session->userdata('status')=='admin'){
								?>
                                
                                <li><a href="<?php echo site_url();?>index.php/manipulasi_admin">Manipulasi Data</a></li>
                                
                    <?php
								}
                    		if($this->session->userdata('status')=='pengajar'){
					?>
                    			<li><a href="<?php echo site_url();?>index.php/tes">Tes Sekarang</a></li>
                    <?php
								}
							}
						else{
					?>
                    			<li><a href="<?php echo site_url();?>index.php/pendaftaranpengajar">Tes Sekarang</a></li>
                    <?php
							}
					?>
                    
					<li><a href="<?php echo site_url();?>index.php/hubungikami">Hubungi Kami</a></li>
				</ul>
			</div>
			<hr />
			<div id="path">
				<!--<a href="index.htm">Beranda</a> >-->
			</div>
