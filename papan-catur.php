<?php

function papan_catur($angka)
{
    // tulis kode di sini
    $pola = $angka;
    for ($i = 0; $i < $angka; $i++) {
        if ($pola == $angka) {
            for ($u = 0; $u < $pola; $u++) {
                echo "# ";
            }
            $pola--;
            echo "<br>";
        } else {
            for ($u = 0; $u < $pola; $u++) {
                echo "# ";
            }
            $pola++;
            echo "<br>";
        }
    }
}

// TEST CASES
echo "<br>" . papan_catur(4);
/*
# # # #
 # # #
# # # #
 # # #
 */

echo "<br>" . papan_catur(8);
/* 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # # 
# # # # # # # #
 # # # # # # #
# # # # # # # #
 # # # # # # #
*/

echo "<br>" . papan_catur(5);
/*
# # # # #
 # # # #
# # # # #
 # # # # 
# # # # #
*/
