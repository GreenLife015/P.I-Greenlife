<?php
session_start();
session_unset();
session_destroy();
header("Location:http://localhost/P.I-Greenlife/codigos/entrar.html");
exit();
?>