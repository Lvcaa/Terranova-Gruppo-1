<?php
         session_start();
         
         if (!$user_cookie_exists && (!isset($_SESSION['user_id']) || !isset($_SESSION['user_email']) || !isset($_SESSION['user_name']) || !isset($_SESSION['user_surname']))) {
             header("Location: ../html/login.html");
             exit();
         }
         ?>