<?php
$dt = new DateTime('2021/5/15 10:58:31');
print $dt->format('Y年m月d日 H時i分'); // 結果：2021年05月15日 10時58分
$dt->add(new DateInterval('P1YT10H'));
print $dt->format('Y年m月d日 H時i分'); // 結果：2022年05月15日 20時58分
$dt->sub(new DateInterval('P3MT20M'));
print $dt->format('Y年m月d日 H時i分'); // 結果：2022年02月15日 20時38分
