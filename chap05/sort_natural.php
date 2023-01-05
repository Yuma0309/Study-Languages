<?php
$data = [ 'img15.png', 'img5.png', 'img2.png', 'img18.png', 'img3.png' ];
sort($data, SORT_STRING);
print_r($data); // 結果：Array ( [0] => img15.png [1] => img18.png [2] => img2.png [3] => img3.png [4] => img5.png )
