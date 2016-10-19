<?php
require_once 'vendor/autoload.php';

/*$teste = new \App\Controller\Teste();

$teste->ola();*/


if (isset($_GET['user'])) {

    $cliente = new \App\Controller\Github();
    $repositories = $cliente->detalhes($_GET['user']);

    //var_dump($repositories);
    $dados = $repositories[0];
    // $client = new \Github\Client();

    // $repositories = $client->api('user')->repositories($_GET['user']);
    // //echo  $_GET['nome']
    // $dados = $repositories[0];
    // //echo $_GET['id'];
    // //echo $dados["owner"]["avatar_url"];
    // echo "<pre>";
    // //var_dump($repositories);
    // var_dump($dados);


    // // NOME DO USUARIO
    //echo $dados["owner"]["html_url"];

    require_once 'App/View/cabecalho.html';
}
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
            // PROJETOS

            //echo '<a href=""><span class="projeto">'.$r["html_url"].'</span></a>';
        }
        ?>
            
    </div>
<?php
    require_once 'App/View/rodape.html'
    ?>
