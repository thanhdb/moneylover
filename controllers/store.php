<?php 

function store_index()
{
	$data = array();
	$data['product'] = model('product')->all();
	$data['template_file'] = 'store/index.php';
	$data['sidebar_signin'] = 'sidebar/signin.php';
	$data['sidebar_signup'] = 'sidebar/signup.php';

	render('layout.php',$data);
}

function store_detail()
{
	$data = array();
	$data['detail']  = model('product')->getOneBy($_GET['id']);
	$data['template_file'] = 'store/detail.php';
	$data['sidebar_signin'] = 'sidebar/signin.php';
	$data['sidebar_signup'] = 'sidebar/signup.php';
	render('layout.php',$data);
}

?>