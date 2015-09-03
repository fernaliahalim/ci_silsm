<?php
	$this->load->view('header_vv');
?>
<div id="content">
				<br />
				<div class="col_43">
				<h1><font face="Times New Roman, Times, serif">Hubungi Kami</font></h1>
				<p><i>Bagaimana dapat menghubungi dan berkomunikasi dengan kami?</i></p>
				</div>
				<div class="clear"></div>
				<br />
				<img src="<?php echo site_url();?>assets/img/head.png" width="1025px", height="3px" />
				<br />
				<br />
				<br />
				<div class="col col_2" style="text-align:justify; padding-left:180px ">
                <form action="<?php site_url();?>hubungikami/tambah" method="get">
					Nama:<br />
					<?php if($this->session->userdata('username')==''){?>
					<input type="text" maxlength="50" size="60px" name="nama" /><br /> <br />
					<?php } else{?>
					<input type="text" maxlength="50" size="60px" name="nama" value="<?php echo $this->session->userdata('nama'); ?>" /><br /> <br />
					<?php } ?>
					Email:<br />
					<input type="text" maxlength="50" size="60px" name="email"/><br /> <br />
					Pesan:<br />
					<textarea type="text" maxlength="1000" size="60px" name="pesan" cols="43" rows="15"></textarea>
					<br />
					<br />
					<div class="col col_2" style="padding-left:150px; margin-left:100px ">
						<button>Kirim</button>
                    </form>
					</div>
				</div>
				
				<div class="col col_2" style="margin:0 ">
					<div class="col col_bgcolor2">
						Head Office
					</div>
					<div class="clear"></div>
					<br />
					<div class="col col_2" style="text-align:justify ">
					Jl. Galuh II No 20, Kebayoran Baru <br />
					Jakarta Selatan, Indonesia<br /> <br />

					p. 021-7221570 <br />
					f. 021-7231430 <br />
					e. info@komunitasmudaindonesia.org
					</div>
				</div>
					<div class="clear"></div>
				<br />
				<br />
				<br />
				<br />
				<br />
</div>
			<div class="clear"></div>
<?php
	$this->load->view('footer_v');
?>