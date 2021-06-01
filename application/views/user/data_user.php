<div class="row">
	<div class="col-12">
		<?=$this->session->flashdata('pesan');?>
			<div class="card">
				<div class="card-header">
						<a href="<?= base_url('user/add') ?>" class="btn btn-success" ><i class="fa fa-user-plus"></i>Tambah</a>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped" id="dataTable" width="100%" cellspacing="0">
							<thead>
							<tr>
								<th>No</th>
								<th>Username</th>
								<th>Dibuat</th>
								<th>Aksi</th>
							</tr>
							</thead>
							<tbody>
								<?php $no = 1;
								foreach ($row->result() as $user): ?>
									<tr>
										<td><?= $no++ ?>.</td>
										<td><?= $user->username ?></td>
										<td><?= date('d-M-Y', strtotime($user->created_at)); ?></td>
										<td>
										<a class="btn btn-outline-success btn-sm" href="<?=base_url('user/edit/');?><?=$user->id;?>"><i class="fa fa-edit"></i></a>
										<form action="<?= base_url('user/delete') ?>" method="POST" class="d-inline">
												<input type="hidden" name="id" value="<?= $user->id; ?>">
												<button class="btn btn-outline-danger btn-sm tombol-hapus" type="submit">
												<i class="fa fa-trash"></i>
											</button>
										</form>
										</td>    
									</tr>
								<?php endforeach;?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
								<!-- </div> -->



