<?php


function testAge ($age)
{
if ($age < 16){
    return "${age} is te jong voor deze film";
}
elseif ($age < 18){
    return "${age}, je hebt ouderlijk toezicht nodig.";
}
elseif($age >= 18){
    return "Je bent al ${age}. Geniet van de film";
}
};

for ($i = 12; $i < 25; $i++){
    echo testAge($i), PHP_EOL;
}

