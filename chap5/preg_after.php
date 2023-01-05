<?php
$str = '<p>サポートサイト<a href="https://www.wings.msn.to/">https://www.wings.msn.to/</a></p>';
if(preg_match('/<a href="(?P<link>.+?)">(?P=link)<\/a>/', $str, $data)) {
    print htmlspecialchars($data[0]);
} // 結果：<a href="https://www.wings.msn.to/">https://www.wings.msn.to/</a>
