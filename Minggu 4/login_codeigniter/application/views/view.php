<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
    <title>Tampil Data</title>
</head>
<body>
<div class="container">
	<div class="row mt-2">
		<div class="col">
			<a href="data" class="btn btn-success btn-sm p-2 mb-2">Tambah Data</a>
			<a href="logout" class="btn btn-danger btn-sm p-2 mb-2">Log Out</a>
			<table class="table table-striped text-center">
				<tr>
					<th>ID</th>
					<th>Deskripsi</th>
					<th>Status</th>
					<th>Actions</th>
				</tr>

				<?php foreach($data->result() as $nilai) : ?>
					<tr>
						<td><?= $nilai->id ;?></td>
						<td><?= $nilai->deskripsi ;?></td>
						<td><?= $nilai->status ;?></td>
						<td><a href="update/<?= $nilai->id ;?>" class="btn btn-success btn-sm">Edit</a> | 
							<a href="delete/<?= $nilai->id ;?>" class="btn btn-danger btn-sm">Hapus</a>
						</td>
					</tr>
				<?php endforeach ; ?>
			</table>
		</div>
	</div>
</div>
</body>
</html>