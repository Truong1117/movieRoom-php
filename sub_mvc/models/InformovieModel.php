<?php
error_reporting(0);
class InformovieModel extends db
{

  public function GetInforMovieFollowCode($code_movie)
  {
    $qr = "SELECT * FROM movie WHERE code_movie = '$code_movie';";
    if($rs =mysqli_query($this->conn, $qr)){
      $arr = [];
      $row = mysqli_fetch_array($rs);
      $arr = [
        "name_movie"=>$row["name_movie"],
        "image_movie"=>$row["image"],
        "notice"=>$row["notice"],
      ];
    }
    return $arr;
  }

  public function GetInforMovie($slug_movie)
  {
    $qr = "SELECT * FROM movie WHERE slug_movie = '$slug_movie';";
    return mysqli_query($this->conn, $qr);
  }

  public function GetNameRoom($code_room)
  {
    $qr = "SELECT * FROM room WHERE code_room = '$code_room';";
    $rs = mysqli_query($this->conn, $qr);
      if($rs){
        $row = mysqli_fetch_array($rs);
        $name_room = $row["name_room"];
        return $name_room;
      }
  }
}
