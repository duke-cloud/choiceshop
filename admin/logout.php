<?php

  require_once $_SERVER['DOCUMENT_ROOT'].'/choiceshop/core/init.php';
  unset($_SESSION['DUser']);
  header('Location: login.php');
