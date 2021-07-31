<?php
    
    if(isset($_POST['submit']))
    {
       include_once('config.php');

       $nome = $_POST['nome'];
       $genero = $_POST['genero'];
       $classIndicativa = $_POST['classIndicativa'];
       $plataforma = $_POST['plataforma'];
       $idioma = $_POST['idioma'];
       
        $result = mysqli_query($conexao, "INSERT INTO cadastro(nome, genero, classIndicativa,plataforma,idioma) VALUES ('$nome','$genero','$classIndicativa','$plataforma','$idioma')");
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap" rel="stylesheet">
    <title>Formulário Gamer</title>
</head>
<body>
    <header>
        <nav>
            <a class="logo" href="form.php">A & J</a>
            <ul class="nav-list">
                <li><a href="form.php">Início</a></li>
                <li><a href="form.php">Ranking</a></li>
                <li><a href="form.php">Contato</a></li>
                <li><a href="form.php">Sobre</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <div class="box">
            <form action="form.php" method="POST">
                <fieldset>
                    <legend><b>Formulário Gamer</b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="nome" id="labelNome" class="inputUser">
                        <label for="nome" class="labelInput">Nome do jogo</label>
                    </div>
                    <br>
                    <div class="select">
                    <!-- <label for="nome">Gênero</label> -->
                        <select name="genero" id="genero" class="inputUser" required>
                            <option selected disabled value="">Escolha o Gênero</option>
                            <option value="fps">FPS</option>
                            <option value="rpg">RPG</option>
                            <option value="moba">Moba</option>
                            <option value="mmo">MMO</option>
                            <option value="arcade">Arcade</option>
                            <option value="indie">Indie</option>
                            <option value="esportes">Esportes</option>
                            <option value="casual">Casual</option>
                            <option value="simulacao">Simulação</option>
                            <option value="corrida">Corrida</option>
                            <option value="estrategia">Estratégia</option>
                            <option value="aventura">Aventura</option>
                            <option value="musica">Música</option>
                        </select>
                    </div>
                        <br>
                        
                    <div class="inputBox">
                        <label for="nome" class="labelModoJogo"><center>Modo de jogo</center></label> 
                        <br>
                    <div class="checkboxs"> 
                        <input type="checkbox" name="umJogador" id="checkbox1" class="inputUser">
                        <label for="checkbox1" id="opcao">Um jogador</label>
                        <br>
                        <input type="checkbox" name="cooperativo" id="checkbox2" class="inputUser">
                        <label for="checkbox2"id="opcao">Cooperativo</label> 
                        <br>
                        <input type="checkbox" name="multiJogador" id="checkbox3" class="inputUser">
                        <label for="checkbox3" id="opcao">Multijogador</label>
                        <br>
                        <input type="checkbox" name="multiPlataforma" id="checkbox4" class="inputUser">
                        <label for="checkbox4" id="opcao">Multiplataforma</label>
                        <br>
                        <input type="checkbox" name="realidadeVirtual" id="checkbox5" class="inputUser">
                        <label for="checkbox5" id="opcao">Realidade Virtual</label>
                        </div>
                    </div>
                    <br>
                        
                    <div class="select">
                        <select name="classIndicativa" id="classIndicativa" class="inputUser" required>
                            <option selected disabled value="">Classificação</option>
                            <option value="livre">Livre</option>
                            <option value="10">10</option>
                            <option value="12">12</option>
                            <option value="14">14</option>
                            <option value="16">16</option>
                            <option value="18">18</option>
                        </select>
                    </div>
                        <br>
                        
                    <div class="select">
                        <select name="plataforma" id="plataforma" class="inputUser" required>
                            <option selected disabled value="">Plataforma</option>
                            <option value="xbox">Xbox</option>
                            <option value="playstation">Playstation</option>
                            <option value="computador">Computador</option>
                            <option value="nitendo">Nitendo</option>
                            <option value="mobile">Mobile</option>
                        </select>
                    </div>
                        <br>
                        
                    <div class="select">
                        <select name="idioma" id="idioma" class="inputUser" required>
                            <option selected disabled value="">Idioma</option>
                            <option value="ptbr">Português (Brasil)</option>
                            <option value="pt">Português (Portugal)</option>
                            <option value="en">Inglês</option>
                            <option value="es">Espanhol</option>
                            <option value="cn">Chinês</option>
                        </select>
                    </div>
                        <br> <br>
                    <input type="submit" name="submit" id="submit">

                    </fieldset>
            </form>
        </div>

        <!-- <script>
            document.getElementById('labelNome').focus() = ''

            function limpar()
            {
                document.getElementById('labelNome').value = ''
                // document.getElementById('inputUser').value = ''


                document.getElementById('labelNome').focus()
            }
        </script> -->
    </main>
    

</body>
</html>