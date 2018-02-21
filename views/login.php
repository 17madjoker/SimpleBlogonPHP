<?php include '_header.php' ?>

<div class="container">
    <form action="" class="form-control" method="post">
        <label for="login">Логин</label>
        <input type="text" name="login">
        <label for="password">Пароль</label>
        <input type="password" name="password"><br>
        <button type="submit" name="send" class="btn btn-primary ">Авторизация</button>
    </form>
</div>

<?php if(isset($_SESSION['message'])): ?>
<div>
    <mark><?php echo$_SESSION['message'];
        unset($_SESSION['message']);?>
    </mark>
</div>
<?php endif ?>

<?php include '_footer.php' ?>