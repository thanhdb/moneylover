<?php
    
function auth_login() {
    $data = array();
    
    if (isPostRequest()) {
        $postData = postData();
        
        if (model('user')->authLogin($postData)) 
        {
        
            redirect('index.php');
            
        } 
        else 
        {
            $data['error'] = 'Login failed ! Please try again !';
        }
    }   
    $data['template_file'] = 'index/index.php';
    $data['sidebar_signin'] = 'sidebar/signin.php';
    $data['sidebar_signup'] = 'sidebar/signup.php';
    render('layout.php', $data);
}

function auth_register() {
    $data = array();
    
    if (isPostRequest()) {
        $postData = postData();
        if (model('user')->authRegister($postData)) 
        {
            redirect('index.php');
        } 
        else 
        {
            $data['error'] = 'Register failed ! Email exists ! Please try again !';
            $data['postData'] = $postData;
        }
    }
    $data['template_file'] = 'index/index.php';

    render('layout.php', $data);

}

function auth_logout() {
    model('user')->authLogout();
    redirect('index.php');
}