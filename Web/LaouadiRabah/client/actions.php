<?php
session_start();
include_once 'apicaller.php';
$apicaller = new ApiCaller('APP001', '28e336ac6c9423d946ba02d19c6a2632', 'http://localhost/LaouadiRabah/api/');

$elements = $apicaller->sendRequest(array(
    'controller' => 'ApiRecive',
    'action' => 'recuperer',
    'username' => $_SESSION['username'],
    'userpass' => $_SESSION['userpass']
        ));

//var_dump($elements);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Client APIs (Mon Api, Google Map Api, Filker Api)</title>

        <link rel="stylesheet" href="css/reset.css" type="text/css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="css/flick/jquery-ui-1.8.16.custom.css" type="text/css" />
        <link href="css/page.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">

        <!-- Javascript -->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery-ui-1.8.16.custom.min.js"></script>
       	<script type="text/javascript" src="./Diaporama Simple JQuery_files/jquery-1.3.2.min.js"></script>
        <script type="text/javascript" src="./Diaporama Simple JQuery_files/jquery.diaporama.js"></script>
        <script type="text/javascript" src="./Diaporama Simple JQuery_files/script.js"></script>

        <style>
            body {
                padding-top: 40px;
            }
            #main {
                margin-top: 80px;
            }

            .textalignright {
                text-align: right;
            }

            .marginbottom10 {
                margin-bottom: 10px;
            }
            #newelement_window {
                text-align: left;
                display: none;
            }
        </style>

        <script>
            $(document).ready(function() {
                $("#elementlist").accordion({
                    collapsible: true
                });
                $(".datepicker").datepicker();
                $('#newelement_window').dialog({
                    autoOpen: false,
                    height: 'auto',
                    width: 'auto',
                    modal: true
                });
                $('#newelement').click(function() {
                    $('#newelement_window').dialog('open');
                });
            });
        </script>

    </head>
    <?php
    include_once 'GoogleMapApi.php';
    include_once 'FilckerApi.php';


//initialisation Google Map Api
    $google = new GoogleMapApiEPP("ABQIAAAAssNHsvRmdjbfaHQLGJe4IBRUsz-pYg_Ma22JMdFSMvaUp2krUhQPGyzeHUvioNuo_7zqLxrqnekFOQ", "map");
    $google->setSize(350, 350);


//intialiationn filker Api
    $filker = new FilckerApiEPP("filker", "9aaf0d445b006926d348ad8e300dd6bb", 20);
    $filker->setSize(450, 350)
    ?>
    <body>
        <div class="topbar">
            <div class="fill">
                <div class="container">
                    <a class="brand" href="index.php">Client APIs (Mon Api, Google Map Api, Filker Api)</a>
                </div>
            </div>
        </div>
        <div id="main" class="container">
            <div class="textalignright marginbottom10">
                <span id="newelement" class="btn info">Ajouter Un Element</span>
                <div id="newelement_window" title="Create a new element item">
                    <form method="POST" action="Actions/nouveau.php">
                        <p>Titre:<br /><input type="text" class="title" name="titre" /></p>
                        <p>Description:<br /><textarea class="description" name="description"></textarea></p>
                        <p>Lieu:<br /><input class="description" name="lieu"/></p>
                        <div class="actions">
                            <input type="submit" value="Create" name="new_submit" class="btn primary" />
                        </div>
                    </form>
                </div>
            </div>
            <div id="elementlist">
                <?php foreach ($elements as $element): ?>
                    <h3><A HREF="#" onclick="<?php $google->generateCallBack($element->lieu) ?>"><?php echo $element->titre; ?></A></h3>

                    <div>
                        <form method="POST" action="Actions/modifier.php">
                            <div class="textalignright">
                                <a href="Actions/supprimer.php?element_id=<?php echo $element->id; ?>">Delete</a>
                            </div>
                            <div>
                                <p>Description:<br /><textarea class="span8" id="description_<?php echo $element->id; ?>" class="description" name="description"><?php echo $element->description; ?></textarea></p>
                                <p>Lieu:<br /><input class="description" name="lieu" value="<?php echo $element->lieu; ?>"/></p>
                                <table>
                                    <tr>
                                        <td><div><?php $google->printMap($element->lieu); ?></div></td>
                                        <td><div><?php $filker->printPhoto($element->id, $element->lieu); ?></div></td>
                                    </tr>
                                </table>
                                <div class="textalignright">
                                    <input type="hidden" value="<?php echo $element->id; ?>" name="element_id" />
                                    <input type="hidden" value="<?php echo $element->titre; ?>" name="titre" />
                                    <input type="submit" class="btn primary" value="Modifier" name="update_button" />
                                </div>
                            </div>
                        </form>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php
            $google->callGoogleMap($elements[0]->lieu);
//$filker->printPhoto('Montpellier');
            //F7W6F-VGNC7-JX9D4-DHFBM-QJWX8
            ?>

    </body>
</html>