<?php

require('model.php');

function listposts(){

    $posts = getPosts();

require('listPostsView.php');

}

function post(){
    $post = getPost($_GET['id']);
    $comments = getComments($_GET['id']);

    require('postView.php');
}