<?php require "components/header.php" ?>
<?php require "components/navbar.php" ?>

    <div class="container"><div class="button-container">
        <button class="pogas" onclick="window.location.href='index.php';">Blogs</button>
        <button class="pogas" onclick="window.location.href='story.php';">Story</button>
    </div>

    <h1>Kategorijas</h1>

    <form>
        <input name="search_query" value=<?= $_GET["search_query"] ?? "" ?>/>
        <button class="search"><img src="css/search.png" height=15px width=auto> Meklēt</button>
        </form>

    <?php if (count($categories) == 0) { ?>
        <p>Kategorija netika atrasta</p>
    <?php } ?>

    <ul>
        <?php foreach ($categories as $category) { ?>
            <li> <?= $category["category_name"] ?> </li>
        <?php } ?>
    </ul>
    </div>
<?php require "components/footer.php" ?>