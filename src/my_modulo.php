<?php

function my_modulo($int, $n)
{
    if (is_int($int) && is_int($n) && $n != 0)
        $res = $int - (floor($int / $n) * $n);
    else
        return (-1);
    return($res);
}
?>