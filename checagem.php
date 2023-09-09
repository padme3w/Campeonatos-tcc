<?php 

    include_once('config.php');

    
    if(isset($_POST['graduacao']) && isset($_POST['genero']) && isset($_POST['idade']) && isset($_POST['peso'])) {
        // Obtém os valores dos campos do formulário
        $graduacao = $_POST['graduacao'];
        $genero = $_POST['genero'];
        $idade = $_POST['idade'];
        $peso = $_POST['peso'];
    
        // Prepara a consulta SQL
        $sql = "SELECT nome, equipe FROM inscritos WHERE graduacao = '$graduacao' AND genero = '$genero' AND idade = '$idade' AND peso = '$peso'";
    
        // Executa a consulta no banco de dados
        $result = $conexao->query($sql);
    
        // Verifica se a consulta retornou algum resultado
        
    
        // Fecha a conexão com o banco de dados
        $conexao->close();
    }
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checagem</title>
    <link rel="stylesheet" href="css/checagem.css">
</head>

<body>
    <header>
        <button data-text="Awesome" class="button">
            <a href="info.html"><span class="actual-text">&nbsp;Voltar&nbsp;</span></a>
            <a href="info.html"><span class="hover-text" aria-hidden="true">&nbsp;Voltar&nbsp;</span></a>
        </button>

        <button data-text="Awesome" class="button">
            <a href="https://cbjj.com.br/books-videos"><span class="actual-text">&nbsp;Regras&nbsp;</span></a>
            <a href="https://cbjj.com.br/books-videos"><span class="hover-text" aria-hidden="true">&nbsp;Regras&nbsp;</span></a>
        </button>

        <button data-text="Awesome" class="button">
            <a href="login.html"><span class="actual-text">&nbsp;Login&nbsp;</span></a>
            <a href="login.html"><span class="hover-text" aria-hidden="true">&nbsp;Login&nbsp;</span></a>
        </button>
    </header>

    <form method='POST' action= "">
        <div class="selects">
            <label class='cat' for="graduacao">
                <b>Graduação</b>
                <select name="graduacao">
                    <option value=""></option>
                    <option value="Branca">Branca</option>
                    <option value="Cinza">Cinza</option>
                    <option value="Colorida">Colorida</option>
                    <option value="Azul">Azul</option>
                    <option value="Roxa">Roxa</option>
                    <option value="Marrom">Marrom</option>
                    <option value="Preta">Preta</option>
                </select>
            </label>

            <label class='cat' for="genero">
                <b>Gênero</b>
                <select name="genero">
                    <option value=""></option>
                    <option value="Feminino">Feminino</option>
                    <option value="Masculino">Masculino</option>
                </select>
            </label>

            <label class='cat' for="idade">
                <b>Idade</b>
                <select name="idade">
                    <option value=""></option>
                    <option value="Pré-mirim">Pré-mirim</option>
                    <option value="Mirim">Mirim</option>
                    <option value="Infantil">Infantil</option>
                    <option value="Infanto-juvenil">Infanto-juvenil</option>
                    <option value="Juvenil">Juvenil</option>
                    <option value="Adulto">Adulto</option>
                    <option value="Master">Master</option>
                </select>
            </label>

            <label class='cat' for="peso">
                <b>Peso</b>
                <select name="peso">
                    <option value=""></option>
                    <option value="Galo">Galo</option>
                    <option value="Pluma">Pluma</option>
                    <option value="Pena">Pena</option>
                    <option value="Leve">Leve</option>
                    <option value="Médio">Médio</option>
                    <option value="Meio-pesado">Meio-pesado</option>
                    <option value="Pesado">Pesado</option>
                    <option value="Super-pesado">Super-pesado</option>
                    <option value="Pesadissimo">Pesadíssimo</option>
                </select>
            </label>
        </div>

        <div class="botoe" >
            <button type="submit" class='btn-search botoes'>Checagem</button>
        </div>
    </form>

    <table class="table">
        <tr class="dados">
            <th>Nome</th>
            <th>Equipe</th>
        </tr>

        <?php
        if (!isset($result)) {
            $result = null;
        }

        if ($result !== null && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                print("<tr>
                        <td>" . $row['nome'] . "</td>
                        <td>" . $row['equipe'] . "</td>
                    </tr>");
            }
        } else {
            print("");
        }
        ?>
    </table>
</body>
</html>
