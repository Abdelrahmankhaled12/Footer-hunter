<?php
  require_once("../models/order.php");
  require_once("../controllers/usercontroller.php");
  require_once("../models/user.php");

  if(isset($_POST)){
    $userId=$_POST["id"];
    $user=new user;
    $user->setId($userId);
    $usercontro=new usercontro;
    $usercontro->__construct2($user);
    
  }