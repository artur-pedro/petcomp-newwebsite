<?php
	require_once('conexao.php');
    if(!isset($_GET['id'])){
        
        //No servidor usar essa:
        /*
        $URL="http://observatoriodesaudemental.com.br/v2/Observatorio-SaudeMental/ListaNoticias.php";
        echo "<script type='text/javascript'>document.location.href='{$URL}';</script>";
        echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $URL . '">';
        */
        die();
        
        //No localhost usar essa:
        // header('Location: ListaNoticias.php');
        // die();
    }else{

    $id = $_GET['id'];
    mysqli_select_db($mysqli, $bd) or die("Could not select database");	
    $query = "SELECT * FROM `noticias` WHERE `id` = " . $id;
    $queryBotoes = "SELECT * FROM `noticias_botoes` WHERE `idNoticia` = " . $id;
    
    $result = mysqli_query($mysqli, $query);
    $row = mysqli_fetch_array($result);

    $resultBotoes = mysqli_query($mysqli, $queryBotoes);
    $row_Botoes = mysqli_num_rows($resultBotoes);
    
    $Titulo = $row['titulo'];
    $Texto = preg_split("/(\r\n){2,}/", $row['texto']);

    $Imagem = $row['foto'];
    $imagens = explode("|", $Imagem, 2);

    if($row){

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> <?php echo $Titulo ?> | PETComp</title>
  
  <link rel="icon" href="./assets/images/logos/PETComp.png">

  <link rel="stylesheet" href="./styles/noticias.css">
  <link rel="stylesheet" href="./styles/styles.css">
  <link rel="stylesheet" href="./styles/styles2.css">
  <link rel="stylesheet" href="./styles/noticiaespecifica.css">
  <link rel="stylesheet" href="./styles/trabalhos_publicados.css">
  


  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<?php 
  include('header.php');
?>

<body>
  <main class="fade">
    <section class="container">
      <div class="noticia-especifica">
        <h1 class="titulo-noticia"><?php print_r($Titulo) ?></h1>
        <div class="img_noticias">
          <?php foreach($imagens as $image):?>
            <img class="img-noticia" src="<?php print_r($image) ?>" alt="">
          <?php endforeach?>
        </div>
        <?php foreach($Texto as $paragrafo){ ?>
          <p class="texto-noticia-esp">
            <?php echo  $paragrafo;?>
          </p>
        <?php  } ?>
      </div>
      <div class="noticia-especifica-botoes">
        <?php 
          if($row_Botoes){
      
            for($i = 0;$i<$row_Botoes;$i++){
              $botoes = mysqli_fetch_array($resultBotoes);
              $botaoNome = $botoes['botaoNome'];
              $botaoLink = $botoes['botaoLink']; 
             ?>
            <a class="botaoGenerico" target="_blank" href="<?php echo $botaoLink?>">
              <?php echo $botaoNome; ?>
            </a>
          <?php } 
          }?>
          
      </div>
      <div class="voltar" style="">
        <a href="./noticias.php">
        <button class="button-back">
          Voltar
        </button></a>
      </div>

    </section>
  </main>
</body>

<script src="./scripts/script.js"></script>
<?php
      }
    }
?>

