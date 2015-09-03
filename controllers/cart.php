<?php

function cart_delete() {
	if (isPostRequest()) {
        $postData = postData();
        $pid = $postData['pid'];
        
        
        unset($_SESSION['product'][$pid]);

        echo "ok"; exit();
    }
    
    echo 'fail'; exit();
}