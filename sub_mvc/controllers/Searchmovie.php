<?php
class Searchmovie extends Controller
{
    public $Searchmovie;
    public function __construct()
    {
        // Model
        $this->Searchmovie = $this->model("SearchmovieModel");
    }
    public function GetMovie()
    {
        $this->Searchmovie->ListAllMovie($_POST["search_txt"]);
    }

    public function GetMovieFollowKey()
    {
        $this->Searchmovie->ListMovieFollowKey($_POST["search_key"]);
    }

    // public function GetMovieFollowKeyEnter($enter_key)
    // {
    //     // $rs = $this->Searchmovie->ListMovieFollowKey($_POST["search_key"]);
    //     $this->view("master_page", [
    //         "page" => "phim_timkiem",
    //         "url" => "../../",
    //         "enter_key"=>$enter_key,
    //         // "inforMovie"=>$rs,
    //         // "title"=> "title",
    //     ]);
    // }
}
