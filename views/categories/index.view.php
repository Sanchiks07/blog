<?php require "views/components/header.php" ?> <!-- obligāti jāpieraksta php, lai strādātu -->
<?php require "views/components/navbar.php" ?>

    <div class="container">
        <h1>Blogs</h1>

        <ol>
            <?php foreach ($posts as $post) { ?>
                <li><a href="show?id=<?= $post["id"] ?>"> <?= htmlspecialchars($post["category_name"]) ?> </a></li> <!-- "?=" īsā php izvade (aizstāj - php echo) -->
            <?php } ?>
        </ol>
    </div>
<?php require "views/components/footer.php" ?>