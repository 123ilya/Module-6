<?php

// 1
$textStorage = [];
//2-------------------------------
function add($title, $text, &$array)
{
 $subArray             = [];
 $subArray[0]['title'] = $title;
 $subArray[0]['text']  = $text;
 array_push($array, $subArray);
}

add('djope','ojkjhkjhkjhkjhkjh',$textStorage);
add('писке','гдппалрпаорпаоап',$textStorage);
var_dump($textStorage);