<?php
require 'inc/common.php';
session_start();

//dd($_SESSION);

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Exemplo Senac</title>
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link rel="shortcut icon" href="img/favicon.png">

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/socialstream.jquery.js"></script>
        <script type="text/javascript" src="js/scripts.js"></script>
    </head>

    <body>
        <?php include('./header.php'); ?>
        <div class="container" style="padding-bottom: 20px">
            <?php include 'breadcrumb.php'; ?>
            <div class="row clearfix">
                <div class="col-md-12 column">
                    <div class="row clearfix">
                        <div class="col-md-2 column">
                            <?php include 'inc/menu.php' ?>
                        </div>
                        <div class="col-md-7 column">
                            <div class="row">
                                <?php getBodyContent(); ?>
                            </div>
                        </div>
                        <div class="col-md-3 column">
                            <ul>
                                <li>
                                    Lorem ipsum dolor sit amet
                                </li>
                                <li>
                                    Consectetur adipiscing elit
                                </li>
                                <li>
                                    Integer molestie lorem at massa
                                </li>
                                <li>
                                    Facilisis in pretium nisl aliquet
                                </li>
                                <li>
                                    Nulla volutpat aliquam velit
                                </li>
                                <li>
                                    Faucibus porta lacus fringilla vel
                                </li>
                                <li>
                                    Aenean sit amet erat nunc
                                </li>
                                <li>
                                    Eget porttitor lorem
                                </li>
                            </ul>
                            <div style="text-align: center">
                                <ul class="pagination pagination-sm">
                                    <li>
                                        <a href="#"><i class="glyphicon glyphicon-backward"></i></a>
                                    </li>
                                    <li>
                                        <a href="#">1</a>
                                    </li>
                                    <li>
                                        <a href="#">2</a>
                                    </li>
                                    <li>
                                        <a href="#">3</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="glyphicon glyphicon-forward"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include ('footer.php'); ?>
        <script>
            $('.insta').socialstream({
                socialnetwork: 'instagram',
                limit: 12,
                username: 'gameofthrones',
                overlay: true,
                apikey: false
            });
        </script>
    </body>
</html>
