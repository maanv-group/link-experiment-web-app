<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<?php require_once APPPATH . "views/components/_common_css.php"  ?>

	<title>Document</title>
</head>

<body>
	<header>
	<header>
		<?php require_once APPPATH . "views/components/_common_nav.php"   ?>
	</header>
	</header>
	<main>
		<section>
			<div class="container">
				<div class="mb-3 mb-md-5">
					<div class="text-center">
						<div class="page-title">
							<h1 class="gradient-text-01">
								Shorten Your <span class="text-blue-01">Loooooong</span> Links!
							</h1>
							<p>
								Create Short Links, QR Codes, and track what's working and what's not!
							</p>
						</div>
					</div>
				</div>
				<div class="row m-0 justify-content-center">
					<div class="col-lg-10 col-12">
						<form action="<?= base_url('api/form-process') ?>" method="POST">
							<div class="row m-0">
								<div class="col-12">
									<div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Your Long URL</label>
										<input type="url" name="url" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Domain</label>
										<div class="input-group">
											<span class="input-group-text">L</span>
											<input type="text" disabled name="domain" value="<?= base_url('link') ?>" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mb-3">
										<label for="exampleInputEmail1" class="form-label">Your URL</label>
										<input type="text" disabled name="segment" class="form-control form-control-lg" id="exampleInputEmail1" aria-describedby="emailHelp">
									</div>
								</div>
								<div class="col-12">
									<div class="mb-3">
										<button type="submit" class="btn btn-yellow-01">Submit</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
	</main>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
