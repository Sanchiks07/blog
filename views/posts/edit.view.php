<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<div class="container">
    <h1>Rediģē savu ierakstu</h1>

    <form method="POST">
        <label>
            <input type="hidden" name="id" value="<?= $post["id"] ?>" />
        </label>

        <label>
            <textarea class="ieraksts" name="content"><?= $post["content"] ?? "" ?></textarea>

            <select name="category_id">
                <?php foreach ($categories as $category){ ?>
                    <option value="<?= $category["id"] ?>" <?= (isset($_POST["category_id"]) && $_POST["category_id"] == $category["id"]) ? "selected" : "" ?>>
                    <?= $category["category_name"] ?>
                    </option>
                <?php } ?>
            </select>

            <br><button type="submit">Saglabāt</button>
        </label>

        <?php if(isset($errors["content"])) { ?>
            <p class="error"><?= $errors["content"] ?></p>
        <?php } ?>
        
    </form>
</div>
    
<?php require "views/components/footer.php" ?>