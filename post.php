<?php

require_once 'db/db.php';
require_once 'models/Post.php';

$db = db_connect();
$post = post_get($db,$_GET['id']);

include 'views/post.php';
