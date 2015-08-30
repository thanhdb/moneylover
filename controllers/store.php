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
 ?>