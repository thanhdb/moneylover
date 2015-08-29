<?php

function index_index() {
    redirect('index.php' . (admin_logged() ? '?c=quanly&m=baiviet' : '?c=auth&m=login'));
}


?>