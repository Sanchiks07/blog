<?php require "views/components/header.php" ?> <!-- obligāti jāpieraksta php, lai strādātu -->
<?php require "views/components/navbar.php" ?>

    <div class="container">
        <h1>Kategorijas</h1>

        <?php
            
        ?>

        <ol>
            <?php foreach ($categories as $category) { ?>
                <li><a href="show?id=<?= $category["id"] ?>"> <?= htmlspecialchars($category["category_name"]) ?> </a></li> <!-- "?=" īsā php izvade (aizstāj - php echo) -->
            <?php } ?>
        </ol>
    </div>
<?php require "views/components/footer.php" ?>