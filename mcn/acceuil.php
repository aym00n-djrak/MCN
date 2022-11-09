<!DOCTYPE html>
<html>

<head>
    <title>Accueil</title>
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
               <h1>This website is a tool for hackers</h1>
               <p>Here you can find some tools to hack</p>
               <p>For example, you can find the IP of a website</p>
               <p>Or you can find the location of an IP</p>
               <p>Or you can find the location of a website</p>
         </div>
      </div>
   </div>
</body>
</html>