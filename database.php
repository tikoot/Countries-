<?php 
$con = mysqli_connect('localhost', 'root' , '', 'countries_database' );
$check = mysqli_query($con, "SELECT * FROM countries WHERE name = '".$_POST['username']."'");
$result = mysqli_fetch_all($check,MYSQLI_ASSOC);
?>
<?php
    if(mysqli_num_rows($check)):?>
    <div class="pt-4 text-lg font-bold">
        <div class="flex justify-start items-start">
            <p class="pr-8">Country :</p>
        <p class=""><?= $result[0]["name"] ?></p>
        </div>
        <div class="flex justify-start items-start">
        <p class="pr-1">Capital City : </p>
            <p><?= $result[0]["capital"]?></p>
        </div>
        <div class="flex justify-start items-start">
        <p class="pr-12">Region : </p>
            <p><?= $result[0]["region"] ?></p>
        </div>
        <img class="pt-5" src="<?= $result[0]["image"] ?>">
    </div>
<?php
    else:
        require_once "api.php";
    endif; ?>

