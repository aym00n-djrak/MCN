<!DOCTYPE html>
<html>

<head>
    <title>Accueil</title>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="text-white bg-[#0f1621] text-center">      
    <div>
        <h1 class="text-4xl sm:text-5xl md:text-6xl font-[Raleway] text-center p-5 text-[#5EF2B2]"> Cours Réseau Informatique</h1>
        <a href="accueil.php" class="text-[#FF82FF]">Retour à l'Accueil</a>
        <h2 class="underline text-2xl sm:text-2xl md:text-2xl font-[Raleway] text-center p-5 text-[#FFF47F]">Introduction</h2>
        <p>Un réseau est un ensemble de machines informatiques reliées entre elles pour échanger des données.</p><p> Pour ce faire, elles ont besoin d’être connectées entre-elles, mais également de se comprendre via un protocole réseau. </p>
        <br>
        <p>Il existe les tailles de réseaux suivante :<p>
            <br>
        <ul>
            <li>•	PAN - Personal Area Network : réseau à l'échelle d'une seule personne</li><br><img src="images/pan.png" class="mx-auto"><br>
            <li>•	LAN - Local Area Network : réseau à l'échelle d'une maison, d'un appartement, d'un bâtiment, d'un campus, d'une école ou encore d'une agence</li><br><img src="images/lan.png" class="mx-auto"><img src="images/lan2.png" class="mx-auto"><br>
            <li>•	MAN - Metropolitan Area Network : réseau à l'échelle d'une ville</li><br><img src="images/man.png" class="mx-auto"><br>
            <li>•	WAN - Wide Area Network : réseau à l'échelle d'un pays, d'un continent, dont le meilleur exemple est Internet</li><br><img src="images/wan.png" class="mx-auto"><br>
        </ul>

        <h2 class="underline text-2xl sm:text-2xl md:text-2xl font-[Raleway] text-center p-5 text-[#FFF47F]">Internet vs Web</h2>
        <p>Quand nous pensons aux réseaux informatiques, nous pensons tout d’abord au web et à Internet, mais qu’est-ce que c’est et comment fonctionnent-ils ?
        Internet est la structure permettant d’envoyer des paquets d’informations d’un ordinateur à un autre tandis que le Web ou le World Wide Web est une application qui fonctionne sur Internet permettant une utilisation plus simple d’Internet : par exemple pour consulter des sites web, naviguer d’un site à un autre en cliquant sur un lien, envoyer ou recevoir des e-mails…
        </p><br><p>
        Voici une très petite portion du web de 2004 :
        </p><br>
        <img src="images/web2004.gif" class="mx-auto">

        <h2 class="underline text-2xl sm:text-2xl md:text-2xl font-[Raleway] text-center p-5 text-[#FFF47F]">Protocoles</h2>
        <p>Afin de mieux comprendre Internet et le World Wide Web, il faut tout d’abord assimiler la notion de protocole informatique </p><p>
        qui est au cœur du fonctionnement de ceux-ci. Un protocole informatique est un ensemble de règles qui régissent les échanges de données</p><p>
        pour permettre la communication entre différents équipements informatiques (pc, smartphone, smartwatch…) ou différents processus (application ou partie d’application informatique).</p><p>
        Ces règles concernent le format et la signification des données transmises entre les équipements ou processus.</p><p>
        Plus simplement, cela peut être représenté comme une langue commune permettant la communication entre deux personnes parlant des langues natales différentes.
        </p>
        <br>
            <img src="images/protocoles1.png" class="mx-auto" width="1000" height="500">
            <img src="images/protocoles2.png" class="mx-auto" width="1000" height="500">
        <br>
        <h2 class="underline text-2xl sm:text-2xl md:text-2xl font-[Raleway] text-center p-5 text-[#FFF47F]">Couches informatiques</h2>
        <p>Les différents protocoles utilisés sont répartis dans des modèles conceptuels permettant de les catégoriser par leur fonctionnement.
        </p><p> Ces modèles évoluent avec le temps, on peut tout d’abord citer le modèle OSI, le modèle TCP/IP et plus récemment le modèle TCP IP Updated.</p><p>
Voici un modèle TCP/IP Updated avec plusieurs des protocoles qui le composent, cliquez sur les protocoles ou les noms des couches pour en savoir plus.
</p>
<br>
<div id="couches" class="grid grid-rows-6 grid-flow-col gap-4">
    <div>Couches</div>
    <a href="#application"><div class="bg-blue-500 hover:bg-blue-700 text-white hover:text-[#FF82FF] font-bold py-2 px-4 rounded">Application</div></a>
    <a href="#transport"><div class="bg-green-500 hover:bg-green-700 text-white hover:text-[#FF82FF] font-bold py-2 px-4 rounded">Transport</div></a>
    <a href="#network"><div class="bg-red-500 hover:bg-red-700 text-white hover:text-[#FF82FF] font-bold py-2 px-4 rounded">Network</div></a>
    <a href="#link"><div class="bg-pink-500 hover:bg-pink-700 text-white hover:text-[#FF82FF] font-bold py-2 px-4 rounded">Link</div></a>
    <a href="#physical"><div class="bg-purple-500 hover:bg-purple-700 text-white hover:text-[#FF82FF] font-bold py-2 px-4 rounded">Physical</div></a>
    <div ></div>
    <div class="bg-blue-500 text-white font-bold py-2 px-4 rounded">Web</div>
    <div class="bg-blue-500 text-white font-bold py-2 px-4 rounded"></div>
    <div class="bg-red-500 text-white font-bold py-2 px-4 rounded">Internet</div>
    <div class="bg-red-500 text-white font-bold py-2 px-4 rounded"></div>
    <div class="bg-red-500 text-white font-bold py-2 px-4 rounded"></div>
    <div>protocoles</div>
    <div class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    <a href="#http" class="hover:text-[#FF82FF]">HTTP</a>,
    <a href="#http" class="hover:text-[#FF82FF]"> HTTPS</a>,
    <a href="#smtp" class="hover:text-[#FF82FF]">SMTP</a>, 
    <a href="#imap" class="hover:text-[#FF82FF]">IMAP</a>, 
    <a href="#pop3" class="hover:text-[#FF82FF]">POP3</a>, 
    <a href="#ssh" class="hover:text-[#FF82FF]">SSH</a>, 
    <a href="#ftp" class="hover:text-[#FF82FF]">FTP</a>, 
    <a href="#ftp" class="hover:text-[#FF82FF]">TFPT</a>, 
    <a href="#dns" class="hover:text-[#FF82FF]">DNS</a>, 
    <a href="#dhcp" class="hover:text-[#FF82FF]">DHCP</a>
    </div>
    <div class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
    <a href="#tcp" class="hover:text-[#FF82FF]">TCP</a>, 
    <a href="#udp" class="hover:text-[#FF82FF]">UDP</a>
    </div>
    <div class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
    <a href="#ip" class="hover:text-[#FF82FF]">IP</a>, 
    <a href="#icmp" class="hover:text-[#FF82FF]">ICMP</a>, 
    <a href="#igmp" class="hover:text-[#FF82FF]">IGMP</a>
    </div>
    <div class="bg-pink-500 hover:bg-pink-700 text-white font-bold py-2 px-4 rounded">
    <a href="#arp" class="hover:text-[#FF82FF]">ARP</a>, 
    <a href="#rarp" class="hover:text-[#FF82FF]">RARP</a>, 
    <a href="#ppp" class="hover:text-[#FF82FF]">PPP</a>, 
    <a href="#slip" class="hover:text-[#FF82FF]">SLIP</a>, 
    <a href="#hdlc" class="hover:text-[#FF82FF]">HDLC</a>
    </div>
    <div class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded">
    <a href="#rs-232" class="hover:text-[#FF82FF]">RS-232</a>,
    <a href="#rs-485" class="hover:text-[#FF82FF]">RS-485</a>, 
    <a href="#ethernet" class="hover:text-[#FF82FF]">Ethernet</a>, 
    <a href="#wifi" class="hover:text-[#FF82FF]">Wi-Fi</a>, 
    <a href="#bluetooth" class="hover:text-[#FF82FF]">Bluetooth</a>, 
    <a href="#usb" class="hover:text-[#FF82FF]">USB</a>, 
    <a href="#firewire" class="hover:text-[#FF82FF]">FireWire</a>, 
    <a href="#hdmi" class="hover:text-[#FF82FF]">HDMI</a>, 
    <a href="#vga" class="hover:text-[#FF82FF]">VGA</a>, 
    <a href="#dvi" class="hover:text-[#FF82FF]">DVI</a>, 
    <a href="#svideo" class="hover:text-[#FF82FF]">S-Video</a>, 
    <a href="#composite" class="hover:text-[#FF82FF]">Composite Video</a>, 
    <a href="#coaxial" class="hover:text-[#FF82FF]">Coaxial Cable</a>, 
    <a href="#fiber" class="hover:text-[#FF82FF]">Fiber Optic Cable</a>
    </div>
</div>
<br>
<h2 id="ip" class="underline text-2xl sm:text-2xl md:text-2xl font-[Raleway] text-center p-5 text-[#FFF47F]">Internet Protocol</h2>
<p>
Tout matériel connecté à un réseau avec une carte réseau est identifié par une adresse IP. Cette adresse peut être assimilée à une adresse postale et permet de communiquer sur le réseau.
Il existe deux types d’adresse IP : </p><p>
-	L’adresse IP version 4 qui est plus ancienne et qui a la forme suivante :</p><p>
     -	L’adresse IP version 6 qui est plus récente, qui remplace petit à petit la version précédente et qui a la forme suivante :</p><p>
        Ce sont les fournisseurs d’accès à Internet (Orange, Free, SFR …) qui attribuent les adresses IP à chaque appareil connecté. Pour ce faire, le protocole <a href="#dhcp" class="hover:text-[#FF82FF] underline">DHCP</a> est utilisé.</p><p>
Mais sachant qu’il est difficile de retenir des séries de chiffres comme les adresses IP, on utilise aujourd’hui des noms symboliques (www.google.fr) pour accéder à ses adresses, pour visiter un site web par exemple.</p><p>
Ces noms symboliques sont appelés noms de domaines et sont traduits automatiquement par le protocole <a href="#dns" class="hover:text-[#FF82FF] underline">DNS</a> ce qui nous permet de naviguer sur le web de manière totalement transparente sans voir aucune adresse IP.</p><p>
Il y a aussi un facteur important à prendre en compte, le nombre d’adresses internet n’est pas illimité. Différentes méthodes ont été mises en place pour réduire l’utilisation de celles-ci :</p><p>
-	<a href="#reseaux-prives" class="hover:text-[#FF82FF] underline">Réseaux privés</a></p><p>
-	<a href="#cidr-vlsm" class="hover:text-[#FF82FF] underline">CIDR / VLSM</a></p><p>
-	<a href="#ip-dynamiques" class="hover:text-[#FF82FF] underline">IP Dynamiques</a></p><p>
Cependant même avec ces méthodes, il n’y a pas assez d’adresses IPv4 disponibles, d’où l’apparition et la mise en place progressive de l’IPv6.
</p>
<br>
<h2 id="reseaux-prives"class="underline text-2xl sm:text-2xl md:text-2xl font-[Raleway] text-center p-5 text-[#FFF47F]">Réseaux privés</h2>
<p>
Nous n’avons pas besoin de connecter tous nos appareils à Internet. Une imprimante par exemple,</p><p> n’a pas besoin d’un accès direct à Internet, il suffit qu’on puisse la contacter sur un réseau local pour </p><p>que cela fonctionne.
En plus du réseau mondial Internet qui est un réseau public, il existe donc une multitude</p><p> de plus petit réseaux privés qui sont dans la plupart des cas des réseaux locaux. </p><p>L’exemple le plus simple de réseau privé est le réseau que vous avez installé dans votre logement.</p><p> Votre box fait office de passerelle entre Internet et votre réseau local en traduisant les adresses qui </p><p>veulent accéder à Internet en l’adresse donnée par votre FAI (processus appelé NAT). </p><p>Les adresses de tous vos équipements autres que votre box sont des adresses IP privées et locales.</p><p> Les plages d’adresses IP privées qui n’existent donc pas sur Internet et qui sont réservées à cet usage sont les suivantes : 
</p><p>
•	10.0.0.0 à 10.255.255.255</p><p>
•	172.16.0.0 à 172.31.255.255</p><p>
•	192.168.0.0 à 192.168.255.255</p>
<br>
<img src="images/reseaux-prives.png" class="mx-auto" height="1000" width="500">
<br>
<h2 id="ip-dynamiques" class="underline text-2xl sm:text-2xl md:text-2xl font-[Raleway] text-center p-5 text-[#FFF47F]">IP Dynamiques</h2>
<p>
Au lieu d’utiliser une adresse IP par client (adresse IP fixe), les fournisseurs d’accès peuvent utiliser une adresse IP dynamique par client :</p><p>
 adresse IP temporaire donnée par votre FAI (fournisseur d’accès internet). Si vous arrêtez d’utiliser Internet, votre adresse IP va être donnée à un autre utilisateur actif.</p><p>
 Une autre adresse vous sera donnée lors de votre prochaine connexion. 
</p>
<br>
<h2 id="tcp" class="underline text-2xl sm:text-2xl md:text-2xl font-[Raleway] text-center p-5 text-[#FFF47F]">TCP</h2>
<p>
TCP : TCP ou Transmission Control Protocol est un protocole qui permet des échanges de données </p><p>
entre deux machines. Ce protocole se déroule en trois étapes. Tout d’abord, la machine source cherche</p><p>
 à établir la connexion avec la machine destinataire. Une fois que cela est fait et que la machine</p><p>
  destinataire est prête à recevoir des données, la machine source commence à envoyer des données </p><p>
  sur forme de paquets. A chaque réception de paquet, le destinataire vérifie que toutes les données </p><p>
  sont présentes, confirme la bonne réception à la source et passe au suivant. S’il manque des données, </p><p>
  le destinataire renvoie le paquet à la source pour réitérer l’envoie. Ce protocole est très pratique car</p><p>
   on ne perd aucune donnée, cependant la communication entre les deux machines peut prendre du temps.
</p>
<br>
<img src="images/tcp.png" class="mx-auto" height="1000" width="500">
<br>
<h2 id="udp" class="underline text-2xl sm:text-2xl md:text-2xl font-[Raleway] text-center p-5 text-[#FFF47F]">UDP</h2>
<p>
UDP : UDP ou User Datagram Protocol est un protocole qui permet des échanges de données entre</p><p>
 deux machines. La machine source envoie toutes les données directement sous forme de paquets à la </p><p>
    machine destination. Il y a très peu de communication entre les deux machines et cela peut entrainer </p><p>
        des pertes de données. Ce mode de communication permet donc un échange très rapide mais de faible qualité.
</p>
<br>
<img src="images/udp.png" class="mx-auto" height="1000" width="500">
<br>
<h2 id="http" class="underline text-2xl sm:text-2xl md:text-2xl font-[Raleway] text-center p-5 text-[#FFF47F]">HTTP / HTTPS</h2>
<p>
HTTP/HTTPS : HTTP ou HyperText Transfer Protocol et HTTPS sa version sécurisé sont les protocoles</p><p>
     les plus utilisés sur internet. Dans un premier temps, le client envoie une requête au serveur HTTP.</p><p>
         Cette requête comporte plusieurs éléments :</p><p>
•	La méthode, il s’agit d’une commande qui permet de faire comprendre au server si on veut</p><p> ajouter, recevoir ou supprimer des données par exemple.</p><p>
•	L’URL, une chaine de caractère qui correspond à l’emplacement du fichier cible dans le serveur.</p><p>
•	La version du protocole utilisé, ici la plupart du temps il s’agira de HTTP/1.0.</p><p>
•	Un en-tête, avec des commandes supplémentaires afin de préciser la nature de la requête. Par</p><p> exemple on peut spécifier le navigateur pour que le server nous renvoie les données propres</p><p> à ce navigateur.</p><p>
•	Le corps de la requête, ici on précise les données de la requête, par exemple quelles données</p><p> on souhaite ajoutées.</p><p>
Après cela, le serveur HTTP peut traiter la requête et renvoie une réponse sous cette forme :</p><p>
•	De nouveau la version du protocole.</p><p>
•	Un code de réponse, sous la forme de 3 chiffres et d’un message pour préciser la réussite</p><p> de la requête ou la nature de l’erreur.</p><p>
•	L’en-tête</p><p>
•	Le corps de la réponse, avec les informations demandées par le client.</p><p>

</p>
<br>
<img src="images/http.gif" class="mx-auto" height="1000" width="500">
<br>

    </div>
</body>

</html>