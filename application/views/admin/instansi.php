	<div class="row">
		<div class="col-lg-12">
			<h1><small>Data Instansi</small></h1>
			<ol class="breadcrumb">
				<li>Admin</li>
				<li class="active">Instansi</li>
			</ol>
		</div>

	</div>
	<div class="row">
		<div class="col-md-12">
			<?php
			echo $this->session->flashdata('pesan');
			?>
			<div class="card shadow mb-4">
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-bordered">
							<tr>
								<th style="text-align:center;">Nama Instansi</th>
								<th style="text-align:center;">Telp</th>
								<th style="text-align:center;">Alamat</th>
								<th style="text-align:center;">Logo</th>
								<th style="text-align:center;">Aksi</th>
							</tr>
							<?php foreach ($hasil as $row) { ?>
								<tr style="text-align:center;">
									<td><?php echo $row->instansi; ?></td>
									<td><?php echo $row->telp; ?></td>
									<td><?php echo $row->alamat; ?></td>
									<td><img src="<?php echo base_url('media/' . $row->logo); ?>" width="100px" height="100px" class="img"></img>
									</td>
									<td><a href="#<?php echo $row->id_instansi; ?>" type="button" data-toggle="modal" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i></a></td>
								</tr>

								<div id="<?php echo $row->id_instansi; ?>" class="modal fade" role="dialog">
									<div class="modal-dialog">
										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Edit Instansi</h4>
											</div>
											<div class="modal-body">
												<form method="POST" action="<?php echo site_url('admin/edit_instansi/' . $row->id_instansi); ?>" enctype="multipart/form-data">
													<div class="col-md-6">
														<label for="sel1">Nama Instansi</label>
														<input type="text" name="instansi" class="form-control" pattern="[0-9A-Za-z .,-]{0,50}" value="<?php echo $row->instansi; ?>" required="" maxlength="50">
														<label for="sel1">Alamat</label>
														<textarea name="alamat" class="form-control"><?php echo $row->alamat; ?></textarea>
													</div>
													<div class="col-md-6">
														<label for="sel1">Nomer Telp</label>
														<input type="text" name="telp" class="form-control" pattern="[0-9A-Za-z .,-]{0,50}" value="<?php echo $row->telp; ?>" required="" maxlength="50">
														<label for="sel1">Logo</label>
														<input type="file" name="logo" class="form-control">
														<input type="hidden" name="logo_lama" value="<?php echo $row->logo; ?>">
														<br>
													</div>
													<div class="col-md-12">
														<center>
															<br>
															<button type="submit" class="btn btn-primary">Simpan</button>
															<button type="reset" class="btn btn-danger">Reset</button>
														</center>
													</div>
												</form>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script>
		$(document).on("click", ".open-AddBookDialog", function() {
			var myBookId = $(this).data('id');
			$(".modal-body #bookId").val(myBookId);
			// As pointed out in comments, 
			// it is unnecessary to have to manually call the modal.
			// $('#addBookDialog').modal('show');
		});
	</script>