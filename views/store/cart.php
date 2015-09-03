<?php 
$i=1;
$sum=0;
?>
<style type="text/css">
	input{
		max-width: 100px;
	}
</style>

<div class="single">
	<div class="container">
			<div class="single-top">
			<div class="col-md-9">
			<table class="table table-bordered">
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
				<form id="formCart">
					<?php foreach ($_SESSION['product'] as $value): ?>
					<tr id='row<?php echo $value['id']; ?>' >
						<td><?php echo $i++; ?></td>

						<td><input style="background-color: #fff; border: 0" type="text" readonly type="text" name="name[<?php echo $value['id'] ?>]" value="<?php echo $value['name']; ?>"></td>

						<td><input style="background-color: #fff; border: 0" type="text" readonly type="text" name="unit[<?php echo $value['id'] ?>]" value="<?php echo $value['price']; ?>"></td>
						<td><input style="background-color: #fff; border: 0" type="text" readonly type="text" name="quantity[<?php echo $value['id'] ?>]" value="<?php echo $value['quantity']; ?>"></td>
						<td>
							<input style="background-color: #fff; border: 0"type="text" readonly id="price<?php echo $value['id']; ?>" name="prices[<?php echo $value['id'] ?>]" value="<?php echo $s=$value['price'] * $value['quantity'];?>"><?php $sum = $sum + $s; ?>
						</td>
						<td>
							<button type="button" class="btn btn-warning btn-delete-cart" data-id="<?php echo $value['id']; ?>">Delete</button>
						</td>
					</tr>
					<?php endforeach ?>
					<tr>
						<td colspan="4">Total: </td>
						<td colspan="2">
							<input style="background-color: #fff; border: 0" readonly id="sum" type="text" value="<?php echo $sum; ?>">
						</td>
					</tr>
				</form>
			</table>
					<a href="index.php?c=store&m=index">
						<button class="btn" style="background-color: #190608; color:#337ab7">Store</button>
					</a>
					<!-- <div class="container"> -->
					  <!-- Trigger the modal with a button -->
					  <button class="btn" data-toggle="modal" data-target="#myModal" style="background-color: #190608; color:#337ab7" id="sumhd">Purchase</button>

					  <!-- Modal -->
					  	<div class="modal fade" id="myModal" role="dialog">
					    <div class="modal-dialog">
					    
					      <!-- Modal content-->
						    <div class="modal-content">
						        <div class="modal-header">
						          <button type="button" class="close" data-dismiss="modal">&times;</button>
						          <h4 class="modal-title">Confirm your bill! Are you sure?</h4>
						        </div>
							        <div class="modal-body">
										<span>Your name: <?php echo $_SESSION['logged']['name']; ?></span><br>
										<span>Your mail: <?php echo $_SESSION['logged']['email']; ?></span><br>
										<span id="total"></span><br>

						        	</div>
						        	<div class="modal-footer">
								        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								        <button type="submit" class="btn btn-primary" id="confirm">Confirm</button>
								    </div>
						    </div>
					    </div>
					  </div>
					  <div data-alerts="alerts" data-titles="{'warning': '<em>Successs!</em>'}" data-ids="myid" data-fade="3000"></div>
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
			$('#sum').val( parseFloat($('#sum').val()) - parseFloat($('#price'+id).val()));

			$.post('/index.php?c=cart&m=delete', {pid: id}, function(data) {
				if (data == 'ok') {
					$('#row' + id).remove();
				} else {
					console.log('Bi loi');
				}
				
			})
		});

		$('#sumhd').click(function(event){
			$('#total').html('Total: $'+$('#sum').val());
		});
	});
</script>

<script type="text/javascript">
$(document).ready(function(){
	$('#confirm').click(function(event){
		var data = $('#formCart').serialize();
		$.ajax({
			url: 'index.php?c=payment&m=cart', 
			type: 'POST',
			dataType: 'text',
			data: data,
			success: function (status) {
				if(status == 'true')
				{
				   alert('ĐI chỗ khác chơi!');
				}
				else
				{
					alert('Lỗi đã xảy ra!');
				}
			}
		});

	});
		
});
	
</script>

  