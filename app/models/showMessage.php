<?php
if (isset($_GET['hash'])) {
    $hash = $_GET['hash'];
    $key= $_GET['key'];
    $filePath = NOTES_DIR.$hash.FILES_EXT;

    if (is_readable($filePath)) {
        require_once DATA_DIR.'cryptKeys.php';
        $passPhrase = $keys[$key];
        $note = file_get_contents($filePath);
        $decrypted = openssl_decrypt($note, ALGORITHM, $passPhrase);

        echo $decrypted.PHP_EOL;
        echo '<br><p>This Note was deleted from our server.</p>
            <p>Copy it now if you need to keep this information.</p>';

        unlink($filePath);
    } else {
        echo 'This Note was deleted.';
    }
}
