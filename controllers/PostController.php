<?php
class PostController
{
  public function getPost(){
    require_once('model/PostModel.php');
    $postModel = new PostModel();
    $postrecord = $postModel->getPost();
    require_once('views/PostView.php');
    $postView = new PostView();
    $postView->showAllPost($postrecord);
  }

  public function deletePost($id){
    require_once('model/PostModel.php');
    $postModel = new PostModel();
    $postModel->deletePost($id);
  }

  public function addPost(){
    require_once('views/PostView.php');
    $postView = new PostView();
    $postView->addformPost();
  }

  public function createPost(){
    $title = $_POST['title'];
    $images = $_POST['images'];
    $statuss = $_POST['statuss'];
    $create_at = $_POST['create_at'];
    $descriptions = $_POST['descriptions'];
    $post = array(
        'title' => $title,
        'images' => $images,
        'statuss' => $statuss,
        'create_at'=> $create_at,
        'descriptions'=> $descriptions,
    );
    require_once('model/PostModel.php');
    $postModel = new PostModel();
    $postModel->addPost($post);
  }
}
?>