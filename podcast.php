<!DOCTYPE html>
<html lang="pt-BR">
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Podcast </title>

  <link rel="icon" href="./assets/images/logos/PETComp.png">

  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Mada:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/globals.css">

  <link rel="stylesheet" href="css/podcast.css">

</head>

<body>
    <?php include('header.php') ?>
    <main>
        <div class= "main-box">
            <h1>PODComp</h1>
            <h2>O PODCast do PETComp</h2>
            <div class = "path-text">
                <a href="#" class="acess-link"> Pagina Inicial -> </a>
                <h4> Eventos </h4>
            </div>
        </div>
        <div class = "textos">
            <h4 id = "t">Com a vinda da pandemia do Covid-19, o grupo teve algumas de suas atividades de Extensão suspensas 
                devido aos protocolos de segurança indicados pela OMS. Pensando nisso, propusemos uma solução que conseguiria 
                alcançar nosso público tanto no âmbito acadêmico, quanto fora dela, na comunidade. Surgiu então, a ideia da criação 
                de um Podcast já que é uma mídia que tem notório crescimento no número de consumidores nos últimos anos, fazendo com 
                que se tornasse uma solução para o distanciamento social, prezado durante a pandemia. Tem-se como público alvo não 
                apenas aqueles que estão inseridos no contexto do grupo, mas sim para quem tem o interesse por tecnologia e também
                quem busca entender mais sobre essa área. Assim, buscamos fazer a sintetização de informações, levando-as de forma 
                clara, atrativa e confiável.
            </h4>
        </div>
        <div class = "infos"> 
            <div class = "texts">
                <h2>
                    Dicas
                </h2>

                <h2 class= "with-bord">
                    Recomendações
                </h2>

                <h2>
                    Notícias
                </h2>

                <h2 class= "with-bord">
                    Informações
                </h2>

                <h2>
                    Experiências
                </h2>
            </div>
            <img src="assets\images\pag-podcast\img-podcast.png" alt="Imagem podcast">
        
        </div>

    </main>
        <?php include 'footer.php'; ?>
    <!-- Referência ao arquivo JS externo -->
    <script src="js/js.js" defer></script>  
</body>