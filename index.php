<?php


require('controller.php');

if (isset($_GET['action'])){
    if($_GET['action'] == 'listPosts'){
        listposts();
    }
    elseif($_GET['action'] == 'post'){

        if($_GET['id'] && $_GET['id'] > 0){
            post();
    }
        else{
        echo 'ERREUR : aucun identifiant de billet envoyé';
        }
    }

}
else{
    listposts();
}
