            <!--START SLIDE SHOW-->
            <div class="container-fluid p-0 carousel-inner">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item ">
                            <img src="<?php echo $data['url'] ?>public/images/carousel/lion-king.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo $data['url'] ?>public/images/carousel/discount.jpg" class="d-block w-100" alt="...">
                            <img src="img/carousel/discount.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item active">
                            <img src="<?php echo $data['url'] ?>public/images/carousel/banner.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo $data['url'] ?>public/images/carousel/banner2.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <!-- START BOX - BUY TICKET-->
                <div class="box-buy-ticket d-none d-md-block">
                    <section class="pl-3 pt-3">
                        <div class="box-header">
                            <p>Mua vé nhanh</p>
                        </div>
                    </section>
                    <section>
                        <nav>
                            <ul class="nav p-3 nav-justified nav-pills">
                                <li class="nav-item ">
                                    <a class="nav-link active bg-transparent text-white" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
                                        Theo phim
                                    </a>
                                    <div class="divider-nav p-0"></div>
                                </li>
                                <li class="nav-item ">
                                    <a class=" nav-link bg-transparent text-white" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
                                        Theo ngày
                                    </a>
                                    <div class="divider-nav row"></div>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link bg-transparent text-white" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">
                                        Theo rạp
                                    </a>
                                    <div class="divider-nav row"></div>
                                </li>
                            </ul>
                        </nav>
                        
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="form-group">
                                    <select name="home-movie-list" id="home-movie-list" class="form-control border-0 text-success font-weight-bold" style="background:  rgba(255, 255, 255, 0.3);" >
                                        <option value="">Chọn phim</option>
                                        <?php
                                        while ($row = mysqli_fetch_array($data["movie"])) {
                                            echo '<option value="' . $row["code_movie"] . '">' . $row["name_movie"] . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="home-room-list" id="home-room-list" class="form-control text-success font-weight-bold border-0" style="background:  rgba(255, 255, 255, 0.3);" >
                                        <option value="">Chọn rạp</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="home-day-list" id="home-day-list" class="form-control text-success font-weight-bold border-0" style="background:  rgba(255, 255, 255, 0.3);">
                                        <option value="">Chọn ngày</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select name="home-dayTime-list" id="home-dayTime-list" class="form-control text-success font-weight-bold border-0" style="background:  rgba(255, 255, 255, 0.3);" >
                                        <option value="">Chọn suất</option>
                                    </select>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
                        </div>
                        <div id="loginBuyTicket" name="loginBuyTicket" class="box-header mr-3" style="float: right">
                            <a  class="text-white">Mua vé</a>
                        </div>
                    </section>
                </div>
                <!-- END BOX - BUY TICKET-->
            </div>
            <!--END SLIDE SHOW-->