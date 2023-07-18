<?php

$hari = "Sabtu";
$mood; 
switch($hari){
    case 'senin';
        $mood = 'senin | stress';
        break;
    case 'selasa';
        $mood = 'sedikit stress';
        break;
    case 'rabu';
        $mood ='udah engga terlalu stress';
        break;
    case 'kamis';
        $mood = 'udah mulai seyum';
        break;
    case 'jum`at';
        $mood = 'senyum';
    case 'saptu';
    case 'minggu';
        $mood ='biasa aja';
        break;
    default:
        $mood = 'biasa aja';
        break;
}

echo "Hari ini saya " . $mood;