<!DOCTYPE html>
<html>

<head>
    <title>Template</title>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="flex">
        <div class="bg-[#202020] h-screen overflow-y-auto p-5 pt-8 w-64">
            <a href="index.php"><img src="skull.png" width="200" height="200"></a>
        <ul class="space-y-2">
            <li>
                <a href="ip.php" class="flex p-2 text-white rounded-lg hover:bg-[#141414] hover:text-[#FF82FF]">
                <span class="ml-3">ping</span>
                </a>
            </li>
            <li>
                <a href="nslookup.php" class="flex p-2 text-white rounded-lg hover:bg-[#141414] hover:text-[#FF82FF]">
                <span class="ml-3">nslookup</span>
                </a>
            </li>
            <li>
                <a href="terminal.php" class="flex p-2 text-white rounded-lg hover:bg-[#141414] hover:text-[#FF82FF]">
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
            <!--duplicate li to add a new page-->
        </ul>
        </div>
        <div class="p-7 text-white bg-[#141414] flex-auto">
            <div>
                <!--content here-->
                <h1>Titre</h1>
                <p>tocomplete</p>
            </div>
        </div>
    </div>
</body>
</html>