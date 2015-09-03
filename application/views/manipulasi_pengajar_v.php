<?php
	if($this->session->userdata('username')){
		if($this->session->userdata('status') == 'admin'){
			
	$this->load->view('header_vm');
?>
			<br />
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="pull-left">
						<h3 class="panel-title">Pengajar</h3>
					</div>
					<div class="pull-right">
						<button class="btn btn-primary btn-sm add" title="Tambah" data-toggle="modal" data-target="#modal_manipulasi_admin">
						<i class="glyphicon glyphicon-plus"></i> Tambah
						</button>
						<button class="btn btn-danger btn-sm delete_all" title="Hapus Semua" data-toggle="modal" data-target="#modal_konfirmasi">
						<i class="glyphicon glyphicon-trash"></i> Hapus Semua
						</button>
					</div>
				<div class="clearfix"></div>
				</div>
			</div>
			
			<table class="table table-responsive" style="size:30%; resize:both;">
			<thead>
				<tr>
					<th>Id Pengajar</th>
					<th>Nama</th>
					<th>Username</th>
					<th>Password</th>
					<th>TTL</th>
					<th>Jenis Kelamin</th>
					<!--<th>Foto</th>-->
					<th>Nomor HP</th>
					<th>Alamat</th>
					<!--<th>Universitas</th>
					<th>Fakultas</th>
					<th>Jurusan</th>
					<th>Strata</th>
					<th>IPK</th>
					<th>Tugas Akhir</th>-->
					<th>Status</th>
					<th>Modifikasi</th>
					
				</tr>
			</thead>
            <tbody>
				
				<?PHP
					$query = $this->manipulasi_pengajar_m->view();
					
					foreach($query->result() as $row) :
				?>
				
				<tr>
					<td>
						<?PHP echo $row->id_pengajar; ?>
						<input type="hidden" id="manipulasi_pengajar_<?PHP echo $row->id_pengajar; ?>" value="<?PHP echo $row->nama; ?>">
						<input type="hidden" id="manipulasi_pengajar1_<?PHP echo $row->id_pengajar; ?>" value="<?PHP echo $row->username; ?>">
						<input type="hidden" id="manipulasi_pengajar2_<?PHP echo $row->id_pengajar; ?>" value="<?PHP echo $row->password; ?>">
						<input type="hidden" id="manipulasi_pengajar3_<?PHP echo $row->id_pengajar; ?>" value="<?PHP echo $row->ttl; ?>">
						<input type="hidden" id="manipulasi_pengajar4_<?PHP echo $row->id_pengajar; ?>" value="<?PHP echo $row->jenkel; ?>">
						<!--<input type="hidden" id="manipulasi_pengajar5_<?PHP// echo $row->id_pengajar; ?>" value="<?PHP //echo $row->foto; ?>">-->
						<input type="hidden" id="manipulasi_pengajar6_<?PHP echo $row->id_pengajar; ?>" value="<?PHP echo $row->nomor_hp; ?>">
						<input type="hidden" id="manipulasi_pengajar7_<?PHP echo $row->id_pengajar; ?>" value="<?PHP echo $row->alamat; ?>">
						<input type="hidden" id="manipulasi_pengajar8_<?PHP echo $row->id_pengajar; ?>" value="<?PHP echo $row->universitas; ?>">
						<input type="hidden" id="manipulasi_pengajar9_<?PHP echo $row->id_pengajar; ?>" value="<?PHP echo $row->fakultas; ?>">
						<input type="hidden" id="manipulasi_pengajar10_<?PHP echo $row->id_pengajar; ?>" value="<?PHP echo $row->jurusan; ?>">
						<input type="hidden" id="manipulasi_pengajar11_<?PHP echo $row->id_pengajar; ?>" value="<?PHP echo $row->strata; ?>">
						<input type="hidden" id="manipulasi_pengajar12_<?PHP echo $row->id_pengajar; ?>" value="<?PHP echo $row->ipk; ?>">
						<input type="hidden" id="manipulasi_pengajar13_<?PHP echo $row->id_pengajar; ?>" value="<?PHP echo $row->tugas_akhir; ?>">
					</td>
					<td><?PHP echo $row->nama; ?></td>
					<td><?PHP echo $row->username; ?></td>
					<td><?PHP echo $row->password; ?></td>
					<td><?PHP echo $row->ttl; ?></td>
					<td><?PHP echo $row->jenkel; ?></td>
					<!--<td><?PHP //echo $row->foto; ?></td>-->
					<td><?PHP echo $row->nomor_hp; ?></td>
					<td><?PHP echo $row->alamat; ?></td>
					<!--<td><?PHP //echo $row->universitas; ?></td>
					<td><?PHP /*echo $row->fakultas; ?></td>
					<td><?PHP echo $row->jurusan; ?></td>
					<td><?PHP echo $row->strata; ?></td>
					<td><?PHP echo $row->ipk; ?></td>
					<td><?PHP echo $row->tugas_akhir;*/ ?></td>-->
					<td><?PHP echo $row->status; ?></td>
					
					<td>
						<button class="btn btn-warning btn-sm edit" title="Ubah" data-toggle="modal" data-target="#modal_manipulasi_admin" id="edit_<?PHP echo $row->id_pengajar; ?>">
							<i class="glyphicon glyphicon-edit"></i> Ubah
						</button>
						<button class="btn btn-danger btn-sm delete" title="Hapus" data-toggle="modal" data-target="#modal_konfirmasi" id="delete_<?PHP echo $row->id_pengajar; ?>">
							<i class="glyphicon glyphicon-trash"></i> Hapus
						</button>
					</td>
				</tr>
				
				<?PHP
					endforeach;
				?>
			</tbody>
        </table>
<div class="clear"></div>
</div>
<div class="clear"></div>

<div class="modal fade" id="modal_manipulasi_admin">
	<div class="modal-dialog">
    	<div class="modal-content">
        	<div class="modal-header">
            	<button class="close" data-dismiss="modal">
                	&times;
                </button>
            	<h4 class="modal-title">Form Pengajar</h4>
            </div>
            <div class="modal-body">
            	<form method="post" id="form_manipulasi_admin" style="text-align:left;">
                	<div class="form-group">
                    	<label id="lbl_id">Id Pengajar</label>
                        <input type="text" class="form-control" name="id_pengajar" id="id_pengajar" placeholder="Id Pengajar">
						<input type="hidden" name="id_pengajar_tmp" id="id_pengajar_tmp">
                    </div>
                    <div class="form-group">
                    	<label>Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
                    </div>
					<div class="form-group">
                    	<label>Username</label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
                    </div>
					<div class="form-group">
                    	<label>Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="password" required>
                    </div>
					<div class="form-group">
                    	<label>Tempat Tanggal Lahir</label>
                        <input type="text" class="form-control" name="ttl" id="ttl" placeholder="YY-MM-DD" required>
                    </div>
					<div class="form-group">
                    	<label>Jenis Kelamin</label><br/>
                        <input type="radio" name="jenkel" id="jenkel" value="P">Perempuan<br/>
                        <input type="radio" name="jenkel" id="jenkel" value="L">Laki-laki
                    </div>
					<!--<div class="form-group">
                    	<label>Foto</label>
                        <input type="text" class="form-control" name="foto" id="foto" placeholder="Foto" required>
                    </div>-->
					<div class="form-group">
                    	<label>Nomor HP</label>
                        <input type="text" class="form-control" name="no_hp" id="no_hp" placeholder="Nomor HP" required>
                    </div>
					<div class="form-group">
                    	<label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required>
                    </div>
					<div class="form-group">
                    	<label>Universitas</label>
                        <input type="text" class="form-control" name="universitas" id="universitas" placeholder="Universitas" required>
                    </div>
					<div class="form-group">
                    	<label>Fakultas</label>
                        <input type="text" class="form-control" name="fakultas" id="fakultas" placeholder="Fakultas" required>
                    </div>
					<div class="form-group">
                    	<label>Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Jurusan" required>
                    </div>
					<div class="form-group">
                    	<label>Strata</label>
                        <input type="text" class="form-control" name="strata" id="strata" placeholder="Strata" required>
                    </div>
					<div class="form-group">
                    	<label>IPK</label>
                        <input type="text" class="form-control" name="ipk" id="ipk" placeholder="IPK" required>
                    </div>
					<div class="form-group">
                    	<label>Tugas Akhir</label>
                        <input type="text" class="form-control" name="ta" id="ta" placeholder="Tugas Akhir" required>
                    </div>
					<div class="form-group">
                    	<label id="lbl_lokasi">Lokasi</label>
					<select class="form-control" name="lokasi" id="lokasi" width="600px" maxlength="50">
							<option value=""> --Pilih Lokasi Penempatan-- </option>
							<?PHP 
								$query = $this->load->manipulasi_pengajar_m->penempatan();
								
								foreach($query->result() as $row) :
							?>
							<option value="<?PHP echo $row->id_penempatan; ?>"><?PHP echo $row->lokasi; ?></option>
							<?PHP
								endforeach;
							?>
					</select>
					</div>
                </form>
            </div>
            <div class="modal-footer">
            	<button class="btn btn-primary btn-sm" type="submit" form="form_manipulasi_admin" id="save">
                	Simpan
                </button>
				<button class="btn btn-primary btn-sm" type="submit" form="form_manipulasi_admin" id="update">
                	Perbaharui
                </button>
            	<button class="btn btn-default btn-sm" data-dismiss="modal">
                	Batal
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modal_konfirmasi">
	<div class="modal-dialog">
    	<div class="modal-content">
        	<div class="modal-header">
            	<button class="close" data-dismiss="modal">
                	&times;
                </button>
            	<h4 class="modal-title">Konfirmasi</h4>
            </div>
            <div class="modal-body">
            	<p id="confirm_str">Apakah Anda yakin akan menghapus data ?</p>
            </div>
            <div class="modal-footer">
            	<button class="btn btn-primary btn-sm" id="delete_all">
                	Ok
                </button>
				<button class="btn btn-primary btn-sm" id="delete">
                	Ok
                </button>
            	<button class="btn btn-default btn-sm" data-dismiss="modal">
                	Batal
                </button>
            </div>
        </div>
    </div>
</div>
<?php
	$this->load->view('footer_v');
		}
	}
?>
<script type="text/javascript">
	$(document).ready(function() {
		$('.add').click(function() {
			//$('#id_pengajar').val('');
			$('#nama').val('');
			$('#username').val('');
			$('#password').val('');
			$('#ttl').val('');
			$('#jenkel').val('');
			//$('#foto').val('');
			$('#no_hp').val('');
			$('#alamat').val('');
			$('#universitas').val('');
			$('#fakultas').val('');
			$('#jurusan').val('');
			$('#strata').val('');
			$('#ipk').val('');
			$('#ta').val('');
			
			$('#lokasi').val('');
			
			$('#id_pengajar').attr('disabled', false);
			
			$('#save').show();
			$('#update').hide();
			$('#id_pengajar').hide();
			$('#lbl_id').hide();
			
			$('#form_manipulasi_admin').attr('action', '<?PHP echo site_url(); ?>manipulasi_pengajar/insert');
		});
		
		$('.edit').click(function() {
			var id = this.id.substr(5);
			
			$('#id_pengajar').val(id);
			$('#id_pengajar_tmp').val(id);
			$('#nama').val($('#manipulasi_pengajar_' + id).val());
			$('#username').val($('#manipulasi_pengajar1_' + id).val());
			$('#password').val($('#manipulasi_pengajar2_' + id).val());
			$('#ttl').val($('#manipulasi_pengajar3_' + id).val());
			$('#jenkel').val();//($('#manipulasi_pengajar4_' + id).val());
			$('#foto').val();//($('#manipulasi_pengajar5_' + id).val());
			$('#no_hp').val($('#manipulasi_pengajar6_' + id).val());
			$('#alamat').val($('#manipulasi_pengajar7_' + id).val());
			$('#universitas').val($('#manipulasi_pengajar8_' + id).val());
			$('#fakultas').val($('#manipulasi_pengajar9_' + id).val());
			$('#jurusan').val($('#manipulasi_pengajar10_' + id).val());
			$('#strata').val($('#manipulasi_pengajar11_' + id).val());
			$('#ipk').val($('#manipulasi_pengajar12_' + id).val());
			$('#ta').val($('#manipulasi_pengajar13_' + id).val());
			
			$('#id_pengajar_tmp').attr('disabled', true);
			
			$('#save').hide();
			$('#update').show();
			$('#lbl_id').hide();
			$('#id_pengajar').hide();
			$('#lbl_lokasi').hide();
			$('#lokasi').hide();
			
			$('#form_manipulasi_admin').attr('action', '<?PHP echo site_url(); ?>manipulasi_pengajar/update');
		});
		
		$('.delete').click(function() {
			$('#confirm_str').html('Apakah Anda yakin akan menghapus data ?');
			
			$('#delete').show();
			$('#delete_all').hide();
			
			var id = this.id.substr(7);
			
			$('#id_pengajar').val(id);
		});
		
		$('.delete_all').click(function() {
			$('#confirm_str').html('Apakah Anda yakin akan menghapus semua data ?');
			
			$('#delete').hide();
			$('#delete_all').show();
		});
		
		$('#delete').click(function() {
			window.location = '<?PHP echo site_url(); ?>manipulasi_pengajar/delete/' + $('#id_pengajar').val();
		});
		
		$('#delete_all').click(function() {
			window.location = '<?PHP echo site_url(); ?>manipulasi_pengajar/delete_all';
		});
		
		$('.table').dataTable();
	});
</script>