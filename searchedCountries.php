<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body class="text-gray-600 bg-purple-200 font-serif subpixel-antialiased">
<div class="pt-3 pl-5 ml-0.5  ml-4">
        <a href="index.php">
            <p>Back to search country</p>
        </a>
    </div>
    <div class="mdh:h-full flex items-center text-gray-600">
    <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
<?php 
$con = mysqli_connect('localhost', 'root' , '', 'countries_database' );
$check = mysqli_query($con, "SELECT * FROM countries");
$result = mysqli_fetch_all($check,MYSQLI_ASSOC);
foreach ($result as $country){ ?>
     <div class="p-4 sm:w-1/2 lg:w-1/4">
        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
            <img class="lg:h-72 md:h-48 w-full object-contain object-center" src="<?= $country["image"] ?>">
            <div class="p-6 hover:bg-indigo-700 hover:text-white transition duration-300 ease-in">
                <h1 class="text-2xl font-semibold mb-3"><?= $country["name"] ?></h1>
                <p class="leading-relaxed mb-3">Capital City: <nl2br><?= $country["capital"]?></p>
                <p class="leading-relaxed mb-3">Region: <nl2br><?= $country["region"] ?></p>
            </div>
        </div>
    </div>
<?php } ?>
        </div>
    </div>
</div>
</body>
</html>