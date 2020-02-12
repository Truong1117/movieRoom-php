<?php
error_reporting(0);
class AjaxModel extends db
{
    public function ListAll()
    {
        $qr = "SELECT * FROM movie ORDER BY Date DESC";
        return mysqli_query($this->conn, $qr);

        // $qr = "SELECT * FROM category";
        // $rows = mysqli_query($this->conn, $qr);
        // $arr = array();
        // while($row = mysqli_fetch_array($rows))
        // {
        //     $arr[] = $row;
        // }
        // return json_encode($arr);
    }
    public function ListAllRoom($code_movie)
    {
        $output = "";
        $qr = "SELECT * FROM `relationship_movie_room`
        JOIN room ON relationship_movie_room.code_room = room.code_room
        JOIN movie ON relationship_movie_room.code_movie = movie.code_movie
        WHERE relationship_movie_room.code_movie = '$code_movie'";
        $rs = mysqli_query($this->conn, $qr);
        if (mysqli_num_rows($rs) > 0) {
            while ($row = mysqli_fetch_array($rs)) {
                $output .= '<li class="rooms-list" data-movieid="' . $row["code_movie"] . '" data-room="' . $row["code_room"] . '" onclick="listTimeOfARoom()">
                            <div class="list-group-room">
                                <div class="title-room">
                                    <p id="select-room">' . $row["name_room"] . '</p>
                                </div>
                            </div>
                    </li>';
            }
        }
        echo $output;
    }

    public function ListAllMovieOfRoom($code_room)
    {
        $output = "";
        $qr = "SELECT * FROM `relationship_movie_room`
        JOIN room ON relationship_movie_room.code_room = room.code_room
        JOIN movie ON relationship_movie_room.code_movie = movie.code_movie
        WHERE relationship_movie_room.code_room = '$code_room'";
        $rs = mysqli_query($this->conn, $qr);
        if (mysqli_num_rows($rs) > 0) {
            while ($row = mysqli_fetch_array($rs)) {
                $output .= '<li class="rooms-list" data-movieid="' . $row["code_movie"] . '" data-room="' . $row["code_room"] . '" onclick="listTimeOfAFilm()">
                            <div class="list-group-room">
                                <div class="title-room">
                                    <p id="select-room">' . $row["name_movie"] . '</p>
                                </div>
                            </div>
                    </li>';
            }
        }
        echo $output;
    }

    

    public function ListAllTime($code_movie, $code_room)
    {
        $output = "";
        $qr = "SELECT * FROM `relationship_movie_room`
        JOIN time ON time.code_movie_room = relationship_movie_room.code_movie_room
                WHERE code_movie = '$code_movie' AND code_room = '$code_room'";
        $rs = mysqli_query($this->conn, $qr);
        if (mysqli_num_rows($rs) > 0) {
            while($row = mysqli_fetch_array($rs)){
                $str_times = explode(",",$row["times"]);
                $output .= '<li class="times-list" style="cursor: auto; background:none" >
                            <div class="container-fuild">
                                <p id="dateTimeRoom" class="text-uppercase pb-3" >' . $row["date"] . '</p>
                                <div class="row" id="select-room" class="text-uppercase" >
                                <p class="col-md-3" id="typeMovie" class="text-uppercase" >' . $row["type"] . '</p>';
                $output .= '<div class="col-md-9">';
                foreach($str_times as $value){
                    $output .= '<a class="col-md-4" href="Muave/BuyTicket/?'.$code_movie.'&'.$code_room.'&'.$row["date"].'&'.trim($value," ").'" data-movie="'.$code_movie.'" data-room="'.$code_room.'" data-time="'.$value.'"><span id="timeRoomMovie">'.$value.'</span></a>';
                }
                $output .= '</div>
                            </div>
                    </li>';
            }
            // $arr = [];
            // $row = mysqli_fetch_array($rs);
            // $str_times = explode(",", $row["times"]);
            // foreach ($str_times as $value) {
            //     $output .= '<li class="rooms-list" data-room="'.$row["code_room"].'" onclick="listTimeOfARoom()">
            //                 <div class="title-room">
            //                     <p id="select-room" class="text-uppercase" >'.$value.'</p>
            //                 </div>
            //         </li>';
            // }
        }
        echo $output;
    }

    //Page Home
    public function Home_ListAllRoom($code_movie)
    {
        $output = "";
        $qr = "SELECT * FROM `relationship_movie_room`
        JOIN room ON relationship_movie_room.code_room = room.code_room
        JOIN movie ON relationship_movie_room.code_movie = movie.code_movie
        WHERE relationship_movie_room.code_movie = '$code_movie'";
        $rs = mysqli_query($this->conn, $qr);
        if (mysqli_num_rows($rs) > 0) {
            while ($row = mysqli_fetch_array($rs)) {
                $output .= '<li class="rooms-list" data-movieid="' . $row["code_movie"] . '" data-room="' . $row["code_room"] . '" onclick="listTimeOfARoom()">
                            <div class="list-group-room">
                                <div class="title-room">
                                    <p id="select-room">' . $row["name_room"] . '</p>
                                </div>
                            </div>
                    </li>';
            }
        }
        echo $output;
    }
}
