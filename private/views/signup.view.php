<?php $this->view("includes/header"); ?>
	
	<div class="container-fluid">
		
		<div class="p-4 mx-auto mr-4 shadow rounded" style="margin-top: 50px;width:100%;max-width: 340px;">
			<h2 class="text-center">Mənim məktəbim</h2>
			<img src="<?=IMAGES?>/logo.png" class="border border-primary d-block mx-auto rounded-circle" style="width:100px;" />
			<h3>Əlavə Et</h3>
			<?php if(count($errors) > 0): ?>
				<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<strong>Xəta</strong>
						<?php foreach($errors as $error): ?>
						<br />	<?= $error ?>
						<?php endforeach; ?>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
			<?php endif; ?>
			<form method="POST">
				<input class="my-2 form-control" type="text" name="first_name" value="<?= get_var("first_name"); ?>" placeholder="Soyad daxil edin..." />
			<input class="my-2 form-control" type="text" name="last_name" value="<?= get_var("last_name"); ?>" placeholder="Ad daxil edin..." >
			<input class="my-2 form-control" type="email" name="email" value="<?= get_var("email"); ?>" placeholder="E-poçt daxil edin..." >

			<select class="my-2 form-control" name="gender">
				<option>--Cinsiyətini Seç--</option>
				<option value="kişi" <?= get_select("gender","kişi");?>>Kişi</option>
				<option value="qadın" <?= get_select("gender","qadın");?>>Qadın</option>
			</select>
			<select class="my-2 form-control" name="rank">
				<option>--Rütbə Seçin--</option>
				<option value="tələbə" <?=get_select("rank","tələbə");?>>Tələbə</option>
				<option value="qəbul" <?=get_select("rank","qəbul");?>>Qəbul</option>
				<option value="müəllim" <?=get_select("rank","müəllim");?>>Müəllim</option>
				<option value="admin" <?=get_select("rank","admin");?>>Admin</option>
				<option value="super_admin" <?=get_select("rank","super_admin");?>>Super Admin</option>
			</select>

			<input class="my-2 form-control" type="text" name="password" placeholder="Password">
			<input class="my-2 form-control" type="text" name="password2" placeholder="Retype Password">
			<br>
			<button class="btn btn-primary float-end">Əlavə Et</button>
			<button class="btn btn-danger">Bağla</button>
			</form>
		</div>
	</div>

<?php $this->view("includes/footer"); ?>