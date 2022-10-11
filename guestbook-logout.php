<?php
   # destroy session
   setcookie('auth', '', time()-86400);
   
   session_destroy();
   header('Location: guestbook-login.php');
?>