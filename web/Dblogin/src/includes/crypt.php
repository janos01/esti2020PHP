<?php


function cryptPass($string) {
    $salt1 = 'kjdfkdsjfldjlfjsd';
    $salt2 = 'i3843kj3kljslj834';
    $saltedStr = $salt1 . $string . $salt2;
    
    //~ $cryptedStr = hash('sha512', $saltedStr);
    $cryptedStr = hash('md5', $saltedStr);    
    
    return $cryptedStr;
}
