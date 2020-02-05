            <!--START MAIN-->
            <div class="container-fluid px-5 py-3">
                <div class="row">

                    <!-- Get Information of Movie -->
                    <?php $row = mysqli_fetch_array($data["inforMovie"]) ?>
                    <div class="col-8">
                        <div class="col-12 pt-3 link-page">
                            <a href="<?php echo $data['url'] ?>">Trang chủ</a>
                            <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                            <a href="../">Phim</a>
                            <span><i class="fa fa-angle-right" aria-hidden="true"></i></span>
                            <span class="text-span"><?php echo $row["name_movie"] ?></span>
                            <div class="divider"></div>
                        </div>
                        <div class="container-fluid p-0">
                            <div class="row p-0 m-0">
                                <div class="detail-movie-img col-md-4 pt-3 pb-3 cm-film-title text-uppercase">
                                    <a href="<?php echo $data['url'] ?>">
                                        <img src="<?php echo $data['url'] ?>public/images/<?php echo $row["image"] ?>">
                                    </a>
                                </div>
                                <div class="detail-movie-info col-8 pt-3 pb-3 cm-film-title">
                                    <?php
                                    echo '<h2 class="">' . $row["name_movie"] . '</h2>';
                                    echo '<h3 class="">Rating</h3>';
                                    echo '<p class="">Quốc gia: <span>' . $row["Quocgia"] . '</span></p>';
                                    echo '<p class="">Diễn viên: <span>' . $row["Dienvien"] . '</span></p>';
                                    echo '<p class="">Thể loại: <span>' . $row["Theloai"] . '</span></p>';
                                    echo '<p class="">Đạo diễn: <span>' . $row["Daodien"] . '</span></p>';
                                    echo '<p class="">Ngày: <span>' . $row["Date"] . '</span></p>';

                                    ?>
                                    <h5></h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 py-5">
                            <h5 class="text-uppercase">Nội dung phim</h5>
                            <div class="divider"></div>
                            <p>
                                <?php echo $row["movie_content"] ?>
                            </p>
                        </div>
                    </div>
                    <!--START COL-4-->
                    <div class="col-4">
                        <!--START SECTION col-4-->
                        <section class="py-5">
                            <h5 class="text-uppercase">Phim đang chiếu</h5>
                            <div class="divider"></div>
                            <div class=" row movie-group">
                                <div class="col-12">
                                    <article class="pb-5">
                                        <img class="w-100 pb-2" src="img/lion-king.jpg">
                                        <h5 class="text-uppercase">the lion king</h5>
                                    </article>
                                    <article class="pb-5">
                                        <img class="w-100 pb-2" src="img/timchongchome.jpg">
                                        <h5 class="text-uppercase">tìm chồng cho mẹ</h5>
                                    </article>
                                    <article class="pb-5">
                                        <img class="w-100 pb-2" src="img/dieubamekhongke.jpg">
                                        <h5 class="text-uppercase">điều ba mẹ không kể</h5>
                                    </article>
                                    <article class="d-flex justify-content-end">
                                        <button>Xem thêm <i class="fa fa-long-arrow-right pl-2 py-2" aria-hidden="true"></i></button>
                                    </article>
                                </div>
                            </div>
                        </section>

                        <!--END SECTION col-4-->

                    </div>
                    <!--END COL-4-->
                    <!--START INFO GALAXY-->
                    <div class="col-12 py-5">
                        <h5 class="text-uppercase">Phim đang chiếu</h5>
                        <div class="divider"></div>
                        <p>
                            Trang điện ảnh là một thế giới thông tin thú vị, hấp dẫn về các bộ phim,
                            diễn viên, đạo diễn, các góc nhìn lạ, các bài phân tích sâu sắc, thỏa mãn niềm đam mê điện ảnh của khán giả.
                            Trang điện ảnh còn là nơi bạn tra cứu dễ dàng theo lựa chọn theo tựa phim, thể loại hoặc nhân vật điện ảnh,
                            bổ sung kiến thức, hiểu biết, nơi tình yêu điện ảnh của bạn được sẻ chia và nhân rộng.
                        </p>
                    </div>
                    <!--END INFO GALAXY-->
                </div>
            </div>
            <!--END MAIN-->