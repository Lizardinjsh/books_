<?php
auth();
require "Database.php";
$config = require("config.php");

$query = "SELECT * FROM books";

$db = new Database($config);
$books = $db->execute($query,[])->fetchAll();

$title = "Books";
require "views/book.view.php";