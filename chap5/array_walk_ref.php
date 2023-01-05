<?php
$data = ['高江', '掛谷', '日尾', '薄井', '和田'];
array_walk($data,
    function(&$value) {
        $value = "New{$value}";
    }
);
print_r($data); // 結果：Array ( [0] => New高江 [1] => New掛谷 [2] => New日尾 [3] => New薄井 [4] => New和田　)
