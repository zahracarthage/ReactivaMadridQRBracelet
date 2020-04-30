<?php
class config
{
    public $server = "localhost";
    public $user = "root";
    public $pass = "";
    public $dbname = "qr";
    public $conn;
    public function __construct()
    {
        $this->conn = new mysqli($this->server, $this->user, $this->pass, $this->dbname);
        if ($this->conn->connect_error) {
            die("connection failed");
        }
    }
    public function insertQr($final,$qrimage, $qrlink)
    {
        $sql = "INSERT INTO
       qrcodes (DNI_NIE, name, last_name, phone_number, city, Current_address, Localization, qrImg, qrlink)
       VALUES  
       ('$DNI_NIE', '$name', '$last_name', '$phone_number', '$city', '$Current_address', '$Localization', '$qrimage', '$qrlink')
       ";
 
        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            echo ("Error: " . $sql . "<br>" . $this->conn->error);
            return false;
        }
    }
 
    public function displayImg($qrimage)
    {
        $sql = "SELECT qrimg,qrlink from qrcodes where qrimg='$qrimage'";
    }
}
$meravi = new config();