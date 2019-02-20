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


 ?>