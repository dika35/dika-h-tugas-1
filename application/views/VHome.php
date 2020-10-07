<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/bootstrap.css') ?>">
</head>
<body>
	<?php $this->load->view('VNavbar') ?>

	<div class="container mt-5">
		<table class="table">
			<thead>
				<tr>
					<th>No.</th>
					<th>ID Member</th>
					<th>Nama Member</th>
					<th>Alamat</th>
					<th>No.Telp</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $i = 1; ?>
				<?php foreach ($data as $d): ?>
					<tr>
						<td><?= $i++ ?></td>
						<td><?= $d['id_member'] ?></td>
						<td><?= $d['nm_member'] ?></td>
						<td><?= $d['alamat_member'] ?></td>
						<td><?= $d['tlp_member'] ?></td>
						<td></td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</body>
</html>