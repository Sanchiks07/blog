<?php require "views/components/header.php" ?>
<?php require "views/components/navbar.php" ?>

<div class="container">
    <h1><?= htmlspecialchars($post["content"]) ?></h1>
    <p><?= $post["category_name"] ?></p>

    <button class="edit" onclick="location.href='edit?id=<?= $post['id'] ?>'">Rediģēt</button>

    <form method="POST" action="/delete">
        <input name="id" value="<?= $post["id"] ?>" type="hidden" />
        <button class="delete">Dzēst</button>
    </form>
</div>
    
<?php require "views/components/footer.php" ?>