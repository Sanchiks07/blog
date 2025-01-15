<?php require "views/components/header.php" ?> <!-- obligāti jāpieraksta php, lai strādātu -->
<?php require "views/components/navbar.php" ?>

    <div class="container">
        <h1>Blogs</h1>

        <form>
            <input name="search_query" value="<?= $_GET["search_query"] ?? "" ?>"/>
            <button class="search_save"><img src="css/search.png" height=15px width=auto> Meklēt</button>
        </form>

        <?php if (count($posts) == 0) { ?>
            <p>Netika atrasts neviens ieraksts</p>
        <?php } ?>

        <ol>
            <?php foreach ($posts as $post) { ?>
                <li><a href="show?id=<?= $post["id"] ?>"> <?= htmlspecialchars($post["content"]) ?> </a></li> <!-- "?=" īsā php izvade (aizstāj - php echo) -->
            <?php } ?>
        </ol>
    </div>
<?php require "views/components/footer.php" ?>