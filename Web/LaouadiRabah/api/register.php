<!DOCTYPE html>
<html>
    <head>
        <title>Simple Server</title>

        <link rel="stylesheet" href="css/reset.css" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />

        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui-1.8.16.custom.min.js"></script>


        <style>
            body {
                padding-top: 40px;
            }
            #main {
                margin-top: 80px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="topbar">
            <div class="fill">
                <div class="container">

                    <?php
                    if (isset($_POST['login_username']) && $_POST['login_password'] == $_POST['login_passwordC']
                            && $_POST['login_password'] != '' && $_POST['login_username'] != '') {
                        $userNom = $_POST['login_username'];
                        $userPass = $_POST['login_password'];
                        ?>
                        <a class="brand" href='insertion.php?controller=ApiRecive&action=creer&titre=facebook&description=fuckfacebook&lieu=ALGER&username=<?php echo $userNom; ?>&userpass=<?php echo $userPass; ?>'>Cliquer ici pour valider l'inscreption </a>

                        <?php
                    } else if(isset($_POST['login_username'])){
                        ?>
                        <a class="brand" href='index.php'>Tous Les Champs sont obligatoire <br/>ou <br/>Mot de Passe n'est pas le meme </a>

                        <?php
                    } else {
                        ?>
                        <a class="brand" href='index.php'>Insertion OK, Cliquer pour revenir a la page d'acceuil </a>

                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>

    </body>
</html>
