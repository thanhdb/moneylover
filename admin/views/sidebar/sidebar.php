
<ul class="nav nav-tabs nav-stacked">
    <?php if ($logged = admin_logged()): ?>
    <li><a href="#">Welcome <strong><?php echo $logged['name']; ?></strong></a></li>
    <li><a href="index.php?c=quanly&m=baiviet" title="">Quản lý bài viết</a></li>
    <li><a href="index.php?c=quanly&m=thanhvien" title="">Quản lý thành viên</a></li>
    <li><a href="index.php?c=auth&m=logout">Logout</a></li>
    <?php else: ?>
    <li><a href="index.php?c=auth&m=login">Login</a></li>
    <?php endif; ?>
</ul>
