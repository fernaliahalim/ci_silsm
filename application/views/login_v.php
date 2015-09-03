<?php
	if(! $this->session->userdata('username')){
	$this->load->view('header_vv');
?>
<div id="content">
				<br />
				<div class="col_43">
				<h1><font face="Times New Roman, Times, serif">Pendaftaran Pengajar Muda Indonesia Mengajar telah dibuka.</font></h1>
				<p><i>Silahkan login atau buat akun baru untuk bisa mendaftarkan diri.</i></p>
				</div>
				<div class="clear"></div>
				<img src="<?php echo site_url();?>assets/img/head.png" width="990px" height="3px" />
				<br />
				<br />
				<br />
				<div class="col col_col212" style="margin-left:114px; padding-bottom:20px; padding-left:30px; background-color:#FFFFFF; text-align:justify; height:320px;">
					<center><h3>Login</h3></center>
					<br />
					<form method="post" action="<?php echo base_url()?>index.php/login/sign_in" id="form_login">
					Username:<br />
					<input type="text" maxlength="50" size="115px" name="username"/><br /><br />
					Password:<br />
					<input type="password" maxlength="50" size="115px" name="password"/><br /><br />
					<a href="<?php echo site_url();?>index.php/pendaftaranpengajar" style="text-decoration:none; font-style:normal"><font color="#CC0000" face="Arial, Helvetica, sans-serif" size="-1">Apakah Anda belum mendaftar?</font></a>
					<br />
					<br />
					<div class="col_right">
						<button>Login</button>
					</form>
					<br />
					<br />
					<br />
					</div>
				</div>
				<div class="clear"></div>
				<br />
				<br />
				<br />
				<br />
</div>
			<div class="clear"></div>
<?php
	$this->load->view('footer_v');
}
else{
	redirect(base_url());
}
?>