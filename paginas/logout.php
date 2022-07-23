<?php

   include_once '../configuracion/UserSession.php';

   $userSession = new UserSession();
   $userSession->closeSession();

   header("location: ../");

?>