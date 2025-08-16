<?php

$Login = $_GET['login'];
$Msg = $_GET['msg'];

$Message = "[" .date("H:I") "]" "[" . $Login . "] - " . $Msg

file_put_contents("Chats.txt", "$Message/n", FILE_APPEND);

?>
