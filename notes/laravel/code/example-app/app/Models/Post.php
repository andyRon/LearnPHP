<?php

namespace App\Models;

class Post
{
    public $title;

    public function __construct($title)
    {
        $this->title = $title;
    }
}
