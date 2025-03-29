<head>
    <!-- Metadados essenciais -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Título definido dinamicamente; se $title não estiver definido, usa "PETComp" -->
    <title><?php echo isset($title) ? $title : "PETComp"; ?></title>
    
    <!-- Fontes e Ícones (cada uma incluída apenas uma vez com parâmetros modernos) -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alatsi&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Mada:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Sora&display=swap" rel="stylesheet">

    <!-- Bibliotecas CSS essenciais -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css">
    
    <!-- Script do Swiper (se for realmente necessário no head; o ideal é carregá-lo no final do body) -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    <script src="js/js.js" defer></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Arquivos de estilos customizados -->
    <link rel="stylesheet" href="css/globals.css">

    <?php 
        if (isset($cssFiles) && is_array($cssFiles)) {
            foreach ($cssFiles as $cssFile) {
                echo '<link rel="stylesheet" href="' . $cssFile . '">';
            }
        }
    ?>
</head>
