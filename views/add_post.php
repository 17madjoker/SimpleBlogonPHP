<div class="container">
    <form action="" method="post" class="form-control">
        <div class="form-group">
            <label for="title">Заголовок</label>
            <input type="text" name="title" required
                value="<?=$post['title']?>">
        </div>
        <div class="form-group">
            <label for="description">Описание</label>
            <input type="text" name="description" required
                value="<?=$post['description']?>">
        </div>
        <div class="form-group">
            <label for="content">Контент</label>
            <textarea name="content" id="" cols="30" rows="10"
                class="form-control" required><?=$post['content']?></textarea>
        </div>
        <div class="form-group">
            <label for="date">Дата</label>
            <input type="date" class="form-control"
                name="date">
        </div>
        <button type="submit" class="btn btn-outline-success" name="submit" value="add">Добавить</button>
        <?php if(isset($add_post_result)): ?>
            <div class="alert alert-warning" role="alert">
            <?=$add_post_result?>
            </div>
            <?php unset($add_post_result) ?>
        <?php endif; ?>
    </form>
</div>