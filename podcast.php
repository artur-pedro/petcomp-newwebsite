<!DOCTYPE html>
<html lang="pt-BR">
<?php 
    $title = "Podcast";
    $cssFiles = ['css/podcast.css'];
    include 'head.php';
?>

<body>
    <?php include('header.php') ?>

    <main>

        <div class="container-header">
            <h2>PODComp</h2>
            <h3>O PODCast do PETComp</h3>
            <h4><a href="index.php">Página Inicial</a></h4>
            <h4> -> Produtos</h4>
            <h4> -> Podcast</h4>
        </div>

        <div class = "textos">
            <p>Com a vinda da pandemia do Covid-19, o grupo teve algumas de suas atividades de Extensão suspensas 
                devido aos protocolos de segurança indicados pela OMS. Pensando nisso, propusemos uma solução que conseguiria 
                alcançar nosso público tanto no âmbito acadêmico, quanto fora dela, na comunidade. Surgiu então, a ideia da criação 
                de um Podcast já que é uma mídia que tem notório crescimento no número de consumidores nos últimos anos, fazendo com 
                que se tornasse uma solução para o distanciamento social, prezado durante a pandemia. Tem-se como público alvo não 
                apenas aqueles que estão inseridos no contexto do grupo, mas sim para quem tem o interesse por tecnologia e também
                quem busca entender mais sobre essa área. Assim, buscamos fazer a sintetização de informações, levando-as de forma 
                clara, atrativa e confiável.
            </p>
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

        <div class="episodios">
            <h2>
                Episódios
            </h2>
            <div class="ep-unico">
                <iframe style="border-radius:18px" src="https://open.spotify.com/embed/episode/758i4WcF47ZhgldSavGuf0?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                <p>
                    <img src="assets\images\logos\microfone-podcast.png" alt="imagem podcast">
                    Breno Vidigal, Melquezedeque Costa,Paloma Santos,Thiago Augusto
                </p>
            </div>

            <div class="ep-unico">
                <iframe style="border-radius:18px" src="https://open.spotify.com/embed/episode/0F9f8Reg6bHXWGkOIsbnqb?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                <p>
                    <img src="assets\images\logos\microfone-podcast.png" alt="imagem podcast">
                    André Ribeiro, Mikael Silva,Thiago Augusto
                </p>
            </div>

            <div class="ep-unico">
                <iframe style="border-radius:18px" src="https://open.spotify.com/embed/episode/3qVO8s24JVKJ3xvRkw4NkK?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                <p>
                    <img src="assets\images\logos\microfone-podcast.png" alt="imagem podcast">
                    Ramille Santana, Thiago Augusto, William Martins
                </p>
            </div>

            <div class="ep-unico">
                <iframe style="border-radius:18px" src="https://open.spotify.com/embed/episode/1ojUIAbpBZDtl5jDTH7zZa?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                <p>
                    <img src="assets\images\logos\microfone-podcast.png" alt="imagem podcast">
                    Carlos Vinicius, André Filipe, Thalisson Jon
                </p>
            </div>

            <div class="ep-unico">
                <iframe style="border-radius:18px" src="https://open.spotify.com/embed/episode/0Ovw2X9sNC8dggp9Ht7EYM?utm_source=generator" width="100%" height="232" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
                <p>
                    <img src="assets\images\logos\microfone-podcast.png" alt="imagem podcast">
                    Carlos Silva, André Filipe
                </p>
            </div>

        </div>

        <div class="ver-mais">
            <a href="https://open.spotify.com/show/6fTiqItsIWohIacVtUv0Dn?si=bdca1064a4734622"target="_blank">ver mais</a>
        </div>
            

    </main>
        <?php include 'footer.php'; ?>
    <!-- Referência ao arquivo JS externo -->
    <script src="js/js.js" defer></script>  
</body>