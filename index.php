<?php

require_once 'vendor/autoload.php';

if (isset($_POST['ok'])) {

    $cliente = new \App\Controller\Github();
    $dados = $cliente->lista($_POST['pesquisar']);

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

