<?php
class PostView{
    public function showAllPost($posts){
        require_once('templates/view-post.php');
    }
    public function addformPost(){
        require_once('templates/addpost.php');
    }

    public function showPost($post){
        require_once('templates/show-post.php');
    }

    public function editformPost($post){
        require_once('templates/edit-form.php');
    }
}
?>