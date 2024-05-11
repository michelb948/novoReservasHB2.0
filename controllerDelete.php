<?php
session_start();

if(!empty($_GET['id']))
{
    include_once('config.php');

    $id = $_GET['id'];

    $sqlSelect = "SELECT nome FROM reservas1 WHERE id=$id";

    $result = $conexao->query($sqlSelect);

    if($result->num_rows > 0)
    {
        if ($_SESSION['nome'] == "Matheus dos santos Albuquerque" || $_SESSION['nome'] == "Ana Roberta Nógimo Rodrigues" || $_SESSION['nome'] == "Raimundo Ítalo Câmara Pimentel") {
            echo "<h1>Tem certeza que deseja apagar esta reserva?</h1>" . '<br>';
            echo "<a href='excluirReserva.php?id=$id'>Sim</a>" . "<br>";
            echo "<a href='home.php'>Cancelar</a>";
        }
        else {
            echo "Você não pode apagar reserva que não é sua";   
        }        
    }
}
   
?> 