<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<div class="container">
    <h1>Rediģē savu ierakstu</h1>

    <form method="POST">
        <label>
            <input type="hidden" name="id" value="<?= $post['id'] ?>" />
        </label>

        <label>
            <input type="text" name ="content" value="<?= $post['content'] ?? "" ?>" id="ieraksts" />
            <button type="submit">Saglabāt</button>
        </label>

        <?php if(isset($errors["content"])) { ?>
            <p class="error"><?= $errors["content"] ?></p>
        <?php } ?>
        
    </form>
</div>
    
<?php require "views/components/footer.php" ?>