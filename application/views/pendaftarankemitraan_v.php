<?php
	if(! $this->session->userdata('username')){
	$this->load->view('header_vv');
?>
<div id="content">
	<br />
	<div class="col_43" style="text-align:justify; padding-left:100px;">
		<h1><font face="Times New Roman, Times, serif">Formulir Kemitraan </font></h1>
		<img src="<?php echo site_url();?>assets/img/head.png" width="890px" height="3px" /> <br /> <br /> <br />
	</div>
	<div class="clear"></div>
	<div class="col" style="padding-left:200px; width:900px; text-align:left">
	<form action="<?php echo site_url()?>daftar/kemitraan" method="get" onSubmit="return validasi();" id="form_kemitraan" style="text-align:left">
		<b>Nama<font color="#FF0000">*</font> &nbsp; &nbsp; </b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
		<input type="text" size="55px" maxlength="50" onKeyUp="validasi_Element(this);" name="nama"/>
		<br /><br /><br />
		<b>Alamat<font color="#FF0000">*</font> &nbsp; &nbsp; </b> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
							<textarea cols="44" id="almt"
								onKeyUp="validasi_Element(this);" name="alamat"></textarea>
		<br /><br /><br />
		<b>No.Telepon<font color="#FF0000">*</font> &nbsp;&nbsp; &nbsp;&nbsp;</b>
		<input type="text" size="55px" maxlength="50" onKeyUp="validasi_Element(this);" name="no_telp"/>
		<br /><br /><br />
		<b>Jenis Sponsor<font color="#FF0000">*</font></b>&nbsp;&nbsp;
		<select id="jns_sponsor" onChange="validasi_Element(this);" name="jns_sponsor" width="600px" maxlength="50">
			<option value=""> --------------------------------- </option>
			<option value="Dana">Dana</option>
			<option value="Barang">Barang</option>
			<option value="Bahan Pokok">Bahan Pokok</option>
		</select>&nbsp; &nbsp;<br /><br /><br />
		<b>Lokasi Sponsor<font color="#FF0000">*</font></b>&nbsp;
		<select id="penempatan" onChange="validasi_Element(this);" name="penempatan" width="600px" maxlength="50">
			<option value=""> ----------------------------- </option>
			<?php $query=$this->penempatan_m->lihat();
				foreach($query->result() as $row):
			?>
			<option value="<?php echo $row->id_penempatan ?>"><?php echo $row->lokasi ?></option>
			<?php
				endforeach;
			?>
		</select>&nbsp; &nbsp;<br /><br /><br />
		<div class="clear"></div>	
		<div class="col_right" style="margin-right:100px ">
			<button type="submit" style="border-radius:0; background-color:#FFCC66 ">Simpan</button>
			<br /><br /><br /><br /><br /><br />
		</div>
		<div class="clear"></div>
	</form>
	</div>
	<div class="clear"></div>
</div>
	<div class="clear"></div>
<?php
	$this->load->view('footer_v');
}
else{
	redirect('maribergabung');
}
?>
<script type="text/javascript">	
	function validasi_Element(element){
			if(element.value==""){
				element.style.borderColor="red";
				return false;
			}
			else{
				element.style.borderColor=null;
				return true;
			}
		}
		
	function validasi(){
			var nama=window.document.getElementById("nama");
			var alamat=window.document.getElementById("alamat");
			var no_telp=window.document.getElementById("no_telp");
			var jns_sponsor=window.document.getElementById("jns_sponsor");
			var penempatan=window.document.getElementById("penempatan");
			
			return ((validasi_Element(nama) && validasi_Element(alamat) && validasi_Element(no_telp) && validasi_Element(jns_sponsor) && validasi_Element(penempatan)));
		}
</script>