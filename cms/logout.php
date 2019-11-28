<?php
require_once "includes/init.php";

Auth::logout();

Url::redirect('/');
