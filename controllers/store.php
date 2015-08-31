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

function store_cart()
{
	$data = array();
	$_SESSION['product'][$_POST['id']] = model('product')->getOneBy($_POST['id']);
	$_SESSION['product'][$_POST['id']]['quantity'] = $_POST['quantity'];

	redirect ('index.php?c=store&m=index');
	
}

function store_total()
{
	$data = array();
	$data['template_file'] = 'store/cart.php';
	$data['sidebar_signin'] = 'sidebar/signin.php';
	$data['sidebar_signup'] = 'sidebar/signup.php';
	render('layout.php', $data);
}


?>