<!DOCTYPE html>
<html>

<head>
    <title>ping</title>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex">
        <div class="bg-gray-800 h-screen overflow-y-auto p-5 pt-8 w-64">
            <a href="index.php"><img src="skull.png" width="200" height="200"></a>
            <ul class="space-y-2">
                <li>
                <a href="ip.php" class="flex p-2 text-white rounded-lg hover:bg-gray-700">
                    <span class="ml-3">ping</span>
                </a>
                </li>
                <li>
                <a href="nslookup.php" class="flex p-2 text-white rounded-lg hover:bg-gray-700">
                    <span class="ml-3">nslookup</span>
                </a>
                </li>
                <li>
                <a href="terminal.php" class="flex p-2 text-white rounded-lg hover:bg-gray-700">
                    <span class="ml-3">terminal</span>
                </a>
                </li>
                <li>
                    <a href="contact.php" class="flex p-2 text-white rounded-lg hover:bg-gray-700">
                    <span class="ml-3">contact</span>
                    </a>
                </li>
                <li>
                <a href="about.php" class="flex p-2 text-white rounded-lg hover:bg-gray-700">
                    <span class="ml-3">about</span>
                </a>
                </li>
            </ul>
        </div>
        <div class="p-7">
            <div>
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
        </div>
    </div>
</body>
</html>