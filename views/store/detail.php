<?php
	// session_start();
?>


<?php if (isset($error)): ?>
<div class="alert alert-error">
<?php echo $error; ?>
</div>
<?php endif; ?>


<?php 
	$img 	= $detail['image'];
	$name 	= $detail['name'];
	$price 	= $detail['price'];
	$id 	= $detail['id'];
	$decs 	= $detail['decsription'];
	
 ?>

<div class="single">
	<div class="container">
			<div class="single-top">
			<div class="col-md-9">
			
				<div class="col-md-6">
			<?php if($logged = isLogged()): ?>	
				<form action="index.php?c=store&m=cart" method="post" accept-charset="utf-8">
					<img src="<?php echo $img ?>" alt=""><br>
					<h3><?php echo $name ?></h3>
					<strong><?php echo "$".$price." / pound"; ?></strong> 
					<h3 style="font-size: 1em"><p>Quantity: </p><input type="number" name="quantity" min="1" value="$_SESSION['product']['quantity']"></h3>
					<input type="hidden" name="c" value="store">
					<input type="hidden" name="m" value="cart">
					<input type="hidden" name="id" value="<?php echo $id; ?>">
					<button type="submit" class="btn">Purchase</button>
				</form>	
				</div>
				<div class="col-md-6">
					<span><?php echo $decs ?></span><br>
				</div>
			
				
			<?php else: ?>
				<h3>Chưa đăng nhập</h3>
			<?php endif; ?>
			</div>
			</div>
	<div class="col-md-3  heading">
		<?php include ROOT . DS . 'views' . DS . $sidebar_signin; ?>
		<?php include ROOT . DS . 'views' . DS . $sidebar_signup; ?>
	</div>
</div>
</div>