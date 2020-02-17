<?php
error_reporting(0);
class TicketModel extends db
{
    public function getInforTicket()
    {
        $qr = "SELECT * FROM ticket ORDER BY price_ticket DESC";
        return mysqli_query($this->conn, $qr);

    }
 
}
