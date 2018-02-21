<?php include '_header.php' ?>

<div class="container">
    <div>
        <h3><?=$post['title']?></h3>
    </div>
    <div>
        <p><mark>Опубликовано:</mark> <?=$post['date']?></p>
    </div>
    <div>
        <p><?=$post['content']?></p>
    </div>
</div>

<?php include '_footer.php' ?>
