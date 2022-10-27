<!DOCTYPE html>
<html>

<head>
    <title>Accueil</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <link rel="stylesheet" type="text/css" href="accueil.css">

</head>

<body>

    <header class="header ">
        <div class="logo">
            <a href="/Site/index.php"><img src="skull.png" width="50" height="50"> </a>
            <h1>Hack Tools</h1>
        </div>
    </header>

    <nav class="navbar navbar-expand-md">
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="IP.php">IP</a></li>
                <li class="nav-item"><a class="nav-link" href="nslookup.php">NsLookUp</a></li>
                <li class="nav-item"><a class="nav-link" href="About.php">About</a></li>
                <li class="nav-item"><a class="nav-link" href="Terminal.php">Terminal</a></li>

            </ul>
        </div>
    </nav>

    <div id="IP">
        <h1>IP</h1>
        <p>
            <?php
            $ip = $_SERVER['REMOTE_ADDR'];
            echo "Votre IP est : $ip";
            ?>
        </p>

        <form action="IP.php" method="post">
            <input type="text" name="ip" placeholder="IP">
            <input type="submit" value="Envoyer">
        </form>

        <?php
        //si le formulaire est rempli
        if (isset($_POST['ip'])) {
            //Ping une IP
            $ip = $_POST['ip'];

            $ping = exec("ping -n 1 $ip", $output, $status);
            if (0 == $status) {
                echo "L'adresse IP $ip est joignable";

                //Récupère le nom de domaine
                $host = gethostbyaddr($ip);
                echo "<br>Le nom de domaine de l'adresse IP $ip est : $host";

                //Récupère l'adresse IP
                $ip = gethostbyname($host);
                echo "<br>L'adresse IP du nom de domaine $host est : $ip";

                //localisation de l'ip
                $details = json_decode(file_get_contents("http://ipinfo.io/{$ip}/json"));
                echo "<br>La localisation de l'adresse IP $ip est : $details->city, $details->region, $details->country";
            } else {
                echo "L'adresse IP $ip n'est pas joignable";
            }
        } else {
            echo "Veuillez remplir le formulaire";
        }
        ?>
    </div>



    <footer class="page-footer">
        <div class="row">

            <div class="col-lg-4 col-md-4 col-sm-12">
                </br>

                <p>
                    <a href="mailto::remyj@outlook.fr?">remyj@outlook.fr</a><br>
                    <a href="callto::0652224439?">0652224439</a>
                </p>

            </div>

        </div>

    </footer>

</body>

</html>