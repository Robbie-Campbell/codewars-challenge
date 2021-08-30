<?php
function accum($stringToConvert) {
    $unmumbledString = str_split($stringToConvert);
    return ucfirst($arr[0]) . implode("-", array_map('convertSingleLettersToMumbleValues', 
                                                     $unmumbledString, array_keys($unmumbledString)));
  }
  
  function convertSingleLettersToMumbleValues($letterToConvert, $index) {
    return ucfirst(strtolower(str_repeat($letterToConvert, $index + 1)));
  }
/*
  This time no story, no theory. The examples below show you how to write function accum:

Examples:
accum("abcd") -> "A-Bb-Ccc-Dddd"
accum("RqaEzty") -> "R-Qq-Aaa-Eeee-Zzzzz-Tttttt-Yyyyyyy"
accum("cwAt") -> "C-Ww-Aaa-Tttt"
The parameter of accum is a string which includes only letters from a..z and A..Z.
*/