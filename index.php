<?php

$textStorage = [];
//Функция добавляет в конец масива новый элемент (ассациативный массив с полями 'title', 'text');
function add(string $title, string $text, array&$array)
{
 $subArray          = [];
 $subArray['title'] = $title;
 $subArray['text']  = $text;
 array_push($array, $subArray);
}

add('tttttttt', 'ojkjhkjhkjhkjhkjh', $textStorage);
add('rrrrrrrrr', 'гдппалрпаорпаоап', $textStorage);
// var_dump($textStorage);
//Функция удаляет элемент из массива.
function remove(int $number, array&$array)
{
 if ($array[$number]) {
  unset($array[$number]);
  return true;
 } else {
  return false;
 }
}
//-------------------------------
function edit(int $index, string $title, string $text, array&$array)
{
 if ($array[$index]) {
  $array[$index]['title'] = $title;
  $array[$index]['text']  = $text;
  return true;

 } else {
  return false;
 }

}
var_dump(edit(0, '111', '222', $textStorage));
var_dump($textStorage);
