<?php 

    session_start();
    
    $page = 'home';
    if(isset($_GET['page']) && !empty($_GET['page']))
    {
        $page = $_GET['page'];
    }
   
    include 'header.php';
    include $page.'.php';
    include 'footer.php';

