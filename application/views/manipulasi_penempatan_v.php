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
        
        <?PHP
			if($this->session->userdata('username'))
			{
		?>
        
    	<div class="panel-heading">
        	<div class="pull-left">
						<h3 class="panel-title">Penempatan</h3>
					</div>
					<div class="pull-right">
						<button class="btn btn-primary btn-sm add" title="Tambah" data-toggle="modal" data-target="#modal_program_keahlian">
						<i class="glyphicon glyphicon-plus"></i> Tambah
						</button>
						<button class="btn btn-danger btn-sm delete_all" title="Hapus Semua" data-toggle="modal" data-target="#modal_konfirmasi">
						<i class="glyphicon glyphicon-trash"></i> Hapus Semua
						</button>
					</div>
            <div class="clearfix"></div>
        </div>
    </div>
        
        <?PHP
			}
		?>
		
        <table class="table table-responsive">
			<thead>
				<tr>
					<th>ID Penempatan</th>
					<th>Lokasi</th>
					
					<?PHP
						if($this->session->userdata('username'))
						{
					?>
					
					<th>Modifikasi</th>
					
					<?PHP
						}
					?>
					
				</tr>
			</thead>
            <tbody>
				
				<?PHP
					//$this->load->model('program_keahlian_m');
					$query = $this->manipulasi_penempatan_m->view();
					
					foreach($query->result() as $row) :
				?>
				
				<tr>
					<td>
						<?PHP echo $row->id_penempatan; ?>
						<input type="hidden" id="manipulasi_penempatan_<?PHP echo $row->id_penempatan; ?>" value="<?PHP echo $row->lokasi; ?>">
					</td>
					<td><?PHP echo $row->lokasi; ?></td>
					
					<?PHP
						if($this->session->userdata('username'))
						{
					?>
					
					<td>
						<button class="btn btn-warning btn-sm edit" title="Ubah" data-toggle="modal" data-target="#modal_program_keahlian" id="edit_<?PHP echo $row->id_penempatan; ?>">
							<i class="glyphicon glyphicon-edit"></i> Ubah
						</button>
						<button class="btn btn-danger btn-sm delete" title="Hapus" data-toggle="modal" data-target="#modal_konfirmasi" id="delete_<?PHP echo $row->id_penempatan; ?>">
							<i class="glyphicon glyphicon-trash"></i> Hapus
						</button>
					</td>
					
					<?PHP
						}
					?>
					
				</tr>
				
				<?PHP
					endforeach;
				?>
				
			</tbody>
        </table>
    </div>
<div class="modal fade" id="modal_program_keahlian">
	<div class="modal-dialog">
    	<div class="modal-content">
        	<div class="modal-header">
            	<button class="close" data-dismiss="modal">
                	&times;
                </button>
            	<h4 class="modal-title">Form Penempatan</h4>
            </div>
            <div class="modal-body">
            	<form method="post" id="form_program_keahlian" style="text-align:left;">
                	<div class="form-group">
                    	<label id="lbl_id">ID Penempatan</label>
                        <input type="text" class="form-control" name="id_penempatan" id="id_penempatan" placeholder="ID Penempatan">
						<input type="hidden" name="id_penempatan_tmp" id="id_penempatan_tmp">
                    </div>
                    <div class="form-group">
                    	<label>Lokasi</label>
                        <input type="text" class="form-control" name="lokasi" id="lokasi" placeholder="Lokasi" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            	<button class="btn btn-primary btn-sm" type="submit" form="form_program_keahlian" id="save">
                	Simpan
                </button>
				<button class="btn btn-primary btn-sm" type="submit" form="form_program_keahlian" id="update">
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
			$('#id_penempatan').val('');
			$('#lokasi').val('');
			
			$('#id_penempatan').attr('disabled', false);
			
			$('#save').show();
			$('#update').hide();
			$('#lbl_id').hide();
			$('#id_penempatan').hide();
			
			$('#form_program_keahlian').attr('action', '<?PHP echo site_url(); ?>manipulasi_penempatan/insert');
		});
		
		$('.edit').click(function() {
			var id = this.id.substr(5);
			
			$('#id_penempatan').val(id);
			$('#id_penempatan_tmp').val(id);
			$('#lokasi').val($('#manipulasi_penempatan_' + id).val());
			
			$('#id_penempatan_tmp').attr('disabled', true);
			
			$('#save').hide();
			$('#update').show();
			
			$('#form_program_keahlian').attr('action', '<?PHP echo site_url(); ?>manipulasi_penempatan/update');
		});
		
		$('.delete').click(function() {
			$('#confirm_str').html('Apakah Anda yakin akan menghapus data ?');
			
			$('#delete').show();
			$('#delete_all').hide();
			
			var id = this.id.substr(7);
			
			$('#id_program_keahlian').val(id);
		});
		
		$('.delete_all').click(function() {
			$('#confirm_str').html('Apakah Anda yakin akan menghapus semua data ?');
			
			$('#delete').hide();
			$('#delete_all').show();
		});
		
		$('#delete').click(function() {
			window.location = '<?PHP echo site_url(); ?>pk/delete/' + $('#id_program_keahlian').val();
		});
		
		$('#delete_all').click(function() {
			window.location = '<?PHP echo site_url(); ?>pk/delete_all';
		});
		
		$('.excel').click(function(){
			window.location = '<?PHP echo site_url(); ?>pk/excel';
		});
		
		$('.pdf').click(function(){
			window.location = '<?PHP echo site_url(); ?>pk/pdf';
		});
		
		$('.chart').click(function(){
			window.location = '<?PHP echo site_url(); ?>pk/chart';
		});
		
		$('.table').dataTable();
	});
</script>