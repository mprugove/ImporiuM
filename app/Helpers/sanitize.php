<?php

function e($input, $flags = ENT_COMPAT | ENT_HTML401, $encoding = 'UTF-8', $double_encode = false)
{
    static $flags, $encoding, $double_encode;
    if (is_array($input)) {
        return array_map('e', $input);
    } else if (is_scalar($input)) {
        return htmlspecialchars($input, $flags, $encoding, $double_encode);
    } else {
        return $input;
    }
}



