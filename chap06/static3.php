<?php
function checkStatic(): void {
    static $x = 0;
    $x++;
    print "unset前：{$x} ";
    unset($x);
    $x = 13;
    print "unset後：{$x}<br />";
}

checkStatic(); // 結果：unset前：1 unset後：13
checkStatic(); // 結果：unset前：2 unset後：13
