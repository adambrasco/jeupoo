<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Css -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
            crossorigin="anonymous"></script>
</head>
<body>
<?php
require_once 'guerrier.php';
require_once 'magicien.php';
require_once 'paladin.php';
require_once 'monstre.php';
require_once 'jeu.php';
session_start();

?>
<div class="container col-lg-10 col-md-offset-1 ">
    <div class="row">

        <!-- Guerrier!-->
        <div class="col-lg-4">
            <div class="card hovercard">
                <div class="cardheader1">

                </div>
                <div class="avatar">
                    <img alt="" src="../img/3.jpg">
                </div>
                <div class="info">
                    <div class="title">
                        <form method="post" action="donjon.php">
                            <select name="classe" id="classe">
                                <option value="guerrier">Guerrier</option>
                            </select>
                            <input type="submit" value="Start">
                        </form>
                    </div>
                    <div class="desc">Attaquant en mélée</div>
                    <div class="desc">Forte frappe d'attaque</div>
                    <div class="desc">Sénégalais</div>
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" rel="publisher"
                       href="https://plus.google.com/+ahmshahnuralam">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btn-primary btn-sm" rel="publisher"
                       href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-warning btn-sm" rel="publisher" href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-behance"></i>
                    </a>
                </div>
            </div>

        </div>
        <!-- Magicien !-->
        <div class="col-lg-4">

            <div class="card hovercard">
                <div class="cardheader2">

                </div>
                <div class="avatar">
                    <img alt="" src="../img/1.jpg">
                </div>
                <div class="info">
                    <div class="title">
                        <form method="post" action="donjon.php">
                            <select name="classe" id="classe">
                                <option value="mage">Mage</option>
                            </select>
                            <input type="submit" value="Start">
                        </form>
                    </div>
                    <div class="desc">Assassin à distance</div>
                    <div class="desc">Sage</div>
                    <div class="desc">Congolais</div>
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" rel="publisher"
                       href="https://plus.google.com/+ahmshahnuralam">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btn-primary btn-sm" rel="publisher"
                       href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-warning btn-sm" rel="publisher" href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-behance"></i>
                    </a>
                </div>
            </div>

        </div>

<!-- Paladin !-->

        <div class="col-lg-4">

            <div class="card hovercard">
                <div class="cardheader3">

                </div>
                <div class="avatar">
                    <img alt="" src="../img/2.jpg">
                </div>
                <div class="info">
                    <div class="title">
                        <form method="post" action="donjon.php">
                            <select name="classe" id="classe">
                                <option value="paladin">Paladin</option>
                            </select>
                            <input type="submit" value="Start">
                        </form>
                    </div>
                    <div class="desc">Assassin au corp à corp</div>
                    <div class="desc">Polyvalent</div>
                    <div class="desc">Malien</div>
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" rel="publisher"
                       href="https://plus.google.com/+ahmshahnuralam">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btn-primary btn-sm" rel="publisher"
                       href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-warning btn-sm" rel="publisher" href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-behance"></i>
                    </a>
                </div>
            </div>

        </div>

    </div>
</div>
</body>