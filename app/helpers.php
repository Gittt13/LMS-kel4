<?php


if(!function_exists('is_active')){
    function is_active($uri) : string
    {
        return request()->is($uri) ? 'active' : 'not';
    }
}

// Fungsi untuk mendeteksi mime type dari string biner
function detectMimeType (string $input) {
    return (new finfo (FILEINFO_MIME_TYPE))->buffer ($input);
}

// Fungsi untuk membuat tag <img> dari string biner
function constructImageFromBinary ($file, $mime) {
    $contents = $file;
    $base64 = base64_encode ($contents);
    return ('data:'. $mime. ';charset=utf8;base64,'. $base64);
}
