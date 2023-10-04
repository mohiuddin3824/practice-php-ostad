<?php
/*
Remove Duplicate Characters

Problem Statement
Write a program that removes duplicate characters from a given string, keeping only the first occurrence of each character.

Input
The input consists of a string.

Output
The output will be a string without any duplicate character.
*/

$line = trim(fgets(STDIN));
$monitor = [];
$output = "";
$lenght = strlen($line);

for ($i=0; $i < $lenght; $i++) { 
    if ($monitor[$line[$i]] == false ) {
        $monitor[$line[$i]] = true;
        $output = $output.$line[$i];
    }
}

print $output;


/*
Check Anagram
বাং
Hint

Problem Statement
You are given two strings 

A and 

B. Your task is check whether the string 

B is anagram of string 

A or not. An anagram of a string is another string that contains the same characters, only the order of characters can be different. For example, “abcd” and “dabc” are an anagram of each other whereas "abcd" and "aabc" are not.

Input
The input consists of two strings 

A and 

B in two lines containing only lowercase English letters.

Output
In output print "YES" if string 

B is anagram of string 

A or "NO" otherwise. Print without quotation mark.

*/

$line1 = fgets(STDIN);
$line2 = fgets(STDIN);

$splitted1 = str_split($line1);
$splitted2 = str_split($line2);

sort($splitted1);
sort($splitted2);

$line1 = join($splitted1);
$line2 = join($splitted2);

if ($line1==$line2) {
    echo "YES";
}else {
    echo "NO";
}
