<!DOCTYPE html>
<html>

    <head>
        <title>Event Guru - Universities</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css" />
        <script src="jquery/jquery-3.2.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>
        <script src="bootstrap4/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />

        <link rel="stylesheet" type="text/css" href="plugins/rateit.js-master/scripts/rateit.css"/>
        <script src="plugins/rateit.js-master/scripts/jquery.rateit.min.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <script  type="text/javascript" src="plugins/typeahead.bundle.js"></script>
        <link rel="icon" href="images/icon.png">

        <style>
            #universities ul h4,
            #universities li {
                list-style-type: none;
                font-family: "Cambria";
            }
        </style>
    </head>

    <body>
        <?php
        include "header.php"
        ?>
        <hr>
        <div class="container" id="universities">
            <div class="row">
                <div class="col-xs-5 col-sm-3">
                    <ul>
                        <h4>Islamabad</h4>
                        <a href="test.php">
                            <li>NUST</li>
                        </a>
                        <a href="test.php">
                            <li>FAST</li>
                        </a>
                        <a href="test.php">
                            <li>Air University</li>
                        </a>
                        <a href="test.php">
                            <li>IIUI</li>
                        </a>
                        <a href="test.php">
                            <li>Bahria University</li>
                        </a>
                        <a href="test.php">
                            <li>IST</li>
                        </a>
                        <a href="test.php">
                            <li>COMSATS</li>
                        </a>
                    </ul>
                </div>
                <div class="col-xs-5 col-sm-3">
                    <ul>
                        <h4>Lahore</h4>
                        <a href="test.php">
                            <li>LUMS</li>
                        </a>
                        <a href="test.php">
                            <li>UET Lahore</li>
                        </a>
                        <a href="test.php">
                            <li>NCA</li>
                        </a>
                        <a href="test.php">
                            <li>FAST</li>
                        </a>
                    </ul>
                </div>
                <div class="col-xs-5 col-sm-3">
                    <ul>
                        <h4>Rawalpindi</h4>
                        <a href="test.php">
                            <li>EME</li>
                        </a>
                        <a href="test.php">
                            <li>CUST</li>
                        </a>
                        <a href="test.php">
                            <li>FAST</li>
                        </a>
                    </ul>
                </div>
                <div class="col-xs-5 col-sm-3">
                    <ul>
                        <h4>Karachi</h4>
                        <a href="test.php">
                            <li>EME</li>
                        </a>
                        <a href="test.php">
                            <li>CUST</li>
                        </a>
                        <a href="test.php">
                            <li>FAST</li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
       <?php
       include "footer.php"
       ?>

    </body>

</html>