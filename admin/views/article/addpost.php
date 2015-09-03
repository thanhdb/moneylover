<!DOCTYPE html>
<html>
<head>
    <title>Coffee Break Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="../../../styles/css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="../../../styles/css/style.css" rel='stylesheet' type='text/css' />
    <script src="../../../styles/js/jquery.min.js"></script>
    <script type="text/javascript" src="../../../includes/ckeditor/ckeditor.js"></script>
    <!---- start-smoth-scrolling---->
    <script type="text/javascript" src="../../../styles/js/move-top.js"></script>
    <script type="text/javascript" src="../../../styles/js/easing.js"></script>
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
<div class="container">
    <div class="col-md-9">
        <!-- <div class="container" style="width: 50%"> -->
            <form name="addpost" action="" method="POST" role="form">
                <legend>Thêm bài viết</legend>
            
                <div class="form-group">
                    <label for="">Title</label>
                    <input name="title" type="text" class="form-control" id="">
                    <label for="">Content</label>
                    <textarea name="content" id="content" class="form-control" rows="3"></textarea>
                    <label for="">Description</label>
                    <input name="description" type="text" class="form-control" id="">
                    <label for="">URL image</label>
                    <input name="images" type="text" class="form-control" id="">
                    <label>Time</label>
                    <input type="date" name="write_time" class="form-control" style="max-width: 30%">
                </div>
                
                    <script>
                        // Replace the <textarea id="editor1"> with a CKEditor
                        // instance, using default configuration.
                        CKEDITOR.replace( 'content',{
                            toolbarCanCollapse: true,
                            filebrowserImageUploadUrl: 'http://blogdemo.cc/includes/ckeditor/plugins/imgpost.php'
                        } );
                    </script>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>

        <div class="col-md-3">  
            <?php include ROOT . DS . 'views' . DS . $sidebar ?>
        </div>
    </div>
<!-- </div> -->
</body>