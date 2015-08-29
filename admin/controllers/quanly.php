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

	function quanly_add()
	{
	    $data = array();
		$data['template_file'] = 'article/add.php';
		$data['sidebar'] = 'sidebar/sidebar.php';
		render('layout.php', $data);
	}

	function quanly_addpost()
	{
		// $data = array();

		if(isPostRequest())
		{
			$postData = postData();
			model('content')->insert($postData);
			redirect('index.php?c=quanly&m=baiviet');
		}
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
 ?>