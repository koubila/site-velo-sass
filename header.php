<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
    if ($page == 'home')
    { echo '<link rel="stylesheet" href="dist/style.css">';}
    else
    {echo '<link rel="stylesheet" href="dist/article.css">';};
    require 'data_articles.php';
    $id =rand(0,count($articles));//C'était plus fun que de mettre id à 0
    if ( isset($_GET['id']) && array_key_exists($_GET['id'], $articles) )
{
    $id = $_GET['id'];
}
    ?>
   
    <title><?= strtoupper($page);?></title> 
</head>

<body>
<header>
    <nav>
        <ul>
            <li class="nav-item">
                <a class="<?php echo ($page == "home") ? 'active' : ''?>" href="?page=home">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="<?php echo ($page == "article") ? 'active' : ''?>" href="?page=article&id=<?= $id ;?>">Article</a>
            </li>
        </ul>
    </nav>
</header>
<style>
    .active{
        color: red;
        font-size: 200%;
    }
</style>