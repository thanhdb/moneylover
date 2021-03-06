<?php 
	function quanly_baiviet() 
	{
	    $data = array();
	    $data['content'] = model('content')->getAll();
	    $data['template_file'] = 'quanly/qlbaiviet.php';
	    $data['sidebar'] = 'sidebar/sidebar.php';
	    render('layout.php', $data);
	}

	function quanly_thanhvien() 
	{
	    $data = array();
	    $data['user'] = model('user')->getAll();
	    $data['template_file'] = 'quanly/qlthanhvien.php';
	    $data['sidebar'] = 'sidebar/sidebar.php';
	    render('layout.php', $data);
	}

	function quanly_comment()
	{
		$data = array();
		$data['comment']= model('comment')->getDone();

		$data['template_file'] = 'quanly/qlcomment.php';
	    $data['sidebar'] = 'sidebar/sidebar.php';
		render('layout.php',$data);
	}

	function quanly_sanpham()
	{
		  $data = array();
	    $data['product'] = model('product')->getAll();
	    $data['template_file'] = 'quanly/qlsanpham.php';
	    $data['sidebar'] = 'sidebar/sidebar.php';
	    render('layout.php', $data);
	}

	function quanly_addproduct()
	{
	    $data = array();
	    if(isPostRequest())
	    {
			$postData = postData();
			model('product')->insert($postData);
			redirect('index.php?c=quanly&m=sanpham');
		}
		$data['template_file'] = 'article/addproduct.php';
		$data['sidebar'] = 'sidebar/sidebar.php';
		render('layout.php', $data);
	}

	function quanly_addpost()
	{
		$data = array();

		if(isPostRequest())
		{
			$postData = postData();
			model('content')->insert($postData);
			redirect('index.php?c=quanly&m=baiviet');
		}
		$data['template_file'] = 'article/addpost.php';
		$data['sidebar'] = 'sidebar/sidebar.php';
		render('layout.php', $data);
	}

	function quanly_editproduct()
	{
		$data = array();

		if(isPostRequest())
		{
			$postData = postData();
			model('product')->update($postData, $_GET['id']);
			redirect('index.php?c=quanly&m=sanpham');
		}
		$data['product'] = model('product')->getOneBy($_GET['id'],'id');

		$data['template_file'] = 'article/editproduct.php';
		$data['sidebar'] = 'sidebar/sidebar.php';
		render('layout.php', $data);
	}

	function quanly_editpost()
	{
		$data = array();

		if(isPostRequest())
		{
			$postData = postData();
			model('content')->update($postData, $_GET['id']);
			redirect('index.php?c=quanly&m=baiviet');
		}
		$data['content'] = model('content')->getOneBy($_GET['id'],'id');

		$data['template_file'] = 'article/editpost.php';
		$data['sidebar'] = 'sidebar/sidebar.php';
		render('layout.php', $data);
	}

	function quanly_deletemember()
	{
		model('user')->delete($_GET['id']);
		redirect('index.php?c=quanly&m=thanhvien');
	}

	function quanly_deletepost()
	{
		model('content')->delete($_GET['id']);
		redirect('index.php?c=quanly&m=baiviet');
	}

	function quanly_deleteproduct()
	{
		model('product')->delete($_GET['id']);
		redirect('index.php?c=quanly&m=sanpham');
	}

	function quanly_deletecomment()
	{
		model('comment')->delete($_GET['id']);
		redirect('index.php?c=quanly&m=comment');
	}

	

 ?>