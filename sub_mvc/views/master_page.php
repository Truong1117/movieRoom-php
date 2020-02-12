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

    <!-- link script chart -->
    <script rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>

    <!-- Latest compiled and minified CSS
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
</head>

<body>

    <div class="loader">
        <img src="<?php echo $data['url'] ?>public/images/loading-spinner.gif" alt="loading...">
    </div>
    <!-- navbar -->
    <div class="container-fluid bg-light">
        <!-- ROW-1 -->
        <div class="row py-4">
            <!--START LOGO-->
            <div class="col-md-4 d-none d-md-block ">
                <div class="lolgo">
                    <a href="<?php echo $data['url'] ?>">
                        <img src="<?php echo $data['url'] ?>public/images/galaxy-logo.jpg">
                    </a>
                </div>
            </div>
            <div class="col-4 d-block d-md-none ">
                <div class="lolgo" style="width: 109px;height: 48px;">
                    <a href="index.html">
                        <img style="width: 109px;height: 48px;" src="img/galaxy-logo-mobile.jpg">
                    </a>
                </div>
            </div>
            <!--END LOGO-->
            <!--SEARCH FORM-->
            <div class="col-md-8 col-8 pl-5 d-md-flex justify-content-between ">
                <div id="search-form d-flex" class="search-form border rounded py-md-2 bg-white px-md-3 d-none d-md-block">
                    <input name="search_text" id="search_text" placeholder="Tìm tên phim, diễn viên..." class="border-0">
                    <button type="submit" class="bg-transparent border-0">
                        <i class="fa fa-search" aria-hidden="true"></i>
                    </button>
                </div>
                <div class="search_result" id="search_result"></div>
                <nav class="nav float-right float-md-none">
                    <a class="nav-link active text-secondary " data-toggle="modal" data-target="#exampleModalCenter">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        Đăng nhập
                    </a>
                    <a class="nav-link text-danger d-none d-md-block" href="#">VN</a>
                    <a class="nav-link text-secondary d-none d-md-block" href="#">EN</a>
                </nav>
            </div>

        </div>
    </div>
    <!--navbar ends-->

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

</html>