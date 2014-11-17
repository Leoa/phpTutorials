<?php

// stored untill user closes broswer short term  cookies longterm.

session_start();// always at top

$_SESSION['name']="Alex";

echo $_SESSION['name'];

// undo session
//unset($_SESSION['name']; or  session_destroy();

?>