<?php
function checkPrime($n) {

    if ($n == 1) {
      return false;
    }
    if ($n == 2) {
      return $x;
    }
    $x = sqrt($n);
    $x = floor($x);
    for ($i = 2 ;$i <= $x ;++$i) {
      if ($n % $i == 0) {
        return false;
      }
    }
    if($x == $i-1) {
      return true;
    } else {
      return false;
    }
  }
  
  function gap($g, $m, $n) {
    echo $g . " " . $m . " " . $n . "\n";
    $holdingArr = array();
    for($i = $m; $i < $n; $i++) {
      if(checkPrime($i))
      {
          array_push($holdingArr, $i);
      }
    }
    for ($i = 0; $i < sizeof($holdingArr) - 1; $i++) {
      if ($holdingArr[$i + 1] - $holdingArr[$i] === $g) {
        return array($holdingArr[$i], $holdingArr[$i + 1]);
      }
    }
    return null;
  }