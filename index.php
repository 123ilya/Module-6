<?php

$textStorage = [];
//-------------------------------------------------------------------------------------
//Функция добавляет в конец масива новый элемент (ассациативный массив с полями 'title', 'text');
function add(string $title, string $text, array &$array)
{
    $article = ['title' => $title, 'text' => $text];
    array_push($array, $article);
}

add('tttttttt', 'ojkjhkjhkjhkjhkjh', $textStorage);
add('rrrrrrrrr', 'гдппалрпаорпаоап', $textStorage);
var_dump($textStorage);
//------------------------------------------------------------------------------------------
//Функция удаляет элемент из массива.
function remove(int $number, array &$array)
{
    if ($array[$number]) {
        unset($array[$number]);
        return true;
    } else {
        return false;
    }
}

//-------------------------------
function edit(int $index, string $title, string $text, array &$array)
{
    if ($array[$index]) {
        $array[$index]['title'] = $title;
        $array[$index]['text'] = $text;
        return true;
    } else {
        return false;
    }
}


