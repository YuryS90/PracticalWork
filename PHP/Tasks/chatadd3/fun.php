<?php
function bb_code($text) {
    
    $arrPat = [
        "/\[b\](.*)\[\/b\]/i",
        "/\[i\](.*)\[\/i\]/i",
        "/\[u\](.*)\[\/u\]/i",
        '/\[IMG\](.*)\[\/IMG\]/',
    ];

    $arrRep =  [
        "<b>$1</b>",
        "<i>$1</i>",
        "<u>$1</u>",
        "<img src='$1'>"
    ];

    return preg_replace($arrPat, $arrRep, $text);
}

function smile($t) {
    $arrPat = [
        "/(\:\-\))|(\:\))/",
        "/(\:\-\()|(\:\()/"
    ];

    $arrRep = [
        "<img src='images/smiling.png' width='16' height='16'>",
        "<img src='images/sad.png' width='16' height='16'>"
    ];

    return preg_replace($arrPat, $arrRep, $t);
    
}

function cens($text) {
    
    $pat = "/питон|редиска/";

    if (preg_match($pat, $text)) {
        return "Не ругайся!";
    } else {
        return $text;
    }
}

function md($text) { // md - markdown
    $arrPat = [
        '/\*\*(.*?)\*\*/',
        '/\*(.*?)\*/',
    ];

    $arrRep =  [
        "<b>$1</b>",
        "<i>$1</i>"
    ];

    return preg_replace($arrPat, $arrRep, $text);
}

// function url_img($img) { // эта функция не работает вместе с функцией url_link
//     $arrPat = [
//         '/https\:\/\/.*\.jpg|png|gif/i',
//         // '/https\:\/\/.*/',
        
//     ];

//     $arrRep =  [
        
//         "<img src='$0' width='100' height='100'>",
//         // "<a href='$0'>click me</a>"
       

//     ];

//     return preg_replace($arrPat, $arrRep, $img);
// }

function url_link($link) {
    $arrPat = [
        
        '/https\:\/\/.*/',
        
    ];

    $arrRep =  [
        
        
        "<a href='$0'>перейти по ссылке</a>"
       

    ];

    return preg_replace($arrPat, $arrRep, $link);
}
