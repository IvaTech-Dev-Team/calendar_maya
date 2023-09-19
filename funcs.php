<?php

/**function dd */
function dd($value)
{
    echo "<pre>";
    print_r($value);
    echo "</pre>";
}

function custom_divmod($dividend, $divisor) {
    $quotient = floor($dividend / $divisor);
    $remainder = $dividend % $divisor;
    return array($quotient, $remainder);
}