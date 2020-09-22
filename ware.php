<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Cover Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
          integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">
</head>

<body class="text-center">
<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
?>
<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-4">
        <div class="inner">
            <h3 class="masthead-brand">Ware</h3>
        </div>
    </header>
<?php
    include "Warrior.php";
    include "Enemy.php";
    $warrior = new Warrior('warrior' , 50 , 100);
?>
    <main role="main" class="">
        <h1 class="">Start Ware </h1>
        <?php

        echo "<p>". "enemy name : " .$_GET['enemy_name']  ."</p>" ;
        echo "<p>"."enemy power : ".  $_GET['enemy_power']  ."</p>";
        echo "<p>"."enemy energy : " . $_GET['enemy_energy']  ."</p>";




        echo "<p>"."ware status : " . $warrior->startWare(new Enemy($_GET['enemy_name'] , $_GET['enemy_power'] , $_GET['enemy_energy'] , $_GET['enemy_withdrawal']))  ."</p>";

        ?>
    </main>

</div>


</body>
</html>
