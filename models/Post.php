<?php

function post_all($db)
{
    $query = 'SELECT * FROM posts ORDER BY date DESC';
    $result = mysqli_query($db,$query);
    $posts = mysqli_fetch_all($result,MYSQLI_ASSOC);
    return $posts;
}

function post_get($db,$id)
{
    $query = "SELECT * FROM posts WHERE id=$id";
    $result = mysqli_query($db,$query);
    $post = mysqli_fetch_assoc($result);
    return $post;
}

function post_new($db,$title,$description,$content,$date)
{
    // Обработка данных
    $content = nl2br($content);
    if (empty($date))
    {
        $date = date('Y-m-d H-i-s');
    }
    $query_protect = "INSERT INTO posts (title,description,content,date)
      VALUES ('%s','%s','%s','%s')";
    $query = sprintf($query_protect,
        mysqli_real_escape_string($db,$title),
        mysqli_real_escape_string($db,$description),
        mysqli_real_escape_string($db,$content),
        mysqli_real_escape_string($db,$date));
    if ($result = mysqli_query($db,$query))
    {
        $add_post_result = 'Статья успешно добавлена';
    } else {
        echo mysqli_error($result); die;
    }
    return $add_post_result;
}

function post_edit($db,$id,$title,$description,$content,$date)
{
    $content = nl2br($content);
    if (empty($date))
    {
        $date = date('Y-m-d H-i-s');
    }
    $query_protect = "UPDATE posts SET
        title = '%s',
        description = '%s',
        content = '%s',
        date = '%s' WHERE id='$id'";
    $query = sprintf($query_protect,
        mysqli_real_escape_string($db,$title),
        mysqli_real_escape_string($db,$description),
        mysqli_real_escape_string($db,$content),
        mysqli_real_escape_string($db,$date));
        if ($result = mysqli_query($db,$query))
        {
            $add_post_result = 'Статья успешно изменена.';
        }
        return $add_post_result;
}

function post_delete($db,$id)
{
    $id = (int)$id;
    $query = "DELETE FROM posts WHERE id='$id'";
    if (!$result = mysqli_query($db,$query))
    {
        mysqli_query($result); die;
    }
}

