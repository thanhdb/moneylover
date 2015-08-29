<?php if (isset($error)): ?>
<div class="alert alert-error">
    <?php echo $error; ?>
</div>

	<div class="header-top">
	<div class="container">
	    <div class="head-main">
	        <a href="index.php"><img src="../styles/images/logo-1.png" alt="" /></a>
	    </div>
	</div>
	</div>
	<div class="container" style="width: 30%">
	<div class="header" style="text-align: center">
            	<h4>Admin</h4>
	</div>
	

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
	</div>
