
<!DOCTYPE html>
<html lang="pt-br">

<?php 
    $title = "Sobre nós";
    $cssFiles = ['css/revista.css'];
    include 'head.php';
?>

<body>
    <?php include 'header.php'; ?>

    <div class="container-header">
        <h2>Revista</h2>
        <h3>Confira a publicação anual do PETComp</h3>
        <h4><a href="index.php">Página Inicial</a></h4>
        <h4> -> Publicaçoes</h4>
        <h4> -> Revista</h4>
    </div>

    <div class="container-body">
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla volutpat iaculis neque. Nulla facilisi. Pellentesque eget ultrices lacus, vitae placerat massa. Quisque volutpat velit vulputate, viverra enim quis, vehicula leo. Nullam tincidunt sapien libero, eu aliquet arcu lacinia id. Quisque id volutpat sapien, non volutpat orci. Phasellus sollicitudin, sem eu gravida euismod, ante nunc cursus mi, cursus cursus massa tellus feugiat magna. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nullam finibus diam eget lorem pharetra, quis viverra velit tincidunt. Mauris euismod consectetur interdum. Duis vitae posuere tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus eget ipsum enim. Suspendisse vel eleifend lacus. Integer consequat lorem vel ex faucibus, sed viverra nisi placerat. Pellentesque quis nisl nec erat aliquam posuere. Curabitur et vestibulum nunc.
            </p>
            <p>
            ue quis nisl nec erat aliquam posuere. Curabitur et vestibulum nunc. Vestibulum vel tellus sagittis eros imperdiet eleifend non quis leo. Sed vitae leo in diam imperdiet fermentum. Donec aliquam porttitor dolor sit amet fringilla. Ut pretium vulputate felis a luctus. Aliquam sit amet massa in purus tincidunt bibendum eu nec velit. Donec in mauris at lectus posuere consectetur. Curabitur mollis pretium nisi non interdum. Ut venenatis quam et dolor congue, id tempus nisl cursus. Ut mollis nibh sed felis sodales, nec congue magna lacinia. Nullam id fringilla mauris, vel blandit augue.<a href="#">link</a>.
            </p>


            <div class="carousel">
                <button class="arrow left" onclick="moveCarousel(-1)">&#10094;</button>
                
                <div class="carousel-images">
                    <img src="assets/revistas/1a_edicao/revista_1a_edicao_capa.png" alt="Edição 1" class="carousel-image active">
                    <img src="assets/revistas/2a_edicao/revista_2a_edicao_capa.png" alt="Edição 2" class="carousel-image">
                    <img src="assets/revistas/1a_edicao/revista_1a_edicao_capa.png" alt="Edição 3" class="carousel-image">
                </div>
                
                <button class="arrow right" onclick="moveCarousel(1)">&#10095;</button>
            </div>

            <p class="carousel-caption">Edição 1</p>
           
    </div>
  


        <!-- Inputs de controle do slide -->
    <input type="radio" name="carousel" id="slide1" checked>
    <input type="radio" name="carousel" id="slide2">
    <input type="radio" name="carousel" id="slide3">

    <!-- Carrossel -->
    <div class="carousel-container">
        <div class="carousel">
        <div class="revista" id="revista1">
            <img src="assets/revistas/1a_edicao/revista_1a_edicao_capa.png" alt="Revista 1">
        </div>
        <div class="revista" id="revista2">
            <img src="assets/revistas/2a_edicao/revista_2a_edicao_capa.png" alt="Revista 2">
        </div>
        <div class="revista" id="revista3">
            <img src="assets/revistas/1a_edicao/revista_1a_edicao_capa.png"  alt="Revista 3">
        </div>
        </div>

        <!-- Somente 2 setas -->
        <div class="setas">
        <label for="slide3" class="arrow" id="left">&#10094;</label>
        <label for="slide2" class="arrow" id="right">&#10095;</label>

        <label for="slide1" class="arrow" id="left2">&#10094;</label>
        <label for="slide3" class="arrow" id="right2">&#10095;</label>

        <label for="slide2" class="arrow" id="left3">&#10094;</label>
        <label for="slide1" class="arrow" id="right3">&#10095;</label>
        </div>
    </div>


    <?php include 'footer.php'; ?>
</body>
</html>
