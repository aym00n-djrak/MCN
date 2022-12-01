<!DOCTYPE html>
<html>

<head>
    <title>Accueil</title>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
<div class="flex bg-[#0f1621]">
    <div class=" flex-auto bg-gray-800 h-auto p-5 pt-8 w-64 rounded">
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
        <div class="p-7 text-white bg-[#0f1621] flex-auto">
            <div>
                <h1 class="text-4xl sm:text-5xl md:text-6xl font-[Raleway] text-center p-5">Linux:</h1>
                </br>
                <p>Linux a été créé par Linus Torsvald en 1991. C'est une famille de systèmes d'exploitation libre et gratuit de type Unix fondé sur le noyau Linux</p>
                </br>
                <img src="images/linus.png" width="200" height="200" class="rounded-full mx-auto">
                </br>

                <p> Il est utilisé par plein de distribution comme Ubuntu, Debian, Fedora, Red Hat, Arch Linux, etc...</p>
                <p> Apple utilise aussi Linux pour ses serveurs.</p>
                <p> MacOS est en effet basé sur Linux.</p>
                </br>

                <p>Il est très utilisé dans le monde de la programmation et de la sécurité informatique.</p>
                <p> On peut le retrouver dans des Raspberry avec RaspianOS ou dans des serveurs avec Debian.</p>
                <p>C'est un système d'exploitation très complet et très puissant !</p>
                </br>

                <p>Je vous conseille comme distribution:</p>
                </br>

                <ul class="list-disc list-inside">
                    <li>
                        <a href="https://ubuntu.com/download/desktop" class="text-[#FF82FF] hover:text-[#FFF47F]">Ubuntu</a>
                    </li>
                    <li>
                        <a href="https://www.debian.org/distrib/" class="text-[#FF82FF] hover:text-[#FFF47F]">Debian</a>
                    </li>
                    <li>

                        <a href="https://www.archlinux.org/download/" class="text-[#FF82FF] hover:text-[#FFF47F]">Arch Linux</a>
                    </li>

                    <li>
                        <a href="https://getfedora.org/fr/" class="text-[#FF82FF] hover:text-[#FFF47F]">Fedora</a>
                    </li>

                    <li>
                        <a href="https://www.redhat.com/en/technologies/linux-platforms/enterprise-linux" class="text-[#FF82FF] hover:text-[#FFF47F]">Red Hat</a>
                    </li>

                    <li>
                        <a href="https://www.opensuse.org/" class="text-[#FF82FF] hover:text-[#FFF47F]">OpenSuse</a>
                    </li>

                    <li>
                        <a href="https://www.gentoo.org/downloads/" class="text-[#FF82FF] hover:text-[#FFF47F]">Gentoo</a>
                    </li>

                    <li>
                        <a href="https://www.kali.org/downloads/" class="text-[#FF82FF] hover:text-[#FFF47F]">Kali Linux</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>