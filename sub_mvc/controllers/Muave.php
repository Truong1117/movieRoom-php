<?php
class Muave extends Controller
{
    public $Muave;
    public $InforMovie;
    public function __construct()
    {
        // Model
        $this->Muave = $this->model("MuaveModel");
        $this->InforMovie = $this->model("InformovieModel");
        $this->InforFood = $this->model("FoodModel");
    }

    public function BuyTicket()
    {
        // $queries = array();
        $actual_link = "$_SERVER[REQUEST_URI]";
        $parts = parse_url($actual_link, PHP_URL_QUERY);
        $arr_ticket = explode("&",$parts);
        
        //$arr_ticket[0] = code_movie;
        //$arr_ticket[1] = code_room;
        //$arr_ticket[2] = date;
        //$arr_ticket[3] = timeDate;
        $inforFood = $this->InforFood->getInforFood();
        $inforMovie = $this->InforMovie->GetInforMovieFollowCode($arr_ticket[0]);
        //inforMovie has name_movie :: image_movie:: date_movie
        
        $nameRoom = $this->InforMovie->GetNameRoom($arr_ticket[1]);
        // $this->Muave->BuyTicket($code_movie,$code_room,$date,$time);
        $this->view("master_page", [
            "page" => "muave",
            "url" => "../../",
            "inforFood" => $inforFood,
            "inforMovie" => $inforMovie,
            "nameRoom" => $nameRoom,
            "date_movie" => $arr_ticket[2],
            "time_movie"=> $arr_ticket[3]
        ]);
    }
}
