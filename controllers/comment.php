<?php 
	function comment_post()
	{
		$data = array();
		$postData = postData();

		model('comment')->addToComment($postData['id'], $postData['msgCmt']);
		
		echo 'true';
	}
 ?>