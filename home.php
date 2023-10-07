<?php
// Includi il file db.php per la connessione al database
require_once("./assets/db/db.php");

// Avvia la sessione
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100;0,9..40,200;0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;1,9..40,100;1,9..40,200;1,9..40,300;1,9..40,400;1,9..40,500;1,9..40,600&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <link rel="stylesheet" href="./assets/styles/home.css">

    <title>Home</title>
</head>

<body>
    <div class="container">


        <header>
            <div class="logo">
                <img src="./assets/img/Group 181.svg" alt="logo">
            </div>
        </header>

        <main>
            <h1 class="title">Ciao <?php echo $_SESSION['nome'] . ' ' . $_SESSION['cognome']; ?>, ecco i tuoi eventi
            </h1>
            <div class="event-container">
                <div class="card">
                    <div class="card-content">
                        <div class="text">
                            <h1 class="event-title">Nome evento</h1>
                            <p class="event-date">data inserimento evento</p>
                        </div>

                        <button type="submit">JOIN</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="text">
                            <h1 class="event-title">Nome evento</h1>
                            <p class="event-date">data inserimento evento</p>
                        </div>
                        <button type="submit">JOIN</button>
                    </div>
                </div>
                <div class="card">
                    <div class="card-content">
                        <div class="text">
                            <h1 class="event-title">Nome evento</h1>
                            <p class="event-date">data inserimento evento</p>
                        </div>
                        <button type="submit">JOIN</button>
                    </div>
                </div>
            </div>

        </main>

    </div>

    <!-- BACKGROUND -->

    <div class="background">
        <!-- waves -->
        <img class="wave wave1" src="./assets/img/svg1.svg" alt="">
        <img class="wave wave2" src="./assets/img/svg2.svg" alt="">
        <img class="wave wave3" src="./assets/img/svg3.svg" alt="">

        <!-- graphic -->
        <img class="circle-big" src="./assets/img/svg-circle.svg" alt="">
        <img class="circle-small" src="./assets/img/svg-circle.svg" alt="">
        <img class="rocket" src="./assets/img/svg-rocket.svg" alt="">

    </div>

</body>

</html>