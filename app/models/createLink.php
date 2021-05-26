<?php

if (
    isset($_GET['action'])
    && $_GET['action'] === 'ready'
    && isset($_GET['hash'])
    && isset($_GET['key'])
) {
    $link = explode('?', $_SERVER['HTTP_REFERER'])[0];
    $link .= '?action=show&key='.$_GET['key'].'&hash='.$_GET['hash'];
    echo $link;
} else {
    echo 'Error: no info';
}
