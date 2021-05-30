<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="<?= base_url('bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
	<title><?= $title; ?></title>
</head>
<body>
	<div class="container">
		<div class="row" style="margin-top: 40px; margin-left: 30%">
			<div class="col-md-offest-4">
				<h4><?= $title; ?></h4><br>
				<table class="table table-hover">
					<thead>
						<tr>
							<th>email</th>
							<th>username</th>
							<th>phone</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?= ucfirst($userInfo['username']); ?></td>
							<td><?= $userInfo['email']; ?></td>
							<td><?= $userInfo['phone']; ?></td>
							<td><a href="<?= site_url('arvcontroller/logout'); ?>">Logout</a></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>