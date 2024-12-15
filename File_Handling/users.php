<?php
$userData = file_get_contents("users.json");
$users = json_decode($userData, true);

$username = "Hafiz";
$password = "pass123";

foreach ($users as $u=>$p){
    if($u==$username && $p==$password){
        echo "Login Successful";
        exit;
    }
}
 echo "Login failed, Provide Create username and password";
exit;
      
?>