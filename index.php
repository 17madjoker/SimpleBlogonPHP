<?php

require_once 'db/db.php';
require_once 'models/Post.php';

$db = db_connect();

$posts = post_all($db);

require_once 'views/posts.php'
?>




