<!DOCTYPE html>
<html>
<head>
    <title>Coffee Break a Blog Category Flat Bootstarp responsive Website Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="./styles/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="./styles/css/style.css" rel='stylesheet' type='text/css' />
    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
    <script src="./styles/js/jquery.min.js"></script>
    <script src="./styles/js/bootstrap.js"></script>
    
    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="./styles/js/move-top.js"></script>
    <script type="text/javascript" src="./styles/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script>
</head>
</head>
<body>
   
    <div class="header-top">
        <div class="container">
            <div class="head-main">
                <a href="index.php"><img src="./styles/images/logo-1.png" alt="" /></a>
            </div>
        </div>
    </div>
    <!--header-top-end-->
    <!--start-header-->
    <div class="header">
        <div class="container">
            <div class="head">
            <div class="navigation">
                 <span class="menu"></span> 
                    <ul class="navig">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Gallery</a></li>
                        <li><a href="#">Typo</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="index.php?c=store&m=index">Store</a></li>
                    </ul>
            </div>
            <div class="header-right">
                <div class="search-bar">
                    <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                    <input type="submit" value="">
                </div>
                <ul>
                    <li><a href="#"><span class="fb"> </span></a></li>
                    <li><a href="#"><span class="twit"> </span></a></li>
                    <li><a href="#"><span class="pin"> </span></a></li>
                    <li><a href="#"><span class="rss"> </span></a></li>
                    <li><a href="#"><span class="drbl"> </span></a></li>
                </ul>
            </div>
                <div class="clearfix"></div>
            </div>
            </div>
        </div> 
        <!-- script-for-menu -->
        <script>
            $("span.menu").click(function(){
                $(" ul.navig").slideToggle("slow" , function(){
                });
            });
        </script>
        <!-- script-for-menu -->
        <!--banner-starts-->
        <div class="banner">
            <div class="container">
                <div class="banner-top">
                    <div class="banner-text">
                        <h2>Aliquam erat</h2>
                        <h1>Suspendisse potenti</h1>
                        <div class="banner-btn">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--banner-end-->
    <?php include ROOT . DS . 'views' . DS . $template_file; ?>
    <!--slide-starts-->
    <div class="slide">
        <div class="container">
            <div class="fle-xsel">
            <ul id="flexiselDemo3">
                <li>
                    <a href="#">
                        <div class="banner-1">
                            <img src="./styles/images/s-1.jpg" class="img-responsive" alt="">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="banner-1">
                            <img src="./styles/images/s-2.jpg" class="img-responsive" alt="">
                        </div>
                    </a>
                </li>           
                <li>
                    <a href="#">
                        <div class="banner-1">
                            <img src="./styles/images/s-3.jpg" class="img-responsive" alt="">
                        </div>
                    </a>
                </li>       
                <li>
                    <a href="#">
                        <div class="banner-1">
                            <img src="./styles/images/s-4.jpg" class="img-responsive" alt="">
                        </div>
                    </a>
                </li>   
                <li>
                    <a href="#">
                        <div class="banner-1">
                            <img src="./styles/images/s-5.jpg" class="img-responsive" alt="">
                        </div>
                    </a>
                </li>   
                <li>
                    <a href="#">
                        <div class="banner-1">
                            <img src="./styles/images/s-6.jpg" class="img-responsive" alt="">
                        </div>
                    </a>
                </li>               
            </ul>
                            
                             <script type="text/javascript">
                                $(window).load(function() {
                                    
                                    $("#flexiselDemo3").flexisel({
                                        visibleItems: 5,
                                        animationSpeed: 1000,
                                        autoPlay: true,
                                        autoPlaySpeed: 3000,            
                                        pauseOnHover: true,
                                        enableResponsiveBreakpoints: true,
                                        responsiveBreakpoints: { 
                                            portrait: { 
                                                changePoint:480,
                                                visibleItems: 2
                                            }, 
                                            landscape: { 
                                                changePoint:640,
                                                visibleItems: 3
                                            },
                                            tablet: { 
                                                changePoint:768,
                                                visibleItems: 3
                                            }
                                        }
                                    });
                                    
                                });
                                </script>
                                <script type="text/javascript" src="./styles/js/jquery.flexisel.js"></script>
                    <div class="clearfix"> </div>
            </div>
        </div>
    </div>  
    <!--slide-end-->
    <!--footer-starts-->
    <div class="footer">
        <div class="container">
            <div class="footer-text">
                <p>© 2015 Coffee Break. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
            </div>
        </div>
    </div>
    <!--footer-end-->
</body>
</html>