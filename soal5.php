<?php

    function nilaiNama($_nama){
        $pisah = explode(" ",$_nama);

        $kata1 = str_split($pisah[0]);

        $kata1[0] = 3;
        $kata1[1] = 8;
        $kata1[2] = 18;
        $kata1[3] = 9;
        $kata1[4] = 19;
        $kata1[5] = 20;
        $kata1[6] = 15;
        $kata1[7] = 16;
        $kata1[8] = 5;
        $kata1[9] = 18;

        $hitung1 = array_sum($kata1)*1;
        $kata2 = str_split($pisah[1]);

        $kata2[0] = 19;
        $kata2[1] = 12;
        $kata2[2] = 15;
        $kata2[3] = 22;
        $kata2[4] = 1;
        $kata2[5] = 14;
        $kata2[6] = 15;
        $kata2[7] = 19;
        $kata2[8] = 11;
        $kata2[9] = 9;

        $hitung2 = array_sum($kata2)*2;

        echo '['.$hitung1.', '.$hitung2.']';
    }
    
    echo nilaiNama('Christoper Slovanoski');
?>