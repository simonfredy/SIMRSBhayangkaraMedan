<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sik";

    $koneksi = new mysqli($servername, $username, $password, $database);

    if ($koneksi -> connect_error) {
        die("Connection Failed: ". $koneksi->connect_error);
    }