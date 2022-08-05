<?php

require("classe_Login/login.php");
require("api_Login/login.php");

use classeLogin\Login;
use apiLogin\Login as apiLogin;

$meuLogin = new \classeLogin\login(); // primeira forma de como ultilizar NAMESPACE//
$meuLogin->verificaRLogin();

$meuLofin2 = new Login(); // 2° forma de usar o NAMESPACE

$meuLogin3 = new login(); // 3° forma de usar o NAMESPACE
$meulogin->apiLogin();