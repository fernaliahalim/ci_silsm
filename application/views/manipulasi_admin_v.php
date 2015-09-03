<?php
	session_start();
	if($this->session->userdata('username')){
		if($this->session->userdata('status') == 'admin'){
			
	$this->load->view('header_vm');
?>
	
			<br />
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="pull-left">
						<h3 class="panel-title">Admin</h3>
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
					<th>Id Admin</th>
					<th>Nama</th>
					<th>Username</th>
					<!--<th>Password</th>-->
					<th>Modifikasi</th>
					
				</tr>
			</thead>
            <tbody>
				
				<?PHP
					$query = $this->manipulasi_admin_m->view();
					
					foreach($query->result() as $row) :
				?>
				
				<tr>
					<td>
						<?PHP echo $row->id_admin; ?>
						<input type="hidden" id="manipulasi_admin_<?PHP echo $row->id_admin; ?>" value="<?PHP echo $row->nama; ?>">
						<input type="hidden" id="manipulasi_admin1_<?PHP echo $row->id_admin; ?>" value="<?PHP echo $row->username; ?>">
						<!--<input type="hidden" id="manipulasi_admin2_<?PHP //echo $row->id_admin; ?>" value="<?PHP //echo $row->password; ?>">-->
					</td>
					<td><?PHP echo $row->nama; ?></td>
					<td><?PHP echo $row->username; ?></td>
					<!--<td><?PHP //echo $row->password; ?></td>-->
					
					<td>
						<button class="btn btn-warning btn-sm edit" title="Ubah" data-toggle="modal" data-target="#modal_manipulasi_admin" id="edit_<?PHP echo $row->id_admin; ?>">
							<i class="glyphicon glyphicon-edit"></i> Ubah
						</button>
						<button class="btn btn-danger btn-sm delete" title="Hapus" data-toggle="modal" data-target="#modal_konfirmasi" id="delete_<?PHP echo $row->id_admin; ?>">
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
            	<h4 class="modal-title">Form Admin</h4>
            </div>
            <div class="modal-body">
            	<form method="post" id="form_manipulasi_admin" style="text-align:left">
                	<div class="form-group">
                    	<label id="label_id">Id Admin</label>
                        <input type="text" class="form-control" name="id_admin" id="id_admin" placeholder="Id Admin">
						<input type="hidden" name="id_admin_tmp" id="id_admin_tmp">
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
			$('#id_admin').val('');
			$('#nama').val('');
			$('#username').val('');
			$('#password').val('');
			
			//$('#id_admin').attr('disabled', false);
			$('#nama').attr('disabled', false);
			
			$('#save').show();
			$('#update').hide();
			$('#id_admin').hide();
			$('#label_id').hide();
			
			$('#form_manipulasi_admin').attr('action', '<?PHP echo site_url(); ?>manipulasi_admin/insert');
		});
		
		$('.edit').click(function() {
			var id = this.id.substr(5);
			
			$('#id_admin').val(id);
			$('#id_admin_tmp').val(id);
			$('#nama').val($('#manipulasi_admin_' + id).val());
			$('#username').val($('#manipulasi_admin1_' + id).val());
			$('#password').val($('#manipulasi_admin2_' + id).val());
			
			$('#id_admin_tmp').attr('disabled', true);
			
			$('#save').hide();
			$('#update').show();
			$('#id_admin').hide();
			$('#label_id').hide();
			
			$('#form_manipulasi_admin').attr('action', '<?PHP echo site_url(); ?>manipulasi_admin/update');
		});
		
		$('.delete').click(function() {
			$('#confirm_str').html('Apakah Anda yakin akan menghapus data ?');
			
			$('#delete').show();
			$('#delete_all').hide();
			
			var id = this.id.substr(7);
			
			$('#id_admin').val(id);
		});
		
		$('.delete_all').click(function() {
			$('#confirm_str').html('Apakah Anda yakin akan menghapus semua data ?');
			
			$('#delete').hide();
			$('#delete_all').show();
		});
		
		$('#delete').click(function() {
			window.location = '<?PHP echo site_url(); ?>manipulasi_admin/delete/' + $('#id_admin').val();
		});
		
		$('#delete_all').click(function() {
			window.location = '<?PHP echo site_url(); ?>manipulasi_admin/delete_all';
		});
		
		$('.table').dataTable();
	});
</script>