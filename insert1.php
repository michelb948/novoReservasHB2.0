<?php
include_once("config.php");

if (isset($_POST['submit'])) {
    
    $nome = ($_POST['nome']);
    $equipamento = ($_POST['equipamento']);
    $data = $_POST['data'];
    $aulas = ($_POST['aula']);

    echo $nome . "<br>";
    //-------------------------------------------------------------------------------------------
    $aulas1 = implode($aulas);
    $equipamento1 = implode($equipamento);

    $equipamentoArray = explode(",", $equipamento1);
    
    
    $matriz = [];
    //-------------------------------------------------------------------------------------------
    $iguais = mysqli_query($conexao, "SELECT equipamento, aulas, dia FROM reservas1");
    
    if ($iguais->num_rows > 0) {
        while ($user_dataIguais = mysqli_fetch_assoc($iguais)){
            $array = [];
            $equipamentoIguais = explode(",", $user_dataIguais['equipamento']);
            $aulasIguais = $user_dataIguais['aulas'];
            $diaIguais = $user_dataIguais['dia'];
            array_push($array, $equipamentoIguais);
            array_push($matriz, $array);
        }
        //print_r($matriz);
        echo "<br>" . "<br>" . "<br>";
        foreach ($matriz as $linha) {
            if (array_intersect($linha[0], $equipamentoArray)) {
                $intersecao = array_intersect($linha[0], $equipamentoArray);
                //print_r($intersecao);
                for ($i = 0; $i < count($intersecao); $i++) {
                    if ($intersecao[$i] == "") {
                        $quantidade = count($intersecao) - 1;
                    }
                }
                if ($quantidade !== 0) {
                    similar_text($aulasIguais, $aulas1, $porcentagem);
                    if ($porcentagem > 0) {
                        if ($data == $diaIguais) {
                            echo "Opa professor, parece que alguém já reservou este(s) mesmo(s) equipamento(s) para este mesmo horario neste dia";
                        }
                    }
                }
            }
        }
    }        
}        //-----------------------------------------------------------------------------------------
        
        
        
        /*
        $intersecao = array_intersect($equipamentoIguais, $equipamentoArray); 
        
            $contagem = array_count_values($intersecao);

            print_r($contagem);
            echo "<br>" . "<br>";
        //------------------------------------------------------------------------------------------
            
            if ($intersecao == true) {
                similar_text($aulas1, $aulasIguais, $porc1);
                if ($porc1 > 0) {
                    if ($data == $diaIguais) {
                        echo "Opa, sua reserva não pôde ser feita pois o mesmo equipamento foi reservado para os mesmos horários";
                    }
                }
            }
        //1º Else --------------------------------------------------------------------------
            //else 
            {
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

                //$result1 = mysqli_query($conexao, "INSERT INTO reservas1 (nome, equipamento, aulas, dia, termino) VALUES ('$nome', '$equipamento1', '$aulas1', '$data', '$termino1')");

                //if ($result1) {
                  //  header("location: home.php");
            //    }
                //else {
                  //  echo "Algo de errado não está certo ;D";
              //  }   
            } 
    }    
}
*/