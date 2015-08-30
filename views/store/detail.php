<div class="single">
	<div class="container">
			<div class="single-top">
			<div class="col-md-9">
			<div class="col-md-6">
			<img src="<?php echo $detail['image'] ?>" alt=""><br>
			<h3><?php echo $detail['name'] ?></h3>
			<strong><?php echo "$".$detail['price']." / pound"; ?></strong><br><br>
			<button type="button" class="btn">Purchase</button>
			</div>
			<div class="col-md-6">
			<span><?php echo $detail['decsription'] ?></span><br>
			</div>
			<!-- <div class="about-tre">
						<div class="a-1">
						<!-- <ul class="home"> 
						<?php foreach ($product as $key => $value) { ?>-->
							<!-- <li> -->
								<!-- <a href="#" title=""> -->
								<!-- <div class="col-md-6">
									<img src="<?php echo $detail['image'] ?>">
									<h3><?php echo $detail['name']; ?></h3>
									<strong><?php echo "$".$detail['price']." / pound"; ?></strong>
								</div>
								<div class="col-md-6">
									<span><?php echo $detail['decsription'] ?></span>
									<button type="button" class="btn">Purchase</button>
								</div> -->
								<!-- </a> -->
							<!-- </li> 
						<?php } ?>-->
						<!-- </ul> -->
						</div>
			</div>
		<!-- </div>
	</div> -->
	<div class="col-md-3  heading">
    			<?php include ROOT . DS . 'views' . DS . $sidebar_signin; ?>
    			<?php include ROOT . DS . 'views' . DS . $sidebar_signup; ?>
    		</div>
</div>
</div>