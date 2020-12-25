#!/usr/bin/php

<?php

$red    = "\033[1;31m";
$yellow = "\033[1;33m"; 
$normal = "\033[0m";

system("clear");

echo "\n$red

$red   ____      _ __        __   _     ____                     $normal 
$red  / ___| ___| |\ \      / /__| |__ |  _ \ __ _  __ _  ___    $normal
$red | |  _ / _ \ __\ \ /\ / / _ \ '_ \| |_) / _` |/ _` |/ _ \   $normal
$red | |_| |  __/ |_ \ V  V /  __/ |_) |  __/ (_| | (_| |  __/   $normal
$red  \____|\___|\__| \_/\_/ \___|_.__/|_|   \__,_|\__, |\___|   $normal
$red                                                |___/        $normal";


echo "\n     $yellow     Author : Rahat Khan Tusar(RKT)     $normal";
echo "\n     $yellow     Github : https://github.com/r3k4t  ================> ";


echo "content-type: text/html\n\n";
$web=file_get_contents("weblink.txt");
system("curl $web");
?>