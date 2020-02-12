<?php
error_reporting(0);
class MuaveModel extends db
{
    public function BuyTicket($code_movie,$code_room,$date,$time)
    {
        $qr = "SELECT * FROM movie ORDER BY Date DESC";
        return mysqli_query($this->conn, $qr);

        // $qr = "SELECT * FROM category";
        // $rows = mysqli_query($this->conn, $qr);
        // $arr = array();
        // while($row = mysqli_fetch_array($rows))
        // {
        //     $arr[] = $row;
        // }
        // return json_encode($arr);
    }
 
}
