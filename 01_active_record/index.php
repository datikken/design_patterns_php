<?php
require_once 'vendor/autoload.php';
include_once 'post.php';

$parameters = array('id' => null, 'title' => 'Sample Title', 'body' => 'This is the body', 'create_date' => '2015-01-27');

Post::create($parameters);
$post = Post::all();

dump($post);