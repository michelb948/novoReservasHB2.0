<?php

if (!empty($_GET['id'])) {
    
    include_once ("config.php");
    
    $id = $_GET['id'];

    $sqlSelect = "SELECT * FROM reservas1 WHERE id=$id";
 
    $result = $conexao->query($sqlSelect);

    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {
            $nome = $user_data['nome'];
            $equipamento = $user_data['equipamento'];
            $aulas = $user_data['aulas'];
            $dia = $user_data['dia'];
        }
           
    }

}

else {
    header("location: home.php");
}

?>
<?php
session_start();

if(!isset($_SESSION['nome']) == true) 
{
    unset($_SESSION['nome']);
    header("location: ../index.html");
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservar</title>
    <link rel="stylesheet" href="reser/reserv.css">
</head>

<body>
    <div class="container">

        
    </div>
    <div class="page">
        <form action="saveEdit.php" method="POST" class="formLogin"  onsubmit="return validarData()">
            <h1>Requerimento de Equipamentos</h1>
            <p>Selecione abaixo as aulas desejadas:</p>
            <div class="grid-container">
                <div class="grid-item">
                    <input type="checkbox" id="aula1" name="aula[]" value="1" <?php echo preg_match("/1/", $aulas) == true ? "checked" : ""  ?>>
                    <label for="aula1">Aula 1</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="aula2" name="aula[]" value="2" <?php echo preg_match("/2/", $aulas) == true ? "checked" : "" ?>>
                    <label for="aula2">Aula 2</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="aula3" name="aula[]" value="3" <?php echo preg_match("/3/", $aulas) == true ? "checked" : ""?>>
                    <label for="aula3">Aula 3</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="aula4" name="aula[]" value="4" <?php echo preg_match("/4/", $aulas) == true ? "checked" : "" ?>>
                    <label for="aula4">Aula 4</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="aula5" name="aula[]" value="5" <?php echo preg_match("/5/", $aulas) == true ? "checked" : "" ?>>
                    <label for="aula5">Aula 5</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="aula6" name="aula[]" value="6" <?php echo preg_match("/6/", $aulas) == true ? "checked" : "" ?>>
                    <label for="aula6">Aula 6</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="aula7" name="aula[]" value="7" <?php echo preg_match("/7/", $aulas) == true ? "checked" : "" ?>>
                    <label for="aula7">Aula 7</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="aula8" name="aula[]" value="8" <?php echo preg_match("/8/", $aulas) == true ? "checked" : "" ?>>
                    <label for="aula8">Aula 8</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="aula9" name="aula[]" value="9" <?php echo preg_match("/9/", $aulas) == true ? "checked" : "" ?>>
                    <label for="aula9">Aula 9</label>
                </div>
            
            </div>

            
            <!--caixa de seleção nome dos professores-->
            <?php
            include_once("config.php");

            $nome = $_SESSION['nome'];

            $query = "SELECT * FROM professores WHERE nome='$nome'";

            $result = $conexao->query($query);

            if ($result->num_rows > 0) 
            {
                while ($user_data = mysqli_fetch_assoc($result)) {
                    $professor = $user_data['nome'];
                }
            }

            echo "<select name='nome'> 
                    <option value=$nome> $nome </option> 
                    
                    <option value='Francisco Adalcélio Borges Pimenta'>Francisco Adalcélio Borges Pimenta</option>
                    
                    <option value='Aleks Roque Alexandre da Silva'>Aleks Roque Alexandre da Silva</option>

                    <option value='Lara Severo Vieira'>Lara Severo Vieira</option>

                    <option value='Kelly Lara do Nascimento Sousa'>Kelly Lara do Nascimento Sousa</option>

                    <option value='Sara Ribeiro dos Santos'>Sara Ribeiro dos Santos</option>

                    <option value='Juan Erick Barbosa de Farias'>Juan Erick Barbosa de Farias</option>

                    <option value='Matheus dos santos Albuquerque'>Matheus dos santos Albuquerque</option>

                    <option value='Napoleão Evangelista Pereira da Silva'>Napoleão Evangelista Pereira da Silva
                    </option>

                    <option value='Lidiane Gondim Barros'>Lidiane Gondim Barros</option>
                  </select>";
            ?>
            <!--Fim da caixa de seleção com o nome dos professores-->

            <!--Caixa de seleção dos equipamentos-->
            </select>
            <hr>
            <label for="Equipamentolabel">Escolha seus equipamentos</label>
            <br>
            <label for="projetor">Projetor</label>

            <div class="projetor" style="margin-right: 100%;">
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="projetor 1" <?php echo preg_match("/projetor 1/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">1</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="projetor 2" <?php echo preg_match("/projetor 2/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">2</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="projetor 3" <?php echo preg_match("/projetor 3/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">3</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="projetor 4" <?php echo preg_match("/projetor 4/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">4</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="projetor 5" <?php echo preg_match("/projetor 5/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">5</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="projetor 6" <?php echo preg_match("/projetor 6/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">6</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="projetor 7" <?php echo preg_match("/projetor 7/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">7</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="projetor 8" <?php echo preg_match("/projetor 8/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">8</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="projetor 9" <?php echo preg_match("/projetor 9/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">9</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="projetor 10" <?php echo preg_match("/projetor 10/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">10</label>
                </div>
            </div>     

            <label for="Roteador">Roteador</label>
            <div class="roteador">
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="roteador 1" <?php echo preg_match("/roteador 1/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">1</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="roteador 2" <?php echo preg_match("/roteador 2/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">2</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="roteador 3" <?php echo preg_match("/roteador 3/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">3</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="roteador 4" <?php echo preg_match("/roteador 4/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">4</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="roteador 5" <?php echo preg_match("/roteador 5/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">5</label>
                </div>
            </div>

            <label for="">Notebook</label>
            <div class="notebook">
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="notebook 1" <?php echo preg_match("/notebook 1/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">1</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="notebook 2" <?php echo preg_match("/notebook 2/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">2</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="notebook 3" <?php echo preg_match("/notebook 3/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">3</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="notebook 4" <?php echo preg_match("/notebook 4/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">4</label>
                </div>
            </div>

            <label for="">Caixa de som</label>
            <div class="caixa-de-som">
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="caixa de som 1" <?php echo preg_match("/caixa de som 1/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">1</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="caixa de som 2" <?php echo preg_match("/caixa de som 2/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">2</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="caixa de som 3" <?php echo preg_match("/caixa de som 3/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">3</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="caixa de som 4" <?php echo preg_match("/caixa de som 4/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">4</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="caixa de som 5" <?php echo preg_match("/caixa de som 5/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">5</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="caixa de som 6" <?php echo preg_match("/caixa de som 6/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">6</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="caixa de som 7" <?php echo preg_match("/caixa de som 7/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">7</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="caixa de som 8" <?php echo preg_match("/caixa de som 8/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">8</label>
                </div>
            </div>

            <label for="">Cabo P2 P10</label>

            <div class="Cabo-p2-p10">
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="cabo p2 p10 1" <?php echo preg_match("/cabo p2 p10 1/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">1</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="cabo p2 p10 2" <?php echo preg_match("/cabo p2 p10 2/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">2</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="cabo p2 p10 3" <?php echo preg_match("/cabo p2 p10 3/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">3</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="cabo p2 p10 4" <?php echo preg_match("/cabo p2 p10 4/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">4</label>
                </div>
                
            </div>

            <label for="">Cabo HDMI</label>

            <div class="cabo-HDMI">
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="cabo HDMI 1" <?php echo preg_match("/cabo HDMI 1/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">1</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="cabo HDMI 2" <?php echo preg_match("/cabo HDMI 2/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">2</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="cabo HDMI 3" <?php echo preg_match("/cabo HDMI 3/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">3</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="cabo HDMI 4" <?php echo preg_match("/cabo HDMI 4/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">4</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="cabo HDMI 5" <?php echo preg_match("/cabo HDMI 5/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">5</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="cabo HDMI 6" <?php echo preg_match("/cabo HDMI 6/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">6</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="cabo HDMI 7" <?php echo preg_match("/cabo HDMI 7/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">7</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="cabo HDMI 8" <?php echo preg_match("/cabo HDMI 8/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">8</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="cabo HDMI 9" <?php echo preg_match("/cabo HDMI 9/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">9</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="cabo HDMI 10" <?php echo preg_match("/cabo HDMI 10/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">10</label>
                </div>
            </div>

            <div class="cabo audio">
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="cabo audio 1" <?php echo preg_match("/cabo audio 1/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">1</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="cabo audio 2" <?php preg_match("/cabo audio 2/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">2</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="cabo audio 3" <?php preg_match("/cabo audio 3/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">3</label>
                </div>
                
            </div>

            <label for="">Extensão</label>
            <div class="Extensão">
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="extensão 1" <?php echo preg_match("/Extensão 1/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">1</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="extensão 2" <?php echo preg_match("/Extensão 2/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">2</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="extensão 3" <?php echo preg_match("/Extensão 3/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">3</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="extensão 4" <?php echo preg_match("/Extensão 4/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">4</label>
                </div>
                <div class="grid-item">
                    <input type="checkbox" id="" name="equipamento[]" value="extensão 5" <?php echo preg_match("/Extensão 5/", $equipamento) == true ? "checked" : "" ?>>
                    <label for="">5</label>
                
            </div>

            <hr>
            <label for="data">Selecione a data:</label>
            <input type="date" id="data" name="dia" value="<?php echo $dia ?>" required>

            <input type="hidden" name="id" value="<?php echo $id ?>">
            <input type="submit" name="update" value="Atualizar" class="btn">
        </form>
        
        <button><a href="home.php">Voltar</a></button>
        
    </div>
    <script src="reserv.js"></script>
    

</body>
</html>

<?php
