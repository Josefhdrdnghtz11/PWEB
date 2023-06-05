<?php
$n = 3; //menentukan variable yang akan ditambahkan
$hasil = 0;
// for ($i = 1; $i <= $n; $i++) {
//     $hasil += $i;
//     if ($i != $n) {
//         echo "$i + ";
//     } elseif ($i = $n) {
//         echo "$i = ";
//     }
// }

while ($i <= $n) {
    $hasil += $i;
    if ($i != $n) {
        echo "$i + ";
    } elseif ($i == $n) {
        echo "$i = ";
    }
    $i++;
}

echo "$hasil";

