<?php

include_once('config.php');

if (!empty($_GET['search'])) {

    $data = $_GET['search'];
    $sql = "SELECT nome, equipe FROM inscritos";
    if ($graduacao != null && $genero != null && $idade != null && $peso != null) {
        $sql.=  " WHERE graduacao = :graduacao AND genero = :genero AND idade = :idade AND peso = :peso";
    } 

    $stmt = $conexao->prepare($sql);
        if ($stmt == false){
            $conexao->showError($sql);
        }
        if ($graduacao == null && $genero == null && $idade == null && $peso == null) {
            $stmt->execute([]);
        } else {
            $stmt->execute([':graduacao' -> $graduacao && ':genero' -> $genero && ':idade' -> $idade && ':peso' -> $peso]);
        }
        
        $list = [];

        while ($user_data = $result->fetch_assoc()) {
            array_push($list,$user_data);
        }

        return $list;

    $stmt = $conexao->prepare($sql);

    if (!empty($_GET['graduacao']) && !empty($_GET['genero']) && !empty($_GET['idade']) && !empty($_GET['peso'])) {
        $graduacao = $_GET['graduacao'];
        $genero = $_GET['genero'];
        $idade = $_GET['idade'];
        $peso = $_GET['peso'];

        $stmt->bind_param("ssss", $graduacao, $genero, $idade, $peso);
    }
} else {
    $sql = "SELECT nome, equipe FROM inscritos ORDER BY id DESC";
    $stmt = $conexao->prepare($sql);
}

$stmt->execute();
$result = $stmt->get_result();

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

    <form method='GET' action='search'>
        <div class="selects">
            <label class='cat'>
                <b>Graduação</b>
                <select name="graduacao" id="graduacao">
                    <?php
                    foreach($graduacao as $user_data){
                        _v($_GET,"graduacao") == $user_data['graduacao'] ? $selected='selected' : $selected='';
                        print "<option value='{$user_data['graduacao']}' $selected>{$user_data['graduacao']}</option>";
                    }
                    ?>
                    <!--<option value=""></option>
                    <option value="branca">Branca</option>
                    <option value="cinza">Cinza</option>
                    <option value="colorida">Amarela/Laranja/Verde</option>
                    <option value="azul">Azul</option>
                    <option value="roxa">Roxa</option>
                    <option value="marrom">Marrom</option>
                    <option value="preta">Preta</option>-->
                </select>
            </label>

            <label class='cat'>
                <b>Gênero</b>
                <select name="genero" id="genero">
                    <?php
                    foreach($genero as $user_data){
                        _v($_GET,"genero") == $user_data['genero'] ? $selected='selected' : $selected='';
                        print "<option value='{$user_data['genero']}' $selected>{$user_data['genero']}</option>";
                    }
                    ?>
                    <!--<option value=""></option>
                    <option value="feminino">Feminino</option>
                    <option value="masculino">Masculino</option>-->
                </select>
            </label>

            <label class='cat'>
                <b>Idade</b>
                <select name="idade" id="idade">
                    <?php
                    foreach($idade as $user_data){
                        _v($_GET,"idade") == $user_data['idade'] ? $selected='selected' : $selected='';
                        print "<option value='{$user_data['idade']}' $selected>{$user_data['idade']}</option>";
                    }
                    ?>
                    <!--<option value=""></option>
                    <option value="pre-mirim">Pré-mirim</option>
                    <option value="mirim">Mirim</option>
                    <option value="infantil">Infantil</option>
                    <option value="infanto-juvenil">Infanto-juvenil</option>
                    <option value="juvenil">Juvenil</option>
                    <option value="adulto">Adulto</option>
                    <option value="master">Master</option>-->
                </select>
            </label>

            <label class='cat'>
                <b>Peso</b>
                <select name="peso" id="peso">
                    <option value=""></option>
                    <?php
                    foreach($peso as $user_data){
                        _v($_GET,"peso") == $user_data['peso'] ? $selected='selected' : $selected='';
                        print "<option value='{$user_data['peso']}' $selected>{$user_data['peso']}</option>";
                    }
                    ?>
                    <!--<option value=""></option>
                    <option value="galo">Galo</option>
                    <option value="pluma">Pluma</option>
                    <option value="pena">Pena</option>
                    <option value="leve">Leve</option>
                    <option value="medio">Médio</option>
                    <option value="meio-pesado">Meio-pesado</option>
                    <option value="pesado">Pesado</option>
                    <option value="super-pesado">Super-pesado</option>
                    <option value="pesadissimo">Pesadíssimo</option>-->
                </select>
            </label>
        </div>

        <div class="botoe" >
            <button type="submit" class='btn-search botoes'>Buscar</button>
        </div>
    </form>

    <table class="table">
        <tr class="dados">
            <th>Nome</th>
            <th>Equipe</th>
        </tr>

        <?php

            while ($user_data = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$user_data['nome']."</td>";
                echo "<td>".$user_data['equipe']."</td>";
                echo "</tr>";
            }
            
        ?>
    </table>
</body>
</html>
