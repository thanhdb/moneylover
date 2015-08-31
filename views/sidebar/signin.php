<?php if (isset($error)): ?>
<div class="alert alert-error">
<?php echo $error; ?>
</div>
<?php endif; ?>


<?php if ($logged = isLogged()): ?>
<!-- <div class="col-md-4 about-right heading"> -->
	<div class="abt-1">
		<div class="abt-one">
			<h3><a href="#">Welcome <strong><?php echo $logged['name']; ?></strong></a></h3>
			<h3><a href="index.php?c=store&m=total">Your Cart</a></h3>
			<h3><a href="index.php?c=auth&m=logout">Logout</a></h3>
		</div>
	</div>
<!-- </div> -->
<?php else: ?>
<!-- <div class="col-md-4 about-right heading"> -->
	<div class="abt-1">
		<div class="abt-one">
			<form action="index.php?c=auth&m=login" method="POST" role="form">
				<legend>Sign in</legend>
				<div class="form-group">
					<!-- <label for="">Username</label> -->
					<input type="email" name="email" class="form-control" id="" placeholder="Email"><br>
					<input type="password" name="password" class="form-control" id="" placeholder="Password">
				</div>
				<button id="dangnhap" type="submit" class="btn">Sign in</button>
			</form>
		</div>
	</div>
<!-- </div> -->
<?php endif; ?>

	

					
<!-- </div> -->
