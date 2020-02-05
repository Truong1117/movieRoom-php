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


}
