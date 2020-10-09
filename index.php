<?php
include_once 'vendor/autoload.php';

$password_changed=true;
$userSubject=new \App\userobserver\UserSubject($password_changed);
$userSubject->attach(new \App\userobserver\PasswordChangeObserver(new \App\userobserver\SmsSender()));
$userSubject->notify();


