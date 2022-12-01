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
            <a href="index.php"><img src="images/skull.png" width="200" height="200"></a>
            <br />
            <a href="cours.php" class="flex p-2 text-white rounded-lg hover:bg-[#141414] hover:text-[#FF82FF]">
                <span class="ml-3">Cours</span>
            </a>
            <form>

                <a href="windows.php" class="flex p-2 text-white rounded-lg hover:bg-[#141414] hover:text-[#FF82FF]">Windows</a>
                <select name="windows" class="bg-gray-800 text-white flex p-3 ml-5" onchange="location.href=value">
                    <option>Commandes</option>
                    <option value="ip.php" class="text-[#FF82FF]">Ping</option>
                    <option value="nslookup.php" class="text-[#FFF47F]">Nslookup</option>
                    <option value="Terminal.php" class="text-[#5EF2B2]">Terminal</option>
                    <option value="arp.php" class="text-[#FF82FF]">Arp</option>
                    <option value="iplinkshow.php" class="text-[#FFF47F]">IpLinkShow</option>
                    <option value="ipaddressshow.php" class="text-[#FF82FF]">IpAdressShow</option>
                    <option value="systeminfo.php" class="text-[#5EF2B2]">SystemInfo</option>
                    <option value="tree.php" class="text-[#FF82FF]">Tree</option>
                    <option value="tracert.php" class="text-[#FFF47F]">Tracert</option>
                </select>
            </form>

            <form>
                <a href="linux.php" class="flex p-2 text-white rounded-lg hover:bg-[#141414] hover:text-[#FF82FF]">Linux</a>
                <select name="Linux" class="bg-gray-800 text-white flex p-3 ml-5" onchange="location.href=value">
                    <option>Commandes</option>
                    <option value="ip.php" class="text-[#FF82FF]">Ping</option>
                    <option value="Terminal.php" class="text-[#FFF47F]">Terminal</option>
                    <option value="nikto.php" class="text-[#5EF2B2]">Nikto</option>
                    <option value="fuzzer.php" class="text-[#FF82FF]">Fuzzer</option>
                </select>
            </form>

            <form>
                <a href="https://www.commentcoder.com/apprendre-a-coder-gratuitement/" class="flex p-2 text-white rounded-lg hover:bg-[#141414] hover:text-[#FF82FF]">Entrainement :</a>
                <select name="Entrainement" class="bg-gray-800 text-white flex p-3 ml-5" onchange="location.href=value">
                    <option>Choix</option>
                    <option value="rootme.php" class="text-[#FF82FF]">Root-me</option>
                    <option value="https://www.codingame.com/start" class="text-[#FFF47F]">Codingame</option>
                    <option value="https://scratch.mit.edu/" class="text-[#5EF2B2]">Scratch</option>

                </select>
            </form>

            <ul>
                <li>
                    <a href="contact.php" class="flex p-2 text-white rounded-lg hover:bg-[#141414] hover:text-[#FF82FF]">
                        <span class="ml-3">Contact</span>
                    </a>
                </li>
                <li>
                    <a href="about.php" class="flex p-2 text-white rounded-lg hover:bg-[#141414] hover:text-[#FF82FF]">
                        <span class="ml-3">About</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="p-7 text-white bg-[#0f1621] flex-auto text-center">
            <div>
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-[Raleway] text-center">IP</h1>
                </br>

                <p>
                    Dans ce cours, nous allons voir comment utiliser la commande ping.
                </p>
                </br>

                <p>
                    La commande ping permet de tester la connectivité entre deux machines. Elle permet de vérifier si une machine est joignable sur un réseau.
                </p>
                </br>

                <p>
                    La commande ping est disponible sur tous les systèmes d'exploitation.
                </p>
                </br>

                <p>
                    Pour trouver une IP disponible vous pouvez utiliser la commande: <span class="text-[#FF82FF]">nslookup</span> 
                </p>
                </br>

                <p>
                    Vous pouvez essayer la commande en rentrant un IP (adresse IPV4 de préférence) valide ci-dessous: (ex: 172.217.18.195 pour google)
                </p>
                </br>


                <?php
                $ip = $_SERVER['REMOTE_ADDR'];
                echo "Votre IP est : $ip";
                ?> </p>
                </br>
                <form action="IP.php" method="post">
                    <input type="text" name="ip" placeholder="IP" class="bg-gray-800 text-white p-3 ml-5">
                    <input type="submit" value="Envoyer" class="bg-[#FF82FF] text-black rounded-lg p-2">
                </form>
                </br>

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