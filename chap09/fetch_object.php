<?php
require_once '../DbManager.php';
require_once 'Book.php';

$db = getDb();
$stt = $db->query("SELECT * FROM book WHERE isbn='978-4-7981-4102-2'");
// if ($row = $stt->fetchObject('Book', [0.1])) {
$stt->setFetchMode(PDO::FETCH_CLASS, 'Book', [ 0.1 ]);
if ($row = $stt->fetch()) {
  print "{$row->title}：{$row->discount()}円";
}
