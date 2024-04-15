<?php

class Strings
{
    static function fix_string($a)
    {
        echo
            xdebug_call_class(1).
            "::".
            xdebug_call_function(1).
            " is called at ".
            xdebug_call_file(1).
            ":".
            xdebug_call_line(1);
    }
}

$ret = Strings::fix_string( 'Derick' );



echo "<br/>-----------------<br/>";

$a = array(1, 2, 3);
$b =& $a;
$c =& $a[2];

xdebug_debug_zval('a');
xdebug_debug_zval("a[2]");

echo "<br/>-----------------<br/>";

