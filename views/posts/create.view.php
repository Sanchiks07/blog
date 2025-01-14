<?php require "views/components/header.php" ?> <!-- obligāti jāpieraksta php, lai strādātu -->
<?php require "views/components/navbar.php" ?>

    <h1>Izveidot bloga ierakstu</h1>

    <form method="POST">
        <label><input name="content" /></label>
        <button>Saglabāt</button>
    </form>

<?php require "views/components/footer.php" ?>