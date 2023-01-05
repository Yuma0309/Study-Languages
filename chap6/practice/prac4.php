<?php
function refCheck(int &$num) : void {
  print $num. '<br />';
  $num++;
  unset($num);
  print $num. '<br />';
}

$num = 1;
refCheck($num); // 結果：1
print $num; // 結果：2
