<?php
class Home extends Controller
{

    public $CategoryModel;
    public $AdsModel;

    public function __construct()
    {
        // Model
        $this->Lichchieu = $this->model("LichchieuModel");
    }
    public function GetView()
    {
        $movie = $this->Lichchieu->ListAll();
        $rooms = $this->Lichchieu->ListAllRoom();
        $this->view("master_page", [
            "page" => "home",
            "url" => "./",
            "movie" => $movie,
            "rooms" => $rooms,
        ]);
    }
}
