<?php
    
function auth_login() {
    $data = array();
    
    if (isPostRequest()) {
        $postData = postData();
       
        if (model('admin')->authLoginAdmin($postData)) 
        {
        
            redirect('index.php');
            
        } 
        else 
        {
            $data['error'] = 'Login failed ! Please try again !';
        }
    }   
    $data['template_file'] = 'index/index.php';
    render('layout.php', $data);
}

function auth_logout() {
    model('admin')->authLogoutAdmin();
    redirect('index.php');
}