<?php
error_reporting(0);
 class InformovieModel extends db
 {
     public function GetInforMovie($slug_movie)
    {
      $qr = "SELECT * FROM movie WHERE slug_movie = '$slug_movie';";
      return mysqli_query($this->conn,$qr);
    }
 }
