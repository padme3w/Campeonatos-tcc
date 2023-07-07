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
        
        <button data-text="Awesome" class="button">
            <a href="login.html"><span class="actual-text">&nbsp;Login&nbsp;</span></a>
            <a href="login.html"><span class="hover-text" aria-hidden="true">&nbsp;Login&nbsp;</span></a>
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
            <option value="branca">Branca</option>
            <option value="cinza">Cinza</option>
            <option value="colorida">Amarela/Laranja/Verde</option>
            <option value="azul">Azul</option>
            <option value="roxa">Roxa</option>
            <option value="marrom">Marrom</option>
            <option value="preta">Preta</option>
        </select>
    </label>

    <label>
        <b>Gênero:</b>  
        <select name="genero" id="">
            <option value=""></option>
            <option value="feminino">Feminino</option>
            <option value="masculino">Masculino</option>
        </select>
    </label>

    <label>
        <b>Idade:</b> 
        <select name="idade" id="">
            <option value=""></option>
            <option value="pre-mirim">Pré-mirim</option>
            <option value="mirim">Mirim</option>
            <option value="infantil">Infantil</option>
            <option value="infanto-juvenil">Infanto-juvenil</option>
            <option value="juvenil">Juvenil</option>
            <option value="adulto">Adulto</option>
            <option value="master">Master</option>
        </select> 
    </label>

    <label>
        <b>Peso:</b>
        <select name="peso" id="">
            <option value=""></option>
            <option value="galo">Galo</option>
            <option value="pluma">Pluma</option>
            <option value="pena">Pena</option>
            <option value="leve">Leve</option>
            <option value="medio">Médio</option>
            <option value="meio-pesado">Meio-pesado</option>
            <option value="pesado">Pesado</option>
            <option value="super-pesado">Super-pesado</option>
            <option value="pesadissimo">Pesadíssimo</option>
        </select>
    </label>

    <button type="submit" name="submit"class='save'>
        <span>Salvar</span>
    </button>

    </form>
</body>
</html>