		<div class="container">
				<div class="col-md-9">
						<a href="index.php?c=quanly&m=addpost" title="">
						<button name="add" class="btn btn-primary">Thêm bài viết</button></a>
						<br><br>
						<table class="table table-bordered table-hover">
								<tr>
									<td>ID</td>
									<td>Title</td>
									<td>Decription</td>
									<td>Date Time</td>
									<td>Control</td>
								</tr>
							<?php foreach ($content as $value): ?>
								<tr>
									<td><?php echo $value['id']; ?></td>
									<td><?php echo $value['title']; ?></td>
									<td><?php echo $value['description']; ?></td>
									<td style="width: 15%"><?php echo $value['write_time']; ?></td>
									<td style="width: 20%">
									<a href="index.php?c=quanly&m=deletepost&id=<?php echo $value['id']; ?>" title="">
									<button type="submit" name="delete" class="btn btn-warning">Delete</button></a>
									<button type="submit" name="edit" class="btn btn-primary">Edit</button></td>
								</tr>
							<?php endforeach ?>
								
						</table>
					</div>

					<div class="col-md-3">	
	   					 <?php include ROOT . DS . 'views' . DS . $sidebar ?>
					</div>
		</div>	
	