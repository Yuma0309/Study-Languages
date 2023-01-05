<?php
print abs(-100);                // 結果：100
print base_convert(100, 2, 10); // 結果：4
print ceil(1234.56);            // 結果：1235
print floor(1234.56);           // 結果：1234
print intdiv(10, 3);            // 結果：3
print fmod(10.5, 5);            // 結果：0.5
print max(1, 5, 3);             // 結果：5
print min(1, 5, 3);             // 結果：1
print rand(5, 10);              // 結果：9（実行するたびに変わる）
print pow(2, 4);                // 結果：16
print round(123.456, 2);        // 結果：123.46
print sqrt(10000);              // 結果：100
print cos(deg2rad(60));         // 結果：0.5
print sin(deg2rad(30));         // 結果：0.5
print tan(deg2rad(45));         // 結果：1
print deg2rad(180);             // 結果：3.1415926535898
print exp(1);                   // 結果：2.718281828459
print log10(100);               // 結果：2
print log(125, 5);              // 結果：3
