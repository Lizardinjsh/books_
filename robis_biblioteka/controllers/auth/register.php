<?php

guest();

require "Validator.php";
require "Database.php";
$config = require("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $db = new Database($config);

  $errors = [];

  $query = "SELECT * FROM users WHERE username = :username";
  $params = [":username" => $_POST["username"]];
  $result = $db->execute($query, $params)->fetch();

  if ($result) {
    $errors["username"] = "Konts jau pastāv";
  }

  if (empty($errors)) {
    $query = "INSERT INTO users (username, password, admin) VALUES (:username, :password, :admin)";
    $params = [
      ":username" => $_POST["username"],
      ":password" => password_hash($_POST["password"], PASSWORD_BCRYPT),
      ":admin" => 0
    ];
    $db->execute($query, $params);

    $_SESSION["flash"] = "Tu esi registrejies cuh";
    header("Location: /login");
    die();

  }
}

$title = "Register";
require "views/register.view.php";