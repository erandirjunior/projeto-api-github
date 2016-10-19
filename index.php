<?php

//https://github.com/KnpLabs/php-github-api
//https://github.com/KnpLabs/php-github-api/tree/master/doc

require_once 'vendor/autoload.php';


//$teste = new \App\Controller\Github();

if (isset($_POST['ok'])) {

    // $client = new \Github\Client();
    // $repositories = $client->api('user')->find($_POST['pesquisar']);
    // $dados = $repositories["users"];

    $cliente = new \App\Controller\Github();
    $dados = $cliente->lista($_POST['pesquisar']);
    //var_dump($dados);


    //$repositories = $client->api('user')->repositories('junior');
    //echo "<pre>";
    //var_dump($t);
    //print_r($repositories);
    //var_dump($repositories);
//var_dump($repositories["name"]);
}

require_once'App/View/cabecalho.html';
?>

<form action="" method="post">
    <label for="pesquisar">Digite o Usuário</label>
    <input type="text" class="text" name="pesquisar">

    <input type="submit" class="btn" name="ok" value="Pesquisar">
</form>
    

<?php
if (isset($dados)) { ?>
<?php
    foreach ($dados as $d) {
?>
        <span class="design"><a href="detalhes.php?user=<?=$d["username"]?>&nome=<?=$d["name"]?>"><?=$d["name"]?></a></span>
<?php 
    } ?>
<?php
}

require_once 'App/View/rodape.html';

