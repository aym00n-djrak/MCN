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

    <div class="terminal">
        </br>
        <form action="Terminal.php" method="post">
            <input type="text" name="command" placeholder="Command">
            <input type="submit" name="submit" value="Submit">
        </form>

        <?php
        //incorporer un terminal

        if (isset($_POST['submit'])) {
            $command = $_POST['command'];
            echo "<p>Command: $command</p>";
            echo "<p>Result: </p>";
            echo "<p>";
            system($command);
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