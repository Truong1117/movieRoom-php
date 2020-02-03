            <!--START MAIN-->
            <div class="container-fluid px-5 py-3">
                <div class="row w-100">
                    <ul class="nav mb-3 text-uppercase nav-tag w-50 col-12" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link nav-hover" id="pills-movie-tab" data-toggle="pill" href="#pills-movie" role="tab" aria-controls="pills-movie" aria-selected="true">
                                theo phim
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-hover" id="pills-room-tab" data-toggle="pill" href="#pills-room" role="tab" aria-controls="pills-room" aria-selected="false">
                                theo rạp
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content w-100 py-5" id="pills-tabContent">
                        <!--START SELECT 1 - FOLLOW FILM-->
                        <div class="tab-pane fade show active" id="pills-movie" role="tabpanel" aria-labelledby="pills-movie-tab">
                            <div class="tab-show-movie">
                                <div class="row">
                                    <!--START SELECT MOVIE-->
                                    <div class="col-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="pannel-title">Chọn phim</h4>
                                            </div>
                                            <ul class="list-group" >
                                                <!--START LIST 1-->
                                                <?php 
                                                    while($row = mysqli_fetch_assoc($data["movie"])){
                                                        echo '<li id="myListMovie" class="movies-list" data-movieid="'.$row["code_movie"].'" >
                                                        <div class="list-group-movie">
                                                                <div class="showtime-row">
                                                                    <img class="thumnail-movie" src="'.$data['url'].'public/images/'.$row["image"].'">
                                                                </div>
                                                                <div class="title-movie">
                                                                    <p class="text-uppercase">'.$row["name_movie"].'</p>
                                                                </div>
                                                        </div></li>';
                                                    }
                                                ?>  
                                                <!--END LIST 1-->
                                            </ul>
                                        </div>
                                    </div>
                                    <!--END SELECT MOVIE-->

                                    <!--START SELECT ROOM-->
                                    <div class="col-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="pannel-title">Chọn rạp</h4>
                                            </div>

                                            <!-- Show all rooms of a movie -->
                                            <ul class="list-group" id="myListRoom" >
                                                <!--START LIST 1-->
                                                <li >
                                                    <div class="title-room">
                                                        <p id="select-room" class="text-uppercase">vui lòng chọn rạp</p>
                                                    </div>
                                                </li>
                                            
                                                <!--END LIST 1-->
                                            </ul>
                                        </div>
                                    </div>
                                    <!--END SELECT ROOM-->

                                    <!--START SELECT TIME-->
                                    <div class="col-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="pannel-title">Chọn suất</h4>
                                            </div>
                                            <ul class="list-group" id="myListTime">
                                                <!--START LIST 1-->
                                                <li>
                                                    <div class="title-time">
                                                        <p id="select-time" class="text-uppercase">vui lòng chọn suất</p>
                                                    </div>
                                                </li>
                                                <!--END LIST 1-->
                                            </ul>
                                        </div>
                                    </div>
                                    <!--END SELECT TIME-->
                                </div>
                            </div>
                        </div>
                        <!--END SELECT 1 - FOLLOW FILM-->
                        <div class="tab-pane fade" id="pills-room" role="tabpanel" aria-labelledby="pills-room-tab">
                            <div class="tab-show-movie">
                                <div class="row">
                                    <!--START SELECT MOVIE-->
                                    <div class="col-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="pannel-title">Chọn rạp</h4>
                                            </div>
                                            <ul class="list-group" >
                                                <!--START LIST 1-->
                                                <?php 
                                                    while($row = mysqli_fetch_assoc($data["rooms"])){
                                                        echo '<li id="Room-myListRoom" class="room-movies-list" data-roomid="'.$row["code_room"].'" >
                                                        <div class="list-group-movie">
                                                                <div class="title-movie">
                                                                    <p class="text-uppercase">'.$row["name_room"].'</p>
                                                                </div>
                                                        </div></li>';
                                                    }
                                                ?>  
                                                <!--END LIST 1-->
                                            </ul>
                                        </div>
                                    </div>
                                    <!--END SELECT MOVIE-->

                                    <!--START SELECT ROOM-->
                                    <div class="col-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="pannel-title">Chọn phim</h4>
                                            </div>
                                            <ul class="list-group" id="room-myListMovie">
                                                <!--START LIST 1-->
                                                <li class="">
                                                    <div class="title-movie">
                                                        <p class="text-uppercase">vui lòng chọn phim</p>
                                                    </div>
                                                </li>
                                                <!--END LIST 1-->
                                            </ul>
                                        </div>
                                    </div>
                                    <!--END SELECT ROOM-->

                                    <!--START SELECT TIME-->
                                    <div class="col-4">
                                        <div class="panel panel-default">
                                            <div class="panel-heading">
                                                <h4 class="pannel-title">Chọn suất</h4>
                                            </div>
                                            <ul class="list-group" id="room-myListTime">
                                                <!--START LIST 1-->
                                                <li>
                                                    <div class="title-movie">
                                                        <p class="text-uppercase">vui lòng chọn suất</p>
                                                    </div>
                                                </li>
                                                <!--END LIST 1-->
                                            </ul>
                                        </div>
                                    </div>
                                    <!--END SELECT TIME-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--START SELECT 2 - FOLLOW ROOM-->
                </div>
            </div>

            <!--END MAIN-->