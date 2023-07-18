<?php

for($i = 1; $i <=10; $i++){
    echo '<br>Angka' . $i;
}

$mood = ['stress', 'sdikit stress', 'udah engga terlalu stress', 'udah mulai seyum', 'seyum', 'full seyum', 'full seyum'];

for($i = 0; $i <7; $i++){
echo '<br>hari ini saya ' . $mood[$i];
}