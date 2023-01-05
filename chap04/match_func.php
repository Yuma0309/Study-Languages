<?php
$data = 10;
print match($data) {
    hoge() => 'hogeがマッチ',
    foo() => 'fooがマッチ',
    bar() => 'barがマッチ',
};