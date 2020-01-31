<?php $fileName = basename($_SERVER['PHP_SELF']);?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <title>Město Litomyšl: Moderní historické město</title>
    <meta name="description" content="Město Litomyšl" />
    <meta name="author" content="Město Litomyšl">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800&display=swap&subset=latin-ext" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/main.css" />

<!--  Jen pro titulku a stránku turista  -->
    <?php  if($fileName == 'turista.php' || $fileName == 'index.php'){ ?>
        <link rel="stylesheet" type="text/css" href="css/title.css" />
    <?php } ?>

<!--  Jen pro stránku turista/volný čas  -->
    <?php  if($fileName == 'turista.php'){ ?>
        <link rel="stylesheet" type="text/css" href="css/tourist.css" />
    <?php } ?>

    <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
    <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
</head>

