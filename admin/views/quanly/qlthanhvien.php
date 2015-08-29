		<div class="container">
				<div class="col-md-9">
						<table class="table table-bordered table-hover">
								<tr>
									<td>ID</td>
									<td>Email</td>
									<td>Password</td>
									<td>Name</td>
									<td>Control</td>
								</tr>
							<?php foreach ($user as $value): ?>
								<tr>
									<td><?php echo $value['id']; ?></td>
									<td><?php echo $value['email']; ?></td>
									<td><?php echo $value['password']; ?></td>
									<td><?php echo $value['name']; ?></td>
									<td><a href="index.php?c=quanly&m=deletemember">
									<button name="delete" class="btn btn-warning">Delete</button></a></td>
								</tr>
							<?php endforeach ?>
								
						</table>
					</div>

					<div class="col-md-3">	
	   					 <?php include FC_DIR . DS . 'views' . DS . $sidebar ?>
					</div>
		</div>	
	