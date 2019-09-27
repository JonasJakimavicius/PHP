<?php

$sheeps = ['bleee'];

//for'as  su reference
for ($i = 0; $i < 5; $i++) {
    $sheeps[] =& $sheeps[$i];
}


foreach ($sheeps as $i => $sheep) {

    unset($sheeps[$i]);
    $sheeps[$i] = $sheep;

}


$sheeps[2] = 'shsshhhshs';
var_dump($sheeps);