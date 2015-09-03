<?php
	if($this->session->userdata('username')){
		if($this->session->userdata('status') == 'admin'){
		
	$this->load->view('header_vm');
?>
			<br />
			<div class="panel panel-default">
				<div class="panel-heading">
					<div class="pull-left">
						<h3 class="panel-title">Kontak Kami</h3>
					</div>
					<div class="pull-right">
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
					<th>Nama</th>
					<th>Email</th>
					<th>Pesan</th>
					
				</tr>
			</thead>
            <tbody>
				
				<?PHP
					$query = $this->manipulasi_kontakkami_m->view();
					
					foreach($query->result() as $row) :
				?>
				
				<tr>
					<td>
						<?PHP echo $row->nama; ?>
					</td>
					<td><?PHP echo $row->email; ?></td>
					<td>
						<?PHP echo $row->pesan; ?>
						<input type="hidden" id="manipulasi_kontakkami_<?PHP echo $row->pesan; ?>" value="<?PHP echo $row->nama; ?>">
						<input type="hidden" id="manipulasi_kontakkami2_<?PHP echo $row->pesan; ?>" value="<?PHP echo $row->email; ?>">
					</td>

					<td>
						<!--<button class="btn btn-warning btn-sm edit" title="Ubah" data-toggle="modal" data-target="#modal_manipulasi_admin" id="edit_<?PHP echo $row->pesan; ?>">
							<i class="glyphicon glyphicon-edit"></i> Ubah
						</button>
						<button class="btn btn-danger btn-sm delete" title="Hapus" data-toggle="modal" data-target="#modal_konfirmasi" id="delete_<?PHP echo $row->pesan; ?>">
							<i class="glyphicon glyphicon-trash"></i> Hapus
						</button>-->
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
            	<h4 class="modal-title">Form Kontak Kami</h4>
            </div>
            <!--<div class="modal-body">
            	<form method="post" id="form_manipulasi_admin" style="text-align:left">
                    <div class="form-group">
                    	<label>Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" required>
                    </div>
					<div class="form-group">
                    	<label>Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
                    </div>
					<div class="form-group">
                    	<label>Pesan</label>
                        <input type="text" class="form-control" name="pesan" id="pesan" placeholder="Pesan" required>
                    </div>
                </form>
            </div>-->
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
<br />
<br />
<br />
<br />
</div>
<?php
	$this->load->view('footer_v');
		}
	}
?>
<script type="text/javascript">
	$(document).ready(function() {
		$('.add').click(function() {
			$('#nama').val('');
			$('#email').val('');
			$('#pesan').val('');
			
			$('#pesan').attr('disabled', false);
			
			$('#save').show();
			$('#update').hide();
			
			$('#form_manipulasi_admin').attr('action', '<?PHP echo site_url();?>index.php/manipulasi_kontakkami/insert');
		});
		
		$('.delete').click(function() {
			$('#confirm_str').html('Apakah Anda yakin akan menghapus data ?');
			
			$('#delete').show();
			$('#delete_all').hide();
			
			//var id = this.id.substr(7);
			
			$('#pesan').val(id);
		});
		
		$('.delete_all').click(function() {
			$('#confirm_str').html('Apakah Anda yakin akan menghapus semua data ?');
			
			$('#delete').hide();
			$('#delete_all').show();
		});
		
		$('#delete').click(function() {
			window.location = '<?PHP echo site_url(); ?>manipulasi_kontakkami/delete/' + $('#pesan').val();
		});
		
		$('#delete_all').click(function() {
			window.location = '<?PHP echo site_url(); ?>manipulasi_kontakkami/delete_all';
		});
		
		$('.table').dataTable();
	});
</script>