<?php
class Phim extends Controller
{
    public function __construct()
    {
        // Model
    }
    public function GetView()
    {

            $this->view("master_page", [
                "page" => "home",
                "url" => "./",
            ]);
    }
}