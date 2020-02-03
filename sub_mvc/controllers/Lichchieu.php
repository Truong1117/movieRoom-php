<?php
class Lichchieu extends Controller
{
    public $Lichchieu;
    public function __construct()
    {
        // Model
        $this->Lichchieu = $this->model("LichchieuModel");
    }

    public function GetView()
    {
        //Models
        $movie = $this->Lichchieu->ListAll();
        $rooms = $this->Lichchieu->ListAllRoom();
            $this->view("master_page", [
                "page" => "lichchieu",
                "url" => "./",
                "movie"=>$movie,
                "rooms"=>$rooms,
            ]);
    }

    public function GetRoom()
    {
        $this->Lichchieu->Home_ListAllRoom($_POST["homeMovieList"]);
    }

    public function GetDay()
    {
        $this->Lichchieu->Home_ListAllDay($_POST["homeMovieCode"],$_POST["homeRoomCode"]);
    }

    public function GetTimeOfDay()
    {
        $this->Lichchieu->Home_ListAllTimeOfDay($_POST["homeMovieCode"],$_POST["homeRoomCode"],$_POST["homeDay"]);
    }
}