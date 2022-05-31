<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Challenge 3</title>
</head>
<body class="text-gray-600 max-w-3xl m-auto flex flex-col  justify-center items-center bg-purple-200 font-serif subpixel-antialiased">
<div class="">
<form  action="index.php" method="POST" enctype="multipart/form-data" class="flex flex-col  justify-center items-start max-w-xs pt-10">
    <label for="validationDefault01" class="text-3xl font-bold pb-5">Enter Country Name</label>
    <input type="text"  name="username" pattern='[A-Za-z\\s ]*' placeholder="Country name" class="text-gray-700 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline mb-5"  required>
    <input type="submit" name="submit" value="submit" class="bg-purple-500 hover:bg-purple-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
</form>
<?php  if ($_SERVER['REQUEST_METHOD'] === 'POST'):
       $username = $_POST["username"];
       $replaced_username = str_replace(' ', '%20', $username);
       require_once "database.php"; ?> 
<?php endif ?>
    <div class="pt-3">
        <a href="searchedCountries.php">
            <p>See All Searched Countries</p>
        </a>
    </div>
</body>
</html>