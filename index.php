<?php

$sheeps = ['bleee'];

//for'as  su reference
for ($i = 0; $i < 5; $i++) {
    $sheeps[] =& $sheeps[$i];
}


$sheeps[3]='trasas';
var_dump($sheeps);
