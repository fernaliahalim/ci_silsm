<?php
	if($this->session->userdata('username')){
		if($this->session->userdata('status') == 'admin'){
			
	$this->load->view('header_vm');
?>
<?PHP
		if($this->uri->segment(3) == 'error_save')
		{
	?>
	
	<div class="alert alert-danger alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		Data gagal disimpan
	</div>
	
	<?PHP
		}
	?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="pull-left">
						<h3 class="panel-title">Sponsor</h3>
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
			
			<table class="table table-responsive">
			<thead>
				<tr>
					<th>Id Sponsor</th>
					<th>Nama</th>
					<th>Alamat</th>
					<th>No.Telepon</th>
                    <th>Jenis Sponsor</th>
					<th>Modifikasi</th>
					
				</tr>
			</thead>
            <tbody>
				
				<?PHP
					$query = $this->manipulasi_sponsor_m->view();
					
					foreach($query->result() as $row) :
				?>
				
				<tr>
					<td>
						<?PHP echo $row->id_sponsor; ?>
						<input type="hidden" id="manipulasi_sponsor_<?PHP echo $row->id_sponsor; ?>" value="<?PHP echo $row->nama; ?>">
						<input type="hidden" id="manipulasi_sponsor2_<?PHP echo $row->id_sponsor; ?>" value="<?PHP echo $row->alamat; ?>">
						<input type="hidden" id="manipulasi_sponsor3_<?PHP echo $row->id_sponsor; ?>" value="<?PHP echo $row->no_telepon; ?>">
                        <input type="hidden" id="manipulasi_sponsor4_<?PHP echo $row->id_sponsor; ?>" value="<?PHP echo $row->jenis_sponsor; ?>"> 
                    
                        
					</td>
					<td><?PHP echo $row->nama; ?></td>
					<td><?PHP echo $row->alamat; ?></td>
					<td><?PHP echo $row->no_telepon; ?></td>
                    <td><?PHP echo $row->jenis_sponsor; ?></td>
					
					<td>
						<button class="btn btn-warning btn-sm edit" title="Ubah" data-toggle="modal" data-target="#modal_manipulasi_admin" id="edit_<?PHP echo $row->id_sponsor; ?>">
							<i class="glyphicon glyphicon-edit"></i> Ubah
						</button>
						<button class="btn btn-danger btn-sm delete" title="Hapus" data-toggle="modal" data-target="#modal_konfirmasi" id="delete_<?PHP echo $row->id_sponsor; ?>">
							<i class="glyphicon glyphicon-trash"></i> Hapus
						</button>
					</td>
				</tr>
				
				<?PHP
					endforeach;
				?>
			</tbody>
        </table>
		<!--</div>-->
	</div>
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
            	<h4 class="modal-title">Form Admin</h4>
            </div>
            <div class="modal-body">
            	<form method="post" id="form_manipulasi_admin" style="text-align:left">
                	<div class="form-group">
                    	<label id="label_id">Id Sponsor</label>
                        <input type="text" class="form-control" name="id_sponsor" id="id_sponsor" disabled placeholder="Id Sponsor">
						<input type="hidden" name="id_sponsor_tmp" id="id_sponsor_tmp">
                    </div>
                    <div class="form-group">
                    	<label>Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
                    </div>
					<div class="form-group">
                    	<label>Alamat</label>
                        <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Alamat" required>
                    </div>
					<div class="form-group">
                    	<label>No. Telepon</label>
                        <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="Nomor Telepon" required>
                    </div>
                    <div class="form-group">
                    	<label>Jenis Sponsor</label><br/>
                        <select id="jns_sponsor" name="jns_sponsor" id="jns_sponsor" width="600px" maxlength="50">
							<option value=""> ---Pilih Jenis Sponsor--- </option>
							<option value="Dana">Dana</option>
							<option value="Barang">Barang</option>
							<option value="Bahan Pokok">Bahan Pokok</option>
						</select>&nbsp; &nbsp;
                    </div>
                    <div class="form-group">
      					<label id="lbl_pnp">Lokasi Sponsor</label><br/>
                        <select id="penempatan" name="penempatan" id="penempatan" width="600px" maxlength="50">
							<option value=""> ---Pilih Lokasi Sponsor--- </option>
								<?php $query=$this->load->penempatan_m->lihat();
									foreach($query->result() as $row):
								?>
							<option value="<?php echo $row->id_penempatan ?>"><?php echo $row->lokasi ?></option>
								<?php
									endforeach;
								?>
						</select>
                    </div>
                    <div class="clear"></div>
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
			$('#id_sponsor').val('');
			$('#nama').val('');
			$('#alamat').val('');
			$('#no_telp').val('');
			$('#jns_sponsor').val('');
			$('#penempatan').val('');
			
			//$('#id_sponsor').attr('disabled', false);
			$('#nama').attr('disabled', false);
			
			$('#save').show();
			$('#update').hide();
			$('#id_sponsor').hide();
			$('#label_id').hide();
			
			$('#form_manipulasi_admin').attr('action', '<?PHP echo site_url(); ?>manipulasi_sponsor/insert');
		});
		
		$('.edit').click(function() {
			var id = this.id.substr(5);
			
			$('#id_sponsor').val(id);
			$('#id_sponsor_tmp').val(id);
			$('#nama').val($('#manipulasi_sponsor_' + id).val());
			$('#alamat').val($('#manipulasi_sponsor2_' + id).val());
			$('#no_telp').val($('#manipulasi_sponsor3_' + id).val());
			$('#jns_sponsor').val($('#manipulasi_sponsor4_' + id).val());
			//$('#penempatan').val();
			
			$('#id_sponsor').attr('disabled', true);
			
			$('#save').hide();
			$('#update').show();
			$('#id_admin').hide();
			$('#penempatan').hide();
			$('#lbl_pnp').hide();
			
			$('#form_manipulasi_admin').attr('action', '<?PHP echo site_url(); ?>manipulasi_sponsor/update');
		});
		
		$('.delete').click(function() {
			$('#confirm_str').html('Apakah Anda yakin akan menghapus data ?');
			
			$('#delete').show();
			$('#delete_all').hide();
			
			var id = this.id.substr(7);
			
			$('#id_sponsor').val(id);
		});
		
		$('.delete_all').click(function() {
			$('#confirm_str').html('Apakah Anda yakin akan menghapus semua data ?');
			
			$('#delete').hide();
			$('#delete_all').show();
		});
		
		$('#delete').click(function() {
			window.location = '<?PHP echo site_url(); ?>manipulasi_sponsor/delete/' + $('#id_sponsor').val();
		});
		
		$('#delete_all').click(function() {
			window.location = '<?PHP echo site_url(); ?>manipulasi_sponsor/delete_all';
		});
		
		$('.table').dataTable();
	});
</script>