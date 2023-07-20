<?php
include_once('config.php');

if (isset($_POST['graduacao']) && isset($_POST['genero']) && isset($_POST['idade']) && isset($_POST['peso'])) {
    // Categoria dos atletas que você deseja buscar
    $graduacao = $_POST['graduacao'];
    $genero = $_POST['genero'];
    $idade = $_POST['idade'];
    $peso = $_POST['peso'];

    // Consulta para obter os nomes dos atletas na categoria desejada
    $sql = "SELECT nome, equipe FROM inscritos WHERE graduacao = '$graduacao' AND genero = '$genero' AND idade = '$idade' AND peso = '$peso'";

    // Executa a consulta no banco de dados
    $result = $conexao->query($sql);

    // Verificação de erros na consulta
    if (!$result) {
        die("Erro na consulta ao banco de dados " . $conexao->error);
    }

    // Array para armazenar os nomes dos atletas
    $atletas = array();

    // Armazena os nomes dos atletas no array
    while ($row = $result->fetch_assoc()) {
        $atletas[] = $row['nome'];
    }

    // Embaralha os nomes dos atletas
    shuffle($atletas);

    // Função para criar o chaveamento de acordo com o número de participantes
    function criarChaveamento($atletas)
    {
        $chaveamento = array();
        $numParticipantes = count($atletas);

        // Criação das chaves
        for ($i = 0; $i < $numParticipantes; $i += 2) {
            $chaveamento[] = array(
                "participante1" => $atletas[$i],
                "participante2" => $atletas[$i + 1] ?? "" // Caso o número de atletas seja ímpar
            );
        }

        return $chaveamento;
    }

    // Criação do chaveamento
    $chaveamento = criarChaveamento($atletas);

    // Exibição do chaveamento em uma tabela HTML
    print ('<html>
    <body>
        <h1>Chave: ' . $graduacao . '-' . $genero . '-' . $idade . '-' . $peso .'</h1>');

    // Fechando a conexão com o banco de dados
    $conexao->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
            <button type="submit" class='btn-search botoes'>Gerar chave</button>
        </div>
    </form>

    <?php

    foreach ($chaveamento as $chave) {
        echo $chave['participante1'] . '<hr>';
        echo $chave['participante2'] . '<hr>';
    }

    ?>

</body>
</html>

<!--DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaveamento de Campeonato de Jiu-Jitsu</title>
    <style>
        /* Estilos CSS para a tabela do chaveamento */
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Chaveamento de Campeonato de Jiu-Jitsu</h1>
    <table>
        <tr>
            <th>Round 1</th>
            <th>Round 2</th>
            <th>Vencedor</th>
        </tr>
        <tr>
            <td>Participante 1</td>
            <td rowspan="2">Vencedor 1</td>
            <td rowspan="4">Campeão</td>
        </tr>
        <tr>
            <td>Participante 2</td>
        </tr>
        <tr>
            <td>Participante 3</td>
            <td rowspan="2">Vencedor 2</td>
        </tr>
        <tr>
            <td>Participante 4</td>
        </tr>
        <tr>
            <td>Participante 5</td>
            <td rowspan="2">Vencedor 3</td>
        </tr>
        <tr>
            <td>Participante 6</td>
        </tr>
        <tr>
            <td>Participante 7</td>
            <td rowspan="2">Vencedor 4</td>
        </tr>
        <tr>
            <td>Participante 8</td>
        </tr>
    </table>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chave</title>

    <link rel="stylesheet" href="css/chave.css">
</head>
<body>
    <section class="ladoA">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
    </section>

    <section class="ladoB">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
        <input type="text">
    </section>
</body>
</html>