<div class="text-muted container">
    <p>Добро пожаловать, <?=$_SESSION['login']?></p>
    <a href="/admin/admin.php?action=add_post" class="btn btn-outline-success">Добавить статью</a>
</div>
<div style="margin-left: 20px; margin-right: 20px">
<table class="table table-striped table-bordered">
    <tr>
        <th>ID</th>
        <th>Заголовок</th>
        <th>Описание</th>
        <th>Контент</th>
        <th>Дата</th>
        <th>Изменить</th>
        <th>Удалить</th>
    </tr>
    <?php foreach($posts as $post): ?>
        <tr>
            <td><?=$post['id']?></td>
            <td><?=$post['title']?></td>
            <td><?=$post['description']?></td>
            <td><?=$post['content']?></td>
            <td><?=$post['date']?></td>
            <td><a href="
            /admin/admin.php?action=edit&id=<?=$post['id']?>" class="btn btn-outline-success">Изменить</a></td>
            <td><a href="
            /admin/admin.php?action=delete&id=<?=$post['id']?>" class="btn btn-danger">Удалить</a></td>
        </tr>
    <?php endforeach ?>
</table>
</div>