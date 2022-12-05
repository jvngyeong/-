<?php
    session_start();
    $userid = $_SESSION['id'];
    unset($_SESSION['id']);


  echo("
       <script>
          location.href = 'login.html'; 
         </script>
       ");
?>