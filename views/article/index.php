	<div class="single">
		<div class="container">
				<div class="single-top">
				<div class="col-md-8 about-left">
					<div class=" single-grid">
						<h4><!-- insert title here --></h4>				
							<ul class="blog-ic">
								<li><a href="#"><span> <i  class="glyphicon glyphicon-user"> </i>Super user</span> </a> </li>
		  						 <li><span><i class="glyphicon glyphicon-time"> </i><?php echo $details['write_time']; ?></span></li>		  						 	
		  						 <li><span><i class="glyphicon glyphicon-eye-open"> </i>Hits:145</span></li>
		  					</ul>		  						
						<!-- insert content here -->
						<h3><?php echo $details['title']; ?></h3>
						<span><?php echo $details['content']; ?></span>
					</div>
					
    					<h3>Your Comment</h3>
    					<form>
						<?php if (isLogged()==false): ?>
					        <h5 class="media-heading">*You must login to comment</h5>
							<textarea disabled cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
							<input  type="submit" value="Send" disabled= "disabled">
						<?php else: ?>
							<textarea cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
							<a href="index.php?m=comment&c=post" title=""><input type="submit" value="Send"></a>
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
	<!--end-single