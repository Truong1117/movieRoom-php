<?php
class Phim extends Controller
{
    public $InforMovie;
    public $Searchmovie;
    public function __construct()
    {
        // Model
        $this->InforMovie = $this->model("InformovieModel");
        $this->Searchmovie = $this->model("SearchmovieModel");
    }

    public function getView(){
        // $this->Searchmovie->ListMovieFollowKey($_POST["search_txt"]);
        $this->view("master_page", [
            "page" => "phim_timkiem",
            "url" => "../",

        ]);
    }
    public function Information_Movie($slug_movie)
    {
            $rs = $this->InforMovie->GetInforMovie($slug_movie);
            $this->view("master_page", [
                "page" => "phim",
                "url" => "../../",
                "inforMovie"=>$rs,
                "title"=> "title",
            ]);

    }
}