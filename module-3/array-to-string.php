<?php
//string to array conversion
$students = explode(', ', 'jamal, kamal, karim, rafiq, hossein,habiba');
$students2 = preg_split('/(, |,)/', 'jamal, kamal,rabeya,jannat,rabu, karim, rafiq, hossein,habiba');

//preg_split('/(, |,)/','jamal, hasan,kamal,salman');
print_r($students2);
$studentsString = join(', ', $students2);
echo $studentsString . "\n";

echo count($students2);