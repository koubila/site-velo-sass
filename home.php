



<?php 
// include 'header.php';
require 'data_articles.php';
$id = 0;

if ( isset($_GET['id']) && array_key_exists($_GET['id'], $articles) )
{
    $id = $_GET['id'];
}
// var_dump($articles[$id],$articles[0]['file']);
$page='article';
?>
    <div class="container">
        <main>
            <?php for ($i = 0 ; $i < count($articles); $i++)
            {
                // var_dump($articles[$i]['file']);
                echo '<div class="card-'.($i+1).'" >';
                echo '<a href="?page='.$page.'&id='.$i.'" class="image">';
                echo '<img src="img/'.$articles[$i]['file'].'" alt="vélo">';
                    echo '<h2>'.$articles[$i]['nom'].'</h2>';
                    echo '<p>'.$articles[$i]['description'].'</p>';
                 echo '</a>';
                echo '</div>';

            } ?>
        
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
        </main>
        </div>
