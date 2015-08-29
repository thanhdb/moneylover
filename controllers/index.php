<?php

function index_index() {
    $data = array();
	$data['content'] = model('content')->all();
	$data['template_file'] = 'index/index.php';
	$data['sidebar_signin'] = 'sidebar/signin.php';
	$data['sidebar_signup'] = 'sidebar/signup.php';

	render('layout.php', $data);
}

function index_showpost()
{
	$data = array();
	$data['template_file'] = 'article/index.php';
	$data['sidebar_signin'] = 'sidebar/signin.php';
	$data['sidebar_signup'] = 'sidebar/signup.php';

	render('layout.php', $data);
}

