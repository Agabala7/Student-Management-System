<?php $this->view("includes/header"); ?>
<div class="container-fluid">
	<div class="p-4 mx-auto mr-4 shadow rounded mt-5" style="width:100%;max-width:340px;">
		<h2 class="text-center">Mənim məktəbim</h2>
		<img src="<?=IMAGES?>/logo.png" alt="logo.png" class="border border-primary d-block  mx-auto rounded-circle" style="width:100px;" />
		<h3>Giriş</h3>
		<form action="" method="POST">
			<input type="email" class="form-control mb-2" name="email" placeholder="E-poçt daxil edin..." />
			<input type="text" class="form-control" name="password" placeholder="Şifrə daxil edin..." />
			<button class="btn btn-outline-primary mt-2">Giriş et</button>
		</form>
	</div>
</div>
<?php $this->view("includes/footer"); ?> 