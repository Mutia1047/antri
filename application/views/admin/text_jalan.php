<div class="row">
	<div class="col-lg-12">
		<h1><small>Data Text Jalan</small></h1>
		<ol class="breadcrumb">
			<li>Admin</li>
			<li class="active">Text Jalan</li>
		</ol>
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		<?php
		echo $this->session->flashdata('pesan');
		?>
		<div class="card shadow mb-4">
			<div class="card-body ">
				<div>
					<a href="#add" class="btn btn-primary" data-toggle="modal"><i class="glyphicon glyphicon-plus"></i> Tambah Text Jalan</a><br><br>
				</div>
				<div class="table-responsive">
					<table class="table table-bordered">
						<tr>
							<th width="3px">No</th>
							<th style="text-align: center;">Text</th>
							<th width="130px">Gambar</th>
							<th width="110px">Aksi</th>
						</tr>
						<?php
						$no = 0;
						foreach ($hasil as $row) {
							$no++;
						?>
							<tr style="text-align:center;">
								<td><?php echo $no; ?></td>
								<td><?php echo $row->text; ?></td>
								<td><embed src="<?php echo base_url('media/agenda/' . $row->img); ?>" width="100px" height="100px" class="img"></embed>
								</td>
								<td><a href="#<?php echo $row->id_text; ?>" class="btn btn-success" data-toggle="modal"><i class="glyphicon glyphicon-pencil"></i></a>&nbsp;<a href="<?php echo site_url('admin/del_text/' . $row->id_text); ?>" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></a></td>
							</tr>

							<div id="<?php echo $row->id_text; ?>" class="modal fade" role="dialog">
								<div class="modal-dialog">

									<!-- Modal content-->
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4 class="modal-title">Edit Text Jalan</h4>
										</div>
										<div class="modal-body">
											<form method="POST" action="<?php echo site_url('admin/edit_text/'); ?>" enctype="multipart/form-data">
												<div class="col-md-12">
													<center>
														<label for="sel1">Text Jalan</label>
														<input type="hidden" name="id_text" value="<?php echo $row->id_text; ?>">
														<textarea name="text" class="form-control" required="" placeholder="Masukan Text"><?php echo $row->text; ?></textarea>
													</center>
												</div>
												<div class="col-md-12">
													<center>
														<label for="sel1">Gambar</label>
														<input type="file" name="img" class="form-control">
														<input type="hidden" name="img_lama" value="<?php echo $row->img; ?>">
														<br>
														<button type="submit" class="btn btn-primary">Simpan</button>
														<button type="reset" class="btn btn-danger">Reset</button>
													</center>
												</div>
											</form>
										</div>
										<div class="modal-footer">

										</div>
									</div>

								</div>
							</div>


						<?php } ?>
					</table>
				</div>
				<?php echo $halaman; ?>
			</div>
		</div>
	</div>
</div>
</div>
</div>

<div id="add" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Tambah Text Jalan</h4>
			</div>
			<div class="modal-body">
				<form method="POST" action="<?php echo site_url('admin/add_text/'); ?>" enctype="multipart/form-data">
					<div class="col-md-12">
						<center>
							<label for="sel1">Text Jalan</label>
							<textarea class="form-control" name="text" required="" placeholder="Masukan Nama Text Berjalan"></textarea>
						</center>
					</div>
					<div class="col-md-12">
						<center>
							<label for="sel1">Gambar</label>
							<input type="file" name="img" class="form-control" readonly="">
							<br>
							<button type="submit" class="btn btn-primary">Simpan</button>
							<button type="reset" class="btn btn-danger">Reset</button>
						</center>
					</div>
				</form>
			</div>
			<div class="modal-footer">

			</div>
		</div>

	</div>
</div>