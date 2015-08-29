<!DOCTYPE html>
<html>
<head>
    <title>Coffee Break Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Coffee Break Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href= "http://blogdemo.cc/styles/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="../styles/css/style.css" rel='stylesheet' type='text/css' />
    <script src="../styles/js/jquery.min.js"></script>
    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="../styles/js/move-top.js"></script>
    <script type="text/javascript" src="../styles/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
</head>
<body>
<!-- <p>bbbbbbbb</p> -->
 <div class="header-top">
        <div class="container">
            <div class="head-main">
                <a href="index.php"><img src="../styles/images/logo-1.png" alt="" /></a>
            </div>
        </div>
    </div>
    <div class="container">
    <?php include FC_DIR . DS . 'views' . DS . $template_file; ?>
    </div>
</body>