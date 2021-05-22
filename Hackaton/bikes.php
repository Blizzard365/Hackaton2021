<?php 
    include "vendor/bd.php";

    if(isset($_GET['id'])){
    $id = $_GET['id'];
}
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Прокат летнего спортивного оборудования</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php include "blocks/header.php";?>
    <div></div>
    <main>
        <section class="container-fluid container">
            <div class="row">
                <ul>
                <?php 
                if(!isset($_GET['id'])){
            
            $result = mysqli_query($db,"SELECT * FROM `bikes`");
            $myrow = mysqli_fetch_assoc($result);

            do{
                printf("<li><a class='col-12' href='bikes.php?id=%s'>%s</a></li>",$myrow['id'],$myrow['title']);
            }

            while($myrow = mysqli_fetch_assoc($result));
            }
            else {
            $result = mysqli_query($db,"SELECT * FROM `bikes` WHERE id='$id'");
            $myrow = mysqli_fetch_assoc($result);


print <<<HERE
<form method="POST" action="arenda_summer.php">
<div class='col-4'>
<img src="img/twitter_yellow">
</div>
<div class='col-8'>
<h1><b>$myrow[title]</b></h1>
<p>$myrow[type]</p>
<p>Стоимость за сутки: $myrow[cost]</p>
<p>Описание велосипеда:...</p>
<p>Условия проката:...</p>
</div>


<input type="hidden" name="id" value="$myrow[id]">

<input class="col-3 admin_btn" type="submit" name="submit" value="Арендовать">

</form>
HERE;
}

                 ?>
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