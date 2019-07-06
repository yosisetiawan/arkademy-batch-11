<?php

   
  function buyNoodle($_tanggal,$_uang)
  {
    $harga = 2500; 
    $bonus;
    $totalBonus;
    $total;
    $qty = $_uang/$harga;

    
    if($_tanggal%2 == 0){
        // Bonus Tanggal Genap
        if($qty >= 4){
           $bonus = floor($qty/4);
        }else{
          $bonus = 0;
        }
    }else{ 
        // Bonus Tanggal Ganjil
       if($qty >= 3){
           $bonus = floor($qty/3);
       }else{
         $bonus = 0;
       } 
    }

    // Bonus Kelipatan 5
    if($_tanggal%5 == 0){
      if($bonus%2 == 0){
        $totalBonus = $bonus*10;
      }else{
        $totalBonus = $bonus*5;
      }
    }else{
      $totalBonus = 0;
    }

    return $total = $qty+$totalBonus;
  }

  echo buyNoodle(25,50000)

?>