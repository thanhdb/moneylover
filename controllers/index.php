<?php

function index_index() 
{
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

	$data['comment']['message'] = model('comment')->getAll();
	$data['user_id'] = model('comment')->getUsersId($_GET['id']);

	foreach ($data['user_id'] as $id) {
		$data['comment']['users_comment'][] = model('user')->getOneBy($id['user_id'], 'id');
	}
	$data['details'] = model('content')->getOneBy($_GET['id'],'id');
	$data['template_file'] = 'article/index.php';
	$data['sidebar_signin'] = 'sidebar/signin.php';
	$data['sidebar_signup'] = 'sidebar/signup.php';

	render('layout.php', $data);
}



