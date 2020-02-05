<div class="container-fluid bg-dark">
    <nav class="d-none d-md-block">
        <ul class=" d-flex nav justify-content-between px-5 py-1">
            <li><a class="nav-link active" href="<?php echo $data['url'] ?>Lichchieu">MUA VÉ</a></li>
            <!-- LIST MOVIE-->
            <li class="sub-movie">
                <a class="nav-link botarrow" href="#">PHIM</a>
                <!--START SUB_LIST MOVIE HOVER-->
                <div class="sub-menu-movie bg-dark py-4 px-3">
                    <div class="visible-lg-block">
                        <!-- START ROW 1-->
                        <div class="row mx-0 submenu-title">
                            <div class="col-12">
                                <h3>
                                    <a href="<?php echo $data['url'] ?>Phim/Phimdangchieu">Phim đang chiếu</a>
                                </h3>
                                <div class="divider">

                                </div>
                            </div>
                        </div>
                        <!-- END ROW 1-->
                        <!-- START ROW 2-->
                        <div class="row mx-0 movies-group-header">
                            <div class="col-3">
                                <div class="card bg-transparent border-0">
                                    <img src="img/lion-king.jpg" class="card-img-top " alt="...">
                                    <div class="card-body text-uppercase p-0 pt-2">
                                        <p class="text-white">Lion King</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card bg-transparent border-0">
                                    <img src="img/spider-man.jpg" class="card-img-top" alt="...">
                                    <div class="card-body text-uppercase p-0 pt-2">
                                        <p class=" text-white mb-0">Spider man</p>
                                        <p class="text-secondary">Người nhện xa nhà</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card bg-transparent border-0">
                                    <img src="img/sadako.jpg" class="card-img-top" alt="...">
                                    <div class="card-body text-uppercase p-0 pt-2">
                                        <p class="text-white mb-0">Sadako</p>
                                        <p class="text-secondary">vòng luân hồi: Sadako</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card bg-transparent border-0">
                                    <img src="img/step-up-6.jpg" class="card-img-top" alt="...">
                                    <div class="card-body text-uppercase p-0 pt-2">
                                        <p class="text-white mb-0 ">Step up china</p>
                                        <p class="text-secondary">step up 6: Vũ điệu đường phố</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END ROW 2-->
                        <!-- START ROW 3-->
                        <div class="row mx-0 submenu-title">
                            <div class="col-12">
                                <h3>
                                    <a href="<?php echo $data['url'] ?>Phim/Phimsapchieu">Phim sắp chiếu</a>
                                    <div class="divider"></div>
                                </h3>
                            </div>
                        </div>
                        <!-- END ROW 3-->
                        <!-- START ROW 4 ITEM MOVIE COMING SOON-->
                        <div class="row mx-0 movies-group-header">
                            <div class="col-3">
                                <div class="card bg-transparent border-0 ">
                                    <img src="img/Fast&Furious.jpg" class="card-img-top" alt="...">

                                </div>

                                <div class="card-body text-uppercase p-0 pt-2">
                                    <p class="text-white">Fast&Furious</p>
                                </div>
                            </div>

                            <div class="col-3">
                                <div class="card bg-transparent border-0">
                                    <img src="img/tranchienanhsang.jpg" class="card-img-top" alt="...">
                                    <div class="card-body text-uppercase p-0 pt-2">
                                        <p class=" text-white mb-0">The current war</p>
                                        <p class="text-secondary">Trận chiến ánh sáng</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card bg-transparent border-0">
                                    <img src="img/timchongchome.jpg" class="card-img-top" alt="...">
                                    <div class="card-body text-uppercase p-0 pt-2">
                                        <p class="text-white">Tìm chồng cho mẹ</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="card bg-transparent border-0">
                                    <img src="img/dieubamekhongke.jpg" class="card-img-top" alt="...">
                                    <div class="card-body text-uppercase p-0 pt-2">
                                        <p class="text-white mb-0">Romang</p>
                                        <p class="text-secondary">Điều ba mẹ không kể</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END ROW 4-->
                    </div>
                </div>
                <!--END SUB_LIST MOVIE HOVER-->
            </li>
            <!-- END LIST MOVIE-->

            <!--START LIST GÓC ĐIỆN ẢNH-->
            <li class="sub-film">
                <a class="nav-link botarrow" href="<?php echo $data['url'] ?>Gocdienanh">GÓC ĐIỆN ẢNH</a>
                <ul class="sub-menu-film">
                    <li><a href="">thể loại phim</a></li>
                    <li><a>diễn viên</a></li>
                    <li><a>đạo diễn</a></li>
                    <li><a>bình luận phim</a></li>
                    <li><a>blog điện ảnh</a></li>
                </ul>
            </li>
            <!--END LIST GÓC ĐIỆN ẢNH-->
            <!--START LIST SỰ KIỆN-->
            <li class="sub-film">
                <a class="nav-link botarrow active" href="<?php echo $data['url'] ?>Sukien">SỰ KIỆN</a>
                <ul class="sub-menu-even">
                    <li><a href="">ưu đãi</a></li>
                    <li><a>phim hay tháng</a></li>
                </ul>
            </li>
            <!--END LIST SỰ KIỆN-->
            <li><a class="nav-link" href="<?php echo $data['url'] ?>Rap_Giave">RẠP/GIÁ VÉ</a></li>
            <li><a class="nav-link" href="<?php echo $data['url'] ?>Hotro">HỖ TRỢ</a></li>
            <li><a class="nav-link" href="<?php echo $data['url'] ?>Thanhvien">THÀNH VIÊN</a></li>
        </ul>
    </nav>
</div>