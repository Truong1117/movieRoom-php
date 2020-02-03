<?php
class Ajax extends Controller
{
    public $Ajax;

    public function __construct()
    {
        $this->AjaxModel = $this->model("AjaxModel");
    }

    public function getRoom(){
        $code_movie = $_POST["code_movie"];
        $rs = $this->AjaxModel->ListAllRoom($code_movie);
    }

    public function getTime(){
        $code_movie = $_POST["code_movie"];
        $code_room = $_POST["code_room"];
        $rs = $this->AjaxModel->ListAllTime($code_movie,$code_room);
    }

    public function getMovieOfRoom(){
        $code_room = $_POST["code_room"];
        $rs = $this->AjaxModel->ListAllMovieOfRoom($code_room);
    }
}
