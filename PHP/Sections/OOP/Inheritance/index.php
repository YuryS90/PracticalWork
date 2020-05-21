<?php
include('autoload.php');

$student = new Student("Peter", "Ivanov");
echo $student->introduce();
echo $student->learn('math');
    
echo "<br>";

$teacher = new Teacher("Aleksandr", "Pushkin");
echo $teacher->introduce();
echo $teacher->teach();

echo "<br>";

$engineer = new Engineer("Vitaly", "Sidorov");
echo $engineer->introduce() . $engineer->work();
echo $engineer->learn('');
