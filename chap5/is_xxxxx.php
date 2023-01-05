<?php
var_dump(is_int(101));                           // 結果：bool(true)
var_dump(is_int('101'));                         // 結果：bool(false)
var_dump(is_numeric('101'));                     // 結果：bool(true)
var_dump(is_float(1.5E8));                       // 結果：bool(true)
var_dump(is_resource(fopen('access.log', 'r'))); // 結果：bool(true)
var_dump(is_null(''));                           // 結果：bool(false)
