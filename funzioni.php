<?php
  function bisestile($anno)
  {
    if((($anno % 4) == 0 && ($anno % 100) != 0) || ($anno % 400) == 0)
      return true;
    else {
      return false;
    }
  }

  function ese1($aa, $mm, $gg)
  {
    $giorni = $gg;
    switch($mm){
      case 12:
        $giorni += 30;
      case 11:
        $giorni += 31;
      case 10:
        $giorni += 30;
      case 9:
        $giorni += 31;
      case 8:
        $giorni += 31;
      case 7:
        $giorni += 30;
      case 6:
        $giorni += 31;
      case 5:
        $giorni += 30;
      case 4:
        $giorni += 31;
      case 3:
        if(bisestile($aa))
          $giorni += 29;
        else {
          $giorni += 28;
        }
      case 2:
          $giorni += 31;
    }

    return $giorni;
  }

  function ese2($a)
  {
    $anni = [];

    for($i = 1;$i < 101;$i++){
      if(($a % $i) == 0){
        $anni[] += ($a + $i);
      }
    }

    return $anni;
  }

<<<<<<< HEAD
  function ese3($n){
    $rec = 0;
    for($i = 1;$i <= $n;$i++){
      $rec += 1/$i;
    }
    return $rec;
  }
=======
>>>>>>> eedc8a31bde271e35e99de517a4be3a5b5508a84

 ?>
