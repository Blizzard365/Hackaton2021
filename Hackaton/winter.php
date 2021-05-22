<?php 
    include "vendor/bd.php";

 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Прокат зимнего спортивного оборудования</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include "blocks/header.php";?>
    
    <main>
        <section class="container-fluid container">
            <div class="row">
                <ul>
                    <li><a href="ski.php">Лыжи</a></li>
                    <li><a href="skates.php">Коньки</a></li>
                    <li><a href="bikes.php">Хоккей</a></li>
                    <li><a href="bikes.php">Сноубординг</a></li>
                    <li><a href="bikes.php">Снегокаты, ледянки, санки</a></li>
                    <li><a href="bikes.php">Лыжные палки</a></li>
                    <li><a href="bikes.php">Снежные бластеры</a></li>
                </ul>
            </div>
        </section>
    </main>
    <p></p>

    <footer>
        
    </footer>
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body> 
</html>