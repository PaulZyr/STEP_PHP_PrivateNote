<?php
$path = '../notes';

while (true) {
    $files = scandir($path);
    $now = time();
    foreach ($files as $f) {
        if (
            is_file($path.'/'.$f)
            && strlen($f) > 4
            && substr($f, -3) === 'txt'
        ) {
            if ($now - filemtime($path.'/'.$f) > 86400) {
                unlink($path.'/'.$f);
            }
        }
    }
}
