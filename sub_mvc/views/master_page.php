<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://use.fontawesome.com/96ce7563af.js"></script>
    <link rel="stylesheet" href="<?php echo $data['url'] ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $data['url'] ?>public/css/font-roboto.css">
    <link rel="stylesheet" href="<?php echo $data['url'] ?>public/css/muave.css">
    <link rel="stylesheet" href="<?php echo $data['url'] ?>public/css/style.css">
    <link rel="stylesheet" href="<?php echo $data['url'] ?>public/css/log_style.css">

    <!-- link script chart -->
    <script rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>

    <!-- Latest compiled and minified CSS
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
</head>

<body>

    <div class="loader">
        <img src="<?php echo $data['url'] ?>public/images/loading-spinner.gif" alt="loading...">
    </div>

    <!-- Navbar header  -->
    <?php require_once "./sub_mvc/views/blocks/headerMenu.php" ?>
    <!-- Navbar header ends  -->


    <!-- menu list  -->
    <?php require_once "./sub_mvc/views/blocks/menu.php" ?>
    <!-- menu list ends  -->
   
    <!-- body content -->
    <?php require_once "./sub_mvc/views/pages/" . $data['page'] . ".php"    ?>
    <!-- body content ends -->

    <!-- footer -->
    <footer class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-6 ">
                    <div class="footer-widget">
                        <h4 class="title-widget">Giới thiệu</h4>
                        <ul class="p-0">
                            <li><a>về chúng tôi</a></li>
                            <li><a>thỏa thuận sử dụng</a></li>
                            <li><a>quy chế hoạt động</a></li>
                            <li><a>chính sách bảo mật</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="footer-widget">
                        <h4 class="title-widget">Góc điện ảnh</h4>
                        <ul class="p-0">
                            <li><a>Thể loại phim</a></li>
                            <li><a>bình luận phim</a></li>
                            <li><a>blog điện ảnh</a></li>
                            <li><a>phim hay tháng</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="footer-widget">
                        <h4 class="title-widget">hỗ trợ</h4>
                        <ul class="p-0">
                            <li><a>góp ý</a></li>
                            <li><a>sale & services</a></li>
                            <li><a>rạp / giá vé</a></li>
                            <li><a>tuyển dụng</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="footer-widget">
                        <h4 class="title-widget">Giới thiệu</h4>
                        <div class="title-widget-i">
                            <i class="fa fa-facebook-official" aria-hidden="true"></i>
                            <i class="fa fa-youtube-square" aria-hidden="true"></i>
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </div>
                        <h4 class="title-widget">download app</h4>
                        <div class="title-widget-i">
                            <i class="fa fa-apple" aria-hidden="true"></i>
                            <i class="fa fa-google" aria-hidden="true"></i>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
</body>


<script src="<?php echo $data['url'] ?>public/css/jquery-3.3.1.slim.min.js"></script>
<script src="<?php echo $data['url'] ?>public/css/popper.min.js"></script>
<script src="<?php echo $data['url'] ?>public/css/bootstrap.min.js"></script>
<script src="<?php echo $data['url'] ?>public/js/ajax.js"></script>
<script src="<?php echo $data['url'] ?>public/js/search_ajax.js"></script>
<script src="<?php echo $data['url'] ?>public/js/buyticket_ajax.js"></script>
<script src="<?php echo $data['url'] ?>public/js/jautocalc.js"></script>
<script src="<?php echo $data['url'] ?>public/js/log.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

</html>