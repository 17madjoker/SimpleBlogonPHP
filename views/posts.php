<?php include '_header.php' ?>
<?php foreach($posts as $post): ?>
    <div class="one-post container">
        <div>
            <h3><?=$post['title']?></h3>
            <a href="post.php?id=<?=$post['id']?>"
               class="btn btn-outline-success">Читать</a>
        </div>
        <div>
            <p><i>Опубликовано: </i><?=$post['date']?></p>
        </div>
        <div>
            <p><i>Краткое описание:<br></i><?=$post['description']?></p>
        </div>
    </div>
<?php endforeach ?>
<?php include '_footer.php' ?>