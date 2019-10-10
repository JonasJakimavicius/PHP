<?php

var_dump($_COOKIE);

setcookie('mycookie', 'cookiedata', time()+3600,'/');