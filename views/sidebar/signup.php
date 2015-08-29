<?php if (isset($error)): ?>
<div class="alert alert-error">
    <?php echo $error; ?>
</div>
<?php endif; ?>

<?php if (isLogged() == false): ?>
<!-- <div class="col-md-4 about-right heading"> -->
<div class="abt-2">
	<form action="index.php?c=auth&m=register" method="POST" role="form">
		<legend>Sign up</legend>
		<div class="form-group">
			<input type="email" name="email" class="form-control" id="" placeholder="Email"><br>
			<input type="text" name="name" class="form-control" id="" placeholder="Username"><br>
			<input type="password" name="password" class="form-control" id="" placeholder="Password"><br>
		</div>
		<button id="dangki" type="submit" class="btn">Sign up</button>
	</form>
</div>
<!-- </div> -->
<?php endif; ?>



