<?php 
/**
 * session uses cookies and cookies data is send in header, 
 * so before any output session_start has to be called
 * 
 */
session_start();

if(isset($_SESSION["count"])){
	$_SESSION["count"]++;
}else{
	$_SESSION["count"] = 1;
}
var_dump($_SESSION["count"]);