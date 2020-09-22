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
<?php
include 'Enemy.php' ;
$enemy1 = new Enemy("enemy 1" , 100 , 100 , 1);
$enemy2 = new Enemy("enemy 2" , 50 , 50);
$enemy3 = new Enemy("enemy 3" , 70 , 80);
$enemy4 = new Enemy("enemy 4" , 30 , 100);

$enemys = [$enemy1 , $enemy2 ,$enemy3 ,$enemy4 ];

?>
<div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    <header class="masthead mb-4">
        <div class="inner">
            <h3 class="masthead-brand">Ware</h3>
        </div>
    </header>

    <main role="main" class="">
        <h1 class="">Start Ware </h1>

        <?php
          foreach ($enemys as $enemy){
              echo  '<form method="get" action="ware.php">';
              echo "<p>".  $enemy->name ."</p>" ;
              echo "<input type='hidden' name='enemy_power' value='$enemy->power'>" ;
              echo "<input type='hidden' name='enemy_energy' value='$enemy->energy'>" ;
              echo "<input type='hidden' name='enemy_withdrawal' value='$enemy->withdrawal'>" ;
              echo "<button type='submit' name='enemy_name' value='$enemy->name'>"."start ware with this enemy " . "</button>" ;
                echo '</form>';
          }

        ?>

    </main>

</div>


</body>
</html>
