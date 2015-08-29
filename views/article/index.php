	<div class="single">
		<div class="container">
				<div class="single-top">
				<div class="col-md-8 about-left">
						<a href="#"><img class="img-responsive" src="./styles/images/single-1.jpg" alt=" "></a>
					<div class=" single-grid">
						<h4><!-- insert title here --></h4>				
							<ul class="blog-ic">
								<li><a href="#"><span> <i  class="glyphicon glyphicon-user"> </i>Super user</span> </a> </li>
		  						 <li><span><i class="glyphicon glyphicon-time"> </i>June 14, 2013</span></li>		  						 	
		  						 <li><span><i class="glyphicon glyphicon-eye-open"> </i>Hits:145</span></li>
		  					</ul>		  						
						<!-- insert content here -->
					</div>
					<div class="comments heading">
						<h3>Comments</h3>
						<div class="media">
					      	<div class="media-body">
						        <h4 class="media-heading">	Richard Spark</h4>
						        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs .  </p>
					      	</div>
					      <div class="media-right">
					        <a href="#">
								<img src="./styles/images/si.png" alt=""> </a>
					      </div>
					 </div>
					  <div class="media">
					      <div class="media-left">
					        <a href="#">
					        	<img src="./styles/images/si.png" alt="">
					        </a>
					      </div>
					      <div class="media-body">
					        <h4 class="media-heading">Joseph Goh</h4>
					        <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs .  </p>
					      </div>
					    </div>
    				</div>
    				<div class="comment-bottom heading">
    					<h3>Your Comment</h3>
    					<form>
						<?php if (isLogged()==false): ?>
					        <h5 class="media-heading">*You must login to comment</h5>
							<textarea disabled cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
							<input  type="submit" value="Send" disabled= "disabled">
						<?php else: ?>
							<textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
							<input type="submit" value="Send">
						<?php endif; ?>

					</form>
    				</div>
				</div>	
				<div class="col-md-4 about-right heading">
    			
    			<?php include ROOT . DS . 'views' . DS . $sidebar_signin; ?>
    			<?php include ROOT . DS . 'views' . DS . $sidebar_signup; ?>
    			</div>
			</div>					
	</div>
	</div>
	<!--end-single