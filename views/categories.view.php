<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategorijas</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="container">
    <h1>Kategorijas</h1>

    <form>
        <input name="search_query" value=<?= $_GET["search_query"] ?? "" ?>/>
        <button>Meklēt</button>
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

</body>
</html>