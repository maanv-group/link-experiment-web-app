<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="<?= base_url('assets/css/') ?>style.min.css">
	<title>Document</title>
</head>

<body>
	<header>
		<nav class="navbar navbar-expand-lg bg-body-tertiary">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Navbar</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Features</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">Pricing</a>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" aria-disabled="true">Disabled</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
	<main>
		<section>
			<div class="container">
				<div class="mb-3 mb-md-5">
					<div class="text-center">
						<h1>Shorten Your Loooooong Links!</h1>
						<p>
							Lorem ipsum dolor sit amet consectetur, adipisicing elit. Saepe corrupti ipsa suscipit hic error numquam nisi voluptate esse delectus? Distinctio sit, dolor explicabo sequi, fuga ipsum quasi natus officiis saepe dignissimos dolorem maxime vero. Libero asperiores aut saepe blanditiis odio!
						</p>
					</div>
				</div>
				<div class="row m-0 justify-content-center">
					<div class="col-lg-10 col-12">
						<form action="<?= base_url('api/form-process') ?>" method="POST">
							<div class="row m-0">
								<div class="col-12">
									<div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Your Long URL</label>
										<input type="url" name="url" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Domain</label>
										<div class="input-group">
											<span class="input-group-text">L</span>
											<input type="text" name="domain" value="<?= base_url() ?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Your URL</label>
										<input type="text" name="segment" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
								<div class="col-12">
									<div class="mb-3">
										<button type="submit" class="btn btn-primary">Submit</button>
									</div>
								</div>
							</div>
						</form>

						<div class="row m-0">
							<div class="col-12">
								<?php if (isset($url)) : ?>
									<div class="alert alert-success py-2" role="alert">
										<?= $url ?>
									</div>
								<?php else : ?>
									<div class="alert alert-danger py-2" role="alert">
										A simple danger alert—check it out!
									</div>
								<?php endif ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
