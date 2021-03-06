<?php

use App\Models\Post;

layout('head', get_defined_vars());
layout('navbar', get_defined_vars());

$display = 'none';
$msg = '';
if(isset($_POST['submit'])):
    $title = $_POST['title'] ?? "";
    $post = $_POST['post'] ?? "";

    $posts = new Post();
    $query = $posts->updatePost((object) [
        'id' => $_POST['post_id'],
        'title' => $title,
        'post' =>   $post 
    ]);
    
    $display = 'block';
    $msg = ($query) ? 'Success' : 'Failed';
endif;
?>
<div class="container">
<div class="row mTop">
    <h3>Edit Post</h3>
    <?php
        $post =  Post::findById($id);
    ?>
<form action="<?= __url('./admin/edit-post/'.$post->id); ?>" method="POST">
    <input type="text" class="form-control" name="title" placeholder="Title" value="<?= $post->title; ?>"/><br>
    <input type="text" class="form-control" name="post" placeholder="Post" value="<?= $post->post; ?>"/><br>
    <input type="hidden" value="<?= $post->id; ?>" name="post_id" />
    <br>
    <input type="submit" name="submit" class="btn btn-success" value="Update" />
</form>

</div>

<div class="row mTop">
<div class="col-sm-2">
<div class="alert alert-success" style="text-align: center;display: <?= $display ?>">
    <?= $msg ?>
</div>
</div>
</div>
</div>

