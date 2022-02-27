<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARIGONI Kevin - Développeur Web - Gestion de Vos Projets Web</title>
    <meta name="description" content="Développeur web, je vous assiste pour créer vos sites web & optimiser votre présence grâce au référencement (SEO) et au marketing digital.">
    <!-- Meta Bootstrap, Fonts, CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/a62e0cc052.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="public/css/index.css">
    <!-- Référencement -->
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="https://www.arigoni-kevin.fr" />
    <link rel="shortcut icon" href="favicon.ico" />
    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary" />
    <!-- Open Graph data / Facebook -->
    <meta property="og:type" content="website" />
    <meta property="og:title" content="ARIGONI Kevin - Développeur Web - Gestion de Vos Projets Web" />
    <meta property="og:description" content="Développeur web, je vous assiste pour créer vos sites web & optimiser votre présence grâce au référencement (SEO) et au marketing digital." />
    <meta property="og:url" content="https://www.arigoni-kevin.fr" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-DM9WPMJ6SX"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-DM9WPMJ6SX');
    </script>
</head>
<body>
    <!-- Header -->
    <?php include("views/includes/Header.php"); ?>
    <!-- Main -->
    <?php include("router/routes.php"); ?>
    <!-- Footer -->
    <?php include("views/includes/Footer.php"); ?>
    <!-- Scripts -->
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="public/js/index.js"></script>
    <script src="public/js/lightbox.min.js"></script>
</body>
</html>