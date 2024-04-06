<?php

//print_r(token_get_all('xx'));

$Users = array('tom', 'jack', 'lucy');
?>


<h1>andy come to laravel</h1>

<div>
    @foreach($Users as $user)
        Hello, {{ $user }} <br>
    @endforeach
</div>


