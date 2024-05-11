<?php

if (isset($_POST['update'])) {
    include_once("config.php");    
    
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $equipamento = $_POST['equipamento'];
    $aula = $_POST['aula'];
    $dia = $_POST['dia'];

    $aulas1 = implode($aula);
    $equipamento1 = implode($equipamento);

    $maiorAula = max($aula);

    $sqlTermino = "SELECT termino FROM aulas WHERE aula='$maiorAula'";

    $result = $conexao->query($sqlTermino);

    if ($result->num_rows > 0) {
        while($user_data = mysqli_fetch_assoc($result)) {
            $termino = $user_data['termino'];
        }
    }

    $update = mysqli_query($conexao, "UPDATE reservas1 SET nome='$nome', equipamento='$equipamento1', aulas='$aulas1', dia='$dia', termino='$termino' WHERE id='$id'");

    if ($update) {
        header("location: home.php");
    }
    else {
        echo "Não foi possivel atualizar os dados da reserva";
    }
    
}