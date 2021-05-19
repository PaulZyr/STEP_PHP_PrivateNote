<?php

if (isset($_POST['btn'])) {
    // $note may be empty. What if I want to send an empty message
    $note = $_POST['note'];
    //$encryptedNote = openssl_encrypt($note,);
    $hashName = uniqid();
    require_once DATA_DIR.'cryptKeys.php';
    $key = rand(0, count($keys));
    $passPhrase = $keys[$key];
    $encrypted = openssl_encrypt($note, ALGORITHM, $passPhrase);

    $fileName = NOTES_DIR.$hashName.FILES_EXT;
    file_put_contents($fileName, $encrypted);
}

header('Location: /index.php?action=ready&key='.$key.'&hash='.$hashName);
