<!DOCTYPE html>
<html <?php language_attributes(); ?>   >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title>Bienvenidos a mi web</title>
</head>
<body <?php body_class(); ?> >

    <div class="cabecera">
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="blog">Blog <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="acerca-de-nosotros">Acerca de</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contacto">Contacto</a>
            </li>
            
            </ul>
        </div>
        </nav>
    </div>