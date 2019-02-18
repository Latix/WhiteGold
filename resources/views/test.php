<?php

use Blaze\File\File;
use App\Models\User;

// print "<pre>";
// print '<p><a href="'.__url("./", TRUE).'">Home</a></p>';
// print "<p>Welcome Guest \u{1F60D}</p>";
// print "<p>Write your test code here:</p>";

// print "<p>Memory Usage: ".File::sizeBytesToText(memory_get_usage(true))."</p>";

print APP;

$user = new User();
// $query = $user->newUser((object) [
//     'id' => '12',
//     'fullName' => "Kamsi kodi",
//     'sex' => "M",
//     'email' => 'kamsi@gmail.com',
//     'password' => '1234'
// ]);

// if($query){
//     echo "<br>success";
// } else{
//     echo "failed";
// }
$user->updateLastLogin (1);
//Encrypt::passwordEncrypt($userObject->password)
