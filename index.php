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
//var_dump($textStorage);
//------------------------------------------------------------------------------------------
//Функция удаляет элемент из массива.
function remove(int $index, array &$array)
{
    if (isset($array[$index])) {
        unset($array[$index]);
        return true;
    } else {
        return false;
    }
}

//echo remove(1, $textStorage);

//var_dump($textStorage);
//-------------------------------
function edit(int $index, string $title, string $text, array &$array)
{
    if (isset($array[$index])) {
        $array[$index]['title'] = $title;
        $array[$index]['text'] = $text;
        return true;
    } else {
        return false;
    }
}

edit(1, '5555555', 'etgertertererete', $textStorage);


