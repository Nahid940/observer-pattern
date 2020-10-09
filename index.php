<?php
include_once 'vendor/autoload.php';
//$man=new \App\Man();
//$man1=new \App\Man();
//$man2=new \App\Man();
//echo $man->count();
//echo count($man);

//$subject=new \App\observer\Subject();
//$o1=new \App\observer\ConcreteObserver();
//$subject->attach($o1);

//$o2=new \App\observer\ConcreteObserver2();
//$subject->attach($o2);
//$subject->changeState(rand(0,10));
//$subject->someBusinessLogic();

//$subject->someBusinessLogic();
//$subject->detach($o2);
//$subject->someBusinessLogic();


$password_changed=true;
$userSubject=new \App\userobserver\UserSubject($password_changed);
$userSubject->attach(new \App\userobserver\PasswordChangeObserver(new \App\userobserver\SmsSender()));
$userSubject->notify();


