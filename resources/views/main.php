<?php layout('head', get_defined_vars()); ?>

<?php layout('navbar', get_defined_vars()) ?>
<?php
    use App\Models\Post;

    $id = (int) ($id ?? 0);
?>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url(<?= __file(IMAGE.'home-bg.jpg'); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <hr class="small">
                        <span class="subheading">A Clean Blog Theme by Start Bootstrap <?= $id; ?></span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <?php 
                if(!$show){
                $posts = Post::findAll('ASC'); 
                foreach($posts as $post){
            
            ?>
                <div class="post-preview">
                    <a href="<?= __url('./main/'. $post->id) ?> ">
                        <h2 class="post-title">
                            <?= $post->title; ?>
                        </h2>
                        <h3 class="post-subtitle">
                        <?= $post->post; ?>
                        </h3>
                    </a>
                    <p class="post-meta"><?= date($post->date); ?></p>
                </div>
                <hr>
            <?php
                 }
                }else{
                    $posts = Post::findWhere("id", $id); 
                    foreach($posts as $post){
              ?>
                     <div class="post-preview">
                    <a href="./main/".<?= $post->id; ?>>
                        <h2 class="post-title">
                            <?= $post->title; ?>
                        </h2>
                        <h3 class="post-subtitle">
                        <?= $post->post; ?>
                        </h3>
                    </a>
                    <p class="post-meta"><?= date($post->date); ?></p>
                </div>
                <hr>
            <?php 
                } 
            }   
            ?>
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

    <?php layout('footer', get_defined_vars()); ?>

