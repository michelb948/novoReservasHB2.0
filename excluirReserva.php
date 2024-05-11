<?php
include_once("config.php");

$id = $_GET['id'];

mysqli_query($conexao, "DELETE FROM reservas1 WHERE id='$id'");
header('Location: home.php');