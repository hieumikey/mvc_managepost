<?php
class PostController
{
  public function getPost(){
    require_once('model/PostModel.php');
    $postModel = new PostModel();
    $postrecord = $postModel->getPost();
    // print_r(count($postrecord));
    // print_r($postrecord[0]['id']);
    require_once('views/PostView.php');
    $postView = new PostView();
    $postView->showAllPost($postrecord);
  }
}
?>