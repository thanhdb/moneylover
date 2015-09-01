<?php 
$i=1;
$sum=0;
?>


<div class="single">
	<div class="container">
			<div class="single-top">
			<div class="col-md-9">
			<table class="table table-bordered table-hover">
			<?php if(!isset($_SESSION['product'])): ?>
				<tr>
						<td>Code</td>
						<td>Name</td>
						<td>Unit Price(USD)</td>
						<td>Quantity</td>
						<td>Prices(USD)</td>
						<td>Action</td>
					</tr>
				<tr>
					<td colspan="6">Chưa có món hàng nào</td>
				</tr>
				</table>
					<a href="index.php?c=store&m=index">
						<button class="btn" style="background-color: #190608">Store</button>
					</a>
			<?php else: ?>	
					<tr>
						<td>Code</td>
						<td>Name</td>
						<td>Unit Price(USD)</td>
						<td>Quantity</td>
						<td>Prices(USD)</td>
						<td>Action</td>
					</tr>
				
					<?php foreach ($_SESSION['product'] as $value): ?>
					<tr id='row<?php echo $value['id']; ?>' >
						<td><?php echo $i++; ?></td>
						<td><?php echo $value['name']; ?></td>
						<td><?php echo $value['price']; ?></td>
						<td><?php echo $value['quantity']; ?></td>
						<td><?php echo $s=$value['price'] * $value['quantity']; $sum = $sum + $s; ?></td>
						<td>
							<button type="button" class="btn btn-warning btn-delete-cart" data-id="<?php echo $value['id']; ?>">Delete</button>
						</td>
					</tr>
					<?php endforeach ?>
					<tr>
						<td colspan="4">Total: </td>
						<td colspan="2"><?php echo $sum; ?></td>
					</tr>
			</table>
					<a href="index.php?c=store&m=index">
						<button class="btn" style="background-color: #190608; color:#337ab7">Store</button>
					</a>
					<!-- <div class="container"> -->
					  <!-- Trigger the modal with a button -->
					  <button class="btn" data-toggle="modal" data-target="#myModal" style="background-color: #190608; color:#337ab7">Purchase</button>

					  <!-- Modal -->
					  	<div class="modal fade" id="myModal" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
						    <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title">Success</h4>
						        </div>
						        <div class="modal-body">
						        <h4>Happy! Purchase Successfull. Thanks for your choose!!</h4>
						        </div>
						        <div class="modal-footer">
						        <a href="index.php?c=store&m=index" id="sample">
						          <button type="button" class="btn btn-default">Close</button>
						        </a> 
						        </div>
						    </div>
					    </div>
					  </div>
					</div>
			

			<?php endif; ?>
			</div>

			<div class="col-md-3  heading">
				<?php include ROOT . DS . 'views' . DS . $sidebar_signin; ?>
				<?php include ROOT . DS . 'views' . DS . $sidebar_signup; ?>
			</div>
		</div>
	</div>
<!-- </div> -->

<script type="text/javascript">
	$(document).ready(function() {
		$('.btn-delete-cart').click(function(event) {
			var btn = this;
			var id = $(btn).data('id');

			$.post('/index.php?c=cart&m=delete', {pid: id}, function(data) {
				if (data == 'ok') {
					$('#row' + id).remove();
				} else {
					console.log('Bi loi');
				}
				
			})
		});
	});
</script>