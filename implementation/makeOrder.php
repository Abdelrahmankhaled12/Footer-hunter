<?php
  require_once("../models/user.php");
  require_once("../controllers/usercontroller.php");
  require_once("../models/order.php");
  if(isset($_POST)){
    $user=new user;
    $id=$_POST["userid"];
    $orderTime=date('d-m-Y H:i:s');
    $user->setId($id);
    $order=new order;
    $order->__construct2("12",$user->getId(),$_POST["orderdetails"],$_POST["totalPrice"],$_POST["fees"],$_POST["mealprice"],$_POST["partnerid"],$_POST["feedback"],$_POST["ratings"],"none",$orderTime,"none");
    $usercontro=new usercontro;
    $usercontro->__construct1();
    $usercontro->setOrder($order);
    $usercontro->makeOrder();
  }