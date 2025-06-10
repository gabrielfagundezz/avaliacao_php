<?php
session_start();
session_unset(); // remove  as variaveis da sessão
session_destroy(); // destrói a sessão

header("Location: index.php");
exit;
?>