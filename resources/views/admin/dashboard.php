
<?php layout('head', get_defined_vars()); ?>

<?php layout('navbar', get_defined_vars()) ?>
<?php
use App\Models\Post;

$display = 'none';
$msg = '';
if(isset($_POST['submit'])):
    $title = $_POST['title'] ?? "";
    $post = $_POST['post'] ?? "";

    $posts = new Post();
    $query = $posts->newPost((object) [
        'title' => $title,
        'post' =>   $post 
    ]);
    
    $display = 'block';
    $msg = ($query) ? 'Success' : 'Failed';
endif;

?>
<div class="container">
<div class="row mTop">
<form action="<?= __url('./admin/dashboard/add-post'); ?>" method="POST">
    <input type="text" class="form-control" name="title" placeholder="Title"/><br>
    <input type="text" class="form-control" name="post" placeholder="Post"/><br>
    <br>
    <input type="submit" name="submit" class="btn btn-success" value="upload" />
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

