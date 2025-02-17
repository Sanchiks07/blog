<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<div class="container">
    <h1>Rediģē savu ierakstu</h1>

    <form method="POST">
        <label>
            <input type="hidden" name="id" value="<?= $category["id"] ?>" />
        </label>

        <label>
            <input type="text" name ="category_name" value="<?= $category["category_name"] ?? "" ?>" id="kategorija" />
            <button type="submit">Saglabāt</button>
        </label>

        <?php if(isset($errors["category_name"])) { ?>
            <p class="error"><?= $errors["category_name"] ?></p>
        <?php } ?>
        
    </form>
</div>
    
<?php require "views/components/footer.php" ?>