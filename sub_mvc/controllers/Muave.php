<?php
class Muave extends Controller
{
    public $Muave;
    public function __construct()
    {
        // Model
        $this->Muave = $this->model("MuaveModel");
    }

    public function BuyTicket()
    {
        echo "heelo";
    }

}