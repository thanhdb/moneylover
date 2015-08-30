<div class="single">
	<div class="container">
			<div class="single-top">
			<div class="col-md-9">
			<div class="about-tre">
						<div class="a-1">
						<!-- <div class="col-md-6 abt-left"> -->
						<ul class="home">
						<?php foreach ($product as $key => $value) { ?>
							<li>
								<a href="#" title="">
									<img src="<?php echo $value['image'] ?>" alt="" width="240px" height="200px">
									<h3><?php echo $value['name']; ?></h3>
									<strong><?php echo "$".$value['price']." / pound"; ?></strong>
									<button type="button" class="btn">Mua ngay</button>
								</a>
							</li>
						<?php } ?>
							<!-- <li>
								<a href="#" title="">
									<img src="" alt="" width="240px" height="240px">
								</a>
							</li>
							<li>
								<a href="#" title="">
									<img src="" alt="" width="240px" height="240px">
								</a>
							</li>
							<li>
								<a href="#" title="">
									<img src="" alt="" width="240px" height="240px">
								</a>
							</li> -->
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