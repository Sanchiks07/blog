<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<div class="container">
    <h1>Izveido bloga ierakstu</h1>

    <p>
        Kā tu šodien jūties?<br>
        Par ko tu domā?<br>
        Kāds ir šodienas "daily meme"?<br>
        Kādu jaunu faktu uzzināji?
    </p>

    <form method="POST">
        <label><textarea class="ieraksts" name="content" value="" placeholder="Izveidot ierakstu.." ><?= $_POST['content'] ?? "" ?></textarea></label><br>
        <button class="search_save">Saglabāt</button>

        <?php if(isset($errors["content"])) { ?>
            <p class="error"><?= $errors["content"] ?></p>
        <?php } ?>
    </form>
</div>
<?php require "views/components/footer.php" ?>