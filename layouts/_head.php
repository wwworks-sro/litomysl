<?php $fileName = basename($_SERVER['PHP_SELF']);?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Město Litomyšl: Moderní historické město</title>
    <meta name="description" content="Město Litomyšl" />
    <meta name="author" content="Město Litomyšl">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700,800&display=swap&subset=latin-ext" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/main.css" />

    <?php  if($fileName != 'index.php' ){  ?>
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <?php } ?>

    <!--  Jen pro titulku a stránku turista  -->
    <?php  if($fileName == 'turista.php' || $fileName == 'index.php'){ ?>
        <link rel="stylesheet" type="text/css" href="css/title.css" />
    <?php } ?>

<!--  Jen pro stránku turista/volný čas  -->
    <?php  if($fileName == 'turista.php'){ ?>
        <link rel="stylesheet" type="text/css" href="css/tourist.css" />
    <?php } ?>

<!--  Podstránky mimo titulku a turistu  -->
    <?php  if($fileName != 'turista.php' && $fileName != 'index.php' ){  ?>
        <link rel="stylesheet" type="text/css" href="css/subpages.css" />
    <?php } ?>

    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>


    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="Litomysl.cz"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="mstile-310x310.png" />

</head>

