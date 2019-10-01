<?php
    $text = <<< TEKST
    zsk - zespół
    szkół
    komunikacji
TEKST;

echo "Przed uzyciem funkcji nl2br:<br>$text<br>";

echo nl2br($text),'<br>';

$text = 'Janusz';

echo strtolower($text),'<br>';

echo strtoupper($text),'<br>';

$text = "janusz Kowalski poznań";

echo ucfirst($text),'<br>';

echo ucwords($text),'<br>';

$lorem = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

echo $lorem,'<hr>';
$col = wordwrap($lorem,35,'<br>');
echo $col;
$col = wordwrap($lorem,35,'<hr>');
echo $col;

// czyszczenie
ob_clean();

// usuwanie białych znaków
$name = 'Janusz';
$name1 = '   Janek    ';
echo 'Długość zmiennej $name: ',strlen($name),'<br>'; //6
echo 'Długość zmiennej $name1: ',strlen($name1),'<br>'; //10

echo strlen(ltrim($name1)),'<br>';; //9
echo strlen(rtrim($name1)),'<br>';; //8
echo strlen(trim($name1)),'<br>';; //5

############3 PRzezeszukiwanie ciągów znaków

$adres = "Poznań, ul. Fredry 13, tel. (61) 445-44-58";
$search = strstr($adres,'tel'); //case sensitive
echo $search,'<br>';

$search = strstr($adres,'tel',true);
echo $search,'<br>';

$search = stristr($adres,'Tel');
echo $search,'<br>';

$mail = strstr('zsk@gmail.com','@');
echo $mail,'<br>'; //@gmail.com

$mail = strstr('zsk@gmail.com',64);
echo $mail,'<br>'; //@gmail.com

################################ porownywanie ciagow

$ciag1 = 'a';
$ciag2 = 'aa';

echo strcmp($ciag1,$ciag2); //-1
echo strcmp('z','z'); //   0
echo strcmp('a','z'); //  -1
echo strcmp('z','a'); //   1
echo strcmp('z','za'),'<hr>'; // -1

// pozycja

$pozycja = strpos('abcdefg','cde');
echo $pozycja,'<br>';

$pozycja = strpos('abcdefgcdea','cde');
echo $pozycja,'<br>';

$pozycja = strpos('cdecdeabc','cde');
echo $pozycja,'<br>';

// zad1 sprawdz czy w ciagu text1 znajduje sie ciag text2

$text1 = 'abcdabcd';
$text2 = 'ab';



?>
