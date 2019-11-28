<?php 
$password = "secret";
var_dump($password);
$hash1 = password_hash($password,PASSWORD_DEFAULT);
var_dump($hash1);
$hash2 = password_hash($password,PASSWORD_DEFAULT);
var_dump($hash2);
$hash3 = password_hash($password,PASSWORD_DEFAULT);
var_dump($hash3);

var_dump(password_verify($password,$hash1));
var_dump(password_verify($password,$hash2));
var_dump(password_verify($password,$hash3));