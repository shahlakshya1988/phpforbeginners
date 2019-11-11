<?php 
/**
 * cookies are specific to the website particulary domain
 * Sites from different domain can't read the sites
 * they are not hidden, so don't store any sensitive details
 * like password or any thing
 * setcookie(nameofcookies,value)-> settting cookies
 * path shows from the directory from which it is created
 * we can speciy the setcookie function, to make cookie availabe for whole site
 * 
 */
setcookie("name","Lakshya Shah");
setcookie("email","shahlakshya1988@gmail.com",time()+60*60*24*2,"/");
//setcookie("pass","123",time()+60*60*24*2);
setcookie("pass","123",time()+60*60*24*2);
