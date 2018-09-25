<?php 

/*
* JetBrains License Validation Bypass Script
* Coded by @inject0r16
* Special Thanks : @coderantidote
* ahmeth4n.org ~ M4Crew
*/

$file = "C:\Windows\System32\Drivers\etc\hosts";
$text = "0.0.0.0 account.jetbrains.com";
$open = fopen($file, "a+");
fwrite($open , $text);
fclose($open);
echo 'The host file has been configured successfully.';

/* Lisans Kodu Alma Kismi */

$kod = file_get_contents("http://idea.lanyus.com/getkey");
touch('key.txt');

$keygen = fopen('key.txt', 'w+');
fwrite($keygen, $kod);
fclose($keygen);
echo 'Keygen was created successfully.';
?>