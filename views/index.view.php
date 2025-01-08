<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
    <h1>Blogsss</h1>

    <form>
        <input name="search_query" value=<?= $_GET["search_query"] ?? "" ?>/>
        <button>Meklēt</button>
    </form>

    <?php if (count($posts) == 0) { ?>
        <p>Netika atrasts neviens ieraksts</p>
    <?php } ?>

    <ul>
        <?php foreach ($posts as $post) { ?>
            <li> <?= $post["content"] ?> </li> <!-- "?=" īsā php izvade (aizstāj - php echo) -->
        <?php } ?>
    </ul>
    </div>

</body>
</html>