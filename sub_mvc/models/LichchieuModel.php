<?php
error_reporting(0);
 class LichchieuModel extends db
 {
     public function ListAll()
    {
        $qr = "SELECT * FROM movie ORDER BY Date DESC";
        return mysqli_query($this->conn,$qr);

        // $qr = "SELECT * FROM category";
        // $rows = mysqli_query($this->conn, $qr);
        // $arr = array();
        // while($row = mysqli_fetch_array($rows))
        // {
        //     $arr[] = $row;
        // }
        // return json_encode($arr);
    }

    public function ListAllRoom()
    {
        $qr = "SELECT * FROM room ORDER BY name_room DESC";
        return mysqli_query($this->conn,$qr);

        // $qr = "SELECT * FROM category";
        // $rows = mysqli_query($this->conn, $qr);
        // $arr = array();
        // while($row = mysqli_fetch_array($rows))
        // {
        //     $arr[] = $row;
        // }
        // return json_encode($arr);
    }
    public function Home_ListAllRoom($code_movie)
    {
        $output = "";
        $qr = "SELECT * FROM `relationship_movie_room`
        JOIN room ON relationship_movie_room.code_room = room.code_room
        JOIN movie ON relationship_movie_room.code_movie = movie.code_movie
        WHERE relationship_movie_room.code_movie = '$code_movie'";
        $output .= '<option value="">Chọn rạp</option>';
        $rs = mysqli_query($this->conn, $qr);
        if (mysqli_num_rows($rs) > 0) {
            while($row = mysqli_fetch_array($rs)){
                $output .= '<option value="'.$row["code_room"].'">'.$row["name_room"].'</option>';
            }
        }
        echo $output;
    }

    public function Home_ListAllDay($code_movie,$code_room)
    {
        $output = '';
        $code_movie_room = $code_movie."-".$code_room;
        $qr = "SELECT * FROM `time` WHERE code_movie_room = '$code_movie_room'";
        $output .= '<option value="">Chọn ngày</option>';
        $rs = mysqli_query($this->conn, $qr);
        if (mysqli_num_rows($rs) > 0) {
            while($row = mysqli_fetch_array($rs)){
                $output .= '<option value="'.$row["date"].'">'.$row["date"].'</option>';
            }
        }
        echo $output;
    }

    public function Home_ListAllTimeOfDay($code_movie,$code_room,$times)
    {
        $output = '';
        $code_movie_room = $code_movie."-".$code_room;
        $qr = "SELECT * FROM `time` WHERE code_movie_room = '$code_movie_room' AND date = '$times'";
        $output .= '<option value="">Chọn suất</option>';
        $rs = mysqli_query($this->conn, $qr);
        if (mysqli_num_rows($rs) > 0) {
            while($row = mysqli_fetch_array($rs)){
                $arr_time = explode(",",$row["times"]);
                foreach($arr_time as $value){
                    $output .= '<option value="'.$value.'">'.$value.'</option>';
                }
                
            }
        }
        echo $output;
    }

 }
