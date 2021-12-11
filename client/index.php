<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" rel="stylesheet" >
    <title>Japán művek</title>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <ul class="navbar-nav">
        <li class="nav-item"><a href="index.php" class="nav-link">Főoldal</a></li>
        <li class="nav-item"><a href="index.php?program=animangak.php" class="nav-link">Művek</a></li>   
        <li class="nav-item"><a href="index.php?program=insertmuvek.php" class="nav-link">Hozzáadás</a></li>
        <li class="nav-item"><a href="index.php?program=removemuvek.php" class="nav-link">Eltávolítás</a></li>
        <li class="nav-item"><a href="index.php?program=updatemuvek.php" class="nav-link">Frissítés</a></li>    
    </ul>
</nav>
    </div>

    <div class="container">
        <?php
            if(isset($_GET["program"]))
                include $_GET["program"];
                else
                    include "fooldal.php"
        ?>
    </div>
</body>
</html>