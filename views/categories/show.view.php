<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<div class="container">
    <h1><?= htmlspecialchars($post["category_name"]) ?></h1>

    <button onclick="location.href='edit?id=<?= $post['id'] ?>'">Rediģēt</button>

    <form method="POST" action="/categories/delete">
        <input name="id" value="<?= $post["id"] ?>" type="hidden" />
        <input type="submit" value="Dzēst" />
    </form>
</div>
    
<?php require "views/components/footer.php" ?>