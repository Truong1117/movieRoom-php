<?php
error_reporting(0);
session_start();
class LogModel extends db
{
    public function Signup_User($emailSignup,$passSignup,$nameSignup,$phoneSignup,$genderSignup,$citySignup,$locationSignup,$addSignup,$dateSignup)
    {
        $qr = "INSERT INTO users VALUES('','$emailSignup','$passSignup','$nameSignup','$phoneSignup','$genderSignup','$citySignup','$locationSignup','$addSignup','$dateSignup')";
        $rs = mysqli_query($this->conn, $qr);
        if($rs){
            echo "true";
            $_SESSION['name'] = $nameSignup;
        }else{
            echo "false";
        }
    }

    public function Check_User($emailSignup)
    {
        $qr = "SELECT * FROM users WHERE email='$emailSignup';";

        $rs = mysqli_query($this->conn, $qr);
        if(mysqli_num_rows($rs) > 0){
            echo "true";
        }else{
            echo "false";
        }
    }
    
    public function Check_Login($emailLogin,$passLogin){
        $qr = "SELECT * FROM users WHERE email='$emailLogin' && password='$passLogin'";
        $rs = mysqli_query($this->conn,$qr);
        if(mysqli_num_rows($rs) > 0){
            $row = mysqli_fetch_array($rs);
            echo "true";
            $_SESSION['name'] = $row["name_user"];
        }else{
            echo "false";
        }
    }
}
