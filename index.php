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
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./assets/styles/login.css">
    <link rel="stylesheet" href="./assets/styles/style.css">
    <title>Edusogno</title>
</head>

<body>
    <div class="container">


        <form action="login.php" method="post">

            <!-- messaggio di errore -->
            <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>

            <header>
                <div class="logo">
                    <img src="./assets/img/Group 181.svg" alt="logo">
                </div>
            </header>

            <main>
                <h1 class="title">Hai già un account?</h1>

                <div class="form-container">
                    <div class="form-content">
                        <label>Inserisci l'e-mail</label>
                        <input type="email" name="email" placeholder="name@example.com"><br>

                        <div class="password-container">
                            <label>Inserisci la password</label>
                            <input class="password" type="password" name="password" placeholder="Scrivila qui">
                            <i class="fa-solid fa-eye"></i>

                        </div>

                        <button type="submit">ACCEDI</button>

                        <p class="change-page">Non hai ancora un profilo? <span><a href="register.php">
                                    Registrati</a></span></p>
                    </div>

                </div>

            </main>


        </form>
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