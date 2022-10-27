<!DOCTYPE html>
<html>

<head>
    <title>NsLookUp</title>
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

    <div class="NsLookUp">
        <h1>NsLookUp</h1>
        </br>
        <form action="nslookup.php" method="post">
            <input type="text" name="domain" placeholder="Domain">
            <input type="submit" name="submit" value="Submit">
        </form>

        <?php
        //commande nsloopup

        if (isset($_POST['submit'])) {
            $domain = $_POST['domain'];
            echo "<p>Domain: $domain</p>";
            echo "<p>Result: </p>";
            echo "<p>";
            system("nslookup $domain");
            echo "</p>";
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