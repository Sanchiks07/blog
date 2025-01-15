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
        <label><input name="content" /></label>
        <button class="search_save">Saglabāt</button>
    </form>
</div>
<?php require "views/components/footer.php" ?>