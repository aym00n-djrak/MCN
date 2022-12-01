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
                        <span class="ml-3">Contacts</span>
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
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-[Raleway] text-center">Contact</h1>
                <p>
                    </br>

                <h2 class="text-2xl sm:text-3xl md:text-4xl font-[Raleway] text-center">Vous pouvez nous contacter par mail aux adresses suivantes : </h2>

                </br>

                <div class="text-2xl sm:text-3xl md:text-4xl font-[Raleway]">
                    <ul>
                        <li class="text-[#FF82FF] text-center hover:text-[#FFF47F]">
                            <a href="mailto::remyj@outlook.fr?">remyj@outlook.fr</a><br>
                        </li>
                        <li class="text-[#FFF47F] text-center hover:text-[#5EF2B2]">

                            <a href="mailto::enzo.gallos@edu.ece.fr?">enzo.gallos@edu.ece.fr</a><br>
                        </li>
                        <li class=" text-[#5EF2B2] text-center hover:text-[#FF82FF]">
                            <a href="mailto::steevensmaissa@gmail.com?">steevensmaissa@gmail.com </a><br>
                        </li>
                        <li class="text-[#FF82FF] text-center hover:text-[#FFF47F]">
                            <a href="mailto::nathan.chaldebas@edu.ece.fr?">nathan.chaldebas@edu.ece.fr</a><br>
                        </li>
                        </p>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</body>

</html>