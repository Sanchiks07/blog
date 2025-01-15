<?php require "components/header.php" ?>
<?php require "components/navbar.php" ?>

    <div class="container">
        <h1>Kategorijas</h1>

        <form>
            <input name="search_query" value="<?= $_GET["search_query"] ?? "" ?>"/>
            <button class="search_save"><img src="css/search.png" height=15px width=auto> Meklēt</button>
            </form>

        <?php if (count($categories) == 0) { ?>
            <p>Kategorija netika atrasta</p>
        <?php } ?>

        <ol>
            <?php foreach ($categories as $category) { ?>
                <li> <?= $category["category_name"] ?> </li>
            <?php } ?>
        </ol>
    </div>
<?php require "components/footer.php" ?>