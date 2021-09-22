<?php 
function snail(array $array): array {
    if ($array === [[]]) {
      return array();
    }
    $returnArr = array();
    $arrDupe = $array;
    $size = sizeof($array) - 1;
    $index = 0;
    $horizontal = 0;
    $vertical = 0;
    $area = pow(sizeof($array), 2);
    while ($index < $area) {
      unset($arrDupe[$vertical][$horizontal]);
      if (count($array) > 0) {
        array_push($returnArr, $array[$vertical][$horizontal]);
      }
      else {
        array_push($returnArr, $array[$horizontal]);
      }
      if ($index == $area - pow(sizeof($array) - 2, 2) - 1) {
        $recurredArr = array();
        foreach ($arrDupe as $row) {
          if (!empty($row)) {
            array_push($recurredArr, array_values($row));
          }
        }
        print_r($recurredArr);
        foreach(snail($recurredArr) as $value) {
          array_push($returnArr, $value);
          $index++;
        }
      }
      if ($vertical === 0 && $horizontal < $size) {
        $horizontal++;
      }
      else if ($horizontal === $size && $vertical < $size) {
        $vertical++;
      }
      else if ($vertical === $size && $horizontal > 0) {
        $horizontal--;
      }
      else if ($horizontal === 0 && $vertical !== 0) {
        $vertical--;
      }
      $index++;
    }
    return $returnArr;
  }
  
  # [0, 0], [0, 1], [0, 2], [1, 2], [2, 2], [2, 1], [2, 0], [1, 0], [1, 1]
  # [0, 0], [0, 1], [0, 2], [0, 3], [1, 3], [2, 3], [3, 3], [3, 2], [3, 1], [3, 0], [2, 0], [1, 0], [1, 1], [1, 2], [2, 2], [2, 1]
  # Inner areas
  # 0, 0, 1, 4, 9, 16, 25, 36...