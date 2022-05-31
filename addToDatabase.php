<?php
function randomString($n)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $str = '';
    for($i=0;$i<$n;$i++){
        $index = rand(0,strlen($characters) - 1);
        $str .= $characters[$index];

    }
    return $str;
}

$url = $information[0]["flags"]["png"];
$ch = curl_init($url);
$filename = basename($url);
$save = 'images/'.randomString(7).'/'.$filename;
mkdir(dirname($save));
$fp = fopen($save,'wb');

curl_setopt($ch,CURLOPT_FILE,$fp);
curl_setopt($ch,CURLOPT_HEADER,0);
curl_exec($ch);
curl_close($ch);
fclose($fp);
$name = mysqli_real_escape_string($con,$name);
$capital = mysqli_real_escape_string($con,$capital);
$region = mysqli_real_escape_string($con,$region);
$save = mysqli_real_escape_string($con,$save);
?>