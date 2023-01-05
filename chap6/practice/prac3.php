<?php
function processNumber(callable $func, float ...$args): array {
  foreach ($args as $arg) {
    $result[] = $func($arg);
  }
  return $result;
}
[$x, $y] = processNumber(
  fn($num)=> $num ** 2,
  5, 15);
print $x; // 結果：25
print '<br />';
print $y; // 結果：225
