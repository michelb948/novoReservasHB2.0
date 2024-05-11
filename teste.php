<?php
include_once("config.php");

if (isset($_POST['submit'])) {
    $dispositivos = ($_POST['equipamento']);
    $nome = ($_POST['nome']);
    $data = $_POST['data'];
    $aulas = ($_POST['aula']);

    $aulas1 = implode($aulas);

    $dispositivosString = implode($dispositivos);

    $dispositivosArray = explode(",", $dispositivosString);

    $matriz = [];
    
    $query = mysqli_query($conexao, "SELECT equipamento, aulas, dia FROM reservas1");
    
    if ($query->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($query)) {
            $array = [];
            $equipamento = explode(",", $user_data['equipamento']);
            array_push($array, $equipamento);
            array_push($matriz, $array);
        }

        
        foreach ($matriz as $linha) {
            if (array_intersect($linha[0], $dispositivosArray)) {
                $intersecao = array_intersect($linha[0], $dispositivosArray);
                $quantidade = count($intersecao);
                echo $quantidade . "<br>";
                for ($i = 0; $i < count($intersecao); $i++) {
                    if ($intersecao[$i] == "") {
                        $quantidade = count($intersecao) - 1;
                    } 
                }
                
                if ($quantidade !== 0) {
                    echo "opa, temos equipamentos iguais";
                }
            }
        }    
    }

    $maiorAula = max($aulas);
    $sqlTermino = mysqli_query($conexao, "SELECT termino FROM aulas WHERE aula='$maiorAula'");

    if ($sqlTermino->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($sqlTermino)) {
            $termino = $user_data['termino'];
            $termino1 = strval($termino);
        }    
    }    
    else {
        echo "Não foi possivel achar o termino da aula";
    }

    $result1 = mysqli_query($conexao, "INSERT INTO reservas1 (nome, equipamento, aulas, dia, termino) VALUES ('$nome', '$dispositivosString', '$aulas1', '$data', '$termino1')");

    if ($result1) {
        header("location: home.php");
    }
    else {
        echo "Algo de errado não está certo ;D";
    }   
     
}    