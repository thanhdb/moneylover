		<div class="container">
				<div class="col-md-9">
						<a href="index.php?c=quanly&m=addproduct" title="">
						<button name="add" class="btn btn-primary">Thêm sản phẩm</button></a>
						<br><br>
						<table class="table table-bordered table-hover">
								<tr>
									<td>ID</td>
									<td>Name</td>
									<td>Description</td>
									<td>Price</td>
									<td>Unit</td>
									<td>Action</td>
								</tr>
							<?php foreach ($product as $value): ?>
								<tr>
									<td><?php echo $value['id']; ?></td>
									<td><?php echo $value['name']; ?></td>
									<td><?php echo $value['description']; ?></td>
									<td><?php echo $value['price']; ?></td>
									<td><?php echo $value['unit']; ?></td>
									<td style="width: 20%">
									<a href="index.php?c=quanly&m=deleteproduct&id=<?php echo $value['id']; ?>">
									<button type="submit" name="delete" class="btn btn-warning">Delete</button></a>
									<a href="index.php?c=quanly&m=editproduct&id=<?php echo $value['id']; ?>">
									<button type="submit" name="edit" class="btn btn-primary">Edit</button></a>
									</td>
								</tr>
							<?php endforeach ?>
								
						</table>
					</div>

					<div class="col-md-3">	
	   					 <?php include ROOT . DS . 'views' . DS . $sidebar ?>
					</div>
		</div>	
	