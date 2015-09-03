<?php
if(! $this->session->userdata('username')){
	$this->load->view('header_vv');
?>
<div id="content">
				<br />
				<div class="col_43" style="text-align:justify; padding-left:100px;">
				<h1><font face="Times New Roman, Times, serif">Formulir Aplikasi Pengajar </font></h1>
				<img src="<?php echo site_url();?>assets/img/head.png" width="890px" height="3px" /> <br /> <br /> <br />
				
				<div class="col" style="margin-top:10px ">
					<div class="col col_bgcolor2">
						Informasi Dasar 
					</div>
					<div class="clear"></div>
					<br /> <br /><br />
					<div class="col" style="padding-left:80px; width:900px">
					<form onSubmit="return validasi();" action="<?php echo site_url()?>daftar" id="form_pengajar" method="get">
					<b>Nama Lengkap<font color="#FF0000">*</font> &nbsp; &nbsp; </b> &nbsp; &nbsp; &nbsp; &nbsp; 
						<input type="text" size="55px" maxlength="50" onKeyUp="validasi_Element(this);" name="nama" required/>
					<br /><br /><br />
					<b>Username<font color="#FF0000">*</font> &nbsp; &nbsp;  </b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
						<input type="text" size="55px" maxlength="50" onKeyUp="validasi_Element(this);" name="username" required/><br /><br /><br />
					<b>Password<font color="#FF0000">*</font> &nbsp; &nbsp;  </b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
						<input type="password" size="55px" maxlength="50" onKeyUp="validasi_Element(this);" name="password" required/><br /><br /><br />
					<b>Tanggal Lahir<font color="#FF0000">*</font> &nbsp; &nbsp; </b> &nbsp; &nbsp; &nbsp;
						&nbsp; &nbsp;
						<span id="tgl" required></span>
						
						&nbsp; &nbsp;
						<span id="bulan" required></span>
						
						&nbsp; &nbsp;
						<span id="tahun" required></span>
						<br /><br /><br />
					<b>Jenis Kelamin<font color="#FF0000">*</font> &nbsp; &nbsp; </b> 
						&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" checked value="Laki-laki" name="jenkel" 
							onChange="validasi_Element(this);" id="jk" required  />Laki-laki<br />&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<input type="radio" value="Perempuan" name="jenkel" 
							onChange="validasi_Element(this);" id="jk" required/>Perempuan
						<br /><br /><br />
						<div class="clear"></div>
					</div>
					
					
					<div class="col col_bgcolor2">
						Informasi Kontak
					</div>
					<div class="clear"></div>
					<br /> <br /><br />
					<div class="col" style="padding-left:80px; width:900px ">
						<b>No. HP<font color="#FF0000">*</font> &nbsp; &nbsp; </b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
						&nbsp; &nbsp; &nbsp; &nbsp;
							<input type="text" size="60px" maxlength="60" id="HP"
								onKeyUp="validasi_Element(this);" name="no_hp" required/><br /><br /><br />
						<b>Alamat<font color="#FF0000">*</font> &nbsp; &nbsp; </b> &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;
						&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<textarea cols="44" id="almt"
								onKeyUp="validasi_Element(this);" name="alamat" required></textarea><br /><br /><br /><br /><br />
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
					
					<div class="col col_bgcolor2">
						Pendidikan
					</div>
					<div class="clear"></div>
					<br /> <br /><br />
					<div class="col" style="padding-left:80px; width:900px ">
						<b>Nama Perguruan Tinggi<font color="#FF0000">*</font></b>
							<input type="text" size="60px" maxlength="60" id="universitas"
								onKeyUp="validasi_Element(this);" name="pt" required/><br /><br /><br />
						<b>Nama Fakultas<font color="#FF0000">*</font> &nbsp; &nbsp; </b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
							<input type="text" size="60px" maxlength="60" id="fakultas"
								onKeyUp="validasi_Element(this);" name="fakultas" required/><br /><br /><br />
						<b>Nama Jurusan<font color="#FF0000">*</font> &nbsp; &nbsp; </b> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;
							<input type="text" size="60px" maxlength="60" id="jurusan"
								onKeyUp="validasi_Element(this);" name="jurusan" required/><br /><br /><br />
						<b>Strata<font color="#FF0000">*</font> &nbsp; &nbsp; </b> &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<select id="strata" onChange="validasi_Element(this);" name="strata" required>
							<option value=""> ----------------------------- </option>
							<option value="D3">D3</option>
							<option value="S1">S1</option>
							<option value="S2">S2</option>
							<option value="S3">S3</option>
						</select>&nbsp; &nbsp;<br /><br /><br />
						<b>IPK<font color="#FF0000">*</font></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;&nbsp;
							<input type="text" size="60px" maxlength="60" id="ipk"
								onKeyUp="validasi_Element(this);" name="ipk" required/><br /><br /><br />
						<b>Tema Tugas Akhir Anda<font color="#FF0000">*</font></b>
							<input type="text" size="60px" maxlength="60" id="ta"
								onKeyUp="validasi_Element(this);" name="ta" required/><br /><br /><br />
						
						<b>Lokasi Pengajar<font color="#FF0000">*</font></b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						&nbsp;&nbsp;&nbsp;
						<select id="penempatan" onChange="validasi_Element(this);" name="penempatan" width="600px" maxlength="50" required>
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
					</div>
					<div class="clear"></div>
					
					<img src="<?php echo site_url();?>assets/img/head.png" width="890px" height="3px" />
					<br />
					<br />
					<br />
				</div>
				<div class="col_right" style="margin-right:100px ">
					<button type="submit" style="border-radius:0; background-color:#FFCC66 ">Simpan</button>
				</form>
				</div>
				</div>
				
				<div class="clear"></div>
				<br />
				<br />
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
	redirect('pengajar');
}
?>

<script type="text/javascript">
	function tgl(){
		var tampilTgl = '<select id="tanggal" onChange="validasi_Element(this);" name="tgl">';
		tampilTgl+= '<option value"">---</option>';
		
		for(var i = 1; i<=31; i++){
			tampilTgl+= '<option value="';
			tampilTgl+= i + '">' + i + '</option>';
		}
		tampilTgl+= '</select>';
		window.document.getElementById("tgl").innerHTML = tampilTgl;
	}
	
	function bulan(){
		var bln = new Array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "Nopember", "Desember");
		var tampilBln = '<select id="bulan" onChange="validasi_Element(this);" name="bulan">';
		tampilBln += '<option value "">------------</option>';
		
		for(var i=1; i<13; i++){
			tampilBln += '<option value="';
			tampilBln += i + '">' + i + '</option>';
		}
		tampilBln+= '</select>';
		window.document.getElementById("bulan").innerHTML = tampilBln;
	}
	
	function tahun(){
		var tampilThn = '<select id="tahun" onChange="validasi_Element(this);" name="tahun">';
		tampilThn+= '<option value"">----</option>';
		
		for(var i = 1970; i<=2014; i++){
			tampilThn+= '<option value="';
			tampilThn+= i + '">' + i + '</option>';
		}
		tampilThn+= '</select>';
		window.document.getElementById("tahun").innerHTML = tampilThn;
	}
	
	
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
			var username=window.document.getElementById("username");
			var password=window.document.getElementById("password");
			var tgl=window.document.getElementById("tgl");
			var bulan=window.document.getElementById("bulan");
			var tahun=window.document.getElementById("tahun");
			var jenkel=window.document.getElementById("jenkel");
			var no_hp=window.document.getElementById("no_hp");
			var alamat=window.document.getElementById("alamat");
			var pt=window.document.getElementById("pt");
			var fakultas=window.document.getElementById("fakultas");
			var jurusan=window.document.getElementById("jurusan");
			var strata=window.document.getElementById("strata");
			var ipk=window.document.getElementById("ipk");
			var ta=window.document.getElementById("ta");
			var penempatan=window.document.getElementById("penempatan");

			
			return ((validasi_Element(nama) && validasi_Element(username) && validasi_Element(password) && validasi_Element(tgl)
				&& validasi_Element(bulan) && validasi_Element(tahun)) && (validasi_Element(jenkel) && validasi_Element(no_hp)
				&& validasi_Element(alamat)) && (validasi_Element(pt) && validasi_Element(fakultas) && validasi_Element(jurusan)
				&& validasi_Element(strata)) && (validasi_Element(ipk) && validasi_Element(ta) && 
				validasi_Element(penempatan)));
		}
	
	tgl();
	bulan();
	tahun();
</script>