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
						<h3 class="panel-title">Tes</h3>
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
					<th>Id Soal</th>
					<th>Nomer</th>
					<th>Soal</th>
					<th>a</th>
					<th>b</th>
					<th>c</th>
					<th>d</th>
					<th>Jawaban</th>
					<th>Modifikasi</th>
					
				</tr>
			</thead>
            <tbody>
				
				<?PHP
					$query = $this->manipulasi_tes_m->view();
					
					foreach($query->result() as $row) :
				?>
				
				<tr>
					<td>
						<?PHP echo $row->id_tes; ?>
						<input type="hidden" id="manipulasi_tes_<?PHP echo $row->nomer; ?>" value="<?PHP echo $row->nomer; ?>">
                        <input type="hidden" id="manipulasi_tes1_<?PHP echo $row->nomer; ?>" value="<?PHP echo $row->soal; ?>">
                        <input type="hidden" id="manipulasi_tes2_<?PHP echo $row->nomer; ?>" value="<?PHP echo $row->a; ?>">
						<input type="hidden" id="manipulasi_tes3_<?PHP echo $row->nomer; ?>" value="<?PHP echo $row->b; ?>">
						<input type="hidden" id="manipulasi_tes4_<?PHP echo $row->nomer; ?>" value="<?PHP echo $row->c; ?>">
						<input type="hidden" id="manipulasi_tes5_<?PHP echo $row->nomer; ?>" value="<?PHP echo $row->d; ?>">
						<input type="hidden" id="manipulasi_tes6_<?PHP echo $row->nomer; ?>" value="<?PHP echo $row->jawaban; ?>">
                        <input type="hidden" id="manipulasi_tes7_<?PHP echo $row->nomer; ?>" value="<?PHP echo $row->id_tes; ?>">
					</td>
					<td><?PHP echo $row->nomer; ?></td>
					<td><?PHP echo $row->soal; ?></td>
					<td><?PHP echo $row->a; ?></td>
					<td><?PHP echo $row->b; ?></td>
					<td><?PHP echo $row->c; ?></td>
					<td><?PHP echo $row->d; ?></td>
					<td><?PHP echo $row->jawaban; ?></td>
					
					<td>
						<button class="btn btn-warning btn-sm edit" title="Ubah" data-toggle="modal" data-target="#modal_manipulasi_admin" id="edit_<?PHP echo $row->nomer; ?>">
							<i class="glyphicon glyphicon-edit"></i> Ubah
						</button>
						<button class="btn btn-danger btn-sm delete" title="Hapus" data-toggle="modal" data-target="#modal_konfirmasi" id="delete_<?PHP echo $row->nomer; ?>">
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
            	<h4 class="modal-title">Form Data Tes</h4>
            </div>
            <div class="modal-body">
            	<form method="post" id="form_manipulasi_admin" style="text-align:left">
                	<div class="form-group">
                    	<label id="label_id">ID Tes</label>
                        <input type="text" class="form-control" name="id_tes" id="id_tes" disabled placeholder="ID Tes">
						<input type="hidden" name="id_tes_tmp" id="id_tes_tmp">
                    </div>
                    <div class="form-group">
                    	<label>Nomer</label>
                        <input type="text" class="form-control" name="nomer" id="nomer" placeholder="Nomer" required>
                    </div>
					<div class="form-group">
                    	<label>Soal</label>
                        <input type="text" class="form-control" name="soal" id="soal" placeholder="Soal" required>
                    </div>
					<div class="form-group">
                    	<label>Opsi A</label>
                        <input type="text" class="form-control" name="a" id="a" placeholder="Opsi A" required>
                    </div>
                    <div class="form-group">
                    	<label>Opsi B</label>
                        <input type="text" class="form-control" name="b" id="b" placeholder="Opsi B" required>
                    </div>
                    <div class="form-group">
                    	<label>Opsi C</label>
                        <input type="text" class="form-control" name="c" id="c" placeholder="Opsi C" required>
                    </div>
                    <div class="form-group">
                    	<label>Opsi D</label>
                        <input type="text" class="form-control" name="d" id="d" placeholder="Opsi D" required>
                    </div>
                    <div class="form-group">
                    	<label>Jawaban</label>
                        <input type="text" class="form-control" name="jawaban" id="jawaban" placeholder="Jawaban" required>
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
			$('#id_tes').val('');
			$('#nomer').val('');
			$('#soal').val('');
			$('#a').val('');
			$('#b').val('');
			$('#c').val('');
			$('#d').val('');
			$('#jawaban').val('');
			
			//$('#id_sponsor').attr('disabled', false);
			//$('#nama').attr('disabled', false);
			
			$('#save').show();
			$('#update').hide();
			$('#id_tes').hide();
			$('#label_id').hide();
			
			$('#form_manipulasi_admin').attr('action', '<?PHP echo site_url(); ?>manipulasi_tes/insert');
		});
		
		$('.edit').click(function() {
			var id = this.id.substr(5);
			
			$('#id_tes').val($('#manipulasi_tes7_' + id).val());
			$('#id_tes_tmp').val(id);
			$('#nomer').val($('#manipulasi_tes_' + id).val());
			$('#soal').val($('#manipulasi_tes1_' + id).val());
			$('#a').val($('#manipulasi_tes2_' + id).val());
			$('#b').val($('#manipulasi_tes3_' + id).val());
			$('#c').val($('#manipulasi_tes4_' + id).val());
			$('#d').val($('#manipulasi_tes5_' + id).val());
			$('#jawaban').val($('#manipulasi_tes6_' + id).val());
			//$('#penempatan').val();
			
			$('#id_tes').attr('disabled', true);
			
			$('#save').hide();
			$('#update').show();

			$('#form_manipulasi_admin').attr('action', '<?PHP echo site_url(); ?>manipulasi_tes/update');
		});
		
		$('.delete').click(function() {
			$('#confirm_str').html('Apakah Anda yakin akan menghapus data ?');
			
			$('#delete').show();
			$('#delete_all').hide();
			
			var id = this.id.substr(7);
			
			$('#nomer').val(id);
		});
		
		$('.delete_all').click(function() {
			$('#confirm_str').html('Apakah Anda yakin akan menghapus semua data ?');
			
			$('#delete').hide();
			$('#delete_all').show();
		});
		
		$('#delete').click(function() {
			window.location = '<?PHP echo site_url(); ?>manipulasi_tes/delete/' + $('#nomer').val();
		});
		
		$('#delete_all').click(function() {
			window.location = '<?PHP echo site_url(); ?>manipulasi_tes/delete_all';
		});
		
		$('.table').dataTable();
	});
</script>