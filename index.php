<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
?>
<?php
require_once "./variables.php";
require_once "./functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Recettes de cuisine : Erreur</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="header.css">

</head>

<body>
     <?php require_once './header.php'; ?>
    <div class="container">
        <h1>Liste des recettes de cuisine</h1>
        <?php foreach(getRecipes($recipes) as $recipe) : ?>
        <article>
            <h3><?php echo $recipe['title']; ?></h3>
            <div><?php echo $recipe['recipe']; ?></div>
            <i><?php echo displayAuthor($recipe['author'], $users); ?></i>
        </article>
        <?php endforeach ?>
    </div>
</body>
</html>
