<?php
$data = ['apple' => 'りんご'];
print $data['orange']; // 結果：Warning: Undefined array key "orange" in ~
print @$data['orange']; // 結果：（表示されない）