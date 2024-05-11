<?php
include_once ("config.php");

session_start();

if (isset($_POST['acessar'])) {
    $cpf = $_POST['cpf'];

    $query = "SELECT * FROM professores WHERE cpf=$cpf";

    $result = $conexao->query($query);

    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {
            $nome = $user_data['nome'];
            $_SESSION['nome'] = $nome;
            header("location: home.php");
        }
    }
    else {
        echo "Esse cpf não está cadastrado no banco";
        unset($_SESSION['nome']);
    }
}




