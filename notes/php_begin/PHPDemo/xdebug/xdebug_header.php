<?php
header( "X-Test", "Testing" );
setcookie( "TestCookie", "test-value" );
var_dump( xdebug_get_headers() );

var_dump(xdebug_memory_usage());
var_dump(xdebug_peak_memory_usage());


echo xdebug_time_index(), "\n";
for ($i = 0; $i < 250000; $i++)
{
    // do nothing
}
echo xdebug_time_index(), "\n";