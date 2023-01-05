<pre>
<?php
var_dump((int)1530.95); // 結果：int(1530)
var_dump((int)-1530.95); // 結果：int(-1530)
var_dump((int)true); // 結果：int(1)
var_dump((string)true); // 結果：string(1) "1"
var_dump((int)false); // 結果：int(0)
var_dump((string)false); // 結果：string(0) ""
var_dump((array)108); // 結果：array(1) { [0]=> int(108) }