<?php

$plainText = "Hellow Mohiuddin bhuiyan";

$encrypted = "";
$textLen = strlen($plainText);

//echo $textLen;

for ($i=0; $i <$textLen ; $i++) { 
    $letter = $plainText[$i];
    $ascii = ord($letter);
    
    $newAscii = $ascii+1;
    $newLetter = chr($newAscii);
    $encrypted .= $newLetter;
}
echo $encrypted . "\n";

$encryptedText = "Ifmmpx!Npijveejo!civjzbo";

$decryptedText = "";
$textLen = strlen($encryptedText);

//echo $textLen;

for ($i=0; $i <$textLen ; $i++) { 
    $letter = $encryptedText[$i];
    $ascii = ord($letter);
    
    $newAscii = $ascii-1;
    $newLetter = chr($newAscii);
    $decryptedText  .= $newLetter;
}
echo $decryptedText;   


