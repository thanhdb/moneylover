<?php 
	$i=1;
 ?>

		<div class="container">
				<div class="col-md-9">
						<table class="table table-bordered table-hover">
								<tr>
									<td>ID</td>
									<td>Title</td>
									<td>Comment</td>
									<td>Username</td>
									<td>Control</td>
								</tr>
							<?php foreach ($comment as $value): ?>
								<tr>
									<td><?php echo $i; ?></td>
									<td><?php echo $value['title']; ?></td>
									<td><?php echo $value['comment']; ?></td>
									<td><?php echo $value['name']; ?></td>
									<td><a href="index.php?c=quanly&m=deletecomment&id=<?php echo $value['id']; ?>">
									<button name="delete" class="btn btn-warning">Delete</button></a></td>
									<?php $i++; ?>
								</tr>
							<?php endforeach ?>
								
						</table>
					</div>

					<div class="col-md-3">	
	   					 <?php include ROOT . DS . 'views' . DS . $sidebar ?>
					</div>
		</div>	
	