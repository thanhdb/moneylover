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

	function quanly_deletemember()
	{
		
	}
 ?>