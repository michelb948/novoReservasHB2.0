<?php
session_start();

include_once("config.php");

$id = $_GET['id'];

$query = mysqli_query($conexao, "SELECT nome FROM reservas1 WHERE id='$id'");

if ($query->num_rows > 0) {
    while ($user_data = mysqli_fetch_assoc($query)) {
        $nome = $user_data['nome'];
    }
    
    if ($nome == $_SESSION['nome'] || $_SESSION['nome'] == "Ana Roberta Nógimo Rodrigues" || $_SESSION['nome'] == "Matheus dos santos Albuquerque" || $_SESSION['nome'] == "Raimundo Ítalo Câmara Pimentel") {
        header("location: edit.php?id=$id");
    }
    else {
        echo "Opa, você não pode editar uma reserva que é de outra pessoa teacher ;D" . "<br>";
        echo $nome . "<br>";
        echo $_SESSION['nome'] . "<br>";
    }
}