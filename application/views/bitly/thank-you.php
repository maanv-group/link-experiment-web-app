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
		<?php require_once APPPATH . "views/components/_common_nav.php"   ?>
	</header>
	<main>
		<section>
			<div class="container">
				<div class="mb-3 mb-md-5">
					<div class="text-center">
						<div class="page-title">
							<h1 class="gradient-text-01">
								Thank You!
							</h1>
							<div class="row m-0">
							<div class="col-12">
								<?php if (isset($this->session->short_data)) : ?>
									<div class="alert alert-success py-2" role="alert">
										<?= $this->session->short_data['url'] ?>
									</div>
								<?php endif ?>
							</div>
							<div class="col-12">
								<p>
									Thank You for trying out the URL Shortner! 
								</p>
								<p>
								In the upcoming February Update (v1.1.0) you would be able to much more stuffs. <br>So stay tuned. And visit again!
								</p>
							</div>
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
