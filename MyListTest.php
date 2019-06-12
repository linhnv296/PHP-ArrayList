<?php
include_once "MyList.php";

$listone = new MyList();
$listone->addLast(3);
$listone->addLast(2);
$listone->addLast(6);
$listone->addLast(1);
$listone->addLast(9);

echo $listone->size();
echo "<br>";
var_dump($listone->mylist);
$listone->add(1,100);
echo "<br>";
var_dump($listone->mylist);

$listone->remove(1);
echo "<br>";
var_dump($listone->mylist);

echo $listone->ensureCapacity(4);