<?php

class Database{
      protected $conn;
      function __construct()
      {
            $serverName = "localhost";
            $userName = "pzo";
            $password = "pzo124";
            $dbName = "wad_school";
            $this->conn = new mysqli($serverName,$userName,$password,$dbName);
      }
}