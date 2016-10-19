<?php

require_once 'vendor/autoload.php';

if (isset($_GET['user'])) {

    $cliente = new \App\Controller\Github();
    $repositories = $cliente->detalhes($_GET['user']);

    $dados = $repositories[0];

    require_once 'App/View/cabecalho.html';}
?>

<div><img src="<?=$dados["owner"]["avatar_url"]; ?>" alt=""></div>
<p><?=$_GET['nome']?></p>

    <p>Repositórios</p>

    <?php
    foreach ($repositories as $r) {
    ?>
    <div class="dados">
    
        <a href="<?=$r["html_url"]?>"><span class="projeto"><?=$r["html_url"]?></span></a>
    <?php
    }
    ?>
            
    </div>
<?php
require_once 'App/View/rodape.html';