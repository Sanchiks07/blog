<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<div class="container">
    <h1>Izveido kategoriju</h1>

    <form method="POST">
        <label><textarea class="ieraksts" name="category_name" placeholder="Izveidot kategoriju.." ><?= $_POST["category_name"] ?? "" ?></textarea></label><br>
        <button class="search_save">Saglabāt</button>

        <?php if(isset($errors["category_name"])) { ?>
            <p class="error"><?= $errors["category_name"] ?></p>
        <?php } ?>
    </form>
</div>
<?php require "views/components/footer.php" ?>