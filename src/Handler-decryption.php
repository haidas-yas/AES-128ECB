<?php
require '../autoload.php';

$cryptedtext = $_GET['cryptedtext'];
$key = $_GET['key'];

$textchiph =  openssl_decrypt(base64_decode($cryptedtext), "aes-128-ecb", $key, OPENSSL_RAW_DATA);
?>

<hr>
<p><b>Text Claire</b><br><?= $textchiph ?></p>
<hr>
