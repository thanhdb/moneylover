<div class="comments heading">
<h3>Comments</h3>
<?php foreach ($comment as $value): ?>
  	<div class="media">
      <div class="media-left">
        <a href="#">
        	<img src="./styles/images/si.png" alt="">
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading"><?php echo $value['name']; ?></h4>
	        <p><?php echo $value['comment']; ?></p>
      </div>
    </div>
<?php endforeach ?>
</div>
