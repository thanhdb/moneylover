<?php 
$i=1;
?>


<div class="single">
	<div class="container">
			<div class="single-top">
			<div class="col-md-9">
			<table class="table table-bordered table-hover">
					<tr>
						<td>Code</td>
						<td>Name</td>
						<td>Unit Price(USD)</td>
						<td>Quantity</td>
						<td>Prices(USD)</td>
						<td>Action</td>
					</tr>
					<?php foreach ($_SESSION['product'] as $value): ?>
					<tr>
						<td><?php echo $i++; ?></td>
						<td><?php echo $value['name']; ?></td>
						<td><?php echo $value['price']; ?></td>
						<td><?php echo $value['quantity']; ?></td>
						<td><?php echo $value['price'] * $value['quantity']; ?></td>
						<td>
							<button type="button" class="btn btn-warning">Delete</button>
						</td>
					</tr>
					<?php endforeach ?>
					<tr>
						<td colspan="6">Total: </td>
					</tr>
			</table>
			<!-- <a href="index.php?c=store&m=index">
			<button type="button" class="btn btn-primary">Continue</button>
			</a> -->
			<button type="button" class="btn btn-primary">Purchase</button>
			</div>

			<div class="col-md-3  heading">
				<?php include ROOT . DS . 'views' . DS . $sidebar_signin; ?>
				<?php include ROOT . DS . 'views' . DS . $sidebar_signup; ?>
			</div>
		</div>
	</div>
</div>