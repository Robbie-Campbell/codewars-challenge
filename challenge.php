<?php
function find_uniq($a) {
    $testCase = str_split(strtolower($a[0]));
    for($i = 0; $i < sizeof($a); $i++) {
      $test = str_split(strtolower($a[$i]));
      $testEnd = str_split(strtolower($a[sizeof($a) - 1]));
      if (array_diff($testEnd, $testCase) == array() && !array_diff($test, $testCase) == array()) {
          return $a[$i];
      }
      if ($i == sizeof($a) - 1 && !array_diff($testEnd, str_split($a[sizeof($a) - 2])) == array()) {
        return $a[$i];
      }
      if (strlen($a[$i]) > 0 && strlen(trim($a[$i])) == 0 || $a[$i] == "") {
        $testCase = str_split(strtolower($a[$i]));
        unset($a[$i]);
        array_shift($a);
      }
    }
    return $a[0];
  }

/*
    There is an array of strings. All strings contains similar letters except one. Try to find it!

    find_uniq([ 'Aa', 'aaa', 'aaaaa', 'BbBb', 'Aaaa', 'AaAaAa', 'a' ]); // => 'BbBb'
    find_uniq([ 'abc', 'acb', 'bac', 'foo', 'bca', 'cab', 'cba' ]); // => 'foo'
    Strings may contain spaces. Spaces is not significant, only non-spaces symbols matters. E.g. string that contains only spaces is like empty string.

    It’s guaranteed that array contains more than 3 strings.

    This is the second kata in series

    https://www.codewars.com/kata/585d8c8a28bc7403ea0000c3/train/php
*/