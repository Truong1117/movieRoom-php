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

                <!-- Login and Logout -->
                <nav class="nav float-right float-md-none">
                    <?php
                    if (isset($_SESSION['name'])) {
                    ?>
                        <div class="dropdown">
                            <a class="nav-link text-secondary">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <?php
                                echo $_SESSION['name'];
                                ?>
                            </a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Tài khoản</a>
                                <a href="Log/Logout" class="dropdown-item">Thoát</a>
                            </div>
                        </div>
                    <?php
                    } else {
                    ?>
                        <a class="nav-link log-form text-secondary " data-toggle="modal" data-target="#modalLRForm">
                            <i class="fa fa-user" aria-hidden="true"></i>
                            Đăng nhập
                        </a>
                    <?php
                    }
                    ?>

                    <!-- <a class="nav-link  text-danger d-none d-md-block" href="#">VN</a>
                    <a class="nav-link text-secondary d-none d-md-block" href="#">EN</a> -->
                </nav>
                <!-- End Login and Logout -->
            </div>
        </div>
    </div>
    <!--navbar ends-->
    <!--Modal: Login / Register Form-->
    <div class="login-container">
        <span class="close">
            <i class="fa fa-times" aria-hidden="true"></i>
        </span>
        <div class="tab-login-line">
            <ul class="nav nav-tabs">
                <li>
                    <a class="active" id="a-tab-login" href="#tab-login" data-toggle="tab">Đăng nhập</a>
                </li>
                <li><a class="line">/</a></li>
                <li><a href="#tab-signup" id="a-tab-signup" data-toggle="tab" data-target="">Đăng ký</a></li>
            </ul>
            <div id="tab-login" class="row">
                <div class="col-md-12">
                    <div class="tag-content">
                        <div lass="tab-pane">
                            <div class="login-tab-wrapper">
                                <div class="login-heading">
                                    Vui lòng đăng nhập trước khi mua vé để tích luỹ điểm, cơ hội nhận thêm nhiều ưu đãi từ chương trình thành viên Galaxy Cinema.
                                </div>
                            </div>

                            <!-- Start Form Login Page Home -->
                            <div class="login-form">
                                <input class="login" type="email" name="emailLogin" id="emailLogin" placeholder="Email">
                                <br />
                                <input class="login" type="password" name="passLogin" id="passLogin" placeholder="Mật khẩu">
                                <div class="login-remember">
                                    <!--.remember-->
                                    <!--  .toggle-button.toggle-button-login-->
                                    <!--    input#toggleRemember(type='checkbox' ng-model='userInfo.remember')-->
                                    <!--    label(for='toggleRemember') Ghi nhớ-->
                                    <!--    .toggle-button-icon-->
                                    <div class="forget-pass"><a id="forgetPass" href="" ng-click="openForgetPass()">Quên mật khẩu?</a></div><!-- ngIf: userNotActive == true -->
                                </div>
                                <div id="errorLogin"></div>
                                <button class="btn primary input btnLogin">
                                    Đăng nhập
                                </button>
                            </div>
                            <!-- End Form Login Page Home -->
                        </div>
                    </div>
                </div>
            </div>

            <!-- Section Signup User -->
            <div id="tab-signup" class="row log_display">
                <div class="col-md-12">
                    <div class="tag-content">
                        <div class="tab-pane">
                            <div class="login-tab-wrapper">
                                <div class="login-heading">
                                </div>

                                <!--START Form Signup -->
                                <div class="login-form">
                                    <input class="login" type="text" name="usernameSignup" id="usernameSignup" placeholder="Họ tên" required>
                                    <div id="errorName"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input class="login" type="text" name="phoneSignup" id="phoneSignup" placeholder="Số điện thoại">
                                        </div>
                                        <div class="col-md-6">
                                            <input class="login" type="text" name="genderSignup" id="genderSignup" placeholder="Giới tính">
                                        </div>
                                    </div>
                                    <input class="login" type="email" name="emailSignup" id="emailSignup" placeholder="Email" required>
                                    <div id="errorEmail"></div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input class="login" type="password" name="passSignup" id="passSignup" placeholder="Mật khẩu" required>
                                        </div>
                                        <div class="col-md-6">
                                            <input class="login" type="password" name="pass_rpSignup" id="pass_rpSignup" placeholder="Xác nhận mật khẩu" required>
                                            <div id="errorRpPass"></div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input class="login" type="text" name="citySignup" id="citySignup" placeholder="Chọn thành phố">
                                        </div>
                                        <div class="col-md-6">
                                            <input class="login" type="text" name="locationSignup" id="locationSignup" placeholder="Tỉnh">
                                        </div>
                                    </div>
                                    <input class="login" type="text" name="addSignup" id="addSignup" placeholder="Địa chỉ">
                                    <input class="login" type="date" name="dateSignup" id="dateSignup" placeholder="Ngày sinh">
                                    <div class="login-remember">
                                        <!--.remember-->
                                        <!--  .toggle-button.toggle-button-login-->
                                        <!--    input#toggleRemember(type='checkbox' ng-model='userInfo.remember')-->
                                        <!--    label(for='toggleRemember') Ghi nhớ-->
                                        <!--    .toggle-button-icon-->
                                        <div class="forget-pass"><a id="noteSignup" href="" ng-click="openForgetPass()">Tôi đã đọc và đồng ý với <span>chính sách</span> của chương trình</a></div><!-- ngIf: userNotActive == true -->
                                    </div>
                                    <div id="messerrorSignup"></div>
                                    <button id="signup_user" class="btn primary input">
                                        Đăng kí
                                    </button>
                                </div>
                                <!--END Form Signup -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- End Section Signup User -->
        </div>
    </div>
    <!--Modal: Login / Register Form-->