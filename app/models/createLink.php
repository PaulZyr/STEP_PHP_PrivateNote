<?php

if (
    isset($_GET['action'])
    && $_GET['action'] === 'ready'
    && isset($_GET['hash'])
    && isset($_GET['key'])
) {
    $link = 'http://localhost:8181/index.php?action=show&key='.$_GET['key'].'&hash='.$_GET['hash'];
    echo $link;
} else {
    echo 'Error: no info';
}
