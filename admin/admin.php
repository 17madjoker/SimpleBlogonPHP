<?php session_start();
if (isset($_SESSION['login']) and isset($_SESSION['password'])): ?>
<?php
require_once '../db/db.php';
require_once '../models/Post.php';
$db = db_connect();
$posts = post_all($db);?>
<?php if(!isset($_GET['action'])): ?>
<?php
include_once '../views/_header.php';
include_once '../views/posts_admin.php';
include_once '../views/_footer.php'
?>
<?php endif; ?>
<?php if($_GET['action'] == 'add_post')
    {
        if ($_POST['submit'] == 'add')
        {
            $add_post_result = post_new(
                $db,
                $_POST['title'],
                $_POST['description'],
                $_POST['content'],
                $_POST['date']
            );  header('Location: admin.php');
        }
        include_once '../views/_header.php';
        include_once '../views/add_post.php';
        include_once '../views/_footer.php';
    }
?>
<?php if($_GET['action'] == 'edit' and isset($_GET['id']))
    {
        if (!empty($_POST) and isset($_GET['id']))
        {
            $add_post_result = post_edit(
                $db,
                $_GET['id'],
                $_POST['title'],
                $_POST['description'],
                $_POST['content'],
                $_POST['date']
            );  header('Location: admin.php');
        }
        $post = post_get($db,$_GET['id']);
        include_once '../views/_header.php';
        include_once '../views/add_post.php';
        include_once '../views/_footer.php';
    }
?>
<?php if($_GET['action'] == 'delete' and isset($_GET['id']))
    {
        post_delete($db,$_GET['id']);
        header('Location: admin.php');
    }

?>
<?php endif; ?>
<?php if(!isset($_SESSION['password']) and !isset($_SESSION['login']))
header('Location: index.php'); ?>








