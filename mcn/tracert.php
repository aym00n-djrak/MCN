<!DOCTYPE html>
<html>

<head>
    <title>Contact</title>
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
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-[Raleway] text-center">Tracert:</h1>
                <br />
                <p>
                    La fonction tracert sert à tracer le chemin que prend un paquet de données sur Internet. Il permet de connaître les différents routeurs qui sont traversés pour atteindre la destination.
                </p>
                <p>Il est possible de connaître le temps de réponse de chaque routeur.
                </p>
                </br>
                <p>Pour essayer cette commande vous pouvez essayer les IP suivantes: 11.1.0.1</p>
                </br>
                <p>
                    La fonction prend un peu de temps elle doit réaliser 30 sauts pour atteindre la destination.
                    Le résultat est affiché juste après !
                </p>
                </br>

                <form action="tracert.php" method="post">
                    <div class="flex justify-center">
                        <input type="text" name="ip" placeholder="Enter IP Address" class="bg-gray-800 text-white flex p-3 ml-5" />
                        <button type="submit" class=" bg-[#FF82FF] text-white flex p-3 ml-5">Tracer</button>
                    </div>

                </form>

                <?php
                if (isset($_POST['ip'])) {
                    $ip = $_POST['ip'];
                    $command = "tracert $ip";
                    $output = shell_exec($command);
                }
                ?>
            </div>
        </div>
    </div>
</body>

</html>