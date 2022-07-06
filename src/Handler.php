<?php
require '../autoload.php';

$plaintext = $_GET['plaintext'];
$key = $_GET['key'];

$encryptedtext = base64_encode(openssl_encrypt($plaintext, "aes-128-ecb", $key, OPENSSL_RAW_DATA));

$aes = new AES($key);
$aesEncrypted = $aes->encrypt($plaintext);
?>

<hr>
<!-- <h1>text crypted : $encryptedtext ?> </h1>
<p><b>Base 64</b><br> $aesEncrypted->getCipherText(true) ?></p> -->

<p><b>Base 64</b><br><?= $encryptedtext ?></p>
<hr>
