<?php
    
    function tekaTeki($_angka)
    {
        $saklar = 3;
        $lampu = 15;

        $pisah = str_split($_angka);

        if(floor($lampu/$pisah[0]) == 7)
        {
            $hasil = 7;
        }else if(floor($lampu/$pisah[1]) == 7){
            $hasil = 7;
        }else if(floor($lampu/$pisah[2]) == 7){
            $hasil = 7;
        }
        else if(floor($lampu/$pisah[3]) == 7){
            $hasil = 7;
        }else{
            $hasil = 0;
        }


        if($hasil == 7){
            $jawab = ['true','true','true','true','true','true','true','true','false','false','false','false','false','false','false',];

            shuffle($jawab);

            print_r($jawab);

            $lampuNyala = $lampu-$hasil;
            echo 'Jumlah Lampu Menyala Adalah = '.$lampuNyala.'<br>';
            echo  'Jumlah Lampu Mati Adalah = '.$hasil.'<br>';
        }else{
            echo 'Tidak Ada Lampu Yg Menyala';
        }
    }

    echo tekaTeki(1321);
?>