
	<div class="single">
		<div class="container">
				<div class="single-top">
				<div class="col-md-8 about-left">
					<div class=" single-grid">
						<h4><?php echo $details['title']; ?></h4>				
							<ul class="blog-ic">
								<li><a href="#"><span> <i  class="glyphicon glyphicon-user"> </i>Super user</span> </a> </li>
		  						 <li><span><i class="glyphicon glyphicon-time"> </i><?php echo $details['write_time']; ?></span></li>		  						 	
		  						 <li><span><i class="glyphicon glyphicon-eye-open"> </i>Hits:145</span></li>
		  					</ul>		  						
							<span><?php echo $details['content']; ?></span>
					</div>
					
    					<h3>Your Comment</h3>
    					<div id="cmt" >
    						<?php 
    						foreach ($comment['message'] as $key => $value) {
    							echo "<img src='styles/images/default_avatar.gif' style='margin-right: 10px; float:left'>";
    							echo $comment['users_comment'][$key]['name']."<br>";
    							echo $value['comment']."<br><br>";
    						}
    						 ?>
    					</div>

    					<form id="addCommentForm">
						<?php if (isLogged()==false): ?>
					        <h5 class="media-heading">*You must login to comment</h5>
							<textarea disabled cols="77" rows="6" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
							<input  type="submit" value="Send" disabled= "disabled">
						<?php else: ?>
							<textarea name="msgCmt" id="body" cols="77" rows="6" value="" onfocus="this.value='';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
							<a href="" title=""><input type="submit" name="sendCmt" id="send" value="Send"></a>
							<input type="hidden" name="id" value="<?php echo $details['id']; ?>">
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
	<!--end-single-->
<script type="text/javascript">
	$(document).ready(function(){
	var working = false;
	
	/* Listening for the submit event of the form: */
	$('#addCommentForm').submit(function(e){

 		e.preventDefault();
		if(working) return false;
		
		working = true;
		$('#send').val('Sending..');
		$('span.error').remove();
		
		/* Sending the form fileds to submit.php: */
		$.post('index.php?c=comment&m=post',$(this).serialize(),function(msg){

			working = false;
			$('#send').val('Send');
			if(msg == 'true'){

				$('#cmt').append("<img src='styles/images/default_avatar.gif' style='margin-right: 10px; float:left'>"+"<?php echo $_SESSION['logged']['name']; ?><br>"+$('#body').val()+'<br>');
				$('#body').val('');
			}
			else {

				$.each(msg.errors,function(k,v){
					$('label[for='+k+']').append('<span class="error">'+v+'</span>');
				});
			}
		});

	});
	
});
</script>