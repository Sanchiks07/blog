<?php require "components/header.php" ?> <!-- obligāti jāpieraksta php, lai strādātu -->
<?php require "components/navbar.php" ?>

    <div class="container">
        <h1>Blogs</h1>

        <form>
            <input name="search_query" value=<?= $_GET["search_query"] ?? "" ?>/>
            <button class="search"><img src="css/search.png" height=15px width=auto> Meklēt</button>
        </form>

        <?php if (count($posts) == 0) { ?>
            <p>Netika atrasts neviens ieraksts</p>
        <?php } ?>

        <ul class="izvads">
            <?php foreach ($posts as $post) { ?>
                <li> <?= $post["content"] ?> </li> <!-- "?=" īsā php izvade (aizstāj - php echo) -->
            <?php } ?>
        </ul>
    </div>
<?php require "components/footer.php" ?>