<?php

use App\Models\Post;

layout('head', get_defined_vars());
layout('navbar', get_defined_vars());

?>
    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
        
            <?php
                    // $posts = Post::findWhere("id", $id); 
                    // $post = Post::findByColumn("id", $id); 
                    $post = Post::findById($id); 
              ?>
                     <div class="post-preview">
                    <a href="./admin/post/".<?= $post->id; ?>>
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

