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

    // Exibição do nome da categoria na página
    print ('<h1>Chave: ' . $graduacao . '-' . $genero . '-' . $idade . '-' . $peso .'</h1>');

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
        echo '<div>' . $chave['participante1'] . '<div>';
        echo '<div>' . $chave['participante2'] . '<div>';
    }

    ?>

</body>
</html>
