<?php
class Log extends Controller
{
    public $LogModel;

    public function __construct()
    {
        $this->LogModel = $this->model("LogModel");
    }

    //Check email had used or no
    public function CheckUser(){
        $emailSignup = $_POST["emailSignup"];
        $this->LogModel->Check_User($emailSignup);
    }

    public function SignupUser(){
        $emailSignup = $_POST["emailSignup"];
        $passSignup = $_POST["passSignup"];
        $nameSignup = $_POST["nameSignup"];
        $phoneSignup = $_POST["phoneSignup"];
        $genderSignup = $_POST["genderSignup"];
        $citySignup = $_POST["citySignup"];
        $locationSignup = $_POST["locationSignup"];
        $addSignup = $_POST["addSignup"];
        $dateSignup = $_POST["dateSignup"];
        $this->LogModel->Signup_User($emailSignup,$passSignup,$nameSignup,$phoneSignup,$genderSignup,$citySignup,$locationSignup,$addSignup,$dateSignup);
    }

    public function CheckLogin(){
        $emailLogin = $_POST["emailLogin"];
        $passLogin = $_POST["passLogin"];
        $this->LogModel->Check_Login($emailLogin,$passLogin);
    }
    public function Logout(){
        session_destroy();
        session_unset();
        header('Location: ../'); 
    }

}
