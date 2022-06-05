
<?php 
require 'data_articles.php';
$id = 0;

if ( isset($_GET['id']) && array_key_exists($_GET['id'], $articles) )
{
    $id = $_GET['id'];
}

?>
<main>
    <aside>
        <img class="pub" src="img/solde.jpg" alt="pub_solde">
        <div class="aside">
            <ul>
                <li>autre article</li>
                <li>autre article</li>
                <li>autre article</li>
            </ul>
            <ul>
                <li>liste des catégories</li>
                <li>liste des catégories</li>
                <li>liste des catégories</li>
            </ul>
            <p>Vélo pour tous</p>
            <p>50 rue du code</p>
            <p>69000 LYON</p>
        </div>
    </aside>
    <section>
        <div class="background">
        
            <?= '<img class="backgroundImg" src="img/'.$articles[$id]['file'].'" alt="vélo">';?>
            
        </div>
        <div class="detail">
            <p>Auteur: Nicolas /</p>
            <p>Catégorie: Nom du velo /</p>
            <p>Commentaires: 4</p>
        </div>
        <div class="content">
            <p>Contenu de l'article</p> 
        </div>
    </section>
</main>