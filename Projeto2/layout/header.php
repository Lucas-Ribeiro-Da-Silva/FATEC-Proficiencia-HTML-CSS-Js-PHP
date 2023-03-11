<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--link para os ícones do font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--link para as fontes do google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rampart+One&family=Shantell+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Tilt+Prism&display=swap" rel="stylesheet">
    <!--CSS externo-->
    <link rel="stylesheet" href="./assets/css/global.css">
    <link rel="stylesheet" href="<?php echo $css;?>">
    <!--[if lt IE 9] :compatibilidade de navegadores>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="./assets/favicon/favicon.ico" type="image/x-icon">
    <title> <?php echo $titulo;?> </title>
</head>
<body class="body">
    <div class="box">
        <header class="header">
            <div class="logo">PROGRAMADORES ANÔNIMOS</div>
            <i class="fa-solid fa-bars burguer" onclick="clickMenu()"></i>
            <nav id="nav" class="nav">
                <ul class="ul">
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="./lista.php">Listar</a></li>
                    <li><a href="./consultas.php">Consultar</a></li>
                </ul>
            </nav>
        </header>
        <div class="container-absoluto">
            <div class="container-relativo">