<?php 
function feast($beast, $dish){
  return str_split($beast)[0] == str_split($dish)[0] && str_split($beast)[sizeof(str_split($beast)) - 1] == str_split($dish)[sizeof(str_split($dish)) - 1];
}