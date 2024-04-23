<?php
admin();
require "Database.php";
$config = require("config.php");

$db = new Database($config);

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $query = "INSERT INTO books (title, author, release_date, available) VALUES (:title, :author, :release_date, :available);";

    $params = [
        ":title" => $_POST["title"],
        ":author" => $_POST["author"],
        ":release_date" => $_POST["release_date"],
        ":available" => $_POST["available"]
    ];
    $db->execute($query,$params);

    header("Location: /");

    die();
}

$title = "Create books";
require "views/book-create.view.php";