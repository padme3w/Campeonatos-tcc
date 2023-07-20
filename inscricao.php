<?php

    if(isset($_POST['submit'])) {
    
        include_once('config.php');

        $nome = ($_POST['nome']);
        $email = ($_POST['email']);
        $telefone = ($_POST['telefone']);
        $equipe = ($_POST['equipe']);
        $professor = ($_POST['professor']);
        $graduacao = ($_POST['graduacao']);
        $genero = ($_POST['genero']);
        $idade = ($_POST['idade']);
        $peso = ($_POST['peso']);

        $result = mysqli_query($conexao, "INSERT INTO inscritos 
            (nome,email,telefone,equipe,professor,graduacao,genero,idade,peso) 
            VALUES ('$nome','$email','$telefone','$equipe','$professor','$graduacao','$genero','$idade','$peso')");     

    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Champs</title>

    <link rel="stylesheet" href="css/inscricao.css"/>
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

    </header>

    <form method='POST' action='inscricao.php'>
       
    <label>
        <b>Nome:</b>  
        <input type="text" name="nome">
    </label>

    <label>
        <b>Email:</b>  
        <input type="email" name="email">
    </label>

    <label>
        <b>Telefone:</b>  
        <input type="tel" name="telefone">
    </label>

    <label>
        <b>Equipe:</b>  
        <input type="text" name="equipe">
    </label>

    <label>
        <b>Professor:</b>  
        <input type="text" name="professor">
    </label>

    <label>
        <b>Graduação:</b>  
        <select name="graduacao" id="">
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

    <label>
        <b>Gênero:</b>  
        <select name="genero" id="">
            <option value=""></option>
            <option value="Feminino">Feminino</option>
            <option value="Masculino">Masculino</option>
        </select>
    </label>

    <label>
        <b>Idade:</b> 
        <select name="idade" id="">
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

    <label>
        <b>Peso:</b>
        <select name="peso" id="">
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

    <button type="submit" name="submit"class='save'>
        <span>Salvar</span>
    </button>

    </form>
</body>
</html>