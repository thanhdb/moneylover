<div class="single">
	<div class="container">
			<div class="single-top">
			<div class="col-md-9">
			<div class="about-tre">
						<div class="a-1">
						<ul class="home">
						<?php foreach ($product as $key => $value) { ?>
							<li>
								<a href="index.php?c=store&m=detail&id=<?php echo $value['id']; ?>" title="">
									<img src="<?php echo $value['image'] ?>" alt="" width="240px" height="200px">
									<h3><?php echo $value['name']; ?></h3>
									<strong><?php echo "$".$value['price']." / pound"; ?></strong>
									<button type="button" class="btn">Purchase</button>
								</a>
							</li>
						<?php } ?>
						</ul>
						</div>
			</div>
		</div>
	</div>
	<div class="col-md-3  heading">
    			
    			<?php include ROOT . DS . 'views' . DS . $sidebar_signin; ?>
    			<?php include ROOT . DS . 'views' . DS . $sidebar_signup; ?>
    		</div>
</div>
</div>
<!-- </div> -->