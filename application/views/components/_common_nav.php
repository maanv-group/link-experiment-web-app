<nav class="navbar navbar-expand-lg">
	<div class="container">
		<a class="navbar-brand" href="#">
			<img src="<?= base_url() ?>assets/logo.png" alt="Logo" height="40">
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-between" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url('app') ?>">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="<?= base_url('analytics') ?>">URL Analytics</a>
				</li>
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link disabled" href="#">Register</a>
				</li>
			</ul>
		</div>
	</div>
</nav>
