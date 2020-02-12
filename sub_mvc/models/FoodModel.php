<?php
error_reporting(0);
class FoodModel extends db
{
    public function getInforFood()
    {
        $qr = "SELECT * FROM food ORDER BY price_food DESC";
        return mysqli_query($this->conn, $qr);

    }
 
}
