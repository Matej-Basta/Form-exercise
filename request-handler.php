<?php
require_once "DBBlackbox.php";

session_start();

var_dump($_POST);

$id = insert($_POST);


$_SESSION["movie"] = $_POST;

header('Location: success.php');
?>