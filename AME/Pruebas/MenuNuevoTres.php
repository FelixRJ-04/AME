<?php
// Configuración principal
$titulo_pagina = "Menú de Navegación";
$hoja_estilos = "estilosMenu.css";
$menu_items = array(
    array(
        'titulo' => 'Inicio',
        'submenu' => array(
            array('texto' => 'Ingeniería', 'enlace' => 'https://ingenieria.uaslp.mx'),
            array('texto' => 'Mecánica Eléctrica', 'enlace' => 'https://ingenieria.uaslp.mx/ame/')
        )
    ),
    array(
        'titulo' => 'Carreras',
        'submenu' => array(
            array('texto' => 'Mecánica', 'enlace' => 'http://ame.uaslp.mx/secciones/carreras/informacion.php?clvcar=12'),
            array('texto' => 'Mecatrónica', 'enlace' => 'http://ame.uaslp.mx/secciones/carreras/informacion.php?clvcar=20'),
            array('texto' => 'Mecánica Eléctrica', 'enlace' => 'http://ame.uaslp.mx/secciones/carreras/informacion.php?clvcar=05'),
            array('texto' => 'Mecánica Administrativa', 'enlace' => 'http://ame.uaslp.mx/secciones/carreras/informacion.php?clvcar=09'),
            array('texto' => 'Electricidad y Automatización', 'enlace' => 'http://ame.uaslp.mx/secciones/carreras/informacion.php?clvcar=18')
        )
    ),
    array(
        'titulo' => 'Alumnos',
        'submenu' => array(
            array('texto' => 'Encuesta', 'enlace' => 'http://ame.uaslp.mx/secciones/alumnos/sesion/login.php'),
            array('texto' => 'Proyecto Integrador', 'enlace' => 'https://ingenieria.uaslp.mx/ame/Paginas/Proyecto-Integrador/2944')
        )
    ),
    array(
        'titulo' => 'Profesores',
        'submenu' => array(
            array('texto' => 'Directorio', 'enlace' => 'http://ame.uaslp.mx/secciones/profesor/profesores.php?carrera=20'),
            array('texto' => 'Inicio de Sesión', 'enlace' => 'http://ame.uaslp.mx/secciones/profesor/sesion/login.php')
        )
    ),
    array(
        'titulo' => 'Organigrama',
        'enlace' => 'https://ingenieria.uaslp.mx/ame/Paginas/Organigramas/91'
    ),
    array(
        'titulo' => 'Academias',
        'enlace' => 'https://ingenieria.uaslp.mx/ame/Paginas/Academias/104'
    )
);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo_pagina; ?></title>
    <link rel="preload" href="normalize.css" as="style">
    <link rel="stylesheet" href="normalize.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $hoja_estilos; ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
</head>
<body>
    <div class="contenedor bodies">
        <span class="nav-bar" id="btnMenu"><i class="fas fa-bars"></i></span>
        <nav class="main-nav">
            <div class="menu-container">
                <ul class="menu" id="menu">
                    <?php foreach ($menu_items as $item): ?>
                    <li class="menu__item container-submenu">
                        <?php if(isset($item['submenu'])): ?>
                            <a href="#" class="menu__link submenu-btn">
                                <?php echo $item['titulo']; ?> <i class="fas solid fa-caret-down"></i>
                            </a>
                            <ul class="submenu">
                                <?php foreach ($item['submenu'] as $subitem): ?>
                                <li class="menu__item">
                                    <a href="<?php echo $subitem['enlace']; ?>" class="menu__link">
                                        <?php echo $subitem['texto']; ?>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                            <a href="<?php echo $item['enlace']; ?>" class="menu__link">
                                <?php echo $item['titulo']; ?>
                            </a>
                        <?php endif; ?>
                    </li>
                    <?php endforeach; ?>
                </ul>
                
                <!-- Barra de búsqueda -->
                <div class="search-container">
                    <div class="d-flex text-end">
                        <script async src="https://cse.google.com/cse.js?cx=e51b2169d01164511"></script>
                        <div class="gcse-search"></div>
                    </div>
                </div>
            </div>
        </nav>
        <script src="menu1.js"></script>
    </div>
</body>
</html>