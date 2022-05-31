<?php
$curl = curl_init();
    curl_setopt_array($curl,[
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_URL => "https://restcountries.com/v3.1/name/{$replaced_username}?fullText=true"
    ]);
    
    $response = curl_exec($curl);
    $information = json_decode($response, true);

    if(isset($information[0]["name"]["common"])):?>
   <?php 
      $name = $information[0]["name"]["common"];
      $capital = $information[0]["capital"][0];
      $region =  $information[0]["region"];

      require_once "addToDatabase.php";
      $sql = "INSERT INTO countries(name,capital,region,image) VALUES('$name', '$capital','$region','$save')";
      if(!mysqli_query($con,$sql))
      {
        echo "error";
      }
      require_once "showfromData.php";
    elseif(isset($information["status"])):?>
      <div class="pt-3 text-red-500 text-lg">
            <p>Country Not Found, <br> Please Enter Correct Country Name</p>
    </div>
    <?php endif; ?>
